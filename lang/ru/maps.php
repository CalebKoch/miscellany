<?php

return [
    'actions'       => [
        'back'      => 'Назад к :name',
        'edit'      => 'Редактировать карту',
        'explore'   => 'Исследовать',
    ],
    'create'        => [
        'title' => 'Новая карта',
    ],
    'destroy'       => [],
    'edit'          => [],
    'errors'        => [
        'chunking'  => [
            'error'     => 'При сегментировании карты произошла ошибка. Для помощи, пожалуйста, свяжитесь с командой на :discord.',
            'running'   => [
                'edit'      => 'Карту нельзя редактировать до завершения сегментирования.',
                'explore'   => 'Карту нельзя просматривать до завершения сегментирования.',
                'time'      => 'Это может занять от нескольких минут до нескольких часов, в зависимости от размера карты.',
            ],
        ],
        'dashboard' => [
            'missing'   => 'Чтобы отобразить карту в обзоре кампании, ей нужно изображение.',
        ],
        'explore'   => [
            'missing'   => 'Чтобы исследовать карту, добавьте ей изображение.',
        ],
    ],
    'fields'        => [
        'center_marker'     => 'Метка',
        'center_x'          => 'Долгота по умолчанию',
        'center_y'          => 'Широта по умолчанию',
        'centering'         => 'Центрирование',
        'distance_measure'  => 'Измерение расстояния',
        'distance_name'     => 'Единица измерения расстояния',
        'grid'              => 'Сетка',
        'has_clustering'    => 'Объединять метки в кластеры',
        'initial_zoom'      => 'Изначальное приближение',
        'is_real'           => 'Использовать OpenStreetMaps',
        'max_zoom'          => 'Максимальное приближение',
        'min_zoom'          => 'Минимальное приближение',
        'tabs'              => [
            'coordinates'   => 'Координаты',
            'marker'        => 'Метка',
        ],
    ],
    'helpers'       => [
        'center'                => 'Следующие значения влияют на то, на какую часть карты фокус наведен изначально. Чтобы навести фокус на центр карты, оставьте эти поля пустыми.',
        'centering'             => 'Центрирование на метке не зависит от указанных координат по умолчанию.',
        'chunked_zoom'          => 'Автоматически объединять метки в кластеры, если они находятся рядом.',
        'distance_measure'      => 'Указание меры расстояния откроет инструмент измерения расстояний в режиме исследования. Чтобы 100 пикселей равнялись 1 километру, значение должно быть 0.0041.',
        'distance_measure_2'    => 'Чтобы 100 пикселей равнялись километру, введите 0.0041',
        'grid'                  => 'Укажите размер сетки, отображаемой в режиме исследования.',
        'has_clustering'        => 'Автоматически объединять метки в кластеры, если они находятся рядом.',
        'initial_zoom'          => 'Уровень приближения карты при ее загрузке. По умолчанию он равен :default, максимальное допустимое значение :max, а минимальное :min.',
        'is_real'               => 'Включите это, если хотите использовать карту реального мира, а не загруженную картинку. Это сделает слои недоступными.',
        'max_zoom'              => 'Максимальный уровень приближения карты. По умолчанию он равен :default, максимальное допустимое значение :max.',
        'min_zoom'              => 'Минимальный уровень приближения карты. По умолчанию он равен :default, минимальное допустимое значение это :min.',
        'missing_image'         => 'Добавьте карте изображение и сохраните ее, чтобы получить возможность добавлять слои и метки.',
    ],
    'index'         => [],
    'maps'          => [],
    'panels'        => [
        'groups'    => 'Группы',
        'layers'    => 'Слои',
        'markers'   => 'Метки',
        'settings'  => 'Настройки',
    ],
    'placeholders'  => [
        'center_marker' => 'Чтобы центрировать карту на середину, оставьте поле пустым.',
        'center_x'      => 'Чтобы центрировать карту на середину, оставьте поле пустым.',
        'center_y'      => 'Чтобы центрировать карту на середину, оставьте поле пустым.',
        'distance_name' => 'Км, миль, футов, гамбургеров',
        'grid'          => 'Расстояние в пикселях между линиями сетки. Пусто - нет сетки.',
        'name'          => 'Название карты',
        'type'          => 'Подземелье, город, галактика',
    ],
    'show'          => [
        'tabs'  => [
            'maps'  => 'Карты',
        ],
    ],
    'tooltips'      => [
        'chunking'  => [
            'running'   => 'Идет сегментирование карты. Это может занять от пару минут до нескольких часов.',
        ],
    ],
];
