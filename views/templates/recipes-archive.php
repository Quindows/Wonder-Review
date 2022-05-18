<?php
/** @var string $title */
/** @var array $recipesItemCollection */
?>

<div class="recipes-archive">
    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <?php if($recipesItemCollection): ?>
        <?php render('views/organisms/recipes-item-list.php', compact('recipesItemCollection')); ?>
    <?php endif; ?>
</div>