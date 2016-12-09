<?
	ob_start();
?>
<div class="info-center__answer">
	<a href="javascript:void(0);" class="info-center__answer-close" data-answer-close></a>
	<div class="info-center__answer-inner">
		<div class="info-center__answer-block">
			<div class="info-center__answer-title">Кто может открыть индивидуальный инвестиционный счет?</div>
			<ul>
				<li>ИИС может открыть любое физическое лицо – налоговый резидент РФ.</li>
				<li>Открыть ИИС может как новый, так и действующий клиент, заключивший с банком договор на брокерское обслуживание.</li>
			</ul>
		</div>
		<div class="info-center__answer-bottom">
			<div class="info-center__answer-more">
				<a href="#" class="info-center__answer-more-link">Подробнее об ИИС</a>
			</div>
			<div class="info-center__answer-form">
				<form action="">
					<div class="info-center__answer-form-title">Вам помог этот ответ?</div>
					<div class="info-center__answer-form-btns">
						<label class="info-center__answer-form-btn"><span class="rel">Да</span> <input type="radio" name="answerStatus"></label>
						<label class="info-center__answer-form-btn"><span class="rel">Нет</span> <input type="radio" name="answerStatus"></label>
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