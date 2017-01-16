<?include "../../includes/header.php"?>
	<div class="inner">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/about.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Годовые отчеты</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">О Банке</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Годовые отчеты</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?
			$titles= [
				"Годовая отчетность за 2015 год",
				"Годовая отчетность за 2014 год",
				"Годовая отчетность за 2013 год",
				"Годовая отчетность за 2012 год",
				"Годовая отчетность за 2011 год"
			];
		?>
		<div class="b-blocks _gray">
			<div class="b-block _top-indent animation__top" data-animation>
				<div class="grid__inner">
					<div class="docs annual-reports">
						<?for ($i=0;$i<count($titles);$i++){?>
							<div class="deposit-doc" data-nav-block>
								<a href="javascript:void(0);" data-nav-btn class="deposit-doc__title"><?=$titles[$i]?></a>
								<div class="deposit-doc__content hide" data-nav-content>
										<a href="#" class="file">
											<div class="file__inner">
												<div class="file__name">Годовая бухгалтерская отчетность за 2015 год (в соответствии с РСБУ), подтвержденная аудиторами</div>
												<div class="file__props">PDF, 450.96KB</div>
											</div>
										</a>
										<ul>
											<li>Дата публикации - 13.05.2016</li>
											<li>Утверждено Годовым собранием акционеров 17.06.2016</li>
										</ul>
										<a href="#" class="file">
											<div class="file__inner">
												<div class="file__name">Тарифы по оплате услуг, предоставляемых физическим лицам</div>
												<div class="file__props">PDF, 450.96KB</div>
											</div>
										</a>
										<ul>
											<li>Дата представления в Банк России − 06.05.2016</li>
											<li>Дата публикации − 29.04.2016</li>
											<li>Отчетность доступна пользователям не менее 3 лет с даты размеще</li>
										</ul>
										<a href="#" class="file">
											<div class="file__inner">
												<div class="file__name">Тарифы по оплате услуг, предоставляемых физическим лицам</div>
												<div class="file__props">PDF, 450.96KB</div>
											</div>
										</a>
								</div>
							</div>
						<?}?>
					</div>
				</div>
			</div>
			<?include "../../includes/news-gall.php"?>
		</div>
	</div>
<?include "../../includes/footer.php"?>

