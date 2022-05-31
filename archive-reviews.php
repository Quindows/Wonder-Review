<?php

$archive = get_post_type_archive_link('reviews');

$arguments = ['post_type' => 'reviews', 'numberposts' => -1, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$reviewsItemCollection = get_posts($arguments);

foreach($reviewsItemCollection as $review){
    var_dump(get_permalink($review));
    var_dump($review);
        
    ?>
    <div>
        <div>
            <img src="<?php echo get_field('afbeelding', $review->ID)" alt="">
        </div>
        <div>
            <h1></h1>
            <p></p>
            <p></p>
        </div>
    </div>
}
