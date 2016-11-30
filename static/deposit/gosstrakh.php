<?include "../includes/header.php"?>
	<div class="inner">
		<div class="inner__banner" style="background-image: url('/static/theme/images/inner/banner.jpg');">
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Вклад «Госстраховский»</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Вложить и сохранить</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Вклад «Госстраховский»</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks">
			<div class="b-block animation__top" data-animation>
				<div class="grid__inner">Классический вклад для получения высокого дохода при фиксированных сумме и сроке вклада</div>
			</div>
			<div class="b-block _gray animation__top deposit-calc" data-calc data-animation>
				<div class="grid__inner">
					<h2 class="_left">Калькулятор доходности</h2>
					<div class="deposit-calc__block">
						<div class="deposit-calc__options">
							<div class="deposit-calc__option" data-calc-slider-wrap>
								<div class="deposit-calc__option-text">
									<div class="deposit-calc__option-val" data-calc-slider-val>50 000</div>
									<div class="deposit-calc__option-title">Сумма вклада</div>
								</div>
								<div class="deposit-calc__option-slider" data-calc-slider='{"min":1000,"max":200000,"step":1000,"value":50000}' data-dollar='{"min":1000,"max":100000,"step":1000,"value":5000}'></div>
							</div>
							<div class="deposit-calc__option" data-calc-slider-wrap>
								<div class="deposit-calc__option-text">
									<div class="deposit-calc__option-val"  data-calc-slider-val="date">1 год</div>
									<div class="deposit-calc__option-title">Срок вклада</div>
								</div>
								<div class="deposit-calc__option-slider" data-calc-slider='{"min":3,"max":36,"step":1,"value":12}' ></div>
							</div>
							<div class="deposit-calc__option" data-calc-slider-wrap>
								<div class="deposit-calc__option-text">
									<div class="deposit-calc__option-val"  data-calc-slider-val>10 000</div>
									<div class="deposit-calc__option-title">Ежемесячное пополнение</div>
								</div>
								<div class="deposit-calc__option-slider" data-calc-slider='{"min":1000,"max":100000,"step":1000,"value":10000}'></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="b-block animation__top" data-animation>
				<div class="grid__inner">Классический вклад для получения высокого дохода при фиксированных сумме и сроке вклада</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<?include "../includes/subscription.php"?>
			<?include "../includes/offices.php"?>
			<?include "../includes/questions.php"?>
			<?include "../includes/news-gall.php"?>
		</div>
	</div>
<?include "../includes/footer.php"?>

