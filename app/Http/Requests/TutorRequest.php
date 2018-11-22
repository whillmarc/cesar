<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TutorRequest extends FormRequest
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
            'primer_nombre' => 'required|min:3|max:25|regex:/^[a-z]+$/i',//
            'segundo_nombre' => 'required|min:3|max:25|regex:/^[a-z]+$/i',///
            'primer_apellido' => 'required|min:3|max:25|regex:/^[a-z]+$/i',//
            'segundo_apellido' => 'required|min:3|max:25|regex:/^[a-z]+$/i',//
            'cedula' => 'required|min:3|max:8|regex:/^[0-9]+$/i',//
            'empresa' => 'required',//
            'cargo' => 'required',//
            'telefono_local' => 'required|digits:11|regex:/^[0-9]+$/i', //
            'telefono_movil' => 'required|digits:11|regex:/^[0-9]+$/i', //
            'telefono_oficina' => 'required|digits:11|regex:/^[0-9]+$/i', //
            'correo' => 'required|string|email|max:255',//

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

        'cedula.required' => 'El numero de cedula es obligatorio',//
        'cedula.min' => 'El numero de cedula debe tener minimo 3 numeros',//
        'cedula.max' => 'El numero de cedula debe tener un maximo de 8 numeros',//
        'cedula.unique' => 'El numero de cedula ya ha sido registrado por otra persona',//

        
        'empresa.required' => 'La fecha de nacimiento es obligatoria',//

        'cargo.required' => 'El lugar de nacimiento es obligatorio',//

        

        'telefono_local.required' => 'El numero de telefono local es obligatorio',//
        'telefono_local.digits' => 'El numero de telefono local debe contener 11 digitos',//
        'telefono_local.regex' => 'El telefono local solo acepta numeros',//

        'telefono_movil.required' => 'El numero de telefono movil es obligatorio',//
        'telefono_movil.digits' => 'El numero de telefono del movil debe contener 11 digitos',//
        'telefono_movil.regex' => 'El telefono movil solo acepta numeros',//

        'telefono_oficina.required' => 'El numero de telefono oficina es obligatorio',//
        'telefono_oficina.digits' => 'El numero de telefono oficina debe contener 11 digitos',//
        'telefono_oficina.regex' => 'El telefono de oficina solo acepta numeros',//

        'correo.required' => 'El correo es obligatorio',//
        'correo.string' => 'El correo debe contener entre letras, numeros y algunos caracteres especiales',//
        'correo.email' => 'El formato de correo introducido es invalido',//
        'correo.max:255' => 'El correo debe tener una longitud maxima de 255 caracteres',//

   ];

      }


}
