<?
	ob_start();
?>
	<div class="actions__item">
		<div class="actions__item-top">
			<div class="actions__item-top-inner">
				<div class="actions__item-logo" style="background-image: url('/static/theme/images/actions/1.png')"></div>
				<div class="actions__item-title">Mouzendis Travel</div>
				<div class="actions__item-site">
					<a href="#">mouzenidis.com</a>
				</div>
			</div>
		</div>
		<div class="actions__item-benefits _2-cols">
			<div class="actions__item-benefit">
				<div class="actions__item-benefit-title">до 5%</div>
				<div class="actions__item-benefit-text">Скидка на приобретение подарочных сертификатов</div>
			</div>
			<div class="actions__item-benefit">
				<div class="actions__item-benefit-title">10%</div>
				<div class="actions__item-benefit-text">Скидка на морские и речные туры</div>
			</div>
		</div>
	</div>
	<div class="actions__item">
		<div class="actions__item-top">
			<div class="actions__item-top-inner">
				<div class="actions__item-logo" style="background-image: url('/static/theme/images/actions/2.png')"></div>
				<div class="actions__item-title">Мегаполюс Турс</div>
				<div class="actions__item-site">
					<a href="#">megapolus-tours.ru</a>
				</div>
			</div>
		</div>
		<div class="actions__item-benefits _3-cols">
			<div class="actions__item-benefit">
				<div class="actions__item-benefit-title">до 5%</div>
				<div class="actions__item-benefit-text">
					Скидка на все
					стандартные туры
				</div>
			</div>
			<div class="actions__item-benefit">
				<div class="actions__item-benefit-title">10%</div>
				<div class="actions__item-benefit-text">
					Скидка на морские
					и речные туры
				</div>
			</div>
			<div class="actions__item-benefit">
				<div class="actions__item-benefit-title">3%</div>
				<div class="actions__item-benefit-text">Скидка на морские и речные туры</div>
			</div>
		</div>
	</div>
<?
	$content = ob_get_clean();
	echo $content;
?>