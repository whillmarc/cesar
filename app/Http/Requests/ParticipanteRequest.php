<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipanteRequest extends FormRequest
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
            'primer_nombre' => 'required|min:1|max:25|regex:/^[a-z]+$/i',//
            'segundo_nombre' => 'required|min:1|max:25|regex:/^[a-z]+$/i',///
            'primer_apellido' => 'required|min:1|max:25|regex:/^[a-z]+$/i',//
            'segundo_apellido' => 'required|min:1|max:25|regex:/^[a-z]+$/i',//
            'nacionalidad' => 'required', //
            'ced' => 'required|min:3|max:8|regex:/^[0-9]+$/i',//
            'fecha_nacimiento' => 'required', //
            'lugar_nacimiento' => 'required',//
            'estado_civil' => 'required',//
            'sexo' => 'required',//
            'parroquia' => 'required',//
            'avenida' => 'required', //
            'casa' => 'required',//
            'numero_casa' => 'required|regex:/^[0-9]+$/i', //
            'telefono_local' => 'required|regex:/^[0-9]+$/i', //
            'telefono_movil1' => 'required|regex:/^[0-9]+$/i', //
            'telefono_movil2' => 'required|regex:/^[0-9]+$/i', //
            'telefono_familiar' => 'required|regex:/^[0-9]+$/i', //
            'otro_telefono' => 'required|regex:/^[0-9]+$/i', //
            'correo' => 'required|string|email|max:255',//
            'hijos' => 'required|regex:/^[0-9]+$/i',//
            'persona_cargo' => 'required|regex:/^[0-9]+$/i',//
            'nivel_instruccion' => 'required',
            'situacion_actual_estudio' => 'required',
            'nivel_instruccion' => 'required',
            'nivel_instruccion' => 'required',
        ];
    }

    public function messages(){

    return [
        'primer_nombre.required' => 'El nombre es obligatorio',//
        'primer_nombre.min' => 'El nombre debe contener minimo 3 letras',//
        'primer_nombre.max' => 'El nombre debe tener maximo 25 letras',//
        'primer_nombre.regex' => 'El primer nombre solo acepta letras',//

        'segundo_nombre.required' => 'El nombre es obligatorio',//
        'segundo_nombre.min' => 'El nombre debe contener minimo 3 letras',//
        'segundo_nombre.max' => 'El nombre debe tener maximo 25 letras',//
        'segundo_nombre.regex' => 'El segundo nombre solo acepta letras',//

        'primer_apellido.required' => 'El apellido es obligatorio',//
        'primer_apellido.min' => 'El apellido debe contener minimo 3 letras',//
        'primer_apellido.max' => 'El apellido debe tener maximo 25 letras',//
        'primer_apellido.regex' => 'El primer apellido solo acepta letras',///

        'segundo_apellido.required' => 'El apellido es obligatorio',//
        'segundo_apellido.min' => 'El apellido debe contener minimo 3 letras',//
        'segundo_apellido.max' => 'El apellido debe tener maximo 25 letras',//
        'segundo_apellido.regex' => 'El segundo apellido solo acepta letras',//

        'nacionalidad.required' => 'La nacionalidad es obligatoria',//

        'ced.required' => 'El numero de cedula es obligatorio',//
        'ced.min' => 'El numero de cedula debe tener minimo 3 numeros',//
        'ced.max' => 'El numero de cedula debe tener un maximo de 8 numeros',//
        'ced.unique' => 'El numero de cedula ya ha sido registrado por otra persona',//
        'ced.regex' => 'La cedula solo acepta valores numericos',//

        
        'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria',//

        'lugar_nacimiento.required' => 'El lugar de nacimiento es obligatorio',//

        'estado_civil.required' => 'El estado civil es obligatorio',//

        'sexo.required' => 'El sexo es obligatorio',//

        'parroquia.required' => 'La parroquia es obligatoria',//

        'avenida.required' => 'La avenida es obligatoria', //

        'casa.required' => 'El tipo de casa o apartamento es obligatorio',//

        'numero_casa.required' => 'El numero de casa es requerido',//
        'numero_casa.regex' => 'Solo se aceptan numeros',//

        'telefono_local.required' => 'El numero de telefono local es obligatorio',//
        'telefono_local.digits' => 'El numero de telefono local debe contener 11 digitos',//
        'telefono_local.regex' => 'El telefono local solo acepta numeros',//

        'telefono_movil1.required' => 'El numero de telefono movil 1 es obligatorio',//
        'telefono_movil1.digits' => 'El numero de telefono del movil 1 debe contener 11 digitos',//
        'telefono_movil1.regex' => 'El telefono movil 1 solo acepta numeros',//

        'telefono_movil2.required' => 'El numero de telefono movil 2 local es obligatorio',//
        'telefono_movil2.digits' => 'El numero de telefono del movil 2 debe contener 11 digitos',//
        'telefono_movil2.regex' => 'El telefono movil 2 solo acepta numeros',//

        'telefono_familiar.required' => 'El numero de telefono familiar es obligatorio',//
        'telefono_familiar.digits' => 'El numero de telefono del movil 3 debe contener 11 digitos',//
        'telefono_familiar.regex' => 'El telefono familiar solo acepta numeros',//
         
        'otro_telefono.required' => 'El numero de telefono opcional es obligatorio',//
        'otro_telefono.digits' => 'El numero de telefono opcional debe contener 11 digitos',//
        'otro_telefono.regex' => 'El telefonon opcional solo acepta numeros',//
         
        'correo.required' => 'El correo es obligatorio',//
        'correo.string' => 'El correo debe contener entre letras, numeros y algunos caracteres especiales',//
        'correo.email' => 'El formato de correo introducido es invalido',//
        'correo.max:255' => 'El correo debe tener una longitud maxima de 255 caracteres',//
        'correo.unique' => 'El correo ya ha sido registrado por esa persona',//


            'hijos.required' => 'El numero de hijos es obligatorio',//
            'hijos.regex' => 'El numero de hijos acepta solo valores numericos',//
             
            'persona_cargo.required' => 'Las personas a cargo son obligatorias',//
            'persona_cargo.regex' => 'Las personas a cargo solo aceptan numeros',//

            'nivel_instruccion.required' => 'El nivel de instruccion obligatorio',//
            'situacion_actual_estudio.required' => 'La situacion actual de estudio es obligatoria',//
            'situacion_laboral_inicial.required' => 'La situacion laboral inicial es obligatoria',//
            'experiencia_laboral.required' => 'La experiencia laboral es  obligatoria'//

   ];

      }





}
