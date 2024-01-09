<?php

return [
    'abilities'     => [],
    'children'      => [
        'actions'       => [
            'attach'    => 'Anexar a entidades',
        ],
        'create'        => [
            'attach_success'    => '{1} Anexada a habilidade :name a :count entidade.|[2,*] Anexada a habilidade :name a :count entidades.',
            'modal'             => 'Anexar :name às entidades',
        ],
        'description'   => 'Entidades que possuem a habilidade',
        'title'         => 'Entidades com a Habilidade :name',
    ],
    'create'        => [
        'title' => 'Nova Habilidade',
    ],
    'destroy'       => [],
    'edit'          => [],
    'entities'      => [],
    'fields'        => [
        'charges'   => 'Cargas',
    ],
    'helpers'       => [
        'nested_without'    => 'Exibindo todas as habilidades que não possuem uma habilidade primária. Clique em uma linha para ver as habilidades secundárias.',
    ],
    'index'         => [],
    'placeholders'  => [
        'charges'   => 'Quantidade de cargas. Atributos de referência com {Level} * {CHA}',
        'name'      => 'Bola de Fogo, Alerta, Ataque Astuto',
        'type'      => 'Magia, Talento, Ataque',
    ],
    'reorder'       => [
        'parentless'    => 'Sem Habilidade Primária',
        'success'       => 'Habilidades reordenadas com sucesso.',
        'title'         => 'Reordenar as habilidades',
    ],
    'show'          => [
        'tabs'  => [
            'entities'  => 'Entidades',
            'reorder'   => 'Reordenar Habilidades',
        ],
    ],
];
