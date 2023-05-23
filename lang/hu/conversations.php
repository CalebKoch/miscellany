<?php

return [
    'create'        => [
        'title' => 'Új beszélgetés',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'is_closed'     => 'Lezárva',
        'messages'      => 'Üzenetek',
        'participants'  => 'Résztvevők',
    ],
    'hints'         => [
        'participants'  => 'Kérjük, adj résztvevőket a beszélgetésedhez az :icon ikonra kattintva a jobb felső részen.',
    ],
    'index'         => [],
    'messages'      => [
        'destroy'       => [
            'success'   => 'Üzenet eltávolítva.',
        ],
        'is_updated'    => 'Frissítve',
        'load_previous' => 'Előző üzenet betöltése',
        'placeholders'  => [
            'message'   => 'Üzeneted',
        ],
    ],
    'participants'  => [
        'create'    => [
            'success'   => ':entity résztvevőt hozzáadtuk a beszélgetéshez.',
        ],
        'destroy'   => [
            'success'   => ':entity résztvevőt eltávolítottuk a beszélgetésből.',
        ],
        'modal'     => 'Résztvevők',
        'title'     => ':name résztvevői',
    ],
    'placeholders'  => [
        'name'  => 'A beszélgetés megnevezése',
        'type'  => 'Játékbeli, előkészület, cselekmény',
    ],
    'show'          => [
        'is_closed' => 'A beszélgetést lezártuk.',
    ],
    'tabs'          => [
        'participants'  => 'Résztvevők',
    ],
    'targets'       => [
        'characters'    => 'Karakterek',
        'members'       => 'Tagok',
    ],
];
