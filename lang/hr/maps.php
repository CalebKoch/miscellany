<?php

return [
    'actions'       => [
        'back'      => 'Povratak na :name',
        'edit'      => 'Uredi kartu',
        'explore'   => 'Istraži',
    ],
    'create'        => [
        'title' => 'Nova karta',
    ],
    'destroy'       => [],
    'edit'          => [],
    'errors'        => [
        'dashboard' => [
            'missing'   => 'Ova karta treba sliku kako bi se mogla prikazati na naslovnoj ploči.',
        ],
        'explore'   => [
            'missing'   => 'Dodaj sliku na kartu prije nego što ju možeš istraživati.',
        ],
    ],
    'fields'        => [
        'center_marker' => 'Marker',
        'center_x'      => 'Zadana pozicija zemljopisne dužine',
        'center_y'      => 'Zadana pozicija zemljopisne širine',
        'centering'     => 'Centriranje',
        'grid'          => 'Mreža',
        'initial_zoom'  => 'Početno povećanje',
        'max_zoom'      => 'Maksimalno povećanje',
        'min_zoom'      => 'Minimalno povećanje',
        'tabs'          => [
            'coordinates'   => 'Koordinate',
            'marker'        => 'Marker',
        ],
    ],
    'helpers'       => [
        'center'            => 'Promjena sljedećih vrijednosti kontrolira na koje područje je karta fokusirana. Ostavljanje ovih vrijednosti praznima rezultirat će se fokusom na središte karte.',
        'centering'         => 'Centriranje na markeru imat će prioritet nad zadanim koordinatama.',
        'distance_measure'  => 'Davanjem karte mjere udaljenosti omogućit će se alat za mjerenje u načinu istraživanja.',
        'grid'              => 'Definiraj veličinu mreže koja će biti prikazana u načinu istraživanja.',
        'initial_zoom'      => 'Početna razina povećanja na koju se učitava karta. Zadana vrijednost je :default, dok je najveća dopuštena vrijednost :max, a najniža dopuštena vrijednost je :min.',
        'max_zoom'          => 'Najviše što se karta može povećati. Zadana vrijednost je :default, dok je najviša dozvoljena vrijednost :max.',
        'min_zoom'          => 'Najviše što se karta može udaljiti. Zadana vrijednost je :default, dok je najniža dozvoljena vrijednost :min.',
        'missing_image'     => 'Spremi kartu sa slikom prije nego što možeš dodavati slojeve i markere.',
    ],
    'index'         => [],
    'maps'          => [],
    'panels'        => [
        'groups'    => 'Grupe',
        'layers'    => 'Slojevi',
        'markers'   => 'Markeri',
        'settings'  => 'Postavke',
    ],
    'placeholders'  => [
        'center_marker' => 'Ostavi prazno za učitavanje karte u sredini',
        'center_x'      => 'Ostavi prazno za učitavanje karte u sredini',
        'center_y'      => 'Ostavi prazno za učitavanje karte u sredini',
        'grid'          => 'Udaljenost u pikselima između elemenata mreže. Ostavi prazno da se sakrije mreža.',
        'name'          => 'Naziv karte',
        'type'          => 'Tamnica, Grad, Galaksija',
    ],
    'show'          => [
        'tabs'  => [
            'maps'  => 'Karte',
        ],
    ],
];
