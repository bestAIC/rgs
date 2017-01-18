<?include "../../includes/header.php"?>
	<div class="inner deposit">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in"  style="background-image: url('/static/theme/images/banners/about.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Пресс-центр</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">О Банке</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Пресс-центр</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-block animation__top press-center__about" data-animation>
			<div class="grid__inner">
				<div class="press-center__about-inner">
					<div class="press-center__about-title">Дорогие друзья!</div>
					<div class="press-center__about-text">
						<p>Приветствуем вас на странице пресс-службы РОСГОССТРАХ БАНКА. Спасибо за интерес, проявленный
							к деятельности Банка. Мы всегда открыты и прозрачны и готовы в оперативном режиме поделиться самой
							свежей информацией о работе Банка или дать актуальный комментарий по вашему запросу.</p>
						<p>Будем рады вам помочь,<br/>
							Пресс-служба РОСГОССТРАХ БАНКА.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray _small-indents">
			<div class="b-block animation__top" data-animation>
				<div class="grid__inner">
					<h2>Последние новости</h2>
					<div class="press-center__news">
						<?
							$visibleItemsCounter = 3;
							if($tablePort){
								$visibleItemsCounter = 2;
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
					<div class="gold-link__wrap">
						<a href="#" class="gold-link _arr-right">Архив новостей</a>
					</div>
				</div>
			</div>
			<div class="b-block animation__top" data-animation>
				<div class="grid__inner">
					<h2>Последние публикации</h2>
					<div class="press-center__news">
						<?
							$visibleItemsCounter = 3;
							if($tablePort){
								$visibleItemsCounter = 2;
							}
							for ($i=1;$i<=$visibleItemsCounter; $i++){?>
								<div class="gall__news depository__news-item <?=$i==1 ? ' _flag':''?>">
									<div class="gall__news-inner">
										<div class="gall__news-date">29 декабря 2016</div>
										<div class="gall__news-bottom">
											<a href="#" class="gall__news-source">Коммерсант (Ростов)</a>
											<a href="#" class="gall__news-title">
												Недоступность систем ДБО
												для физических лиц
												23.10.2016 г.
											</a>
										</div>
									</div>
								</div>
							<?}?>
					</div>
					<div class="gold-link__wrap">
						<a href="#" class="gold-link _arr-right">Все публикации</a>
					</div>
				</div>
			</div>
			<div class="b-block _gray animation__top" data-animation>
				<div class="grid__inner">
					<div class="press-center__info">
						<a href="#" class="press-center__expert-profile">
							<div class="press-center__expert-profile-inner">
								<div class="press-center__expert-profile-title">Раздел «Экспертный профиль»</div>
								<div class="press-center__expert-profile-text">
									Содержит контакты ключевых спикеров Банка, которые готовы ответить на Ваши вопросы и дать комментарии по интересующим Вас темам
								</div>
							</div>
						</a>
						<div class="press-center__contacts">
							<div class="press-center__contacts-title">Контакты для прессы</div>
							<div class="press-center__contacts-item">
								<div class="press-center__contacts-item-name">Елена Проценко</div>
								<div class="press-center__contacts-item-position">
									Начальник управления
									по связям с общественностью
								</div>
								<div class="press-center__contacts-item-phones">
									(495) 921-20-13,<br/>
									925-80-80 (доб. 077 1286)
								</div>
								<div class="press-center__contacts-item-email">E-mail: <a href="mailto:press@rgsbank.ru"></a>press@rgsbank.ru</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?include "../../includes/news-gall.php"?>
		</div>
	</div>
<?include "../../includes/footer.php"?>

