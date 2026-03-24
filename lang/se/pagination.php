<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Språkrader för paginering
    |--------------------------------------------------------------------------
    |
    | Följande språkrader används av pagineringsbiblioteket för att bygga
    | de enkla pagineringslänkarna. Du kan fritt ändra dem till vad du
    | vill för att anpassa dina vyer så att de bättre matchar din applikation.
    |
    */

    // Standard Laravel-paginering
    'previous' => '&laquo; Föregående',
    'next' => 'Nästa &raquo;',

    // Anpassad pagineringstext för mobil
    'mobile' => [
        'showing' => 'Visar',
        'to' => 'till',
        'of' => 'av',
        'previous' => 'Föregående',
        'next' => 'Nästa',
    ],

    'desktop' => [
        'showing' => 'Visar',
        'to' => 'till',
        'of' => 'av',
        'results' => 'resultat',
        'previous' => 'Föregående',
        'next' => 'Nästa',
    ],

    // Vanliga termer
    'common' => [
        'showing' => 'Visar',
        'to' => 'till',
        'of' => 'av',
        'results' => 'resultat',
        'previous' => 'Föregående',
        'next' => 'Nästa',
    ],
];