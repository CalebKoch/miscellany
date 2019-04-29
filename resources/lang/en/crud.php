<?php

return [
    'actions'           => [
        'apply'         => 'Apply',
        'back'          => 'Back',
        'copy'          => 'Copy',
        'explore_view'  => 'Nested View',
        'export'        => 'Export',
        'find_out_more' => 'Find out more',
        'go_to'         => 'Go to :name',
        'more'          => 'More Actions',
        'move'          => 'Move',
        'new'           => 'New',
        'next'          => 'Next',
        'private'       => 'Private',
        'public'        => 'Public',
    ],
    'add'               => 'Add',
    'attributes'        => [
        'actions'       => [
            'add'               => 'Add an attribute',
            'add_block'         => 'Add a block',
            'add_checkbox'      => 'Add a checkbox',
            'add_text'          => 'Add a text',
            'apply_template'    => 'Apply an Attribute Template',
            'manage'            => 'Manage',
        ],
        'create'        => [
            'description'   => 'Create a new attribute',
            'success'       => 'Attribute :name added to :entity.',
            'title'         => 'New Attribute for :name',
        ],
        'destroy'       => [
            'success'   => 'Attribute :name for :entity removed.',
        ],
        'edit'          => [
            'description'   => 'Update an existing attribute',
            'success'       => 'Attribute :name for :entity updated.',
            'title'         => 'Update attribute for :name',
        ],
        'fields'        => [
            'attribute'             => 'Attribute',
            'community_templates'   => 'Community Templates',
            'template'              => 'Template',
            'value'                 => 'Value',
        ],
        'index'         => [
            'success'   => 'Attributes for :entity updated.',
            'title'     => 'Attributes for :name',
        ],
        'placeholders'  => [
            'attribute' => 'Number of conquests, Challenge Rating, Initiative, Population',
            'block'     => 'Block name',
            'checkbox'  => 'Checkbox name',
            'template'  => 'Select a template',
            'value'     => 'Value of the attribute',
        ],
        'template'      => [
            'success'   => 'Attribute Template :name applied to :entity',
            'title'     => 'Apply an Attribute Template for :name',
        ],
        'types'         => [
            'attribute' => 'Attribute',
            'block'     => 'Block',
            'checkbox'  => 'Checkbox',
            'text'      => 'Multiline Text',
        ],
        'visibility'    => [
            'private'   => 'Attribute only visible to members of the "Admin" role.',
            'public'    => 'Attribute visible to all members.',
        ],
    ],
    'bulk'              => [
        'errors'    => [
            'admin' => 'Only campaign admins can change the private status of entities.',
        ],
        'success'   => [
            'private'   => ':count entity is now private|:count entities are now private.',
            'public'    => ':count entity is now visible|:count entities are now visible.',
        ],
    ],
    'cancel'            => 'Cancel',
    'click_modal'       => [
        'close'     => 'Close',
        'confirm'   => 'Confirm',
        'title'     => 'Confirm your action',
    ],
    'create'            => 'Create',
    'datagrid'          => [
        'empty' => 'Nothing to show yet.',
    ],
    'delete_modal'      => [
        'close'         => 'Close',
        'delete'        => 'Delete',
        'description'   => 'Are you sure you want to remove :tag?',
        'title'         => 'Delete confirmation',
    ],
    'destroy_many'      => [
        'success'   => 'Deleted :count entity|Deleted :count entities.',
    ],
    'edit'              => 'Edit',
    'errors'            => [
        'node_must_not_be_a_descendant' => 'Invalid node (tag, parent location): it would be a descendant of itself.',
    ],
    'events'            => [
        'hint'  => 'Shown below is a list of all the Calendars in which this entity was added using the "Add an event to a calendar" interface.',
    ],
    'export'            => 'Export',
    'fields'            => [
        'attribute_template'    => 'Attribute Template',
        'calendar'              => 'Calendar',
        'calendar_date'         => 'Calendar Date',
        'character'             => 'Character',
        'copy_attributes'       => 'Copy Attributes',
        'copy_notes'            => 'Copy Entity Notes',
        'creator'               => 'Creator',
        'dice_roll'             => 'Dice Roll',
        'entity'                => 'Entity',
        'entry'                 => 'Entry',
        'event'                 => 'Event',
        'excerpt'               => 'Excerpt',
        'family'                => 'Family',
        'files'                 => 'Files',
        'image'                 => 'Image',
        'is_private'            => 'Private',
        'item'                  => 'Item',
        'location'              => 'Location',
        'name'                  => 'Name',
        'organisation'          => 'Organisation',
        'race'                  => 'Race',
        'tag'                   => 'Tag',
        'tags'                  => 'Tags',
        'visibility'            => 'Visibility',
    ],
    'files'             => [
        'actions'   => [
            'drop'      => 'Click to Add or Drop a file',
            'manage'    => 'Manage Entity Files',
        ],
        'errors'    => [
            'max'   => 'You have reached the maximum number (:max) of files for this entity.',
        ],
        'files'     => 'Uploaded Files',
        'hints'     => [
            'limit'         => 'Each entity can have a maximum of :max files uploaded to it.',
            'limitations'   => 'Supported formats: jpg, png, gif, and pdf. Max file size: :size',
        ],
        'title'     => 'Entity Files for :name',
    ],
    'filter'            => 'Filter',
    'filters'           => [
        'all'   => 'Filter to all descendants',
        'clear' => 'Clear Filters',
        'direct'=> 'Filter to direct descendants',
        'hide'  => 'Hide Filters',
        'show'  => 'Show Filters',
        'title' => 'Filters',
    ],
    'forms'             => [
        'actions'       => [
            'calendar'  => 'Add a calendar date',
        ],
        'copy_options'  => 'Copy Options',
    ],
    'hidden'            => 'Hidden',
    'hints'             => [
        'attribute_template'    => 'Apply an attribute template directly when creating this entity.',
        'calendar_date'         => 'A calendar date allows easy filtering in lists, and also maintains a calendar event in the selected calendar.',
        'image_limitations'     => 'Supported formats: jpg, png and gif. Max file size: :size.',
        'image_patreon'         => 'Increase file size limit?',
        'is_private'            => 'If set to private, this entity will only be visible to members who are in the campaign\'s "Admin" role.',
        'map_limitations'       => 'Supported formats: jpg, png, gif and svg. Max file size: :size.',
        'visibility'            => 'Setting the visibility to admin means only members in the Admin campaign role can view this. Setting it to self means only you can view this.',
    ],
    'history'           => [
        'created'   => 'Created by <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'unknown'   => 'Unknown',
        'updated'   => 'Last modified by <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'view'      => 'View entity log',
    ],
    'image'             => [
        'error' => 'We weren\'t able to get the image you requested. It could be that the website doesn\'t allow us to download the image (typically for Squarespace and DeviantArt), or that the link is no longer valid. Please also make sure that the image isn\'t larger than :size.',
    ],
    'is_private'        => 'This entity is private and not visible by non-admin users.',
    'linking_help'      => 'How can I link to other entries?',
    'manage'            => 'Manage',
    'move'              => [
        'description'   => 'Move this entity to another place',
        'errors'        => [
            'permission'        => 'You aren\'t allowed to create entities of that type in the target campaign.',
            'same_campaign'     => 'You need to select another campaign to move the entity to.',
            'unknown_campaign'  => 'Unknown campaign.',
        ],
        'fields'        => [
            'campaign'  => 'New campaign',
            'target'    => 'New type',
        ],
        'hints'         => [
            'campaign'  => 'You can also try to move this entity to another campaign.',
            'target'    => 'Please be aware that some data might be lost when moving an element from one type to another.',
        ],
        'success'       => 'Entity \':name\' moved.',
        'title'         => 'Move :name',
    ],
    'new_entity'        => [
        'error' => 'Please review your values.',
        'fields'=> [
            'name'  => 'Name',
        ],
        'title' => 'New entity',
    ],
    'or_cancel'         => 'or <a href=":url">cancel</a>',
    'panels'            => [
        'appearance'            => 'Appearance',
        'attribute_template'    => 'Attribute Template',
        'calendar_date'         => 'Calendar Date',
        'entry'                 => 'Entry',
        'general_information'   => 'General Information',
        'move'                  => 'Move',
        'system'                => 'System',
    ],
    'permissions'       => [
        'action'    => 'Action',
        'actions'   => [
            'delete'    => 'Delete',
            'edit'      => 'Edit',
            'read'      => 'Read',
        ],
        'allowed'   => 'Allowed',
        'fields'    => [
            'member'    => 'Member',
            'role'      => 'Role',
        ],
        'helper'    => 'Use this interface to fine-tune which users and roles that can interact with this entity.',
        'success'   => 'Permissions saved.',
        'title'     => 'Permissions',
    ],
    'placeholders'      => [
        'calendar'      => 'Choose a calendar',
        'character'     => 'Choose a character',
        'entity'        => 'Entity',
        'event'         => 'Choose an event',
        'family'        => 'Choose a family',
        'image_url'     => 'You can upload an image from a URL instead',
        'item'          => 'Choose an item',
        'location'      => 'Choose a location',
        'organisation'  => 'Choose an organisation',
        'race'          => 'Choose a race',
        'tag'           => 'Choose a tag',
    ],
    'relations'         => [
        'actions'   => [
            'add'   => 'Add a relation',
        ],
        'fields'    => [
            'location'  => 'Location',
            'name'      => 'Name',
            'relation'  => 'Relation',
        ],
        'hint'      => 'Relations between entities can be set up to represent their connections.',
    ],
    'remove'            => 'Remove',
    'rename'            => 'Rename',
    'save'              => 'Save',
    'save_and_close'    => 'Save and Close',
    'save_and_new'      => 'Save and New',
    'save_and_update'   => 'Save and Update',
    'save_and_view'     => 'Save and View',
    'search'            => 'Search',
    'select'            => 'Select',
    'tabs'              => [
        'attributes'    => 'Attributes',
        'calendars'     => 'Calendars',
        'default'       => 'Default',
        'events'        => 'Events',
        'inventory'     => 'Inventory',
        'map-points'    => 'Map Points',
        'mentions'      => 'Mentions',
        'menu'          => 'Menu',
        'notes'         => 'Entity Notes',
        'permissions'   => 'Permissions',
        'relations'     => 'Relations',
    ],
    'update'            => 'Update',
    'users'             => [
        'unknown'   => 'Unknown',
    ],
    'view'              => 'View',
    'visibilities'      => [
        'admin' => 'Admin',
        'all'   => 'All',
        'self'  => 'Self',
    ],
];
