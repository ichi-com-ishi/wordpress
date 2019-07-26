<?php
$post = $wp_query->post;
if ( in_category('2') ) {
include(TEMPLATEPATH.'/single_blog.php');
} elseif ( in_category('1') ) {
include(TEMPLATEPATH.'/single_works.php');
}
?>
