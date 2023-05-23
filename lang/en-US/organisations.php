<?php

return [
    'create'        => [
        'title' => 'New Organization',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [],
    'helpers'       => [
        'descendants'       => 'This list contains all organizations which are descendants of this organization, and not only those directly under it.',
        'nested_without'    => 'Displaying all organizations that don\'t have a parent organization. Click on a row to see the children organizations.',
    ],
    'index'         => [],
    'members'       => [
        'create'    => [
            'success'   => 'Member added to the organization.',
        ],
        'destroy'   => [
            'success'   => 'Member removed from the organization.',
        ],
        'edit'      => [
            'success'   => 'Organization member updated.',
        ],
        'helpers'   => [
            'all_members'   => 'All characters that are members of this organizations and it\'s sub-organizations.',
            'members'       => 'All characters that are members of this organization.',
        ],
    ],
    'organisations' => [],
    'placeholders'  => [],
    'quests'        => [],
    'show'          => [],
];
