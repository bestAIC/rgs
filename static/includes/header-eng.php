<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>Сайт</title>
	<script src="/static/theme/js/jquery-2.2.0.min.js"></script>
	<script src="/static/theme/js/device.js"></script>
	<script src="/static/theme/js/Cookie.js"></script>
	<script src="/static/theme/js/helperSiteTypeDetect.js"></script>

	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script src="https://www.amcharts.com/lib/3/pie.js"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="/static/theme/js/swiper/dist/css/swiper.min.css">
	<link rel="stylesheet" href="/static/theme/js/chosen/chosen.css">
	<link rel="stylesheet" href="/static/theme/js/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="/static/theme/js/scrollbar/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="/static/theme/js/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="/static/theme/css/styles.css">
</head>
<body>
<?
	$mobile = isset($_COOKIE['site_viewType']) && $_COOKIE['site_viewType'] == 'isMobile';
	$tablePort = isset($_COOKIE['site_viewType']) && $_COOKIE['site_viewType'] == 'isTablePort';
	$desktop =  isset($_COOKIE['site_viewType']) && $_COOKIE['site_viewType'] == 'isDesktop';
	$desktopAndTableLand = isset($_COOKIE['site_viewType']) && ($_COOKIE['site_viewType'] == 'isDesktop' || $_COOKIE['site_viewType'] == 'isTableLand');
?>
<header class="header _eng">
	<div class="header__top">
		<div class="grid__inner header__top-inner">
			<a href="/" class="header__logo"></a>
			<a href="/" class="header__logo-ico"></a>
			<div class="header__top-right">
				<div class="header__phones">
					<div class="header__phone">
						<a href="tel:88007004040" class="header__phone-link">8 800 700 4040</a>
					</div>
					<div class="header__phone">
						<a href="tel:84959258060" class="header__phone-link">8 495 925 8060</a>
					</div>
				</div>
				<a href="#" class="header__rus-link">Русская версия сайта</a>
			</div>
		</div>
	</div>
</header>
<div class="grid">
