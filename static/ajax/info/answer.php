<?
	ob_start();
?>
<div class="home__info-answer">
	<a href="javascript:void(0);" class="home__info-answer-close" data-answer-close></a>
	<div class="home__info-answer-inner">
		<div class="home__info-answer-block">
			<div class="home__info-answer-title">Кто может открыть индивидуальный инвестиционный счет?</div>
			<ul>
				<li>ИИС может открыть любое физическое лицо – налоговый резидент РФ.</li>
				<li>Открыть ИИС может как новый, так и действующий клиент, заключивший с банком договор на брокерское обслуживание.</li>
			</ul>
		</div>
		<div class="home__info-answer-bottom">
			<div class="home__info-answer-more">
				<a href="#" class="home__info-answer-more-link">Подробнее об ИИС</a>
			</div>
			<div class="home__info-answer-form">
				<form action="">
					<div class="home__info-answer-form-title">Вам помог этот ответ?</div>
					<div class="home__info-answer-form-btns">
						<label class="home__info-answer-form-btn"><span class="rel">Да</span> <input type="radio" name="answerStatus"></label>
						<label class="home__info-answer-form-btn"><span class="rel">Нет</span> <input type="radio" name="answerStatus"></label>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?
	$content = ob_get_clean();
	echo $content;
?>