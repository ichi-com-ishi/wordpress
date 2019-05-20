<?php
/* Template Name Posts: categori */
?>
<?php get_header(); ?>

<?php single_cat_title(); ?>

<?php
	query_posts( $query_string );// 他のquery_postsが継承されてしまう為、カテゴリ指定をデフォルトに戻す
?>
	
<?php if ( have_posts() ) : ?>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		
		<?php the_post_thumbnail( array( 250, 180 ) ); ?>//サムネイルサイズを指定
		<?php the_category( $separator, $parents, $post_id ); ?>
		<?php the_time( 'Y年n月j日' ); ?> 
		<?php the_title(); ?>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

<?php
if ( function_exists( 'wp_pagenavi' ) ) {
	wp_pagenavi(); }
?>
<?php　wp_reset_query();?>

<?php get_sidebar( '2' ); ?>
<?php get_footer(); ?>
