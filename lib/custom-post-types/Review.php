<?php

add_action('init', 'reviewPostType');

function reviewPostType()
{
    $args = [
        'labels' => [
            'name' => 'Review',
            'singular_name' => 'review',
            'all_items' => 'All reviews',
            'edit_item' => 'Edit reviews',
            'add_new' => 'Add review',
            'add_new_item' => 'Add new review',
        ],
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => [
            'title',
            'editor',
        ],
        'rewrite' => [
            'slug' => 'reviews',
        ],
    ];

    \register_post_type('reviews', $args);

}

