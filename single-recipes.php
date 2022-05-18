<?php

$title = get_the_title();
$content = get_the_content();

$recipeCategories = get_the_terms(\get_post(), 'recipesCategory');

render('views/templates/recipes-detail.php', compact('title','content', 'recipeCategories'));