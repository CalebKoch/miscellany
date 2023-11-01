<?php

return [
    'actions'       => [
        'add_epoch'         => 'Добавить эпоху',
        'add_intercalary'   => 'Добавить промежуточные дни',
        'add_month'         => 'Добавить месяц',
        'add_moon'          => 'Добавить луну',
        'add_reminder'      => 'Добавить напоминание',
        'add_season'        => 'Добавить время года',
        'add_weather'       => 'Настроить погодные явления',
        'add_week'          => 'Дать название неделе',
        'add_weekday'       => 'Добавить день недели',
        'add_year'          => 'Дать название году',
        'set_today'         => 'Сделать текущим днем',
        'today'             => 'Сегодня',
        'update_weather'    => 'Редактировать погоду',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Происходит каждый год',
    ],
    'create'        => [
        'title' => 'Новый календарь',
    ],
    'destroy'       => [],
    'edit'          => [
        'today' => 'Дата календаря обновлена.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Существующий объект',
            'new'       => 'Новое событие',
            'switch'    => 'Назад',
        ],
        'create'    => [
            'success'   => 'Событие календаря создано.',
            'title'     => 'Добавление события в календарь :name',
        ],
        'destroy'   => 'Событие удалено из календаря ":name".',
        'edit'      => [
            'success'   => 'Событие календаря обновлено.',
            'title'     => 'Редактирование события календаря :name',
        ],
        'helpers'   => [
            'add'               => 'Добавьте существующее событие в этот календарь.',
            'new'               => 'Или создайте новое событие, просто дав ему название.',
            'other_calendar'    => 'Вы редактируете напоминание календаря :calendar.',
        ],
        'modal'     => [
            'title' => 'Добавление события в календарь',
        ],
        'success'   => 'Событие ":event" добавлено в календарь.',
    ],
    'events'        => [
        'filters'   => [
            'show_after'    => 'Сегодня и позже',
            'show_all'      => 'Все время',
            'show_before'   => 'Вчера и раньше',
        ],
    ],
    'fields'        => [
        'colour'                => 'Цвет',
        'comment'               => 'Комментарий',
        'current_day'           => 'Текущий день',
        'current_month'         => 'Текущий месяц',
        'current_year'          => 'Текущий год',
        'date'                  => 'Текущая дата',
        'day'                   => 'День',
        'default_layout'        => 'Основной вид',
        'intercalary'           => 'Промежуточные дни',
        'is_incrementing'       => 'Автообновление даты',
        'is_recurring'          => 'Повторяющееся',
        'leap_year_amount'      => 'Лишние дни',
        'leap_year_month'       => 'Месяц',
        'leap_year_offset'      => 'Каждые ... лет',
        'leap_year_start'       => 'Первый високосный год',
        'length'                => 'Продолжительность',
        'length_days'           => '{1} :count день|[2,4] :count дня|[5,19] :count дней|[20,*] :count дн.',
        'month'                 => 'Месяц',
        'months'                => 'Месяцы',
        'moons'                 => 'Луны',
        'parameters'            => 'Параметры',
        'recurring_periodicity' => 'Периодичность',
        'recurring_until'       => 'Повторяется до ... года',
        'reset'                 => 'Сброс дня недели',
        'seasons'               => 'Времена года',
        'start_offset'          => 'Смещение первого дня',
        'suffix'                => 'Обозначение эры',
        'week_names'            => 'Названия недель',
        'weekdays'              => 'Дни недели',
        'year'                  => 'Год',
    ],
    'helpers'       => [
        'default_layout'    => 'Выберите изначальный вид календаря при просмотре.',
        'month_type'        => 'Промежуточные месяцы влияют на луны и времена года, но дни в них не являются определенными днями недели.',
        'moon_offset'       => 'По умолчанию первое полнолуние происходит в первый день 0-го года. Изменение этого поля влияет на положение первого полнолуния. Это значение может быть отрицательным или положительным, но по модулю не может превышать длину первого месяца.',
        'nested_without'    => 'Показаны все календари, у которых нет родительских календарей. Нажмите на строку календаря, чтобы увидеть список его календарей-потомков.',
        'start_offset'      => 'По умолчанию календарь начинается с первого дня 0-го года. Изменение этого поля влияет на положение первого дня календаря.',
    ],
    'hints'         => [
        'event_length'      => 'Сколько дней событие длится. Не может быть больше двух месяцев.',
        'intercalary'       => 'Дни, которые выпадают из обычных месяцев и дней недели. Они влияют на луны, но не на дни недели.',
        'is_incrementing'   => 'Каждый день в 00:00 по UTC будет наступать новый день и текущая дата будет автоматически обновляться.',
        'is_recurring'      => 'Повторяющееся событие будет происходить каждый год в одну и ту же дату.',
        'months'            => 'В вашем календаре должно быть не меньше 2 месяцев.',
        'moons'             => 'Если добавить в календарь луны, они будут отображаться в календаре во время своих полнолуний и новолуний. Если период лунного цикла длится дольше 10 дней, то первая и последняя четверти тоже будут отображаться.',
        'parent_calendar'   => 'Календарь наследует напоминания и погодные явления от родительского календаря.',
        'reset'             => 'Каждый месяц или год будет начинаться с первого дня недели.',
        'seasons'           => 'Создайте времена года, просто указав, когда они наступают. Kanka позаботится обо всем остальном.',
        'weekdays'          => 'Дайте названия дням недели. Их должно быть не меньше двух.',
        'weeks'             => 'Дайте названия наиболее важным неделям вашего календаря.',
        'years'             => 'Некоторые годы настолько важны, что у них есть собственные названия.',
    ],
    'index'         => [],
    'layouts'       => [
        'month'     => 'Месяц',
        'monthly'   => 'Месяц',
        'year'      => 'Год',
        'yearly'    => 'Год',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Переключатель лет',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Промежуточный',
        'standard'      => 'Обычный',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'fullmoon'      => 'Полнолуние',
                'fullmoon_name' => 'Полнолуние :moon',
                'month'         => 'Ежемесячное',
                'newmoon'       => 'Новолуние',
                'newmoon_name'  => 'Новолуние :moon',
                'none'          => 'Нет',
                'unnamed_moon'  => 'Луна :number',
                'year'          => 'Ежегодное',
            ],
        ],
        'resets'    => [
            ''      => 'Никогда',
            'month' => 'Каждый месяц',
            'year'  => 'Каждый год',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Промежуточные дни',
        'leap_year'     => 'Високосный год',
        'months'        => 'Месяцы',
        'weeks'         => 'Недели',
        'years'         => 'Названия годов',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Продолжительность в днях',
            'month'     => 'В конце какого месяца',
            'name'      => 'Название промежуточного периода',
        ],
        'month'         => [
            'alias' => 'Другое название',
            'length'=> 'Число дней',
            'name'  => 'Название месяца',
            'type'  => 'Тип',
        ],
        'moon'          => [
            'fullmoon'  => 'Дней между полнолуниями',
            'name'      => 'Название луны',
            'offset'    => 'Смещение первого полнолуния',
        ],
        'seasons'       => [
            'day'   => 'Первый день',
            'month' => 'Первый месяц',
            'name'  => 'Название времени года',
        ],
        'weeks'         => [
            'name'      => 'Название недели',
            'number'    => 'Номер недели',
        ],
        'year'          => [
            'name'      => 'Название года',
            'number'    => 'Год',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Цвет',
        'comment'           => 'День рожденья, фестиваль, солнцестояние',
        'date'              => 'Текущая дата',
        'leap_year_amount'  => 'Число лишних дней в високосном году',
        'leap_year_month'   => 'Месяц, в который входят лишние дни',
        'leap_year_offset'  => 'Каждые сколько лет год становится високосным',
        'leap_year_start'   => 'Первый год, являющийся високосным',
        'length'            => 'Продолжительность события в днях',
        'months'            => 'Число месяцев в году',
        'recurring_until'   => 'Последний год повторения (если здесь пусто, будет повторяться вечно)',
        'seasons'           => 'Число времен года',
        'suffix'            => 'Обозначение текущей эры (Например: н.э., до н.э.)',
        'type'              => 'Тип календаря',
        'weekdays'          => 'Число дней в неделе',
    ],
    'show'          => [
        'missing_details'       => 'Этот календарь не может быть размещен. Для нормальной работы в календаре должно быть не меньше 2 месяцев и 2 дней недели.',
        'moon_1first_quarter'   => 'Первая четверть :moon',
        'moon_full'             => 'Полнолуние :moon',
        'moon_last_quarter'     => 'Последняя четверть :moon',
        'moon_new'              => 'Новолуние :moon',
        'tabs'                  => [
            'events'    => 'Напоминания',
            'weather'   => 'Погода',
        ],
    ],
    'sorters'       => [
        'after' => 'Сегодня и позже',
        'before'=> 'Сегодня и раньше',
    ],
    'validators'    => [
        'moon_offset'   => 'Смещение первого полнолуния не может превышать длину первого месяца календаря.',
    ],
];
