<?php

return [
    'create'        => [
        'title' => 'Erstelle eine neue Familie',
    ],
    'destroy'       => [],
    'edit'          => [],
    'families'      => [
        'title' => 'Familie :name Familien',
    ],
    'fields'        => [
        'families'  => 'Unterfamilien',
        'family'    => 'Übergeordnete Familie',
        'members'   => 'Mitglieder',
    ],
    'helpers'       => [
        'descendants'       => 'Diese Liste enthält alle Familien, die der Familie untergeordnet sind, nicht nur die direkt unter ihr.',
        'nested_without'    => 'Anzeigen aller Familien, die keine Elternfamilie haben. Klicken Sie auf eine Zeile, um die Kinderfamilien anzuzeigen.',
    ],
    'hints'         => [
        'members'   => 'Mitglieder einer Familie werden hier gelistet. Ein Charakter kann einer Familie hinzugefügt werden, in dem bei dem gewünschten Charakter das Familiendropdown genutzt wird.',
    ],
    'index'         => [],
    'members'       => [
        'helpers'   => [
            'all_members'       => 'Die folgende Liste zeigt alle Charaktere an, die Teil dieser Familie oder einer Unterfamilie sind.',
            'direct_members'    => 'Die meisten Familien haben Mitglieder, die sie anführen oder sie berühmt machen. Die folgenden Charaktere sind direkte Mitglieder der Familie.',
        ],
        'title'     => 'Familie :name Mitglieder',
    ],
    'placeholders'  => [
        'location'  => 'Wähle einen Ort',
        'name'      => 'Name der Familie',
        'type'      => 'königlich, edel, ausgestorben',
    ],
    'show'          => [
        'tabs'  => [
            'all_members'   => 'Alle Mitglieder',
            'families'      => 'Familien',
            'members'       => 'Mitglieder',
            'tree'          => 'Stammbaum',
        ],
    ],
];
