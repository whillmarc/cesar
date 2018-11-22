<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
            'nombre' => 'required|max:60',
            'fecha_i' => 'required',//
            'fecha_f' => 'required',//
            'objetivo_p' => 'required|string',//
            'objetivo_s' => 'required|string',//
            'presupuesto' => 'required|regex:/^[0-9]+$/i',//
        ];
    }



  public function messages(){

    return [
         'nombre.required' => 'El nombre es obligatorio',  
         'nombre.max' => 'El nombre debe tener maximo 60 letras',  

          'fecha_i.required' => 'La fecha  de inicio es obligatoria',//

          'fecha_f.required' => 'La fecha  de culminacion es obligatoria',//
         
           'objetivo_p.required' => 'El objetivo principal es  obligatorio',//

           'objetivo_s.required' => 'El objetivo secundario es obligatorio',//

           'presupuesto.required' => 'El presupuesto es obligatorio',//
           'presupuesto.regex' => 'El presupuesto solo acepta numeros',//

          ];

      }


}
