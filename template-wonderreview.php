<?php
/*
 * Template Name: Wonderreview
 */

$title = get_the_title();
$content = get_the_content();

render('views/templates/wonderreview.php', compact('title', 'content'));

?>