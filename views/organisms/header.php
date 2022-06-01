<?php
$menuCount = 0;
$url = get_stylesheet_directory_uri();
$menuItems = wp_get_nav_menu_items('Main Menu');
?>

<nav class="header navbar">

    <?php if($menuItems): ?>
    <ul>
        <?php foreach($menuItems as $item): ?>
            <li class=>
                <a class="nav" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
            </li>
            <?php $menuCount++; 
            if ($menuCount == 1){
                echo '<img src= "' . $url . '/assets/img/WonderLogo.png" class="navLogo" alt="WonderReview Logo">';
            } 
            ?>
        <?php endforeach; ?>        
    <!-- <img src="<?php echo $url . '/assets/img/WonderLogo.png'; ?>" alt="WonderReview Logo"> -->
    </ul>
    <?php endif; ?>

</nav>


