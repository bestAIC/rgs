<?include "../../includes/header.php"?>
	<div class="inner">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/about.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title _long">Информация о максимальных процентных
						ставках по вкладам физических лиц (№3194-У)</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">О Банке</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Информация о максимальных процентных
ставках по вкладам физических лиц (№3194-У)</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?
			$months = [
				"Ноябрь",
				"Октябрь",
				"Сентябрь",
				"Август",
				"Июль",
				"Июнь",
				"Май",
				"Апрель",
				"Март",
				"Февраль",
				"Январь"
			];
			$years = [
				"2016",
				"2015",
				"2014",
				"2013",
				"2012",
				"2011",
				"2010",
				"2009"
			];
		?>
		<div class="b-blocks _gray">
			<div class="b-block _top-indent animation__top" data-animation>
				<div class="grid__inner">
					<div class="docs-date <?/*_long-titles _issuing-documents*/?>" data-tabs>
						<div class="docs-date__years-wrap" data-docs-date-years-gall-wrap>
							<div class="swiper-container docs-date__years" data-docs-date-years-gall>
								<div class="swiper-wrapper">
									<?for ($i=0;$i<count($years);$i++){?>
										<div class="swiper-slide docs-date__year">
											<a href="javascript:void(0);" data-tabs-tab="<?=$years[$i]?>" class="docs-date__year-link <?=$i==0 ? ' _active':''?>"><?=$years[$i]?></a>
										</div>
									<?}?>
								</div>
							</div>
							<div class="nav__btn _prev" data-docs-date-years-gall-prev></div>
							<div class="nav__btn _next" data-docs-date-years-gall-next></div>
						</div>

						<div class="docs-date__content">
							<?for ($j=0;$j<count($years);$j++){?>
								<div class="docs-date__block <?=$j == 0 ? '':' hide' ?>" data-tabs-content="<?=$years[$j]?>">
									<?for ($i=0;$i<count($months);$i++){?>
										<div class="docs-date__month">
											<div class="docs-date__month-title"><?=$months[$i]?></div>
											<div class="docs-date__month-content">
												<a href="#" class="file">
													<div class="file__inner">
														<div class="file__name">
															<span class="file__date">30.11.2016</span> Информация о максимальных процентных ставках по вкладам физических лиц
															 <span class="file__props">(XLS, 35KB)</span>
														</div>
													</div>
												</a>
											</div>
										</div>
									<?}?>
									<div class="docs-date__month">
										<div class="docs-date__month-title">Несколько файлов</div>
										<div class="docs-date__month-content">
											<a href="#" class="file">
												<div class="file__inner">
													<div class="file__name">
														<span class="file__date">30.11.2016</span> Информация о максимальных процентных ставках по вкладам физических лиц
														<span class="file__props">(XLS, 35KB)</span>
													</div>
												</div>
											</a>
											<a href="#" class="file">
												<div class="file__inner">
													<div class="file__name">
														<span class="file__date">30.11.2016</span> Информация о максимальных процентных ставках по вкладам физических лиц
														<span class="file__props">(XLS, 35KB)</span>
													</div>
												</div>
											</a>
											<a href="#" class="file">
												<div class="file__inner">
													<div class="file__name">
														<span class="file__date">30.11.2016</span> Информация о максимальных процентных ставках по вкладам физических лиц
														<span class="file__props">(XLS, 35KB)</span>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							<?}?>
						</div>
					</div>
				</div>
			</div>
			<?include "../../includes/news-gall.php"?>
		</div>
	</div>
<?include "../../includes/footer.php"?>

