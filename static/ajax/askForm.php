
<? ob_start(); ?>
	<ul>
		<li>Неверно введены символы с картинки</li>
		<li>Не заполнены следующие обязательные поля: Фамилия Имя Отчество</li>
		<li>Не заполнены следующие обязательные поля: Электронный адрес</li>
		<li>Не заполнены следующие обязательные поля: Введите сообщение</li>
	</ul>

<? $errors = ob_get_clean(); ?>

<?
	$arr = array(
		'errors'	=> $errors
	);
	echo json_encode($arr)
?>