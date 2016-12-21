<?
	ob_start();
?>
	<div>
		<div class="offices__item" data-office-point='{"lat":55.7420428,"lan":37.559213,"type":"office"}'>
			<div class="offices__item-title">ДО «Отделение «Киевское»</div>
			<div class="offices__item-info">
				<div class="offices__item-info-block">
					<div class="offices__item-info-address">
						Киевская ул., д. 7
						<div class="offices__item-info-metro is-mob-block">
							<div class="metro">
								<div class="metro__ico" style="background-color: #976d49;"></div>
								Киевская
							</div>
						</div>
					</div>
					<div class="offices__item-info-phones">
						<div class="offices__item-phone">
							<a href="#" class="tel:84959258080">(495) 925-80-80</a>
						</div>
						<div class="offices__item-phone">
							<a href="#" class="tel:84955189624">(495) 518-96-24</a>
						</div>
					</div>
					<div class="offices__item-info-metro no-mob-block">
						<div class="metro">
							<div class="metro__ico" style="background-color: #976d49;"></div>
							Киевская
						</div>
					</div>
				</div>
				<div class="offices__item-schedule">
					<div class="offices__item-schedule-block">
						<div class="offices__item-schedule-block-title">ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</div>
						Пн-пт: <strong>09:00-21:00</strong><br/>
						Сб.: <strong>10:00-18:00</strong><br/>
						Вс.: <strong>10:00-16:00</strong><br/>
						Последний день квартала:
						<strong>09:00-20:00</strong>
					</div>
					<div class="offices__item-schedule-block">
						<div class="offices__item-schedule-block-title">ДЛЯ ЮРИДИЧЕСКИХ ЛИЦ</div>
						Пн-пт: <strong>09:00-21:00</strong><br/>
						Сб.: <strong>выходной</strong><br/>
						Вс.: <strong>10:00-16:00</strong><br/>
						Последний день квартала:
						<strong>09:00-20:00</strong>
					</div>
				</div>
			</div>
		</div>
		<div class="offices__item" data-office-point='{"lat":55.860553,"lan":37.567281,"type":"office"}'>
			<div class="offices__item-title">ДО «Отделение «Дубнинское»</div>
			<div class="offices__item-info">
				<div class="offices__item-info-block">
					<div class="offices__item-info-address">
						Дубнинская ул., д. 15, корп. 1
						<div class="offices__item-info-metro is-mob-block">
							<div class="metro">
								<div class="metro__ico" style="background-color: #a1a1a1;"></div>
								Владыкино
							</div>
						</div>
						<div class="offices__item-notice no-tablet-block">
							График работы <strong>17/11/2016-17/12/2016:</strong><br/>
							пн-пт <strong>10:00-20:00</strong>, сб <strong>10:00-15:00</strong>
						</div>
					</div>
					<div class="offices__item-info-phones">
						<div class="offices__item-phone">
							<a href="#" class="tel:84959258080">(495) 925-80-80</a>
						</div>
						<div class="offices__item-phone">
							<a href="#" class="tel:84955189624">(495) 518-96-24</a>
						</div>
					</div>
					<div class="offices__item-info-metro no-mob-block">
						<div class="metro">
							<div class="metro__ico" style="background-color: #a1a1a1;"></div>
							Владыкино
						</div>
					</div>
					<div class="offices__item-notice is-tablet-block">
						График работы <strong>17/11/2016-17/12/2016:</strong><br/>
						пн-пт <strong>10:00-20:00</strong>, сб <strong>10:00-15:00</strong>
					</div>
				</div>
				<div class="offices__item-schedule">
					<div class="offices__item-schedule-block">
						<div class="offices__item-schedule-block-title">ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</div>
						Пн-пт: <strong>10:00-20:00</strong><br/>
						Сб-вс: <strong>выходной</strong>
					</div>
					<div class="offices__item-schedule-block">
						<div class="offices__item-schedule-block-title">ДЛЯ ЮРИДИЧЕСКИХ ЛИЦ</div>
						Пн-пт: <strong>10:00-20:00</strong><br/>
						Сб-вс: <strong>выходной</strong>
					</div>
				</div>
			</div>
		</div>
	</div>

<?
	$content = ob_get_clean();
	echo $content;
?>