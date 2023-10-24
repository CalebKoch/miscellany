<?php

return [
    'actions'       => [
        'add_epoch'         => 'Korszak hozzáadása',
        'add_intercalary'   => 'Naptárközi napok hozzáadása',
        'add_month'         => 'Hónap hozzáadása',
        'add_moon'          => 'Hold hozzáadása',
        'add_reminder'      => 'Adj hozzá egy emlékeztetőt',
        'add_season'        => 'Évszak hozzáadása',
        'add_weather'       => 'Állítsd be az időjáráshatást',
        'add_week'          => 'Elnevezett hét hozzáadása',
        'add_weekday'       => 'Hétköznap hozzáadása',
        'add_year'          => 'Egy év nevének hozzáadása',
        'set_today'         => 'Legyen ez a mai nap!',
        'today'             => 'Ma',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Minden évben megtörténik',
    ],
    'colours'       => [],
    'create'        => [
        'title' => 'Új naptár',
    ],
    'destroy'       => [],
    'edit'          => [
        'today' => 'Naptár dátum frissítve.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Létező entitás',
            'new'       => 'Új esemény',
            'switch'    => 'Választás megváltoztatása',
        ],
        'create'    => [
            'success'   => 'A naptári eseményt létrehoztuk',
            'title'     => 'Esemény hozzáadása a \':name\' naptárhoz',
        ],
        'destroy'   => '\':name\' naptárból az eseményt eltávolítottuk',
        'edit'      => [
            'success'   => 'A naptári eseményt frissítettük',
            'title'     => ':name naptár eseményének frissítése',
        ],
        'helpers'   => [
            'add'               => 'Egy létező esemény hozzáadása ehhez a naptárhoz.',
            'new'               => 'Vagy egy új esemény létrehozása egyszerűen egy név megadásával.',
            'other_calendar'    => 'Emlékeztetőt szerkesztesz a :calendar naptáron.',
        ],
        'modal'     => [
            'title' => 'Esemény hozzáadása a naptárhoz',
        ],
        'success'   => '\':event\' eseményt hozzáadtuk a naptárhoz.',
    ],
    'events'        => [],
    'fields'        => [
        'colour'                => 'Szín',
        'comment'               => 'Megjegyzés',
        'current_day'           => 'Jelenlegi nap',
        'current_month'         => 'Jelenlegi hónap',
        'current_year'          => 'Jelenlegi év',
        'date'                  => 'Jelenlegi dátum',
        'intercalary'           => 'Naptárközi napok',
        'is_incrementing'       => 'Dinamikusan haladó naptár',
        'is_recurring'          => 'Ismétlődő',
        'leap_year_amount'      => 'Napok hozzáadása',
        'leap_year_month'       => 'Hónap',
        'leap_year_offset'      => 'Minden',
        'leap_year_start'       => 'Szökőév',
        'length'                => 'Esemény időtartama',
        'length_days'           => ':count nap|:count napok',
        'months'                => 'Hónapok',
        'moons'                 => 'Holdak',
        'parameters'            => 'Paraméterek',
        'recurring_periodicity' => 'Ismétlődés gyakorisága',
        'recurring_until'       => 'Ismétlődik az év végéig',
        'reset'                 => 'Hét újraindulása',
        'seasons'               => 'Évszakok',
        'start_offset'          => 'Kezdő offszet',
        'suffix'                => 'Előtag',
        'week_names'            => 'Elnevezett hetek',
        'weekdays'              => 'Hétköznapok',
    ],
    'helpers'       => [
        'month_type'        => 'A naptárközi hónapok nem számolják a hét napjait, de a holdfázisokat és az évszakokat igen.',
        'nested_without'    => 'Minden olyan naptár megmutatása, amelynek nincs szülő naptára. Klikkelj egy sorra, hogy lást a gyermeknaptárakat.',
        'start_offset'      => 'Alapértelmezés szerint a naptár a 0-ik év első hétköznapjával kezdődik. Ezen mező értékének megváltoztatásával beállítható, hogy a naptár első napja hova essen.',
    ],
    'hints'         => [
        'event_length'      => 'Mennyi ideig tart az esemény. Egy esemény nem lehet hosszabb két hónapnál.',
        'intercalary'       => 'Napok, melyek a standard hónapokon és heteken kívül esnek. Nincsenek hatással a hét napjaira, de a holdfázisokra igen.',
        'is_incrementing'   => 'A dinamikusan haladó naptár aktuális napja automatikusan a következő napra lép előre minden UTC 00:00 időpontban.',
        'is_recurring'      => 'Ismétlődővé tehetsz egy eseményt, ami minden évben ugyanakkor jelenik meg.',
        'months'            => 'A naptáradnak legalább két hónapból kell állnia.',
        'moons'             => 'Ha hozzáadsz egy holdat, az minden teliholdkor megjelenik a naptárban.',
        'parent_calendar'   => 'Szülő naptár hozzáadásával a jelenlegi naptár örökölni fogja az emlékeztetőket, és a beállított időjárást a szülő naptárból.',
        'reset'             => 'Az új hónap, vagy év első napja minden esetben a hét első napjával indul.',
        'seasons'           => 'Hozz létre évszakokat a naptáradhoz úgy, hogy megadod, mikor kezdődnek. A többiről a Kakna intézkedik.',
        'weekdays'          => 'Állítsd be a hétköznapok neveit. Legalább két hétköznap szükséges.',
        'weeks'             => 'Meghatározhatsz speciálisan elnevezett heteket a naptáradban.',
        'years'             => 'Némelyik év olyan fontos, hogy saját neve van.',
    ],
    'index'         => [],
    'layouts'       => [
        'month' => 'Hónap',
        'year'  => 'Év',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Év kapcsoló',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Naptárközi',
        'standard'      => 'Standard',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'fullmoon'      => 'Telihold',
                'fullmoon_name' => ':moon telihold',
                'month'         => 'Havi',
                'newmoon'       => 'Újhold',
                'newmoon_name'  => ':moon újhold',
                'none'          => 'Semmi',
                'unnamed_moon'  => ':number hold',
                'year'          => 'Évi',
            ],
        ],
        'resets'    => [
            ''      => 'Nincs',
            'month' => 'Havi',
            'year'  => 'Évi',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Naptárközi napok',
        'leap_year'     => 'Szököév',
        'months'        => 'Hónapok',
        'weeks'         => 'Hetek',
        'years'         => 'Nevesített évek',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Időtartam napokban',
            'month'     => 'Melyik hónap végén?',
            'name'      => 'Naptárközi időszak neve',
        ],
        'month'         => [
            'alias' => 'Hónap álneve',
            'length'=> 'Napok száma',
            'name'  => 'Hónap neve',
            'type'  => 'Típus',
        ],
        'moon'          => [
            'fullmoon'  => 'Telihold ennyi naponta',
            'name'      => 'Hold neve',
            'offset'    => 'Első telihold offszet',
        ],
        'seasons'       => [
            'day'   => 'Nappal kezdete',
            'month' => 'Hónap kezdete',
            'name'  => 'Évszak neve',
        ],
        'weeks'         => [
            'name'      => 'Hét neve',
            'number'    => 'Szám',
        ],
        'year'          => [
            'name'      => 'Év neve',
            'number'    => 'Év',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Szín',
        'comment'           => 'Születésnap, fesztivál, napforduló',
        'date'              => 'Jelenlegi dátum',
        'leap_year_amount'  => 'Szökőév plusz napjainak száma',
        'leap_year_month'   => 'A plusz napok hónapja',
        'leap_year_offset'  => 'Minden ennyiedik év szökőév',
        'leap_year_start'   => 'Az első év, ami szökőév',
        'length'            => 'Esemény időtartama napokban',
        'months'            => 'A hónapok száma egy évben',
        'recurring_until'   => 'Legutolsó ismétlődő év (hagyd üresen, ha mindig ismétlődik)',
        'seasons'           => 'Évszakok száma',
        'suffix'            => 'Jelenlegi kor előtagja (pl. ie., isz.)',
        'type'              => 'A naptár típusa',
        'weekdays'          => 'Napok száma egy héten',
    ],
    'show'          => [
        'missing_details'   => 'A naptár nem jeleníthető meg - legalább két hónapot és kétnapos heteket kell tartalmazzon.',
        'tabs'              => [
            'events'    => 'Naptári események',
            'weather'   => 'Időjárás',
        ],
    ],
    'sorters'       => [
        'after' => 'Ma és utána',
        'before'=> 'Ma és előtte',
    ],
];
