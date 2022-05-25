<?php

$title = 'review archive';

$arguments = ['post_type' => 'reviews', 'numberposts' => 3, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$reviewsItemCollection = get_posts($arguments);

render('views/templates/reviews-archive.php', compact('title', 'reviewsItemCollection'));