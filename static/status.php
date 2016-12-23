<?include "includes/header.php"?>
	<div class="inner">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/inner/banner/status.png');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Статус выполнения операции</div>
					<?/*div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Статус выполнения операции</span>
						</div>
					</div*/?>
				</div>
			</div>
		</div>
		<div class="status">
			<div class="grid__inner">
				<div class="status__block">
					<div class="status__block-in">
						<div class="status__top">
							<div class="status__ico _error <?/*если ошибка ставим класс _error*/?>"></div>
							<div class="status__top-in">
								<div class="status__title">Ошибка</div>
								<div class="status__subtitle">Авторизация отклонена</div>
							</div>
						</div>
						<div class="b-table status__table">
							<table>
								<tr>
									<td>Номер (идентификатор) заказа</td>
									<td>64848949047484</td>
								</tr>
								<tr>
									<td>Номер карты списания денежных средств</td>
									<td>5363 **** **** 5627</td>
								</tr>
								<tr>
									<td>Номер карты зачисления денежных средств</td>
									<td>5038 **** **** 1519</td>
								</tr>
								<tr>
									<td>Сумма перевода</td>
									<td> <span class="status__sum">1242,50 руб.</span></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?include "includes/footer.php"?>

