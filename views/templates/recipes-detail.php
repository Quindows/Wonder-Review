<?php
/** @var string $title */
/** @var string $content */
/** @var array $recipesCategories */
?>


<div class="recipes">
    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <div class="content">
        <?php if($content): ?>
            <?php echo $content; ?>
        <?php endif; ?>
    </div>


    <?php if($recipesCategories): ?>
        <h2>Categorieën: </h2>
        <?php render('views/organisms/category-list.php', ['categories' => $recipesCategories]); ?>
    <?php endif; ?>
</div>