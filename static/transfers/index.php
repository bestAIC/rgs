<?include "../includes/header.php"?>
	<div class="inner deposit transfers">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/transactions/PayAndTransact.png');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Оплатить и перевести</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Оплатить и перевести</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner__info animation__top"  data-animation>
			<div class="grid__inner">
				<div class="inner__info-block">
					<div class="deposit__info-banner">
						<div class="deposit__info-banner-in">
							<div class="deposit__info-banner-text">0%</div>
							<div class="deposit__info-banner-title">Комиссия за внутрибанковские операции</div>
						</div>
						<div class="deposit__info-banner-img"  style="background-image: url(<?=$desktopAndTableLand ? '/static/theme/images/info-banners/transactions/pay_and_transact_pic.png'
							: ($tablePort ? '/static/theme/images/info-banners/transactions/pay_and_transact_tablet_pic.png':'/static/theme/images/info-banners/transactions/Pay_and_Transact_pic_mobile.png') ?>)"></div>
					</div>
				</div>
				<div class="inner__info-benefits">
					<div class="inner__info-benefits-title">
						Одно из основных направлений работы
						РОСГОССТРАХ БАНКА связано с денежными переводами и приемом платежей от населения.
					</div>
					<div class="inner__info-benefits-text _big">
						Вам нужно перевести деньги родственникам или друзьям в другой город или другую страну? Вы не хотите стоять в очередях, чтобы оплатить коммунальные услуги или стоимость пребывания ребенка
						в садике? У вас нет времени доехать до ГИБДД и оплатить штраф? Воспользуйтесь сервисами РОСГОССТРАХ БАНКА!
					</div>
					<div class="inner__info-benefits-btn">
						<a href="#" class="btn _red">Сделать перевод</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<div class="b-block animation__top transfers-nav page-nav" data-animation>
				<div class="grid__inner">
					<div class="page-nav__row">
						<div class="page-nav__row-col">
							<a href="#" class="page-nav__item _big transfers-nav__cards">
								<div class="page-nav__item-title">
									Переводы<br/>
									с карты на карту
								</div>
								<div class="page-nav__item-text">
									Моментальные переводы между картами, выпущенными российскими банками
								</div>
								<div class="transfers-nav__cards-block">
									<div class="transfers-nav__cards-card b-card _visa-gold"></div>
									<div class="transfers-nav__cards-card b-card _other"></div>
								</div>
							</a>
						</div>
						<div class="page-nav__row-col _items">
							<a href="#" class="page-nav__item">
								<div class="page-nav__item-ico _base _services"></div>
								<div class="page-nav__item-title">
									Оплата услуг
								</div>
								<div class="page-nav__item-text">
									Переводы в пользу юридических лиц
									(платежи)
								</div>
							</a>
							<a href="#" class="page-nav__item">
								<div class="page-nav__item-ico _base _currency"></div>
								<div class="page-nav__item-title">
									Валютно-обменные операции
								</div>
								<div class="page-nav__item-text">
									Актуальная и полезная информация
									о курсе обмена валют в разных городах России.
								</div>
							</a>
						</div>
					</div>
					<div class="page-nav__row">
						<a href="#" class="page-nav__item">
							<div class="transfers-nav__methods">
								<div class="transfers-nav__method _rgs"></div>
								<div class="transfers-nav__method _wu"></div>
								<div class="transfers-nav__method _mg"></div>
								<div class="transfers-nav__method _zk"></div>
							</div>
							<div class="page-nav__item-title">
								Денежные переводы<br />
								без открытия счета
							</div>
							<div class="page-nav__item-text">
								Переводы средств по России,
								в страны ближнего и дальнего зарубежья
							</div>
						</a>
					</div>
				</div>
			</div>
			<?include "../includes/news-gall.php"?>
		</div>
	</div>
<?include "../includes/footer.php"?>

