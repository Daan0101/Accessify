<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Generation Method
    |--------------------------------------------------------------------------
    |
    | This value determines the method used to generate access codes.
    | Options are 'random' or 'uuid'.
    |
    */

    'generation_method' => 'random',

    /*
    |--------------------------------------------------------------------------
    | Length
    |--------------------------------------------------------------------------
    |
    | This value is the length of the generated access codes.
    | Recommended length is between 25 and 50 characters.
    | The method uuid will generate a fixed-length code.
    |
    */

    'length' => 30,
];
