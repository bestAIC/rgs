<?include "includes/header.php"?>
	<div class="inner deposit">
		<div class="sitemap" data-white-top>
			<div class="b-menu__tabs no-mob-block">
				<div class="grid__inner b-menu__tabs-in">
					<a href="javascript:void(0);" class="b-menu__tab _active">Частным клиентам</a>
					<a href="javascript:void(0);" class="b-menu__tab">Малому и среднему бизнесу</a>
					<a href="javascript:void(0);" class="b-menu__tab">Корпоративным клиентам</a>
					<a href="javascript:void(0);" class="b-menu__tab">Финансовым институтам</a>
				</div>
			</div>
			<div class="grid__inner">
				<div class="sitemap__title">Карта сайта</div>
				<div class="sitemap__sections">
					<div class="sitemap__section">
						<div class="sitemap__section-title">Частным клиентам</div>
						<div class="sitemap__section-blocks ">
							<?/*десктоп*/?>
							<div class="is-desktop-block">
								<div class="sitemap__section-col">
									<?include "includes/sitemap/about.php"?>
								</div>
								<div class="sitemap__section-col">
									<?include "includes/sitemap/info-center.php"?>
									<?include "includes/sitemap/actions.php"?>
									<?include "includes/sitemap/transfers.php"?>
									<?include "includes/sitemap/credit.php"?>
									<?include "includes/sitemap/investment.php"?>
								</div>
								<div class="sitemap__section-col">
									<?include "includes/sitemap/deposits.php"?>
									<?include "includes/sitemap/cards.php"?>
								</div>
							</div>
							<?/*планшет*/?>
							<div class="is-tablet-block">
								<div class="sitemap__section-col">
									<?include "includes/sitemap/about.php"?>
									<?include "includes/sitemap/credit.php"?>
									<?include "includes/sitemap/investment.php"?>
								</div>
								<div class="sitemap__section-col">
									<?include "includes/sitemap/info-center.php"?>
									<?include "includes/sitemap/actions.php"?>
									<?include "includes/sitemap/deposits.php"?>
									<?include "includes/sitemap/transfers.php"?>
									<?include "includes/sitemap/cards.php"?>
								</div>
							</div>
							<?/*мобильная*/?>
							<div class="is-mobile-block">
								<?include "includes/sitemap/about.php"?>
								<?include "includes/sitemap/info-center.php"?>
								<?include "includes/sitemap/actions.php"?>
								<?include "includes/sitemap/deposits.php"?>
								<?include "includes/sitemap/transfers.php"?>
								<?include "includes/sitemap/cards.php"?>
								<?include "includes/sitemap/credit.php"?>
								<?include "includes/sitemap/investment.php"?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?include "includes/footer.php"?>

