<?php

return [
    'attribute_templates'   => [
        'title' => ':name Šablóny atribútov',
    ],
    'create'                => [
        'title' => 'Nová šablóna atribútov',
    ],
    'destroy'               => [],
    'edit'                  => [],
    'fields'                => [
        'attributes'    => 'Atribúty',
    ],
    'hints'                 => [
        'automatic'                 => 'Atribúty boli automaticky aplikované zo šablóny atribútov :link.',
        'entity_type'               => 'Po aktivovaní bude v novom objekte tohto typu automaticky aplikovaná táto šablóna atribútov.',
        'parent_attribute_template' => 'Táto šablóna atribútov môže byť podradená inej šablóne atribútov. Ak bude aplikovaná táto šablóna atribútov, aplikujú sa zároveň s ňou aj všetky jej nadradené šablóny atribútov.',
    ],
    'index'                 => [],
    'placeholders'          => [
        'name'  => 'Názov šablóny atribútov',
    ],
    'show'                  => [
        'tabs'  => [
            'attributes'    => 'Atribúty',
        ],
    ],
];
