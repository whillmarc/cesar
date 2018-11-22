<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ":attribute debe ser aceptado.",
    'active_url'           => ":attribute no es una URL válida.",
    'after'                => ":attribute debe ser una fecha posterior a :date.",
    'alpha'                => ":attribute solo debe contener letras.",
    'alpha_dash'           => ":attribute solo debe contener letras, números y guiones.",
    'alpha_num'            => ":attribute solo debe contener letras y números.",
    'array'                => ":attribute debe ser un conjunto.",
    'before'               => ":attribute debe ser una fecha anterior a :date.",
    'between'              => [
        'numeric' => ":attribute tiene que estar entre :min - :max.",
        'file'    => ":attribute debe poseer entre :min - :max kilobytes.",
        'string'  => ":attribute tiene que tener entre :min - :max caracteres.",
        'array'   => ":attribute tiene que tener entre :min - :max items.",
    ],
    'boolean'              => "El campo :attribute debe tener un valor verdadero o falso.",
    'confirmed'            => "La confirmación de :attribute no coincide.",
    'date'                 => ":attribute no es una fecha valida.",
    'date_format'          => ":attribute no corresponde al formato:format.",
    'different'            => ":attribute y :other deben ser diferente.",
    'digits'               => ":attribute debe tener :digits digitos.",
    'digits_between'       => ":attribute debe tener entre :min y :max digitos.",
    'email'                => ":attribute no es un correo valido.",
    'exists'               => ":attribute es invalido.",
    'filled'               => "El campo :attribute es obligatorio.",
    'image'                => ":attribute debe ser una imagén.",
    'in'                   => ":attribute es invalio.",
    'integer'              => ":attribute debe ser un número entero.",
    'ip'                   => ":attribute debe ser una dirección IP válida.",
    'json'                 => ':attribute debe ser un una cadena JSON valida.',
    'max'                  => [
        'numeric' => ":attribute no debe ser mayor a :max.",
        'file'    => "The :attribute no debe ser mayor que :max kilobytes.",
        'string'  => ":attribute no debe ser mayor que :max caracteres.",
        'array'   => ":attribute no debe tener mas de :max elementos.",
    ],
    'mimes'                => ":attribute debe ser un archivo con formato: :values.",
    'min'                  => [
        'numeric' => 'El tamaño de :attribute debe ser de al menos :min.',
        'file'    => 'El tamaño de :attribute debe ser de al menos :min kilobytes.',
        'string'  => ":attribute debe tener al menos :min caracteres.",
        'array'   => ":attribute debe tener al menos :min elementos.",
    ],
    'not_in'               => ":attribute es invalido.",
    'numeric'              => ":attribute debe ser númerico.",
    'regex'                => "El formato de :attribute es invalido.",
    'required'             => "El campo :attribute es obligatorio.",
    'required_if'          => "El campo :attribute es obligatorio cuando :other es :value.",
    'required_unless'      => "El campo :attribute es obligatorio cuando :other está en :values.",
    'required_with'        => "El campo :attribute es obligatorio :values está presente.",
    'required_with_all'    => "El campo :attribute es obligatorio cuando :values está presente.",
    'required_without'     => "El campo :attribute es obligatorio cuando :values no está presente.",
    'required_without_all' => "El campo :attribute es obligatorio cuando ninguno de :values estén presentes.",
    'same'                 => ":attribute y :other deben coincidir.",
    'size'                 => [
        'numeric' => 'El tamaño de :attribute debe ser :size.',
        'file'    => "El tamaño de :attribute debe ser :size kilobytes.",
        'string'  => ":attribute debe contener :size caracteres.",
        'array'   => ":attribute debe contener :size elementos.",
    ],
    'timezone'             => "El :attribute debe ser una zona valida.",
    'unique'               => ":attribute ya ha sido registrado.",
    'url'                  => "El formato:attribute es invalido.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
