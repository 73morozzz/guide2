<!DOCTYPE html>
<html lang="ru">

	<head>
		<!-- Put this script tag to the <head> of your page -->
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?117"></script>

		<script type="text/javascript">
		VK.init({apiId: 5084356, onlyWidgets: true});
		</script>
	
	
	    <script type='text/javascript' src='js/scrollup.js'></script>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Я - Гид</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- Simple-Line-Icons-Webfont -->
		<link href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" rel="stylesheet">
		<!-- FlexSlider -->
		<link href="scripts/FlexSlider/flexslider.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.css" rel="stylesheet">
		<!-- Nivo Lightbox -->
		<link href="scripts/Nivo-Lightbox/nivo-lightbox.css" rel="stylesheet">
		<link href="scripts/Nivo-Lightbox/themes/default/default.css" rel="stylesheet">
		<!-- Style.css -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
	<div class="responsive-menu">
			<a href="" class="responsive-menu-close"><i class="icon-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->
		<header class="header">
		
			<div class="top">
				<div class="container">
					<div class="left">
						<span></span>
					</div> <!-- end .left -->
					<div class="right">
						
					</div> <!-- end .right -->
				</div> <!-- end .container -->
			</div> <!-- end .top -->
			<div class="navigation">
				<div class="container clearfix">
					<div class="logo"><a href="/main"><img src="images/logo-black.png" alt="Cuisine" class="img-responsive"></a></div> <!-- end .logo -->
					<nav class="main-nav">
						<ul class="list-unstyled">
							<li><a href="/main">Главная</a></li>
							<li><a href="/about">О нас</a></li>
							<li><a href="/cities">Города</a></li>
						</ul>
					</nav> <!-- end .main-nav -->
					<a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
				</div> <!-- end .container -->
			</div> <!-- end .navigation -->
		</header> <!-- end .header -->
		
    <?php include 'application/views/'.$content_view; ?>

		<div class="section small text-center dark transparent parallax" style="background-image: url('images/background02.jpg');">
			<div class="inner">
				<div class="container">
					<div class="call-to-action">
						<h3>Готовы к путешествиям?</h3>
						<a href="/cities" class="button solid brown">Да!</a>
					</div> <!-- end .call-to-action -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h6>Сюда забабахаем лого</h6>
						<p>оно</p>
						<p>тут </p>
						<p>будет</p>
					</div> <!-- end .col-sm-3 -->
					<div class="col-sm-3">
						<h6>Популярные города</h6>
						<p><a href="/cities">Москва</a></p>
						<p><a href="/cities">Инза</a></p>
						<p><a href="/cities">Омск</a></p>
					</div> <!-- end .col-sm-3 -->
					<div class="col-sm-3">
						<h6>Переходи быстро</h6>
						<div class="row">
							<div class="col-xs-6">
								<p><a href="/main">Главная</a></p>
								<p><a href="/about">О нас</a></p>
								<p><a href="/cities">Города</a></p>
							</div> <!-- end .col-xs-6 -->
							<!--<div class="col-xs-6">
								<p><b>07 - 23</b></p>
								<p><b>07 - 24</b></p>
								<p><b>Closed</b></p>
							</div> <!-- end .col-xs-6 -->
						</div> <!-- end .row -->
					</div> <!-- end .col-sm-3 -->
					<div class="col-sm-3">
						<h6>Путешеству с нами</h6>
						<p><a href="mailto:telikanov.alexey@gmail.com">Наша почта</a></p>
						<div class="row">
							<div class="col-xs-6">
								<p>В будущем соц.сеть</p>
								<p>Instagram</p>
							</div> <!-- end .col-xs-6 -->
							<!--<div class="col-xs-6">
								<p><b>00 1234 5678</b></p>
								<p><b>00 2345 6780</b></p>
							</div> <!-- end .col-xs-6 -->
							<div id="scrollup"><img alt="Прокрутить вверх" src="images/up.png" height="40" width="40"></div>
						</div> <!-- end .row -->
					</div> <!-- end .col-sm-3 -->
				</div> <!-- end .row -->
			</div> <!-- end .container -->
		</footer> <!-- end .footer -->

		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<!-- FlexSlider -->
		<script src="scripts/FlexSlider/jquery.flexslider-min.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Nivo Lightbox -->
		<script src="scripts/Nivo-Lightbox/nivo-lightbox.min.js"></script>
		<!-- Isotope -->
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<!-- Scripts.js -->
		<script src="js/scripts.js"></script>

	</body>
</html>