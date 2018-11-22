<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:60',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ];


    }

    public function messages(){

    return [
        'name.required' => 'El nombre es obligatorio.',
        'email.required|unique:users' => 'El correo es obligatorio y debe ser unico',
        'password.required|min:6' => 'La contraseña es requerida y minimo debe contener 6 caracteres'
    ];
      }

}
