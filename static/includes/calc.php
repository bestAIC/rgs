<div class="b-block _gray animation__top deposit-calc" data-calc data-animation>
	<div class="grid__inner">
		<h3>Калькулятор доходности</h3>
		<div class="deposit-calc__block">
			<div class="deposit-calc__options">
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
								<option value="rub">P</option>
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
				<div class="deposit-calc__option" data-calc-slider-wrap>
					<div class="deposit-calc__option-block">
						<div class="deposit-calc__option-title">Ежемесячное пополнение</div>
						<div class="deposit-calc__option-slider" data-calc-slider='{"min":1000,"max":100000,"step":100,"value":10000}'></div>
					</div>
					<div class="deposit-calc__option-fields">
						<div class="deposit-calc__option-field">
							<input type="text" value="365 дней" data-calc-slider-inp>
						</div>
					</div>
				</div>
			</div>
			<div class="deposit-calc__info">
				<div class="deposit-calc__info-blocks">
					<div class="deposit-calc__info-block">
						<div class="deposit-calc__info-block-title">ГОДОВАЯ СТАВКА</div>
						<div class="deposit-calc__info-block-text">7,30%</div>
					</div>
					<div class="deposit-calc__info-block">
						<div class="deposit-calc__info-block-title">СУММА В КОНЦЕ ВКЛАДА</div>
						<div class="deposit-calc__info-block-text">54 524 P</div>
					</div>
					<div class="deposit-calc__info-block">
						<div class="deposit-calc__info-block-title">ДОХОД ПО ВКЛАДУ</div>
						<div class="deposit-calc__info-block-text">4 524 P</div>
					</div>
				</div>
				<a href="#" class="btn _red deposit-calc__info-btn">ОТКРЫТЬ ВКЛАД</a>
			</div>
		</div>
	</div>
</div>