<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectorRequest extends FormRequest
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
            'nombre' => 'min:3|max:25|regex:/^[a-zA-Z\ ]+$/i',//
            'descripcion' => 'required|string',//

        ];
    }

    public function messages(){

    return [      
        'nombre.min' => 'El nombre debe contener minimo 3 letras', 
        'nombre.max' => 'El nombre debe tener maximo 25 letras', 
        'nombre.regex' => 'El nombre solo acepta letras',        
        'descripcion.required' => 'La descripcion es obligatorio.' 
   ];

      }



}
