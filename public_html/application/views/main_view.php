<div id="welcome-slider" class="welcome-slider flex-slider">
			<div class="slides clearfix">
				<div class="slide" style="background-image: url('images/background01.jpg');">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<h1>Путешествуй. Живи. Мечтай.</h1>
									<p class="button-list"><a href="login.php" class="button light">Войти</a><a href="registration.php" class="button brown solid">Зарегистрироваться</a></p>
								</div> <!-- end .col-sm-6 -->
							</div> <!-- end .row -->
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .slide -->
				<div class="slide" style="background-image: url('images/background001.jpg');">
					<div class="inner">
						<div class="container">
							<div class="row aligned-cols">
								<div class="col-sm-6 aligned-middle">
									<h1>Открывай для себя новое. </h1>
									<?php
										session_start();
										// Проверяем, пусты ли переменные логина и id пользователя
										if (empty($_SESSION['login']) or empty($_SESSION['id']))
										{
										// Если пусты, то мы не выводим ссылку 
											echo '<p class="button-list"><a href="/login" class="button light">Войти</a><a href="/registration" class="button brown solid">Зарегистрироваться</a></p>';
										}
									?>
								</div> <!-- end .col-sm-6 -->
								<div class="col-sm-6 text-right">
									<!---<div class="hours-box">
										<div class="title">Open Hours<span class="open">Open</span></div>
										<div class="clearfix"><span class="day">Monday</span><span class="hours">09 - 21</span></div>
										<div class="clearfix"><span class="day">Tuesday</span><span class="hours">09 - 21</span></div>
										<div class="clearfix"><span class="day">Wednesday</span><span class="hours">07 - 21</span></div>
										<div class="clearfix"><span class="day">THursday</span><span class="hours">07 - 21</span></div>
										<div class="clearfix"><span class="day">Friday</span><span class="hours">07 - 21</span></div>
										<div class="clearfix"><span class="day">Saturday</span><span class="hours">07 - 21</span></div>
										<div class="clearfix"><span class="day">Sundays</span><span class="hours">Closed</span></div> -->
										<!--<div class="info">Info: 00 2345 6780</div> -->
									</div> <!-- end .hours-box -->
								</div> <!-- end .col-sm-6 -->
							</div> <!-- end .row -->
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .slide -->
			</div> <!-- end .slides -->
		</div> <!-- end .welcome-slider -->

		<div class="section white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h2><small>Забудь о страхе перед открытиями</small>Расширяй свои рамки</h2>
							<p>Все города мира ждут твоего визита, тебе остается лишь найти своего Гида, который проведет по всем улочкам города и расскажет о истории и легендах этого места</p>
							<p>Забудь о нудных эксукрсиям и толпах туристов, о патраченных денегах и часах. Каждый человек, который зарегистрировался, может примерить на себе роль экскурсовода по джунглям совего города или же напротив выступить в роли отркывателя новой локации</p>
						</div> <!-- end .col-sm-6 -->
						<div class="col-sm-6">
							<img src="images/mission.jpg" alt="alt text here" class="img-responsive">
						</div> <!-- end .col-sm-6 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white">
			<div class="partial-background" style="background-image: url('images/background04.jpg');"></div>
			<div class="inner">
				<div class="container">
					<h2 class="text-center white">Места<small>Нади своего гида</small></h2>
					<div class="specialties-slider">
						<div class="specialty">
							<div class="image">
								<img src="images/specialty01.jpg" alt="alt text here" class="img-responsive">
								<div class="overlay"><a href="city.php" class="button white">See More</a></div>
							</div> <!-- end .image -->
							<h5>Волгоград</h5>
							<p>Всем известная скульптура «Родина-мать зовёт!», что возвышается на Мамаевом кургане, внесена в книгу рекордов Гиннеса в качестве самой большой статуи в мире.</p>
						</div> <!-- end .specialty -->
						<div class="specialty">
							<div class="image">
								<img src="images/specialty02.jpg" alt="alt text here" class="img-responsive">
								<div class="overlay"><a href="city.php" class="button white">See More</a></div>
							</div> <!-- end .image -->
							<h5>Санкт-петербург</h5>
							<p>Архитектура Питера настолько разнообразна, что при строительстве Михайловского или инженерного замка пришлось делать все четыре фасада здания различными.</p>
						</div> <!-- end .specialty -->
						<div class="specialty">
							<div class="image">
								<img src="images/specialty03.jpg" alt="alt text here" class="img-responsive">
								<div class="overlay"><a href="city.php" class="button white">See More</a></div>
							</div> <!-- end .image -->
							<h5>Москва</h5>
							<p>Не только столица, но и важны туристический центр Росии. А международным деловым центром является район «Москва-Сити».</p>
						</div> <!-- end .specialty -->
						<div class="specialty">
							<div class="image">
								<img src="images/specialty04.jpg" alt="alt text here" class="img-responsive">
								<div class="overlay"><a href="city.php" class="button white">See More</a></div>
							</div> <!-- end .image -->
							<h5>Ульяновск</h5>
							<p>Президенский мост является самым длинным мостов России и одним из самых длинных в Европе</p>
						</div> <!-- end .specialty -->
					</div> <!-- end .specialty-slider -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
