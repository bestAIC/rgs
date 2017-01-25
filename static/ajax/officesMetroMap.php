<? ob_start(); ?>
	<div>
		<?for ($i=1;$i<=4;$i++){?>
		<div class="offices__item">
			<div class="offices__item-title">ДО «Отделение «Киевское»</div>
			<div class="offices__item-info">
				<div class="offices__item-info-block">
					<div class="offices__item-info-address">
						Киевская ул., д. 7
						<div class="offices__item-info-metro">
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
		<?}?>
	</div>

<? $content = ob_get_clean(); ?>


<?
	$arr = array(
		'content'	=> $content,
		'counter'	=> 4
	);
	echo json_encode($arr)
?>
