<?php
$paged     = (int) get_query_var( 'paged' );
$args      = array(
	'posts_per_page' => 3,
	'paged'          => $paged,
	'orderby'        => 'post_date',
	'order'          => 'DESC',
	'post_type'      => 'post',
	'post_status'    => 'publish',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		?>
	<div id="post-<?php the_ID(); ?>" <?php post_class( 'item flex-child linkbox' ); ?>>
	<div class="item-image trimming">
		<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'photo' ) ); ?>
	</div>
<div class="item-text bold">
		<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>"></a>
</div>
</div>
		<?php
		endwhile;
	endif;
?>
