<?include "../../../includes/header.php"?>
	<div class="inner deposit">
		<div class="inner__banner" >
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/corporate/investment/deposit.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Депозиты</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Главная</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Бизнесу</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Размещение свободных средств</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Депозиты</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner__info animation__top"  data-animation>
			<div class="grid__inner">
				<div class="inner__info-block">
					<div class="deposit__info-banner">
						<div class="deposit__info-banner-in">
							<div class="deposit__info-banner-title">процентная ставка до</div>
							<div class="deposit__info-banner-text">8,4%</div>
						</div>
						<div class="deposit__info-banner-img"  style="background-image: url(<?=$desktopAndTableLand ? '/static/theme/images/info-banners/corporate/deposits.png'
							: ($tablePort ? '/static/theme/images/info-banners/corporate/deposits_tablet.png':'/static/theme/images/info-banners/corporate/deposits_mobile.png') ?>)"></div>
					</div>
				</div>
				<div class="inner__info-benefits">
					<div class="inner__info-benefits-title">
						РОСГОССТРАХ БАНК предлагает юридическим лицам
						и предпринимателям различные варианты банковских вкладов (депозитов),
						позволяющих разместить временно свободные денежные средства в российских рублях на выгодных условиях:
					</div>
					<div class="inner__info-benefits-btn">
						<a href="#" class="btn _red">Открыть депозит</a>
					</div>
				</div>
			</div>
		</div>

		<div class="b-blocks _gray">
			<div class="b-block corporate__deposits">
				<div class="grid__inner">
					<div class="corporate__deposits-block">
						<div class="corporate__deposit">
							<div class="corporate__deposit-in">
								<div class="corporate__deposit-title">Срочный депозит</div>
								<div class="corporate__deposit-text">Срочный депозит с выплатой процентов в конце срока</div>
								<div class="corporate__deposit-date">
									<div class="corporate__deposit-date-title">СРОК депозита</div>
									<div class="corporate__deposit-date-text">
										<span>от 1 мес</span>
										<span>до 2 лет</span>
									</div>
								</div>
								<a href="#" class="btn _transparent corporate__deposit-btn">УЗНАТЬ ПОДРОБНЕЕ</a>
							</div>
						</div>
						<div class="corporate__deposit">
							<div class="corporate__deposit-in">
								<div class="corporate__deposit-title">Пополняемый депозит</div>
								<div class="corporate__deposit-text">Пополняемый депозит с выплатой процентов в конце срока</div>
								<div class="corporate__deposit-date">
									<div class="corporate__deposit-date-title">СРОК депозита</div>
									<div class="corporate__deposit-date-text">
										<span>от 3 мес</span>
										<span>до 1,5 лет</span>
									</div>
								</div>
								<a href="#" class="btn _transparent corporate__deposit-btn">УЗНАТЬ ПОДРОБНЕЕ</a>
							</div>
						</div>
						<div class="corporate__deposit">
							<div class="corporate__deposit-in">
								<div class="corporate__deposit-title">Универсальный депозит</div>
								<div class="corporate__deposit-text">Универсальный депозит для вложения средств и получения прибыли через некоторое время</div>
								<div class="corporate__deposit-date">
									<div class="corporate__deposit-date-title">СРОК депозита</div>
									<div class="corporate__deposit-date-text"><span>1 год</span></div>
								</div>
								<a href="#" class="btn _transparent corporate__deposit-btn">УЗНАТЬ ПОДРОБНЕЕ</a>
							</div>
						</div>
						<div class="corporate__deposit">
							<div class="corporate__deposit-in">
								<div class="corporate__deposit-title">Пополняемый депозит для СРО</div>
								<div class="corporate__deposit-text">Для саморегулируемых организаций с правом досрочного востребования части размещенной суммы</div>
								<div class="corporate__deposit-date">
									<div class="corporate__deposit-date-title">СРОК депозита</div>
									<div class="corporate__deposit-date-text">
										<span>от 1 мес</span>
										<span>до 2 лет</span>
									</div>
								</div>
								<a href="#" class="btn _transparent corporate__deposit-btn">УЗНАТЬ ПОДРОБНЕЕ</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="b-block _white">
				<div class="grid__inner">
					<div class="deposit-compare deposit-info__block" data-deposit-compare>
						<h3>Сравнение депозитов</h3>
						<div class="deposit-compare__table">
							<div class="deposit-compare__table-in" data-deposit-compare-scroll>
								<table>
										<tr class="deposit-compare__table-titles">
											<td class="_h1">депозит</td>
											<td>СРОК (ДНЕЙ)</td>
											<td class="left deposit-compare__table-percent">ВЫПЛАТА ПРОЦЕНТОВ</td>
											<td>Валюта</td>
											<td>
												ПОПОЛНЕНИЕ
											</td>
											<td>
												Минимальная<br />
												сумма пополнения
											</td>
											<td colspan="3">
												МАКСИМАЛЬНАЯ<br />
												ГОДОВАЯ СТАВКА (%)
											</td>
										</tr>
										<tr class="deposit-compare__table-valuta valuta">
											<td colspan="6" class="_h2"></td>
											<td><span class="rub"></span></td>
											<td>$</td>
											<td>€</td>
										</tr>
										<tr class="deposit-compare__table-row">
											<td><a href="#">1. «Срочный»</a></td>
											<td>31 - 732</td>
											<td class="left">В конце срока</td>
											<td class="deposit-compare__table-currency"><span class="rub"></span>&nbsp;&nbsp;$&nbsp;&nbsp;€</td>
											<td><div class="status-ico _minus"></div></td>
											<td>
												100 000<span class="rub"></span><br/>
												10 000$/€
											</td>
											<td>8,40</td>
											<td>2,00</td>
											<td>0,75</td>
										</tr>
										<tr class="deposit-compare__table-row">
											<td><a href="#">2. «Пополняемый»</a></td>
											<td>91 - 546</td>
											<td class="left">
												Ежемесячно и по окончанию
												срока вклада
											</td>
											<td class="deposit-compare__table-currency"><span class="rub"></span></td>
											<td><div class="status-ico _plus"></div></td>
											<td>100 000<span class="rub"></span></td>
											<td>7,90</td>
											<td>&mdash;</td>
											<td>&mdash;</td>
										</tr>
										<tr class="deposit-compare__table-row">
											<td><a href="#">3. «Универсальный»</a></td>
											<td>367</td>
											<td class="left">
												Ежемесячно
											</td>
											<td class="deposit-compare__table-currency"><span class="rub"></span></td>
											<td><div class="status-ico _plus"></div></td>
											<td>5 000 000<span class="rub"></span></td>
											<td>6,00</td>
											<td>&mdash;</td>
											<td>&mdash;</td>
										</tr>
										<tr class="deposit-compare__table-row">
											<td><a href="#">4. «Пополняемый +»</a></td>
											<td>31 - 732</td>
											<td class="left">В конце срока</td>
											<td class="deposit-compare__table-currency"><span class="rub"></span></td>
											<td><div class="status-ico _plus"></div></td>
											<td>300 000<span class="rub"></span></td>
											<td>7,20</td>
											<td>&mdash;</td>
											<td>&mdash;</td>
										</tr>
									</table>
							</div>
							<table class="_fixed" data-deposit-compare-fixed>
								<tr class="deposit-compare__table-titles">
									<td class="_h1">депозит</td>
								</tr>
								<tr class="deposit-compare__table-valuta valuta">
									<td class="_h2"></td>
								</tr>
								<tr class="deposit-compare__table-row">
									<td><a href="#">1.</a></td>
								</tr>
								<tr class="deposit-compare__table-row">
									<td><a href="#">2.</a></td>
								</tr>
								<tr class="deposit-compare__table-row">
									<td><a href="#">3.</a></td>
								</tr>
								<tr class="deposit-compare__table-row">
									<td><a href="#">4.</a></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="deposit-compare__bottom deposit-info__block">
						<div class="inner__info-benefits corporate__deposits-open">
							<h3>Как оформить депозит?</h3>
							<div class="corporate__deposits-open-text">Депозитный вклад оформляется путем заключения Договора депозита в любом из офисов Банка, в котором производится обслуживание юридических лиц.</div>
						</div>
						<div class="inner__info-block">
							<div class="inner__info-benefits-title">Пакет документов для открытия депозита</div>
							<a href="#" class="file w100">
								<div class="file__inner">
									<div class="file__name">Пакет документов для открытия депозита</div>
									<div class="file__props">DOC, 450.96KB</div>
								</div>
							</a>
						</div>
					</div>
				</div>

			</div>
			<?include "../../../includes/offices.php"?>
		</div>

	</div>
<?include "../../../includes/footer.php"?>

