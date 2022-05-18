<?php
/** @var WP_Post $recipesItem */

$categories = get_the_terms(get_post($recipesItem->ID), 'recipesCategory');
?>

<li>
    <strong>Titel: </strong> <?php echo $recipesItem->post_title; ?>
    <ul>
        <li>
            <strong>Datum: </strong> <?php echo date('d-m-Y', strtotime($recipesItem->post_date)); ?>
        </li>
        <li>
            <strong>Content: </strong> <?php echo $recipesItem->post_content; ?>
        </li>
        <?php if($categories): ?>
        <li>
            <strong>Categories: </strong>
            <?php render('views/organisms/category-list.php', compact('categories')); ?>
        </li>
        <?php endif; ?>
    </ul>
</li>

