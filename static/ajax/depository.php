<?
	$visibleItemsCounter = 6;
	$mobile = isset($_COOKIE['site_viewType']) && $_COOKIE['site_viewType'] == 'isMobile';
	$tablePort = isset($_COOKIE['site_viewType']) && $_COOKIE['site_viewType'] == 'isTablePort';
	if($tablePort){
		$visibleItemsCounter = 4;
	}
	if($mobile){
		$visibleItemsCounter = 3;
	}
	if(isset($_POST['type']) && $_POST['type'] == 'news'){
		ob_start();
			for ($i=1;$i<=$visibleItemsCounter; $i++){?>
				<div class="gall__news depository__news-item">
					<div class="gall__news-inner">
						<div class="gall__news-date">29 декабря 2016</div>
						<a href="#" class="gall__news-title">
							Недоступность систем ДБО
							для физических лиц
							23.10.2016 г.
						</a>
					</div>
				</div>
			<?}
		$visibleItems = ob_get_clean();

		ob_start();
			for ($i=1;$i<=10; $i++){?>
				<div class="gall__news depository__news-item" data-depository-hidden-item>
					<div class="gall__news-inner">
						<div class="gall__news-date">29 декабря 2016</div>
						<a href="#" class="gall__news-title">
							Недоступность систем ДБО
							для физических лиц
							23.10.2016 г.
						</a>
					</div>
				</div>
			<?}
		$hiddenItems = ob_get_clean();
	}else{
		ob_start();
		for ($i=1;$i<=$visibleItemsCounter; $i++){?>
			<div class="gall__news depository__news-item">
				<div class="gall__news-inner">
					<div class="gall__news-date">29 декабря 2016</div>
					<a href="#" class="gall__news-title">
						Корпоративное действие
					</a>
				</div>
			</div>
		<?}
		$visibleItems = ob_get_clean();

		ob_start();
		for ($i=1;$i<=10; $i++){?>
			<div class="gall__news depository__news-item" data-depository-hidden-item>
				<div class="gall__news-inner">
					<div class="gall__news-date">29 декабря 2016</div>
					<a href="#" class="gall__news-title">
						Корпоративное действие
					</a>
				</div>
			</div>
		<?}
		$hiddenItems = ob_get_clean();
	}
?>


<?
	$arr = array(
		'content'	=> $visibleItems,
		'hidden'	=> $hiddenItems
	);
	echo json_encode($arr)
?>