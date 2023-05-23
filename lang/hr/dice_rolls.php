<?php

return [
    'create'        => [
        'title' => 'Novo bacanje kockica',
    ],
    'destroy'       => [
        'dice_roll' => 'Uklonjeno bacanje kockica.',
    ],
    'edit'          => [],
    'fields'        => [
        'created_at'    => 'Kockice bačene u',
        'parameters'    => 'Parametri',
        'results'       => 'Rezultati',
        'rolls'         => 'Bacanja',
    ],
    'hints'         => [
        'parameters'    => 'Koje su moje opcije kockica?',
    ],
    'index'         => [
        'actions'   => [
            'results'   => 'Rezultati',
        ],
    ],
    'placeholders'  => [
        'name'          => 'Naziv bacanja kockica',
        'parameters'    => '4d6+3',
    ],
    'results'       => [
        'actions'   => [
            'add'   => 'Bacanje',
        ],
        'error'     => 'Bacanje kockica neuspješno. Nije moguće analizirati parametre.',
        'fields'    => [
            'creator'   => 'Kreator',
            'date'      => 'Datum',
            'result'    => 'Rezultat',
        ],
        'hint'      => 'Sva bacanja napravljena za ovaj predložak bacanja kockica.',
        'success'   => 'Kockice bačene.',
    ],
    'show'          => [
        'tabs'  => [
            'results'   => 'Rezultati',
        ],
    ],
];
