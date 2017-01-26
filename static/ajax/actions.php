<?
	ob_start();
?>
<?for ($i=1;$i<=3;$i++){?>
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
<?
	$content = ob_get_clean();
	echo $content;
?>