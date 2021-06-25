<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
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
        return [    
            'name'  => 'required|alpha|max:20',
            'phone' => 'required|digits_between:6,14'
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Укажите имя',
            'name.alpha'            => 'Имя должно состоять только из букв',
            'name.max'              => 'Имя должно содержать не более 20 символов',
            'phone.required'        => 'Укажите номер телефона',
            'phone.digits_between'  => 'Номер телефона должен содержать от 6 до 14 цифр'
        ];
    }
}
