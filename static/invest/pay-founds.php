<?include "../includes/header.php"?>
	<div class="inner deposit pay-founds">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/invest/pay_funds.png');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Паевые инвестиционные фонды</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Инвестировать</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Паевые инвестиционные фонды</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner__info animation__top"  data-animation>
			<div class="grid__inner">
				<div class="inner__info-block">
					<div class="numerals">
						<div class="numerals__block">
							<div class="numerals__item _big">
								<div class="numerals__item-val">А++</div>
								<div class="numerals__item-dash"></div>
								<div class="numerals__item-text">
									максимальный рейтинг надежности
								</div>
							</div>
						</div>
						<div class="numerals__block">
							<div class="numerals__item _small">
								<div class="numerals__item-val">187 <span>млрд. Р</span></div>
								<div class="numerals__item-dash"></div>
								<div class="numerals__item-text">
									общий объем активов
									под управлением компании по состоянию на 30.06.2016 г
								</div>
							</div>
							<div class="numerals__item _small">
								<div class="numerals__item-val"><span>с</span> 1999 <span>года</span></div>
								<div class="numerals__item-dash"></div>
								<div class="numerals__item-text">
									на российском фондовом
									рынке
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="inner__info-benefits">
					<div class="inner__info-benefits-title">
						Преимущества инвестирования в ПИФы ООО «Управление Сбережениями»
					</div>
					<ul class="b-list">
						<li>Оптимальная линейка фондов: фонды акций, облигаций, смешанных инвестиций, индексный и отраслевые фонды.</li>
						<li>Профессионализм управляющих.</li>
						<li>Аналитическая поддержка по текущей ситуации на финансовом рынке и перспективах его развития.</li>
						<li>Широкая сеть офисов продаж</li>
						<li>Доступный размер первоначальных инвестиций в открытые фонды - от 3 000 рублей.</li>
					</ul>
					<div class="inner__info-benefits-btn">
						<a href="#" class="btn _red">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray" data-pay-fonds>
			<div class="b-block animation__top" data-animation>
				<div class="grid__inner">
					<h2>Инвестиционные фонды</h2>
					<div class="pay-founds__items" data-pay-fonds-items>
						<?
							$payFoundsTitles = [
								"«РГС - Золото»",
								"«РГС – Мировые технологии»",
								"«Управление Сбережениями - Германия»",
								"«Управление Сбережениями - Азия»",
								"«Управление Сбережениями - Долговые рынки развитых стран» ",
								"«РГС – Акции»"
							];
							$count = 6;
							if($tablePort){
								$count = 4;
							}
							if($mobile){
								$count = 3;
							}
							for ($i=0;$i<$count;$i++){
						?>

						<a href="#" class="pay-founds__item">
							<div class="pay-founds__item-title"><?=$payFoundsTitles[$i]?></div>
							<div class="pay-founds__item-text">Открытый паевой инвестиционный фонд смешанных инвестиций</div>
						</a>
						<?}?>
					</div>
					<div class="hide" data-pay-fonds-hidden><?/*скрытые фонды*/?>
						<?
							$payFoundsHiddenTitles = [
								"«РГС - Золото»2",
								"«РГС – Мировые технологии»2",
								"«Управление Сбережениями - Германия»2",
								"«Управление Сбережениями - Азия»2",
								"«Управление Сбережениями - Долговые рынки развитых стран»2",
								"«РГС – Акции»2"
							];
							for ($i=0;$i<count($payFoundsHiddenTitles);$i++){
						?>

						<a href="#" class="pay-founds__item" data-pay-fonds-hidden-item>
							<div class="pay-founds__item-title"><?=$payFoundsHiddenTitles[$i]?></div>
							<div class="pay-founds__item-text">Открытый паевой инвестиционный фонд смешанных инвестиций</div>
						</a>
						<?}?>
					</div>
				</div>
			</div>
			<a href="javascript:void(0);" class="more-btn _bottom" data-pay-fonds-more-btn></a>
		</div>
		<div class="b-blocks">
			<div class="b-block animation__top pay-founds__files" data-animation>
				<div class="grid__inner">
					<h2>Полезные документы</h2>
					<div class="files">
						<a href="#" class="file">
							<div class="file__inner">
								<div class="file__name">Тарифы по оплате услуг, предоставляемых физическим лицам</div>
								<div class="file__props">PDF, 450.96KB</div>
							</div>
						</a>
						<a href="#" class="file">
							<div class="file__inner">
								<div class="file__name">Вопросник для физических лиц</div>
								<div class="file__props">DOC, 70.42KB</div>
							</div>
						</a>
						<a href="#" class="file">
							<div class="file__inner">
								<div class="file__name">Вопросник для физических лиц</div>
								<div class="file__props">DOC, 70.42KB</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<div class="b-block questions animation__top" data-animation>
				<div class="grid__inner">
					<h2>Остались вопросы?</h2>
					<div class="questions__items" data-questions>
						<?
							$answer = 'ПИФ (паевой инвестиционный фонд) — современный финансовый инструмент, представляющий собой форму коллективных инвестиций.
							 ПИФ можно представить в виде «денежного мешка», куда складываются деньги разных вкладчиков (пайщиков).
							 Каждый вкладчик имеет определенную долю в общем «денежном мешке» (фонде) пропорциональную его вкладу.
							 Право на эту долю подтверждается именной бездокументарной ценной бумагой, которая называется «инвестиционный пай». ';
							$questions = [
								"Что такое ПИФ?",
								"Кто может открыть ИИС?",
								"Как открыть ИИС?"
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
					<div class="pay-founds__bottom">
						До приобретения паев узнать подробную информацию о паевом инвестиционном фонде, ознакомиться с правилами, а также с иными документами можно на сайте www.sv-mg.ru,
						по телефону Контакт-центра: 8-(495) 229-22-33 для Москвы; 8-800-555-22-33 для регионов, а также по адресу: 121059, Москва, ул. Киевская, д. 7.<br/>
						ООО «Управление Сбережениями». Лицензия ФСФР России № 21-000-1-00036 от 26.06.2000г. Правила ДУ зарегистрированы ФСФР России: ОПИФ акций « РГС  – Акции», №0683-94120489 от 30.11.2006. ОПИФ облигаций « РГС – Облигации», №0679-94120644 от 30.11.2006.
						ОПИФ смешанных инвестиций « РГС – Сбалансированный», №0675-94120561 от 30.11.2006. ИПИФ акций « РГС  – Перспективные инвестиции», №0706-94120408 от 14.12.2006. ОПИФ акций « РГС – Нефтегаз», №0934-94127115 от 30.08.2007.
						ОПИФ акций « РГС – Потребительский сектор», №0933-94126954 от 30.08.2007. ОПИФ акций « РГС – Электроэнергетика», №0935-94127037 от 30.08.2007.
						ОПИФ акций « РГС – Металлургия», №0932-94127190 от 30.08.2007. ОИПИФ « РГС – Индекс ММВБ», №1210-94141161 от 22.01.2008.
						Рентный ЗПИФ «Ключ» №1208-94140055 от 17.01.2008. ОПИФ фондов «РГС – Золото», №2630 от 08.08.2013. ОПИФ фондов «РГС – Мировые технологии», №2633 от 08.08.2013.<br />
						Стоимость инвестиционных паев может увеличиваться или уменьшаться, результаты инвестирования в прошлом не определяют доходы в будущем, государство не гарантирует доходность инвестиций в паевые инвестиционные фонды.
						Прежде чем приобрести инвестиционный пай, следует внимательно ознакомиться с правилами доверительного управления фондом.
						Правилами ДУ предусмотрены скидки и надбавки к расчетной стоимости пая. Взимание надбавки (скидки) уменьшает доходность инвестиций в инвестиционные паи паевых инвестиционных фондов.
					</div>
				</div>
			</div>
			<?include "../includes/news-gall.php"?>
		</div>
	</div>
<?include "../includes/footer.php"?>

