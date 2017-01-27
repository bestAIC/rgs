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
										<div class="offices__filter-city">
											<input type="text" class="offices__filter-city-field"  value="Москва">
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
										<div class="offices__metro-form-field">
											<select name="metro" data-chosen="" data-offices-metro-field data-placeholder="Выберите станцию"><option value="" data-metro-id="">Выберите станцию</option><option data-metro-id="aviamotornaya" value="АВИАМОТОРНАЯ">АВИАМОТОРНАЯ</option><option data-metro-id="avtozavodskaya" value="АВТОЗАВОДСКАЯ">АВТОЗАВОДСКАЯ</option><option data-metro-id="akademicheskaya" value="АКАДЕМИЧЕСКАЯ">АКАДЕМИЧЕСКАЯ</option><option data-metro-id="altufevo" value="АЛТУФЬЕВО">АЛТУФЬЕВО</option><option data-metro-id="arbatskaya" value="АРБАТСКАЯ">АРБАТСКАЯ</option><option data-metro-id="aeroport" value="АЭРОПОРТ">АЭРОПОРТ</option><option data-metro-id="babushkinskaya" value="БАБУШКИНСКАЯ">БАБУШКИНСКАЯ</option><option data-metro-id="bagrationovskaya" value="БАГРАТИОНОВСКАЯ">БАГРАТИОНОВСКАЯ</option><option data-metro-id="barrikadnaya" value="БАРРИКАДНАЯ">БАРРИКАДНАЯ</option><option data-metro-id="baumanskaya" value="БАУМАНСКАЯ">БАУМАНСКАЯ</option><option data-metro-id="belorusskaya" value="БЕЛОРУССКАЯ">БЕЛОРУССКАЯ</option><option data-metro-id="belyaevo" value="БЕЛЯЕВО">БЕЛЯЕВО</option><option data-metro-id="bibirevo" value="БИБИРЕВО">БИБИРЕВО</option><option data-metro-id="botanicheskiy-sad" value="БОТАНИЧЕСКИЙ САД">БОТАНИЧЕСКИЙ САД</option><option data-metro-id="bratislavskaya" value="БРАТИСЛАВСКАЯ">БРАТИСЛАВСКАЯ</option><option data-metro-id="buninskaya-alleya" value="БУНИНСКАЯ АЛЛЕЯ">БУНИНСКАЯ АЛЛЕЯ</option><option data-metro-id="varshavskaya" value="ВАРШАВСКАЯ">ВАРШАВСКАЯ</option><option data-metro-id="vdnkh" value="ВДНХ">ВДНХ</option><option data-metro-id="vladykino" value="ВЛАДЫКИНО">ВЛАДЫКИНО</option><option data-metro-id="vodnyy-stadion" value="ВОДНЫЙ СТАДИОН">ВОДНЫЙ СТАДИОН</option><option data-metro-id="voykovskaya" value="ВОЙКОВСКАЯ">ВОЙКОВСКАЯ</option><option data-metro-id="volgogradskiy-pr-t" value="ВОЛГОГРАДСКИЙ ПР-Т">ВОЛГОГРАДСКИЙ ПР-Т</option><option data-metro-id="vorobevy-gory" value="ВОРОБЬЕВЫ ГОРЫ">ВОРОБЬЕВЫ ГОРЫ</option><option data-metro-id="vystavochnaya" value="ВЫСТАВОЧНАЯ">ВЫСТАВОЧНАЯ</option><option data-metro-id="vykhino" value="ВЫХИНО">ВЫХИНО</option><option data-metro-id="dinamo" value="ДИНАМО">ДИНАМО</option><option data-metro-id="dmitrovskaya" value="ДМИТРОВСКАЯ">ДМИТРОВСКАЯ</option>
												<option data-metro-id="dobryninskaya" value="ДОБРЫНИНСКАЯ">ДОБРЫНИНСКАЯ</option><option data-metro-id="domodedovskaya" value="ДОМОДЕДОВСКАЯ">ДОМОДЕДОВСКАЯ</option><option data-metro-id="dostoevskaya" value="ДОСТОЕВСКАЯ">ДОСТОЕВСКАЯ</option><option data-metro-id="dubrovka" value="ДУБРОВКА">ДУБРОВКА</option><option data-metro-id="izmaylovskaya" value="ИЗМАЙЛОВСКАЯ">ИЗМАЙЛОВСКАЯ</option><option data-metro-id="kaluzhskaya" value="КАЛУЖСКАЯ">КАЛУЖСКАЯ</option><option data-metro-id="kantemirovskaya" value="КАНТЕМИРОВСКАЯ">КАНТЕМИРОВСКАЯ</option><option data-metro-id="kakhovskaya" value="КАХОВСКАЯ">КАХОВСКАЯ</option><option data-metro-id="kashirskaya" value="КАШИРСКАЯ">КАШИРСКАЯ</option><option data-metro-id="kitay-gorod" value="КИТАЙ-ГОРОД">КИТАЙ-ГОРОД</option><option data-metro-id="kolomenskaya" value="КОЛОМЕНСКАЯ">КОЛОМЕНСКАЯ</option><option data-metro-id="konkovo" value="КОНЬКОВО">КОНЬКОВО</option><option data-metro-id="krasnogvardeyskaya" value="КРАСНОГВАРДЕЙСКАЯ">КРАСНОГВАРДЕЙСКАЯ</option><option data-metro-id="krasnopresnenskaya" value="КРАСНОПРЕСНЕНСКАЯ">КРАСНОПРЕСНЕНСКАЯ</option><option data-metro-id="krasnye-vorota" value="КРАСНЫЕ ВОРОТА">КРАСНЫЕ ВОРОТА</option><option data-metro-id="krestyanskaya-zastava" value="КРЕСТЬЯНСКАЯ ЗАСТАВА">КРЕСТЬЯНСКАЯ ЗАСТАВА</option><option data-metro-id="krylatskoe" value="КРЫЛАТСКОЕ">КРЫЛАТСКОЕ</option><option data-metro-id="kuznetskiy-most" value="КУЗНЕЦКИЙ МОСТ">КУЗНЕЦКИЙ МОСТ</option><option data-metro-id="kuzminki" value="КУЗЬМИНКИ">КУЗЬМИНКИ</option><option data-metro-id="kuntsevskaya" value="КУНЦЕВСКАЯ">КУНЦЕВСКАЯ</option><option data-metro-id="kurskaya" value="КУРСКАЯ">КУРСКАЯ</option><option data-metro-id="leninskiy-pr-t" value="ЛЕНИНСКИЙ ПР-Т">ЛЕНИНСКИЙ ПР-Т</option><option data-metro-id="lubyanka" value="ЛУБЯНКА">ЛУБЯНКА</option><option data-metro-id="lyublino" value="ЛЮБЛИНО">ЛЮБЛИНО</option><option data-metro-id="marksistskaya" value="МАРКСИСТСКАЯ">МАРКСИСТСКАЯ</option><option data-metro-id="marina-roshcha" value="МАРЬИНА РОЩА">МАРЬИНА РОЩА</option><option data-metro-id="marino" value="МАРЬИНО">МАРЬИНО</option><option data-metro-id="mayakovskaya" value="МАЯКОВСКАЯ">МАЯКОВСКАЯ</option><option data-metro-id="medvedkovo" value="МЕДВЕДКОВО">МЕДВЕДКОВО</option><option data-metro-id="mezhdunarodnaya" value="МЕЖДУНАРОДНАЯ">МЕЖДУНАРОДНАЯ</option><option data-metro-id="mendeleevskaya" value="МЕНДЕЛЕЕВСКАЯ">МЕНДЕЛЕЕВСКАЯ</option><option data-metro-id="mitino" value="МИТИНО">МИТИНО</option><option data-metro-id="molodezhnaya" value="МОЛОДЕЖНАЯ">МОЛОДЕЖНАЯ</option><option data-metro-id="nagatinskaya" value="НАГАТИНСКАЯ">НАГАТИНСКАЯ</option><option data-metro-id="novogireevo" value="НОВОГИРЕЕВО">НОВОГИРЕЕВО</option><option data-metro-id="novokuznetskaya" value="НОВОКУЗНЕЦКАЯ">НОВОКУЗНЕЦКАЯ</option>
												<option data-metro-id="novoslobodskaya" value="НОВОСЛОБОДСКАЯ">НОВОСЛОБОДСКАЯ</option><option data-metro-id="novye-cheremushki" value="НОВЫЕ ЧЕРЕМУШКИ">НОВЫЕ ЧЕРЕМУШКИ</option><option data-metro-id="oktyabrskaya" value="ОКТЯБРЬСКАЯ">ОКТЯБРЬСКАЯ</option><option data-metro-id="oktyabrskoe-pole" value="ОКТЯБРЬСКОЕ ПОЛЕ">ОКТЯБРЬСКОЕ ПОЛЕ</option><option data-metro-id="orekhovo" value="ОРЕХОВО">ОРЕХОВО</option><option data-metro-id="otradnoe" value="ОТРАДНОЕ">ОТРАДНОЕ</option><option data-metro-id="okhotnyy-ryad" value="ОХОТНЫЙ РЯД">ОХОТНЫЙ РЯД</option><option data-metro-id="paveletskaya" value="ПАВЕЛЕЦКАЯ">ПАВЕЛЕЦКАЯ</option><option data-metro-id="park-kultury" value="ПАРК КУЛЬТУРЫ">ПАРК КУЛЬТУРЫ</option><option data-metro-id="park-pobedy" value="ПАРК ПОБЕДЫ">ПАРК ПОБЕДЫ</option><option data-metro-id="partizanskaya" value="ПАРТИЗАНСКАЯ">ПАРТИЗАНСКАЯ</option><option data-metro-id="pervomayskaya" value="ПЕРВОМАЙСКАЯ">ПЕРВОМАЙСКАЯ</option><option data-metro-id="perovo" value="ПЕРОВО">ПЕРОВО</option><option data-metro-id="petrovsko-razumovskaya" value="ПЕТРОВСКО-РАЗУМОВСКАЯ">ПЕТРОВСКО-РАЗУМОВСКАЯ</option><option data-metro-id="pechatniki" value="ПЕЧАТНИКИ">ПЕЧАТНИКИ</option><option data-metro-id="planernaya" value="ПЛАНЕРНАЯ">ПЛАНЕРНАЯ</option><option data-metro-id="ploshchad-ilicha" value="ПЛОЩАДЬ ИЛЬИЧА">ПЛОЩАДЬ ИЛЬИЧА</option><option data-metro-id="polezhaevskaya" value="ПОЛЕЖАЕВСКАЯ">ПОЛЕЖАЕВСКАЯ</option><option data-metro-id="polyanka" value="ПОЛЯНКА">ПОЛЯНКА</option><option data-metro-id="pr-t-vernadskogo" value="ПР-Т ВЕРНАДСКОГО">ПР-Т ВЕРНАДСКОГО</option><option data-metro-id="prazhskaya" value="ПРАЖСКАЯ">ПРАЖСКАЯ</option><option data-metro-id="proletarskaya" value="ПРОЛЕТАРСКАЯ">ПРОЛЕТАРСКАЯ</option><option data-metro-id="prospekt-mira" value="ПРОСПЕКТ МИРА">ПРОСПЕКТ МИРА</option><option data-metro-id="profsoyuznaya" value="ПРОФСОЮЗНАЯ">ПРОФСОЮЗНАЯ</option><option data-metro-id="pushkinskaya" value="ПУШКИНСКАЯ">ПУШКИНСКАЯ</option><option data-metro-id="rechnoy-vokzal" value="РЕЧНОЙ ВОКЗАЛ">РЕЧНОЙ ВОКЗАЛ</option><option data-metro-id="rizhskaya" value="РИЖСКАЯ">РИЖСКАЯ</option><option data-metro-id="rimskaya" value="РИМСКАЯ">РИМСКАЯ</option><option data-metro-id="savelovskaya" value="САВЕЛОВСКАЯ">САВЕЛОВСКАЯ</option><option data-metro-id="sviblovo" value="СВИБЛОВО">СВИБЛОВО</option><option data-metro-id="sevastopolskaya" value="СЕВАСТОПОЛЬСКАЯ">СЕВАСТОПОЛЬСКАЯ</option><option data-metro-id="semenovskaya" value="СЕМЕНОВСКАЯ">СЕМЕНОВСКАЯ</option><option data-metro-id="slavyanskiy-bulvar" value="СЛАВЯНСКИЙ БУЛЬВАР">СЛАВЯНСКИЙ БУЛЬВАР</option><option data-metro-id="smolenskaya" value="СМОЛЕНСКАЯ">СМОЛЕНСКАЯ</option><option data-metro-id="sokol" value="СОКОЛ">СОКОЛ</option><option data-metro-id="sportivnaya" value="СПОРТИВНАЯ">СПОРТИВНАЯ</option>
												<option data-metro-id="sretenskiy-bulvar" value="СРЕТЕНСКИЙ БУЛЬВАР">СРЕТЕНСКИЙ БУЛЬВАР</option><option data-metro-id="strogino" value="СТРОГИНО">СТРОГИНО</option><option data-metro-id="sukharevskaya" value="СУХАРЕВСКАЯ">СУХАРЕВСКАЯ</option><option data-metro-id="skhodnenskaya" value="СХОДНЕНСКАЯ">СХОДНЕНСКАЯ</option><option data-metro-id="taganskaya" value="ТАГАНСКАЯ">ТАГАНСКАЯ</option><option data-metro-id="tverskaya" value="ТВЕРСКАЯ">ТВЕРСКАЯ</option><option data-metro-id="teatralnaya" value="ТЕАТРАЛЬНАЯ">ТЕАТРАЛЬНАЯ</option><option data-metro-id="teplyy-stan" value="ТЕПЛЫЙ СТАН">ТЕПЛЫЙ СТАН</option><option data-metro-id="timiryazevskaya" value="ТИМИРЯЗЕВСКАЯ">ТИМИРЯЗЕВСКАЯ</option><option data-metro-id="trubnaya" value="ТРУБНАЯ">ТРУБНАЯ</option><option data-metro-id="tulskaya" value="ТУЛЬСКАЯ">ТУЛЬСКАЯ</option><option data-metro-id="turgenevskaya" value="ТУРГЕНЕВСКАЯ">ТУРГЕНЕВСКАЯ</option><option data-metro-id="tushinskaya" value="ТУШИНСКАЯ">ТУШИНСКАЯ</option><option data-metro-id="ulitsa-1905-goda" value="УЛИЦА 1905 ГОДА">УЛИЦА 1905 ГОДА</option><option data-metro-id="ulitsa-gorchakova" value="УЛИЦА ГОРЧАКОВА">УЛИЦА ГОРЧАКОВА</option><option data-metro-id="ulitsa-podbelskogo" value="УЛИЦА ПОДБЕЛЬСКОГО">УЛИЦА ПОДБЕЛЬСКОГО</option><option data-metro-id="ulitsa-skobelevskaya" value="УЛИЦА СКОБЕЛЕВСКАЯ">УЛИЦА СКОБЕЛЕВСКАЯ</option><option data-metro-id="ulitsa-starokachalovskaya" value="УЛИЦА СТАРОКАЧАЛОВСКАЯ">УЛИЦА СТАРОКАЧАЛОВСКАЯ</option><option data-metro-id="universitet" value="УНИВЕРСИТЕТ">УНИВЕРСИТЕТ</option><option data-metro-id="fili" value="ФИЛИ">ФИЛИ</option><option data-metro-id="frunzenskaya" value="ФРУНЗЕНСКАЯ">ФРУНЗЕНСКАЯ</option><option data-metro-id="tsaritsyno" value="ЦАРИЦЫНО">ЦАРИЦЫНО</option><option data-metro-id="tsvetnoy-bulvar" value="ЦВЕТНОЙ БУЛЬВАР">ЦВЕТНОЙ БУЛЬВАР</option><option data-metro-id="cherkizovskaya" value="ЧЕРКИЗОВСКАЯ">ЧЕРКИЗОВСКАЯ</option><option data-metro-id="chertanovskaya" value="ЧЕРТАНОВСКАЯ">ЧЕРТАНОВСКАЯ</option><option data-metro-id="chekhovskaya" value="ЧЕХОВСКАЯ">ЧЕХОВСКАЯ</option><option data-metro-id="chistye-prudy" value="ЧИСТЫЕ ПРУДЫ">ЧИСТЫЕ ПРУДЫ</option><option data-metro-id="chkalovskaya" value="ЧКАЛОВСКАЯ">ЧКАЛОВСКАЯ</option><option data-metro-id="shosse-entuziastov" value="ШОССЕ ЭНТУЗИАСТОВ">ШОССЕ ЭНТУЗИАСТОВ</option><option data-metro-id="shchelkovskaya" value="ЩЕЛКОВСКАЯ">ЩЕЛКОВСКАЯ</option><option data-metro-id="shchukinskaya" value="ЩУКИНСКАЯ">ЩУКИНСКАЯ</option><option data-metro-id="elektrozavodskaya" value="ЭЛЕКТРОЗАВОДСКАЯ">ЭЛЕКТРОЗАВОДСКАЯ</option><option data-metro-id="yugo-zapadnaya" value="ЮГО-ЗАПАДНАЯ">ЮГО-ЗАПАДНАЯ</option><option data-metro-id="yuzhnaya" value="ЮЖНАЯ">ЮЖНАЯ</option><option data-metro-id="yasenevo" value="ЯСЕНЕВО">ЯСЕНЕВО</option>
											</select>                                </div>
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

