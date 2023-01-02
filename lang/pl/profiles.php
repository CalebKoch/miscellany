<?php

return [
    'appearance'                    => [
        'helpers'   => [
            'campaign-order'    => 'Zmienia kolejność wyświetlania kampanii w menu bocznym.',
            'date-format'       => 'Sposób zapisywania prawdziwej daty.',
            'pagination'        => 'Zmienia liczbę elementów wyświetlanych na różnych listach.',
        ],
    ],
    'avatar'                        => [
        'success'   => 'Zmieniono awatar.',
    ],
    'campaign_switcher_order_by'    => [
        'alphabetical'      => 'Kolejność alfabetyczna',
        'date_created'      => 'Data stworzenia',
        'date_joined'       => 'Data dołączenia',
        'default'           => 'Domyślna',
        'r_alphabetical'    => 'Odwrócona kolejność alfabetyczna',
        'r_date_created'    => 'Odwrócona data stworzenia',
        'r_date_joined'     => 'Odwócona data dołączenia',
    ],
    'edit'                          => [
        'success'   => 'Zmieniono profil',
    ],
    'editors'                       => [
        'legacy'        => 'Legacy (TinyMCE 4)',
        'summernote'    => 'Summernote',
    ],
    'fields'                        => [
        'avatar'                    => 'Awatar',
        'bio'                       => 'Życiorys',
        'email'                     => 'Email',
        'hide_subscription'         => 'Ukryj moje imię na stronie :hall_of_fame.',
        'last_login_share'          => 'Informuj innych członków kampanii o moim ostatnim logowaniu',
        'name'                      => 'Nazwa',
        'new_password'              => 'Nowe hasło',
        'new_password_confirmation' => 'Potwierdź nowe hasło',
        'newsletter'                => 'Chcę dostawać okazjonalne emaile',
        'password'                  => 'Obecne hasło',
        'profile-name'              => 'Nazwa profilu',
        'settings'                  => 'Ustawienia',
        'theme'                     => 'Motyw',
    ],
    'helpers'                       => [
        'profile-name'  => 'Zmienia nazwę wyświetlaną w twoim :profile i na :marketplace. Jeżeli wiersz jest pusty, użyta zostanie nazwa konta.',
    ],
    'newsletter'                    => [
        'helpers'   => [
            'header'    => 'Zasubskrybuj następujące powiadomienia e-mailem, by być na bieżąco z Kanką.',
        ],
        'options'   => [
            'monthly'   => 'Newsletter Kanki',
        ],
        'title'     => 'Newslettery',
    ],
    'password'                      => [
        'success'   => 'Zmieniono hasło',
    ],
    'placeholders'                  => [
        'bio'                       => 'Kilka informacji osobistych do wyświetlenia w profilu publicznym.',
        'email'                     => 'Twój adres email',
        'name'                      => 'Nazwa, która będzie wyświetlana',
        'new_password'              => 'Twoje nowe hasło',
        'new_password_confirmation' => 'Potwierdź nowe hasło',
        'password'                  => 'Potwierdź zmianę wpisując hasło',
    ],
    'sections'                      => [
        'dangerzone'    => 'Uwaga!',
        'delete'        => [
            'confirm'       => 'Usuń teraz moje konto',
            'delete'        => 'Usuń konto',
            'goodbye'       => 'Jeśli tak, przepisz :code w polu poniżej.',
            'helper'        => 'Usunięcie konta spowoduje również usunięcie wszystkich kampanii, których jesteś jednym członkiem. To działanie nieodwracalne, którego nie można cofnąć.',
            'subscribed'    => 'Anuluj :suscription zanim możliwe będzie usunięcie konta.',
            'title'         => 'Usuwanie konta',
            'warning'       => 'Po usunięciu konta wszystkie dane zostaną wykasowane. Czy na pewno chcesz to zrobić?',
        ],
        'password'      => [
            'title' => 'Zmiana hasła',
        ],
    ],
    'settings'                      => [
        'fields'    => [
            'advanced_mentions'             => 'Zaawansowane wzmianki',
            'campaign_switcher_order_by'    => 'Kolejność wyświetlania kampanii',
            'date_format'                   => 'Format daty',
            'default_nested'                => 'Domyślny widok hierarchii',
            'editor'                        => 'Edytor tekstu',
            'new_entity_workflow'           => 'Tworzenie elementów',
            'pagination'                    => 'Elementy na stronie',
        ],
        'helpers'   => [
            'bio'       => 'Życiorys będzie widoczny w twoim :link.',
            'editor_v2' => 'Jeżeli używasz poprzedniego edytora tekstu (TinyMCE) nie będziesz mieć dostępu do powiadomień na urządzeniach mobilnych oraz niektórych funkcji, na przykład galerii kampanii.',
            'profile'   => 'profilu publicznym',
        ],
        'hints'     => [
            'advanced_mentions'     => 'Po zaznaczeniu, podczas edycji elementów będą generowane wzmianki w formacie [element:123].',
            'default_nested'        => 'Zaznacz, jeżeli chcesz by listy elementów wyświetlały się domyślnie w widoku hierarchii (gdy to możliwe).',
            'new_entity_workflow'   => 'Gdy stworzysz nowy element, domyślnie wyświetli się lista elementów tego typu. Możesz to zmienić i automatycznie przechodzić do widoku właśnie stworzonego elementu.',
        ],
        'success'   => 'Zmieniono ustawienia.',
    ],
    'theme'                         => [
        'helper'    => 'Motyw kampanii ma pierwszeństwo przed własnymi ustawieniami.',
        'success'   => 'Zmieniono motyw.',
        'themes'    => [
            'dark'      => 'Ciemny',
            'default'   => 'Domyślny',
            'future'    => 'Futurystyczny',
            'midnight'  => 'Granatowy',
        ],
    ],
    'title'                         => 'Aktualizuj profil',
    'workflows'                     => [
        'created'   => 'Stworzony element',
        'default'   => 'Lista elementów',
    ],
];
