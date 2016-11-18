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
	app.initFluid();
	app.newsGall();
	app.masks();
	app.bannerGall();
	app.initAnimations();
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

app.newsGall = function () {
	var $gall = $('[data-news-gall]'),
			$prev = $gall.find('[data-news-gall-prev]'),
			$next = $gall.find('[data-news-gall-next]'),
			$gallItems = $gall.find('[data-news-gall-item]'),
			$tab = $('[data-news-tab]'),
			$activeItems

		;
	var swiper = new Swiper($gall[0], {
		slidesPerView: 'auto',
		simulateTouch: true,
		nextButton:$next,
		prevButton:$prev,
		breakpoints: {
			640: {
				spaceBetween: 10
			}
		}
	});

	$tab.on('click',function () {
		var $self = $(this);
		if(!$self.hasClass('_active')){
			$tab.toggleClass('_active');
			changeItems($self.data('newsTab'));
		}
	});

	changeItems('promo');
	function changeItems(name) {
		$gallItems.removeClass('_show _1 _2 _3 _4 _5 _6').addClass('_hidden');
		setTimeout(function () {
			$activeItems = $gallItems .filter('[data-news-gall-item="'+name+'"]');
			$gallItems.hide().removeClass('_hidden');
			$activeItems.show();
			$activeItems.slice(0,6).each(function (i,el) {
				$(el).addClass('_'+(i+1));
			});
			swiper.update(true);
			swiper.slideTo(0,0);
			setTimeout(function () {
				$gallItems.addClass('_show');
			},100);
		},500);
	}
};

app.bannerGall = function () {
	var $gall = $('[ data-banner-gall]'),
			$prev = $gall.find('[data-banner-gall-prev]'),
			$next = $gall.find('[data-banner-gall-next]'),
			$pag = $gall.find('[data-banner-gall-pag]')
		;
	var swiper = new Swiper($gall[0], {
		nextButton:$next,
		prevButton:$prev,
		pagination:$pag,
		paginationClickable:true,
		autoplay:7000,
		autoplayDisableOnInteraction:false,
		effect:'fade',
		loop:true
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
			top = $self.offset().top + winHeigh*0.35;
			if((top-scroll) <= winHeigh)
			{
				$self.addClass('_active');
			}
		});
	}
};