<?php

return [
    'create'        => [
        'title' => 'Ajouter une quête',
    ],
    'destroy'       => [],
    'edit'          => [],
    'elements'      => [
        'create'    => [
            'success'   => 'L\'entité :entity ajoutée à la quête.',
            'title'     => 'Nouvel élément pour :name',
        ],
        'destroy'   => [
            'success'   => 'L\'élément de quête :entity retiré.',
        ],
        'edit'      => [
            'success'   => 'L\'élément de quête :entity modifié.',
            'title'     => 'Modifier l\'élément de quête pour :name',
        ],
        'fields'    => [
            'description'       => 'Description',
            'entity_or_name'    => 'Sélection soit d\'une entité de la campagne, soit d\'un nom pour cet élément.',
            'name'              => 'Nom',
        ],
    ],
    'fields'        => [
        'copy_elements' => 'Copier les éléments de la quête',
        'date'          => 'Date',
        'element_role'  => 'Rôle',
        'instigator'    => 'Instigateur',
        'is_completed'  => 'Completée',
        'role'          => 'Rôle',
    ],
    'helpers'       => [
        'is_completed'      => 'Sélectionner si la quête est considérée comme completée.',
        'nested_without'    => 'Affichage des quêtes sans parent. Cliquer sur une rangée pour afficher les quêtes enfants.',
    ],
    'hints'         => [
        'quests'    => 'Un réseau de quêtes liées peut être créé à l\'aide du champ Quête Parentale.',
    ],
    'index'         => [],
    'placeholders'  => [
        'date'      => 'Date réelle de la quête',
        'entity'    => 'Nom d\'un élément dans la quête',
        'role'      => 'Le rôle de l\'entité dans la quête.',
        'type'      => 'Principale, side quest, personnage',
    ],
    'show'          => [
        'actions'   => [
            'add_element'   => 'Ajouter un élément',
        ],
        'tabs'      => [
            'elements'  => 'Éléments',
        ],
    ],
];
