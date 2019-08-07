<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

/**
 * Class UserQuestStepRequest
 * @package App\Http\Requests
 *
 * @property string $qrcode
 */
class UserQuestStepRequest extends FormRequest
{
    protected $rules = [
        'qrcode' => 'string|required'
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
        return $this->rules;
    }
}
