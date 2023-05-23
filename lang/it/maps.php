<?php

return [
    'actions'       => [
        'back'      => 'Torna a :name',
        'edit'      => 'Modifica mappa',
        'explore'   => 'Esplora',
    ],
    'create'        => [
        'title' => 'Nuova Mappa',
    ],
    'edit'          => [],
    'fields'        => [
        'grid'  => 'Griglia',
    ],
    'helpers'       => [
        'descendants'       => 'Questa lsita contiene tutte le mappe che sono discendenti di questa mappa, e non solo quelle direttamente sotto di essa.',
        'distance_measure'  => 'Fornire alla mappa una misurazione della distanza attiverà lo strumento di misurazione nella modalità Esplora.',
        'grid'              => 'Definisci la dimensione della griglia che sarà mostrata nella modalità Esplora.',
        'missing_image'     => 'Devi salvare la mappa fornendo un\'immagine prima di poter essere in grado di aggiungere livelli e marcatori.',
    ],
    'index'         => [],
    'maps'          => [],
    'panels'        => [
        'layers'    => 'Livelli',
        'markers'   => 'Marcatori',
        'settings'  => 'Opzioni',
    ],
    'placeholders'  => [
        'grid'  => 'Distanza in pixel tra gli elementi della griglia. Lascia vuoto per nascondere la griglia.',
        'name'  => 'Nome della mappa',
        'type'  => 'Dungeon, Città, Galassia',
    ],
    'show'          => [
        'tabs'  => [
            'maps'  => 'Mappe',
        ],
    ],
];
