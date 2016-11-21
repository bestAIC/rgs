<?
	ob_start();
?>
	<div class="search-form__requests">
		<div class="search-form__requests-title">Предлагаемые запросы</div>
		<a href="javascript:void(0);" class="search-form__requests-item" data-requests-item="1">Кто может открыть <strong>индивидуаль</strong>ный инвестиционный счет?</a>
		<a href="javascript:void(0);" class="search-form__requests-item" data-requests-item="2">Как открыть <strong>индивидуаль</strong>ный инвестиционный счет?</a>
		<a href="javascript:void(0);" class="search-form__requests-item" data-requests-item="3">Как получить налоговый вычет на взносы по <strong>индивидуаль</strong>ному инвестиционному счету?</a>
		<a href="javascript:void(0);" class="search-form__requests-item" data-requests-item="4">Возможен ли частичный вывод средств с <strong>индивидуаль</strong>ного инвестиционного счета?</a>
		<a href="javascript:void(0);" class="search-form__requests-item" data-requests-item="5">Какие ограничения действуют в отношении <strong>индивидуаль</strong>ного инвестиционного счета?</a>
	</div>
<?
	$content = ob_get_clean();
	echo $content;
?>