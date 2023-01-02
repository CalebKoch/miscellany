<?php

return [
    'actions'       => [
        'add_appearance'    => 'Pridať výzor',
        'add_organisation'  => 'Pridať organizáciu',
        'add_personality'   => 'Pridať osobnosť',
    ],
    'conversations' => [
        'title' => 'Diskusie s postavou :name',
    ],
    'create'        => [
        'title' => 'Nová postava',
    ],
    'destroy'       => [],
    'dice_rolls'    => [
        'hint'  => 'Hody kockami môžu byť priradené postavy, aby ich mohla v hre používať.',
        'title' => 'Hody kockami postavy :name',
    ],
    'edit'          => [],
    'fields'        => [
        'age'                       => 'Vek',
        'families'                  => 'Rody',
        'is_appearance_pinned'      => 'Pripnutý výzor',
        'is_dead'                   => 'Po smrti',
        'is_personality_pinned'     => 'Pripnutá osobnosť',
        'is_personality_visible'    => 'Osobnosť viditeľná',
        'life'                      => 'Život',
        'physical'                  => 'Telesné črty',
        'pronouns'                  => 'Zámená',
        'sex'                       => 'Pohlavie',
        'title'                     => 'Titul',
        'traits'                    => 'Vlastnosti',
    ],
    'helpers'       => [
        'age'   => 'Tento objekt môžeš referencovať v kalendári tvojej kampane a automaticky tak vypočítať vek. :more.',
    ],
    'hints'         => [
        'is_appearance_pinned'      => 'Ak aktívne, črty výzoru postavy sa zobrazia pod záznamom na stránke prehľadu.',
        'is_dead'                   => 'Táto postava je mŕtva.',
        'is_personality_pinned'     => 'Ak aktívne, črty osobnosti postavy sa zobrazia pod záznamom na stránke prehľadu.',
        'is_personality_visible'    => 'Celú sekciu o osobnosti vieš skryť pred užívateľmi, ktorí nemajú rolu Admin.',
        'personality_not_visible'   => 'Osobnostné črty tejto postavy sú aktuálne viditeľné len pre užívateľov s rolou Admin.',
        'personality_visible'       => 'Osobnostné črty tejto postavy sú viditeľné pre všetkých.',
    ],
    'index'         => [],
    'items'         => [
        'hint'  => 'Predmety môžu byť pridelené postavám a zobrazia sa na tomto mieste.',
        'title' => 'Predmety postavy :name',
    ],
    'journals'      => [
        'title' => 'Denníky postavy :name',
    ],
    'maps'          => [
        'title' => 'Mapa vzťahov postavy :name',
    ],
    'organisations' => [
        'actions'       => [
            'add'       => 'Pridať organizáciu',
            'submit'    => 'Pridať organizáciu',
        ],
        'create'        => [
            'success'   => 'Postava priradená organizácii.',
            'title'     => 'Nová organizácia pre :name',
        ],
        'destroy'       => [
            'success'   => 'Postava odstránená z organizácie.',
        ],
        'edit'          => [
            'success'   => 'Organizácia postavy upravená.',
            'title'     => 'Upraviť organizáciu :name',
        ],
        'fields'        => [
            'organisation'  => 'Organizácia',
            'role'          => 'Rola',
        ],
        'hint'          => 'Postavy môžu byť súčasťou viacerých organizácií, ktoré hovoria o tom, pre koho pracujú alebo ku ktorému tajnému spolku patria.',
        'placeholders'  => [
            'organisation'  => 'Vybrať organizáciu...',
        ],
        'title'         => 'Organizácie postavy :name',
    ],
    'placeholders'  => [
        'age'               => 'Vek',
        'appearance_entry'  => 'Popis',
        'appearance_name'   => 'Vlasy, oči, pokožka, výška',
        'name'              => 'Meno postavy',
        'personality_entry' => 'Detaily',
        'personality_name'  => 'Ciele, maniere, slabosti, vzťahy,...',
        'physical'          => 'Telesné črty',
        'pronouns'          => 'On/Jeho, Ona/Jej, Oni/Ich',
        'sex'               => 'Pohlavie',
        'title'             => 'Titul',
        'traits'            => 'Vlastnosti',
        'type'              => 'NPC, hráčska postava, božstvo',
    ],
    'quests'        => [
        'helpers'   => [
            'quest_giver'   => 'Úlohy, ktorých zadávateľom je táto postava.',
            'quest_member'  => 'Úlohy, ktorých členom je táto postava.',
        ],
    ],
    'sections'      => [
        'appearance'    => 'Výzor',
        'general'       => 'Všeobecné informácie',
        'personality'   => 'Osobnosť',
    ],
    'show'          => [
        'tabs'  => [
            'organisations' => 'Organizácie',
        ],
    ],
    'warnings'      => [
        'personality_hidden'    => 'Nemáš povolené upravovať črty osobnosti tejto postavy.',
    ],
];
