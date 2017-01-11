<div class="b-block _gray animation__top deposit-calc" data-calc="gosstrakh" data-animation>
	<div class="grid__inner">
		<h3>Калькулятор доходности</h3>
		<div class="deposit-calc__block">
			<div class="deposit-calc__options">
				<div class="deposit-calc__option" data-calc-sum>
					<div class="deposit-calc__option-block">
						<div class="deposit-calc__option-title">Сумма вклада</div>
						<div class="deposit-calc__option-scale">
							<div class="deposit-calc__option-scale-item _left" data-calc-sum-min></div>
							<div class="deposit-calc__option-scale-item _right" data-calc-sum-max></div>
						</div>
						<div class="deposit-calc__option-slider" data-calc-sum-slider></div>
					</div>
					<div class="deposit-calc__option-fields">
						<div class="deposit-calc__option-select">
							<select data-calc-valuta-select data-chosen>
								<option value="rur">₽</option>
								<option value="usd">$</option>
								<option value="eur">€</option>
							</select>
						</div>
						<div class="deposit-calc__option-field">
							<input type="text" value="50 000" data-calc-sum-inp>
						</div>
					</div>
				</div>
				<div class="deposit-calc__option" data-calc-period>
					<div class="deposit-calc__option-block">
						<div class="deposit-calc__option-title">Срок вклада</div>
						<div class="deposit-calc__option-scale" data-calc-period-scale></div>
						<div class="deposit-calc__option-slider" data-calc-period-slider></div>
					</div>
					<div class="deposit-calc__option-fields">
						<div class="deposit-calc__option-field">
							<select  data-chosen data-calc-period-select>
								<option value="91">91 день</option>
								<option value="181">181 день</option>
								<option value="271">271 день</option>
								<option value="367">367 дней</option>
								<option value="732">732 дня</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="deposit-calc__info">
				<div class="deposit-calc__info-blocks">
					<div class="deposit-calc__info-block">
						<div class="deposit-calc__info-block-title">ГОДОВАЯ СТАВКА</div>
						<div class="deposit-calc__info-block-text" data-calc-rate></div>
					</div>
					<div class="deposit-calc__info-block">
						<div class="deposit-calc__info-block-title">СУММА В КОНЦЕ ВКЛАДА</div>
						<div class="deposit-calc__info-block-text" data-calc-total-sum></div>
					</div>
					<div class="deposit-calc__info-block">
						<div class="deposit-calc__info-block-title">ДОХОД ПО ВКЛАДУ</div>
						<div class="deposit-calc__info-block-text" data-calc-profit></div>
					</div>
				</div>
				<a href="#" class="btn _red deposit-calc__info-btn">ОТКРЫТЬ ВКЛАД</a>
			</div>
		</div>
	</div>
</div>