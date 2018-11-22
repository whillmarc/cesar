<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CohorteRequest extends FormRequest
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
            'proyecto' => 'required', //
            'numero' => 'required|regex:/^[0-9]+$/i',//
            'fecha_inicio' => 'required',//
            'fecha_culminacion' => 'required',//
            'mes_inicio' => 'required',//
            'mes_final' => 'required', //
            'planillas_recibidas' => 'required|regex:/^[0-9]+$/i',  //
            'personas_entrevistadas' => 'required|regex:/^[0-9]+$/i', //
            'personas_seleccionadas' => 'required|regex:/^[0-9]+$/i',//
            'localidad' => 'required' //
        ];
    
    }

    public function messages(){

    return [
        'proyecto.required' => 'El proyecto es obligatorio.', //
        'numero.required' => 'El numero es obligatorio',//
        'numero.regex' => 'El numero solo acepta valores numericos',//
        'fecha_inicio.required' => 'La fecha  de inicio es obligatoria',//
        'fecha_culminacion.required' => 'La fecha de culminacion es obligatoria',//
        'mes_inicio.required' => 'El mes de inicio es obligatorio', //
        'mes_final.required' => 'El mes de culminacion es obligatorio', //
        'planillas_recibidas.required' => 'El numero de planillas recibidas es obligatorio', //
        'planillas_recibidas.regex' => 'Las planillas recibidas solo aceptan numeros', // 
        'personas_entrevistadas.required' => 'El numero de personas entrevistadas es obligatorio', //
        'personas_entrevistadas.regex' => 'Las personas entrevistadas solo aceptan numeros', //
        'personas_seleccionadas.required' => 'El numero de personas seleccionadas es obligatorio',//
        'personas_seleccionadas.regex' => 'Las personas seleccionadas aceptan numeros',//
        'localidad.required' => 'La localidad es obligatoria'//
   ];

      }
   

}
