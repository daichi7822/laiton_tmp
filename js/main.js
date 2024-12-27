$(function() {
  $('html,body').animate({ scrollTop: 0 }, '1');
});

$(function () {
  $('.js-btn').on('click', function () {
    $('.navigation , .btn-line , .nav-var').toggleClass('open');
  });

  //メニュー内のリンクをクリックしたらナビが閉じる
  $('#menu a').on('click',function() {
    $('.navigation , .btn-line , .nav-var').removeClass('open');
  });
});




$(function() {
  var h = $(window).height();
  var w = $(window).width();
});
  
//全ての読み込みが完了したら実行
$(window).on('load', function() {
  $('.loader-bg').delay(900).fadeOut(800);
  $('.loader').delay(600).fadeOut(300);
  $('html,body').animate({ scrollTop: 0 }, '1');
});
  
// 10秒たったら強制的にロード画面を非表示
$(function(){
  setTimeout('stopload()',10000);
});
  
function stopload(){
  $('.loading-wrapper').css('overflow','auto');
  $('.loader-bg').delay(900).fadeOut(800);
  $('.loader').delay(600).fadeOut(300);
}