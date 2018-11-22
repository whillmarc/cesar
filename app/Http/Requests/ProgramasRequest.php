<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramasRequest extends FormRequest
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
        
        'nombre' => 'required',
        'descripcion' => 'required',
        'id_sector' => 'required'
        ];
    }


public function messages(){

    return [
        'nombre.required' => 'El nombre es obligatorio',
    
        'descripcion.required' => 'La descripcion es obligatoria',

        'id_sector.required' => 'El sector es obligatorio'

   ];

      }

}
