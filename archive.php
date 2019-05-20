<?php get_header(); ?>
			<div class="container">
			<?php custom_breadcrumb(); ?>
				<section id="news">
					<div class="center">
						<h2 class="heading"><?php the_title(); ?></h2>
					</div>
					<div class="flex-col3">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
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
					</div>
				</section>
				<!--news-->

				<div class="pagenav">
<?php
if ( $the_query->max_num_pages > 1 ) {
	echo paginate_links(
		array(
			'base'    => get_pagenum_link( 1 ) . '%_%',
			'format'  => 'page/%#%/',
			'current' => max( 1, $paged ),
			'total'   => $the_query->max_num_pages,
		)
	);
}
?>
</div><!-- pagenav -->
			</div>
			<!-- container -->
			<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
