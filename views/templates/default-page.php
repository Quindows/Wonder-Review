<?php
/** @var string $title */
/** @var string $content */
?>

<div class="page--default">

<?php

$archive = get_post_type_archive_link('reviews');

$arguments = ['post_type' => 'reviews', 'numberposts' => -1, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$reviewsItemCollection = get_posts($arguments);

?>
    <div class="row">
    <?php
    foreach($reviewsItemCollection as $review){
        // var_dump(get_permalink($review));
        $url = get_field('link', $review->ID);

        $img = get_field('afbeelding' , $review->ID);
        $img = $img['url'];
        ?>
        <div class="card">
            <div class="img">
                <img src="<?php echo $img; ?>" alt="image wont load">
            </div>
            <h1><?php echo $review->post_title; ?></h1>
            <p class="inhoud"><?php echo get_field('inhoud', $review->ID) ?></p>
            <div class="content">
                <p class="score">score: <?php echo get_field('score', $review->ID) ?> / 10</p> 
                <a class="url" href="<?php echo $url ?>"><?php echo $url ?></a>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
</div>

