<?php

return [
    'actions'                   => [
        'actions'           => 'Действия',
        'apply'             => 'Применить',
        'back'              => 'Назад',
        'copy'              => 'Копировать',
        'copy_mention'      => 'Копировать [упоминание]',
        'copy_to_campaign'  => 'Копировать в кампанию',
        'explore_view'      => 'Свернутый вид',
        'export'            => 'Экспортировать (PDF)',
        'find_out_more'     => 'Узнать больше',
        'go_to'             => 'Перейти к :name',
        'json-export'       => 'Экспортировать (JSON)',
        'manage_links'      => 'Настроить ссылки',
        'move'              => 'Изменить или переместить',
        'new'               => 'Новый',
        'next'              => 'Далее',
        'reset'             => 'Сброс',
    ],
    'add'                       => 'Добавить',
    'alerts'                    => [
        'copy_mention'  => 'Продвинутое упоминание объекта скопировано в ваш буфер обмена',
    ],
    'attributes'                => [
        'actions'       => [
            'apply_template'    => 'Применить шаблон атрибутов',
            'manage'            => 'Управление',
            'more'              => 'Другое',
            'remove_all'        => 'Удалить все',
        ],
        'fields'        => [
            'attribute'             => 'Атрибут',
            'community_templates'   => 'Шаблоны сообщества',
            'is_private'            => 'Скрытые атрибуты',
            'is_star'               => 'Закреплен',
            'template'              => 'Шаблон',
            'value'                 => 'Значение',
        ],
        'helpers'       => [
            'delete_all'    => 'Вы уверены, что хотите удалить все атрибуты этого объекта?',
        ],
        'hints'         => [
            'is_private'    => 'Вы можете скрыть все атрибуты этого объекта от всех участников, кроме админов.',
        ],
        'index'         => [
            'success'   => 'Атрибуты объекта :entity обновлены',
            'title'     => 'Атрибуты объекта :name',
        ],
        'placeholders'  => [
            'attribute' => 'Число побед, рейтинг опасности, инициатива, население',
            'block'     => 'Название блока',
            'checkbox'  => 'Название флажка',
            'section'   => 'Название раздела',
            'template'  => 'Выберите шаблон',
            'value'     => 'Значение атрибута',
        ],
        'template'      => [
            'success'   => 'Шаблон атрибутов :name применен к объекту :entity',
            'title'     => 'Применение шаблона атрибутов к объекту :name',
        ],
        'types'         => [
            'attribute' => 'Атрибут',
            'block'     => 'Блок',
            'checkbox'  => 'Флажок',
            'section'   => 'Раздел',
            'text'      => 'Большой текст',
        ],
        'visibility'    => [
            'entry'     => 'Атрибут отображается в меню объектов',
            'private'   => 'Атрибут виден только участникам роли "Админ"',
            'public'    => 'Атрибут виден всем участникам',
            'tab'       => 'Атрибут отображается только во вкладке "Атрибуты"',
        ],
    ],
    'boosted'                   => 'Усилена',
    'boosted_campaigns'         => 'Усиленные кампании',
    'bulk'                      => [
        'actions'       => [
            'edit'  => 'Массовый редактор и тэги',
        ],
        'age'           => [
            'helper'    => 'Перед числом можно поставить + или - , чтобы увеличить или уменьшить возраст на это число.',
        ],
        'delete'        => [
            'title'     => 'Удаление нескольких объектов',
            'warning'   => 'Вы уверены, что хотите удалить выбранные объекты?',
        ],
        'edit'          => [
            'tagging'   => 'Действие с тэгами',
            'tags'      => [
                'add'       => 'Добавить',
                'remove'    => 'Удалить',
            ],
            'title'     => 'Редактирование нескольких объектов',
        ],
        'errors'        => [
            'admin'     => 'Скрывать и открывать объекты могут только админы кампании',
            'general'   => 'При выполнении вашего действия произошла ошибка. Пожалуйста, попробуйте снова и свяжитесь с нами, если проблема повторится. Сообщение ошибки: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Перезапись',
            ],
            'helpers'   => [
                'override'  => 'Разрешения выбранных объектов будут перезаписаны. Если не включать, то выбранные разрешения будут добавлены к уже существующим.',
            ],
            'title'     => 'Изменение разрешений нескольких объектов',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} В кампанию :campaign скопирован :count объект|[2, 4] В кампанию :campaign скопировано :count объекта|[5, *] В кампанию :campaign скопировано :count объектов',
            'editing'           => '{1} Обновлен :count объект|[2, 4] Обновлено :count объекта|[5, *] Обновлено :count объектов',
            'permissions'       => '{1} Изменены разрешения :count объекта|[2, *] Изменены разрешения :count объектов',
            'private'           => '{1} Скрыт :count объект|[2, 4] Скрыто :count объекта|[5, *] Скрыто :count объектов',
            'public'            => '{1} Открыт :count объект|[2, 4] Открыто :count объекта|[5, *] Открыто :count объектов',
        ],
    ],
    'cancel'                    => 'Отмена',
    'click_modal'               => [
        'close'     => 'Закрыть',
        'confirm'   => 'Подтвердить',
        'title'     => 'Подтверждение вашего действия',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Копирование объектов в другую кампанию',
        'panel'         => 'Копировать',
        'title'         => 'Копирование :name в другую кампанию',
    ],
    'create'                    => 'Создать',
    'datagrid'                  => [
        'empty' => 'Здесь пока ничего нет',
    ],
    'delete_modal'              => [
        'close'         => 'Закрыть',
        'delete'        => 'Удалить',
        'description'   => 'Вы уверены, что хотите удалить :tag?',
        'mirrored'      => 'Удалить зеркальную связь',
        'title'         => 'Подтверждение удаления',
    ],
    'destroy_many'              => [
        'success'   => '{1} Удален :count объект|[2,4] Удалено :count объекта|[5,*] Удалено :count объектов',
    ],
    'edit'                      => 'Редактировать',
    'errors'                    => [
        'boosted'                       => 'Эта функция доступна только для усиленный кампаний.',
        'node_must_not_be_a_descendant' => 'Недопустимая привязка (тэг, родительская локация): объект является потомком самого себя',
    ],
    'events'                    => [
        'hint'  => 'Список ниже содержит все календари, в которые было добавлено это событие.',
    ],
    'export'                    => 'Экспортировать',
    'fields'                    => [
        'ability'               => 'Способность',
        'attribute_template'    => 'Шаблон атрибутов',
        'calendar'              => 'Календарь',
        'calendar_date'         => 'Дата календаря',
        'character'             => 'Персонаж',
        'colour'                => 'Цвет',
        'copy_attributes'       => 'Копировать атрибуты',
        'copy_notes'            => 'Копировать заметки объекта',
        'creator'               => 'Создатель',
        'dice_roll'             => 'Бросок костей',
        'entity'                => 'Объект',
        'entity_type'           => 'Тип объекта',
        'entry'                 => 'Статья',
        'event'                 => 'Событие',
        'excerpt'               => 'Краткое описание',
        'family'                => 'Семья',
        'files'                 => 'Файлы',
        'has_entity_files'      => 'Есть загруженные файлы',
        'has_entity_notes'      => 'Есть заметки объекта',
        'has_image'             => 'Есть изображение',
        'header_image'          => 'Изображение заголовка',
        'image'                 => 'Изображение',
        'is_private'            => 'Скрытый',
        'is_star'               => 'Закрепить',
        'item'                  => 'Предмет',
        'location'              => 'Локация',
        'map'                   => 'Карта',
        'name'                  => 'Название',
        'organisation'          => 'Организация',
        'position'              => 'Позиция',
        'race'                  => 'Раса',
        'tag'                   => 'Тэг',
        'tags'                  => 'Тэги',
        'timeline'              => 'Хронология',
        'tooltip'               => 'Подсказка',
        'type'                  => 'Тип',
        'visibility'            => 'Доступ',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Нажмите здесь или перетащите сюда файлы',
            'manage'    => 'Управление файлами объекта',
        ],
        'errors'    => [
            'max'       => 'Вы достигли максимального количества (:max) файлов для этого объекта',
            'no_files'  => 'Нет файлов',
        ],
        'files'     => 'Загруженные файлы',
        'hints'     => [
            'limit'         => 'Каждому объекту можно загрузить не больше :max файлов.',
            'limitations'   => 'Форматы: jpg, png, gif и pdf. Размер файла: до :size.',
        ],
        'title'     => 'Файлы объекта :name',
    ],
    'filter'                    => 'Фильтровать',
    'filters'                   => [
        'all'       => 'Фильтр всех потомков',
        'clear'     => 'Убрать фильтры',
        'direct'    => 'Фильтр непосредственных потомков',
        'filtered'  => 'Показано :count из :total объектов типа :entity',
        'hide'      => 'Скрыть фильтры',
        'options'   => [
            'exclude'   => 'Не показывать',
            'include'   => 'Показывать',
            'none'      => 'Нет',
        ],
        'show'      => 'Показать фильтры',
        'sorting'   => [
            'asc'       => ':field - возрастание',
            'desc'      => ':field - убывание',
            'helper'    => 'Управление порядком показа результатов',
        ],
        'title'     => 'Фильтры',
    ],
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Добавить дату календаря',
        ],
        'copy_options'  => 'Копировать опции',
    ],
    'hidden'                    => 'Скрытый',
    'hints'                     => [
        'attribute_template'    => 'Применять шаблон атрибутов непосредственно при создании или изменении объекта.',
        'calendar_date'         => 'Дата календаря позволяет легко фильтровать списки, а также хранит событие выбранного календаря.',
        'header_image'          => 'Это изображение будет находиться над объектом. Лучше использовать широкое изображение.',
        'image_limitations'     => 'Форматы: jpg, png и gif. Размер файла: до :size.',
        'image_patreon'         => 'Увеличить максимальный размер файла?',
        'is_private'            => 'Скрытые объекты могут видеть только участники кампании роли "Админ".',
        'is_star'               => 'Закрепленные элементы появятся в меню объекта.',
        'map_limitations'       => 'Форматы: jpg, png, gif и svg. Размер файла: до :size.',
        'tooltip'               => 'Замените подсказку, созданную автоматически, на содержание этого поля.',
        'visibility'            => 'Значение "Админ" означает, что видеть этот объект могут только админы. Значение "Вы" означает, что его можете видеть только вы.',
    ],
    'history'                   => [
        'created'       => 'Создано <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'created_date'  => 'Создано <span data-toggle="tooltip" title=":realdate">:date</span>',
        'unknown'       => 'Неизвестно',
        'updated'       => 'Изменено <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>.',
        'updated_date'  => 'Изменено <span data-toggle="tooltip" title=":realdate">:date</span>.',
        'view'          => 'Показать историю объекта',
    ],
    'image'                     => [
        'error' => 'Нам не удалось получить данное изображение. Возможно, сайт не позволяет нам скачать изображение (такое случается с Squarespace и DeviantArt) или эта ссылка уже не действительна. Пожалуйста, убедитесь также, что изображение не превышает :size.',
    ],
    'is_not_private'            => 'В данный момент этот объект открыт',
    'is_private'                => 'Этот объект скрыт и виден только участникам роли "Админ"',
    'linking_help'              => 'Как создавать ссылки на другие объекты?',
    'manage'                    => 'Управление',
    'move'                      => [
        'errors'        => [
            'permission'        => 'У вас нет разрешения создавать объекты этого типа в данной кампании.',
            'same_campaign'     => 'Вам нужно выбрать другую кампанию, чтобы переместить в нее этот объект.',
            'unknown_campaign'  => 'Неизвестная кампания.',
        ],
        'fields'        => [
            'campaign'  => 'Новая кампания',
            'copy'      => 'Создать копию',
            'target'    => 'Новый тип',
        ],
        'hints'         => [
            'campaign'  => 'Вы также можете попробовать переместить этот объект в другую кампанию.',
            'copy'      => 'Выберите это, если хотите создать копию в новой кампании.',
            'target'    => 'Пожалуйста, учтите, что некоторые данные могут быть потеряны при перемещении элемента из одного типа в другой.',
        ],
        'panels'        => [
            'change'    => 'Изменить тип объекта',
            'move'      => 'Переместить в другую кампанию',
        ],
        'success'       => 'Объект ":name" перемещен',
        'success_copy'  => 'Объект ":name" скопирован',
        'title'         => 'Изменение или перемещение :name',
    ],
    'new_entity'                => [
        'error' => 'Пожалуйста, проверьте значения.',
        'fields'=> [
            'name'  => 'Название',
        ],
        'title' => 'Новый объект',
    ],
    'or_cancel'                 => 'или <a href=":url">отменить</a>',
    'panels'                    => [
        'appearance'            => 'Оформление',
        'attribute_template'    => 'Шаблон атрибутов',
        'calendar_date'         => 'Дата календаря',
        'entry'                 => 'Статья',
        'general_information'   => 'Основная информация',
        'move'                  => 'Переместить',
        'system'                => 'Система',
    ],
    'permissions'               => [
        'action'            => 'Действие',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Разрешить',
                'deny'      => 'Запретить',
                'ignore'    => 'Не изменять',
                'remove'    => 'Удалить',
            ],
            'bulk_entity'   => [
                'allow'     => 'Разрешить',
                'deny'      => 'Запретить',
                'inherit'   => 'Наследовать',
            ],
            'delete'        => 'Удалить',
            'edit'          => 'Редактировать',
            'entity_note'   => 'Заметки объекта',
            'read'          => 'Читать',
            'toggle'        => 'Изменить',
        ],
        'allowed'           => 'Позволено',
        'fields'            => [
            'member'    => 'Участник',
            'role'      => 'Роль',
        ],
        'helper'            => 'Используйте эту страницу, чтобы назначить, как пользователи и роли могут взаимодействовать с этим объектом. :allow',
        'helpers'           => [
            'setup' => 'Используйте эту страницу, чтобы назначить, как пользователи и роли могут взаимодействовать с этим объектом. :allow позволяет пользователю или роли совершать это действие. :deny запрещает им это действие. :inherit будет использовать основное разрешение роли пользователя или основной роли. Пользователь с :allow может совершать действие, которое запрещено для его роли.',
        ],
        'inherited'         => 'Это разрешение у этой роли уже назначено для этого типа объектов.',
        'inherited_by'      => 'Этот пользователь входит в роль ":role", у которой есть эти разрешения для этого типа объектов.',
        'success'           => 'Разрешения сохранены',
        'title'             => 'Разрешения',
        'too_many_members'  => 'В этой кампании слишком много участников (>10) для отображения этой страницы. Пожалуйста, используйте кнопку "Разрешения" объекта для детальной настройки разрешений.',
    ],
    'placeholders'              => [
        'ability'       => 'Выберите способность',
        'calendar'      => 'Выберите календарь',
        'character'     => 'Выберите персонажа',
        'entity'        => 'Выберите объект',
        'event'         => 'Выберите событие',
        'family'        => 'Выберите семью',
        'image_url'     => 'Вы также можете ввести URL изображения',
        'item'          => 'Выберите предмет',
        'journal'       => 'Выберите журнал',
        'location'      => 'Выберите локацию',
        'map'           => 'Выберите карту',
        'organisation'  => 'Выберите организацию',
        'race'          => 'Выберите расу',
        'tag'           => 'Выберите тэг',
    ],
    'relations'                 => [
        'actions'   => [
            'add'   => 'Добавить связь',
        ],
        'fields'    => [
            'location'  => 'Положение',
            'name'      => 'Название',
            'relation'  => 'Связь',
        ],
        'hint'      => 'Для обозначения отношений между объектами между ними можно создавать связи.',
    ],
    'remove'                    => 'Удалить',
    'rename'                    => 'Переименовать',
    'save'                      => 'Сохранить',
    'save_and_close'            => 'Сохранить и Закрыть',
    'save_and_copy'             => 'Сохранить и Копировать',
    'save_and_new'              => 'Сохранить и Создать',
    'save_and_update'           => 'Сохранить и Изменить',
    'save_and_view'             => 'Сохранить и Открыть',
    'search'                    => 'Искать',
    'select'                    => 'Выбрать',
    'superboosted_campaigns'    => 'Супер-усиленные кампании',
    'tabs'                      => [
        'abilities'     => 'Способности',
        'attributes'    => 'Атрибуты',
        'boost'         => 'Усиление',
        'calendars'     => 'Календари',
        'default'       => 'Умолчания',
        'events'        => 'События',
        'inventory'     => 'Инвентарь',
        'links'         => 'Ссылки',
        'map-points'    => 'Точки на карте',
        'mentions'      => 'Упоминания',
        'menu'          => 'Меню',
        'notes'         => 'Заметки объекта',
        'permissions'   => 'Разрешения',
        'relations'     => 'Связи',
        'reminders'     => 'Напоминания',
        'timelines'     => 'Хронологии',
        'tooltip'       => 'Подсказка',
    ],
    'update'                    => 'Обновить',
    'users'                     => [
        'unknown'   => 'Неизвестный',
    ],
    'view'                      => 'Показать',
    'visibilities'              => [
        'admin'         => 'Админ',
        'admin-self'    => 'Вы и Админ',
        'all'           => 'Все',
        'members'       => 'Участники',
        'self'          => 'Вы',
    ],
];
