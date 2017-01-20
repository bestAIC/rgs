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
app.utils.isTabletLand = (device.tablet() && ($(window).width() > $(window).height())) ? true : false;
app.utils.isTabletPort = (device.tablet() && ($(window).width() < $(window).height())) ? true : false;
app.utils.isMobileLand = (device.mobile() && ($(window).width() > $(window).height())) ? true : false;
app.utils.isMobilePort = (device.mobile() && ($(window).width() < $(window).height())) ? true : false;
app.utils.isMobile = device.mobile();
app.utils.isTablet = device.tablet();

app.utils.parseUrlQuery = function( link ) {
	var qu		= link && link.indexOf('?'),
			data	= {},
			i,
			param,
			pair
		;

	if ( link ) {
		if ( qu !== -1 ) {
			link = link.substr(qu + 1);
		}else{
			link = null;
		}
	} else {
		link = location.search && location.search.substr(1);
	}

	if ( link ) {
		pair = ( link ).split('&');
		for ( i = 0; i < pair.length; i ++ ) {
			param = pair[i].split('=');
			data[param[0]] = param[1];
		}
	}
	return data;
};
app.utils.getData = app.utils.parseUrlQuery(window.location.search);

app.utils.okonchanie = function( number, one, two, five ) {

	var poslezpt = parseInt( number ) !== parseFloat( number );

	number += '';
	// 10 - 19 || 5 - 10
	if ( (number.length > 1 && +number.substr( number.length - 2, 1) == '1') || +number.substr( number.length - 1, 1 ) > 4  && +number.substr( number.length - 1, 1 ) < 10 && !poslezpt ){
		return five;
	}
	// 1
	else if ( number.substr( number.length - 1, 1) == '1' && !poslezpt )
	{
		return one;
	}
	// 2 - 4, 1.5
	else
	{
		return two;
	}
};

app.init = function () {
	if(app.utils.getData['goto']){
		console.log($(app.utils.getData['goto']).offset().top);
		$('html, body').stop(true, true);
		setTimeout(function () {
			console.log($(app.utils.getData['goto']).offset().top);
			$('html, body').stop(true, true).animate({'scrollTop': $(app.utils.getData['goto']).offset().top - $('[data-menu-wrap]').height()}, 500);
		},500);
	}
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
	app.initNav();
	app.calc();
	app.calcFilter();
	app.initTabs();
	app.initBaseCheck();
	app.chooseCity();
	app.initGoto();
	app.CardP2P();
	app.transfersMenu();
	app.askForm();
	//app.welcome();
	app.actions();
	app.oldVersion();
	app.payFonds();
	app.depository();
	app.faqMobTabs();
	app.docsDateYears();
	app.experts();
	app.dataFile();
	app.vacancies();
	if(!(app.utils.isMobile || app.utils.isTablet)){
		app.initChosen();
	}else{
		app.initForms();
	}
	if(app.utils.isMobile || app.utils.isTabletPort ){
		app.tabletSliders();
		app.compare();
	}
	if(app.utils.isMobile){
		app.mobSliders();
	}
	if($('[data-not-found]').length){
		app.dom.$body.addClass('not-found');
	}
};
app.askForm = function () {
	var $ask =  $('[data-ask]'),
			$askForm = $ask.find('form'),
			$askField = $ask.find('[data-ask-field]'),
			$askContent = $('[data-ask-content]'),
			$content = null

		;
	$askContent.find('form').on('submit',function () {
		var $self = $(this),
				$errors = $self.find('[data-form-errors]')
			;
		$.post($self.attr('action'), $self.serialize(), function(data){
			if(!data.errors){
				$errors.hide();
				$.fancybox.close();
			}else{
				$errors.html(data.errors).show();
			}
		},'json');
		return false;
	});
	$askForm.on('submit',function () {
		$content = $askContent.filter('[data-ask-content="'+$askField.val()+'"]');
		$.fancybox({
			wrapCSS 	: 'fc-base _forms',
			content 	: $content,
			fitToView	: false,
			padding:0,
			helpers : {
				overlay : {
					css : {
						'background' : 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		});
		return false;
	});
};
app.experts = function () {
	var $experts =  $('[data-experts]'),
			$expertsForm = $experts.find('[data-experts-form]'),
			$expertsFormTheme = $expertsForm.find('[data-experts-form-theme]'),
			$expertsFormExpert = $expertsForm.find('[data-experts-form-expert]'),
			$expertsItem = $experts.find('[data-experts-item]'),
			$expertsItemBtn = $expertsItem.find('[data-experts-item-btn]'),
			$expertsItemTheme = $expertsItem.find('[data-experts-item-theme]'),
			$errors = $expertsForm.find('[data-form-errors]')

		;

	$expertsForm.find('form').on('submit',function () {
		var $self = $(this)
			;
		$.post($self.attr('action'), $self.serialize(), function(data){
			if(!data.errors){
				$errors.hide();
				$.fancybox.close();
			}else{
				$errors.html(data.errors).show();
			}
		},'json');
		return false;
	});
	$expertsItemBtn.on('click',function () {
		var $self = $(this);
		$errors.hide();
		$expertsFormExpert.val($self.data('expertsItemBtn'));
		$expertsFormTheme.html($self.closest($expertsItem).find($expertsItemTheme).html());
		$expertsFormTheme.trigger('chosen:updated');
		$.fancybox({
			wrapCSS 	: 'fc-base _forms',
			content 	: $expertsForm,
			fitToView	: false,
			padding:0,
			helpers : {
				overlay : {
					css : {
						'background' : 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		});
		return false;
	});
};
app.actions = function () {
	var $actions =  $('[data-actions]'),
			$actionsForm = $actions.find('form'),
			$actionsFields = $actionsForm.find('[data-actions-form-field]'),
			$actionsItems = $actions.find('[data-actions-items]')

		;
	$actionsFields.on('change',function () {
		$actionsForm.trigger('submit');
	});
	$actionsForm.on('submit',function () {
		var $self = $(this);
		$.post($self.attr('action'), $self.serialize(), function(data){
			$actionsItems.html(data);
		});
		return false;
	});
};
app.welcome = function () {
	var $welcome =  $('[data-welcome]')

		;
	if(!getCookie('welcomeWasShown')){
		$.fancybox({
			wrapCSS 	: 'fc-base _welcome',
			content 	: $welcome,
			fitToView	: false,
			padding:0,
			helpers : {
				overlay : {
					css : {
						'background' : 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		});
		setCookie('welcomeWasShown', true, {path: '/'});
	}

};
app.oldVersion = function () {
	var $oldVersion =  $('[data-old-version]'),
			$oldVersionClose =  $oldVersion.find('[data-old-version-close]')
		;
	$oldVersionClose.on('click',function () {
		$oldVersion.hide();
	});

};
app.dataFile = function () {
	var $file =  $('[data-file]'),
			$fileText =  $file.find('[data-file-text]'),
			$fileInp =  $file.find('[data-file-inp]')
		;
	$fileInp.on('change',function () {
		var $self = $(this),
				$closest = $self.closest($file),
				$mes = $self.val().replace("C:\\fakepath\\", "");
		if ($mes == ""){
			$mes = $closest.find($fileText).data('fileText');
		}
		$closest.find($fileText).text($mes);
	});

};
app.CardP2P = function () {
	var $transferBlock =  $('[data-transfer]'),
			$loader =  $transferBlock.find('[data-transfer-loader]'),
			$form =  $transferBlock.find('form'),
			$formBtn =  $transferBlock.find('[data-transfer-btn]'),
			$orderId =  $transferBlock.find('[data-transfer-inp="orderId"]'),
			$pares = $transferBlock.find('[data-transfer-inps="paRes"]'),

			$amount =  $transferBlock.find('[data-transfer-amount]'),
			$inputs = $form.find('[data-transfer-inp]'),
			$mainInputs = $inputs.filter('[data-transfer-inp="main"]'),
			allValidate = null,
			mainValidate = null,
			verify = false,
			orderId = null,
			timeout = null,
			xhr = null,
			sendLock = false

		;
	setMasks();
	function setMasks() {
		//$transferBlock.find('[data-card-mask]').mask("0000 0000 0000 0000",{clearIfNotMatch: true});
		$transferBlock.find('[data-card-mask]').mask("0000 0000 0000 0999999",{clearIfNotMatch: true});
		$transferBlock.find('[data-cvv-mask]').mask("000",{clearIfNotMatch: true});
		$transferBlock.find('[data-date-mask]').mask("A0/00",{
			clearIfNotMatch: true,
			translation:  {'A': {pattern: /[0-1]/},'B': {pattern: /[0-2]/},'C': {pattern: /[1-9]/}},
			onKeyPress: function(cep, e, field, options){
				var masks = ['AC/00', 'AB/00'];
				var mask = (cep.charAt(0)==1) ? masks[1] : masks[0];
				$transferBlock.find('[data-date-mask]').mask(mask, options);
			}
		});
		$transferBlock.find('[data-sum-mask]').mask("# ##0", {
			reverse: true
		});
		$transferBlock.find('[data-sum-mask]').on('change',function () {
			console.log($(this).val());
			var $val = $(this).val().replace(new RegExp(" ",'g'),"");
			if($val <50){
				$(this).val('');
			}
			if($val > 75000){
				$(this).val('75 000').change();
			}
		});
		$transferBlock.find('[data-name-mask]').mask('S', {translation:  {'S': {pattern: /[a-zA-Z\s]/, recursive: true}}});
	}
	function isValid($inputs) {
		var valid = true;
		$inputs.each(function () {
			if($.trim($(this).val()) == '') {
				valid = false
			}
		});
		return valid;
	}

	/**
	 * Регисрация заказа, вернет ID
	 */
	function sendRegister(callback) {
		return $.ajax({
			url: '/ajax/cards/registration/',
			dataType: 'JSON',
			type: 'GET',
			success: function(res) {
				if(callback) {
					callback(res);
				}
			},
			error: function(res) {
				showError(res);
			}
		})
	}

	/**
	 * Регисрация заказа, вернет ID
	 */
	function sendVerifycation(data) {
		return $.ajax({
			url: '/ajax/cards/verifycation/',
			dataType: 'JSON',
			type: 'GET',
			data: data,
			success: function(res) {
				$amount.text(res.data.commission);
				xhr = null;
			},
			error: function(res) {
				showError(res);
			}
		})
	}

	/**
	 * Отправляет запрос на перевод средств, вернет ссылку для редиректа
	 * @param data
	 * @returns {*}
	 */
	function sendPerform(data) {
		if(sendLock == true) return false;
		//$loader.show();
		sendLock = true;
		return $.ajax({
			url: '/ajax/cards/perform/',
			dataType: 'JSON',
			type: 'GET',
			data: $form.serialize(),
			success: function(res) {
				window.location.href = 'https://test.paymentgate.ru/rgsb/acsRedirect.do?orderId=' + $orderId.val();
				sendLock = false;
				//$loader.hide()
			},
			error: function(res) {
				showError(res)
			}
		})
	}

	/**
	 * Вывод ошибок
	 * @param message
	 */
	function showError(data) {
		if(data.responseJSON._errors !== undefined) {
			alert(data.responseJSON._errors[0]);
		}
	}

	/**
	 * Сбросим флаг заполнения главных полей
	 */
	$mainInputs.on('keyup', function() {
		verify = false;
	});

	$inputs.keyup(function () {
		mainValidate = isValid($mainInputs);
		allValidate = isValid($inputs);


		if(mainValidate && verify == false) {
			if(timeout !== null) {
				clearTimeout(timeout);
			}

			if(xhr !== null) {
				xhr.abort();
			}

			timeout = setTimeout(function () {
				if($orderId.val().length == 0) {
					sendRegister(function(res) {
						$orderId.val(res.data.orderId);
						xhr = sendVerifycation($form.serialize());
						timeout = null;
					});
				} else {
					xhr = sendVerifycation($form.serialize());
				}

				verify = true;
				timeout = null;
			}, 400);
		}

		if(allValidate){
			$formBtn.prop('disabled', false);
		}else{
			$formBtn.prop('disabled', true);
		}
	});

	$formBtn.on('click', sendPerform);
};
app.initGoto = function () {
	$('html').on('click.Goto', '[data-goto]', function(e){
		e.preventDefault();
		$('html, body').animate({'scrollTop': $($(this).data('goto')).offset().top - $('[data-menu-wrap]').height()}, 500);
	})
};
app.masks = function () {

	$('[data-phone-mask]').mask("(000) 000-00-00",{clearIfNotMatch: true});
};
app.initForms = function () {
	$('html').on('click.formError','[data-form-error]',function(){
		var $self = $(this);
		if($self.hasClass('_active')){
			$self.removeClass('_active');
		}else{
			$('[data-form-error]').removeClass('_active');
			$self.addClass('_active')
		}
		return false;
	});
	$('html').on('click.closeErrors',function(e){
		if(!($(e.targer).closest('[data-form-error]').length)){
			$('[data-form-error]').removeClass('_active');
		}
	});

};
app.chooseCity = function () {
	var $showBtn =  $('[data-choose-city-btn]'),
			$city =  $('[data-city]'),
			$gall=  $city.find('[data-city-letters-gall]'),
			$form =  $city.find('[data-city-form]'),
			$inp =  $city.find('[data-city-form-field]'),
			$itemsBlock =  $city.find('[data-city-items-block]'),
			$cityItems =  $city.find('[data-city-item]'),
			$itemsBlockActive = $itemsBlock.filter('._active'),
			$cityItemsVisible = $itemsBlockActive.find($cityItems),
			$letters =  $city.find('[data-city-letter]'),
			activeLetter = $letters.filter('._active').data('cityLetter'),
			$close =  $city.find('[data-city-close]'),
			gаll = false
		;
	$.expr[':'].Contains = function(a,i,m){
		return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())==0;
	};

	$form.on('submit',function () {
		return false;
	});
	$showBtn.on('click',function () {
		$('html, body').animate({'scrollTop': 0}, 300);
		setTimeout(function () {
			app.dom.$body.addClass('choose-city');
			$city.fadeIn();
			setTimeout(function () {
				if(!gаll && $gall.length){
					gаll = new Swiper($gall[0], {
						slidesPerView: 'auto',
						simulateTouch: true,
						spaceBetween:5
					});
					gallInit = true;
				}
			},100);

		},300);
	});

	$close.on('click',_closePopup);

	$itemsBlockActive.mCustomScrollbar({
		axis: "y",
		theme: "dark"
	});

	$inp.on('change',function () {
		var $self = $(this),
				val = $self.val(),
				firstLetter = null,
				$matches = null
			;
		if(val){
			firstLetter = val.charAt(0).toUpperCase();

			$matches = $itemsBlockActive.find('.city__item-link:Contains(' + val + ')').closest($cityItemsVisible);
			$cityItemsVisible.not($matches).addClass('_disabled');
			$matches.removeClass('_disabled');
			$itemsBlockActive.mCustomScrollbar("scrollTo", $matches.first(),{
				scrollInertia:300
			});

			if(firstLetter != activeLetter){
				activeLetter = firstLetter;
				setLetter(activeLetter);
			}
		}
	}).keyup( function () {
		$(this).change();
	});

	$letters.on('click',function () {
		var $self = $(this);
		if(!$self.hasClass('_active')){
			activeLetter = $self.data('cityLetter');
			setLetter(activeLetter);
			$inp.val('');
		}
	});
	function setLetter(letter) {
		$letters.removeClass('_active').filter('[data-city-letter="'+activeLetter+'"]').addClass('_active');
		$itemsBlock.hide();

		$itemsBlockActive = $itemsBlock.filter('[data-city-items-block="'+activeLetter+'"]');
		$cityItemsVisible = $itemsBlockActive.find($cityItems);
		$cityItemsVisible.removeClass('_disabled');
		if(gаll){
			gаll.slideTo($letters.filter('[data-city-letter="'+activeLetter+'"]').index());
		}
		$itemsBlockActive.mCustomScrollbar({
			axis: "y",
			theme: "dark"
		});
		$itemsBlockActive.show();
	}
	function _closePopup() {
		app.dom.$body.removeClass('choose-city');
		$city.fadeOut();
	}
};
app.transfersMenu = function () {
	var $menu =  $('[data-transfers-menu]'),
			$mainMenu = $('[data-menu-wrap]')
		;
	if(app.utils.isMobile){
		$menu =  $('[data-transfers-mob-menu]');
	}
	if(!$menu.length){
		return false;
	}
	var throttled = _.throttle(updateMenu, 10);
	app.dom.$window.scroll(throttled);
	updateMenu();
	function updateMenu(){
		if(($menu.offset().top - $(document).scrollTop() - $mainMenu.height()) <=0 ){
			$menu.addClass('_fixed');
		}else{
			$menu.removeClass('_fixed');
		}
	}
};
app.initBaseCheck = function () {
	var $check =  $('[data-base-check]'),
			$checkWrap =  $('[data-base-check-wrap]')
		;
	$check.filter(':checked').each(function () {
		$(this).closest($checkWrap).addClass('_active');
	});
	$check.on('change',function () {
		$(this).closest($checkWrap).toggleClass('_active');
	});
};
app.initChosen = function () {
	$('[data-chosen]').chosen({
		disable_search_threshold: 1000,
		width: "100%"
	});
};
app.initNav = function () {
	var self = this;

	//$('html').off('click.nav');
	$('html').on('click.nav','[data-nav-btn]',function(){
		var $self = $(this);
		$self.toggleClass('_active').closest('[data-nav-block]').find('[data-nav-content]').slideToggle(500);
	});
};
app.initTabs = function () {
	var self = this,
			$closest = null,
			$tabs = null,
			$content = null

		;
	$('html').on('click.tabs','[data-tabs-tab]',function(){
		var $self = $(this);
		if(!($self.hasClass('_active')|| $self.hasClass('_disabled'))){
			$closest = $self.closest('[data-tabs]');
			$tabs = $closest.find('[data-tabs-tab]');
			$content = $closest.find('[data-tabs-content]');

			$tabs.removeClass('_active');
			$self.addClass('_active');
			$content.hide().filter('[data-tabs-content="'+$self.data('tabsTab')+'"]').show();
		}
	});
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
			
			$searchBtn     = $('[data-header-search-btn]'),
			$searchClose     = $('[data-header-search-close]'),
			$searchForm     = $('[data-header-search-form]'),
			$searchFormField     = $('[data-header-search-form-field]'),
			$searchFormRequests     = $('[data-header-search-form-requests]'),
			
			$menuBtn     = $('[data-b-menu-btn]'),
			$menuSectionsShow  = $('[ data-b-menu-sections-show]'),
			$menuSections  = $('[ data-b-menu-sections]'),
			menuNum = null,
			offset = null,
			mobMenuswiper = false,
			timeout = null
		;

	/*поиск*/
	$searchBtn.on('click',function () {
		var $self = $(this);
		if(!$self.hasClass('_active')){
			$header.addClass('search-open');
			$searchBtn.addClass('_active');

			app.dom.$body.removeClass('menu-visible');
			$menuContent.hide();
			$menuLink.removeClass('_active');
			if(app.utils.isMobile){
				$menuBtn.removeClass('_active');
			}
		}else{
			$searchForm.trigger('submit');
		}
	});

	$searchClose.on('click',function () {
		$header.removeClass('search-open');
		$searchBtn.removeClass('_active');
		$searchFormField.val('').change();
		$searchFormRequests.hide();
	});

	$searchFormField.on('keyup',function () {
		clearTimeout(timeout);
		$searchFormRequests.hide();
		timeout = setTimeout(function () {
			var val = $searchFormField.val();
			if(val){
				$.post($searchFormRequests.data('headerSearchFormRequests'), {q:val}, function(data){
					if(data){
						$searchFormRequests.html(data).slideDown(500);
					}else{
						$searchFormRequests.hide();
					}
				});
			}else{
				$searchFormRequests.hide();
			}
		},1000);

	});
	$searchForm.on('submit',function () {
		if(!$searchFormField.val()){
			return false;
		}
		var $self = $(this);
		$.post($self.attr('action'), $self.serialize(), function(data){
			
		});

	});
	/*конец поиска*/

	if(app.utils.isMobile){
		$menuLink    = $mobMenu.find('[data-menu-link]');
	}
	/*прилипание меню*/
	function _fixedMenu() {
		if(app.dom.$body.hasClass('b-menu-visible')){
			return false;
		}
		if(app.dom.$document.scrollTop()>=$header.height()){
			$header.addClass('_fixed');
		}else{
			$header.removeClass('_fixed');
		}
		if(app.utils.isMobile){
			_helper();
		}
	}
	_fixedMenu();
	app.dom.$window.on('scroll.Menu',_fixedMenu);
	/*конец прилипания меню*/

	if(!(app.utils.isMobile || app.utils.isTablet)){
		$menuLink.hover(function () {
			var $self =  $(this),
					data  =  $self.data('menuLink')
				;
			$menuBtn.addClass('_hide-burger');
			setTimeout(function () {
				$menuBtn.removeClass('_hide-burger _active');
			},500);
			$menuLink.removeClass('_active');
			$self.addClass('_active');
			$menuContent.hide();
			$menuContent.filter('[data-menu-content="'+ data +'"]').show();
			app.dom.$body.removeClass('b-menu-visible').addClass('menu-visible');
			app.dom.$body.removeClass('b-menu-visible-fixed');
		});
	}

	$menuLink.on('click',function () {
		var $self =  $(this),
				data  =  $self.data('menuLink')
			;
		if(!app.utils.isMobile){
			$menuBtn.addClass('_hide-burger');
			setTimeout(function () {
				$menuBtn.removeClass('_hide-burger _active');
			},500);
		}
		$menuContent.hide();
		app.dom.$body.removeClass('b-menu-visible').addClass('menu-visible');
		app.dom.$body.removeClass('b-menu-visible-fixed');
		$menuLink.removeClass('_active');
		$menuContent.filter('[data-menu-content="'+ data +'"]').show();
		$self.addClass('_active');
	});
	$menuSectionsShow.on('click',function () {
		var $self = $(this);
		if($self.hasClass('_active')){
			$menuSections.hide();
			app.dom.$body.removeClass('menu-sections-visible');
			$self.removeClass('_active');
		}else{
			$menuSections.show();
			$self.addClass('_active');
			app.dom.$body.addClass('menu-sections-visible ');
		}
	});
	app.dom.$window.on('click.CloseRequests',function (e) {
		if(!($(e.target).closest($menuSections).length || $(e.target).closest($menuSectionsShow).length)){
			$menuSections.hide();
			app.dom.$body.removeClass('menu-sections-visible');
			$menuSectionsShow.removeClass('_active');
		}
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

	function openMenu() {
		if(app.dom.$header.hasClass('_fixed')){
			app.dom.$body.addClass('b-menu-visible-fixed');
		}
		$menuBtn.addClass('_active');
		offset = app.dom.$window.scrollTop();
		if(app.utils.isMobile){
			$menuLink.filter('[data-menu-link="1"]').first().click();
			_helper();
			if(!mobMenuswiper){
				initMobMenu();
			}
			mobMenuswiper.slideTo(0,0);
		}else{
			$menuLink.removeClass('_active');
			$menuContent.hide();
			app.dom.$body.addClass('b-menu-visible').removeClass('menu-visible');
		}
	}
	function closeMenu() {
		app.dom.$body.removeClass('b-menu-visible-fixed');
		$menuBtn.addClass('_hide-burger');
		setTimeout(function () {
			$menuBtn.removeClass('_hide-burger _active');
		},500);
		app.dom.$body.removeClass('menu-visible');
		if(app.utils.isMobile){
			$menuContent.hide();
		}else{
			app.dom.$body.removeClass('b-menu-visible')
		}
		app.dom.$window.scrollTop(offset);
	}
	$menuBtn.on('click',function () {
		var $self = $(this);
		if($self.hasClass('_active')){
			closeMenu();
		}else{
			openMenu();
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
	if(app.utils.isTabletPort){
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
app.faqMobTabs = function () {
	var $tabs = $('[data-faq-mob-tabs]');

	$tabs.each(function () {
		var swiper = new Swiper($(this)[0], {
			slidesPerView: 'auto',
			simulateTouch: true,
			breakpoints: {
				640: {
					spaceBetween: 25
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
app.docsDateYears = function () {
	var $galls = $('[docs-date-years-gall]');

	$galls.each(function () {
		var swiper = new Swiper($(this)[0], {
			slidesPerView: 'auto',
			simulateTouch: true,
			spaceBetween: 60,
			breakpoints: {
				640: {
					spaceBetween: 30
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
	if(!$gall.length){
		return false;
	}
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
	initSwiper($tab.filter('._active').data('newsTab'));
};

app.bannerGall = function () {
	var $gall = $('[ data-banner-gall]'),
			$prev = $gall.find('[data-banner-gall-prev]'),
			$next = $gall.find('[data-banner-gall-next]'),
			$pag = $gall.find('[data-banner-gall-pag]'),
			canvas = null,
			$canvas = null,
			startTimeout = null,
			timeout = null
		;

	var swiper = new Swiper($gall[0], {
		nextButton:$next,
		prevButton:$prev,
		pagination:$pag,
		paginationClickable:true,
		//autoplay:7000,
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
			startTimeout = setTimeout(function () {
				swiper.slideNext();
			},7000);
		},
		onSlideChangeStart:function () {
			if(canvas){
				$gall.find('.swiper-pagination-bullet-active').append(canvas);
				$canvas.circleProgress('redraw');
			}
			clearTimeout(startTimeout);
			clearTimeout(timeout);
			timeout = setTimeout(function () {
				swiper.slideNext();
			},7000);
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
		
		$.post($answer.data('ajaxUrl'), {id:$self.data('requestsItem')}, function(data){
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
app.compare = function () {
	var $compare = $('[data-deposit-compare]'),
			$scroll = $compare.find('[data-deposit-compare-scroll]'),
			$fixed = $compare.find('[data-deposit-compare-fixed]'),
			offset = $scroll.find('td').first().innerWidth() - $fixed.width()
		;

	$scroll.mCustomScrollbar({
		axis: "x",
		theme: "dark",
		callbacks:{
			onTotalScrollBackOffset: offset,
			onScroll:function () {
				$fixed.addClass('_active');
			},
			onTotalScrollBack :function(){
				$fixed.removeClass('_active');
			}
		}
	});


};
app.payFonds = function () {
	var $fonds = $('[data-pay-fonds]'),
			$items = $fonds.find('[data-pay-fonds-items]'),
			$moreBtn = $fonds.find('[data-pay-fonds-more-btn]'),
			$hidden = $fonds.find('[data-pay-fonds-hidden]'),
			$hiddenItem = $hidden.find('[data-pay-fonds-hidden-item]'),
			counter = 3
		;

	if(app.utils.isTabletPort){
		counter = 2;
	}
	if(!$hiddenItem.length){
		$moreBtn.hide();
	}
	$moreBtn.on('click',function () {
		var $elem = $hidden.find('[data-pay-fonds-hidden-item]').slice(0,counter);
		$elem.each(function(){
			var $self = $(this);
			$self.removeAttr('data-pay-fonds-hidden-item').removeClass('hide');
			$self.appendTo($items);
		});
		if(!$hidden.find('[data-pay-fonds-hidden-item]').length){
			$moreBtn.hide();
		}
	});


};

app.depository = function () {
	var $depository = $('[data-depository]'),
			$tab = $depository.find('[data-depository-tab]'),
			$form = $depository.find('form'),
			$formToggle = $depository.find('[data-depository-form-toggle]'),
			$formFields = $depository.find('[data-depository-form-fields]'),
			$field = $depository.find('[data-depository-field]'),
			$typeInp = $depository.find('[data-depository-type]'),
			$block = $depository.find('[data-depository-block]'),
			$showMore = $depository.find('[data-depository-show-more]'),
			$hidden = $depository.find('[data-depository-hidden]'),
			counter = 3
		;
	if(app.utils.isTabletPort){
		counter = 2;
	}
	if(!$hidden.find('[data-depository-hidden-item]').length){
		$showMore.hide();
	}
	$formToggle.on('click',function () {
		$(this).toggleClass('_active');
		$formFields.slideToggle();
	});
	$tab.on('click',function () {
		var $self = $(this);
		if(!$self.hasClass('_active')){
			$tab.removeClass('_active');
			$self.addClass('_active');
			$typeInp.val($self.data('depositoryTab'));
			$field.val('').trigger('chosen:updated');
			$form.trigger('submit');
		}
	});

	$showMore.on('click',function () {
		var $elem = $hidden.find('[data-depository-hidden-item]').slice(0,counter);
		$elem.each(function(){
			var $self = $(this);
			$self.removeAttr('data-depository-hidden-item');
			$self.appendTo($block);
		});
		if(!$hidden.find('[data-depository-hidden-item]').length){
			$showMore.hide();
		}
	});

	$form.on('submit',function () {
		var $self = $(this);
		$.post($self.attr('action'), $self.serialize(), function(data){
			$block.html(data.content);
			if(data.hidden){
				$hidden.html(data.hidden)
			}else{
				$hidden.empty();
			}
			if($hidden.find('[data-depository-hidden-item]').length){
				$showMore.show();
			}else{
				$showMore.hide();
			}
		},'json');
		return false;
	});
};
app.vacancies = function () {
	var $vacancies = $('[data-vacancies]'),
			$formBlock = $vacancies.find('[data-vacancies-form-block]'),
			$form = $formBlock.find('form'),
			$formToggle = $vacancies.find('[data-vacancies-form-toggle]'),
			$formFields = $vacancies.find('[data-vacancies-form-fields]'),
			$block = $vacancies.find('[data-vacancies-block]'),
			$list = $vacancies.find('[data-vacancies-list]'),
			$resumeForm =  $('[data-resume-form]'),
			$errors = $resumeForm.find('[data-form-errors]'),
			$resumeFormPosition =  $resumeForm.find('[data-resume-form-position]'),
			$resumeFormEmail =  $resumeForm.find('[data-resume-form-email]')
		;

	$formToggle.on('click',function () {
		$(this).toggleClass('_active');
		$formFields.slideToggle();
	});

	$form.on('submit',function () {
		var $self = $(this);
		$.post($self.attr('action'), $self.serialize(), function(data){
			if(data.content){
				$list.html(data.content);
				$block.fadeIn(300);
			}else{
				$block.hide();
			}
		},'json');
		return false;
	});

	$resumeForm.find('form').on('submit',function () {
		var $self = $(this)
			;
		$.post($self.attr('action'), $self.serialize(), function(data){
			if(!data.errors){
				$errors.hide();
				$.fancybox.close();
			}else{
				$errors.html(data.errors).show();
			}
		},'json');
		return false;
	});
	$list.on('click','[data-resume-btn]',function () {
		var $self = $(this),
				data = $self.data('resumeBtn')
			;
		$errors.hide();
		$resumeFormPosition.val(data['title']);
		$resumeFormEmail.val(data['email']);
		$.fancybox({
			wrapCSS 	: 'fc-base _forms',
			content 	: $resumeForm,
			fitToView	: false,
			padding:0,
			helpers : {
				overlay : {
					css : {
						'background' : 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		});
		return false;
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
			markerUrl = $offices.data('markerUrl'),
			$tab = $offices.find('[data-offices-tab]'),
			$content = $offices.find('[data-offices-content]'),
			$mapPopup = $offices.find('[data-offices-map-popup]'),
			$mapPopupContent = $mapPopup.find('[data-offices-map-popup-content]'),
			$mapPopupClose = $mapPopup.find('[data-offices-map-popup-close]'),
			mapBlock = $offices.find('[data-offices-map]')[0],
			$points = $offices.find('[data-office-point]'),
			$plusBtn   = $offices.find('[data-zoom-plus]'),
			$minusBtn  = $offices.find('[data-zoom-minus]'),

			$filter  = $offices.find('[data-filter]'),
			$filterExtend  = $filter.find('[data-filter-extend]'),
			$filterExtendShow  = $filter.find('[data-filter-extend-show]'),
			$filterExtendClose  = $filter.find('[data-filter-extend-close]'),
			$filterMetro  = $filter.find('[data-offices-filter-metro]'),
			$filterForm  = $filter.find('form'),
			$filterFormCity  = $filter.find('.offices__filter-city-field'),
			$filterFields = $filter.find('input[type="text"],input[type="checkbox"],select'),
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
		$mapPopup.data('marker').setIcon(markerUrl['static']);
		setTimeout(function () {
			$mapPopupContent.empty();
		},300);
	});
	function addMarkers($items) {
		var latlngbounds = new google.maps.LatLngBounds(),
				activeMarker = null,
				firstPointData =$items.first().data('officePoint')
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
				icon: markerUrl['static'],
				$dom:$self
			});

			marker.addListener('click', function() {
				if(activeMarker){
					activeMarker.setIcon(markerUrl['static']);
				}
				activeMarker = this;
				marker.setIcon(markerUrl['active']);
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

			//map.setCenter( latlngbounds.getCenter(),map.fitBounds(latlngbounds));
			//map.setCenter( {lat: firstPointData.lat, lng: firstPointData.lan},12);
			if($filterFormCity.val().toUpperCase()=="МОСКВА"){
				map.setCenter( {lat: 55.755826, lng: 37.6173},12);
			}else{
				map.setCenter( latlngbounds.getCenter(),12);
			}
			map.setZoom(Math.max(map.getZoom(),12));
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

	$filterForm.on('submit',function () {
		var $self = $(this);
		$.post($self.attr('action'), $self.serialize(), function(data){

			var $items = $(data.content).find('[data-office-point]');
			$content.filter('[data-offices-content="list"]').html($items);
			if(data.metro){
				$filterMetro.show().html($(data.metro)).find('[data-chosen]').chosen({
					disable_search_threshold: 1000,
					width: "100%"
				});
				$filterMetro.find('select').on('change',function () {
					$filterForm.trigger('submit');
				});
			}else{
				$filterMetro.empty().hide();
			}
			deleteMarkers();
			addMarkers($items);
		},'json');
		return false;
	});

	$filterFields.on('change',function () {
		$filterForm.trigger('submit');
	});

	$filterExtendShow.on('click',function () {
		$filterExtendShow.addClass('_active');
		$filterExtend.show();
	});

	$filterExtendClose.on('click',function () {
		$filterExtendShow.removeClass('_active');
		$filterExtend.hide();
	});
};
app.formatNumber = function (value) {
	return String(value).replace(/(?=\B(?:\d{3})+\b)/g, ' ');
};
app.calcFilter = function(){
	var self = this,
			$calcFilter = $('[data-calc-filter]'),
			$summ = $calcFilter.find('[data-calc-filter-sum]'),
			$currency = $calcFilter.find('[data-calc-filter-currency]'),
			$period = $calcFilter.find('[data-calc-filter-period]'),
			$result = $calcFilter.find('[data-calc-filter-result]'),
			$counter = $calcFilter.find('[data-calc-filter-counter]'),
			$checkWraps = $calcFilter.find('[data-base-check-wrap]'),
			$checks = $checkWraps.find('[data-base-check]'),
			$form = $calcFilter.find('form'),
			$reset = $calcFilter.find('[data-calc-filter-reset]'),
			arInfo = []

		;
	if(!$calcFilter.length){
		return false;
	}

	$.post($form.attr('action'), {}, function(data){
		arInfo = $.parseJSON(data);
	});

	$summ.on('change',function () {
		var val = parseInt($summ.val().replace(new RegExp(" ",'g'),""));
		val = val || '';
		$summ.val(app.formatNumber(val));
		calculation();
	});
	$checks.on('change',calculation);
	$currency.on('change',calculation);
	$period.on('change',calculation);
	$reset.on('click',function () {
		$form.trigger('reset');
		$period.trigger("chosen:updated");
		$currency.trigger("chosen:updated");
		$checkWraps.removeClass('_active').find('.ideal-check').removeClass('checked');
		$counter.empty();
		$result.hide();
	});
	
	function calculation() {
		var summ = parseInt($summ.val().replace(new RegExp(" ",'g'),""),10) || 0,
		 	currency = $currency.val(),
			period = $period.val()
			;
		var monthly = $calcFilter.find("input[name=monthly]").is(":checked") ? 'Y' : 'N';
		var cashin = $calcFilter.find("input[name=cashin]").is(":checked") ? 'Y' : 'N';
		var cashout = $calcFilter.find("input[name=cashout]").is(":checked") ? 'Y' : 'N';
		$result.empty().hide();
		/*$("#js-result").css("display", "none");
		$("#js-result_super").css("display", "none");
		$("#js-result .tBody").empty();*/
		var finded = 0;
		if (summ > 0) {
			$summ.removeClass("error");
			for (var i in arInfo) {
				var arDeposit = arInfo[i];
				if (monthly == 'Y' && arDeposit['monthly'] != 'Y') continue;
				if (cashin == 'Y' && arDeposit['cashin'] != 'Y') continue;
				if (cashout == 'Y' && arDeposit['cashout'] != 'Y') continue;
				var result = 0;
				var percent = 0;
				if (typeof(arDeposit[currency]) != 'undefined') {
					if (typeof(arDeposit[currency][period]) != 'undefined') {
						for (var minVal in arDeposit[currency][period]) {
							minVal = parseInt(minVal);
							if (minVal <= summ) {
								//console.log(arInfo[i]);
								percent = arDeposit[currency][period][minVal];
								//console.log(percent);
								result = (period / 365 * (percent / 100) + 1) * summ;
							}
						}
					}
				}
				if (result > 0) {
					if (finded == 0) {
						//$("#js-result .tBody").prepend('<div class="tr"><div class="th th1"><strong>' + $("select[name=period] option:selected").text() + '</strong></div></div>');
					}
					finded++;

					//var currency_str = ($("select[name=currency]").val() == 'rur' ? 'руб.' : ($("select[name=currency]").val() == 'usd' ? 'долл.' : 'евро'));
					/*var row = '<div class="tr' + (finded % 2 ? ' selected' : '') + '"><div class="td td1">';
					row += '<strong class="color4"><a href="' + arDeposit['url'] + '">' + arDeposit['name'] + '</a></strong>';
					row += arDeposit['descr'] + '</div><div class="td td2"><strong><span class="fs4">' + number_format(percent, 2, ',', ' ') + '</span>%</strong></div>';
					row += '<div class="td td3"><strong><span class="fs4">' + number_format(result, 2, ',', ' ') + '</span> ' + currency_str;
					row += '</strong></div><div class="td td4" style="margin-left: 171px; margin-top: -24px;">' + arDeposit['strahovoi'];
					row += '<a href="' + arDeposit['url'] + '" class="btnSendRequest">Подробнее</a></div></div>';*/
					var row = '<div class="deposit-card '+arDeposit["class"] +'"> ' +
						'<div class="deposit-card__ico" style="background-image: url('+arDeposit["img"]+');"></div> ' +
					'<div class="deposit-card__inner"> ' +
					'<div class="deposit-card__top"> ' +
					'<div class="deposit-card__main">' +
					'<div class="deposit-card__title">'+arDeposit['name']+'</div> ' +
					'<div class="deposit-card__text">'+arDeposit['descr']+'</div> ' +
					'</div> ' +
					'<div class="deposit-card__info"> ' +
						'<div class="deposit-card__info-block"> ' +
						'<div class="deposit-card__info-block-title">СРОК ВКЛАДА</div> ' +
						'<div class="deposit-card__info-block-text">'+$period.find('option:selected').text() +'</div> ' +
					'</div>' +
					'<div class="deposit-card__info-block">' +
					'<div class="deposit-card__info-block-title">СТАВКА, ДО</div>' +
					'<div class="deposit-card__info-block-text">'+percent.toFixed(2)+' %</div>' +
					'</div>' +
					'</div>' +
					'</div><div class="deposit-card__btns">' +
						'<a href="'+arDeposit['url']+'?goto=.subscription" class="btn deposit-card__btn">ОТКРЫТЬ ВКЛАД</a>' +
						'<a href="'+arDeposit['url']+'" class="btn deposit-card__btn _transparent">УЗНАТЬ ПОДРОБНЕЕ</a>' +
						'</div>' +
						'</div>' +
						'</div>';
					$result.append(row);
				}
			}
		}
		else{
			$summ.addClass("error");
		}
		if (finded > 0) {
			$result.show();
			$counter.text('Вам подходит '+finded+ ' ' +app.utils.okonchanie(finded,'вклад','вклада','вкладов'));
		}
		else {
			$result.hide();
			$counter.text('Вкладов, по заданным Вами параметрам, не найдено. Рекомендуем воспользоваться сравнительной таблицей для выбора наиболее удобных для Вас вариантов');
		}
	}
};

app.calc = function(){
	var self = this,
			$calc = $('[data-calc]'),
			calcData = null,
			calcDataValuta = null,

			$sum = $calc.find('[data-calc-sum]'),
			$sumSlider = $sum.find('[data-calc-sum-slider]'),
			$sumInp = $sum.find('[data-calc-sum-inp]'),
			$sumMin = $sum.find('[data-calc-sum-min]'),
			$sumMax = $sum.find('[data-calc-sum-max]'),
			
			$valutaSelect = $calc.find('[data-calc-valuta-select]'),

			$period = $calc.find('[data-calc-period]'),
			$periodSlider = $period.find('[data-calc-period-slider]'),
			$periodField = $period.find('[data-calc-period-select]'),
			$periodScale = $period.find('[data-calc-period-scale]'),
			
			$calcRate = $calc.find('[data-calc-rate]'),
			$calcProfit = $calc.find('[ data-calc-profit]'),
			$calcTotalSum = $calc.find('[data-calc-total-sum]'),

			sum = null,
			totalSum = null,
			period = null,
			profit = null,
			rate = null,
			valuta = 'rur',

			startSumValue = null,
			val = null
		;
	if(!$calc.length){
		return false;
	}

	$.post($calc.data('calcInfoUrl'), {}, function(data){
		calcData = $.parseJSON(data);
		calcData = calcData[$calc.data('calc')];
		calcDataValuta = calcData[valuta];
		init();
	});

	function init() {

		$sumSlider.slider({
			range: "min",
			min: calcDataValuta.min,
			max: calcDataValuta.max,
			step: calcDataValuta.step,
			value: calcDataValuta.value || calcDataValuta.min,
			slide: function( event, ui ){
				$sumInp.val(app.formatNumber(ui.value));
			},
			start: function( event, ui ){
				startSumValue = ui.value;
			},
			stop: function( event, ui ){
				if(ui.value != startSumValue){
					calculate();
					$sumInp.val(app.formatNumber(ui.value));
				}
			}
		});
		$sumInp.focus(function () {
			val = parseInt($sumInp.val().replace(new RegExp(" ",'g'),""),10);
			$sumInp.val(val);
		}).keyup(function () {

		});

		fillValuta();

		$sumMin.text(app.formatNumber(calcDataValuta.min));
		$sumMax.text(app.formatNumber(calcDataValuta.max));

		$sumInp.val(app.formatNumber(calcDataValuta.value)).change();

		$sumInp.on('change',function(){
			var val1 = parseInt($sumInp.val().replace(new RegExp(" ",'g'),""),10) || calcDataValuta.min;
			val = Math.min(Math.max(calcDataValuta.min, val1),calcDataValuta.max);
			$sumSlider.slider("value",val);
			$sumInp.val(app.formatNumber(val));
			calculate();
		});

		if($periodSlider.length){
			initPeriod();
		}
		calculate();
	}

	$valutaSelect.on('change',function () {
		valuta = $valutaSelect.val();
		calcDataValuta = calcData[valuta];
		calculate();

		$sumSlider.slider( "option", "max", calcDataValuta.max);
		$sumSlider.slider( "option", "min", calcDataValuta.min);
		$sumSlider.slider( "option", "step", calcDataValuta.step);
		$sumInp.change();

		fillPeriods();
		$sumMin.text(app.formatNumber(calcDataValuta.min));
		$sumMax.text(app.formatNumber(calcDataValuta.max));

		$periodField.trigger("chosen:updated");
		if($periodField.find('option[value="'+period+'"]').length){
			$periodField.val(period);
		}
		$periodSlider.slider( "option", "max", calcDataValuta.periodsCounter);
		$periodField.change();
	});

	function fillValuta() {
		var i = 0;
		for (var cur in calcData['currency']) {
			$valutaSelect.append( $('<option value="'+cur+'">'+calcData['currency'][cur]+'</option>'));
			i++;
		}
		$valutaSelect.trigger("chosen:updated");
		if(i<2){
			$valutaSelect.closest('[data-calc-valuta]').hide();
		}
	}

	function fillPeriods() {
		$periodField.empty();
		$periodScale.empty();
		if(calcDataValuta.periodsCounter === 1){
			$calc.addClass('hide-periods');
		}else{
			$calc.removeClass('hide-periods');
		}
		var i=1;
		for (var opt in calcDataValuta['periods']) {
			opt = parseInt(opt);
			$periodScale.append( $('<div class="deposit-calc__option-scale-item _period _'+calcDataValuta.periodsCounter+'-'+i+'">'+opt+'</div>'));
			$periodField.append( $('<option value="'+opt+'">'+opt+' '+app.utils.okonchanie(opt,"день","дня","дней")+'</option>'));
			i++;
		}
		$periodField.trigger("chosen:updated");
	}

	function initPeriod() {
		fillPeriods();
		$periodSlider.slider({
			range: "min",
			min: 1,
			max: calcDataValuta.periodsCounter,
			value: $periodField[0].selectedIndex + 1,
			slide: function( event, ui ){
				$periodField[0].selectedIndex = ui.value - 1;
				$periodField.trigger("chosen:updated");
				calculate();
			}
		});

		$periodField.on( "change", function() {
			$periodSlider.slider( "value", this.selectedIndex + 1 );
			calculate();
		});
	}

	function calculate() {
		sum = parseInt($sumInp.val().replace(new RegExp(" ",'g'),""),10);
		period = parseInt($periodField.val());
		for (var minVal in calcDataValuta['periods'][period]) {
			minVal = parseInt(minVal);
			if (minVal <= sum) {
				rate = calcDataValuta['periods'][period][minVal];
				rate=+rate;
			}
		}
		$calcRate.text(rate.toFixed(2)+'%');
		profit = Math.floor(sum*period*rate/100/365);
		$calcProfit.html(app.formatNumber(profit)+' '+ valutaZnak(valuta));
		$calcTotalSum.html(app.formatNumber(profit+sum)+' '+ valutaZnak(valuta));
	}
	function valutaZnak(valuta) {
		if(valuta =='rur'){
			return '<span class="rub _medium"></span>'
		}else if(valuta =='usd'){
			return '$'
		}else{
			return '€'
		}
	}
};