<?php
/* Template Name: BLOGPage */
?>

<?php get_header("2"); ?>
<!-- ヘッダー読み込み header.phpを読み込んでくれる -->
<div id="page_head_bg03">
	<div id="page_head_over">
		<h2><img src="<?php bloginfo('template_url'); ?>/images/page_news_head_title" width="1020" alt="新着一覧" /></h2>
	</div>
</div>


<div id="wrap2">
	<div id="post_blog">
<?php query_posts('&category_name=blog&posts_per_page=5'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		<h3 class="post_title02"><?php the_title(); ?></h3>
                <p class="post_date"><?php the_time("Y年m月j日") ?></p>
		<div class="post_content">
			<?php the_content(); ?>
		</div>
		<div class="post_sns02">
			<a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a>
			<div class="fb-like" data-href="#" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
		</div><!--/.post_sns02-->
<?php endwhile; ?>
<?php else : ?>
  		<div class="post">
   			<h2>記事が見つかりません</h2>
    			<p>申し訳ありません。記事がみつかりません。</p>
  		</div><!--/.post-->
<?php endif; ?>


	</div><!--#post_blogここまで-->
<?php get_sidebar('2'); ?>
</div><!--#wrap2ここまで-->
<?php get_footer(); ?>