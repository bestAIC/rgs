<?include "../includes/header.php"?>
	<div class="inner deposit">
		<div class="offices-page animation__top" data-offices-page  data-offices data-marker-url='{"static":"/static/theme/images/icons/marker.svg","active":"/static/theme/images/icons/marker-active.png"}' data-animation>
				<div class="offices-page__in">
					<div class="grid__inner">
						<div class="offices__filter" data-filter data-switch-wrap>
							<form action="/static/ajax/offices.php">
								<div class="offices__filter-inner">

									<a href="javascript:;" class="switch offices__filter-types" data-switch>
										<span class="switch__item _1 _active" data-switch-tab="branches">Отделения</span>
										<span class="switch__ico"><span class="switch__ico-in"></span></span>
										<span class="switch__item _2" data-switch-tab="atm">Банкоматы</span>
										<input type="hidden" name="type" data-switch-inp value="branches">
									</a>
									<div class="offices__filter-right">
										<div class="offices__tabs is-desktop-block">
											<a href="javascript:void(0);" class="offices__tab _active" data-offices-tab="map">На карте</a>
											<a href="javascript:void(0);" class="offices__tab" data-offices-tab="list">Списком</a>
											<a href="javascript:void(0);" class="offices__tab" data-offices-tab="metro">На карте метро</a>
										</div>
										<div class="offices__filter-city" data-field-filter>
											<input type="text" class="offices__filter-city-field" data-field-filter-input value="Москва">
											<input type="hidden" data-filter-city-id value="">
											<div class="offices__filter-city-items" data-filter-list>
												<div class="offices__filter-city-item" data-filter-list-item>
													<a href="javascript:void(0);"  data-filter-list-link class="offices__filter-city-item-link">Магадан</a>
												</div>
												<div class="offices__filter-city-item" data-filter-list-item>
													<a href="javascript:void(0);" data-filter-list-link class="offices__filter-city-item-link">Магнитогорск</a>
												</div>
												<div class="offices__filter-city-item" data-filter-list-item>
													<a href="javascript:void(0);" data-filter-list-link class="offices__filter-city-item-link">Макушино</a>
												</div>
												<div class="offices__filter-city-item" data-filter-list-item>
													<a href="javascript:void(0);" data-filter-list-link class="offices__filter-city-item-link">Малоархангельск</a>
												</div>
												<div class="offices__filter-city-item" data-filter-list-item>
													<a href="javascript:void(0);" data-filter-list-link class="offices__filter-city-item-link">Малоярославец</a>
												</div>
												<div class="offices__filter-city-item" data-filter-list-item>
													<a href="javascript:void(0);" data-filter-list-link class="offices__filter-city-item-link">Мамоново</a>
												</div>
												<div class="offices__filter-city-item" data-filter-list-item>
													<a href="javascript:void(0);" data-filter-list-link class="offices__filter-city-item-link">Махачкала</a>
												</div>
												<div class="offices__filter-city-item" data-filter-list-item>
													<a href="javascript:void(0);" data-filter-list-link class="offices__filter-city-item-link">Мглин</a>
												</div>
												<div class="offices__filter-city-item" data-filter-list-item>
													<a href="javascript:void(0);" data-filter-list-link class="offices__filter-city-item-link">Минеральные Воды</a>
												</div>
												<div class="offices__filter-city-item" data-filter-list-item>
													<a href="javascript:void(0);" data-filter-list-link class="offices__filter-city-item-link">Москва</a>
												</div>
											</div>
										</div>
										<a href="javascript:void(0);" data-filter-extend-show class="offices__advanced-search is-desktop-block">Расширенный поиск</a>
										<div class="offices__filter-icons no-desktop-block">
											<a href="javascript:void(0);"  data-offices-tab="map" class="offices__filter-icon _map _active"></a>
											<a href="javascript:void(0);" data-offices-tab="list" class="offices__filter-icon _list"></a>
											<a href="javascript:void(0);" data-offices-tab="metro" class="offices__filter-icon _metro"></a>
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

									$block2 = '<div class="offices__filter-block hide"  data-switch-content="atm">
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
									$block3 = '<div class="offices__filter-block" data-switch-content="branches">
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
												<?=$block2?>
											</div>
											<div class="offices__filter-col">
												<?=$block3?>
											</div>
										</div>
										<div class="offices__filter-cols">
											<div class="offices__filter-col">
												<div class="offices__filter-notice">
													Внимание! Банки-партнеры взимают комиссию при снятии наличных.<br />
													О сумме комиссии можно узнать на странице <a href="#">“Тарифы партнерской сети”</a>
												</div>
											</div>
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
												<?=$block2?>
												<div class="offices__filter-notice">
													Внимание! Банки-партнеры взимают комиссию при снятии наличных.
													О сумме комиссии можно узнать на странице <a href="#">“Тарифы партнерской сети”</a>
												</div>
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
						<div class="offices__block offices-page__list hide" data-offices-content="list">
							<div class="offices__item" data-office-point='{"lat":55.7420428,"lan":37.559213,"type":"office"}'>
								<a href="#" class="offices__item-title">ДО «Отделение «Киевское»</a>
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
								<a href="#" class="offices__item-title">ДО «Отделение «Дубнинское»</a>
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
						<div class="offices__block offices__metro hide" data-offices-metro data-offices-content="metro">
							<div class="offices__metro-left">
								<div class="offices__metro-form">
									<form action="/static/ajax/officesMetroMap.php">
										<div class="offices__metro-form-field" data-offices-metro-field-wrap></div>
										<div class="offices__metro-form-counter hide" data-offices-metro-counter>
											Найдено : <span data-offices-metro-counter-val></span>
										</div>
									</form>
								</div>
								<div class="offices__metro-items" data-offices-metro-items>

								</div>
							</div>
							<div class="offices__metro-right">
								<div class="offices__metro-img" data-offices-metro-img>
									<?/*for ($i=1;$i<=190;$i++){?>
										<div class="offices__metro-img-station <?='_'.$i?>"><?=$i?></div>
									<?}*/?>
								</div>
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
				<div class="offices-page__partners">
					<div class="grid__inner">
						<div class="offices-page__partners-title">Держатели карт MasterCard и VISA также могут на льготных условиях получить наличные в банкоматах банков-партнеров:</div>
						<div class="offices-page__partners-items">
							<div class="offices-page__partners-item">
								<div class="offices-page__partners-item-ico" style="background-image: url('/static/theme/images/partners/1.png');"></div>
								в <a href="#">банкоматах и отделениях</a><br />
								ОАО “АИКБ “ТАТФОНДБАНК”
							</div>
							<div class="offices-page__partners-item">
								<div class="offices-page__partners-item-ico" style="background-image: url('/static/theme/images/partners/2.png');"></div>
								в <a href="#">банкоматах и отделениях</a><br />
								ОАО "Московский Кредитный Банк" (МКБ)
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
<?include "../includes/footer.php"?>

