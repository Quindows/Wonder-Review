<?php
/** @var array $recipesItemCollection */
?>

<ul class="recipes-item-list">
    <?php foreach($recipesItemCollection as $recipesItem): ?>
        <?php render('views/molecules/recipes-item-list-item.php', compact('recipesItem'))?>
    <?php endforeach; ?>
</ul>
