<?php

return [
    'create'        => [
        'title' => 'Nova organización',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'is_defunct'    => 'Extinta',
        'members'       => 'Integrantes',
        'organisation'  => 'Organización superior',
        'organisations' => 'Suborganizacións',
    ],
    'helpers'       => [
        'descendants'       => 'Esta lista contén todas as organizacións que son descendentes desta organización, non só as descendentes directas.',
        'nested_without'    => 'Mostrando todas as organizacións que non teñen unhas organización superior. Fai clic nunha fila para ver as súas descendentes.',
    ],
    'hints'         => [
        'is_defunct'    => 'Esta organización está extinta.',
    ],
    'index'         => [],
    'members'       => [
        'actions'       => [
            'add'       => 'Engadir integrante',
            'submit'    => 'Engadir integrante',
        ],
        'create'        => [
            'success'   => 'Integrante engadida á organización.',
            'title'     => 'Nova integrante de :name',
        ],
        'destroy'       => [
            'success'   => 'Integrante eliminada da organización.',
        ],
        'edit'          => [
            'success'   => 'Integrante da organización actualizada.',
            'title'     => 'Actualizar integrante de :name',
        ],
        'fields'        => [
            'character'     => 'Personaxe',
            'organisation'  => 'Organización',
            'parent'        => 'Superior',
            'pinned'        => 'Fixada',
            'role'          => 'Cargo',
            'status'        => 'Estado',
        ],
        'helpers'       => [
            'all_members'   => 'Todas as personaxes que son integrantes desta organización ou das súas suborganizacións.',
            'members'       => 'Todas as personaxes integrantes desta organización.',
            'pinned'        => 'Escolle se a pertenza a esta organización debería ser mostrada na sección de "Fixados" da correspondente entidade.',
        ],
        'pinned'        => [
            'both'          => 'En ambas',
            'character'     => 'Na páxina da personaxe',
            'none'          => 'En ningunha',
            'organisation'  => 'Na páxina da organización',
        ],
        'placeholders'  => [
            'character' => 'Elixe unha personaxe',
            'parent'    => 'Quen é a superior desta integrante',
            'role'      => 'Líder, integrante, Septón supremo, Mestre de espías...',
        ],
        'status'        => [
            'active'    => 'En activo',
            'inactive'  => 'Inactivo',
            'unknown'   => 'Estado descoñecido',
        ],
        'title'         => 'Integrantes de :name',
    ],
    'organisations' => [
        'title' => 'Organizacións de :name',
    ],
    'placeholders'  => [
        'location'  => 'Elixe un lugar',
        'name'      => 'Nome da organización',
        'type'      => 'Culto, banda, rebelión, gremio...',
    ],
    'quests'        => [],
    'show'          => [
        'tabs'  => [
            'organisations' => 'Organizacións',
        ],
    ],
];
