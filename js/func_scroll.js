//スムーズスクロール
$( function() {

	// リンク先が#から始まるもののみ
	$( 'a[href^=#]' ).click( function() {

		// 高さの指定
		var headerHight = 100;

		// スクロールのスピード
		var speed = 500;
		var href = $( this ).attr( 'href' );
		var target = $( '#' == href || '' == href ? 'html' : href );
		var position = target.offset().top - headerHight;

		// linear: 等速で移動
		// swing: 徐々に加速して、徐々に減速して移動
		$( 'html, body' ).animate({ scrollTop: position }, speed, 'swing' );
		return false;
	});
});
