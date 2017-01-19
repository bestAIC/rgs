<?include "../../includes/header.php"?>
	<div class="inner deposit depository">
		<div class="inner__banner">
			<div class="inner__banner-img">
				<div class="inner__banner-img-in" style="background-image: url('/static/theme/images/banners/about.jpg');"></div>
			</div>
			<div class="inner__banner-in grid__inner">
				<div class="inner__banner-block">
					<div class="inner__banner-title">Вакансии</div>
					<div class="breadcrumbs">
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Частным клиентам</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">О Банке</a>
						</div>
						<div class="breadcrumbs__item">
							<a href="#" class="breadcrumbs__link">Вакансии</a>
						</div>
						<div class="breadcrumbs__item">
							<span>Список вакансий</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks _gray">
			<div class="b-block animation__top vacancies" data-vacancies  data-animation>
				<div class="grid__inner">
					<div class="depository__form" data-vacancies-form-block>
						<form action="/static/ajax/vacancies.php">
							<div class="depository__form-inner">
								<div class="depository__form-title">Выберите Ваш город<a href="javascript:void(0);" data-vacancies-form-toggle class="is-mob-block depository__form-toggle"></a></div>
								<?if(!$mobile){?>
									<div class="depository__form-fields" data-vacancies-form-fields>
										<div class="depository__form-field _long">
											<select data-chosen data-placeholder="Город">
												<option value="">Город</option>
												<option value="Астрахань">Астрахань</option>
												<option value="Москва">Москва</option>
											</select>
										</div>
										<button type="submit" class="btn depository__form-btn _red">ПОКАЗАТЬ</button>
									</div>
								<?}?>
							</div>
							<?if($mobile){?>
								<div class="depository__form-fields" data-vacancies-form-fields>
									<div class="depository__form-field">
										<select data-chosen data-depository-field data-placeholder="Город">
											<option value="">Город</option>
											<option value="Астрахань">Астрахань</option>
											<option value="Москва">Москва</option>
										</select>
									</div>
									<button type="submit" class="btn depository__form-btn _red">ПОКАЗАТЬ</button>
								</div>
							<?}?>
						</form>
					</div>
					<div class="vacancies__block" data-vacancies-block>
						<h2>Список актуальных вакансий</h2>
						<div class="docs vacancies__list" data-vacancies-list>
							
						</div>
					</div>
				</div>
				<div class="hide">
					<div class="b-form ask-form"  data-resume-form>
						<form action="/static/ajax/askForm.php">
							<h2>Oтправить резюме</h2>
							<div class="b-form__content">
								<div class="b-form__row">
									<div class="b-form__block">
										<div class="b-form__block-title">ФАМИЛИЯ имя отчество</div>
										<div class="b-form__block-field">
											<input type="text" placeholder="Иванов Иван Иванович">
										</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block">
										<div class="b-form__block-title">Мобильный телефон</div>
										<div class="b-form__block-field phone-inp">
											<input type="text" data-phone-mask placeholder="(495) 078-98-98 ">
										</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block">
										<div class="b-form__block-title">ЭЛЕКТРОННАЯ ПОЧТА</div>
										<div class="b-form__block-field">
											<input type="text" placeholder="ivanivanov@mail.ru">
										</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block">
										<select data-chosen  data-placeholder="Регион проживания">
											<option value="" >Регион проживания</option>
											<option value="Москва">Москва</option>
										</select>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block">
										<div class="b-form__block-title">Желаемая позиция</div>
										<div class="b-form__block-field">
											<input type="text" data-resume-form-position placeholder="">
										</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block _textarea">
										<textarea placeholder="Сопроводительный текст"></textarea>
									</div>
								</div>
								<div class="b-form__errors" data-form-errors></div>
								<div class="b-form__btn-wrap">
									<div class="btn _red b-form__btn ask-form__file" data-file>
										<span data-file-text="Приложить документ">Приложить документ</span>
										<input type="file" data-file-inp class=" b-form__file">
									</div>
									<button type="submit" class="btn _red b-form__btn _right">Отправить</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?include "../../includes/news-gall__only-news.php"?>
		</div>
	</div>
<?include "../../includes/footer.php"?>

