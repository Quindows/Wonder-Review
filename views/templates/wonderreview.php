<?php
/** @var string $title */
/** @var string $content */
?>
<link rel="stylesheet" href="./assets/css/wonderreview.css">

<div class="wonderreview">

    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <hr>
    

    <?php if($content): ?>
        <?php echo $content; ?>
    <?php endif; ?>

</div>
