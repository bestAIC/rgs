<?include "../includes/header.php"?>
	<div class="inner deposit transfers">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/transactions/CardToCard.png');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Перевод с карты на карту</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Оплатить и перевести</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Перевод с карты на карту</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-block _gray transfers__translation" data-transfer>
			<div class="grid__inner">
				<div class="home__transfer-form">
					<div class="home__transfer-loader hide" data-transfer-loader>
						<div id="floatingBarsG">
							<div class="blockG" id="rotateG_01"></div>
							<div class="blockG" id="rotateG_02"></div>
							<div class="blockG" id="rotateG_03"></div>
							<div class="blockG" id="rotateG_04"></div>
							<div class="blockG" id="rotateG_05"></div>
							<div class="blockG" id="rotateG_06"></div>
							<div class="blockG" id="rotateG_07"></div>
							<div class="blockG" id="rotateG_08"></div>
						</div>
					</div>
					<form action="" method="post">
						<input type="hidden" name="orderId" value="" data-transfer-inp="orderId">
						<input type="hidden" name="paRes" value="" data-transfer-inps="paRes">
						<div class="home__transfer-cards" data-animation>
							<div class="home__transfer-card _1 card">
								<div class="card__inner">
									<div class="card__title">1. Отправитель</div>
									<div class="card__fields">
										<div class="card__fields-col _1">
											<div class="card__block">
												<div class="card__block-title">Номер карты отправителя</div>
												<div class="card__block-field">
													<input type="text" name="panFrom" placeholder="0000 0000 0000 0000" data-transfer-inp="main" data-card-mask value="">
												</div>
											</div>
											<div class="card__block">
												<div class="card__block-title">Владелец карты</div>
												<div class="card__block-field">
													<input type="text"  data-name-mask name="cardholderNameFrom" placeholder="NIKOLAY Ivanov" data-transfer-inp>
												</div>
											</div>
										</div>
										<div class="card__fields-col _2">
											<div class="card__block">
												<div class="card__block-title">cvc2 / cvv2</div>
												<div class="card__block-field">
													<input name="cvcFrom" type="password" data-transfer-inp placeholder="&#8226;&#8226;&#8226;" data-cvv-mask value="" autocomplete="off">
												</div>
											</div>
											<div class="card__block">
												<div class="card__block-title">Срок действия</div>
												<div class="card__block-field _date">
													<input name="" type="text" data-transfer-inp data-card-month-mask placeholder="ММ" value="">
												</div>
												<div class="card__block-field-sep">/</div>
												<div class="card__block-field _date">
													<input name="" type="text" data-transfer-inp data-card-year-mask placeholder="ГГ" value="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="home__transfer-card _2 _light card">
								<div class="card__inner">
									<div class="card__title">2. Получатель</div>
									<div class="card__fields">
										<div class="card__fields-col _1">
											<div class="card__block">
												<div class="card__block-title">Номер карты получателя</div>
												<div class="card__block-field">
													<input type="text" name="panTo" placeholder="0000 0000 0000 0000" data-transfer-inp="main" data-card-mask value="">
												</div>
											</div>
											<div class="card__block">
												<div class="card__block-title">Владелец карты<?/*a href="#" class="help-ico">?</a*/?></div>
												<div class="card__block-field">
													<input type="text"  data-name-mask name="cardholderNameTo" data-transfer-inp placeholder="Ivan PETROV">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="home__transfer-block">
							<div class="home__transfer-block-in">
								<div class="home__transfer-sum">
									<input type="text" name="amount" data-sum-mask placeholder="Сумма перевода" data-transfer-inp="main">
								</div>
								<div class="home__transfer-commission">
									<div class="home__transfer-commission-title">Комиссия за перевод</div>
									<div class="home__transfer-commission-val"><span data-transfer-amount>0</span> руб.</div>
								</div>
								<label class="home__transfer-agree"><input type="checkbox">Ознакомлен и согласен с условиями <a href="https://payment.rgsbank.ru/payment/merchants/rgsbank/files/p2p_Oferta.pdf" target="_blank">публичной оферты</a></label>
								<button type="button" disabled data-transfer-btn class="btn _red home__transfer-btn">Отправить деньги</button>
							</div>
						</div>
					</form>
				</div>
				<div class="home__transfer-description">
					<div class="home__transfer-description-contacts">Телефон поддержки: для регионов:
						<nobr>8 (800) 700-40-40</nobr>, для Москвы: <nobr>(495) 925-80-60</nobr></div>
					Банки-эмитенты карт могут устанавливать дополнительные условия и ограничения при переводе.
					С дебетовых и зарплатных карт дополнительные комиссии, как правило, не взимаются. Рекомендуем ознакомиться с тарифами банка-эмитента.
					<div class="home__transfer-description-security">
						<div class="home__transfer-description-security-icons">
							<div class="home__transfer-description-security-icon _1"></div>
							<div class="home__transfer-description-security-icon _2"></div>
						</div>
						Настоящий сайт поддерживает 256-битное шифрование. Конфиденциальность сообщаемой персональной информации обеспечивается ПАО "РГС Банк".
						Введенная информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ.
						Проведение платежей по банковским картам осуществляется в строгом соответствии с требованиями платежных систем Visa Inc. и MasterCard Worldwide.
					</div>
				</div>
			</div>
		</div>

		
		
		<div class="inner__info animation__top"  data-animation>
			<div class="grid__inner">
				<div class="inner__info-benefits">
					<h3>Условия перевода</h3>
					<ul class="b-list">
						<li><strong>Валюта перевода:</strong> рубли РФ</li>
						<li><strong>Сумма перевода:</strong> от 50 до 75 000 рублей</li>
						<li>
							<strong>Лимиты на перевод:</strong>
							<ul class="dash-list">
								<li>дневной лимит  — 150 000 рублей/ 3 успешных операции</li>
								<li>месячный лимит — 600 000 рублей/ 15 успешных операций</li>
							</ul>
							<div class="note-text">* Все лимиты применяются и к картам отправителя, и к картам получателя независимо от канала предоставления услуги (сайт Банка или Интернет-Банк)</div>
						</li>
						<li>
							<strong>Комиссия за перевод*</strong>
							<ul class="dash-list">
								<li>Между картами РОСГОССТРАХ БАНКА — без комиссии</li>
								<li>С карты другого банка на карту РОСГОССТРАХ БАНКА — 0,5% от суммы перевода, мин. 30 руб.</li>
								<li>С карты РОСГОССТРАХ БАНКА на карту другого банка — 1% от суммы перевода, мин. 50 руб.</li>
								<li>Между картами других банков — 1,2% от суммы перевода, мин. 60 руб.</li>
							</ul>
							<div class="note-text">* При отправке перевода может взиматься комиссия банка-эмитента</div>
						</li>
					</ul>
				</div>
				<div class="inner__info-block">
					<div class="deposit-info__block">
						<h3>Полезная информация</h3>
						<div class="deposit-documents__content">
							<div class="deposit-documents__title red">
								Между какими картами
								осуществляются переводы?
							</div>
							<div class="deposit-documents__blocks">
								<div class="deposit-documents__block">
									Переводы денежных средств в сервисе «Перевод с карты
									на карту» могут осуществляться между картами MasterCard, Maestro и Visa, выпущенными российскими банками
									и поддерживающими технологию MasterCard Secure Code или Verified by Visa.
								</div>
							</div>
						</div>
						<div class="files _indent">
							<a href="#" class="file w100">
								<div class="file__inner">
									<div class="file__name">Список пунктов приема платежей</div>
									<div class="file__props">XLS, 6.58MB</div>
								</div>
							</a>
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

