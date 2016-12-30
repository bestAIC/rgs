<?include "../includes/header.php"?>
	<div class="inner deposit">
		<div class="inner__banner" >
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/deposit/filter.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Подобрать вклад</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Вложить и сохранить</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Подобрать вклад</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner__info animation__top"  data-animation>
			<div class="grid__inner">
				<div class="inner__info-block">
					<div class="deposit__info-banner _blue">
						<div class="deposit__info-banner-in">
							<div class="deposit__info-banner-title">процентная ставка до</div>
							<div class="deposit__info-banner-text">9,50%</div>
						</div>
						<div class="deposit__info-banner-img" style="background-image: url(/static/theme/images/deposit/info-img/balloon.png);"></div>
					</div>
				</div>
				<div class="inner__info-benefits">
					<div class="inner__info-benefits-title">
						Выгодные вклады — надежный способ сбережения
						и накопления свободных денежных средств наших клиентов.<br />
						При этом чем больше сумма вклада и дольше срок размещения, тем выше будет Ваш доход в итоге.
					</div>
					<div class="inner__info-benefits-btn">
						<a href="#" class="btn _red">Подобрать вклад</a>
					</div>
				</div>
			</div>
		</div>

		<div class="b-blocks _gray">
			<div class="b-block deposit-filter" data-calc-filter>
				<div class="grid__inner">
					<h3 class="deposit-filter__title">Подберите наиболее оптимальный вклад</h3>
					<div class="deposit-filter__block">
						<form action="/static/ajax/deposits.php">
							<div class="deposit-filter__block-top">
								<div class="deposit-filter__block-top-inner">
									<div class="deposit-filter__options">
										<div class="deposit-filter__option">
											<div class="deposit-filter__option-title">Сумма вклада</div>
											<div class="deposit-filter__option-fields">
												<div class="deposit-calc__option-select">
													<select data-calc-slider-select data-chosen data-calc-filter-currency>
														<option value="rur">₽</option>
														<option value="usd">$</option>
														<option value="eur">€</option>
													</select>
												</div>
												<div class="deposit-calc__option-field">
													<input type="text" placeholder="Введите сумму" data-calc-filter-sum>
												</div>
											</div>
										</div>
										<div class="deposit-filter__option">
											<div class="deposit-filter__option-title">Срок вклада</div>
											<div class="deposit-filter__option-fields">
												<div class="deposit-filter__option-field">
													<select name="period" data-chosen data-calc-filter-period>
														<!--<option value="31">31 день</option>-->
														<option value="91">91 день</option>
														<option value="181">181 день</option>
														<option value="271">271 день</option>
														<option value="367">367 дней</option>
														<option value="733">733 дня</option>
														<option value="1080">1080 дней</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="deposit-filter__checks">
										<div class="deposit-filter__check" data-base-check-wrap>
											<label><input type="checkbox" name="cashin" data-base-check>Пополнение</label>
										</div>
										<div class="deposit-filter__check" data-base-check-wrap>
											<label><input type="checkbox"  name="cashout" data-base-check>Частичное снятие</label>
										</div>
										<div class="deposit-filter__check" data-base-check-wrap>
											<label><input type="checkbox" name="monthly" data-base-check>Начисление процентов ежемесячно</label>
										</div>
									</div>
								</div>
							</div>
							<div class="deposit-filter__block-bottom">
								<div class="deposit-filter__block-bottom-inner">
									<div class="deposit-filter__counter" data-calc-filter-counter></div>
									<a href="javascript:void(0);" data-calc-filter-reset class="deposit-filter__reset">Сбросить фильтр</a>
								</div>
							</div>
						</form>
					</div>
					<div class="deposit-filter__items hide" data-calc-filter-result>
						
					</div>
				</div>
			</div>
			<div class="b-block _white">
				<div class="grid__inner">
					<div class="deposit-compare deposit-info__block" data-deposit-compare>
						<h3>Сравнение вкладов</h3>
						<div class="deposit-compare__table">
							<div class="deposit-compare__table-in" data-deposit-compare-scroll>
								<table>
										<tr class="deposit-compare__table-titles">
											<td class="_h1">ВКЛАД</td>
											<td>СРОК (ДНЕЙ)</td>
											<td class="left deposit-compare__table-percent">ВЫПЛАТА ПРОЦЕНТОВ</td>
											<td>ПОПОЛНЕНИЕ</td>
											<td>
												ЛЬГОТНОЕ<br />
												РАСТОРЖЕНИЕ
											</td>
											<td>
												ЧАСТИЧНОЕ<br />
												СНЯТИЕ
											</td>
											<td colspan="3">
												МАКСИМАЛЬНАЯ<br />
												ГОДОВАЯ СТАВКА (%)
											</td>
											<td>
												ОТКРЫТИЕ<br />
												ОНЛАЙН
											</td>
										</tr>
										<tr class="deposit-compare__table-valuta valuta">
											<td colspan="6" class="_h2"></td>
											<td><span class="rub"></span></td>
											<td>$</td>
											<td>€</td>
											<td></td>
										</tr>
										<tr class="deposit-compare__table-row">
											<td><a href="#">1. Госстраховский</a></td>
											<td>91 - 732</td>
											<td class="left">В конце срока</td>
											<td><div class="status-ico _plus"></div></td>
											<td><div class="status-ico _minus"></div></td>
											<td><div class="status-ico _plus"></div></td>
											<td>8,00</td>
											<td>2,00</td>
											<td>0,90</td>
											<td><div class="status-ico _plus"></div></td>
										</tr>
										<tr class="deposit-compare__table-row">
											<td><a href="#">2. Накопительный</a></td>
											<td>271 - 367</td>
											<td class="left">
												Ежемесячно и по окончанию
												срока вклада
											</td>
											<td><div class="status-ico _plus"></div></td>
											<td><div class="status-ico _minus"></div></td>
											<td><div class="status-ico _plus"></div></td>
											<td>7,00</td>
											<td>1,70</td>
											<td>0,70</td>
											<td><div class="status-ico _plus"></div></td>
										</tr>
										<tr class="deposit-compare__table-row">
											<td><a href="#">3. Универсальный</a></td>
											<td>367</td>
											<td class="left">
												Ежемесячно % на доп. взносы
												начисляются по ставке вклада
											</td>
											<td><div class="status-ico _plus"></div></td>
											<td><div class="status-ico _minus"></div></td>
											<td><div class="status-ico _plus"></div></td>
											<td>7,20</td>
											<td>1,30</td>
											<td>0,50</td>
											<td><div class="status-ico _plus"></div></td>
										</tr>
										<tr class="deposit-compare__table-row">
											<td><a href="#">4. Инвестиционный</a></td>
											<td>91, 181, 367</td>
											<td class="left">В конце срока</td>
											<td><div class="status-ico _plus"></div></td>
											<td><div class="status-ico _minus"></div></td>
											<td><div class="status-ico _plus"></div></td>
											<td>9,50</td>
											<td>-</td>
											<td>-</td>
											<td><div class="status-ico _plus"></div></td>
										</tr>
										<tr class="deposit-compare__table-row">
											<td><a href="#">5. Пенсионный доход</a></td>
											<td>181 - 732</td>
											<td class="left">Ежемесячная выплата процентов</td>
											<td><div class="status-ico _plus"></div></td>
											<td><div class="status-ico _minus"></div></td>
											<td><div class="status-ico _plus"></div></td>
											<td>7,30</td>
											<td>1,60</td>
											<td>0,80</td>
											<td><div class="status-ico _plus"></div></td>
										</tr>
									</table>
							</div>
							<table class="_fixed" data-deposit-compare-fixed>
								<tr class="deposit-compare__table-titles">
									<td class="_h1">ВКЛАД</td>
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
								<tr class="deposit-compare__table-row">
									<td><a href="#">5</a></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="deposit-compare__bottom deposit-info__block">
						<div class="inner__info-benefits">
							<div class="inner__info-benefits-title">
								<p>Банк входит в систему страхования вкладов</p>
								<p>Дополнительные возможности для вкладчиков РОСГОССТРАХ БАНКА:</p>
							</div>
							<ul class="b-list">
								<li>автоматическая пролонгация вклада;</li>
								<li>выплата процентов по вкладу на банковскую карту;</li>
								<li>возможность дополнительного страхования вкладов свыше
									1 400 000 рублей (сумма, гарантированная для возмещения
									в рамках государственной Системы Страхования Вкладов)
									в отделениях Банка;
								</li>
								<li>минимальный пакет документов для открытия вклада — нужен только паспорт</li>
							</ul>
						</div>
						<div class="inner__info-block">
							<a href="#" class="file w100">
								<div class="file__inner">
									<div class="file__name">Тарифы по оплате услуг, предоставляемых физическим лицам</div>
									<div class="file__props">PDF, 450.96KB</div>
								</div>
							</a>
							<div class="deposit__text">
								Обращаем Ваше внимание, что с 01.05.2016 г:<br />
								- прекратили свое действие вклады: «Мультивалютный», «Престиж» и «Страховой»;<br />
								- пролонгация вкладов «Мультивалютный», «Престиж», «Страховой» и «Классический» осуществляется по ставке «до востребования» (0,001%).
							</div>
						</div>
					</div>
				</div>

			</div>
			<?include "../includes/news-gall.php"?>
		</div>

	</div>
<?include "../includes/footer.php"?>

