<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class UploadService
 * @package App\Services
 */
class UploadService
{
    public $Uploaded;
    private $Name;
    private $Width;
    private $Folder;
    private static $BaseDir;

    /**
     * UploadService constructor.
     */
    public function __construct()
    {
        self::$BaseDir = env('SIMBOLIC_LINK', 'storage');
    }

    /**
     * @param UploadedFile|UploadedFile[] $Image
     * @param $Name
     * @param $Width
     * @param $Folder
     * @param array $thumbnailSizes
     * @param bool $removeOld
     * @return bool
     */
    public function Image($Image, $Name, $Width, $Folder, $thumbnailSizes = null, $removeOld = false)
    {
        $this->Name = $Name;
        $this->Width = $Width;
        $this->Folder = $Folder;
        $Image = is_array($Image) ? $Image : [$Image];
        foreach ($Image as $File) {
            $this->setFileName($File, $removeOld);
        }

        // Generates thumbnails to the given widthes
        if ($thumbnailSizes) {
            foreach ($thumbnailSizes as $size) {
                $this->Image($Image, $Name, $size, $Folder.'/thumbnails/'.$size, null, $removeOld);
            }
        }
        return true;
    }

    /**
     * @param UploadedFile|UploadedFile[] $Image
     * @param $Name
     * @param $Folder
     * @param bool $removeOld
     * @return bool
     */
    public function base64($Image, $Name, $Folder, $removeOld = false)
    {
        $this->Name = $Name;
        $this->Folder = $Folder;
        $Image = is_array($Image) ? $Image : [$Image];
        foreach ($Image as $File) {
            $this->setFileName($File, $removeOld, false, true);
        }

        return true;
    }

    /**
     * Checks if the file name is in use, if it is, creates a new hashed name
     * @param UploadedFile $File
     * @param bool $removeOld
     * @param bool $flagSubFolder
     * @param $base64
     */
    private function setFileName($File, $removeOld = false,  $flagSubFolder = false, $base64 = false)
    {
        $SubFolder = '';
        $Name = Str::slug($this->Name);
        if ($flagSubFolder) {
            $SubFolder = $Name.'/';
        }
        $file_extesion = $base64 ? 'png' : $File->extension();
        $FileName = "{$Name}" . ".{$file_extesion}";
        if (Storage::disk('public')->exists($this->Folder . '/' . $SubFolder . $FileName)) {
            if ($removeOld) {
                Storage::disk('public')->delete($this->Folder . '/' . $SubFolder . $FileName);
            } else {
                $FileName = "{$Name}-" . substr(md5(bcrypt($Name)), 0, 5) . ".{$file_extesion}";
            }
        }
        if ($base64) {
            $this->uploadImageBase64($File, $this->Folder . '/' . $SubFolder, $FileName);
        } else {
            $this->UploadImage($File, $SubFolder . $FileName);
        }
    }

    /**
     * Resizes and uploads the images
     * @param UploadedFile $File
     * @param $FileName
     * @return bool
     */
    private function UploadImage($File, $FileName)
    {
        if (!$Upload = $File->storeAs($this->Folder, $FileName, 'public')) {
            return false;
        } else {
            $type = getimagesize($File->path());
            $type = $type['mime'];

            switch ($type):
                case 'image/jpg':
                case 'image/jpeg':
                case 'image/pjpeg':
                    $imagem = imagecreatefromjpeg($File->path());
                    break;
                case 'image/png':
                case 'image/x-png':
                    $imagem = imagecreatefrompng($File->path());
                    break;
            endswitch;

            if (isset($imagem)) {
                $x = imagesx($imagem);
                $y = imagesy($imagem);
                $ImageX = ($this->Width < $x ? $this->Width : $x);
                $ImageH = ($ImageX * $y) / $x;

                $NewImage = imagecreatetruecolor($ImageX, $ImageH);
                imagealphablending($NewImage, false);
                imagesavealpha($NewImage, true);
                imagecopyresampled($NewImage, $imagem, 0, 0, 0, 0, $ImageX, $ImageH, $x, $y);

                switch ($type):
                    case 'image/jpg':
                    case 'image/jpeg':
                    case 'image/pjpeg':
                        imagejpeg($NewImage, self::$BaseDir . '/' . $Upload);
                        break;
                    case 'image/png':
                    case 'image/x-png':
                        imagepng($NewImage, self::$BaseDir . '/' . $Upload);
                        break;
                endswitch;

                if (!$NewImage) {
                    Storage::disk('public')->delete($Upload);
                    flash('Algumas imagens não puderam ser enviadas, verifique.')->error();
                }
                $this->Uploaded[] = $Upload;
                imagedestroy($imagem);
                imagedestroy($NewImage);
            }
        }
    }

    public function uploadImageBase64($File, $path, $FileName)
    {
        $bin = base64_decode($File);
        $im = imageCreateFromString($bin);

        if (!$im) {
            flash('Base64 value is not a valid image.')->error();
        }

        $path = Storage::disk('public')->getDriver()->getAdapter()->getPathPrefix() . $path;
        if (!imagepng($im, $path.$FileName, 0)) {
            flash('Algumas imagens não puderam ser enviadas, verifique.')->error();
        }

        $this->Uploaded[] = $FileName;
        imagedestroy($im);
    }

    /**
     * Method to remove the uploaded images in case of error
     */
    public function deleteIfError()
    {
        foreach ($this->Uploaded as $upload) {
            Storage::disk('public')->delete($upload);
        }
    }
}
