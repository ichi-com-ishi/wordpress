<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="format-detection" content="telephone=no" />
		<meta
			name="description"
			content="ホームセンタームサシのホームページ。わくわくするほど新しい発見がある。なんでも揃う「ホームセンタームサシ」「スーパーセンタームサシ」、アート＆クラフト専門店「アークオアシスデザイン」、高級食材をリーズナブルな価格で提供する大型食品スーパー「ムサシ食品館」など、個性豊かな事業・店舗を当社開発の大型ショッピングゾーンで展開しています。"
		/>
		<meta
			name="keywords"
			content="ホームセンター,スーパーセンター,ムサシ,アークランドサカモト,アークランド,アークオアシス,ムサシ食品館,アークスタイル,アークドラッグ,営業時間,DIY,日用品,金物,建材,新潟県,山形県,富山県,石川県,宮城県,京都府,大阪府,兵庫県,埼玉県,チラシ,長野県,福井県,ムサシプロ"
		/>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  
	<?php if ( is_page( '96' ) ) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/flyer/css/style.css" />
	<?php elseif ( is_page( '99' ) ) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shop/css/style.css" />
	<?php elseif ( is_page( '68' ) ) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/guide/css/style.css" />
	<?php elseif ( is_page( '93' ) ) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/news/css/style.css" />
	<?php elseif ( is_page() ) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shop/sendaiizumi/css/style.css" />
	<?php elseif ( is_single() ) : ?>
	<link rel="stylesheet" href="
		<?php
		echo get_stylesheet_directory_uri() . '/news/article/css/style.css';
		echo '?' . filemtime( get_stylesheet_directory() . '/news/article/css/style.css' );
		?>
	">
	<?php else : ?>
	<link rel="stylesheet" href="
		<?php
		echo get_stylesheet_directory_uri() . '/css/style.css';
		echo '?' . filemtime( get_stylesheet_directory() . '/css/style.css' );
		?>
	">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/reset.css" />
	<link rel="stylesheet" href="
	<?php
	echo get_stylesheet_directory_uri() . '/css/common/common.css';
	echo '?' . filemtime( get_stylesheet_directory() . '/css/common/common.css' );
	?>
	">
	<link rel="stylesheet" href="
	<?php
	echo get_stylesheet_directory_uri() . '/css/common/sp.css';
	echo '?' . filemtime( get_stylesheet_directory() . '/css/common/sp.css' );
	?>
	">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/zdo_drawer_menu.css" />

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="wrapper">
			<header id="header">
				<div class="header_top">
					<h1 class="logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logp.png" alt="ムサシロゴ"/></a>
					</h1>
					<!-- ▼drawer▼ -->
					<div class="zdo_drawer_menu">
						<div class="zdo_drawer_bg"></div>
						<button type="button" class="zdo_drawer_button">
							<span class="zdo_drawer_bar zdo_drawer_bar1"></span>
							<span class="zdo_drawer_bar zdo_drawer_bar2"></span>
							<span class="zdo_drawer_bar zdo_drawer_bar3"></span>
						</button>
						<nav class="zdo_drawer_nav_wrapper">
							<ul class="zdo_drawer_nav">
								<li>
									<a href="<?php echo home_url(); ?>">
										ホーム
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/news/">
										新着情報
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/flyer/">
										最新チラシ
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/shop/">
										店舗情報
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/guide/">
										売場案内
									</a>
								</li>
								<li>
									<a href="http://www.arcland.co.jp/">
										企業情報
									</a>
								</li>
							</ul>
						</nav>
					</div>
					<!-- ▲drawer▲ -->
				</div>
				<?php if ( is_home() ) : ?>
				<h2 class="bold">毎日のくらしを彩り豊かに</h2>
				<!-- ▼slider▼ -->
			<div class="keyvisual slider">
				<div><img
						src="<?php echo get_template_directory_uri(); ?>/images/top/top-keyvisual.jpg"
						alt="トップキービジュアル" /></div>
				<!-- スライダー
						<div><img src="images/top/top-keyvisual.jpg" alt="トップキービジュアル" /></div>
					<div><img src="images/top/top-keyvisual.jpg" alt="トップキービジュアル" /></div>
					<div><img src="images/top/top-keyvisual.jpg" alt="トップキービジュアル" /></div>
					<div><img src="images/top/top-keyvisual.jpg" alt="トップキービジュアル" /></div> -->
			</div>
				<!-- ▲slider▲ -->
			</header>
			<!-- header -->
			<div class="container">
				<div class="nav_wrapper">
					<nav>
						<ul class="flex">
							<li><a href="<?php echo home_url(); ?>">ホーム</a></li>
							<li><a href="<?php echo home_url(); ?>/news/">新着情報</a></li>
							<li><a href="<?php echo home_url(); ?>/flyer/">最新チラシ</a></li>
							<li><a href="<?php echo home_url(); ?>/shop/">店舗情報</a></li>
							<li><a href="<?php echo home_url(); ?>/guide/">売場案内</a></li>
							<li><a href="http://www.arcland.co.jp/">企業情報</a></li>
						</ul>
					</nav>
				</div>
				<?php endif; ?>
</header>
