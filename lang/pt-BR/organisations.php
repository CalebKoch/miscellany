<?php

return [
    'create'        => [
        'title' => 'Criar nova organização',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'is_defunct'    => 'Extinta',
        'members'       => 'Membros',
        'organisation'  => 'Organização Primária',
        'organisations' => 'Suborganizações',
    ],
    'helpers'       => [
        'descendants'       => 'Esta lista contém todas organizações que descendem desta organização, e não apenas aquelas diretamente relacionadas a ela.',
        'nested_without'    => 'Mostrando todas as organizações que não tem uma organização-pai. Clique em uma linha para ver as organizações-filhos.',
    ],
    'hints'         => [
        'is_defunct'    => 'Esta organização está extinta.',
    ],
    'index'         => [],
    'members'       => [
        'actions'       => [
            'add'       => 'Adicionar um membro',
            'submit'    => 'Adicionar membro',
        ],
        'create'        => [
            'success'   => 'Membro adicionado à organização',
            'title'     => 'Novo Membro da Organização para :name',
        ],
        'destroy'       => [
            'success'   => 'Membro removido da organização',
        ],
        'edit'          => [
            'success'   => 'Membro da organização atualizado.',
            'title'     => 'Atualizar Membro para :name',
        ],
        'fields'        => [
            'character'     => 'Personagem',
            'organisation'  => 'Organização',
            'parent'        => 'Superior',
            'pinned'        => 'Fixado',
            'role'          => 'Função',
            'status'        => 'Status do Membro',
        ],
        'helpers'       => [
            'all_members'   => 'Todos personagens que são membros desta Organização e suas suborganizações',
            'members'       => 'Todos personagens que são membros desta Organização.',
            'pinned'        => 'Escolha se este membro deve ser mostrado na seção fixada da visão geral de suas entidades associadas.',
        ],
        'pinned'        => [
            'both'          => 'Ambos',
            'character'     => 'Personagem',
            'none'          => 'Nenhum',
            'organisation'  => 'Organização',
        ],
        'placeholders'  => [
            'character' => 'Escolha um personagem',
            'parent'    => 'Quem é o superior desse membro',
            'role'      => 'Líder, Membro, Alto Septão, Mestre em Espionagem',
        ],
        'status'        => [
            'active'    => 'Membro ativo',
            'inactive'  => 'Membro inativo',
            'unknown'   => 'Status desconhecido',
        ],
        'title'         => 'Membros da Organização :name',
    ],
    'organisations' => [
        'title' => 'Organizações da Organização :name',
    ],
    'placeholders'  => [
        'location'  => 'Escolha um local',
        'name'      => 'Nome da organização',
        'type'      => 'Culto, Gangue, Rebelião, Fanáticos',
    ],
    'show'          => [
        'tabs'  => [
            'organisations' => 'Organizações',
        ],
    ],
];
