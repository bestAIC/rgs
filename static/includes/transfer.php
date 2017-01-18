<div class="home__transfer b-block" data-transfer>
	<div class="grid__inner">
		<h2>Переводите с карты на карту</h2>
		<div class="subtitle">Переводы на карту любого российского банка, надежный сервис с выгодными тарифами</div>
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
										<div class="card__block-field">
											<input name="dateFrom" type="text" data-transfer-inp data-date-mask placeholder="ММ / ГГ" value="">
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
							<div class="home__transfer-sum-text">
								минимальная сумма перевода 50 руб<br />
								максимальная 75 000 руб
							</div>
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
	</div>
</div>