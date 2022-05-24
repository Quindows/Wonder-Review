<?php
/** @var string $title */
/** @var string $content */
/** @var array $reviewItems */

var_dump($reviewItems);
foreach($reviewItems as $review){
    var_dumb($reviewItems);
}
?>

<div class="home">
    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <hr>

    <?php if($content): ?>
        <?php echo $content; ?>
    <?php endif; ?>

</div>
