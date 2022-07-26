jQuery(document).ready(function () {

	// スムーズスクロール
	$(function(){
		$('a[href^="#"]').click(function() {
			var speed = 400; // スクロール速度をミリ秒で記述
			var href= $(this).attr("href");
			var target = $(href == "#" || href == "" ? 'html' : href);
			var position = target.offset().top;
			$('body,html').animate({scrollTop:position}, speed, 'swing');
			return false;
		});
	});

	// 途中からヘッダーを表示
	$(function(){
		var _window = $(window),
			scrollHeaderPc = $('.scroll-header-pc'),
			topviewBottom;
		_window.on('scroll',function(){
				topviewBottom = $('header').height() + $('.top-view').height();
				if(_window.scrollTop() > topviewBottom){
					scrollHeaderPc.addClass('show');
				}
				else{
					scrollHeaderPc.removeClass('show');
				}
		});
		_window.trigger('scroll');
	});

	// menuの開閉
  $('.sidenav_toggle').on('click', function () {
		$('.sidenav_toggle, .sidenav').toggleClass('open');
	});

});