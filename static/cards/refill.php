<?include "../includes/header.php"?>
	<div class="inner deposit">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/card/Popolneniye.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Пополнение счёта</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Выбрать карту</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Пополнение счёта</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner__info animation__top"  data-animation>
			<div class="grid__inner">
				<div class="refill__title">
					<div class="refill__title-col">
						РОСГОССТРАХ БАНК предлагает удобный сервис погашения кредитов и пополнения счетов. Вы сами выбираете наиболее удобный для Вас способ оплаты!
					</div>
					<div class="refill__title-col">
						Пополнение кредита может осуществляться в любой доступной валюте, пополнение карточного счета может осуществляться только в валюте карточного счета.
					</div>
				</div>
			</div>
		</div>
		<?
			$answer = '<div class="deposit-doc__content hide" data-nav-content>
							<img class="top-img" src="/static/theme/images/inner/logo-qiwi-koshelek.png" alt="">
							<h3>Платежный сервис QIWI Погашение кредита за 1 минуту!</h3>
							<p>
								Вы можете удобно и безопасно погасить задолженность по кредитной карте
								или по кредиту наличными:
							</p>
							<ul>
								<li>В любом QIWI Терминале;</li>
								<li>На сайте электронного кошелька w.qiwi.com </li>
								<li>С мобильного. Скачайте приложение на m.qiwi.ru</li>
							</ul>
							<p class="note-text">
								Оплата осуществляется по номеру договора/счета/карты.<br/>
								Сервисный сбор: 1,6%, min 100 руб.<br/>
								Зачисление: моментально/на следующий рабочий день<br/>
								Максимальная сумма платежа 15 000 рублей.<br/>
								Служба поддержки: (8 800) 333-00-59, (+7 495) 626-52-52.
							</p>
						</div>';
			$titles= [
				"Перечисление на карту РОСГОССТРАХ БАНКА",
				"Отделения РОСГОССТРАХ БАНКА",
				"Интернет-Банк",
				"Платежи в сторонних банках",
				"Платежная система QIWI",
				"Платежная система CyberPlat",
				"Салоны «Евросеть»",
				"Салоны \"Билайн\" и \"НоуХау\"",
				"Салоны «Kari»",
				"Сервис «Золотая Корона – Погашение кредитов»"
			];
		?>
		<div class="b-blocks _gray">
			<div class="b-block animation__top" data-animation>
				<div class="grid__inner">
					<h2>Способы пополнения счета </h2>
					<div class="docs refill__docs">
						<?for ($i=0;$i<count($titles);$i++){?>
							<div class="deposit-doc" data-nav-block>
								<a href="javascript:void(0);" data-nav-btn class="deposit-doc__title"><?=$titles[$i]?></a>
								<?=$answer?>
							</div>
						<?}?>
					</div>
				</div>
			</div>
			<?include "../includes/news-gall.php"?>
		</div>
	</div>
<?include "../includes/footer.php"?>

