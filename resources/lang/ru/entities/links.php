<?php

return [
    'actions'       => [
        'add'   => 'Добавить ссылку',
    ],
    'create'        => [
        'success'   => 'Ссылка ":name" добавлена объекту ":entity"',
        'title'     => 'Добавление ссылки объекту :name',
    ],
    'destroy'       => [
        'success'   => 'Ссылка ":name" удалена из объекта ":entity"',
    ],
    'fields'        => [
        'icon'      => 'Иконка',
        'name'      => 'Название',
        'position'  => 'Позиция',
        'url'       => 'URL',
    ],
    'helpers'       => [
        'goto'      => 'Перейти к :name',
        'icon'      => 'Можно назначить иконку, обозначающую ссылку. Используйте любые бесплатные иконки с :fontawesome или оставьте поле пустым, чтобы использовать стандартную.',
        'leaving'   => 'Вы собираетесь покинуть Kanka и перейти в другой домен. Страница, куда вы переходите, предоставлена пользователем и не проверяется нашим сайтом.',
        'url'       => 'Вы собираетесь перейти по адресу :url.',
    ],
    'placeholders'  => [
        'icon'  => 'fab fa-d-and-d-beyond',
        'name'  => 'DNDBeyond',
        'url'   => 'https://dndbeyond.com/character-url',
    ],
    'show'          => [
        'helper'    => 'Усиленные кампании могут добавлять объектам ссылки на другие сайты.',
        'title'     => 'Ссылки объекта :name',
    ],
    'update'        => [
        'success'   => 'Ссылка ":name" объекта ":entity" обновлена',
        'title'     => 'Обновление ссылки объекта :name',
    ],
];
