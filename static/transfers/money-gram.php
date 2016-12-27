<?include "../includes/header.php"?>
	<div class="inner deposit transfers">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/transactions/Transactions.png');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Денежные переводы без открытия счета</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Оплатить и перевести</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Денежные переводы без открытия счета</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner__info animation__top"  data-animation>
			<div class="grid__inner">
				<div class="inner__info-block">
					<div class="deposit__info-banner deposit-info__block">
						<div class="deposit__info-banner-in">
							<div class="deposit__info-banner-title">Среднее время перевода</div>
							<div class="deposit__info-banner-text">5 мин</div>
						</div>
						<div class="deposit__info-banner-img"  style="background-image: url(<?=$desktopAndTableLand ? '/static/theme/images/info-banners/transactions/transactions_pic.png'
							: ($tablePort ? '/static/theme/images/info-banners/transactions/transactions_tablet_pic.png':'/static/theme/images/info-banners/transactions/Transactions_pic_mobile.png') ?>)"></div>
					</div>
				</div>
				<div class="inner__info-benefits">
					<div class="inner__info-benefits-title">
						В нашем Банке Вы можете осуществить денежные переводы по России, в страны ближнего и дальнего зарубежья.
					</div>
					<div class="inner__info-benefits-text">
						Оформить перевод возможно как с имеющегося банковского счета,  так и без его открытия — через систему мгновенных
						переводов РОСГОССТРАХ БАНКА или с помощью систем денежных переводов — Золотая Корона, Western Union и MoneyGram.
						Перевод денежных средств по системе срочных денежных переводов осуществляется только в пользу получателя — физического лица.
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks">
			<div class="b-block is-mob-block">
				<div class="transfers__mob-menu" data-transfers-mob-menu data-nav-block>
					<div class="transfers__mob-menu-in">
						<a href="javascript:void(0);" class="transfers__mob-menu-item _mg _title" data-nav-btn>Money Gram</a>
						<div class="transfers__mob-menu-items"  data-nav-content>
							<a href="/static/transfers/rgs.php" class="transfers__mob-menu-item _rgs">Росгосстрах</a>
							<a href="/static/transfers/western-union.php" class="transfers__mob-menu-item _wu">Western Union</a>
							<a href="/static/transfers/golden-crown.php" class="transfers__mob-menu-item _zk">Золотая Корона</a>
						</div>
					</div>
				</div>
			</div>
			<div class="b-block transfers__menu" >
				<div class="grid__inner">
					<h3>
						Выберите подходящую Вам платежную систему
					</h3>
					<div class="transfers__menu-block" data-transfers-menu>
						<div class="transfers__menu-items">
							<a href="/static/transfers/rgs.php" class="transfers__menu-item _rgs">
								<div class="transfers__menu-item-ico"></div>
								<div class="transfers__menu-item-title">
									<span class="is-desktop-block">Мгновенные переводы</span>
									<span class="no-desktop-block">Росгосстрах</span>
								</div>
							</a>
							<a href="/static/transfers/western-union.php" class="transfers__menu-item _wu">
								<div class="transfers__menu-item-ico"></div>
								<div class="transfers__menu-item-title"><span class="is-desktop-block">Переводы</span> Western Union</div>
							</a>
							<div class="transfers__menu-item _active _mg">
								<div class="transfers__menu-item-ico"></div>
								<div class="transfers__menu-item-title"><span class="is-desktop-block">Переводы</span> Money Gram</div>
							</div>
							<a href="/static/transfers/golden-crown.php" class="transfers__menu-item _zk">
								<div class="transfers__menu-item-ico"></div>
								<div class="transfers__menu-item-title"><span class="is-desktop-block">Переводы</span> Золотая Корона</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="b-block">
				<div class="deposit-info__block">
					<div class="grid__inner">
						<div class="inner__info-block">
							<div class="numerals">
								<div class="numerals__block">
									<div class="numerals__item _big">
										<div class="numerals__item-val">244 000</div>
										<div class="numerals__item-dash"></div>
										<div class="numerals__item-text">
											пунктов обслуживания по всему миру
										</div>
									</div>
								</div>
								<div class="numerals__block">
									<div class="numerals__item _small">
										<div class="numerals__item-val">10 минут</div>
										<div class="numerals__item-dash"></div>
										<div class="numerals__item-text">
											среднее<br />
											время перевода
										</div>
									</div>
									<div class="numerals__item _small">
										<div class="numerals__item-val">5 000 $</div>
										<div class="numerals__item-dash"></div>
										<div class="numerals__item-text">
											максимальная<br />
											сумма перевода
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="inner__info-benefits">
							<div class="inner__info-benefits-title">
								Благодаря международной компании MoneyGram
								Вы можете осуществлять денежные переводы
								по всему миру (за исключением переводов по России)
								без открытия счета и указания банковских реквизитов.
							</div>
							<ul class="b-list no-b-indent">
								<li>Комиссия рассчитывается по тарифной сетке в зависимости
									от суммы перевода и взимается только с отправителя.
									Выплата перевода производится бесплатно
								</li>
								<li>Средняя скорость проведения денежного перевода —
									всего 10 минут
								</li>
								<li>Для отправления перевода достаточно знать ФИО получателя, страну и город получения. Заполнение заявления клиентом
									не требуется
								</li>
								<li>Возможность получения перевода в любом пункте обслуживания системы, указанной отправителем. Также допускается получение перевода в другом городе, но в рамках одной страны</li>
								<li>Отправить сообщение получателю перевода, задать контрольный вопрос и указать контрольный ответ</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="deposit-info__block" >
					<div class="grid__inner">
						<h3>Как отправить перевод?</h3>
						<div class="deposit-open__methods">
							<div class="deposit-open__method">
								<div class="deposit-open__method-content">
									<div class="deposit-open__steps _3-cols">
										<div class="deposit-open__step">
											<div class="deposit-open__step-num">01</div>
											Обратитесь в удобное для вас
											отделение и оформите перевод
											с помощью сотрудника банка.
										</div><!--
							--><div class="deposit-open__step">
											<div class="deposit-open__step-num">02</div>
											Получите Уникальный номер
											перевода (референс), состоящий
											из 8 цифр.
										</div><!--
								--><div class="deposit-open__step">
											<div class="deposit-open__step-num">03</div>
											Cообщите получателю референс,
											сумму перевода, ФИО отправителя
											и страну отправления перевода.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="deposit-info__block" data-animation>
					<div class="grid__inner">
						<div class="transfers__info">
							<div class="transfers__info-col">
								<h3>Как получить перевод?</h3>
								<div class="transfers__info-block">
									Обратитесь в удобный для Вас пункт обслуживания системы MoneyGram страны, указанной отправителем,
									сообщите оператору референс, ФИО отправителя, страну отправления
									и сумму перевода.
									<div class="notice">
										<div class="notice__title">Не забыть:</div>
										Паспорт, Референс
									</div>
								</div>
							</div>
							<div class="transfers__info-col">
								<h3>Как возвратить перевод?</h3>
								<div class="transfers__info-block">
									Обратитесь отделение банка, из которого был отправлен перевод, заполните заявление о возврате и необходимые кассовые документы. Сообщите референс перевода
									и получите денежные средства.
									<div class="notice">
										<div class="notice__title">Не забыть:</div>
										Паспорт, Референс
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="deposit-info__block" >
					<div class="grid__inner">
						<h3>Условия осуществления перевода</h3>
						<div class="b-color-table _big-indents">
							<table>
								<tr>
									<td>Валюта перевода</td>
									<td>отправка — доллары США, выдача — доллары США, евро</td>
								</tr>
								<tr>
									<td>Направления перевода</td>
									<td>Cтраны СНГ, дальнее зарубежье</td>
								</tr>
								<tr>
									<td>Максимальная сумма перевода</td>
									<td>
										<ul class="b-list">
											<li>для резидентов РФ в соответствии с законодательством — не более 5 000 долларов США в один операционный день при переводе за рубеж;</li>
											<li>для нерезидентов ограничение по сумме устанавливается системой и не может превышать сумму в размере 10 000 Долларов США
												за одну операцию и 20 000 Долларов США за один операционный день </li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Количество пунктов системы</td>
									<td>244 000 пунктов обслуживания в 192 странах мира</td>
								</tr>
								<tr>
									<td>Комиссия за перевод</td>
									<td>рассчитывается в абсолютной величине в зависимости от суммы перевода и направления, взимается только с отправителя</td>
								</tr>
								<tr>
									<td>Выдача переводов</td>
									<td>в любом пункте обслуживания MoneyGram в стране, указанной отправителем перевода</td>
								</tr>
								<tr>
									<td>Дополнительные возможности</td>
									<td>
										<div>отправитель может:</div>
										<ul class="b-list">
											<li>отправить получателю сообщение до 40 символов;</li>
											<li>задать контрольный вопрос и дать контрольный ответ;</li>
											<li>внести изменения в ФИО получателя перевода;</li>
											<li>отозвать перевод.</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Срок действия перевода</td>
									<td>
										<ul class="b-list">
											<li>действителен в течении 90 календарных дней с даты отправления;</li>
											<li>по окончании указанного срока денежные переводы могут быть выданы отправителю
												или получателю при условии получения разрешения от системы MoneyGram;</li>
											<li>при возврате перевода по желанию отправителя, комиссия, уплаченная за перевод, возмещению не подлежит.</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Ограничения</td>
									<td>переводы по системе MoneyGram по территории РФ не осуществляются</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<?include "../includes/news-gall.php"?>
		</div>
	</div>
<?include "../includes/footer.php"?>

