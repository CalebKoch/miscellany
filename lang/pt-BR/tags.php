<?php

return [
    'children'      => [
        'actions'   => [
            'add'   => 'Adicionar à tag',
        ],
        'create'    => [
            'success'   => 'Adicionada a tag :name a entidade.',
            'title'     => 'Adicionar uma tag a :name',
        ],
        'title'     => 'Filhos da tag :name',
    ],
    'create'        => [
        'title' => 'Nova tag',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'children'          => 'Filhos',
        'is_auto_applied'   => 'Aplicar automaticamente a novas entidades',
        'is_hidden'         => 'Oculto do cabeçalho e da dica de ferramenta',
        'tag'               => 'Tag Principal',
        'tags'              => 'Subtags',
    ],
    'helpers'       => [
        'nested_without'    => 'Mostrando todas as tags que não tem uma tag-pai. Clique em uma linha para ver as tags-filhos.',
        'no_children'       => 'No momento, não há entidades marcadas com esta tag.',
    ],
    'hints'         => [
        'children'          => 'Esta lista contém todas entidades diretamente relacionadas a esta tag e todas tags aninhadas nela.',
        'is_auto_applied'   => 'Marque esta opção para aplicar automaticamente esta tag a entidades recém-criadas.',
        'is_hidden'         => 'Se marcada, esta tag não será exibida no cabeçalho ou dica de ferramenta de uma entidade.',
        'tag'               => 'Exibidas abaixo estão todas as tags diretamente relacionadas a ela.',
    ],
    'index'         => [],
    'new_tag'       => 'Nova tag',
    'placeholders'  => [
        'name'  => 'Nome da tag',
        'tag'   => 'Escolha a Tag Principal',
        'type'  => 'Tradições, Guerras, História, Religião, Vexilologia',
    ],
    'show'          => [
        'tabs'  => [
            'children'  => 'Filhos',
            'tags'      => 'Tags',
        ],
    ],
    'tags'          => [
        'title' => 'Filhos da tag :name',
    ],
];
