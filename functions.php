<?php

/**********************************************
 * phpファイルを読み込むショートコード
 * 投稿内でネットワークホームurlを取得[home_url]
 * 【出力カスタマイズ】固定ページで抜粋の機能を有効化
 * 概要（抜粋）の文字数調整
 * 概要（抜粋）の末の設定
 * アイキャッチ画像
 * タイトルの出力
 * パンくずリスト
 ***********************************************/

/*
* phpファイルを読み込むショートコード
*/
function loop_main( $atts ) {
	ob_start();
	get_template_part( 'parts-template/loop-main' ); // parts-template/loop-main.phpを読みこみ
	return ob_get_clean();
}
add_shortcode( 'loop', 'loop_main' );

/*
* 投稿内でネットワークホームurlを取得[home_url]
*/
function homeUrl() {
  return network_home_url();
}
add_shortcode('home_url', 'homeUrl');

/*
*【出力カスタマイズ】固定ページで抜粋の機能を有効化
*/
add_post_type_support( 'page', 'excerpt' );

/*
* 概要（抜粋）の文字数調整
*/
function new_excerpt_mblength( $length ) {
	return 29; // 抜粋する文字数を29文字に設定(高さ100になるように)
}
add_filter( 'excerpt_mblength', 'new_excerpt_mblength' );


/*
* 概要（抜粋）の末の設定
*/
function new_excerpt_more( $more ) {
	return '…';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/*
* アイキャッチ画像
*/
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 350, 250, true );

/*
* タイトルの出力
*/
add_theme_support( 'title-tag' );
function change_title_tag( $title ) {
	if ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = single_tag_title( '', false );
	} elseif ( is_post_type_archive( 'parts' ) ) { /* parts投稿タイプのアーカイブの場合 */
		$title = '任意のタイトル';
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'change_title_tag' );

/*
* パンくずリスト
*/
if ( ! function_exists( 'custom_breadcrumb' ) ) {
	function custom_breadcrumb( $wp_obj = null ) {

		// トップページでは何も出力しない
		if ( is_home() || is_front_page() ) {
			return false;
		}

		// そのページのWPオブジェクトを取得
		$wp_obj = $wp_obj ?: get_queried_object();

		echo '<div id="topic-path">' . // id名などは任意で
				'<ul>' .
					'<li>' .
						'<a href="' . home_url() . '"><span>HOME</span></a>' .
					'</li>';

		if ( is_attachment() ) {

			/**
			 * 添付ファイルページ ( $wp_obj : WP_Post )
			 * ※ 添付ファイルページでは is_single() も true になるので先に分岐
			 */
			echo '<li><span>' . $wp_obj->post_title . '</span></li>';

		} elseif ( is_single() ) {

			/**
			 * 投稿ページ ( $wp_obj : WP_Post )
			 */
			$post_id    = $wp_obj->ID;
			$post_type  = $wp_obj->post_type;
			$post_title = $wp_obj->post_title;

			// カスタム投稿タイプかどうか
			if ( $post_type !== 'post' ) {

				$the_tax = '';  // そのサイトに合わせ、投稿タイプごとに分岐させて明示的に指定してもよい

				// 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
				$tax_array = get_object_taxonomies( $post_type, 'names' );
				foreach ( $tax_array as $tax_name ) {
					if ( $tax_name !== 'post_format' ) {
						$the_tax = $tax_name;
						break;
					}
				}

				// カスタム投稿タイプ名の表示
				echo '<li>' .
						'<a href="' . get_post_type_archive_link( $post_type ) . '">' .
							'<span>' . get_post_type_object( $post_type )->label . '</span>' .
						'</a>' .
					 '</li>';

			} else {
				$the_tax = '';  // 通常の投稿の場合、カテゴリーを表示（表示されないように）
			}

			// タクソノミーが紐づいていれば表示
			if ( $the_tax !== '' ) {

				$child_terms  = array();   // 子を持たないタームだけを集める配列
				$parents_list = array();  // 子を持つタームだけを集める配列

				// 投稿に紐づくタームを全て取得
				$terms = get_the_terms( $post_id, $the_tax );

				if ( ! empty( $terms ) ) {

					// 全タームの親IDを取得
					foreach ( $terms as $term ) {
						if ( $term->parent !== 0 ) {
							$parents_list[] = $term->parent;
						}
					}

					// 親リストに含まれないタームのみ取得
					foreach ( $terms as $term ) {
						if ( ! in_array( $term->term_id, $parents_list ) ) {
							$child_terms[] = $term;
						}
					}

					// 最下層のターム配列から一つだけ取得
					$term = $child_terms[0];

					if ( $term->parent !== 0 ) {

						// 親タームのIDリストを取得
						$parent_array = array_reverse( get_ancestors( $term->term_id, $the_tax ) );

						foreach ( $parent_array as $parent_id ) {
							$parent_term = get_term( $parent_id, $the_tax );
							echo '<li>' .
									'<a href="' . get_term_link( $parent_id, $the_tax ) . '">' .
									  '<span>' . $parent_term->name . '</span>' .
									'</a>' .
								 '</li>';
						}
					}

					// 最下層のタームを表示
					echo '<li>' .
							'<a href="' . get_term_link( $term->term_id, $the_tax ) . '">' .
							  '<span>' . $term->name . '</span>' .
							'</a>' .
						 '</li>';
				}
			}

			// 投稿自身の表示
			echo '<li><span>' . $post_title . '</span></li>';

		} elseif ( is_page() ) {

			/**
			 * 固定ページ ( $wp_obj : WP_Post )
			 */
			$page_id    = $wp_obj->ID;
			$page_title = $wp_obj->post_title;

			// 親ページがあれば順番に表示
			if ( $wp_obj->post_parent !== 0 ) {
				$parent_array = array_reverse( get_post_ancestors( $page_id ) );
				foreach ( $parent_array as $parent_id ) {
					echo '<li>' .
							'<a href="' . get_permalink( $parent_id ) . '">' .
								'<span>' . get_the_title( $parent_id ) . '</span>' .
							'</a>' .
						 '</li>';
				}
			}
			// 投稿自身の表示
			echo '<li><span>' . $page_title . '</span></li>';

		} elseif ( is_post_type_archive() ) {

			/**
			 * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
			 */
			echo '<li><span>' . $wp_obj->label . '</span></li>';

		} elseif ( is_date() ) {

			/**
			 * 日付アーカイブ ( $wp_obj : null )
			 */
			$year  = get_query_var( 'year' );
			$month = get_query_var( 'monthnum' );
			$day   = get_query_var( 'day' );

			if ( $day !== 0 ) {
				// 日別アーカイブ
				echo '<li><a href="' . get_year_link( $year ) . '"><span>' . $year . '年</span></a></li>' .
					 '<li><a href="' . get_month_link( $year, $month ) . '"><span>' . $month . '月</span></a></li>' .
					 '<li><span>' . $day . '日</span></li>';

			} elseif ( $month !== 0 ) {
				// 月別アーカイブ
				echo '<li><a href="' . get_year_link( $year ) . '"><span>' . $year . '年</span></a></li>' .
					 '<li><span>' . $month . '月</span></li>';

			} else {
				// 年別アーカイブ
				echo '<li><span>' . $year . '年</span></li>';

			}
		} elseif ( is_author() ) {

			/**
			 * 投稿者アーカイブ ( $wp_obj : WP_User )
			 */
			echo '<li><span>' . $wp_obj->display_name . ' の執筆記事</span></li>';

		} elseif ( is_archive() ) {

			/**
			 * タームアーカイブ ( $wp_obj : WP_Term )
			 */
			$term_id   = $wp_obj->term_id;
			$term_name = $wp_obj->name;
			$tax_name  = $wp_obj->taxonomy;

			/* ここでタクソノミーに紐づくカスタム投稿タイプを出力しても良いでしょう。 */

			// 親ページがあれば順番に表示
			if ( $wp_obj->parent !== 0 ) {

				$parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
				foreach ( $parent_array as $parent_id ) {
					$parent_term = get_term( $parent_id, $tax_name );
					echo '<li>' .
							'<a href="' . get_term_link( $parent_id, $tax_name ) . '">' .
								'<span>' . $parent_term->name . '</span>' .
							'</a>' .
						 '</li>';
				}
			}

			// ターム自身の表示
			echo '<li>' .
					'<span>' . $term_name . '</span>' .
				'</li>';

		} elseif ( is_search() ) {

			/**
			 * 検索結果ページ
			 */
			echo '<li><span>「' . get_search_query() . '」で検索した結果</span></li>';

		} elseif ( is_404() ) {

			/**
			 * 404ページ
			 */
			echo '<li><span>お探しの記事は見つかりませんでした。</span></li>';

		} else {

			/**
			 * その他のページ（無いと思うが一応）
			 */
			echo '<li><span>' . get_the_title() . '</span></li>';
		}

		echo '</ul></div>';  // 冒頭に合わせて閉じタグ

	}
}
