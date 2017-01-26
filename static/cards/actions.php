<?include "../includes/header.php"?>
	<div class="inner deposit">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/card/skidki.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Скидки и специальные предложения</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Выбрать карту</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Скидки и специальные предложения</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner__info animation__top"  data-animation>
			<div class="grid__inner">
				<div class="actions__info">
					<div class="actions__info-title">«Партнёрский клуб» РОСГОССТРАХ Банка</div>
					<div class="actions__info-text">Для держателей карт доступны разнообразные скидки в компаниях, входящих в «Партнерский Клуб» РОСГОССТРАХ БАНКА. Автосервисы и магазины для авто, бары и рестораны, салоны красоты и фитнес-клубы, магазины мебели и бытовой техники, туристические фирмы и страховые компании –
						и это далеко не полный перечень направлений, по которым наши клиенты могут получить льготные условия при оплате товаров и услуг.</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<div class="b-block actions__block animation__top" data-animation data-actions>
				<div class="grid__inner">
					<div class="actions__form">
						<form action="/static/ajax/actions.php">
							<div class="actions__form-block _select">
								<div class="actions__form-field">
									<select data-chosen data-actions-form-field>
										<option>Москва и Московская область</option>
										<option>Самара</option>
										<option>Курск</option>
									</select>
								</div>
							</div>
							<div class="actions__form-block _inp">
								<button type="submit" class="actions__form-btn"></button>
								<div class="actions__form-field">
									<input type="text" data-actions-form-field placeholder="Например: автомобили">
								</div>
							</div>
						</form>
					</div>
					<div class="actions__items" data-actions-items>
						<?for ($i=1;$i<=6;$i++){?>
							<div class="actions__item" data-actions-item>
								<div class="actions__item-inner">
									<div class="actions__item-title">
										Аренда автомобилей "DELTA Rent-a-Car"
									</div>
									<div class="actions__item-text">
										Скидка 5% по картам РОСГОССТРАХ БАНКА на следующие услуги: стоматология терапевтическая ...
									</div>
								</div>
								<a href="javascript:void(0);" data-actions-item-more class="actions__item-more">Подробнее</a>
								<div class="hide" data-actions-item-content>
									<div class="actions__item-detail">
										<div class="actions__item-detail-title">Техцентр «Автобам»</div>
										<div class="actions__item-detail-subtitle">Скидка до 10% по картам РОСГОССТРАХ БАНКА*</div>
										<div class="actions__item-detail-text">
											<p>
												Техцентр «Автобам» — специализированный центр по дооснащению автомобилей.
												Более 14 лет компания производит установку охранных комплексов, аудио-видео систем,
												дополнительного оборудования, а также оказывает такие популярные услуги как тонирование и бронирование автостекол,
												оклейка автомобилей защитной пленкой, установка и ремонт глушителей, сход-развал.
												С 2004 года компания занимается также продажей автошин и колесных дисков, работает профессиональный шиномонтаж.
											</p>
											<p>*Скидка 10% на все услуги, скидка 3% на все товары.</p>
											<p>
												Можайское шоссе, дом 165 к. 2, тел.: (495) 380-13-85<br/>
												Б. Тульская, дом 10, к. 4, тел.: (495) 737-72-37<br/>
												Тюменский проезд, дом 3, тел.: (495) 737-27-19<br/>
												Только шины-диски и шиномонтаж:<br/>
												Анненский проезд, дом 1, к. 23, тел.: (495) 785-24-35<br/>
												<a href="">www.avtobam.ru</a>
											</p>
										</div>
									</div>
									<div class="actions__item-detail-btn">
										<a href="javascript:void(0);" data-fancy-close class="btn">ПОНЯТНО</a>
									</div>
								</div>
							</div>
						<?}?>
					</div>
				</div>
			</div>
			<div class="b-block questions animation__top" data-animation>
				<div class="grid__inner">
					<h2>Бонусные программы платежных систем</h2>
					<div class="questions__items" data-questions>
						<?
							$answer = 'Бесценные города – это уникальные привилегии и впечатления для держателей карт MasterCard® в 38 городах 45 стран мира. 
												В России программа представлена в 27 городах. К Вашим услугам – эксклюзивные мероприятия лучших музеев города,
												уникальные предложения на посещение спортивных и культурных мероприятий, скидки и привилегии в магазинах и ресторанах, и многое другое.
												Более подробную информацию о программе Вы сможете получить на сайте <a href="http://priceless.ru">www.priceless.ru</a>';
							$questions = [
								"«MasterCard Бесценные города»",
								"«Visa Premium»",
								"«Visa Bonus»"
							];
							for ($i=0;$i<count($questions);$i++){
								?>
								<div class="questions__item" data-questions-item>
									<div class="questions__item-inner">
										<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title><?=$questions[$i]?></a>
										<div class="questions__item-answer" data-questions-item-answer>
											<?=$answer?>
										</div>
									</div>
								</div>
							<?}?>
					</div>
				</div>
			</div>
			<?include "../includes/news-gall.php"?>
		</div>
	</div>
<?include "../includes/footer.php"?>

