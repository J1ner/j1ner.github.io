<?php
require_once 'config.php';
include "$domain/admin/engine/config.php";
$url = "$domain/admin/engine/database/getName.php?vr=true";

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

		<meta property="og:title" content=<?php echo '"'.$sitename.'"'?>>
		<meta property="og:description" content="Командные квесты в виртуальной реальности.">
		<meta property="og:image" content="img/meta.jpg">
		<meta property="og:type" content="website">
		<meta property="og:locale" content="ru_RU"/>

		<meta name="keywords" content="квесты в виртуальной реальности, квесты vr, виртуальная реальность">
		<meta name="description" content=<?php echo '"'.$sitename.' — командные квесты в виртуальной реальности, впервые в России! Получите незабываемое удовольствие от прохождения заданий в игровом мире совместно со своими друзьями."'; ?>>

		<title><?php echo $sitename; ?> — квесты в виртуальной реальности</title>
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
					<a href="#price" role="scroll" class="nav-button">Купить билеты</a>
				</div>
			</div>

			<div class="col-md-12 text-center">
				<div class="col-md-6 col-md-offset-3">
					<div class="inner-block">
						<img class="header-logo" src="img/header-logotype.png">

						<p class="header-paragraph">Впервые в России — командные квесты в виртуальной реальности! Получите незабываемое удовольствие от прохождения заданий в игровом мире совместно с дружной командой.</p>

						<ul class="header-list">
							<div class="col-md-10 col-md-offset-1">
								<div class="col-md-6 text-center">
									<li>
										<a href="#price" role="scroll" class="list-button button-primary"><i class="fas fa-shopping-cart"></i> Приобрести билеты</a>
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
								<img class="advantages-icon" src="img/icons/easy.svg">

								<h4 class="advantages-heading">Простота</h4>
								<p class="advantages-description">Для участия в квесте потребуется только установка модуля виртуальной реальности, который не доставляет никакого дискомфорта.</p>
							</div>

							<div class="col-md-4 text-center">
								<img class="advantages-icon" src="img/icons/function.svg">

								<h4 class="advantages-heading">Функциональность</h4>
								<p class="advantages-description">Устройства последнего поколения и высшего качества позволят полностью окунуться в виртуальный мир без дополнительных условий.</p>
							</div>

							<div class="col-md-4 text-center">
								<img class="advantages-icon" src="img/icons/multi.svg">

								<h4 class="advantages-heading">Мультивыбор</h4>
								<p class="advantages-description">Для выбора доступен большой арсенал сеансов, который придётся по душе абсолютно каждому посетителю нашего уникального зала.</p>
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
						<h3 class="counters-number">200+</h3>
						<p class="counters-heading">Посетителей</p>
					</div>

					<div class="col-md-3 text-center">
						<h3 class="counters-number">9</h3>
						<p class="counters-heading">Сеансов</p>
					</div>

					<div class="col-md-3 text-center">
						<h3 class="counters-number">4</h3>
						<p class="counters-heading">Зала</p>
					</div>

					<div class="col-md-3 text-center">
						<h3 class="counters-number">12</h3>
						<p class="counters-heading">Режимов</p>
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
						<p class="about-paragraph">Практически в каждом большом городе сейчас существуют обычные квест-комнаты с сюжетами, головоломками, тайнами и основной задачей — выбраться. Однако, рынок развлечений не стоит на месте и уже сейчас появился первый командный квест виртуальной реальности, разработанный командой <?php echo $sitename ?> с использованием очков виртуальной реальности. Испробуйте первым в своем городе!</p>
					</div>

					<div class="col-md-6 text-right">
						<iframe class="about-video" width="100%" height="315" src="https://www.youtube.com/embed/hQIRKbn3EXs?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>

		<section class="sale-block" id="sale">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="sale-heading">Отдых со скидкой</h1>
					<p class="sale-description">При заказе на сумму более, чем 3 000 руб. вам предоставляется скидка на услугу аренды комнаты отдыха.
					<br>В ней вы сможете почувствовать себя максимально комфортно и получить всевозможное удовольствие.
					</p>
					
					<a data-fancybox data-src="#relax-modal" href="javascript:;" target="_blank" class="sale-button"><i class="fas fa-image"></i> Обзор комнаты</a>
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
								<h3 class="card-heading">Сеанс  «Прибытие»</h3>
								<p class="card-description">Станьте одной командой против вражеского космического мира.</p>

								<ul class="card-list">
									<li><i class="fas fa-check"></i> Заброшенная обстановка</li>
									<li><i class="fas fa-check"></i> Головокружительная высота</li>
									<li><i class="fas fa-check"></i> Контрольные точки</li>
								</ul>

								<h3 class="card-price"><sub class="sub">от</sub> 2 000 <sub class="sub">руб.</sub></h3>

								<a href="https://youtu.be/SqJ2NlUEzG4" target="_blank" class="watch-button"><i class="fas fa-video"></i> Смотреть обзор</a>
								<a href="ticket.html" class="price-button"><i class="fas fa-shopping-cart"></i> Забронировать</a>
							</div>
						</div>

						<div class="col-md-4 text-center">
							<div class="price-card second-card">
								<h3 class="card-heading">Сеанс  «Отравитель»</h3>
								<p class="card-description">Решайте загадки на сообразительность и логику, бросайте вызов интуиции. </p>

								<ul class="card-list">
									<li><i class="fas fa-check"></i> Логические задачи</li>
									<li><i class="fas fa-check"></i> Загадочные ситуации</li>
									<li><i class="fas fa-check"></i> Индивидуальные решения</li>
								</ul>

								<h3 class="card-price"><sub class="sub">от</sub> 2 000 <sub class="sub">руб.</sub></h3>

								<a href="https://youtu.be/kKQmMy7cUWw" target="_blank" class="watch-button"><i class="fas fa-video"></i> Смотреть обзор</a>
								<a href="ticket.html" class="price-button"><i class="fas fa-shopping-cart"></i> Забронировать</a>
							</div>
						</div>

						<div class="col-md-4 text-center">
							<div class="price-card third-card">
								<h3 class="card-heading">Сеанс  «Матч»</h3>
								<p class="card-description">Устройте мясорубку или поделитесь на команды и удерживайте позиции.</p>

								<ul class="card-list">
									<li><i class="fas fa-check"></i> Командный бой</li>
									<li><i class="fas fa-check"></i> Удержание точек</li>
									<li><i class="fas fa-check"></i> Разнообразное оружие</li>
								</ul>

								<h3 class="card-price"><sub class="sub">от</sub> 2 000 <sub class="sub">руб.</sub></h3>

								<a href="https://youtu.be/wkb-GrvTt2c" target="_blank" class="watch-button"><i class="fas fa-video"></i> Смотреть обзор</a>
								<a href="ticket.html" class="price-button"><i class="fas fa-shopping-cart"></i> Забронировать</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="reviews-block" id="reviews">
			<div class="row">
				<div class="container">
					<div class="col-md-12 text-center">
						<h1 class="reviews-heading">Отзывы клиентов</h1>
						<p class="reviews-description">Наши посетители оставили свое мнение о нас.</p>

						<div class="col-md-8 col-md-offset-2">
							<div class="reviews-container">
								<div class="review-card">
									<div class="review-quote">
										<i class="fas fa-quote-left"></i>
									</div>

									<p class="review-text">
										Вчера были на тесте игры, впечатлений просто масса! Идея сама по себе довольно необычная, я лично впервые столкнулся с возможностью пройти квест в VR. Здесь можно и нужно провести время с друзьями - не пожалеете, это просто слов не хватает, как круто! Новые впечатления и интенсивная тренировка навыка работы в команде обеспечены
									</p>

									<div class="review-quote">
										<i class="fas fa-quote-right"></i>
									</div>

									<div class="review-info">
										<img class="review-avatar" src="https://sun1-6.userapi.com/c824501/v824501609/168dae/2xXioACVfmY.jpg?ava=1">
										<p class="review-name text-left">Сергей Кужукалов</p>
									</div>
								</div>

								<div class="review-card">
									<div class="review-quote">
										<i class="fas fa-quote-left"></i>
									</div>

									<p class="review-text">
										Вы когда-нибудь летали по открытому космосу или устраивали там перестрелку? Я вчера и летала и стреляла, и это было безумно круто. Мы с девочками посетили ооочень интересный квест в виртуальной реальности, много новых ощущений, масса впечатлений, я такого не ожидала. Так что, если есть такие, кто думает идти или нет, смело скажу, идите, а кто не задумывался, задумайтесь. Это того стоило!!!!! Спасибо организаторам, зовите еще)) 
									</p>

									<div class="review-quote">
										<i class="fas fa-quote-right"></i>
									</div>

									<div class="review-info">
										<img class="review-avatar" src="https://pp.userapi.com/c846018/v846018245/91fcc/d4URWJ4Y_Rk.jpg?ava=1">
										<p class="review-name">Юлия Демидова</p>
									</div>
								</div>

								<div class="review-card">
									<div class="review-quote">
										<i class="fas fa-quote-left"></i>
									</div>

									<p class="review-text">
										Спасибо команде <?php echo $sitename ?>, за предоставленную возможность попробовать пройти этот квест. Играли вдвоем, в первый раз. Квест рассчитан а командную игру, без этого не пройти его! В итоге нам все понравилось, будем ждать новых игр и придём к Вам ещё)
									</p>

									<div class="review-quote">
										<i class="fas fa-quote-right"></i>
									</div>

									<div class="review-info">
										<img class="review-avatar" src="https://pp.userapi.com/c845324/v845324024/828d7/vavZWD2gg04.jpg?ava=1">
										<p class="review-name">Артем Мальшенко</p>
									</div>
								</div>

								<div class="review-card">
									<div class="review-quote">
										<i class="fas fa-quote-left"></i>
									</div>

									<p class="review-text">
										Посетили этот квест и это было наше первое знакомство с квестами виртуальной реальности.Поначалу мы скептически относились ко всему происходящему,но сняв очки мы поняли как это было здорово! Квест очень захватывающий,на адаптацию уходит минут 7-10, дальше вы полностью в игре. Сюжет и задания интересные,вы играете в команде,так что скучно точно не будет.Рекомендую всем тем,кто хочет разнообразить свой досуг, впечатлений будет масса, это гарантировано!)
									</p>

									<div class="review-quote">
										<i class="fas fa-quote-right"></i>
									</div>

									<div class="review-info">
										<img class="review-avatar" src="https://pp.userapi.com/c633420/v633420089/30d80/FqLmFmxSPFk.jpg?ava=1">
										<p class="review-name">Екатерина Кошелева</p>
									</div>
								</div>

								<div class="review-card">
									<div class="review-quote">
										<i class="fas fa-quote-left"></i>
									</div>

									<p class="review-text">
										На днях посетил с девушкой этот квест! Он оказался ничем не хуже, обычных квестов, которых в нашем городе полным полно. Нам очень понравился сюжет (p.s.: говорят, там несколько сюжетных линий, поэтому этот квест можно проходить не один раз). Атмосфера очень захватывает, полностью погружается в происходящее вокруг тебя. Кроме того, <?php echo $sitename ?> дает отличную возможность для тимбилдинга, так как все задания и головоломки в квесте требуют слаженной групповой работы.
									</p>

									<div class="review-quote">
										<i class="fas fa-quote-right"></i>
									</div>

									<div class="review-info">
										<img class="review-avatar" src="https://pp.userapi.com/c846323/v846323797/396d1/bko6XVO5W-0.jpg?ava=1">
										<p class="review-name">Богдан Марчанский</p>
									</div>
								</div>

								<div class="review-card">
									<div class="review-quote">
										<i class="fas fa-quote-left"></i>
									</div>

									<p class="review-text">
										В полном восторге от VR квеста "Отравитель". Очки обеспечивают полное погружение в виртуальную реальность. Решая не всегда лёгкие задачки, и проходя уровень за уровнем, мы успешно решили задачу. Хотя бы раз, вы должны попробовать VR квест! Хочется стереть себе память и пройти его снова, 10 из 10 однозначно!))
									</p>

									<div class="review-quote">
										<i class="fas fa-quote-right"></i>
									</div>

									<div class="review-info">
										<img class="review-avatar" src="https://pp.userapi.com/c847121/v847121527/6fcfa/q3So9pqY7Ck.jpg?ava=1">
										<p class="review-name">Анна Воронова</p>
									</div>
								</div>
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
							<p class="contacts-description"><a href="tel:+7 (961) 011-15-51" class="contacts-link">+7 (961) 011-15-51</a></p>
						</div>

						<div class="col-md-4">
							<h3 class="contacts-heading"><i class="fas fa-map-marker-alt"></i> Адрес офиса</h3>
							<p class="contacts-description">г. Москва, ул. Никольская, д. 19</p>
						</div>
					</div>
				</div>
			</div>

			<p class="text-center" style="margin-bottom: 20px;">Нажмите на метку, чтобы узнать адрес и режим работы.</p>

			<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A267b5949ade7a66482e857c14bf08988c20fb866fe4f91585415c33861b98efc&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
		</section>

		<section class="footer-block" id="footer">
			<div class="row">
				<div class="container">
					<div class="col-md-12 text-center">
						<div class="col-md-6 col-md-offset-3">
							<img class="footer-logo" src="img/menu-logotype-sm.png">

							<p class="footer-description">© <?php echo $sitename ?>, 2016 — 2019.<br>Все права защищены.</p>
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
		</div>

		<script type="text/javascript">
			$(document).ready(function() {
				setTimeout(function() {
					$(".preloader").fadeOut(1000);
				}, 1500);
			});
		</script>
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
	</body>
</html>