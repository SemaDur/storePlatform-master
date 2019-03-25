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

    'accepted'             => ' :attribute mora biti prihvacen.',
    'active_url'           => ' :attribute nije validna URL.',
    'after'                => ' :attribute mora biti datum poslje :date.',
    'after_or_equal'       => ' :attribute must be a date after or equal to :date.',
    'alpha'                => ' :attribute moze samo sadrzavati slova.',
    'alpha_dash'           => ' :attribute moze samo sadrzavati slova, brojeve i crte.',
    'alpha_num'            => ' :attribute moze samo sadrzavati slova i brojeve.',
    'array'                => ' :attribute mora biti red.',
    'before'               => ' :attribute mora biti datum prije :date.',
    'before_or_equal'      => ' :attribute mora biti datum prije ili jednak :date.',
    'between'              => [
        'numeric' => ' :attribute mora biti izmedu :min i :max.',
        'file'    => ' :attribute mora biti izmedu :min i :max kilobytes.',
        'string'  => ' :attribute mora biti izmedu :min i :max karaktera.',
        'array'   => ' :attribute mojaru biti izmedu :min i :max artikala.',
    ],
    'boolean'              => ' :attribute polje mora biti true ili false.',
    'confirmed'            => ' :attribute konformacija ne odgovara.',
    'date'                 => ' :attribute nije validan datum.',
    'date_format'          => ' :attribute ne odgovara formatu :format.',
    'different'            => ' :attribute i :other moraju biti razliciti.',
    'digits'               => ' :attribute moraju biti :digits broj.',
    'digits_between'       => ' :attribute mora biti izmedu :min i :max brojeva.',
    'dimensions'           => ' :attribute dimenzije slike nisu validne.',
    'distinct'             => ' :attribute polje posjeduje duplikatnu vrijednost.',
    'email'                => ' :attribute mora biti validna email adresa.',
    'exists'               => ' izabrani :attribute je ne validan.',
    'file'                 => ' :attribute mora biti datoteka.',
    'filled'               => ' :attribute polje mora imati vrijednost.',
    'image'                => ' :attribute mora biti slika.',
    'in'                   => ' izabrani :attribute nije validan.',
    'in_array'             => ' :attribute polje ne postoji u :other.',
    'integer'              => ' :attribute mora biti integer.',
    'ip'                   => ' :attribute mora biti validna IP adresa.',
    'ipv4'                 => ' :attribute mora biti validna IPv4 adresa.',
    'ipv6'                 => ' :attribute mora biti validna IPv6 adresa.',
    'json'                 => ' :attribute mora biti validna JSON string.',
    'max'                  => [
        'numeric' => ' :attribute ne moze biti veci od :max.',
        'file'    => ' :attribute ne moze biti veci od :max kilobytes.',
        'string'  => ' :attribute ne moze biti veci od :max slova.',
        'array'   => ' :attribute ne moze imati vise od :max artikla.',
    ],
    'mimes'                => ' :attribute mora biti podatak tipa: :values.',
    'mimetypes'            => ' :attribute mora biti podatak tipa: :values.',
    'min'                  => [
        'numeric' => ' :attribute mora biti najmanje :min.',
        'file'    => ' :attribute mora biti najmanje :min kilobytes.',
        'string'  => ' :attribute mora biti najmanje :min characters.',
        'array'   => ' :attribute mora imati najmanje :min artikala.',
    ],
    'not_in'               => ' izabrani :attribute nije validan.',
    'not_regex'            => ' :attribute format nije validan.',
    'numeric'              => ' :attribute mora biti broj.',
    'present'              => ' :attribute polje mora postojati.',
    'regex'                => ' :attribute format nije validan.',
    'required'             => ' :attribute polje mora postojati.',
    'required_if'          => ' :attribute polje mora postojati kad :other je :value.',
    'required_unless'      => ' :attribute polje mora postojati ako :other je u :values.',
    'required_with'        => ' :attribute polje mora postojati kad :values je prisutan.',
    'required_with_all'    => ' :attribute polje mora postojati kad :values is prisutan.',
    'required_without'     => ' :attribute polje mora postojati kad :values nije prisutno.',
    'required_without_all' => ' :attribute polje mora postojati kad nijedna od :values je prisutna.',
    'same'                 => ' :attribute i :other moraju odgovarati.',
    'size'                 => [
        'numeric' => ' :attribute mora biti :size.',
        'file'    => ' :attribute mora biti :size kilobytes.',
        'string'  => ' :attribute mora biti :size slova.',
        'array'   => ' :attribute mora sadrzati :size artikla.',
    ],
    'string'               => ' :attribute mora biti string.',
    'timezone'             => ' :attribute mora biti validna zona.',
    'unique'               => ' :attribute je vec koriscen.',
    'uploaded'             => ' :attribute neuspjeh upload-a.',
    'url'                  => ' :attribute format nije validan.',

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
