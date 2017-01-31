<?include "../includes/header.php"?>
	<div class="inner deposit">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/card/Visa_Mc.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Программа CashBack</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Выбрать карту</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Программа CashBack</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner__info animation__top"  data-animation>
			<div class="grid__inner">
				<div class="inner__info-block">
					<div class="deposit__info-banner deposit-info__block">
						<div class="deposit__info-banner-img"  style="background-image: url(<?=$desktopAndTableLand ? '/static/theme/images/info-banners/card/Visa_Mc_pic.png'
							: ($tablePort ? '/static/theme/images/info-banners/card/Visa_Mc_tablet_pic.png':'/static/theme/images/info-banners/card/Visa_Mc_pic_mobile.png') ?>)"></div>
					</div>
				</div>
				<div class="inner__info-benefits">
					<div class="inner__info-benefits-title">Оплачивайте покупки картой и получайте CashBack!</div>
					<ul class="b-list dash-list-indent">
						<li>
							<strong>Что такое CashBack?</strong>
							<ul class="dash-list">
								<li>Это возврат части расходов на приобретение товаров (работ, услуг), оплаченных при помощи карты.</li>
							</ul>
						</li>
						<li>
							<strong>Как стать участником программы CashBack?</strong>
							<ul class="dash-list">
								<li>Участниками программы автоматически являются держатели карт, выпущенных по тарифам, указанным в условиях программы CashBack.</li>
							</ul>
						</li>
						<li>
							<strong>Как получить CashBack?</strong>
							<ul class="dash-list">
								<li>Просто оплачивайте картой покупки на сумму от 100 рублей.</li>
							</ul>
						</li>
						<li>
							<strong>Как использовать CashBack?</strong>
							<ul class="dash-list">
								<li>CashBack – это Ваши деньги. Используйте их по своему усмотрению.</li>
							</ul>
						</li>
					</ul>
					<p>Ознакомьтесь с Правилами и Условиями программы CashBack в разделе «Полезные документы»*</p>
					<div class="note-text">* Программа CashBack (включая Условия программы Cashback и Правила программы Cashback) является публичной офертой
						Публичного акционерного общества «Росгосстрах Банк» в соответствии с п. 2 ст. 437 Гражданского кодекса Российской Федерации.</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<div class="b-block _gray animation__top" data-animation>
				<div class="grid__inner">
					<h2>Полезные документы</h2>
					<div class="files">
						<?for ($i=1;$i<=7;$i++){?>
							<a href="#" class="file">
								<div class="file__inner">
									<div class="file__name">Тарифы по оплате услуг, предоставляемых физическим лицам</div>
									<div class="file__props">PDF, 450.96KB</div>
								</div>
							</a>
						<?}?>
					</div>
				</div>
			</div>
			<?include "../includes/questions.php"?>
			<?include "../includes/news-gall.php"?>
		</div>
	</div>
<?include "../includes/footer.php"?>

