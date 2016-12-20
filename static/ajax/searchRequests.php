<?
	ob_start();
?>
	<div class="header__search-form-requests">
		<a href="/static/search.php" class="header__search-form-request"><strong>Креди</strong>т наличными</a>
		<a href="/static/search.php" class="header__search-form-request"><strong>Креди</strong>т под залог недвижимости</a>
		<a href="/static/search.php" class="header__search-form-request"><strong>Креди</strong>тная программа</a>
	</div>
<?
	$content = ob_get_clean();
	echo $content;
?>