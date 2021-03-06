<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>Сайт</title>
	<script src="/static/theme/js/jquery-2.1.1.min.js"></script>
	<script src="/static/theme/js/device.js"></script>
	<script src="/static/theme/js/Cookie.js"></script>
	<script src="/static/theme/js/helperSiteTypeDetect.js"></script>

	<?
		$browserIE = (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") != false);
		if(!$browserIE){?>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<?}?>

	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="/static/theme/js/swiper/dist/css/swiper.min.css">
	<link rel="stylesheet" href="/static/theme/js/chosen/chosen.css">
	<link rel="stylesheet" href="/static/theme/js/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="/static/theme/js/scrollbar/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="/static/theme/js/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="/static/theme/css/styles.css">
</head>
<body>
<?
	$mobile = isset($_COOKIE['site_viewType']) && $_COOKIE['site_viewType'] == 'isMobile';
	$tablePort = isset($_COOKIE['site_viewType']) && $_COOKIE['site_viewType'] == 'isTablePort';
	$desktop =  isset($_COOKIE['site_viewType']) && $_COOKIE['site_viewType'] == 'isDesktop';
	$desktopAndTableLand = isset($_COOKIE['site_viewType']) && ($_COOKIE['site_viewType'] == 'isDesktop' || $_COOKIE['site_viewType'] == 'isTableLand');
?>
<header class="header">
	<div class="old-version" data-old-version>
		<div class="grid__inner old-version__inner">
			Добро пожаловать на обновленный сайт ПАО «Росгосстрах Банк»! Если захотите, Вы можете <a href="#" class="old-version__link">вернуться к старой версии сайта</a>
			<a href="javascript:void(0);" data-old-version-close class="old-version__close"></a>
		</div>
	</div>
	<div class="header__sections">
		<div class="grid__inner">
			<a href="javascript:void(0);" data-header-search-btn class="header__search-btn no-mob-block"><span class="header__search-btn-text">Найти...</span></a>
			<div class="header__search-form no-mob-block">
				<a href="javascript:void(0);" class="header__search-form-close"  data-header-search-close></a>
				<form action="/static/search.php"  data-header-search-form>
					<div class="header__search-form-field">
						<input type="text" name="q" data-header-search-form-field placeholder="Например: Вклады">
					</div>
				</form>
				<div class="header__search-form-requests-wrap" data-header-search-form-requests="/static/ajax/searchRequests.php">

				</div>
			</div>
			<div class="header__sections-items no-mob-block">
				<div class="header__sections-item">
					<a href="javascript:void(0);" class="header__sections-item-link" data-menu-section-btn="personal">Частным клиентам</a>
				</div>
				<div class="header__sections-item">
					<a href="javascript:void(0);" class="header__sections-item-link no-switch-menu" data-menu-section-btn="business">Бизнесу</a>
				</div>
				<div class="header__sections-item">
					<a href="javascript:void(0);" class="header__sections-item-link no-switch-menu" data-menu-section-btn="financial">Финансовым институтам</a>
				</div>
			</div>
			<div class="mob-menu__sections is-mob-block" data-mob-sections>
				<a href="javascript:void(0);" class="mob-menu__sections-title" data-mob-sections-title>Частным клиентам</a>
				<div class="mob-menu__sections-items"  data-mob-sections-items>
					<a href="javascript:void(0);" data-mob-sections-item="personal" class="mob-menu__sections-item _active">Частным клиентам</a>
					<a href="javascript:void(0);" data-mob-sections-item="business" class="mob-menu__sections-item">Бизнесу</a>
					<a href="javascript:void(0);" data-mob-sections-item="financial" class="mob-menu__sections-item">Финансовым институтам</a>
				</div>
			</div>
		</div>
	</div>
	<div class="header__top">
		<div class="grid__inner header__top-inner">
			<a href="/" class="header__logo"></a>
			<a href="/" class="header__logo-ico"></a>
			<div class="header__top-right">
				<a href="javascript:void(0);" data-b-menu-btn class="header__menu-btn is-tablet-block middle">
					<div class="header__menu-btn-in">
						<div class="header__menu-btn-bar"></div>
						<div class="header__menu-btn-bar"></div>
						<div class="header__menu-btn-bar"></div>
					</div>
				</a>
				<div class="header__top-enter" data-header-login>
					<a href="javascript:void(0);" class="btn _gold header__top-btn" data-header-login-btn>ВХОД В ИНТЕРНЕТ-БАНК</a>
					<div class="header__top-enter-items hide" data-header-login-block>
						<a href="https://online.rgsbank.ru" target="_blank" class="header__top-enter-item">Частным лицам</a>
						<a href="https://ib.rgsbank.ru" target="_blank" class="header__top-enter-item">Юридическим лицам</a>
					</div>
				</div>
				<div class="header__phones">
					<div class="header__phones-title is-desktop-block">Контакт-центр</div>
					<div class="header__phone">
						<a href="tel:88007004040" class="header__phone-link">8 (800) 700-40-40</a>
					</div>
					<div class="header__phone">
						<a href="tel:84959258060" class="header__phone-link">8 (495) 925-80-60</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header__bottom" data-menu-wrap>
		<div data-menu-in>
			<div class="header__bottom-block">
				<div class="grid__inner">
					<a href="javascript:void(0);" data-b-menu-btn class="header__menu-btn no-tablet-block middle">
						<div class="header__menu-btn-in">
							<div class="header__menu-btn-bar"></div>
							<div class="header__menu-btn-bar"></div>
							<div class="header__menu-btn-bar"></div>
						</div>
					</a>
					<a href="javascript:void(0);" data-header-search-btn class="header__search-btn is-mob-block"></a>
					<div class="header__search-form is-mob-block">
						<a href="javascript:void(0);" class="header__search-form-close"  data-header-search-close></a>
						<form action="/static/search.php"  data-header-search-form>
							<div class="header__search-form-field">
								<input type="text" name="q" data-header-search-form-field placeholder="Например: Вклады">
							</div>
						</form>
						<div class="header__search-form-requests-wrap" data-header-search-form-requests="/static/ajax/searchRequests.php">
							
						</div>
					</div>

					<div class="header__menu hide" data-menu="personal">
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="1" class="header__menu-link">Вложить и сохранить</a>
						</div>
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="2" class="header__menu-link">Оплатить и перевести</a>
						</div>
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="3" class="header__menu-link">Выбрать карту</a>
						</div>
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="4" class="header__menu-link">Взять кредит</a>
						</div>
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="5" class="header__menu-link">Инвестировать</a>
						</div>
						<div class="header__menu-item is-mob-block">
							<a href="javascript:void(0);"  class="header__menu-link _menu">Меню</a>
						</div>
					</div>
					<div class="header__menu hide" data-menu="business">
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="business1" class="header__menu-link">Рко</a>
						</div>
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="business2" class="header__menu-link">Депозиты</a>
						</div>
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="business3" class="header__menu-link">Зарплатный проект</a>
						</div>
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="business4" class="header__menu-link">Кредитование</a>
						</div>
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="business5" class="header__menu-link">Банковские гарантии</a>
						</div>
					</div>
					<div class="header__menu hide" data-menu="financial">
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="financial1" class="header__menu-link">Финансовым институтам</a>
						</div>
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="financial2" class="header__menu-link">Финансовым институтам</a>
						</div>
						<div class="header__menu-item no-mob-block">
							<a href="javascript:void(0);" data-menu-link="financial3" class="header__menu-link">Финансовым институтам</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mob-menu is-mob-block swiper-container" data-mob-menu>
				<div class="swiper-wrapper">
					<div class="header__menu-item swiper-slide" data-mob-menu-item="personal">
						<a href="javascript:void(0);" data-menu-link="1"  class="header__menu-link">Вложить и сохранить</a>
					</div>
					<div class="header__menu-item swiper-slide" data-mob-menu-item="personal">
						<a href="javascript:void(0);" data-menu-link="2"  class="header__menu-link">Оплатить и перевести</a>
					</div>
					<div class="header__menu-item swiper-slide" data-mob-menu-item="personal">
						<a href="javascript:void(0);" data-menu-link="3" class="header__menu-link">Выбрать карту</a>
					</div>
					<div class="header__menu-item swiper-slide" data-mob-menu-item="personal">
						<a href="javascript:void(0);" data-menu-link="4" class="header__menu-link">Взять кредит</a>
					</div>
					<div class="header__menu-item swiper-slide" data-mob-menu-item="personal">
						<a href="javascript:void(0);" data-menu-link="5" class="header__menu-link">Инвестировать</a>
					</div>
					<div class="header__menu-item swiper-slide" data-mob-menu-item="personal">
						<a href="javascript:void(0);" data-menu-link="6" class="header__menu-link">О банке</a>
					</div>
					<div class="header__menu-item swiper-slide" data-mob-menu-item="personal">
						<a href="javascript:void(0);" data-menu-link="7" class="header__menu-link">Справочный центр</a>
					</div>
					<div class="header__menu-item swiper-slide" data-mob-menu-item="business">
						<a href="javascript:void(0);" data-menu-link="business1" class="header__menu-link">Рко</a>
					</div>
					<div class="header__menu-item swiper-slide" data-mob-menu-item="business">
						<a href="javascript:void(0);" data-menu-link="business2" class="header__menu-link">Депозиты</a>
					</div>
					<div class="header__menu-item swiper-slide" data-mob-menu-item="business">
						<a href="javascript:void(0);" data-menu-link="business3" class="header__menu-link">Зарплатный проект</a>
					</div>
				</div>
			</div>
		</div>
		<div class="header__menu-blocks">
			<?include "menu/burger/b-menu.php"?>
			<div class="grid__inner">
				<div class="menu__block hide" data-menu-content="1">
					<div class="menu__block-inner">
						<div class="menu-banner">
							<div class="menu-banner__img" style="background-image: url('/static/theme/images/banners/deposit/Pension_Program.jpg');"></div>
							<div class="menu-banner__inner">
								<div class="menu-banner__title">Пенсионная программа</div>
								<div class="menu-banner__text">
									Получайте скидки в аптеках и повышенную
									ставку по вкладу «Пенсионный доход»
								</div>
								<a href="#" class="btn _red menu-banner__btn">Оформить заявку</a>
							</div>
						</div>
						<div class="menu__block-title"><a href="/static/deposit/index.php">Вложить и сохранить</a></div>
						<div class="menu__block-col _col-1-1">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Вклады</a>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="/static/deposit/gosstrakh.php" class="b-menu__submenu-link">«Госстраховский»</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/deposit/gosstrakh-vip.php" class="b-menu__submenu-link">«Госстраховский VIP»</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/deposit/save.php" class="b-menu__submenu-link">«Накопительный»</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/deposit/universal.php" class="b-menu__submenu-link">«Универсальный»</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/deposit/universal-vip.php" class="b-menu__submenu-link">«Универсальный VIP»</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/deposit/invest.php" class="b-menu__submenu-link">«Инвестиционный»</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/deposit/pensoin.php" class="b-menu__submenu-link">«Пенсионный доход»</a>
								</div>
								<div class="b-menu__submenu-item is-mob-block">
									<a href="/static/deposit/filter.php" class="b-menu__submenu-link _red">Подобрать вклад</a>
								</div>
								<a href="/static/deposit/filter.php" class="btn menu__block-btn no-mob-block _red">подобрать вклад</a>
							</div>
						</div>
						<div class="menu__block-col _col-1-2">
							<div class="b-menu__item">
								<a href="/static/inner.php" class="b-menu__item-link">Пенсионная программа</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/deposit/accounts.php" class="b-menu__item-link">Текущие счета</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/deposit/boxes.php" class="b-menu__item-link">Сейфовые ячейки</a>
							</div>
						</div>
						<div class="menu__block-col _col-1-3">
							<div class="b-menu__item">
								<div class="b-menu__item-link">Другие услуги</div>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="/static/deposit/payments.php" class="b-menu__submenu-link">Выплаты вкладчикам других банков</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/deposit/compensation.php" class="b-menu__submenu-link">Компенсационные выплаты</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu__block hide" data-menu-content="2">
					<div class="menu__block-inner">
						<div class="menu-banner">
							<div class="menu-banner__img" style="background-image: url('/static/theme/images/banners/transactions/CardToCard.png');"></div>
							<div class="menu-banner__inner">
								<div class="menu-banner__title">Переводы по номеру карты</div>
								<div class="menu-banner__text">
									Моментальные переводы между картами,
									выпущенными российскими банками
								</div>
								<a href="#" class="btn _red menu-banner__btn">УЗНАТЬ ПОДРОБНЕЕ</a>
							</div>
						</div>
						<div class="menu__block-title"><a href="/static/transfers/index.php">Оплатить и перевести</a></div>
						<div class="menu__block-col _col-2-1">
							<div class="b-menu__item">
								<a href="/static/transfers/services.php" class="b-menu__item-link">Оплата услуг</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/transfers/card-to-card.php" class="b-menu__item-link">С карты на карту</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/transfers/currency.php" class="b-menu__item-link">
									Валютно-обменные<br />
									операции по льготному курсу
								</a>
							</div>
						</div>
						<div class="menu__block-col _col-2-2">
							<div class="b-menu__item">
								<div class="b-menu__item-link">Денежные переводы</div>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="/static/transfers/rgs.php" class="b-menu__submenu-link">Мгновенные переводы РОСГОССТРАХ&nbsp;БАНКА</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/transfers/western-union.php" class="b-menu__submenu-link">Western Union</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/transfers/money-gram.php" class="b-menu__submenu-link">MoneyGram</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/transfers/golden-crown.php" class="b-menu__submenu-link">«Золотая корона»</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu__block hide" data-menu-content="3">
					<div class="menu__block-inner">
						<div class="menu-banner">
							<div class="menu-banner__img" style="background-image: url('/static/theme/images/banners/card/Card.jpg');"></div>
							<div class="menu-banner__inner">
								<div class="menu-banner__title">Пенсионная карта</div>
								<div class="menu-banner__text">
									Откройте пенсионную карту и получайте
									возврат 3% от покупок в аптеках
								</div>
								<a href="#" class="btn _red menu-banner__btn">УЗНАТЬ ПОДРОБНЕЕ</a>
							</div>
						</div>
						<div class="menu__block-title"><a href="/static/cards/">Выбрать карту</a></div>
						<div class="menu__block-col _col-3-1">
							<div class="b-menu__item">
								<a href="/static/cards/best.php" class="b-menu__item-link">Отличная карта</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/cards/pension.php" class="b-menu__item-link">Пенсионная карта</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/cards/salary.php" class="b-menu__item-link">Зарплатная карта</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/cards/visa.php" class="b-menu__item-link">Visa и MasterCard</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/cards/payments.php" class="b-menu__item-link">Расчетная карта</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/cards/client.php" class="b-menu__item-link">Карта Клиента</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/cards/premium.php" class="b-menu__item-link">Премиальная карта</a>
							</div>
						</div>
						<div class="menu__block-col _col-3-2">
							<div class="b-menu__item">
								<a href="/static/cards/credit.php" class="b-menu__item-link">
									Кредитные карты для сотрудников
									группы Росгосстрах
								</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/cards/actions.php" class="b-menu__item-link">
									Скидки и специальные
									предложения
								</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/cards/refill.php" class="b-menu__item-link">Пополнение счета</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/cards/cashback.php" class="b-menu__item-link">Программа CashBack</a>
							</div>
						</div>
					</div>
				</div>
				<div class="menu__block hide" data-menu-content="4">
					<div class="menu__block-inner">
						<div class="menu__block-title"><a href="/static/credit/index.php">Взять кредит</a></div>
						<div class="menu__block-col _col-4-1">
							<div class="b-menu__item">
								<a href="/static/credit/cash.php" class="b-menu__item-link">Кредит наличными</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/credit/mortgage.php" class="b-menu__item-link">Ипотека</a>
							</div>
						</div>
						<div class="menu__block-col _col-4-2">
							<div class="b-menu__item">
								<a href="/static/credit/real-estate.php" class="b-menu__item-link">Под залог недвижимости</a>
							</div>
						</div>
					</div>
				</div>
				<div class="menu__block hide" data-menu-content="5">
					<div class="menu__block-inner">
						<div class="menu__block-title"><a href="/static/invest/index.php">Инвестировать</a></div>
						<div class="menu__block-col _col-5-1">
							<div class="b-menu__item">
								<a href="/static/invest/iis.php" class="b-menu__item-link">Индивидуальный инвестиционный счет</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/invest/insurance.php" class="b-menu__item-link">Инвестиционное страхование жизни</a>
							</div>
						</div>
						<div class="menu__block-col _col-5-2">
							<div class="b-menu__item">
								<a href="/static/invest/pay-founds.php" class="b-menu__item-link">ПИФы</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/invest/depository.php" class="b-menu__item-link">Депозитарий</a>
							</div>
						</div>
					</div>
				</div>
				<div class="menu__block hide" data-menu-content="6">
					<div class="menu__block-inner">
						<div class="menu__block-title"><a href="/static/about/">О банке</a></div>
						<div class="menu__block-col">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Отделения и банкоматы</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/about/contact.php" class="b-menu__item-link">Контакты</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Лицензии</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">
									Учредительные<br />
									и внутренние документы
								</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/about/fatca.php" class="b-menu__item-link">
									О налогообложении<br />
									иностранных счетов (FATCA)
								</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Реквизиты</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/about/security.php" class="b-menu__item-link">Защита от мошенничества</a>
							</div>
							<div class="b-menu__item">
								<a href="/static/about/disclosure-of-information/" class="b-menu__item-link">Раскрытие информации</a>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="/static/about/disclosure-of-information/annual-reports.php" class="b-menu__submenu-link">Годовые отчеты</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Ежеквартальные отчеты</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Сообщения о раскрытии информации</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Эмиссионные документы</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/about/disclosure-of-information/info-percent.php" class="b-menu__submenu-link">
										Информация о максимальных
										процентных ставках<br />
										по вкладам физических лиц
									</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">
										Информация для акционеров
										и иных заинтересованных лиц
									</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">
										Раскрытие информации
										для регулятивных целей
									</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="/static/about/disclosure-of-information/decree.php" class="b-menu__submenu-link">
										Раскрытие информации
										в соответствии с указанием
										ЦБ РФ от 28.12.2015 № 3921-У
									</a>
								</div>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Дистанционные сервисы</a>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Интернет-банк</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Мобильный банк</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">SMS-информирование</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Обслуживание через банкоматы</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Контакт-Центр</a>
								</div>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Пресс-центр</a>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Новости и пресс-релизы</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Публикации о банке</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Экспертный профиль</a>
								</div>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Вакансии</a>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Горячие вакансии</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Список вакансий</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Студентам и выпускникам</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu__block hide" data-menu-content="7">
					<div class="menu__block-inner">
						<div class="menu__block-col">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Справочный центр</a>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Вклады</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Карты</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Кредиты</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Инвестиции</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Платежи и переводы</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Сейфовые ячейки</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">МультиМаркер</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Юрист 24</a>
								</div>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Акции и спецпредложения</a>
							</div>
						</div>
					</div>
				</div>
				<?for ($i=0;$i<5;$i++){
					$businessMenu=["Рко","Депозиты","Зарплатный проект","Кредитование","Банковские гарантии"];
					?>
					<div class="menu__block hide" data-menu-content="business<?=$i+1?>">
						<div class="menu__block-inner">
							<div class="menu__block-title"><a href=""><?=$businessMenu[$i]?></a></div>
							<div class="menu__block-col _col-5-1">
								<div class="b-menu__item">
									<a href="/static/invest/iis.php" class="b-menu__item-link">Индивидуальный инвестиционный счет</a>
								</div>
								<div class="b-menu__item">
									<a href="/static/invest/insurance.php" class="b-menu__item-link">Инвестиционное страхование жизни</a>
								</div>
							</div>
							<div class="menu__block-col _col-5-2">
								<div class="b-menu__item">
									<a href="/static/invest/pay-founds.php" class="b-menu__item-link">ПИФы</a>
								</div>
								<div class="b-menu__item">
									<a href="/static/invest/depository.php" class="b-menu__item-link">Депозитарий</a>
								</div>
							</div>
						</div>
					</div>
				<?}?>
			</div>
		</div>
	</div>
</header>
<div class="city hide" data-city>
	<?$letters = ["А","Б","В","Г","Д","Е","Ж","З","И","Й","К","Л","М","Н","О","П","Р","С","Т","У","Ф","Х","Ц","Ч","Ш","Щ","Э","Ю","Я"];?>
	<div class="city__form">
		<div class="grid__inner">
			<div class="city__form-in">
				<a href="javascript:void(0);" class="city__form-close" data-city-close></a>
				<form action="" data-city-form>
					<div class="city__form-field city__form-field">
						<input type="text" data-city-form-field placeholder="Москва">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="city__block">
		<div class="grid__inner">
			<div class="city__letters no-mob-block">
				<? for ($i=0;$i<count($letters);$i++){?>
						<a href="javascript:void(0);" data-city-letter="<?=$letters[$i]?>" class="city__letter <?=$i==0 ? ' _active':''?>">
							<span><?=$letters[$i]?></span>
						</a>
				<?}?>
			</div>
			<div class="city__letters swiper-container is-mob-block" data-city-letters-gall>
				<div class="swiper-wrapper">
					<?for ($i=0;$i<count($letters);$i++){?>
						<a href="javascript:void(0);" data-city-letter="<?=$letters[$i]?>" class="swiper-slide city__letter <?=$i==0 ? ' _active':''?>"><span><?=$letters[$i]?></span></a>
					<?}?>
				</div>

			</div>
			<div class="city__items">
				<?
					$cities=["алават","алехард","альск","амара","анкт-Петербург","аранск","аратов","асово","еверодвинск","евероморск","еверск",
					"егежа","еленгинск","еменов","емикаракорск","ергиев Посад","лавгород","лавянск-на-Кубани","ланцы","лободской","людянка","моленск","нежинск","нежногорск",
					"олнечногорский","оль-Илецк","орочинск","ольцы","ортавала","основоборск","основский","основый Бор",
					"тарый Петергоф","тепное","терлитамак","троитель","трунино","тупино","уворов","уджа"];
					$cols = 5;
					$dublirovanieCounter= 2;
					if($tablePort){
						$cols = 4;
						$dublirovanieCounter = 4;
					}
					if($mobile){
						$cols = 2;
						$dublirovanieCounter = 1;
					}
					$rows = ceil(count($cities)/$cols);

				?>
				<? for ($j=0;$j<count($letters);$j++){?>
				<div class="city__items-block <?=$j==0 ? ' _active':' hide'  ?>" data-city-items-block="<?=$letters[$j]?>">
					<?
						for($dublirovanie=1; $dublirovanie<=$dublirovanieCounter;$dublirovanie++) {
							for ($k = 1; $k <= $rows; $k++) {
								for ($l = 1; $l <= $cols; $l++) {
									?>
									<div class="city__item" data-city-item>
										<a href="#" class="city__item-link"><?=$letters[$j] . $cities[$k + $rows * ($l - 1) - 1]?></a>
									</div>
								<?
								}
							}
						}
					?>
				</div>
				<?}?>
			</div>
		</div>
	</div>
</div>
<div class="grid">
