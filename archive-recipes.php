<?php

$title = 'Recipe archive';

$arguments = ['post_type' => 'recipes', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$recipesItemCollection = get_posts($arguments);

render('views/templates/recipes-archive.php', compact('title', 'recipesItemCollection'));