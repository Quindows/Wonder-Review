<?php

$post = get_post();
$title = get_the_title();
$content = get_the_content();

$url = get_field('link', $post->ID);

$img = get_field('afbeelding' , $post->ID);
$img = $img['url'];

?>

<div class="row-single">
    <div class="img"> <img src="<?= $img ?>" alt="afbeelding niet gevonden"></div>
    <h1><?= $post->post_title; ?></h1>
    <p> <?= $post->inhoud ?></p>
    <div class="content">
        <p>score: <?= $post->score; ?>/10</p>
        <a href="<?= $url ?>">Bezoek website</a>
    </div>
</div>
