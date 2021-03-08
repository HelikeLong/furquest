<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

/**
 * Class UserRequest
 * @package App\Http\Requests
 *
 * @property string $social_name
 * @property string $name
 * @property string $species
 * @property UploadedFile $photo
 * @property string $bio
 * @property string $document
 * @property string $document_type
 * @property string $email
 * @property string $password
 */
class UserRequest extends FormRequest
{
    protected $rules = [
        'social_name' => 'string|nullable',
        'name' => 'string|nullable',
        'species' => 'string|nullable',
        'photo' => 'nullable',
        'bio' => 'string|nullable',
        'document' => 'string|nullable',
        'document_type' => 'string|nullable',
        'email' => 'email',
        'password' => 'password'
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->getMethod()) {
            case 'PUT':
                $this->put();
                break;
            case 'PATCH':
                $this->patch();
                break;
        }

        return $this->rules;
    }

    /**
     * Method used to update user info
     */
    private function put() {
        $this->rules['name'] .= '|required';
    }

    /**
     * Method used to update user picture
     */
    private function patch() {
        $this->rules['photo'] .= '|required';
    }
}
