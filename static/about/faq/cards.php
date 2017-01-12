<?include "../../includes/header.php"?>
	<div class="inner">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/invest/Investments.png');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Справочный центр: Банковские&nbsp;карты</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Справочный центр</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Банковские карты</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<div class="b-block animation__top faq" data-tabs data-animation>
				<div class="faq__tabs no-mob-block">
					<div class="grid__inner">
						<a href="javascript:void(0);" data-tabs-tab="1" class="faq__tab _active">Дебетовые карты</a>
						<a href="javascript:void(0);" data-tabs-tab="2" class="faq__tab">Кредитные карты</a>
						<a href="javascript:void(0);" data-tabs-tab="3" class="faq__tab">Карта Клиента</a>
					</div>
				</div>
				<div class="faq__tabs is-mob-block swiper-container" data-faq-mob-tabs>
					<div class="swiper-wrapper">
						<div class="header__menu-item swiper-slide">
							<a href="javascript:void(0);"  data-tabs-tab="1" class="faq__tab _active">Дебетовые карты</a>
						</div>
						<div class="header__menu-item swiper-slide">
							<a href="javascript:void(0);"  data-tabs-tab="2" class="faq__tab">Кредитные карты</a>
						</div>
						<div class="header__menu-item swiper-slide">
							<a href="javascript:void(0);"  data-tabs-tab="3" class="faq__tab">Карта Клиента</a>
						</div>
					</div>
				</div>
				<div class="faq__sections">
					<div class="grid__inner">
						<div class="faq__section" data-tabs-content="1">
							<div class="questions__items" data-questions>
								<?
									$questions = [
										"Как перевести пенсию на пенсионную карту РОСГОССТРАХ БАНКА?",
										"Как оформить Пенсионную Карту?",
										"Можно оформить карту будущему пенсионеру?",
										"Как рассчитывается среднемесячный остаток по счету?",
										"Когда применяется ставка 5,5% на остаток?",
										"Когда и как выплачиваются % на остаток?",
										"Что такое Кэшбэк (CashBack)?",
										"При оплате в каких магазинах, ТСП (торгово-сервисных предприятиях) я получу CashBack?",
										"Как Вы определите, что я оплатил картой именно в аптеке?",
										"Как рассчитывается CashBack?",
										"Когда и как я получу CashBack?",
										"Как я могу использовать CashBack?",
										"Получу ли я CashBack, если оплачу покупку другой (не пенсионной) картой РОСГОССТРАХ БАНКА?"
									];
									for ($i=0;$i<count($questions);$i++){
										?>
										<div class="questions__item" data-questions-item>
											<div class="questions__item-inner">
												<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title><?=$questions[$i]?></a>
												<div class="questions__item-answer" data-questions-item-answer>
													<ul>
														<li>Выгодные тарифы по выпуску и обслуживанию международных карт.</li>
														<li>Повышенные проценты на остаток средств на карточном счете (тариф «Карта Пенсионная» и зарплатные карты)</li>
														<li>Возможность SMS-информирования держателей карт по всем операциям, совершаемым с использованием карты.</li>
													</ul>
												</div>
											</div>
										</div>
									<?}?>
							</div>
						</div>
						<div class="faq__section hide" data-tabs-content="2">
							<div class="questions__items" data-questions>
								<?
									$questions = [
										"Как перевести пенсию на пенсионную карту РОСГОССТРАХ БАНКА?",
										"Как оформить Пенсионную Карту?",
										"Можно оформить карту будущему пенсионеру?",
										"Как рассчитывается среднемесячный остаток по счету?",
										"Когда применяется ставка 5,5% на остаток?"
									];
									for ($i=0;$i<count($questions);$i++){
										?>
										<div class="questions__item" data-questions-item>
											<div class="questions__item-inner">
												<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title><?=$questions[$i]?></a>
												<div class="questions__item-answer" data-questions-item-answer>
													<ul>
														<li>Выгодные тарифы по выпуску и обслуживанию международных карт.</li>
														<li>Повышенные проценты на остаток средств на карточном счете (тариф «Карта Пенсионная» и зарплатные карты)</li>
														<li>Возможность SMS-информирования держателей карт по всем операциям, совершаемым с использованием карты.</li>
													</ul>
												</div>
											</div>
										</div>
									<?}?>
							</div>
						</div>
						<div class="faq__section hide" data-tabs-content="3">
							<div class="questions__items" data-questions>
								<?
									$questions = [
										"Как перевести пенсию на пенсионную карту РОСГОССТРАХ БАНКА?",
										"Как оформить Пенсионную Карту?",
										"Можно оформить карту будущему пенсионеру?",
										"Как рассчитывается среднемесячный остаток по счету?",
										"Когда применяется ставка 5,5% на остаток?",
										"Когда и как выплачиваются % на остаток?",
										"Что такое Кэшбэк (CashBack)?",
										"При оплате в каких магазинах, ТСП (торгово-сервисных предприятиях) я получу CashBack?"
									];
									for ($i=0;$i<count($questions);$i++){
										?>
										<div class="questions__item" data-questions-item>
											<div class="questions__item-inner">
												<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title><?=$questions[$i]?></a>
												<div class="questions__item-answer" data-questions-item-answer>
													<ul>
														<li>Выгодные тарифы по выпуску и обслуживанию международных карт.</li>
														<li>Повышенные проценты на остаток средств на карточном счете (тариф «Карта Пенсионная» и зарплатные карты)</li>
														<li>Возможность SMS-информирования держателей карт по всем операциям, совершаемым с использованием карты.</li>
													</ul>
												</div>
											</div>
										</div>
									<?}?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?include "../../includes/footer.php"?>

