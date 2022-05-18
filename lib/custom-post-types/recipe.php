<?php

add_action('init', 'recipePostType');

function recipePostType()
{
    $args = [
        'labels' => [
            'name' => 'Recipe',
            'singular_name' => 'Recipe',
            'all_items' => 'All recipes',
            'edit_item' => 'Edit recipes',
            'add_new' => 'Add recipe',
            'add_new_item' => 'Add new recipe',
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
            'slug' => 'recipes',
        ],
    ];

    \register_post_type('recipes', $args);

}

