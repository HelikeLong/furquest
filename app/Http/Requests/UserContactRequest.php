<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

/**
 * Class UserContactRequest
 * @package App\Http\Requests
 *
 * @property integer $contacts_types_id
 * @property string $value
 */
class UserContactRequest extends FormRequest
{
    protected $rules = [
        'id' => 'array|nullable',
        'contacts_types_id' => 'array|nullable',
        'value' => 'array|nullable'
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
            case 'POST':
            case 'PUT':
                $this->rules['id'] .= '|required';
                $this->rules['contacts_types_id'] .= '|required';
                $this->rules['value'] .= '|required';
                break;
        }

        return $this->rules;
    }
}
