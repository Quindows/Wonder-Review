<?php
/** config for home template **/

$archive = get_post_type_archive_link('reviews');

$arguments = ['post_type' => 'reviews', 'numberposts' =>3, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$reviewsItemCollection = get_posts($arguments);
$url2 = get_stylesheet_directory_uri();
?>
<div class="page-content">
<img src="<?php echo $url2 ?>/assets/img/Banner2.jpg" class="banner-image" alt="Banner Image">
<br>
<div class="home-bottom">
    <div class="home-posts">
    <?php
    foreach(array_slice($reviewsItemCollection, 0, 3) as $review){
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
            <p class="score">score: <?php echo get_field('score', $review->ID) ?> / 10</p> 
            <div class="link">
                <a href="<?php echo $review->post_title; ?>?id=<?php echo $review->ID ?>">View review</a>
            </div>
        </div>
    <?php
    }
    ?>
    </div>

    <div class="home-info">
        <div class="home-welcome">
        <h2>Welkom!</h2>
        <br>
        <p>Welkom bij Wonderreview!</p>
        <p>Hier komt er allemaal informatie over deze site.</p>
        </div>
        <div class="home-pictures">
        <img class="creator-picture" src="<?php echo $url2 ?>/assets/img/Wob.png" alt="Wob-Image">
        <img class="creator-picture" src="<?php echo $url2 ?>/assets/img/Sander.png" alt="Sander-Image">
        </div>
        <div class="home-welcome mt-0">
        <h2>Wie zijn wij?</h2>
        <br>
        <p>Wij zijn Wob en Sander</p>
        <p>Samen vormen wij Team WonderReview!. (hier komt nog meer uitleg over ons)</p>
        </div>
    <div>
    </div>
    </div>
</div>
</div>