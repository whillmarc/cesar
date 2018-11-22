<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidaRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:25|regex:/^[a-zA-Z\ ]+$/i'
              'monto' => 'required|regex:/^[0-9]+$/i'//
        ];
    }

       public function messages(){

    return [
          'nombre.required' => 'El nombre es obligatorio',
          'nombre.min' => 'El nombre debe contener minimo 3 letras',
          'nombre.max' => 'El nombre debe tener maximo 25 letras',
          'nombre.regex' => 'El nombre solo acepta letras',

          'monto.required' => 'El monto es obligatorio',//
          'monto.regex' => 'El monto solo acepta numeros'//
   ];

      }




}
