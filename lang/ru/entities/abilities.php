<?php

return [
    'actions'   => [
        'add'   => 'Добавить способности',
        'reset' => 'Сбросить заряды',
    ],
    'create'    => [
        'success'           => 'Способность ":ability" добавлена объекту ":entity".',
        'success_multiple'  => 'Способности ":abilities" добавлены объекту ":entity".',
        'title'             => 'Добавление способностей :name',
    ],
    'fields'    => [
        'note'      => 'Описание',
        'position'  => 'Позиция',
    ],
    'helpers'   => [
        'note'  => 'В этом поле можно ссылаться на объекты с помощью продвинутых упоминаний (:code) и на атрибуты этого объекта (<code>{Сила}</code>).',
    ],
    'import'    => [
        'errors'    => [
            'no_race'       => 'У этого персонажа нет расы.',
            'not_character' => 'Этот объект не является персонажем.',
        ],
        'success'   => '{0} Добавлено :count способностей.|{1} Добавлена :count способность.|[2,4] Добавлено :count способности.|[5,*] Добавлено :count способностей.',
    ],
    'show'      => [
        'helper'    => 'Присвойте этому объекту способности. Способность всегда можно скрыть, открыть или удалить. Способности-потомки одной родительской способности будут отображаться при нажатии на прямоугольник с названием родителя.',
        'title'     => 'Способности объекта :name',
    ],
    'update'    => [
        'title' => 'Cпособность объекта :name',
    ],
];
