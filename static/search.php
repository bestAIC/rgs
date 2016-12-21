<?include "includes/header.php"?>
	<div class="inner">
		<div class="inner__banner" style="background-image: url('/static/theme/images/inner/banner.jpg');">
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Результаты поиска</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Результаты поиска</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="search">
			<div class="grid__inner">
				<div class="search__title">По запросу <span>«Кредит наличными»</span> найдено 28 результатов</div>
				<div class="search__results">
					<?for ($i=1;$i<=2;$i++){?>
						<div class="search__results-item">
							<a href="#" class="search__results-item-title">Что выгоднее: кредитная карта или кредит наличными?</a>
							<div class="search__results-item-text">
								... на значительную сумму, и при этом с большой долей вероятности не сможет полностью погасить задолженность через 1,5 месяца, то лучше брать кредит наличными.
								Все-таки кредитная карта рассчитана на ежедневные, возможно спонтанные покупки, поездки за рубеж и прочее. Не будет же клиент брать ... <a href="#">Подробнее</a>
							</div>
						</div>
						<div class="search__results-item">
							<a href="#" class="search__results-item-title">Кредитная программа «Твои условия» РОСГОССТРАХ БАНКА вошла в топ-10 самых выгодных кредитов наличными</a>
							<div class="search__results-item-text">
								... составленном порталом Банки.ру. Для составления рейтинга учитывались кредиты наличными, выдаваемые без залога и поручительства на сумму 700 тыс. рублей ...
								... индивидуальных предпринимателей. В соответствии с условиями программы
								рублевый кредит выдается на срок от 3 месяцев до 5 лет, на сумму от 15 тыс. до 1 млн ... <a href="#">Подробнее</a>
							</div>
						</div>
					<?}?>
				</div>
				<div class="pagination search__pagination">
					<?/*a href="#" class="pagination__item pagination__btn _left">Предыдущая</a*/?>
					<span class="pagination__item">1</span>
					<a href="#" class="pagination__item">2</a>
					<a href="#" class="pagination__item">3</a>
					<a href="#" class="pagination__item">4</a>
					<a href="#" class="pagination__item pagination__btn _right">Следующая</a>
				</div>
			</div>
		</div>
	</div>
<?include "includes/footer.php"?>

