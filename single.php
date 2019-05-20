<?php get_header(); ?>
			<div class="container">
			<?php custom_breadcrumb(); ?>
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					
				<article id="article">
					<div class="left">
					<?php the_content(); ?>
					</div>
				</article>
				<!--article-->
					<?php
					endwhile;
				endif;
			?>
			</div>
			<!-- container -->
			<section id="area">
				<h3 class="area_heading center">開催店舗</h3>
				<div class="flex-col4">
					<div class="flex-child">
						<dl>
							<dt><a href="<?php echo home_url(); ?>/shop/#miyagi/">宮城県</a></dt>
							<dd><a href="<?php echo home_url(); ?>/shop/sendaiizumi/">仙台泉店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/shop/natori/">名取店</a></dd>
						</dl>
						<dl>
							<dt><a href="<?php echo home_url(); ?>/shop/#yamagata">山形県</a></dt>
							<dd><a href="<?php echo home_url(); ?>/yuza/">遊佐店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/sakata/">酒田店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/tsuruoka/">鶴岡店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/tendo/">天童店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/nanyo/">南陽店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/yonezawa/">米沢店</a></dd>
						</dl>
					</div>
					<div class="flex-child">
						<dl>
							<dt><a href="<?php echo home_url(); ?>/shop/#nigata">新潟県</a></dt>
							<dd><a href="<?php echo home_url(); ?>/murakami/">村上店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/shibatakomo/">新発田コモ店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/niigata/">新潟店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/niitsu/">新津店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/niigatanishi/">新潟西店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/sanjo/">三条店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/mitsuke/">見附店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/nagaoka/">長岡店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/kashiwazaki/">柏崎店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/joetsu/">上越店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/arai/">新井店</a></dd>
						</dl>
					</div>
					<div class="flex-child">
						<dl>
							<dt><a href="<?php echo home_url(); ?>/shop/#toyama">富山県</a></dt>
							<dd><a href="<?php echo home_url(); ?>/toyama/">富山店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/himi/">氷見店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/takaokanakasone/">高岡中曽根店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/takaokaekinan/">高岡駅南店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/tonami/">砺波店</a></dd>
						</dl>
						<dl>
							<dt><a href="<?php echo home_url(); ?>/shop/#ishikawa">石川県</a></dt>
							<dd><a href="<?php echo home_url(); ?>/kanazawa/">金沢店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/kanazawaminami/">金沢南店</a></dd>
						</dl>
						<dl>
							<dt><a href="<?php echo home_url(); ?>/shop/#fukui">福井県</a></dt>
							<dd><a href="<?php echo home_url(); ?>/maruoka/">丸岡店</a></dd>
						</dl>
					</div>
					<div class="flex-child">
						<dl>
							<dt><a href="<?php echo home_url(); ?>/shop/#nagano">長野県</a></dt>
							<dd><a href="<?php echo home_url(); ?>/naganominami/">長野南店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/ueda/">上田店</a></dd>
						</dl>
						<dl>
							<dt><a href="<?php echo home_url(); ?>/shop/#kyoto">京都府</a></dt>
							<dd><a href="<?php echo home_url(); ?>/kyotoyahata/">京都八幡店</a></dd>
						</dl>
						<dl>
							<dt><a href="<?php echo home_url(); ?>/shop/#osaka">大阪府</a></dt>
							<dd><a href="<?php echo home_url(); ?>/kaizuka/">貝塚店</a></dd>
							<dd><a href="<?php echo home_url(); ?>/mihara/">美原店</a></dd>
						</dl>
						<dl>
							<dt><a href="<?php echo home_url(); ?>/shop/#hyogo">兵庫県</a></dt>
							<dd><a href="<?php echo home_url(); ?>/himeji/">姫路店</a></dd>
						</dl>
					</div>
				</div>
			</section>
<?php get_footer(); ?>
