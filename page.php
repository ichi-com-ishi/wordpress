<?php get_header(); ?>

<!-- <div id="contents">
<div id="main"> -->
<div class="container">
<?php custom_breadcrumb(); ?>
<?php if ( have_posts() ) : ?>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
<!-- <div class="post"> -->

		<?php the_content(); ?>
<!-- </div> -->
<!-- /.post -->
<?php endwhile; ?>
<?php else : ?>

<?php endif; ?>
					
</div><!-- /container -->

<?php get_footer(); ?>
