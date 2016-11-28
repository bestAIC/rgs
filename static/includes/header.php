<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Сайт</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="theme/js/swiper/dist/css/swiper.min.css">
	<link rel="stylesheet" href="theme/css/styles.css">


</head>
<body >
<header class="header">
	<div class="header__top">
		<div class="grid__inner header__top-inner">
			<a href="/" class="header__logo"></a>
			<a href="/" class="header__logo-ico"></a>
			<div class="header__top-right">
				<a href="javascript:void(0);" data-b-menu-btn class="header__menu-btn is-tablet-block"></a>
				<a href="javascript:void(0);" class="header__search-btn is-tablet-block"></a>
				<a href="#" class="btn _gold header__top-btn">ИНТЕРНЕТ-БАНК</a>
				<div class="header__phones">
					<div class="header__phone">
						<a href="tel:88007004040" class="header__phone-link">8 800 700 4040</a>
					</div>
					<div class="header__phone">
						<a href="tel:84959258060" class="header__phone-link">8 495 925 8060</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header__bottom" data-menu-wrap>
		<div class="header__bottom-block">
			<div class="grid__inner">
				<a href="javascript:void(0);" data-b-menu-btn class="header__menu-btn no-tablet-block"></a>
				<a href="#" class="header__search-btn no-tablet-block"></a>
				<div class="header__menu" data-menu>
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
						<a href="#" class="header__menu-link">Меню</a>
					</div>
				</div>
			</div>
		</div>
		<div class="header__menu-blocks">
			<div class="grid__inner">
				<?include "menu/burger/b-menu.php"?>
				<div class="menu__block hide" data-menu-content="1">
					<div class="menu__block-inner">
						<div class="menu-banner">
							<div class="menu-banner__img" style="background-image: url('theme/images/menu-banner.jpg');"></div>
							<div class="menu-banner__inner">
								<div class="menu-banner__title">Пенсионная программа</div>
								<div class="menu-banner__text">
									Получайте скидки в аптеках и повышенную
									ставку по вкладу «Пенсионный доход»
								</div>
								<a href="#" class="btn _red menu-banner__btn">Оформить заявку</a>
							</div>
						</div>
						<div class="menu__block-col _col-1-1">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Вклады</a>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">«Госстраховский»</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">«Накопительный»</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">«Универсальный»</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">«Инвестиционный»</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">«Пенсионный доход»</a>
								</div>
								<a href="#" class="btn menu__block-btn _red">подобрать вклад</a>
							</div>
						</div>
						<div class="menu__block-col _col-1-2">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Пенсионная программа</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Текущие счета</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Сейфовые ячейки</a>
							</div>
						</div>
						<div class="menu__block-col _col-1-3">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Другие услуги</a>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Выплаты вкладчикам других банков</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Компенсационные выплаты</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu__block hide" data-menu-content="2">
					<div class="menu__block-inner">
						<div class="menu-banner">
							<div class="menu-banner__img" style="background-image: url('theme/images/menu-banner.jpg');"></div>
							<div class="menu-banner__inner">
								<div class="menu-banner__title">Переводы по номеру карты</div>
								<div class="menu-banner__text">
									Моментальные переводы между картами,
									выпущенными российскими банками
								</div>
								<a href="#" class="btn _red menu-banner__btn">УЗНАТЬ ПОДРОБНЕЕ</a>
							</div>
						</div>
						<div class="menu__block-col _col-2-1">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Оплата услуг</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">С карты на карту</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">
									Валютно-обменные<br />
									операции по льготному курсу
								</a>
							</div>
						</div>
						<div class="menu__block-col _col-2-2">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Денежные переводы</a>
							</div>
							<div class="b-menu__submenu">
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Мгновенные переводы РОСГОССТРАХ БАНКА</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">Western Union</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">MoneyGram</a>
								</div>
								<div class="b-menu__submenu-item">
									<a href="#" class="b-menu__submenu-link">«Золотая корона»</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu__block _1 hide" data-menu-content="3">
					<div class="menu__block-inner">
						<div class="menu-banner">
							<div class="menu-banner__img" style="background-image: url('theme/images/menu-banner.jpg');"></div>
							<div class="menu-banner__inner">
								<div class="menu-banner__title">Пенсионная карта</div>
								<div class="menu-banner__text">
									Откройте пенсионную карту и получайте
									возврат 3% от покупок в аптеках
								</div>
								<a href="#" class="btn _red menu-banner__btn">УЗНАТЬ ПОДРОБНЕЕ</a>
							</div>
						</div>
						<div class="menu__block-col _col-3-1">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Отличная карта</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Пенсионная карта</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Зарплатная карта</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Visa и MasterCard</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Расчетная карта</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Карта Клиента</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Премиальная карта</a>
							</div>
						</div>
						<div class="menu__block-col _col-3-2">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">
									Кредитные карты для сотрудников
									группы Росгосстрах
								</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">
									Скидки и специальные
									предложения
								</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Пополнение счета</a>
							</div>
						</div>
					</div>
				</div>
				<div class="menu__block _1 hide" data-menu-content="4">
					<div class="menu__block-inner">
						<div class="menu__block-col _col-4-1">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Кредит наличными</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Ипотека</a>
							</div>
						</div>
						<div class="menu__block-col _col-4-2">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Под залог недвижимости</a>
							</div>
						</div>
					</div>
				</div>
				<div class="menu__block _1 hide" data-menu-content="5">
					<div class="menu__block-inner">
						<div class="menu__block-col _col-5-1">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Индивидуальный инвестиционный счет</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Инвестиционное страхование жизни</a>
							</div>
						</div>
						<div class="menu__block-col _col-5-2">
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">ПИФы</a>
							</div>
							<div class="b-menu__item">
								<a href="#" class="b-menu__item-link">Депозитарий</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="grid">
