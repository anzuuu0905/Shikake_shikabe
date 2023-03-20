// JavaScript Document
(function($) {
  
  /*==================================
    header
  ==================================*/
  $(function(){
    var scrollpos;
    
    $('.menu-trigger').on('click',function(){
        if($(this).hasClass('active')){
          $(this).removeClass('active');
          $('nav').removeClass('open');
          $('.overlay').removeClass('open');
          
          //背景固定解除
          $('body').removeClass('fixed').css({'top': 0});
          window.scrollTo( 0 , scrollpos );
          
        } else {
          $(this).addClass('active');
          $('nav').addClass('open');
          $('.overlay').addClass('open');
          
          //背景固定
          scrollpos = $(window).scrollTop();
          $('body').addClass('fixed').css({'top': -scrollpos});          
        }
      });
      $('.overlay').on('click',function(){
        if($(this).hasClass('open')){
          $(this).removeClass('open');
          $('.menu-trigger').removeClass('active');
          $('nav').removeClass('open');
          
          //背景固定解除
          $('body').removeClass('fixed').css({'top': 0});
          window.scrollTo( 0 , scrollpos );
        }
    }); 
  }); 
  
 $(function(){  
    var startPos = 0;
    var winScrollTop = 0;
    if (window.matchMedia('(max-width: 767px)').matches) {
      var Header = $('.menu-trigger')
    } else{
      var Header = $('#header');
    }
   
    $(window).on('scroll',function(){
      winScrollTop = $(this).scrollTop();
      if (winScrollTop >= startPos && winScrollTop > 100) { // ここにコードを追加
        $(Header).addClass('hide');
      } else {
        $(Header).removeClass('hide');
      }
      startPos = winScrollTop;
    });
 });
  
//  $(function(){
//    //メニューのページ上部からの距離を取得
//    var menu_offset = $('header').offset().top;
//
//    $(window).scroll(
//      function(){
//      //現在のスクロール量を取得
//      var my_offset = $(window).scrollTop();
//        if(menu_offset < my_offset){
//          //現在のスクロール量がメニューのページ上部からの距離を越えた場合にクラス「fixed」を付与
//          $('header').addClass('fixed');
//        } else {
//          //逆の場合にクラス「fixed」を解除
//          $('header').removeClass('fixed'); 
//          if($('.menu-trigger').hasClass('active')){
//             $('header').addClass('fixed');
//          }
//        }
//      }
//    )
//  });  
  
  $(document).ready(function () {
    // 1.関数の定義
    function setHeight() {
      let vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
    }

    // 2.初期化
    setHeight();

    // 3.ブラウザのサイズが変更された時・画面の向きを変えた時に再計算する
    window.addEventListener('resize', setHeight);
  });
  /*================================
    imgchange
  ================================*/
		document.addEventListener('DOMContentLoaded', function () {
			var mql = window.matchMedia('screen and (max-width: 767px)');

			function checkBreakPoint(mql) {
				if (mql.matches) {

					$('[src*="-pc."]').each(function() {
						$(this).attr('src', $(this).attr('src').replace('-pc.','-sp.'));
					});

				} else {

					$('[src*="-sp."]').each(function() {
						$(this).attr('src', $(this).attr('src').replace('-sp.','-pc.'));
					});
				}
			}
			mql.addListener(checkBreakPoint);
			checkBreakPoint(mql);
		});
  
  /*==================================
    pagetop
  ==================================*/  
    $(function() {
        var topBtn = $('#pagetop');    
        topBtn.hide();
        //スクロールが200に達したらボタン表示
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                //ボタンの表示方法
                topBtn.fadeIn();
            } else {
                //ボタンの非表示方法
                topBtn.fadeOut();
            }
        });
        //スクロールしてトップ
        topBtn.click(function () {
            $('body,  html').animate({
                scrollTop: 0
            },   500);
            return false;
        });
    });  
  /*==================================
    matchHeight
  ==================================*/  
  $(function() {
    $('.postList .ttl').matchHeight();
  });
  
  
})(jQuery);