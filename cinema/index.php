<?php
require_once 'config.php';
include "$domain/admin/engine/config.php";
$url = "$domain/admin/engine/database/getName.php?antikino=true";

$user_agent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36';
$ch = curl_init();

curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$sitename = curl_exec($ch);
curl_close($ch);
?>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="js/page.js"></script>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald:400,600&amp;subset=cyrillic">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
		<link rel="stylesheet" type="text/css" href="css/slick.css">
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/loader.css">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<link rel="shortcut icon" type="image/png" href="img/fav-icon.png">
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:description" content="Аренда залов для отдыха,антикинотеатр.">
		<meta property="og:image" content="img/meta.jpg">
		<meta property="og:type" content="website">
		<meta property="og:locale" content="ru_RU"/>

		<meta name="keywords" content="platformavr, platforma vr, платформа вр, платформа квесты, квесты в виртуальной реальности, квесты vr, виртуальная реальность">
		<meta name="description" content="Кинотеатр нового поколения - Сеть антикинотеатров по всей России.Всё для Вас и Вашей второй половинки.Приватность, комфортный отдых, большой выбор фильмов">

		<title>Кинотеатр нового поколения - <?php echo $sitename; ?></title>
	</head>

	<body>
		<div class="preloader">
			 <div class="cube-load">
				<div class="caption">
					<div class="cube-loader">
						<div class="cube loader-1"></div>
						<div class="cube loader-2"></div>
						<div class="cube loader-4"></div>
						<div class="cube loader-3"></div>
					</div>
				</div>
			</div>
		</div>

		<section class="header-block" id="header">
			<div class="nav-menu hidden-sm hidden-xs">
				<div class="col-md-6 text-left">
					<img class="nav-logo hidden-sm hidden-xs" src="img/menu-logotype-sm.png">
				</div>

				<div class="col-md-6 text-right">
					<a href="#price" role="scroll" class="nav-button">ЗАКАЗАТЬ ОНЛАЙН</a>
				</div>
			</div>

			<div class="col-md-12 text-center">
				<div class="col-md-6 col-md-offset-3">
					<div class="inner-block">
						<h1 style="color: white"><b>ПЕРВЫЙ АНТИКИНОТЕАТР В РОССИИ</b></h1>

						<p class="header-paragraph">ПРИВАТНОСТЬ, БАР, КОМФОРТНЫЙ ОТДЫХ, БОЛЬШОЙ ВЫБОР ФИЛЬМОВ.</p>

						<ul class="header-list">
							<div class="col-md-10 col-md-offset-1">
								<div class="col-md-6 text-center">
									<li>
										<a href="#price" role="scroll" class="list-button button-primary"><i class="fas fa-shopping-cart"></i> ЗАКАЗАТЬ ОНЛАЙН</a>
									</li>
								</div>

								<div class="col-md-6 text-center">
									<li>
										<a href="#advantages" role="scroll" class="list-button button-secondary"><i class="fas fa-info-circle"></i> Узнать подробнее</a>
									</li>
								</div>
							</div>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="advantages-block" id="advantages">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="advantages-heading">Наши преимущества</h1>
					<p class="advantages-paragraph">У нас есть несколько особенностей, благодаря которым мы отличаемся от других.</p>

					<div class="container">
						<div class="advantages-list">
							<div class="col-md-4 text-center">
								<img class="advantages-icon" src="img/icons/ekran.png">

								<h4 class="advantages-heading">РАЗВЛЕЧЕНИЯ</h4>
								<p class="advantages-description">Экраны с диагональю до 4-х метров, с разрешением FULLHD. Игровые приставки XBOX ONE и Playstation 4 c лучшими играми. Караоке с тысячами популярных песен.</p>
							</div>

							<div class="col-md-4 text-center">
								<img class="advantages-icon" src="img/icons/divan.png">

								<h4 class="advantages-heading">КОМФОРТ</h4>
								<p class="advantages-description">Удобная мягкая мебель, диваны и пуфики. Во всех залах бесплатный скоростной WI-FI. Удобное месторасположение, самый центр города.</p>	
							</div>

							<div class="col-md-4 text-center">
								<img class="advantages-icon" src="img/icons/bar.png">

								<h4 class="advantages-heading">БАР</h4>
								<p class="advantages-description">Бесплатный чай кофе, сушки и печеньки. Так же к вашим услугам бар, кальян, алкогольные напитки, закуски, фрукты, пицца, суши, роллы.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="counters-block" id="counters">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="col-md-3 text-center">
						<h3 class="counters-number">1200+</h3>
						<p class="counters-heading">Довольных посетителей</p>
					</div>

					<div class="col-md-3 text-center">
						<h3 class="counters-number">12+</h3>
						<p class="counters-heading">Городов</p>
					</div>

					<div class="col-md-3 text-center">
						<h3 class="counters-number">6+</h3>
						<p class="counters-heading">Залов в каждом</p>
					</div>

					<div class="col-md-3 text-center">
						<h3 class="counters-number">24/7</h3>
						<p class="counters-heading">Работаем круглосуточно</p>
					</div>
				</div>
			</div>
		</section>

		<section class="about-block" id="about">
			<div class="row">
				<div class="container">
					<div class="col-md-6 text-left">
						<h1 class="about-heading">Об организации</h1>
						<p class="about-description">Узнайте более подробно о нас и наших услугах.</p>
						<p class="about-paragraph"><?php echo $sitename; ?> является сетью лучших антикинотеатров в России. Наше заведение предназчено как для молодых пар, так и небольших компаний друзей. Мы занимаемся организацией свиданий и праздников под ключ.Делая заказ у нас, вы сможете посмотреть фильм на большом экране без посторонних в комфортном и приватном, атмосферно оформленном зале и устроить романтическое свидание для своей второй половинки. К Вашим услугам шесть личных залов с уникальным интерьером. В помещениях создана неповторимая уютная и теплая атмосфера. В стоимость всех залов включено оформление, мягкие игрушки и прочее!Технические аспекты наших залов: большой пятиметровый FHD экран, караоке, Xbox One Kinect.Сервис: приветливые администраторы, которые готовы ответить на все вопросы и помочь в любой ситуации. Разнообразные дополнительные услуги на ваш выбор:присутствут бар и широкий выбор яств, которые вы имеете возможность заказывать из обилия соседних ресторанов, возможность заказать профессиональную фотосессию и организацию мероприятий под любой вкус!</p>
					</div>

					<div class="col-md-6 text-right">
						<iframe class="about-video" width="100%" height="315" src="https://www.youtube.com/embed/FyCsOsi4lys?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>

		<section class="sale-block" id="sale">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="sale-heading">Отдых со скидкой</h1>
					<p class="sale-description">При заказе на сумму более, чем 3 000 руб. вам предоставляется скидка на продление аренды и последующие заказы.
					<br>
					</p>
					
					<a data-fancybox data-src="#relax-modal" href="javascript:;" target="_blank" class="sale-button"><i class="fas fa-image"></i> Обзор залов</a>
					<a href="#price" role="scroll" class="sale-button"><i class="fas fa-shopping-cart"></i> Перейти к покупке</a>
				</div>
			</div>
		</section>

		<section class="price-block" id="price">
			<div class="row">
				<div class="container">
					<div class="col-md-12 text-center">
						<h1 class="price-heading">Прайс-лист</h1>
						<p class="price-description">Прейскурант цен на все наши услуги.</p>

						<div class="col-md-4 text-center">
							<div class="price-card first-card">
								<h3 class="card-heading">«ОБЫЧНЫЙ СЕАНС»</h3>
								<center>от 299RUB/час на человека</center>
								<p class="card-description">Включено:</p>

								<ul class="card-list">
									<li><i class="fas fa-check"></i> любой фильм на выбор</li>
									<li><i class="fas fa-check"></i> сок,роллы и фрукты</li>
									<li><i class="fas fa-check"></i> игровые приставки</li>
									<li><i class="fas fa-check"></i> абсолютная приватность</li>
								</ul>

								<h3 class="card-price"><sub class="sub">от</sub> 1 399 <sub class="sub">руб.</sub></h3>

								<a data-fancybox data-src="#relax-modal" href="javascript:;" target="_blank" class="sale-button"><i class="fas fa-image"></i> Смотреть обзор</a>
								<a href="ticket.html" class="price-button"><i class="fas fa-shopping-cart"></i> Забронировать</a>
							</div>
						</div>

						<div class="col-md-4 text-center">
							<div class="price-card second-card">
								<h3 class="card-heading">«СВИДАНИЕ»</h3>
								<center>4 часа/на двоих</center>
								<p class="card-description">Включено:</p>
								<ul class="card-list">
									<li><i class="fas fa-check"></i> любой фильм на выбор</li>
									<li><i class="fas fa-check"></i> шампанское,роллы,фрукты</li>
									<li><i class="fas fa-check"></i> украшение зала</li>
									<li><i class="fas fa-check"></i> абсолютная приватность</li>
									
								</ul>

								<h3 class="card-price"><sub class="sub">от</sub> 2 999 <sub class="sub">руб.</sub></h3>

								<a data-fancybox data-src="#relax-modal" href="javascript:;" target="_blank" class="sale-button"><i class="fas fa-image"></i> Смотреть обзор</a>
								<a href="ticket2.html" class="price-button"><i class="fas fa-shopping-cart"></i> Забронировать</a>
							</div>
						</div>

						<div class="col-md-4 text-center">
							<div class="price-card third-card">
								<h3 class="card-heading">«КОМПАНИЯ»</h3>
								<center>4 часа/до 8 человек</center>
								<p class="card-description">Включено:</p>

								<ul class="card-list">
									<li><i class="fas fa-check"></i> любое кино, караоке,</li>
									<li><i class="fas fa-check"></i> 3 большие пиццы</li>
									<li><i class="fas fa-check"></i> сок,роллы и фрукты</li>
									<li><i class="fas fa-check"></i> игровые приставки</li>
								</ul>

								<h3 class="card-price"><sub class="sub">от</sub> 4 499 <sub class="sub">руб.</sub></h3>

								<a data-fancybox data-src="#relax-modal" href="javascript:;" target="_blank" class="sale-button"><i class="fas fa-image"></i> Смотреть обзор</a>
								<a href="ticket3.html" class="price-button"><i class="fas fa-shopping-cart"></i> Забронировать</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contacts-block" id="contacts">
			<div class="row">
				<div class="container">
					<div class="col-md-12 text-center">
						<div class="col-md-4">
							<h3 class="contacts-heading"><i class="fas fa-phone"></i> Телефон</h3>
							<p class="contacts-description"><a href="tel:+7 (961) 011-15-51" class="contacts-link">+7(931)-346-1507</a></p>
						</div>

						<div class="col-md-4">
							<h3 class="contacts-heading"><i class="fas fa-map-marker-alt"></i> Адрес офиса</h3>
							<p class="contacts-description">г. Москва, ул. Никольская, д. 19</p>
						</div>

						<div class="col-md-4">
							<h3 class="contacts-heading"><i class="fas fa-envelope"></i> Эл. почта</h3>
							<p class="contacts-description"><a <?php echo 'href="mailto:support:'.$sitename.'.ru"'; ?> class="contacts-link">support@<?php echo $sitename; ?>.ru</a></p>
						</div>
					</div>
				</div>
			</div>

			<p class="text-center" style="margin-bottom: 20px;">Нажмите на метку, чтобы узнать адрес и режим работы.</p>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac511f2a8db9abdb4cdc2779455597c1c985a9cb478b1d509edc2e61dc89ab340&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
		</section>

		<section class="footer-block" id="footer">
			<div class="row">
				<div class="container">
					<div class="col-md-12 text-center">
						<div class="col-md-6 col-md-offset-3">
							<img class="footer-logo" src="img/menu-logotype-sm.png">

							<p class="footer-description">© <?php echo $sitename; ?>, 2016 — 2018.<br>Все права защищены.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="modal-block" id="relax-modal">
			<a href="img/modal-1.jpg" data-fancybox="images">
				<img src="img/modal-1.jpg" class="modal-image">
			</a>

			<a href="img/modal-2.jpg" data-fancybox="images">
				<img src="img/modal-2.jpg" class="modal-image">
			</a>

			<a href="img/modal-3.jpg" data-fancybox="images">
				<img src="img/modal-3.jpg" class="modal-image">
			</a>
			
			<a href="img/modal-4.jpg" data-fancybox="images">
				<img src="img/modal-4.jpg" class="modal-image">
			</a>
			
			<a href="img/modal-5.jpg" data-fancybox="images">
				<img src="img/modal-5.jpg" class="modal-image">
			</a>
			
			<a href="img/modal-6.jpg" data-fancybox="images">
				<img src="img/modal-6.jpg" class="modal-image">
			</a>
			
			<a href="img/modal-7.jpg" data-fancybox="images">
				<img src="img/modal-7.jpg" class="modal-image">
			</a>
			
			<a href="img/modal-8.jpg" data-fancybox="images">
				<img src="img/modal-8.jpg" class="modal-image">
			</a>
			
			<a href="img/modal-9.jpg" data-fancybox="images">
				<img src="img/modal-9.jpg" class="modal-image">
			</a>
			
			<a href="img/modal-10.jpg" data-fancybox="images">
				<img src="img/modal-10.jpg" class="modal-image">
			</a>
		</div>

		<script type="text/javascript">
			$(document).ready(function() {
				setTimeout(function() {
					$(".preloader").fadeOut(1000);
				}, 1500);
			});
		</script>
	<!-- BEGIN JIVOSITE CODE {literal} -->
<?php
echo "
<script type='text/javascript'>
         (function(){ var widget_id = ".JIVO_ID.";var d=document;var w=window;function l(){
           var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
           s.src = '//code.jivosite.com/script/widget/'+widget_id
             ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
           if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
           else{w.addEventListener('load',l,false);}}})();
</script>
";
?>
<!-- {/literal} END JIVOSITE CODE -->	</body>
</html>