<?php

return [
    'actions'       => [
        'add'   => 'Ajouter une ère',
    ],
    'bulks'         => [
        'delete'    => '{0} :count ère supprimée.|{1} :count ère supprimée.|[2,*] :count ères supprimées.',
    ],
    'create'        => [
        'success'   => 'L\'ère :name a été créée.',
        'title'     => 'Nouvelle ère',
    ],
    'delete'        => [
        'success'   => 'L\'ère :name a été supprimée.',
    ],
    'edit'          => [
        'success'   => 'L\'ère :name a été modifiée.',
        'title'     => 'Modifier l\'ère :name',
    ],
    'fields'        => [
        'abbreviation'  => 'Abbreviation',
        'end_year'      => 'Année de fin',
        'is_collapsed'  => 'Réduit',
        'start_year'    => 'Année de début',
    ],
    'helpers'       => [
        'eras'          => 'La chronologie a besoin d\'être créée avant de pouvoir ajouter des ères.',
        'is_collapsed'  => 'L\'ère est réduite (minimisée) par défaut.',
        'primary'       => 'Séparer la chronologie en plusieurs ères. Une chronologie a besoin au moins d\'une ère pour fonctionner correctement.',
    ],
    'index'         => [
        'title' => 'Ères de :name',
    ],
    'placeholders'  => [
        'abbreviation'  => 'AD, BC, BCE',
        'end_year'      => 'L\'année durant laquelle l\'ère prend fin. Laisser vide si c\'est l\'ère en cours.',
        'name'          => 'Âge modern, âge de bronze, guerres galactiques',
        'start_year'    => 'L\'année durant laquelle l\'ère commence. Laisser vide si c\'est la première ère.',
    ],
    'reorder'       => [],
];
