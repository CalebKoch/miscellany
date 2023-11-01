<?php

return [
    'actions'       => [
        'add_epoch'         => 'Додати епоху',
        'add_intercalary'   => 'Додати високосні дні',
        'add_month'         => 'Додати місяць',
        'add_moon'          => 'Додати Місяць',
        'add_reminder'      => 'Додати нагадування',
        'add_season'        => 'Додати сезон',
        'add_weather'       => 'Вказати погодний ефект',
        'add_week'          => 'Додати іменний тиждень',
        'add_weekday'       => 'Додати день тижня',
        'add_year'          => 'Додати іменний рік',
        'set_today'         => 'Встановити поточний день',
        'today'             => 'Сьогодні',
        'update_weather'    => 'Оновити погоду',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Відбувається щороку',
    ],
    'create'        => [
        'title' => 'Новий календар',
    ],
    'edit'          => [
        'today' => 'Дати календаря оновлено.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Наявна сутність',
            'new'       => 'Нова подія',
            'switch'    => 'Змінити вибір',
        ],
        'create'    => [
            'success'   => 'Подію в календарі створено.',
            'title'     => 'Додати календарну подію до :name',
        ],
        'destroy'   => 'Нагадування видалено з календаря \':name\'.',
        'edit'      => [
            'success'   => 'Нагадування оновлено.',
            'title'     => 'Оновити нагадування для :name',
        ],
        'helpers'   => [
            'add'               => 'Додати наявну подію до цього календаря.',
            'new'               => 'Або створити нову подію, просто вказавши назву.',
            'other_calendar'    => 'Ви редагуєте нагадування, що є в календарі :calendar.',
        ],
        'modal'     => [
            'title' => 'Додати подію до календаря',
        ],
        'success'   => 'Нагадування \':event\' додане до календаря.',
    ],
    'events'        => [
        'end'       => '(завершення)',
        'filters'   => [
            'show_after'    => 'Показати сьогодні й пізніше',
            'show_all'      => 'Показати все',
            'show_before'   => 'Показати до сьогодні',
        ],
        'start'     => '(початок)',
    ],
    'fields'        => [
        'colour'                => 'Колір',
        'comment'               => 'Коментар',
        'current_day'           => 'Поточний день',
        'current_month'         => 'Поточний місяць',
        'current_year'          => 'Поточний рік',
        'date'                  => 'Поточна дата',
        'day'                   => 'День',
        'default_layout'        => 'Шаблон за замовчанням',
        'intercalary'           => 'Високосні дні',
        'is_incrementing'       => 'Наступна дата',
        'is_recurring'          => 'Повторювана',
        'leap_year_amount'      => 'Додати дні',
        'leap_year_month'       => 'Місяць',
        'leap_year_offset'      => 'Кожні',
        'leap_year_start'       => 'Високосний рік',
        'length'                => 'Тривалість події',
        'length_days'           => ':count день|:count днів',
        'month'                 => 'Місяць',
        'months'                => 'Місяці',
        'moons'                 => 'Супутники',
        'parameters'            => 'Параметри',
        'recurring_periodicity' => 'Періодичність повтору',
        'recurring_until'       => 'Повторювати до року',
        'reset'                 => 'Скидати щотижня',
        'seasons'               => 'Сезони',
        'skip_year_zero'        => 'Пропустити нульовий рік',
        'start_offset'          => 'Початковий зсув',
        'suffix'                => 'Суфікс',
        'week_names'            => 'Назви тижнів',
        'weekdays'              => 'Дні тижня',
        'year'                  => 'Рік',
    ],
    'helpers'       => [
        'default_layout'    => 'Виберіть шаблон календаря, який використовуватиметься для перегляду за замовчанням.',
        'month_type'        => 'Високосні місяці не використовують днів тижня, але все одно впливають на Місяці та сезони.',
        'moon_offset'       => 'За замовчанням перший повний місяць з\'являється у перший день нульового року. Зміна налаштування змінить час появи першого повного місяця. Це значення може бути від\'ємним (аж до тривалості першого місяця) або додатним (аж до тривалості прешого місяця).',
        'nested_without'    => 'Відображення всіх календарів, що не мають батьківського календаря. Клікніть на рядок, щоб побачити похідні календарі.',
        'start_offset'      => 'За замовчанням календар починається з першого дня тижня у нульовий рік. Зміна цього поля впливає на положення першого дня календаря.',
    ],
    'hints'         => [
        'event_length'      => 'На який час встановлена тривалість події. Подія не може тривати довше двох місяців.',
        'intercalary'       => 'Дні, що випадають зі стандартних місяців та тижнів. Вони не впливають на дні тижня, але впливають на місячні цикли.',
        'is_incrementing'   => 'У наступних календарях поточна дата автоматично збільшуватиметься на 00:00 UTC.',
        'is_recurring'      => 'Подію можна зробити повторюваною. Вона з\'являтиметься кожного року в ту саму дату.',
        'months'            => 'Ваш календар повинен мати принаймні 2 місяці.',
        'moons'             => 'Додавання супутників призведе до їхньої появи в календарі на кожний повний місяць та новий місяць. Якщо період повного місяця довший за 10 днів, перша й третя чверті місяця також відображатимуться.',
        'parent_calendar'   => 'Вказання батьківського календаря включатиме нагадування та погодні ефекти з батьківського календаря.',
        'reset'             => 'Завжди починати початок місяця чи року з першого дня тижня.',
        'seasons'           => 'Створіть для календаря сезони, вказавши, коли кожен із них починається. Kanka потурбується про все інше.',
        'skip_year_zero'    => 'За замовчанням перший рік календаря - це нульовий рік. Увімкніть цю функцію, щоб пропустити нульовий рік.',
        'weekdays'          => 'Встановіть назви днів тижня. Треба щонайменше 2 дні тижня.',
        'weeks'             => 'Визначте кілька імен для найбільш важливих тижнів свого календаря.',
        'years'             => 'Деякі роки настільки важливі, що мають власні імена.',
    ],
    'layouts'       => [
        'month'     => 'Місяць',
        'monthly'   => 'Щомісяця за замовчанням',
        'year'      => 'Рік',
        'yearly'    => 'Щорічно за замовчанням',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Перемикач року',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Високосний',
        'standard'      => 'Звичайний',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'fullmoon'      => 'Повний місяць',
                'fullmoon_name' => ':moon повний місяць',
                'month'         => 'Щомісяця',
                'newmoon'       => 'Новий місяць',
                'newmoon_name'  => ':moon новий місяць',
                'none'          => 'Немає',
                'unnamed_moon'  => 'Місяць :number',
                'year'          => 'Щороку',
            ],
        ],
        'resets'    => [
            ''      => 'Немає',
            'month' => 'Щомісяця',
            'year'  => 'Щороку',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Високосні дні',
        'leap_year'     => 'Високосний рік',
        'months'        => 'Місяці',
        'weeks'         => 'Тижні',
        'years'         => 'Названі роки',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Тривалість у днях',
            'month'     => 'У кінці кожного місяця',
            'name'      => 'Назва високосних',
        ],
        'month'         => [
            'alias' => 'Код місяця',
            'length'=> 'Дні',
            'name'  => 'Назва місяця',
            'type'  => 'Тип',
        ],
        'moon'          => [
            'fullmoon'  => 'Повний місяць кожні (днів)',
            'name'      => 'Назва місяця',
            'offset'    => 'Зміщення першого повного місяця',
        ],
        'seasons'       => [
            'day'   => 'День початку',
            'month' => 'Місяць початку',
            'name'  => 'Назва сезону',
        ],
        'weeks'         => [
            'name'      => 'Назва тижня',
            'number'    => 'Номер',
        ],
        'year'          => [
            'name'      => 'Назва року',
            'number'    => 'РІк',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Колір',
        'comment'           => 'День народження, фестиваль, сонцестояння',
        'date'              => 'Поточна дата',
        'leap_year_amount'  => 'Кількість днів, доданих у високосний рік',
        'leap_year_month'   => 'Місяць, у якому додані дні',
        'leap_year_offset'  => 'Через скільки років настає високосний рік',
        'leap_year_start'   => 'Перший рік, що є високосним',
        'length'            => 'Тривалість події у днях',
        'months'            => 'Кількість місяців у році',
        'recurring_until'   => 'Останній повторюваний рік (залиште порожнім для вічного повторення)',
        'seasons'           => 'Кількість сезонів',
        'suffix'            => 'Суфікс поточної ери (до н.е., н.е.)',
        'type'              => 'Тип календаря',
        'weekdays'          => 'Кількість днів у тижні',
    ],
    'show'          => [
        'missing_details'       => 'Цей календар неможливо відобразити. Календарі потребують щонайменше 2 місяці та 2 дні тижня для правильної генерації.',
        'moon_1first_quarter'   => ':moon перша чверть',
        'moon_full'             => ':moon повний місяць',
        'moon_last_quarter'     => ':moon остання чверть',
        'moon_new'              => ':moon новий місяць',
        'tabs'                  => [
            'events'    => 'Нагадування',
            'weather'   => 'Погода',
        ],
    ],
    'sorters'       => [
        'after' => 'Сьогодні й пізніше',
        'before'=> 'Сьогодні й раніше',
    ],
    'validators'    => [
        'moon_offset'   => 'Тривалість першого повного місяця не може бути більшою за тривалість першого місяця календаря.',
    ],
];
