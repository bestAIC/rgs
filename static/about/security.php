<?include "../includes/header.php"?>
	<div class="inner deposit depository">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/about.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Защита от мошенничества</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">О Банке</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Защита от мошенничества</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray" data-depository>
			<div class="b-block animation__top news-archive"  data-animation>
				<div class="grid__inner">
					<div class="depository__form">
						<form action="/static/ajax/depository.php">
							<div class="depository__form-inner">
								<div class="depository__form-title">Архив новостей<a href="javascript:void(0);" data-depository-form-toggle class="is-mob-block depository__form-toggle"></a></div>
								<?if(!$mobile){?>
									<div class="depository__form-fields" data-depository-form-fields>
										<input type="hidden"  data-depository-type name="type" value="news">
										<div class="depository__form-field">
											<select data-chosen data-depository-field data-placeholder="Месяц">
												<option value="">Месяц</option>
												<option value="Сентябрь">Сентябрь</option>
												<option value="Октябрь">Октябрь</option>
											</select>
										</div>
										<div class="depository__form-field">
											<select data-chosen data-depository-field data-placeholder="Год">
												<option value="">Год</option>
												<option value="2016">2016</option>
												<option value="2017">2017</option>
											</select>
										</div>
										<button type="submit" class="btn depository__form-btn _red">ПОКАЗАТЬ</button>
									</div>
								<?}?>
							</div>
							<?if($mobile){?>
								<div class="depository__form-fields" data-depository-form-fields>
									<input type="hidden"  data-depository-type name="type" value="news">
									<div class="depository__form-field">
										<select data-chosen data-depository-field data-placeholder="Месяц">
											<option value="">Месяц</option>
											<option value="Сентябрь">Сентябрь</option>
											<option value="Октябрь">Октябрь</option>
										</select>
									</div>
									<div class="depository__form-field">
										<select data-chosen data-depository-field data-placeholder="Год">
											<option value="">Год</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
										</select>
									</div>
									<button type="submit" class="btn depository__form-btn _red">ПОКАЗАТЬ</button>
								</div>
							<?}?>
						</form>
					</div>
					<div class="depository__news-block" data-depository-block>
						<?
							$visibleItemsCounter = 9;
							if($tablePort){
								$visibleItemsCounter = 6;
							}
							if($mobile){
								$visibleItemsCounter = 3;
							}
							for ($i=1;$i<=$visibleItemsCounter; $i++){?>
								<div class="gall__news depository__news-item <?=$i==1 ? ' _flag':''?>">
									<div class="gall__news-inner">
										<div class="gall__news-date">29 декабря 2016</div>
										<a href="#" class="gall__news-title">
											Недоступность систем ДБО
											для физических лиц
											23.10.2016 г.
										</a>
									</div>
								</div>
							<?}?>
					</div>
					<div class="hide" data-depository-hidden>
						<div class="gall__news depository__news-item _flag" data-depository-hidden-item>
							<div class="gall__news-inner">
								<div class="gall__news-date">29 декабря 2016</div>
								<a href="#" class="gall__news-title">
									Вниманию клиентов: работа отделений РОСГОССТРАХ БАНКА в новогодние и рождественские праздники 2017 года
								</a>
							</div>
						</div>
						<div class="gall__news depository__news-item _flag" data-depository-hidden-item>
							<div class="gall__news-inner">
								<div class="gall__news-date">29 декабря 2016</div>
								<a href="#" class="gall__news-title">
									Вниманию клиентов: работа отделений РОСГОССТРАХ БАНКА в новогодние и рождественские праздники 2017 года
								</a>
							</div>
						</div>
					</div>
					<div class="gold-link__wrap">
						<a href="javascript:void(0);" data-depository-show-more class="gold-link _arr-down">Показать ещё</a>
					</div>
				</div>
			</div>
			<?include "../includes/news-gall.php"?>
		</div>
	</div>
<?include "../includes/footer.php"?>

