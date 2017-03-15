<?include "../includes/header.php"?>
	<div class="inner deposit rko">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/corporate/rko.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Рассчетно-кассовое обслуживание</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Главная</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Бизнесу</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Рассчетно-кассовое обслуживаниеc</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner__info animation__top rko__info _small-indent"  data-animation>
			<div class="grid__inner">
				<div class="inner__info-block">
					<div class="deposit__info-banner  deposit-info__block">
						<div class="deposit__info-banner-in">
							<div class="deposit__info-banner-title _big">Заполните анкету на сайте в течение рабочего дня и получите номер зарезервированного счета<br/>в течение 2-х часов</div>
						</div>
						<div class="deposit__info-banner-img"  style="background-image: url(<?=$desktopAndTableLand ? '/static/theme/images/info-banners/corporate/rko.png'
							: ($tablePort ? '/static/theme/images/info-banners/corporate/rko_tablet.png':'/static/theme/images/info-banners/corporate/rko_mobile.png') ?>)"></div>
					</div>
					<div class="deposit-info__block rko__reserve is-desktop-block">
						<h4>Как можно зарезервировать счет?</h4>
						<div class="deposit-open__methods">
							<div class="deposit-open__method">
								<div class="deposit-open__method-content">
									<ul class="dash-list">
										<li>Заполнив анкету на сайте банка в течение рабочего дня, Вы в течение 2-х часов получаете по электронной почте номер
											зарезервированного расчетного счета с банковскими реквизитами и ссылку на перечень необходимых документов для открытия счета;
										</li>
										<li>При заполнении анкеты в течение выходного/праздничного дня, или в конце рабочего дня, вы получите номер р/с и документы
											в течение 2-х часов следующего рабочего дня.
										</li>
										<li>Для активации счета в течение 30 календарных дней Вам необходимо обратиться в выбранный Центр Обслуживания Юридических Лиц/офис
											банка с полным пакетом документов. В противном случае, зарезервированный счет аннулируется по истечении 30 дней с момента подачи заявки.
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="inner__info-benefits">
					<div class="rko__info-title">Резервирование расчетного счета</div>
					<div class="rko__info-subtitle">
						Если Вы уже решили обслуживаться в РГС Банке, то предлагаем воспользоваться услугой «резервирование расчетного счета»
						. Это позволит вам совершать операции с номером счета практически сразу. А документы вы сможете оформить потом, в любое удобное время
						в течение 30 календарных дней.
					</div>
					<div class="rko__info-btn">
						<a href="javascript:void(0);" data-goto=".subscription" class="btn _red">зарезервировать</a>
					</div>
					<div class="inner__info-benefits-title">
						Почему это удобно?
					</div>
					<ul class="b-list">
						<li>Это бесплатно</li>
						<li>Подать заявку можно онлайн, круглосуточно и без выходных</li>
						<li>Вы можете зарезервировать РС на сайте, без предъявления документов и посещения офиса банка</li>
						<li>Зарезервированный номер счета вы можете передавать контрагентам и указывать в документах</li>
						<li>Счет резервируется на 30 календарных дней
						</li>
					</ul>
				</div>
				<div class="deposit-info__block rko__reserve no-desktop-block">
					<h4>Как можно зарезервировать счет?</h4>
					<div class="deposit-open__methods">
						<div class="deposit-open__method">
							<div class="deposit-open__method-content">
								<ul class="dash-list">
									<li>Заполнив анкету на сайте банка в течение рабочего дня, Вы в течение 2-х часов получаете по электронной почте номер
										зарезервированного расчетного счета с банковскими реквизитами и ссылку на перечень необходимых документов для открытия счета;
									</li>
									<li>При заполнении анкеты в течение выходного/праздничного дня, или в конце рабочего дня, вы получите номер р/с и документы
										в течение 2-х часов следующего рабочего дня.
									</li>
									<li>Для активации счета в течение 30 календарных дней Вам необходимо обратиться в выбранный Центр Обслуживания Юридических Лиц/офис
										банка с полным пакетом документов. В противном случае, зарезервированный счет аннулируется по истечении 30 дней с момента подачи заявки.
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks">
			<div class="b-block animation__top rko__packages" data-animation>
				<div class="grid__inner">
					<div class="rko__packages-top">
						<h3>Выберите пакет, который подходит именно Вашему бизнесу</h3>
						<div class="rko__packages-text">Если Вы только знакомитесь с РГС Банком, то представляем Вашему вниманию Пакетные предложения по расчетно-кассовому обслуживанию</div>
					</div>
					<div class="rko__packages-table no-mob-block">
						<table class="deposit-table">
							<tr class="deposit-table__titles">
								<td>Пакет</td>
								<td colspan="3" class="center">стоимость Ведения и обслуживания счета</td>
							</tr>
							<tr class="rko__packages-table-period">
								<td></td>
								<td>Ежемесячно</td>
								<td>За 3 месяца</td>
								<td><div class="red">За 6 месяцев</div></td>
							</tr>
							<tr class="deposit-table__row rko__package">
								<td>
									<div class="rko__package-title">«Начало»</div>
									<div class="rko__package-text">Для тех, кто только начинает свое дело. Оптимальное обеспечение услугами для старта Вашего бизнеса.</div>
								</td>
								<td class="rko__package-price">
									1 300 <span class="rub"></span>
								</td>
								<td class="rko__package-price">
									3 705 <span class="rub"></span>
								</td>
								<td class="rko__package-price">
									7 020 <span class="rub"></span>
								</td>
							</tr>
							<tr class="deposit-table__row rko__package">
								<td>
									<div class="rko__package-title">«Развитие»</div>
									<div class="rko__package-text">Для тех, кто уже набрал обороты и готов к покорению новых вершин</div>
								</td>
								<td class="rko__package-price">
									2 600 <span class="rub"></span>
								</td>
								<td class="rko__package-price">
									7 410 <span class="rub"></span>
								</td>
								<td class="rko__package-price">
									14 040 <span class="rub"></span>
								</td>
							</tr>
							<tr class="deposit-table__row rko__package">
								<td>
									<div class="rko__package-title">«Приумножение»</div>
									<div class="rko__package-text">Для тех, кто уже набрал обороты и готов к покорению новых вершин</div>
								</td>
								<td class="rko__package-price">
									3 600 <span class="rub"></span>
								</td>
								<td class="rko__package-price">
									10 260 <span class="rub"></span>
								</td>
								<td class="rko__package-price">
									19 440 <span class="rub"></span>
								</td>
							</tr>
						</table>
					</div>
					<div class="rko__mob-packages is-mob-block">
						<div class="rko__mob-package">
							<div class="rko__mob-package-title">«Начало»</div>
							<div class="rko__mob-package-text">Для тех, кто только начинает свое дело. Оптимальное обеспечение услугами для старта Вашего бизнеса.</div>
							<div class="rko__mob-package-price">
								<div class="rko__mob-package-price-title">стоимость Ведения и обслуживания счета</div>
								<div class="rko__mob-package-price-periods">
									<div class="rko__mob-package-price-period">
										<div class="rko__mob-package-price-period-title">Ежемесячно</div>
										<div class="rko__mob-package-price-period-val">1 300 <span class="rub"></span></div>
									</div>
									<div class="rko__mob-package-price-period">
										<div class="rko__mob-package-price-period-title">За 3 месяца</div>
										<div class="rko__mob-package-price-period-val">3 705 <span class="rub"></span></div>
									</div>
									<div class="rko__mob-package-price-period">
										<div class="rko__mob-package-price-period-title"><span class="red">За 6 месяцев</span></div>
										<div class="rko__mob-package-price-period-val">7 020 <span class="rub"></span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="rko__mob-package">
							<div class="rko__mob-package-title">«Развитие»</div>
							<div class="rko__mob-package-text">Для тех, кто уже набрал обороты и готов к покорению новых вершин</div>
							<div class="rko__mob-package-price">
								<div class="rko__mob-package-price-title">стоимость Ведения и обслуживания счета</div>
								<div class="rko__mob-package-price-periods">
									<div class="rko__mob-package-price-period">
										<div class="rko__mob-package-price-period-title">Ежемесячно</div>
										<div class="rko__mob-package-price-period-val">2 600 <span class="rub"></span></div>
									</div>
									<div class="rko__mob-package-price-period">
										<div class="rko__mob-package-price-period-title">За 3 месяца</div>
										<div class="rko__mob-package-price-period-val">7 410 <span class="rub"></span></div>
									</div>
									<div class="rko__mob-package-price-period">
										<div class="rko__mob-package-price-period-title"><span class="red">За 6 месяцев</span></div>
										<div class="rko__mob-package-price-period-val">14 040 <span class="rub"></span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="rko__mob-package">
							<div class="rko__mob-package-title">«Приумножение»</div>
							<div class="rko__mob-package-text">Для тех, кто уже набрал обороты и готов к покорению новых вершин</div>
							<div class="rko__mob-package-price">
								<div class="rko__mob-package-price-title">стоимость Ведения и обслуживания счета</div>
								<div class="rko__mob-package-price-periods">
									<div class="rko__mob-package-price-period">
										<div class="rko__mob-package-price-period-title">Ежемесячно</div>
										<div class="rko__mob-package-price-period-val">3 600 <span class="rub"></span></div>
									</div>
									<div class="rko__mob-package-price-period">
										<div class="rko__mob-package-price-period-title">За 3 месяца</div>
										<div class="rko__mob-package-price-period-val">10 260 <span class="rub"></span></div>
									</div>
									<div class="rko__mob-package-price-period">
										<div class="rko__mob-package-price-period-title"><span class="red">За 6 месяцев</span></div>
										<div class="rko__mob-package-price-period-val">19 440 <span class="rub"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rko__packages-salary">
						<h3 class="rko__packages-salary-title">«Зарплатный»</h3>
						<div class="rko__packages-salary-text">Для тех, кто думает о комфорте своих сотрудников</div>
						<div class="rko__packages-salary-block">
							<div class="rko__packages-salary-benefits">
								<ul class="b-list">
									<li>Бесплатное начисление зарплаты на карты сотрудников.</li>
									<li>
										Возможность бесплатного снятия наличных денежных средств в банкоматах ПАО «Росгосстрах Банк»,
										ПАО «Сбербанк», АКБ «Московский Кредитный Банк» по всей территории РФ.
									</li>
								</ul>
							</div>
							<div class="numerals__block rko__packages-salary-numerals">
								<div class="numerals__item _small">
									<div class="numerals__item-val">до 3 %</div>
									<div class="numerals__item-dash"></div>
									<div class="numerals__item-text">
										CashBack по операциям приобретения товаров и услуг на сумму 100 рублей и более.
									</div>
								</div>
								<div class="numerals__item _small">
									<div class="numerals__item-val">до 3,5 %</div>
									<div class="numerals__item-dash"></div>
									<div class="numerals__item-text">
										Начисление годовых на остаток.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<div class="b-block animation__top" data-animation>
				<div class="grid__inner">
					<h2>Тарифы</h2>
					<div class="files rko__files">
						<a href="#" class="file w100">
							<div class="file__inner">
								<div class="file__name">Вопросник для физических лиц</div>
								<div class="file__props">DOC, 70.42KB</div>
							</div>
						</a>
						<a href="#" class="file w100">
							<div class="file__inner">
								<div class="file__name">Вопросник для физических лиц</div>
								<div class="file__props">DOC, 70.42KB</div>
							</div>
						</a>
						<a href="#" class="file w100">
							<div class="file__inner">
								<div class="file__name">Вопросник для физических лиц</div>
								<div class="file__props">DOC, 70.42KB</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks">
			<div class="b-block animation__top " data-animation>
				<div class="grid__inner">
					<h3>«Надежный партнер»</h3>
					<div class="deposit-info__block rko__packages-partner clearfix">
						<div class="deposit-info__left">
							<div class="deposit-info__block">
								<div class="rko__packages-partner-text">
									<p>
										В период с 20.04.2016 по 31.12.2016 гг. РОСГОССТРАХ БАНК предлагает специальные условия в рамках тарифного плана
										«Надежный партнер» для юридических лиц и индивидуальных предпринимателей, пострадавших от отзыва лицензий или процедуры санации банков в 2013 − 2016 гг.
									 </p>
									<p>
										Получить специальные условия могут все юридические лица и индивидуальные предприниматели,
										имеющие расчетные счета в банках с отозванной лицензией или в санированных банках.
									</p>
								</div>
								<h4>Вы получите бесплатно:</h4>
								<ul class="b-list">
									<li>Открытие банковского счета</li>
									<li>Подключение к системе ДБО с выдачей лицензии криптографической защиты</li>
									<li>Удостоверение подписей, указанных в карточке с образцами подписей и оттиска печати</li>
									<li>Изготовление и заверение копий документов для открытия счета</li>
									<li>Ведение счета в течение 3 месяцев</li>
								</ul>
							</div>
						</div>
						<div class="deposit-info__right">
							<div class="deposit-info__block rko__packages-partner-conditions">
								<h4>Как получить специальные условия обслуживания?</h4>
								<div class="deposit-open__methods">
									<div class="deposit-open__method">
										<div class="deposit-open__method-title">Предоставьте в банк любой документ, подтверждающий факт обслуживания в банке, у которого была отозвана лицензия, или в санированном банке:</div>
										<div class="deposit-open__method-content">
											<ul class="dash-list">
												<li>копия карточки с образцами подписей и оттиска печати из банка;</li>
												<li>выписка (копия) по расчетному счету из банка;</li>
												<li>любая справка, связанная с расчетным счетом клиента, из банка;</li>
												<li>иной документ (копия), подтверждающий наличие расчетного счета в банке.</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="deposit-info__block">
								<h4>Как открыть счет?</h4>
								<div class="deposit-open__methods">
									<div class="deposit-open__method">
										<div class="deposit-open__method-content">
											<div class="deposit-open__steps _w100">
												<div class="deposit-open__step">
													<div class="deposit-open__step-num">01</div>
													Обратитесь <a href="#">в офис Банка</a> по месту
													регистрации бизнеса;
												</div>
												<div class="deposit-open__step">
													<div class="deposit-open__step-num">02</div>
													Предоставьте необходимый <a href="#">пакет документов;</a>
												</div>
												<div class="deposit-open__step">
													<div class="deposit-open__step-num">03</div>
													После получения пакета документов с Вами свяжется сотрудник Банка и сообщит о времени подписания договора и открытии счета.
												</div>
											</div>
										</div>
									</div>
									<div class="note-text">
										<p>
											Для вновь создаваемой организации РОСГОССТРАХ БАНК откроет временный счет и зачислит на него первоначальный взнос в уставный фонд.
											Перевод на полноценное обслуживание будет осуществлен после получения клиентом постоянного свидетельства о регистрации.
										</p>
										<p>
											При открытии расчетного счета по желанию клиента Банк изготавливает копии документов, необходимых для открытия счета,
											а также оформляет карточку с образцами подписей и оттиска печати.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<div class="b-block animation__top" data-nav-block data-animation>
				<div class="grid__inner">
					<h2>Полезные документы</h2>
					<div class="files">
						<a href="#" class="file">
							<div class="file__inner">
								<div class="file__name">Сборник Тарифов по выпуску и обслуживанию банковских карт с 01.08.2016</div>
								<div class="file__props">PDF, 1.16MB</div>
							</div>
						</a>
						<a href="#" class="file">
							<div class="file__inner">
								<div class="file__name">Правила выпуска и обслуживания банковских карт</div>
								<div class="file__props">PDF, 768.81KB</div>
							</div>
						</a>
						<a href="#" class="file">
							<div class="file__inner">
								<div class="file__name">Анкета заявление на получение банковской карты для тарифа «Карта Пенсионная»</div>
								<div class="file__props">DOC, 89KB</div>
							</div>
						</a>
						<div class="hide" data-nav-content>
							<?for ($i=1;$i<=9;$i++){?>
								<a href="#" class="file">
									<div class="file__inner">
										<div class="file__name">Сборник Тарифов по выпуску и обслуживанию банковских карт с 01.08.2016</div>
										<div class="file__props">PDF, 1.16MB</div>
									</div>
								</a>
							<?}?>
						</div>
					</div>
					<div class="gold-link__wrap">
						<a href="javascript:void(0);" data-nav-btn="fade" class="gold-link _arr-down" >Все документы (12)</a>
					</div>
				</div>
			</div>
			<?include "../includes/subscription.php"?>
		</div>
	</div>
<?include "../includes/footer.php"?>

