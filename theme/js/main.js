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
};
app.masks = function () {
	$('[data-card-mask]').mask("9999 9999 9999 9999");
	$('[data-cvv-mask]').mask("999");
	$('[data-date-mask]').mask("99/99");
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
			$next = $gall.find('[data-news-gall-next]')
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
		effect:'fade'
	});
};