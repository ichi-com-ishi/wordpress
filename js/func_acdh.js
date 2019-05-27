// DOMを全て読み込んでから処理する
$(function() {
  // [.syncer-acdn]にクリックイベントを設定する
  $(".acdn").click(function() {
    // クラス名[active]を追加
    $(this).toggleClass("active");

    // [data-target]の属性値を代入する
    var target = $(this).data("target");

    // [target]と同じ名前のIDを持つ要素に[slideToggle()]を実行する
    $("#" + target).slideToggle();

    // 終了
    return false;
  });
});

// 横幅767px以下の処理
var windowWidth = $(window).width();
var windowSm = 767;
if (windowWidth <= windowSm) {
  // たたんで表示
  $(".acdh-hide").hide();
}
