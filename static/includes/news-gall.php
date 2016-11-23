<div class="news-gall">
	<div class="grid__inner">
		<h2>
			<a href="javascript:void(0);" class="news-gall__tab _active" data-news-tab="promo">Акции</a> и
			<a href="javascript:void(0);" class="news-gall__tab" data-news-tab="news">новости</a>
		</h2>
		<div data-news-content="promo" class="hide">
			<?/*акции*/?>
			<?for ($i=1;$i<=2;$i++){?>
				<a href="#" class="swiper-slide gall__item gall__promo" style="background-image: url('theme/images/home/gall/1.jpg');" data-news-gall-item="promo">
					<div class="gall__promo-inner">
						<div class="gall__promo-logo">
							<img src="theme/images/home/gall/ico1.png" alt="">
						</div>
						<div class="gall__promo-title">
							Выиграйте незабываемые<br />
							путешествия на год вперед<br />
							с Visa!
						</div>
					</div>
				</a>
				<a href="#" class="swiper-slide gall__item gall__promo" style="background-image: url('theme/images/home/gall/2.jpg');"  data-news-gall-item="promo">
					<div class="gall__promo-inner">
						<div class="gall__promo-logo">
							<img src="theme/images/home/gall/ico2.png" alt="">
						</div>
						<div class="gall__promo-title">
							Выиграйте приглашение<br />
							в VIP-ложу Mastercard<br />
							на игру Чемпионата КХЛ!
						</div>
					</div>
				</a>
				<a href="#" class="swiper-slide gall__item gall__promo" style="background-image: url('theme/images/home/gall/3.jpg');"  data-news-gall-item="promo">
					<div class="gall__promo-inner">
						<div class="gall__promo-logo">
							<img src="theme/images/home/gall/ico3.png" alt="">
						</div>
						<div class="gall__promo-title">
							Скидка 5% на покупки<br />
							по карте MasterCard<br />
							в семейных гипермаркетах<br />
							«Магнит»
						</div>
					</div>
				</a>
			<?}?>
			<?/*новости*/?>
			<?for ($i=1;$i<=2;$i++){?>
				<div class="swiper-slide gall__item gall__news _flag"  data-news-gall-item="news">
					<div class="gall__news-inner">
						<div class="gall__news-date">24 октября 2016</div>
						<a href="#" class="gall__news-title">
							Недоступность систем ДБО<br />
							для физических лиц<br />
							23.10.2016 г.
						</a>
					</div>
				</div>
				<div class="swiper-slide gall__item gall__news"  data-news-gall-item="news">
					<div class="gall__news-inner">
						<div class="gall__news-date">14 октября 2016</div>
						<a href="#" class="gall__news-title">
							РОСГОССТРАХ БАНК открыл<br />
							3 новых отделения в Калужской<br />
							и Орловской областях
						</a>
					</div>
				</div>
				<div class="swiper-slide gall__item gall__news"  data-news-gall-item="news">
					<div class="gall__news-inner">
						<div class="gall__news-date">14 октября 2016</div>
						<a href="#" class="gall__news-title">
							Нерабочий день в отделениях<br />
							РОСГОССТРАХ БАНКА 23 октября<br />
							2016 года
						</a>
					</div>
				</div>
			<?}?>
		</div>
		<div class="swiper-container gall" data-news-gall data-animation>
			<div class="swiper-wrapper"  data-news-gall-slides>

			</div>
			<div class="nav gall__nav">
				<div class="nav__btn _prev" data-news-gall-prev></div>
				<div class="nav__btn _next" data-news-gall-next></div>
			</div>
		</div>
	</div>
</div>