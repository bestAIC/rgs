<?include "../includes/header.php"?>
	<div class="inner deposit">
		<div class="inner__banner" style="background-image: url('/static/theme/images/inner/banner.jpg');">
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
		<div class="inner__info _small-indent animation__top"  data-animation>
			<div class="grid__inner">
				<div class="inner__info-block">
					<div class="deposit__info-img" style="background-image: url(/static/theme/images/home/banner/1.jpg);"></div>
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
			<div class="b-block deposit-filter">
				<div class="grid__inner">
					<h3 class="deposit-filter__title">Подберите наиболее оптимальный вклад</h3>
					<div class="deposit-filter__block">
						<form action="">
							<div class="deposit-filter__block-top">
								<div class="deposit-filter__block-top-inner">
									<div class="deposit-filter__options">
										<div class="deposit-calc__option" data-calc-slider-wrap>
											<div class="deposit-calc__option-block">
												<div class="deposit-calc__option-title">Сумма вклада</div>
												<div class="deposit-calc__option-slider"
														 data-calc-slider='{"min":1000,"max":200000,"step":1000,"value":50000}'
														 data-dollar='{"min":100,"max":10000,"step":100,"value":5000}'
														 data-rub='{"min":1000,"max":200000,"step":1000,"value":50000}'
														 data-euro='{"min":50,"max":10000,"step":50,"value":5000}'>
												</div>
											</div>
											<div class="deposit-calc__option-fields">
												<div class="deposit-calc__option-select">
													<select data-calc-slider-select data-chosen>
														<option value="rub">₽</option>
														<option value="dollar">$</option>
														<option value="euro">€</option>
													</select>
												</div>
												<div class="deposit-calc__option-field">
													<input type="text" value="50 000" data-calc-slider-inp>
												</div>
											</div>
										</div>
										<div class="deposit-calc__option" data-calc-slider-wrap>
											<div class="deposit-calc__option-block">
												<div class="deposit-calc__option-title">Срок вклада</div>
												<div class="deposit-calc__option-slider" data-calc-slider='{"min":30,"max":1095,"step":1,"value":365}' ></div>
											</div>
											<div class="deposit-calc__option-fields">
												<div class="deposit-calc__option-field">
													<input type="text" value="365 дней" data-calc-slider-inp="date">
												</div>
											</div>
										</div>
									</div>
									<div class="deposit-filter__checks">
										<div class="deposit-filter__check">
											<label><input type="checkbox" >Пополнение</label>
										</div>
										<div class="deposit-filter__check">
											<label><input type="checkbox" >Частичное снятие</label>
										</div>
										<div class="deposit-filter__check">
											<label><input type="checkbox" >Начисление процентов ежемесячно</label>
										</div>
									</div>
								</div>
							</div>
							<div class="deposit-filter__block-bottom">
								<div class="deposit-filter__block-bottom-inner">
									<div class="deposit-filter__counter">Вам подходит 2 вклада</div>
									<a href="javascript:void(0);" class="deposit-filter__reset">Сбросить фильтр</a>
								</div>
							</div>
						</form>
					</div>
					<div class="deposit-filter__items">
						<div class="deposit-card _gosstrakh">
							<div class="deposit-card__ico" style="background-image: url('/static/theme/images/deposit/card/1.png');"></div>
							<div class="deposit-card__inner">
								<div class="deposit-card__top">
									<div class="deposit-card__main">
										<div class="deposit-card__title">Вклад «Госстраховский»</div>
										<div class="deposit-card__text">
											Классический вклад для получения высокого
											дохода при фиксированных сумме и сроке вклада
										</div>
									</div>
									<div class="deposit-card__info">
										<div class="deposit-card__info-block">
											<div class="deposit-card__info-block-title">СРОК ВКЛАДА</div>
											<div class="deposit-card__info-block-text">
												от 3 мес<br />
												до 2 лет
											</div>
										</div>
										<div class="deposit-card__info-block">
											<div class="deposit-card__info-block-title">СТАВКА, ДО</div>
											<div class="deposit-card__info-block-text">8,00%</div>
										</div>
									</div>
								</div>
								<div class="deposit-card__btns">
									<a href="#" class="btn deposit-card__btn">ОТКРЫТЬ ВКЛАД</a>
									<a href="#" class="btn deposit-card__btn _transparent">УЗНАТЬ ПОДРОБНЕЕ</a>
								</div>
							</div>
						</div>
						<div class="deposit-card _save">
							<div class="deposit-card__ico" style="background-image: url('/static/theme/images/deposit/card/1.png');"></div>
							<div class="deposit-card__inner">
								<div class="deposit-card__top">
									<div class="deposit-card__main">
										<div class="deposit-card__title">Вклад «Накопительный»</div>
										<div class="deposit-card__text">
											Вклад с возможностью пополнения<br/>
											и льготными условиями при досрочном
											расторжении
										</div>
									</div>
									<div class="deposit-card__info">
										<div class="deposit-card__info-block">
											<div class="deposit-card__info-block-title">СРОК ВКЛАДА</div>
											<div class="deposit-card__info-block-text">
												от 9 мес<br />
												до 1 года
											</div>
										</div>
										<div class="deposit-card__info-block">
											<div class="deposit-card__info-block-title">СТАВКА, ДО</div>
											<div class="deposit-card__info-block-text">7,00%</div>
										</div>
									</div>
								</div>
								<div class="deposit-card__btns">
									<a href="#" class="btn deposit-card__btn">ОТКРЫТЬ ВКЛАД</a>
									<a href="#" class="btn deposit-card__btn _transparent">УЗНАТЬ ПОДРОБНЕЕ</a>
								</div>
							</div>
						</div>
						<div class="deposit-card _universal">
							<div class="deposit-card__ico" style="background-image: url('/static/theme/images/deposit/card/1.png');"></div>
							<div class="deposit-card__inner">
								<div class="deposit-card__top">
									<div class="deposit-card__main">
										<div class="deposit-card__title">Вклад «Универсальный»</div>
										<div class="deposit-card__text">
											Вклад с возможностью частичного снятия
											без потери процентов, а так же пополнения
											по ставке вклада
										</div>
									</div>
									<div class="deposit-card__info">
										<div class="deposit-card__info-block">
											<div class="deposit-card__info-block-title">СРОК ВКЛАДА</div>
											<div class="deposit-card__info-block-text">1 год</div>
										</div>
										<div class="deposit-card__info-block">
											<div class="deposit-card__info-block-title">СТАВКА, ДО</div>
											<div class="deposit-card__info-block-text">7,20%</div>
										</div>
									</div>
								</div>
								<div class="deposit-card__btns">
									<a href="#" class="btn deposit-card__btn">ОТКРЫТЬ ВКЛАД</a>
									<a href="#" class="btn deposit-card__btn _transparent">УЗНАТЬ ПОДРОБНЕЕ</a>
								</div>
							</div>
						</div>
						<div class="deposit-card _invest">
							<div class="deposit-card__ico" style="background-image: url('/static/theme/images/deposit/card/1.png');"></div>
							<div class="deposit-card__inner">
								<div class="deposit-card__top">
									<div class="deposit-card__main">
										<div class="deposit-card__title">Вклад «Инвестиционный»</div>
										<div class="deposit-card__text">
											Высокодоходный вклад с возможностью
											получить страховую защиту или дополнительный
											доход от вложения средств в ПИФы
										</div>
									</div>
									<div class="deposit-card__info">
										<div class="deposit-card__info-block">
											<div class="deposit-card__info-block-title">СРОК ВКЛАДА</div>
											<div class="deposit-card__info-block-text">
												3 мес, 6 мес,<br />
												1 год
											</div>
										</div>
										<div class="deposit-card__info-block">
											<div class="deposit-card__info-block-title">СТАВКА, ДО</div>
											<div class="deposit-card__info-block-text">9,50%</div>
										</div>
									</div>
								</div>
								<div class="deposit-card__btns">
									<a href="#" class="btn deposit-card__btn">ОТКРЫТЬ ВКЛАД</a>
									<a href="#" class="btn deposit-card__btn _transparent">УЗНАТЬ ПОДРОБНЕЕ</a>
								</div>
							</div>
						</div>
						<div class="deposit-card _pensoin">
							<div class="deposit-card__ico" style="background-image: url('/static/theme/images/deposit/card/1.png');"></div>
							<div class="deposit-card__inner">
								<div class="deposit-card__top">
									<div class="deposit-card__main">
										<div class="deposit-card__title">Вклад «Пенсионный доход»</div>
										<div class="deposit-card__text">
											Разработан специально для пенсионеров:
											высокий процент при небольших суммах
											с возможностью пополнения.
										</div>
									</div>
									<div class="deposit-card__info">
										<div class="deposit-card__info-block">
											<div class="deposit-card__info-block-title">СРОК ВКЛАДА</div>
											<div class="deposit-card__info-block-text">
												от 6 мес<br />
												до 2 лет
											</div>
										</div>
										<div class="deposit-card__info-block">
											<div class="deposit-card__info-block-title">СТАВКА, ДО</div>
											<div class="deposit-card__info-block-text">
												7,30%
											</div>
										</div>
									</div>
								</div>
								<div class="deposit-card__btns">
									<a href="#" class="btn deposit-card__btn">ОТКРЫТЬ ВКЛАД</a>
									<a href="#" class="btn deposit-card__btn _transparent">УЗНАТЬ ПОДРОБНЕЕ</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="b-block _white">
				<div class="grid__inner">
					<div class="deposit-compare deposit-info__block">
						<h3>Сравнение вкладов</h3>
						<div class="deposit-compare__table">
								<table>
									<tr class="deposit-compare__table-titles">
										<td>ВКЛАД</td>
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
										<td colspan="6"></td>
										<td><span class="rub"></span></td>
										<td>$</td>
										<td>€</td>
										<td></td>
									</tr>
									<tr class="deposit-compare__table-row">
										<td><a href="#">1.<span>Госстраховский</span></a></td>
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
										<td><a href="#">2.<span>Накопительный</span></a></td>
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
										<td><a href="#">3.<span>Универсальный</span></a></td>
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
										<td><a href="#">4.<span>Инвестиционный</span></a></td>
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
										<td><a href="#">5.<span>Пенсионный доход</span></a></td>
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

