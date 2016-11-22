app = {};


$(function () {
	app.init();
});

app.dom = {
	$window		: $(window),
	$body	: $('body'),
	$document	: $(document),
	$grid:$('.grid'),
	$header:$('.header'),
	$footer:$('.footer')
};


app.utils = {};
app.utils.isTableLand = (device.tablet() && ($(window).width() > $(window).height())) ? true : false;
app.utils.isTablePort = (device.tablet() && ($(window).width() < $(window).height())) ? true : false;
app.utils.isMobileLand = (device.mobile() && ($(window).width() > $(window).height())) ? true : false;
app.utils.isMobilePort = (device.mobile() && ($(window).width() < $(window).height())) ? true : false;
app.utils.isMobile = device.mobile();

app.init = function () {
	$('input[type=checkbox], input[type=radio]').idealRadioCheck();
	app.initFluid();
	app.newsGall();
	app.masks();
	app.bannerGall();
	app.initAnimations();
	app.info();
	if(app.utils.isMobile || app.utils.isTablePort ){
		app.tabletSliders();
	}
	if(app.utils.isMobile){
		app.mobSliders();
	}

};
app.masks = function () {
	$('[data-card-mask]').mask("0000 0000 0000 0000",{clearIfNotMatch: true});
	$('[data-cvv-mask]').mask("000",{clearIfNotMatch: true});
	$('[data-date-mask]').mask("00/00",{clearIfNotMatch: true});
};

app.initFluid = function () {
	var baseWidth = 1440,
			baseSize = 10
		;
	if(app.utils.isTablePort){
		baseWidth = 768;
	}
	if(app.utils.isMobile){
		baseWidth = 414;
	}
	_helper();
	app.dom.$window.on('resize.Grid', _helper);

	function _helper() {
		if(baseWidth < 1440){
			$('html').css({'font-size': app.dom.$window.width()/baseWidth*baseSize + 'px'})
		}else{
			$('html').css({'font-size': Math.min(app.dom.$window.width(),baseWidth)/baseWidth * baseSize + 'px'});
		}
	}
};

app.mobSliders = function () {
	var $galls = $('[data-mob-slider]');

	$galls.each(function () {
		var swiper = new Swiper($(this)[0], {
			slidesPerView: 1,
			simulateTouch: true,
			breakpoints: {
				640: {
					spaceBetween: 10
				}
			}
		});
	});
};
app.tabletSliders = function () {
	var $galls = $('[data-tablet-slider]');

	var options = {

	};
	$galls.each(function () {
		var swiper = new Swiper($(this)[0], {
			slidesPerView: 'auto',
			simulateTouch: true,
			breakpoints: {
				640: {
					slidesPerView: 1,
					spaceBetween: 10
				}
			}
		});
	});
};
app.newsGall = function () {
	var $gall = $('[data-news-gall]'),
			$prev = $gall.find('[data-news-gall-prev]'),
			$next = $gall.find('[data-news-gall-next]'),
			$slides = $gall.find('[data-news-gall-slides]'),
			$content = $('[data-news-content]'),
			$gallItems = $gall.find('[data-news-gall-item]'),
			$tab = $('[data-news-tab]'),
			swiper = null

		;
	function initSwiper(data) {
		if(swiper){
			$gallItems.removeClass('_show _1 _2 _3 _4 _5 _6').addClass('_hidden');
			setTimeout(function () {
				swiper.destroy();
				init(data);
			},500);
		}else{
			init(data);
		}
	}
	function init(data) {
		$gallItems =  $content.find('[data-news-gall-item="'+data+'"]').clone();
		$slides.html($gallItems);
		$gallItems.slice(0,6).each(function (i,el) {
			$(el).addClass('_'+(i+1));
		});
		swiper = new Swiper($gall[0], {
			slidesPerView: 'auto',
			simulateTouch: true,
			nextButton:$next,
			prevButton:$prev,
			loop:true,
			breakpoints: {
				640: {
					spaceBetween: 10
				}
			}
		});
		$gallItems = $slides.find('[data-news-gall-item]');
		swiper.update(true);
		swiper.slideTo(0,0);
		setTimeout(function () {
			$gallItems.addClass('_show');
		},100);
	}

	$tab.on('click',function () {
		var $self = $(this);
		if(!$self.hasClass('_active')){
			$tab.toggleClass('_active');
			initSwiper($self.data('newsTab'));
		}
	});
	initSwiper('promo');
};

app.bannerGall = function () {
	var $gall = $('[ data-banner-gall]'),
			$prev = $gall.find('[data-banner-gall-prev]'),
			$next = $gall.find('[data-banner-gall-next]'),
			$pag = $gall.find('[data-banner-gall-pag]'),
			canvas = null,
			$canvas = null
		;
	var swiper = new Swiper($gall[0], {
		nextButton:$next,
		prevButton:$prev,
		pagination:$pag,
		paginationClickable:true,
		autoplay:7000,
		autoplayDisableOnInteraction:false,
		effect:'fade',
		loop:true,
		onInit:function () {
			setTimeout(function () {
				$canvas = $gall.find('.swiper-pagination-bullet-active').circleProgress({
					value: 1,
					size:20,
					thickness:4,
					startAngle:-Math.PI/2,
					animation:{
						duration:7000,
						easing:'linear'
					},
					emptyFill: '#ffffff',
					fill: {color: '#b31b2c'}
				});
				canvas  = $gall.find('.swiper-pagination-bullet-active').circleProgress('widget');
			},200);

		},
		onSlideChangeStart:function () {
			if(canvas){
				$gall.find('.swiper-pagination-bullet-active').append(canvas);
				$canvas.circleProgress('redraw');
			}
		},
		onTouchEnd:function () {
			if(canvas){
				$gall.find('.swiper-pagination-bullet-active').append(canvas);
				$canvas.circleProgress('redraw');
			}
		}
	});
};
app.info = function () {
	var $info = $('[data-info]'),
			$form = $info.find('[data-info-form]'),
			$field = $info.find('[data-info-field]'),
			$requests = $info.find('[data-info-requests]'),
			$answer = $info.find('[data-info-answer]')
		;
	if(app.utils.isMobile){
		$answer = $info.find('[data-info-answer-mob]');
	}
	$field.on('keyup',function () {
		var val = $(this).val();
		if(val){
			$form.trigger('submit');
		}else{
			$requests.hide();
		}
	});
	$form.on('submit',function () {
		if(!$field.val()){
			return false;
		}
		$answer.hide().removeClass('_active');
		var $self = $(this);
		$.post($self.attr('action'), $self.serialize(), function(data){
			$requests.html(data).slideDown(500);
		});
		return false;
	});
	
	$requests.on('click','[data-requests-item]',function () {
		var $self = $(this);
		$field.val($self.text());
		
		$.post($answer.data('ajaxUrl'), {}, function(data){
			var $content = $(data);
			$content.find('input[type=checkbox], input[type=radio]').idealRadioCheck();
			$requests.hide();
			$answer.html($content).show();
			setTimeout(function () {
				$answer.addClass('_active');
			},50);
		});
	});

	$answer.on('click','[data-answer-close]',function () {
		$answer.fadeOut(300);
		setTimeout(function () {
			$answer.removeClass('_active');
		},500);
	});
};

app.initAnimations = function() {
	var $animation = $('[data-animation]'),
			top = null,
			scroll = null,
			winHeigh = null;

	var throttled = _.throttle(updatePosition, 100);
	app.dom.$window.scroll(throttled);
	updatePosition();
	function updatePosition(){
		scroll = $(document).scrollTop();
		winHeigh = app.dom.$window.height();
		$animation.each(function(){
			var $self = $(this);
			top = $self.offset().top + winHeigh*0.15;
			if((top-scroll) <= winHeigh)
			{
				$self.addClass('_active');
			}
		});
	}
};