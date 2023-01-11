<?php

return [
    'actions'       => [
        'add_appearance'    => 'Füge ein Aussehen hinzu',
        'add_organisation'  => 'Füge eine Organisation hinzu',
        'add_personality'   => 'Füge eine Persönlichkeit hinzu',
    ],
    'conversations' => [
        'title' => 'Charakter :name Unterhaltungen',
    ],
    'create'        => [
        'title' => 'Erstelle einen neuen Charakter',
    ],
    'destroy'       => [],
    'dice_rolls'    => [
        'hint'  => 'Würfelwürfe können einem Charakter zugewiesen werden, um in einem Spiel verwendet zu werden.',
        'title' => 'Charakter :name Würfelwürfe',
    ],
    'edit'          => [],
    'fields'        => [
        'age'                       => 'Alter',
        'families'                  => 'Familien',
        'is_appearance_pinned'      => 'Angeheftetes Aussehen',
        'is_dead'                   => 'Tot',
        'is_personality_pinned'     => 'Angeheftete Persönlichkeit',
        'is_personality_visible'    => 'Persönlichkeit sichtbar?',
        'life'                      => 'Leben',
        'physical'                  => 'Körper',
        'pronouns'                  => 'Pronomen',
        'sex'                       => 'Geschlecht',
        'title'                     => 'Titel',
        'traits'                    => 'Eigenschaften',
    ],
    'helpers'       => [
        'age'   => 'Sie können dieses Objektes mit einem Kalender Ihrer Kampagne verknüpfen, um stattdessen automatisch dessen Alter zu berechnen. :more.',
    ],
    'hints'         => [
        'is_appearance_pinned'      => 'Wenn diese Option aktiviert ist, werden die Aussehensmerkmale des Charakters unter dem Eintrag auf der Übersichtsseite angezeigt.',
        'is_dead'                   => 'Dieser Charakter ist tot',
        'is_personality_pinned'     => 'Wenn diese Option aktiviert ist, werden die PErsönlichkeitsmerkmale des Charakters unter dem Eintrag auf der Übersichtsseite angezeigt.',
        'is_personality_visible'    => 'Du kannst den kompletten Persönlichkeitsbereich vor deinen Zuschauern verstecken.',
        'personality_not_visible'   => 'Persönlichkeitsmerkmale dieses Charakters sind derzeit nur für Administratoren sichtbar.',
        'personality_visible'       => 'Persönlichkeitsmerkmale dieses Charakters sind für alle sichtbar.',
    ],
    'index'         => [],
    'items'         => [
        'hint'  => 'Items können einem Charakter hinzugefügt werden und werden dann hier dargestellt.',
        'title' => 'Charakter :name Gegenstände',
    ],
    'journals'      => [
        'title' => 'Charakter :name Logbücher',
    ],
    'maps'          => [
        'title' => 'Charakter :name Beziehungskarte',
    ],
    'organisations' => [
        'actions'       => [
            'add'       => 'Organisation hinzufügen',
            'submit'    => 'Organisation hinzufügen',
        ],
        'create'        => [
            'success'   => 'Charakter wurde der Organisation hinzugefügt.',
            'title'     => 'Neue Organisation für :name',
        ],
        'destroy'       => [
            'success'   => 'Character aus Organisation entfernt.',
        ],
        'edit'          => [
            'success'   => 'Organisation des Charakters aktualisiert',
            'title'     => 'Aktualisiere Organisation für :name',
        ],
        'fields'        => [
            'organisation'  => 'Organisation',
            'role'          => 'Rolle',
        ],
        'hint'          => 'Charaktere können Mitglied mehrerer Organisationen sein, um darzustellen, für wen sie arbeiten oder welcher Geheimgesellschaft sie angehören.',
        'placeholders'  => [
            'organisation'  => 'Wähle eine Organisation...',
        ],
        'title'         => 'Charakter :name Organisationen',
    ],
    'placeholders'  => [
        'age'               => 'Alter',
        'appearance_entry'  => 'Beschreibung',
        'appearance_name'   => 'Haare, Augen, Haut, Größe',
        'name'              => 'Name des Charakters',
        'personality_entry' => 'Details',
        'personality_name'  => 'Persönlichkeitsmerkmal: Ziele, Gewohnheiten, Ängste, Bindungen',
        'physical'          => 'Körper',
        'pronouns'          => 'Er / Ihn, Sie / Sie, Sie / Ihre',
        'sex'               => 'Geschlecht',
        'title'             => 'Titel',
        'traits'            => 'Eigenschaften',
        'type'              => 'NSC, Spieler Charakter, Gottheit',
    ],
    'quests'        => [
        'helpers'   => [
            'quest_giver'   => 'Quests bei denen der Charakter Auftraggeber war.',
            'quest_member'  => 'Quests an denen der Charakter teilgenommen hat.',
        ],
    ],
    'sections'      => [
        'appearance'    => 'Aussehen',
        'general'       => 'Allgemeine Informationen',
        'personality'   => 'Persönlichkeit',
    ],
    'show'          => [
        'tabs'  => [
            'organisations' => 'Organisationen',
        ],
    ],
    'warnings'      => [
        'personality_hidden'    => 'Es ist dir nicht erlaubt, die Persönlichkeit dieses Charakters zu bearbeiten.',
    ],
];
