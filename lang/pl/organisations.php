<?php

return [
    'create'        => [
        'title' => 'Nowa organizacja',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'is_defunct'    => 'Nie funkcjonuje',
        'members'       => 'Członkowie',
        'organisation'  => 'Organizacja źródłowa',
        'organisations' => 'Organizacje pochodne',
    ],
    'helpers'       => [
        'descendants'       => 'Na liście znajdują się wszystkie organizacje wywodzące się od tej, nie tylko bezpośrednio.',
        'nested_without'    => 'Wyświetlono wszystkie organizacje nieposiadające źródła. Kliknij na rząd, by wyświetlić organizacje pochodne.',
    ],
    'hints'         => [
        'is_defunct'    => 'Ta organizacja obecnie nie działa',
    ],
    'index'         => [],
    'members'       => [
        'actions'       => [
            'add'       => 'Dodaj członka',
            'submit'    => 'Dodaj członka',
        ],
        'create'        => [
            'success'   => 'Dodano członka organizacji.',
            'title'     => 'Nowy członek organizacji :name',
        ],
        'destroy'       => [
            'success'   => 'Usunięto członka organizacji.',
        ],
        'edit'          => [
            'success'   => 'Zmieniono członka organizacji.',
            'title'     => 'Edycja członka :name',
        ],
        'fields'        => [
            'character'     => 'Postać',
            'organisation'  => 'Organiacja',
            'parent'        => 'Zwierzchnik',
            'pinned'        => 'Przypnij',
            'role'          => 'Rola',
            'status'        => 'Rodzaj członkostwa',
        ],
        'helpers'       => [
            'all_members'   => 'Wszystkie postaci należące do tej organizacji i organizacji pochodnych.',
            'members'       => 'Wszystkie postaci należące do tej organizacji.',
            'pinned'        => 'Wybierz czy członkostwo ma być wyświetlane w sekcji "przypięte" wskazanych elementów.',
        ],
        'pinned'        => [
            'both'          => 'Do obu',
            'character'     => 'Do postaci',
            'none'          => 'Do żadnego',
            'organisation'  => 'Do organizacji',
        ],
        'placeholders'  => [
            'character' => 'Wybierz postać',
            'parent'    => 'Zwierzchnik tego członka',
            'role'      => 'Przywódca, członek, Wielki Septon, mistrz szpiegów',
        ],
        'status'        => [
            'active'    => 'Aktywna działalność',
            'inactive'  => 'Była działalność',
            'unknown'   => 'Nieznany',
        ],
        'title'         => 'Członkowie organizacji :name',
    ],
    'organisations' => [
        'title' => 'Organizacje organizacji :name',
    ],
    'placeholders'  => [
        'location'  => 'Wybierz miejsce',
        'name'      => 'Nazwa organizacji',
        'type'      => 'Kult, gang, podziemie niepodległościowe, fandom',
    ],
    'show'          => [
        'tabs'  => [
            'organisations' => 'Organizacje',
        ],
    ],
];
