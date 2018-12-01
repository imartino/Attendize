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
    'active_url'           => ':attribute no es una URL válida.',
    'after'                => ':attribute debe ser una fecha después de :date.',
    'alpha'                => ':attribute solo puede contener letras.',
    'alpha_dash'           => ':attribute solo puede contener letras, numeros, y guiones.',
    'alpha_num'            => ':attribute solo puede contener letras y numeros.',
    'array'                => ':attribute debe ser una matriz.',
    'before'               => ':attribute debe ser una fecha antes de :date.',
    'between'              => [
        'numeric' => ':attribute debe estar entre :min y :max.',
        'file'    => ':attribute debe estar entre :min y :max kilobytes.',
        'string'  => ':attribute debe estar entre :min y :max caracteres.',
        'array'   => ':attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => ':attribute el campo debe ser verdadero o falso.',
    'confirmed'            => ':attribute la confirmación no coincide.',
    'date'                 => ':attribute no es una fecha válida.',
    'date_format'          => ':attribute no coincide con el formato :format.',
    'different'            => ':attribute y :other debe ser diferente.',
    'digits'               => ':attribute debe ser :digits dígitos.',
    'digits_between'       => ':attribute debe ser entre :min y :max dígitos.',
    'email'                => ':attribute debe ser una dirección de correo electrónico válida.',
    'filled'               => ':attribute Se requiere campo.',
    'exists'               => ':attribute no es válido.',
    'image'                => ':attribute debe ser una imagen.',
    'in'                   => ':attribute no es válido.',
    'integer'              => ':attribute debe ser un número entero.',
    'ip'                   => ':attribute debe ser una IP válida.',
    'max'                  => [
        'numeric' => ':attribute no puede ser mayor que :max.',
        'file'    => ':attribute no puede ser mayor que :max kilobytes.',
        'string'  => ':attribute no puede ser mayor que :max caracteres.',
        'array'   => ':attribute no puede tener más de :max items.',
    ],
    'mimes'                => ':attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => ':attribute debe ser por lo menos de :min.',
        'file'    => ':attribute debe ser por lo menos de :min kilobytes.',
        'string'  => ':attribute debe ser por lo menos de :min caracteres.',
        'array'   => ':attribute debe tener por lo menos :min items.',
    ],
    'not_in'               => ':attribute no es válido.',
    'numeric'              => ':attribute debe ser a number.',
    'regex'                => ':attribute formato no es válido.',
    'required'             => ':attribute es requerido',
    'required_if'          => ':attribute es requerido cuando :other es :value.',
    'required_with'        => ':attribute es requerido cuando :values está presente.',
    'required_with_all'    => ':attribute es requerido cuando :values está presente.',
    'required_without'     => ':attribute es requerido cuando :values no está presente.',
    'required_without_all' => ':attribute es requerido cuando ninguno de :values está presente.',
    'same'                 => ':attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => ':attribute debe ser :size.',
        'file'    => ':attribute debe ser :size kilobytes.',
        'string'  => ':attribute debe ser :size caracteres.',
        'array'   => ':attribute debe contener :size items.',
    ],
    'unique'               => ':attribute has already been taken.',
    'url'                  => ':attribute el formato no es válido.',
    'timezone'             => ':attribute debe ser una zona valida.',

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
        'terms_agreed' => [
            'required' => 'Por favor acepte nuestros Términos de Servicio.'
        ]
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
