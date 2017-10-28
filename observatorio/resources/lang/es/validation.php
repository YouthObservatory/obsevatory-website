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

    'accepted'             => ':attribute debe ser aceptado.',
    'active_url'           => ':attribute no es una direcci�n URL v�lida.',
    'after'                => ':attribute debe ser despu�s de la fecha :date.',
    'alpha'                => ':attribute solo puede contener ciertas letras.',
    'alpha_dash'           => ':attribute solo puede contener letras, numeros y guiones.',
    'alpha_num'            => ':attribute solo debe contener letras y n�meros.',
    'array'                => ':attribute debe ser un conjunto.',
    'before'               => ':attribute debe ser una fecha despu�s del :date.',
    'between'              => [
        'numeric' => ':attribute debe estar entre :min y :max.',
        'file'    => ':attribute debe tener entre :min y :max kilobytes.',
        'string'  => ':attribute debe tener entre :min y :max caracteres.',
        'array'   => ':attribute debe tener entre :min y :max. elementos',
    ],
    'boolean'              => 'El campo de :attribute debe ser verdadero o falso.',
    'confirmed'            => 'La confirmaci�n de :attribute no coincide.',
    'date'                 => ':attribute no es una fecha v�lida.',
    'date_format'          => ':attribute no coincide con el :format.',
    'different'            => ':attribute y :other deben ser diferentes.',
    'digits'               => ':attribute debe tener :digits digitos.',
    'digits_between'       => ':attribute debe tener entre :min y :max digitos.',
    'email'                => ':attribute debe ser una direcci�n de e-mail v�lida.',
    'exists'               => ':attribute seleccionado es inv�lido.',
    'filled'               => 'El campo de :attribute es obligatorio.',
    'image'                => ':attribute debe ser una imagen.',
    'in'                   => ':attribute seleccionado es invalido.',
    'integer'              => ':attribute debe ser un entero.',
    'ip'                   => ':attribute una direcci�n IP v�lida.',
    'json'                 => ':attribute debe ser un JSON string v�lido.',
    'max'                  => [
        'numeric' => ':attribute no puede ser mayor a :max.',
        'file'    => ':attribute no puede ser mayor a :max kilobytes.',
        'string'  => ':attribute no puede tener m�s de :max caracteres',
        'array'   => ':attribute no puede tener m�s de :max elementos.',
    ],
    'mimes'                => ':attribute debe ser un archivo tipo: :values.',
    'min'                  => [
        'numeric' => ':attribute debe tener por lo menos :min.',
        'file'    => ':attribute debe tener por lo menos :min kilobytes.',
        'string'  => ':attribute debe tener por lo menos:min caracteres.',
        'array'   => ':attribute debe tener por lo menos :min elementos.',
    ],
    'not_in'               => ':attribute seleccionado es inv�lido.',
    'numeric'              => ':attribute debe ser un n�mero.',
    'regex'                => 'El formato de :attribute es inv�lido.',
    'required'             => 'El campo :attribute es obligatorio.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido salvo que :other sea :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values se encuentra presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values se encuentra presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no se encuentra presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de :values se encuentra presente.',
    'same'                 => ':attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => ':attribute debe ser :size.',
        'file'    => ':attribute debe pesar :size kilobytes.',
        'string'  => ':attribute debe tener :size caracteres.',
        'array'   => ':attribute debe contenter :size elementos.',
    ],
    'string'               => ':attribute debe ser una cadena.',
    'timezone'             => ':attribute debe ser una zona v�lida.',
    'unique'               => ':attribute ha sido tomado.',
    'url'                  => 'El formato de :attribute es inv�lido.',

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
