<?php
/* Template Name Posts: single */
?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php echo get_the_date('Y.m.d'); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php previous_post_link(' %link','&larr; 前の記事',TRUE); ?>
<?php next_post_link('%link','次の記事 &rarr;',TRUE); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>