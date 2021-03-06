<div class="offices b-block animation__top" data-offices data-marker-url='{"static":"/static/theme/images/icons/marker.png","active":"/static/theme/images/icons/marker-active.png"}' data-animation>
	<div class="grid__inner">
		<h2>Отделения и банкоматы</h2>
		<div class="subtitle">
			Обратитесь в любое отделение РОСГОССТРАХ БАНКА,<br />
			чтобы присоединиться к пенсионной программе
		</div>
		<div class="offices__filter" data-filter>
			<form action="/static/ajax/offices.php">
				<div class="offices__filter-inner">
					<div class="offices__filter-types">
						<label class="offices__filter-type"><input type="checkbox" >Отделения</label>
						<label class="offices__filter-type"><input type="checkbox" >Банкоматы</label>
					</div>
					<div class="offices__filter-right">
						<div class="offices__tabs is-desktop-block">
							<a href="javascript:void(0);" class="offices__tab _active" data-offices-tab="map">На карте</a>
							<a href="javascript:void(0);" class="offices__tab" data-offices-tab="list">Списком</a>
						</div>
						<div class="offices__filter-city">
							<input type="text" class="offices__filter-city-field" autocomplete="off" value="Москва">
						</div>
						<a href="javascript:void(0);" data-filter-extend-show class="offices__advanced-search is-desktop-block">Расширенный поиск</a>
						<div class="offices__filter-icons no-desktop-block">
							<a href="javascript:void(0);"  data-offices-tab="map" class="offices__filter-icon _map _active"></a>
							<a href="javascript:void(0);" data-offices-tab="list" class="offices__filter-icon _list"></a>
							<a  href="javascript:void(0);" data-filter-extend-show class="offices__filter-icon _settings"></a>
						</div>
					</div>
				</div>
				<?
					$block1 = '<div class="offices__filter-block">
											<div class="offices__filter-block-title">Режим работы:</div>
											<div class="offices__filter-checks">
												<div class="offices__filter-checks-col _w1">
													<label class="offices__filter-check"><input type="checkbox">Без выходных</label>
												</div>
												<div class="offices__filter-checks-col _w2">
													<label class="offices__filter-check"><input type="checkbox">Круглосуточно</label>
												</div>
											</div>
										</div>';
					
					$block2 = '<div class="offices__filter-block">
											<div class="offices__filter-block-title">Показывать банкоматы партнеров:</div>
											<div class="offices__filter-checks">
												<div class="offices__filter-checks-col _w1">
													<label class="offices__filter-check"><input type="checkbox">ТАТФОНДБАНК</label>
												</div>
												<div class="offices__filter-checks-col _w2">
													<label class="offices__filter-check"><input type="checkbox">Московский Кредитный Банк</label>
												</div>
											</div>
										</div>';
					$block3 = '<div class="offices__filter-block">
											<div class="offices__filter-block-title">Дополнительные услуги:</div>
											<div class="offices__filter-checks">
												<div class="offices__filter-checks-col _w3">
													<label class="offices__filter-check"><input type="checkbox">Обмен валюты</label>
													<label class="offices__filter-check"><input type="checkbox">ПИФы</label>
													<label class="offices__filter-check"><input type="checkbox">ОСАГО</label>
												</div>
												<div class="offices__filter-checks-col _w4">
													<label class="offices__filter-check"><input type="checkbox">VIP-обслуживание</label>
													<label class="offices__filter-check"><input type="checkbox">Аренда сейфовых ячеек</label>
													<label class="offices__filter-check"><input type="checkbox">Обслуживание юридических лиц</label>
												</div>
											</div>
										</div>';
				?>
				<div class="offices__filter-extended hide" data-filter-extend>
					<a href="javascript:void(0);" class="offices__filter-extended-close" data-filter-extend-close></a>
					<?if($desktopAndTableLand){?>
					<div class="offices__filter-cols">
						<div class="offices__filter-col">
							<?=$block1?>
							<?/*=$block2*/?>
						</div>
						<div class="offices__filter-col">
							<?=$block3?>
						</div>
					</div>
					<div class="offices__filter-cols">
						<?/*div class="offices__filter-col">
							<div class="offices__filter-notice">
								Внимание! Банки-партнеры взимают комиссию при снятии наличных.<br />
								О сумме комиссии можно узнать на странице <a href="#">“Тарифы партнерской сети”</a>
							</div>
						</div*/?>
						<div class="offices__filter-col">
							<div class="offices__filter-metro" data-offices-filter-metro>
								<select data-chosen>
									<option value="">Станция метро</option>
									<option value="">Станция метро2</option>
									<option value="">Станция метр3</option>
								</select>
							</div>
						</div>
					</div>
					<?}else{?>
						<div class="offices__filter-cols">
							<div class="offices__filter-col _1">
								<?=$block1?>
								<?=$block3?>
							</div>
							<div class="offices__filter-col _2">
								<?/*=$block2*/?>
								<?/*div class="offices__filter-notice">
									Внимание! Банки-партнеры взимают комиссию при снятии наличных.
									О сумме комиссии можно узнать на странице <a href="#">“Тарифы партнерской сети”</a>
								</div*/?>
								<div class="offices__filter-metro" data-offices-filter-metro>
									<select data-chosen>
										<option value="">Станция метро</option>
										<option value="">Станция метро2</option>
										<option value="">Станция метр3</option>
									</select>
								</div>
							</div>
						</div>
					<?}?>
				</div>
			</form>
		</div>
		<div class="offices__block hide" data-offices-content="list">
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
			<div class="offices__item" data-office-point='{"lat":55.699676,"lan":37.845726,"type":"atm"}'>
				<div class="offices__item-title">ДО «Отделение «Жулебинский бульвар»</div>
				<div class="offices__item-info">
					<div class="offices__item-info-block">
						<div class="offices__item-info-address">
							Жулебинский б-р, д. 6/11
							<div class="offices__item-info-metro is-mob-block">
								<div class="metro">
									<div class="metro__ico" style="background-color: #a9037a;"></div>
									Лермонтовский проспект
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
								<div class="metro__ico" style="background-color: #a9037a;"></div>
								Лермонтовский проспект
							</div>
						</div>
					</div>
					<div class="offices__item-schedule">
						<div class="offices__item-schedule-block">
							<div class="offices__item-schedule-block-title">ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</div>
							Пн-пт: <strong>10:00-20:00</strong><br/>
							Сб.: <strong>10:00-15:00</strong><br/>
							Вс.: <strong>выходной</strong>
						</div>
						<div class="offices__item-schedule-block">
							<div class="offices__item-schedule-block-title">ДЛЯ ЮРИДИЧЕСКИХ ЛИЦ</div>
							Пн-пт: <strong>10:00-20:00</strong><br/>
							Сб-вс: <strong>выходной</strong>
						</div>
					</div>
				</div>
				<?/*a href="#" class="more-link offices__item-mark">Оценить отделение</a*/?>
			</div>
		</div>
	</div>
	<div class="offices__map-wrap" data-offices-content="map">
		<div class="offices__map" data-offices-map>

		</div>
		<div class="offices__map-block">
			<div class="grid__inner">
				<div class="nav offices__map-nav">
					<div class="nav__btn _plus" data-zoom-plus></div>
					<div class="nav__btn _minus" data-zoom-minus></div>
				</div>
				<div class="offices__map-popup" data-offices-map-popup>
					<a href="javascript:void(0);" data-offices-map-popup-close class="offices__map-popup-close"></a>
					<div class="offices__map-popup-content" data-offices-map-popup-content></div>
				</div>
			</div>
		</div>
	</div>
</div>