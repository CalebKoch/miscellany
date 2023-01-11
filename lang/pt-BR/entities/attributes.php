<?php

return [
    'actions'       => [
        'apply_template'    => 'Aplicar um Modelo de Atributo',
        'manage'            => 'Gerenciar',
        'more'              => 'Mais opções',
        'remove_all'        => 'Deletar tudo',
        'save_and_edit'     => 'Aplicar e Editar',
        'save_and_story'    => 'Aplicar e Visualizar',
        'show_hidden'       => 'Mostrar atributos ocultos',
    ],
    'errors'        => [
        'loop'      => 'Existe um loop infinito no cálculo desse atributo!',
        'too_many'  => 'Há muitos campos nesta entidade, não é possível adicionar mais atributos. Exclua alguns atributos primeiro antes de poder adicionar mais.',
    ],
    'fields'        => [
        'attribute'             => 'Atributo',
        'community_templates'   => 'Modelos da Comunidade',
        'is_private'            => 'Atributos privados',
        'is_star'               => 'FIxado',
        'template'              => 'Modelo',
        'value'                 => 'Valor',
    ],
    'filters'       => [
        'name'  => 'Nome do atributo',
        'value' => 'Valor do atributo',
    ],
    'helpers'       => [
        'delete_all'    => 'Tem certeza de que deseja excluir todos os atributos desta entidade?',
        'setup'         => 'Você pode representar elementos como PV ou inteligência de uma entidade com atributos. Adicione atributos manualmente clicando no botão :manage, ou aplique aqueles de um modelo de atributo.',
    ],
    'hints'         => [
        'is_private2'   => 'Se selecionado, apenas membros da função :admin-role podem ver os atributos dessa entidade.',
    ],
    'index'         => [
        'success'   => 'Atributos de :entity atualizados.',
        'title'     => 'Atributos de :name',
    ],
    'live'          => [
        'success'   => 'Atributo :attribute atualizado.',
        'title'     => 'Atualizando :attribute',
    ],
    'placeholders'  => [
        'attribute' => 'Número de conquistas, Nível de Desafio, Iniciativa, População',
        'block'     => 'Nome do bloco',
        'checkbox'  => 'Nome da caixa de seleção',
        'icon'      => [
            'class' => 'FontAwesome ou RPG Awesome class: fas fa-users',
            'name'  => 'Nome do Ícone',
        ],
        'number'    => 'Nome do número',
        'random'    => [
            'name'  => 'Nome do atributo',
            'value' => '1-100 ou lista de valores separados por vírgula',
        ],
        'section'   => 'Nome da seleção',
        'template'  => 'Selecione um modelo',
        'value'     => 'Valor do atributo',
    ],
    'ranges'        => [
        'text'  => 'Opções disponíveis :options',
    ],
    'show'          => [
        'hidden'    => 'Atributos Ocultos',
        'title'     => ':name Atributos',
    ],
    'template'      => [
        'success'   => 'Modelo de Atributo :name aplicado em :entity',
        'title'     => 'Aplicar um Modelo de Atributo a :name',
    ],
    'types'         => [
        'attribute' => 'Atributo',
        'block'     => 'Bloco',
        'checkbox'  => 'Caixa de seleção',
        'icon'      => 'Ícone',
        'number'    => 'Número',
        'random'    => 'Aleatório',
        'section'   => 'Seção',
        'text'      => 'Texto multilinha',
    ],
    'update'        => [
        'success'   => 'Atributos para :entity atualizados.',
    ],
    'visibility'    => [
        'entry'     => 'O atributo é exibido no menu da entidade.',
        'private'   => 'Atributo visível apenas para membros da função de Admnistrador.',
        'public'    => 'Atributos visíveis a todos os membros',
        'tab'       => 'Atributos mostrados apenas na aba de atributos',
    ],
];
