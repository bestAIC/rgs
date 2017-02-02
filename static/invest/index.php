<?include "../includes/header.php"?>
	<div class="inner deposit">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/invest/Investments.png');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Инвестиции с РГС-Банком</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Инвестиции с РГС-Банком</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<div class="b-block animation__top invest-nav page-nav" data-animation>
				<div class="grid__inner">
					<div class="page-nav__row">
						<div class="page-nav__row-col">
							<a href="#" class="page-nav__item _big invest-nav__iis">
								<div class="page-nav__item-title">
									Индивидуальный<br />инвестиционный счёт
								</div>
								<div class="page-nav__item-text">
									Дополнительные 13% гарантированной
									доходности от государства
								</div>
							</a>
						</div>
						<div class="page-nav__row-col _items">
							<a href="#" class="page-nav__item">
								<div class="page-nav__item-ico _base _insurance"></div>
								<div class="page-nav__item-title">
									Инвестиционное
									страхование жизни
								</div>
								<div class="page-nav__item-text">
									Доход + гарантия возврата 100% вложенных средств при любых рыночных условиях
								</div>
							</a>
							<a href="#" class="page-nav__item">
								<div class="page-nav__item-ico _base _depository"></div>
								<div class="page-nav__item-title">
									Депозитарий
								</div>
								<div class="page-nav__item-text">
									Готовые инвестиционные решения на основе Российских и Зарубежных ценных бумаг
								</div>
							</a>
						</div>
					</div>
					<div class="page-nav__row">
						<a href="#" class="page-nav__item invest-nav__pay">
							<div class="invest-nav__pay-img"></div>
							<div class="page-nav__item-title">
								Паевые инвестиционные фонды
							</div>
							<div class="page-nav__item-text no-mob-block">
								Доступ к инвестиционным возможностям российского фондового рынка с помощью паевых инвестиционных фондов под управлением ООО «Управление Сбережениями»
							</div>
							<div class="page-nav__item-text is-mob-block">
								Доступ к инвестиционным возможностям российского фондового рынка с помощью паевых ...
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="b-block animation__top" data-animation>
				<div class="grid__inner">
					<h2>Как распорядиться средствами?</h2>
					<div class="invest-calc" data-invest-calc>
						<form action="/static/ajax/investCalcData.php">
							<div class="invest-calc__start" data-invest-calc-step="start">
								<div class="invest-calc__start-title">Определите, какая стратегия инвестирования подходит именно Вам!</div>
								<div class="invest-calc__start-img"></div>
								<a href="javascript:void(0);" class="invest-calc__start-btn btn" data-invest-calc-goto="question1">НАЧАТЬ ТЕСТ</a>
							</div>


							<div class="invest-calc__question hide" data-invest-calc-step="question1">
								<div class="invest-calc__question-counter">1 / 5</div>
								<div class="invest-calc__question-title">
									Как бы вы сформулировали свою главную цель от вложений?
								</div>
								<div class="invest-calc__question-answers">
									<label class="invest-calc__question-answer"><input  type="radio"  data-invest-calc-answer name="question1" value="5">Сохранение вложенных средств</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question1" value="4">Получение % для использования</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question1" value="3">Капитализация % к сумме вложений</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question1" value="2">Получение повышенных % в конце срока</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question1" value="1">Максимальный прирост вложенных средств</label>
								</div>
								<div class="invest-calc__question-btns">
									<a href="javascript:void(0);" data-invest-calc-goto="start" class="invest-calc__question-btn btn _back">НАЗАД</a>
									<a href="javascript:void(0);" data-invest-calc-goto="question2"  data-invest-calc-question-btn class="invest-calc__question-btn btn _disabled">СЛЕДУЮЩИЙ ВОПРОС</a>
								</div>
							</div>
							<div class="invest-calc__question hide" data-invest-calc-step="question2">
								<div class="invest-calc__question-counter">2 / 5</div>
								<div class="invest-calc__question-title">
									Когда вы намереваетесь изымать (полностью или частично) вложенные средства?
								</div>
								<div class="invest-calc__question-answers">
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question2" value="3">Вложенные средства потребуются мне по истечении одного года</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question2" value="2">Вложенные средства потребуются мне через один - три года</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question2" value="1">Я не буду испытывать нужду во вложенных средствах в ближайшие три года</label>
								</div>
								<div class="invest-calc__question-btns">
									<a href="javascript:void(0);" data-invest-calc-goto="question1" class="invest-calc__question-btn btn _back">НАЗАД</a>
									<a href="javascript:void(0);" data-invest-calc-goto="question3" data-invest-calc-question-btn class="invest-calc__question-btn btn _disabled">СЛЕДУЮЩИЙ ВОПРОС</a>
								</div>
							</div>
							<div class="invest-calc__question hide" data-invest-calc-step="question3">
								<div class="invest-calc__question-counter">3 / 5</div>
								<div class="invest-calc__question-title">
									Как бы вы оценили ваши знания в области инвестиций?
								</div>
								<div class="invest-calc__question-answers">
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question3" value="12">Слабые</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question3" value="9">Удовлетворительные</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question3" value="6">Хорошие</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question3" value="3">Отличные</label>
								</div>
								<div class="invest-calc__question-btns">
									<a href="javascript:void(0);" data-invest-calc-goto="question2" class="invest-calc__question-btn btn _back">НАЗАД</a>
									<a href="javascript:void(0);" data-invest-calc-goto="question4" data-invest-calc-question-btn class="invest-calc__question-btn btn _disabled">СЛЕДУЮЩИЙ ВОПРОС</a>
								</div>
							</div>
							<div class="invest-calc__question hide" data-invest-calc-step="question4">
								<div class="invest-calc__question-counter">4 / 5</div>
								<div class="invest-calc__question-title">
									Вы потратили 900 рублей, чтобы купить счастливый лотерейный билет. Какой приз вы выберете?
								</div>
								<div class="invest-calc__question-answers">
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question4" value="7">1 000 наличными</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question4" value="5">возможность выиграть 2 000 с вероятностью 77%</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question4" value="3">возможность выиграть 4 000 с вероятностью 50%</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question4" value="1">возможность выиграть 10 000 с вероятностью 25%</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question4" value="0">возможность выиграть 100 000 с вероятностью 0.05%</label>
								</div>
								<div class="invest-calc__question-btns">
									<a href="javascript:void(0);" data-invest-calc-goto="question3" class="invest-calc__question-btn btn _back">НАЗАД</a>
									<a href="javascript:void(0);" data-invest-calc-goto="question5" data-invest-calc-question-btn class="invest-calc__question-btn btn _disabled">СЛЕДУЮЩИЙ ВОПРОС</a>
								</div>
							</div>
							<div class="invest-calc__question hide" data-invest-calc-step="question5">
								<div class="invest-calc__question-counter">5 / 5</div>
								<div class="invest-calc__question-title">
									Выберите один из предложенных вариантов:
								</div>
								<div class="invest-calc__question-answers">
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question5" value="6">купить продукт, который гарантированно принесет 10 000 рублей</label>
									<label class="invest-calc__question-answer"><input type="radio"  data-invest-calc-answer name="question5" value="3">купить продукт, который с 90%-ной вероятностью принесет 30 000 и с 10%-ной вероятностью не принесет ничего.</label>
								</div>
								<div class="invest-calc__question-btns">
									<a href="javascript:void(0);" data-invest-calc-goto="question4" class="invest-calc__question-btn btn _back">НАЗАД</a>
									<a href="javascript:void(0);" data-invest-calc-goto="result" data-invest-calc-question-btn class="invest-calc__question-btn btn _disabled">Получить результат</a>
								</div>
							</div>
							<div class="invest-calc__result hide" data-result data-invest-calc-step="result">
								<div class="invest-calc__result-title">Результат:</div>
								<div class="invest-calc__result-text" data-result-text>

								</div>
								<div class="invest-calc__result-block">
									<div class="invest-calc__result-main">
										<div class="invest-calc__result-sum">
											<div class="invest-calc__result-sum-title">Сумма взноса</div>
											<div class="invest-calc__result-sum-field">
												<input type="text" value="1 440 000" data-invest-calc-sum>
												<span class="rub"></span>
											</div>
										</div>
										<div class="invest-calc__result-distribution">
											<div class="invest-calc__result-distribution-title">Рекомендованный портфель:</div>
											<div class="invest-calc__result-distribution-items">
												<div class="invest-calc__result-distribution-item">
													<div class="invest-calc__result-distribution-item-val" data-result-deposit>60%</div>
													<div class="invest-calc__result-distribution-item-title">ДЕПОЗИТ</div>
												</div>
												<div class="invest-calc__result-distribution-item">
													<div class="invest-calc__result-distribution-item-val" data-result-insurance>25%</div>
													<div class="invest-calc__result-distribution-item-title">ИСЖ</div>
												</div>
												<div class="invest-calc__result-distribution-item">
													<div class="invest-calc__result-distribution-item-val" data-result-iis></div>
													<div class="invest-calc__result-distribution-item-title">ИИС</div>
												</div>
												<?/*div class="invest-calc__result-distribution-item">
													<div class="invest-calc__result-distribution-item-val">5%</div>
													<div class="invest-calc__result-distribution-item-title">НСЖ</div>
												</div*/?>
											</div>
										</div>
									</div>
									<div class="invest-calc__result-chart"  data-invest-calc-chart>
										
									</div>
								</div>
								<div class="invest-calc__result-bottom">
									<a href="javascript:void(0);" data-invest-calc-reset data-invest-calc-goto="question1" class="btn">НАЧАТЬ СНАЧАЛА</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?include "../includes/news-gall.php"?>
		</div>
	</div>
<?include "../includes/footer.php"?>

