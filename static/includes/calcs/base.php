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
					<div class="deposit-calc__option-select" data-calc-valuta>
						<select data-calc-valuta-select data-chosen></select>
					</div>
					<div class="deposit-calc__option-field">
						<input type="text" data-calc-sum-inp>
					</div>
				</div>
			</div>
			<div class="deposit-calc__option deposit-calc__period" data-calc-period>
				<div class="deposit-calc__option-block">
					<div class="deposit-calc__option-title">Срок вклада</div>
					<div class="deposit-calc__option-scale" data-calc-period-scale></div>
					<div class="deposit-calc__option-slider" data-calc-period-slider></div>
				</div>
				<div class="deposit-calc__option-fields">
					<div class="deposit-calc__option-field">
						<select  data-chosen data-calc-period-select></select>
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