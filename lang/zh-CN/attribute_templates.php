<?php

return [
    'attribute_templates'   => [],
    'create'                => [
        'title' => '新建特质模板',
    ],
    'destroy'               => [],
    'edit'                  => [],
    'fields'                => [
        'attributes'    => '特质',
    ],
    'hints'                 => [
        'automatic'                 => '自动应用:link特质模板的特质。',
        'entity_type'               => '如果设定，每次创建该类型的实体就会自动应用本特质模板。',
        'parent_attribute_template' => '这个特质模板可以是其他模板的子模板。当应用该特质模板的时候，所有的父模板会同时被应用。',
    ],
    'index'                 => [],
    'placeholders'          => [
        'name'  => '特质模板的名称',
    ],
    'show'                  => [
        'tabs'  => [
            'attributes'    => '特质',
        ],
    ],
];
