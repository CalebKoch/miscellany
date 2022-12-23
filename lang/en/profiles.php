<?php

return [
    'appearance'                    => [
        'helpers'   => [
            'campaign-order'    => 'Change the order in which campaigns are listed in the campaign switcher.',
            'date-format'       => 'Control the date format for real date.',
            'pagination'        => 'Change the number of elements displayed in various lists.',
        ],
    ],
    'avatar'                        => [
        'success'   => 'Avatar updated.',
    ],
    'campaign_switcher_order_by'    => [
        'alphabetical'      => 'Alphabetically',
        'date_created'      => 'Date Created',
        'date_joined'       => 'Date Joined',
        'default'           => 'Default',
        'r_alphabetical'    => 'Alphabetically Reversed',
        'r_date_created'    => 'Date Created Reversed',
        'r_date_joined'     => 'Date Joined Reversed',
    ],
    'edit'                          => [
        'success'   => 'Profile updated',
    ],
    'editors'                       => [
        'legacy'        => 'Legacy (TinyMCE 4)',
        'summernote'    => 'Summernote',
    ],
    'fields'                        => [
        'avatar'                    => 'Avatar',
        'bio'                       => 'Bio',
        'email'                     => 'Email',
        'hide_subscription'         => 'Hide my name from the :hall_of_fame.',
        'last_login_share'          => 'Share with other campaign members when I last logged in.',
        'name'                      => 'Name',
        'new_password'              => 'New Password',
        'new_password_confirmation' => 'New Password Confirmation',
        'newsletter'                => 'I wish to sometimes be contacted by email.',
        'password'                  => 'Current password',
        'profile-name'              => 'Profile name',
        'settings'                  => 'Settings',
        'theme'                     => 'Theme',
    ],
    'helpers'                       => [
        'profile-name'  => 'Change the way your name appears on your :profile and the :marketplace. If left blank, your account name will be used instead.',
    ],
    'newsletter'                    => [
        'helpers'   => [
            'header'            => 'Subscribe to the following email newsletters to be notified of what\'s going on with Kanka.',
        ],
        'options'   => [
            'monthly'   => 'Kanka newsletter',
        ],
        'updated' => 'Newsletter preferences updated.',
        'title'     => 'Newsletters',
    ],
    'password'                      => [
        'success'   => 'Password updated',
    ],
    'placeholders'                  => [
        'bio'                       => 'A short bio of yourself displayed on your public profile.',
        'email'                     => 'Your email address',
        'name'                      => 'Your name as displayed',
        'new_password'              => 'Your new password',
        'new_password_confirmation' => 'Confirm your new password',
        'password'                  => 'Provide your current password for any changes',
    ],
    'sections'                      => [
        'dangerzone'    => 'Danger Zone',
        'delete'        => [
            'confirm'       => 'Delete my account now',
            'delete'        => 'Delete my account',
            'goodbye'       => 'If so, please write :code on the box below.',
            'helper'        => 'Deleting your account will also delete any campaign you are the only member of. This action is permanent and can\'t be undone.',
            'subscribed'    => 'Please cancel your :subscription before being able to delete your account.',
            'title'         => 'Delete your account',
            'warning'       => 'By deleting your account, all your data will be lost. Are you sure?',
        ],
        'password'      => [
            'title' => 'Change your password',
        ],
    ],
    'settings'                      => [
        'fields'    => [
            'advanced_mentions'             => 'Advanced Mentions',
            'campaign_switcher_order_by'    => 'Campaign Switcher Sorting Order',
            'date_format'                   => 'Date Formatting',
            'default_nested'                => 'Nested Views as Default',
            'editor'                        => 'Text Editor',
            'new_entity_workflow'           => 'New Entity Workflow',
            'pagination'                    => 'Pagination',
        ],
        'helpers'   => [
            'bio'       => 'The biography is visible on your :link.',
            'editor_v2' => 'Using the legacy text editor (TinyMCE) will not support mentions on mobile devices, and not have support for some features like the campaign gallery.',
            'profile'   => 'public profile',
        ],
        'hints'     => [
            'advanced_mentions'     => 'If activated, mentions will always render as [entity:123] when editing an entity.',
            'default_nested'        => 'Activate this option if you wish for the default lists to be Nested by default (when available).',
            'new_entity_workflow'   => 'When creating a new entity, the default workflow is to go to the list of entities. You can change this to view the newly created entity instead.',
        ],
        'success'   => 'Settings changed.',
    ],
    'theme'                         => [
        'helper'    => 'A campaign with a set theme will override your preference.',
        'success'   => 'Theme changed.',
        'themes'    => [
            'dark'      => 'Dark',
            'default'   => 'Default',
            'future'    => 'Future',
            'midnight'  => 'Midnight Blue',
        ],
    ],
    'title'                         => 'Update your profile',
    'workflows'                     => [
        'created'   => 'Go to created entity',
        'default'   => 'List of entities',
    ],
];
