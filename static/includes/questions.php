<div class="b-block questions">
	<div class="grid__inner">
		<h2>Остались вопросы?</h2>
		<div class="questions__items" data-questions>
			<?
				$answer = 'Заявление на перевод пенсии будет оформлено и отправлено в ПФР в электронном виде одновременно с оформлением Карты Пенсионной в офисе РОСГОССТРАХ БАНКА.';
				$questions = [
					"Как перевести пенсию на пенсионную карту РОСГОССТРАХ БАНКА?",
					"Как оформить Пенсионную Карту?",
					"Можно оформить карту будущему пенсионеру?",
					"Как рассчитывается среднемесячный остаток по счету?",
					"Когда применяется ставка 5,5% на остаток?",
					"Когда и как выплачиваются % на остаток?",
					"Что такое Кэшбэк (CashBack)?",
					"При оплате в каких магазинах, ТСП (торгово-сервисных предприятиях) я получу CashBack?",
					"Как Вы определите, что я оплатил картой именно в аптеке?",
					"Как рассчитывается CashBack?",
					"Когда и как я получу CashBack?",
					"Как я могу использовать CashBack?",
					"Получу ли я CashBack, если оплачу покупку другой (не пенсионной) картой РОСГОССТРАХ БАНКА?"
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