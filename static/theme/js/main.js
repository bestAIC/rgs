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
	app.menu();
	app.masks();
	app.bannerGall();
	app.initAnimations();
	app.info();
	app.initMaps();
	app.questions();
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
	$('[data-phone-mask]').mask("(000) 000-00-00",{clearIfNotMatch: true});
};

app.mobMenu = function () {
	var $mobMenu     = $('[data-mob-menu]');
};
app.menu = function () {
	var $header       = $('.header'),
			$menu        = $('[data-menu]'),
			$mobMenu        = $('[data-mob-menu]'),
			$menuWrap    = $('[data-menu-wrap]'),
			$menuIn   = $('[data-menu-in]'),
			$menuLink    = $menu.find('[data-menu-link]'),
			$menuContent = $('[data-menu-content]'),
			$menuBtn     = $('[data-b-menu-btn]'),
			menuNum = null,
			mobMenuswiper = false
		;
	if(app.utils.isMobile){
		$menuLink    = $mobMenu.find('[data-menu-link]');
	}
	app.dom.$window.on('scroll.Menu',function () {
		if(app.dom.$document.scrollTop()>=$header.height()){
			$header.addClass('_fixed');
		}else{
			$header.removeClass('_fixed');
		}
		if(app.utils.isMobile){
			_helper();
		}
	});

	if(!app.utils.isMobile){
		$menuLink.hover(function () {
			var $self =  $(this),
					data  =  $self.data('menuLink')
				;
			$menuBtn.removeClass('_active');
			$menuLink.removeClass('_active');
			$self.addClass('_active');
			$menuContent.hide();
			$menuContent.filter('[data-menu-content="'+ data +'"]').show();
			app.dom.$body.removeClass('b-menu-visible').addClass('menu-visible');
		});
	}

	$menuLink.on('click',function () {
		var $self =  $(this),
				data  =  $self.data('menuLink')
			;
		if(!app.utils.isMobile){
			$menuBtn.removeClass('_active');
		}
		$menuContent.hide();
		app.dom.$body.removeClass('b-menu-visible').addClass('menu-visible');
		$menuLink.removeClass('_active');
		$menuContent.filter('[data-menu-content="'+ data +'"]').show();
		$self.addClass('_active');
	});

	$menuWrap.hover(
		function(){

	},
		function () {
		app.dom.$body.removeClass('menu-visible');
		$menuContent.hide();
		$menuLink.removeClass('_active');
		if(app.utils.isMobile){
			$menuBtn.removeClass('_active');
		}
	});
	$menuBtn.on('click',function () {
		var $self = $(this);
		$self.toggleClass('_active');
		$menuContent.hide();
		$menuLink.removeClass('_active');
		if(app.utils.isMobile){
			app.dom.$body.toggleClass('menu-visible');
			_helper();
			if(!mobMenuswiper){
				initMobMenu();
			}
			if($self.hasClass('_active')){
				$menuLink.filter('[data-menu-link="1"]').first().click();
				mobMenuswiper.slideTo(0,0);
			}
		}else{
			app.dom.$body.toggleClass('b-menu-visible').removeClass('menu-visible');
		}

	});
	function _helper() {
		var h1 = Math.max(($header.height() - app.dom.$document.scrollTop()),0);
		$menuContent.height(app.dom.$window.height() - h1- $menuIn.height());
	}
	function initMobMenu() {
		mobMenuswiper = new Swiper($mobMenu[0], {
			slidesPerView: 'auto',
			simulateTouch: true,
			spaceBetween:25
		});
	}
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
			//loop:true,
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
			$search = $info.find('[data-info-search]'),
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

	app.dom.$window.on('click.CloseRequests',function (e) {
		if(!$(e.target).closest($search).length){
			$requests.fadeOut();
		}
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
		$field.val('');
		setTimeout(function () {
			$answer.removeClass('_active');
		},500);
	});
};
app.questions = function () {
	var $questions = $('[data-questions]'),
			$question = $questions.find('[data-questions-item]'),
			$questionTitle = $question.find('[data-questions-item-title]'),
			$questionAnswer = $question.find('[data-questions-item-answer]')
		;
	$questionTitle.on('click',function () {
		var $self = $(this);

		if($self.hasClass('_active')){
			$self.closest($question).find($questionAnswer).slideUp(300);
		}else{
			$questionAnswer.slideUp(300);
			$questionTitle.removeClass('_active');
			$self.closest($question).find($questionAnswer).slideDown(300);
		}
		$self.toggleClass('_active');
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
app.initMaps = function () {
	var script = document.createElement('script');
	script.type = 'text/javascript';
	script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAjgwJYKE3QnRDq8snccgJY499WUZrwTn0&v=3.exp&sensor=true' +
		'&callback=initialize';
	document.body.appendChild(script);
	window.initialize=function(){
		app.offices();
	};
};
app.offices = function() {
	var self = this,
			$offices = $('[data-offices]'),
			$tab = $offices.find('[data-offices-tab]'),
			$content = $offices.find('[data-offices-content]'),
			$mapPopup = $offices.find('[data-offices-map-popup]'),
			$mapPopupContent = $mapPopup.find('[data-offices-map-popup-content]'),
			$mapPopupClose = $mapPopup.find('[data-offices-map-popup-close]'),
			mapBlock = $offices.find('[data-offices-map]')[0],
			$points = $offices.find('[data-office-point]'),
			$plusBtn   = $offices.find('[data-zoom-plus]'),
			$minusBtn  = $offices.find('[data-zoom-minus]'),
			$filterCheck  = $offices.find('[data-filter-check]'),
			markers = []
		;

	if(!$offices.length){
		return false;
	}

	var
		mapOptions = {
			zoom:               11,
			center:             new google.maps.LatLng(55.74822645, 37.69954205),
			mapTypeControl:     false,
			streetViewControl:  false,
			zoomControl:        false,
			overviewMapControl: false,
			scrollwheel:        false,
			cancelable:true
		},
		map  = new google.maps.Map(mapBlock, mapOptions),
		styleArray = [
			{"featureType":"administrative","stylers":
				[{"visibility":"off"}]},
				{"featureType":"poi","stylers":[{"visibility":"simplified"}]},
				{"featureType":"road","stylers":[{"visibility":"simplified"}]},
				{"featureType":"water","stylers":[{"visibility":"simplified"}]},
				{"featureType":"transit","stylers":[{"visibility":"simplified"}]},
				{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},
				{"featureType":"road.highway","stylers":[{"visibility":"off"}]},
				{"featureType":"road.local","stylers":[{"visibility":"on"}]},
				{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]
			},
			{"featureType":"water","stylers":
				[{"color":"#84afa3"},{"lightness":52}]},
			{"stylers":[{"saturation":-77}]},{"featureType":"road"}];
	map.setOptions({styles: styleArray});
	
	addMarkers($points);

	$plusBtn.click(function(e) {
		e.preventDefault();
		map.setZoom(map.getZoom() + 1);
	});

	$minusBtn.click(function(e) {
		e.preventDefault();
		map.setZoom(map.getZoom() - 1);
	});
	$mapPopupClose.on('click',function () {
		$mapPopup.removeClass('_show');
		$mapPopup.data('marker').setIcon('/static/theme/images/icons/marker.svg');
		setTimeout(function () {
			$mapPopupContent.empty();
		},300);
	});
	function addMarkers($items) {
		var latlngbounds = new google.maps.LatLngBounds(),
				activeMarker = null
			;

		$items.each(function(){
			var $self = $(this),
					data1 = $self.data('officePoint')
				;
			var myLatLng = new google.maps.LatLng(data1.lat, data1.lan);
			latlngbounds.extend(myLatLng);
			var marker = new google.maps.Marker({
				position: {lat: data1.lat, lng: data1.lan},
				map: map,
				icon: '/static/theme/images/icons/marker.svg',
				$dom:$self
			});

			marker.addListener('click', function() {
				if(activeMarker){
					activeMarker.setIcon('/static/theme/images/icons/marker.svg');
				}
				activeMarker = this;
				marker.setIcon('/static/theme/images/icons/marker-active.png');
				$mapPopupContent.html(marker.$dom.clone());
				$mapPopup.addClass('_show');
				$mapPopup.data('marker',marker);
			});
			markers.push(marker);

		});
		if($items.length ==1){
			map.setCenter( latlngbounds.getCenter());
			map.setZoom(12);
		}else{
			map.setCenter( latlngbounds.getCenter(),map.fitBounds(latlngbounds));
		}
	}

	function setMapOnAll(map) {
		for (var i = 0; i < markers.length; i++) {
			markers[i].setMap(map);
		}
	}
	function clearMarkers() {
		setMapOnAll(null);
	}
	function deleteMarkers() {
		clearMarkers();
		markers = [];
	}

	$tab.on('click',function () {
		var $self = $(this);
		if($self.hasClass('_active')){
			return false;
		}
		$tab.removeClass('_active');
		$self.addClass('_active');
		$content.hide().filter('[data-offices-content="'+$self.data('officesTab')+'"]').fadeIn(300);
	});
};