<?php
/*
Template Name: トップページ用テンプレート
*/
?>

<?php get_header(); ?>

				<section id="news">

					<div class="center">
						<h2 class="heading_h2">NEWS</h2>
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

				<div class="next">
					<p>
						<a href="/news/"> &gt;&gt;続きをもっと見る</a>
					</p>
				</div>

				<section id="contens">
					<div class="center">
						<h2 class="heading_h2">CONTENS</h2>
					</div>
					<div class="flex-col4">
						<div class="flex-child contens_box">
							<a href="<?php echo home_url(); ?>/flyer/">
								<div class="bgDark">
									<img src="<?php echo get_template_directory_uri(); ?>/images/top/contens_flyer.jpg" alt="" />
								</div>
								<h3 class="contens_box_heading">FLYER</h3>
								<p class="contens_box_text">最新チラシ</p>
							</a>
						</div>

						<div class="flex-child contens_box">
							<a href="<?php echo home_url(); ?>/shop/">
								<div class="bgDark">
									<img src="<?php echo get_template_directory_uri(); ?>/images/top/contens_shop.jpg" alt="" />
								</div>
								<h3 class="contens_box_heading">SHOP</h3>
								<p class="contens_box_text">店舗情報</p>
							</a>
						</div>
						<div class="flex-child contens_box">
							<a href="<?php echo home_url(); ?>/guide/">
								<div class="bgDark">
									<img src="<?php echo get_template_directory_uri(); ?>/images/top/contens_guide.jpg" alt="" />
								</div>
								<h3 class="contens_box_heading">GUIDE</h3>
								<p class="contens_box_text">売場案内</p>
							</a>
						</div>
						<div class="flex-child contens_box">
							<a href="https://www.arcland.shop/">
								<div class="bgDark">
									<img src="<?php echo get_template_directory_uri(); ?>/images/top/contens_online-shop.jpg" alt="" />
								</div>
								<h3 class="contens_box_heading">ONLINE SHOP</h3>
								<p class="contens_box_text">オンラインショップ</p>
							</a>
						</div>
					</div>
				</section>
				<!--contens-->

				<section id="holdings">
					<div class="center">
						<h2 class="heading_h2">HOLDINGS</h2>
					</div>
					<div class="flex-col3">
						<div class="flex-child holdings_box">
							<a href="http://nicopet.jp/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-pet.jpg" alt="" />
								<div class="holdings_box_text">
									<h3>ペット専門店</h3>
									<p>ニコペット</p>
								</div>
							</a>
						</div>
						<div class="flex-child holdings_box">
							<a href="<?php echo home_url(); ?>/guide/guide/pro/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-pro.jpg" alt="" />
								<div class="holdings_box_text">
									<h3 class="">TOOL&リフォーム</h3>
									<p>ムサシプロ・住DEPOT</p>
								</div>
							</a>
						</div>
						<div class="flex-child holdings_box">
							<a href="http://arc-style.jp/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-style.jpg" alt="" />
								<div class="holdings_box_text">
									<h3 class="">リフォーム&エクステリア</h3>
									<p>アークスタイル</p>
								</div>
							</a>
						</div>
						<div class="flex-child holdings_box">
							<a href="http://arc-oasis.com/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-oasis.jpg" alt="" />
								<div class="holdings_box_text">
									<h3 class="">アート&クラフト専門店</h3>
									<p>アークオアシス</p>
								</div>
							</a>
						</div>
						<div class="flex-child holdings_box">
							<a href="http://www.arcdrug.co.jp/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-drag.jpg" alt="" />
								<div class="holdings_box_text">
									<h3 class="">ドラッグストア・ヘルスケア</h3>
									<p>アークドラッグ</p>
								</div>
							</a>
						</div>
						<div class="flex-child holdings_box">
							<a href="http://www.arcland.co.jp/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-sakamoto.jpg" alt="" />
								<div class="holdings_box_text">
									<p>アークランドサカモト</p>
								</div>
							</a>
						</div>
					</div>
				</section>
				<!--holdings-->
			</div>
			<!-- container -->

		<?php get_footer(); ?>
