<div class="b-block _gray animation__top mortgage-calc" data-mortgage-calc data-year="<?=date("Y");?>" data-month="<?=date("n");?>" data-animation>
	<div class="grid__inner">
		<h3>Калькулятор ипотеки</h3>
		<div class="mortgage-calc__block">
			<div class="mortgage-calc__options">
				<div class="mortgage-calc__top">
					<div class="mortgage-calc__top-block">
						<div class="mortgage-calc__option">
							<div class="mortgage-calc__option-title">стоимость квартиры,<span class="rub"></span></div>
							<div class="mortgage-calc__option-field">
								<input type="text" value="2 000 000" data-mortgage-calc-price>
							</div>
						</div>
					</div>
					<div class="mortgage-calc__top-block">
						<div class="mortgage-calc__option">
							<div class="mortgage-calc__option-title">первоначальный взнос,<span class="rub"></span></div>
							<div class="mortgage-calc__option-field">
								<input type="text" value="300 000" data-mortgage-calc-initial>
							</div>
						</div>
					</div>
				</div>
				<div class="mortgage-calc__option mortgage-calc__period" data-mortgage-calc-period>
					<div class="mortgage-calc__option-block">
						<div class="mortgage-calc__option-title">Cрок кредита</div>
						<div class="mortgage-calc__option-scale">
							<div class="mortgage-calc__option-scale-item _period _1">5 лет</div>
							<div class="mortgage-calc__option-scale-item _period _2">10 лет</div>
							<div class="mortgage-calc__option-scale-item _period _3">15 лет</div>
							<div class="mortgage-calc__option-scale-item _period _4">20 лет</div>
						</div>
						<div class="mortgage-calc__option-slider" data-mortgage-calc-period-slider></div>
					</div>
					<div class="mortgage-calc__option-fields">
						<div class="mortgage-calc__option-field">
							<input type="text" data-mortgage-calc-period-inp value="13 лет">
						</div>
					</div>
				</div>
			</div>
			<div class="mortgage-calc__info">
				<div class="mortgage-calc__info-blocks">
					<div class="mortgage-calc__info-block">
						<div class="mortgage-calc__info-block-title">процентная ставка</div>
						<div class="mortgage-calc__info-block-text _rate"><span data-mortgage-calc-rate></span>%</div>
					</div>
					<div class="mortgage-calc__info-block">
						<div class="mortgage-calc__info-block-title">сумма кредита</div>
						<div class="mortgage-calc__info-block-text"><span data-mortgage-calc-sum></span> <span class="rub"></span></div>
					</div>
					<div class="mortgage-calc__info-block">
						<div class="mortgage-calc__info-block-title">сумма переплат</div>
						<div class="mortgage-calc__info-block-text"><span data-mortgage-calc-overpay></span> <span class="rub"></span></div>
					</div>
					<div class="mortgage-calc__info-block">
						<div class="mortgage-calc__info-block-title">сумма платежа</div>
						<div class="mortgage-calc__info-block-text"><span data-mortgage-calc-payment></span> <span class="rub"></span></div>
					</div>
				</div>
				<a href="javascript:void(0);" data-goto=".subscription" class="btn _red mortgage-calc__info-btn">взять кредит</a>
			</div>
		</div>
	</div>
</div>