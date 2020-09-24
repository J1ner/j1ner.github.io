<?php
require_once 'config.php';
include "$domain/admin/engine/config.php";
$url = "$domain/admin/engine/database/getName.php?hotel=true";

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

<html lang="en" class="mdl-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $sitename; ?>--Отель для хорошего время провождения!</title>
  <link rel="stylesheet" href="styles/stylehotel/bootstrap.min.css">
  <link rel="stylesheet" href="styles/stylehotel/all.min.css">
  <link rel="stylesheet" href="styles/stylehotel/themify-icons.css">
  <link rel="stylesheet" href="styles/stylehotel/style.css">
  <link rel="stylesheet" href="styles/stylehotel/magnific-popup.css">
  <link rel="stylesheet" href="styles/stylehotel/owl.theme.default.min.css">
  <link rel="stylesheet" href="styles/stylehotel/owl.carousel.min.css">
  <link rel="stylesheet" href="styles/stylehotel/nice-select.css">
  <link rel="stylesheet" href="styles/stylehotel/style(1).css">
  
  <script>window.plp = {"page_id":1680893,"content_id":2226189,"lang":"ru","time":1540670623,"screens":"screens-xs-sm-md-lg","animations":{"section":{"type":"scroll"},"widget":{"type":"scroll"}}};window.plp_page_id = 1680893;window.plp_content_id = 2226189;window.plp_lang = "ru";window.lptag = "d540bf03eda2ec6cb37b326475bfcefbSnQv7rQxkIvrSuVQA9LuX4exGg5zGL6OecQcO62FZul0iRNPAXFPonbUoYNtBCDY";window.error_handler = function (e, fn_id) {    window.console && console.log && console.log(fn_id);    window['error_handler_' + fn_id] && eval(window['error_handler_' + fn_id]);    window.trackJs && trackJs.track(e);    window.console && console.error && console.error(e.message);};setTimeout(function(){try{x=new(XMLHttpRequest||ActiveXObject),x.open('PUT','/',1),x.send(window.lptag+'\n'+document.referrer+'\n'+(location.pathname+location.search))}catch(a){}},1e3);</script>
      <link type="text/css" rel="stylesheet" href="2_files/vendors.css">
      <link type="text/css" rel="stylesheet" href="2_files/plp.css">
      <link type="text/css" rel="stylesheet" href="2_files/nodes.css">
      <link type="text/css" rel="stylesheet" href="2_files/swiper.css">
      <script type="text/javascript">window._trackJs = {    token: "4fd557ccb06a4bd28e7b90da188cd54b",    application: "production",    enabled: location.href.indexOf("notrackjs") < 0,};</script>
  
  
<body>
    
          <!--Скрипт автодозвона-->

<style>
.btn-primary{margin-top:40px;height:30px;padding-left:7px;border-radius:4px;border:1px solid #ACA4A4;cursor:pointer;background-color:#fff!important;color:#000!important}.labelknopka{background-color:#028fcc;padding:15px;color:#fff;font-size:14p;font-family:arial;border-radius:11px 11px 0 0;border:1px solid #fff;font-weight:700;z-index:9999;position:absolute;bottom:0}.form-control{float:right;margin-left:20px}.form-group{padding-top:40px}label{cursor:pointer}.mamont_zvon{display:block;z-index:99999;bottom:20px;position:fixed;left:15%}.mamont_zvon:hover{background-color:blue}.mamont_zvon a{font-size:18px;color:#fff;text-decoration:none;font-family:arial;padding:0}.mamont_zvon p{color:#fff;padding:0;margin:0;padding-top:5px;font-family:sans-serif;font-size:14px}.dm-overlay{position:fixed;top:0;left:0;background:rgba(0,0,0,0.65);display:none;overflow:auto;width:100%;height:100%;z-index:1000}.dm-overlay:target{display:block;-webkit-animation:fade .6s;-moz-animation:fade .6s;animation:fade .6s}.dm-table{display:table;width:100%;height:100%}.dm-cell{display:table-cell;padding:0 1em;vertical-align:middle;text-align:center}.dm-modal{display:inline-block;padding:20px;background:#607d8b;-webkit-box-shadow:0 15px 20px rgba(0,0,0,0.22),0 19px 60px rgba(0,0,0,0.3);-moz-box-shadow:0 15px 20px rgba(0,0,0,0.22),0 19px 60px rgba(0,0,0,0.3);box-shadow:0 15px 20px rgba(0,0,0,0.22),0 19px 60px rgba(0,0,0,0.3);color:#cfd8dc;text-align:left;-webkit-animation:fade .8s;-moz-animation:fade .8s;animation:fade 1.8s}@-moz-keyframes fade{from{opacity:0}to{opacity:1}}@-webkit-keyframes fade{from{opacity:0}to{opacity:1}}@keyframes fade{from{opacity:0}to{opacity:1}}.close{z-index:9999;float:right;width:30px;height:30px;color:#cfd8dc;text-align:center;text-decoration:none;line-height:26px;cursor:pointer}.close:after{display:block;border:2px solid #cfd8dc;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;content:'X';-webkit-transition:all .6s;-moz-transition:all .6s;transition:all .6s;-webkit-transform:scale(0.85);-moz-transform:scale(0.85);-ms-transform:scale(0.85);transform:scale(0.85)}.close:hover:after{border-color:#fff;color:#fff;-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}
</style>
<!--Автодозвон-->
    
    <script>if(!plp.screenSizes)
            {
                 plp.screenSizes = {
                   sm:768,
                   md:992,
                   lg:1200,
                 };
            }
            if (plp.screens === 'screens-xs') plp.screen = 'xs';
            else if (plp.screens === 'screens-sm') plp.screen = 'sm';
            else if (plp.screens === 'screens-md') plp.screen = 'md';
            else if (plp.screens === 'screens-lg') plp.screen = 'lg';
            else if (plp.screens === 'screens-xs-sm') {
                if (document.body.clientWidth >= 768) plp.screen = 'sm';
                else if (document.body.clientWidth <= 767) plp.screen = 'xs';
            } else if (plp.screens === 'screens-xs-md') {
                if (document.body.clientWidth >= 992) plp.screen = 'md';
                else if (document.body.clientWidth <= 991) plp.screen = 'xs';
            } else if (plp.screens === 'screens-xs-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth <= 1199) plp.screen = 'xs';
            } else if (plp.screens === 'screens-sm-md') {
                if (document.body.clientWidth >= 992) plp.screen = 'md';
                else if (document.body.clientWidth <= 991) plp.screen = 'sm';
            } else if (plp.screens === 'screens-sm-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth <= 1199) plp.screen = 'sm';
            } else if (plp.screens === 'screens-md-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth <= 1199) plp.screen = 'md';
            } else if (plp.screens === 'screens-xs-sm-md') {
                if (document.body.clientWidth >= 992) plp.screen = 'md';
                else if (document.body.clientWidth >= 768 && document.body.clientWidth <= 991) plp.screen = 'sm';
                else if (document.body.clientWidth <= 767) plp.screen = 'xs';
            } else if (plp.screens === 'screens-xs-sm-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth >= 768 && document.body.clientWidth <= 1199) plp.screen = 'sm';
                else if (document.body.clientWidth <= 767) plp.screen = 'xs';
            } else if (plp.screens === 'screens-xs-md-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth >= 992 && document.body.clientWidth <= 1199) plp.screen = 'md';
                else if (document.body.clientWidth <= 991) plp.screen = 'xs';
            } else if (plp.screens === 'screens-sm-md-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth >= 992 && document.body.clientWidth <= 1199) plp.screen = 'md';
                else if (document.body.clientWidth <= 991) plp.screen = 'sm';
            } else if (plp.screens === 'screens-xs-sm-md-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth >= 992 && document.body.clientWidth <= 1199) plp.screen = 'md';
                else if (document.body.clientWidth >= 768 && document.body.clientWidth <= 991) plp.screen = 'sm';
                else if (document.body.clientWidth <= 767) plp.screen = 'xs';
            }
            [].slice.call(document.body.childNodes).forEach(function (el) {
                if (el.className && el.className.indexOf('area') >= 0) {
                    el.classList.add('screen-' + plp.screen);
                }
            });
         </script>
    
    
    
    
    
    
      <!-- ================ header section start ================= -->  
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav">
              <li class="nav-item active"><a class="nav-link" href="#home">Главная</a></li>
              <li class="nav-item"><a class="nav-link" href="#pochemy">Почему мы?</a></li>
              <li class="nav-item"><a class="nav-link" href="#faq">Частые вопросы</a></li>
        <li class="nav-item"><a class="nav-link" href="#tarif">Тарифы</a></li>
              <li class="nav-item"><a class="nav-link" href="#otzyvy">Отзывы</a></li>
              <li class="nav-item"><a class="nav-link" href="#contacts">Контакты</a></li>
            </ul>                               
          </div>
          <div class="col" style="width: 33.4203%;">
                                          <div class="cont">
                                             <div class="node node818 widget widget-cart-button">
                                                <div class="wrapper1">
                                                   <div class="wrapper2">
                                                      <div class="macros-button">
                                                         <div class="btn-out xs-none center">
                                                            <div class="btn-inner"><button class="btn font-text" id="uid166" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="cart"><span class="text icon"><i class="fa fa-shopping-cart"></i><span>Ваш заказ! (2)</span></span></button></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div></div>
        </div>
      </nav>
    </div>
  </header>
  <!-- ================ header section end ================= -->  
  <main class="site-main">
    <!-- ================ start banner area ================= --> 
    <section class="home-banner-area" id="home">
      <div class="container h-100">
        <div class="home-banner">
          <div class="text-center">
            <h1><?php echo $sitename; ?> </h1>
            <h4>Ваш  Отель для хорошего время провождения!</h4>
            <a class="button home-banner-btn" href="#tarif" style="    text-decoration: none;
    color: white;">Забронировать сейчас</a>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end banner area ================= -->
  

    <!-- ================ start banner form ================= --> 
    <!-- ================ end banner form ================= --> 

    <!-- ================ welcome section start ================= --> 
    <section class="welcome">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
            <div class="row no-gutters welcome-images">
              <div class="col-sm-7">
                <div class="card">
                  <img class="" src="styles/stylehotel/welcomeBanner1.png" alt="Card image cap">
                </div>
              </div>
              <div class="col-sm-5">
                <div class="card">
                  <img class="" src="styles/stylehotel/welcomeBanner2.png" alt="Card image cap">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card">
                  <img class="" src="styles/stylehotel/welcomeBanner3.png" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="welcome-content">
              <h2 class="mb-4"><span class="d-block">Добро пожаловать</span> в наш отель</h2>
              <p>Отель <?php echo $sitename; ?> - это то место, где мы постарались создать для всех гостей атмосферу уюта и тепла. Каждого нашего гостя мы искренне рады видеть и встречаем как своего давнего друга. Наш отель не просто место работы для всей нашей команды, а дело, которым мы живем каждый день, стараясь улучшить и довести до совершенства все аспекты. </p>
              <a class="button button--active home-banner-btn mt-4" href="#">Забронировать номер</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= --> 



    <!-- ================ Explore section start ================= -->
    <section class="section-margin" id="tarif">
      <div class="container">
        <div class="section-intro text-center pb-80px">
          <div class="section-intro__style">
            <img src="styles/stylehotel/bed-icon.png" alt="">
          </div>
          <h2>Тарифы</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="styles/stylehotel/explore1.png" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">2500 р. <sub>/ сутки</sub></h3>
                <h4 class="card-explore__title">Первое свидание</h4>
                 <div class="node node809 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;&amp;laquo;Первое свидание&amp;raquo;сутки&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;2500 руб.&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;2_files/034121f3dd788fffa559e10b6eba27e2.png&quot;}]">
                   <div class="btn-inner"><button class="btn font-text" id="uid163" data-id="" data-action="addtocart" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text icon"><i class="fa fa-bed"></i><span>Заказать номер</span></span></button></div>
                     </div>                                                                
                </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="styles/stylehotel/explore2.png" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">3990<sub>/ сутки</sub></h3>
                <h4 class="card-explore__title">Романтический вечер</h4>
                 <div class="node node802 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;&amp;laquo;Романтический вечер&amp;raquo;сутки&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;3990 руб.&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;2_files/69652668283ed69d97f2c414489ba037.png&quot;}]">
                    <div class="btn-inner"><button class="btn font-text" id="uid167" data-id="" data-action="addtocart" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text icon"><i class="fa fa-bed"></i><span>Заказать номер</span></span></button></div>
                       </div>                                  
               </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="styles/stylehotel/explore3.png" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">6500 р. <sub>/ сутки</sub></h3>
                <h4 class="card-explore__title">Люкс</h4>
                 <div class="node node885 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;&amp;laquo;Люкс&amp;raquo;сутки&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;6500  руб.&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;2_files/3b50c348bb2057599ee99f066374eac7.png&quot;}]">
                   <div class="btn-inner"><button class="btn font-text" id="uid195" data-id="" data-action="addtocart" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text icon"><i class="fa fa-bed"></i><span>Заказать номер</span></span></button></div>
                  </div>
                   </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ Explore section end ================= --> 
         <div class="node node139 section section-clear" id="menu" data-opacity="0.95">
            <div class="wrapper1 lazy" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAKCAYAAAC9vt6cAAAAGElEQVQoU2NkoBAwUqifYdQAhtEwACYiABCBAAscfVqOAAAAAElFTkSuQmCC&quot;);" data-lazy-bgimage="styles/stylehotel/18.jpg" data-lazy-bgimage_size="1600,1067">
               <div class="wrapper2">
                  <div class="container">
                     <div class="cont">
                        <div class="node node140 widget widget-element">
                           <div class="wrapper1">
                              <div class="wrapper2">
                                 <div class="cont">
                                    <div class="node node142 widget widget-text">
                                       <div class="wrapper1">
                                          <div class="wrapper2">
                                             <div class="">
                                                <div class="xs-force-center textable gray-theme">
                                                   <p style="text-align: center;"><span style="font-size: 26px; font-family: &quot;Roboto Slab&quot;, serif;">Наше меню</span></p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="node node143 widget widget-text">
                                       <div class="wrapper1">
                                          <div class="wrapper2">
                                             <div class="">
                                                <div class="xs-force-center textable gray-theme">
                                                   <p style="text-align: center;">По желанию Вы можете добавить к своему заказу кальян, еду и напитки.</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <span class="plplink"></span>
               </div>
            </div>
         </div>
         
         
         <section class="section-margin" id="dop">
         <div class="container">
              <div class="row">
          <div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="styles/stylehotel/playstation-4-slim-vertical-product-shot-01-us-07sep16.png" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">400 р. <sub>/ Сутки</sub></h3>
                <h4 class="card-explore__title">PS4 в номер</h4>
                 <div class="node node809 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;&amp;laquo;PS4 В номер&amp;raquo;на сутки&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;400 руб.&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;styles/stylehotel/playstation-4-slim-vertical-product-shot-01-us-07sep16.png&quot;}]">
                   <div class="btn-inner"><button class="btn font-text" id="uid163" data-id="" data-action="addtocart" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text icon"><i class="fa fa-bed"></i><span>Заказать</span></span></button></div>
                     </div>                                                                
                </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="styles/stylehotel/chasha-iz-granata-e1518792861394.jpg" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">650 р.<sub>/ один</sub></h3>
                <h4 class="card-explore__title">Кальян</h4>
                 <div class="node node802 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;&amp;laquo;Кальян на чаше&amp;raquo;В номер&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;650 руб.&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;styles/stylehotel/chasha-iz-granata-e1518792861394.jpg&quot;}]">
                    <div class="btn-inner"><button class="btn font-text" id="uid167" data-id="" data-action="addtocart" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text icon"><i class="fa fa-bed"></i><span>Заказать</span></span></button></div>
                       </div>                                  
               </div>
            </div>
          </div>

<div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="styles/stylehotel/570154_hleb_zavtrak_tostyi_rogaliki_bekon_pomidoryi_syir__5074x3564_www-gdefon-ru.jpg" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">500 р.<sub>/ завтрак</sub></h3>
                <h4 class="card-explore__title">Завтрак в постель</h4>
                 <div class="node node802 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;&amp;laquo;Завтрак&amp;raquo;В постель&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;500 руб.&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;styles/stylehotel/570154_hleb_zavtrak_tostyi_rogaliki_bekon_pomidoryi_syir__5074x3564_www-gdefon-ru.jpg&quot;}]">
                    <div class="btn-inner"><button class="btn font-text" id="uid167" data-id="" data-action="addtocart" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text icon"><i class="fa fa-bed"></i><span>Заказать</span></span></button></div>
                       </div>                                  
               </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="styles/stylehotel/3609e27cab6e0cd04000528ddd6481e45c83dc8f.jpg" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">900 р.<sub>/ Ужин</sub></h3>
                <h4 class="card-explore__title">Ужин при свечах</h4>
                 <div class="node node802 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;&amp;laquo;Ужин&amp;raquo;При свечах&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;900 руб.&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;2_files/69652668283ed69d97f2c414489ba037.png&quot;}]">
                    <div class="btn-inner"><button class="btn font-text" id="uid167" data-id="" data-action="addtocart" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text icon"><i class="fa fa-bed"></i><span>Заказать</span></span></button></div>
                       </div>                                  
               </div>
            </div>
          </div>
<div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="styles/stylehotel/cecchi-bonizio-toscana-igt__09455.1514667838.jpg" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">600 р.<sub>/ Бутылка</sub></h3>
                <h4 class="card-explore__title">Вино Cecchi, Sangiovese, Toscana</h4>
                 <div class="node node802 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;&amp;laquo;Вино&amp;raquo;Cecchi, Sangiovese, Toscana IGT, 2016&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;600 руб.&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;2_files/69652668283ed69d97f2c414489ba037.png&quot;}]">
                    <div class="btn-inner"><button class="btn font-text" id="uid167" data-id="" data-action="addtocart" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text icon"><i class="fa fa-bed"></i><span>Заказать</span></span></button></div>
                       </div>                                  
               </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="styles/stylehotel/03-moet--chandon-br-1379242464.jpg" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">2000 р. <sub>/ Бутылка</sub></h3>
                <h5 class="card-explore__title">Moet & Chandon </h5>
                 <div class="node node885 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;&amp;laquo;Moet & Chandon&amp;raquo; Brut Imperial Rose&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;2000  руб.&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;2_files/3b50c348bb2057599ee99f066374eac7.png&quot;}]">
                   <div class="btn-inner"><button class="btn font-text" id="uid195" data-id="" data-action="addtocart" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text icon"><i class="fa fa-bed"></i><span>Заказать</span></span></button></div>
                  </div>
                   </div>
            </div>
          </div>
        </div>          
       </div>      
                    
              

    <!-- ================ video section start ================= --> 
    <section class="video-area">
      <div class="container">
        <div class="row justify-content-center align-items-center flex-column text-center">
          <h3>История из жизни</h3>
          <p>Эти четверо увидели его застенчивый талант, и он решил его воплотить.</p>
        </div>
      </div>  
    </section>
    <!-- ================ video section end ================= --> 

    <!-- ================ special section start ================= -->
    <section class="section-padding bg-porcelain" id="pochemy">
      <div class="container">
        <div class="section-intro text-center pb-80px">
          <div class="section-intro__style">
            <img src="styles/stylehotel/bed-icon.png" alt="">
          </div>
          <h2>Почему мы?</h2>
        </div>
        <div class="special-img mb-30px">
          <img class="img-fluid" src="styles/stylehotel/special.png" alt="">
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-special">
              <div class="media align-items-center mb-1">
                <span class="card-special__icon"><i class="fa fa-home"></i></span>
                <div class="media-body">
                  <h4 class="card-special__title">Комната конференции</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-special">
              <div class="media align-items-center mb-1">
                <span class="card-special__icon"><i class="fas fa-water"></i></span>
                <div class="media-body">
                  <h4 class="card-special__title">Бассейн</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-special">
              <div class="media align-items-center mb-1">
                <span class="card-special__icon"><i class="fas fa-skating"></i></span>
                <div class="media-body">
                  <h4 class="card-special__title">Спорт-зал</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ special section end ================= -->
<section id="faq">
<!--Аккордион частые вопросы     -->
<div class="container">
 <div class="row">
<h2 style=" text-align: center;"> Популярные вопросы</h2>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          Можно ли оформить возврат средств?</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse in">
      <div class="panel-body"> Оформить возврат средств можно за час до заезда. Для возврата средств вам понадобится карта с которой вы платили и у вас должна быть на карте ровно та сумма которую вы отправили нам.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        
                        Почему я могу забронировать номер только онлайн и заплатить за них только онлайн?         </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse in">
      <div class="panel-body">Оформить номер заранее нужно за 2-3 часа до заезда, это связано с тем, что очень часто номеров просто не хватает и все они заняты. Оплатить и заказать номер вы можете и на месте, но с вероятностью 90% свободных мест не будет.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                Я не пользуюсь безналом, как быть?          </a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse in">
      <div class="panel-body">Наш отель только для современных людей. В 21 веке все пользуются безналом, в том числе и мы. Если у вас нет карты вы можете сделать себе QIWI-кошелёк и пополнить его через терминал, а после оформить у нас места. Ну или попробуйте заказать места на месте, но мест скорее всего не будет.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
       
                        Я оплатил, что дальше?          </a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse in">
      <div class="panel-body">После оплаты в течение 1 часа вам на номер придёт СМС с спец. кодом который вы сообщите при заезде. Если же смс’ка не пришла обратитесь в поддержку на сайте.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
        
                         Меня не устраивает, что номера надо бронировать онлайн.         </a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse in">
      <div class="panel-body">Значит откажитесь от похода в наш отель. Всё просто.</div>
    </div>
  </div>
</div>
</div>
</div>
<!--/Аккордион частые вопросы     -->
 </section>





    <!-- ================ carousel section start ================= -->
    <section class="section-margin" id="otzyvy">
      <div class="container">
        <div class="section-intro text-center pb-20px">
          <div class="section-intro__style">
            <img src="/styles/stylehotel/bed-icon.png" alt="">
          </div>
          <h2>Отзывы наших любимых посетителей</h2>
        </div>
        <div class="owl-carousel owl-theme testi-carousel">
     
          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="styles/stylehotel/testimonial3.png" alt="">
              </div>
              <div class="media-body">
                <p>Отличный отель в центре Москвы, очень чисто и уютно. Отзывчивый и доброжелательный персонал.</p>
                <div class="testi-carousel__intro">
                  <h3>Никита Широков</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
              <div class="media">
                <div class="testi-carousel__img">
                  <img src="styles/stylehotel/testimonial1.png" alt="">
                </div>
                <div class="media-body">
                  <p>Останавливаюсь уже не первый раз, прекрасная гостиница в Центре Москвы, отличное расположение, приветливый персонал, чистые номера, удобная кровать, отсутствие шума, идеальный вариант для путешествий.</p>
                  <div class="testi-carousel__intro">
                    <h3>Геннадий Лукьянов</h3>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="testi-carousel__item">
              <div class="media">
                <div class="testi-carousel__img">
                  <img src="styles/stylehotel/testimonial2.png" alt="">
                </div>
                <div class="media-body">
                  <p>Расположение великолепное , центр со старыми церквями , все в пешей доступности , Чистые Пруды, Современник , Красная площадь , приятные кафе На ресепшене очень вежливая и приятная девушка Все чисто , достаточно свежий ремонт!</p>
                  <div class="testi-carousel__intro">
                    <h3>Александр Зверев</h3>
                  </div>
                </div>
              </div>
            </div>
      
        </div>
      </div>
    </section>
    <!-- ================ carousel section end ================= -->
  </main>
  <!-- ================ start footer Area ================= -->
  <section id="contacts"    style="color: white;">
  <footer class="footer-area section-gap">
  <center>
      
      </p><ul>
                              Адрес: г. Владивосток - ул. Светланская, 106 <br>
Адрес: г. Москва, ул. Дубравная, 34/29 <br>
Г. Домодедово ул Константиновская фабрика 20 <br>
Адрес: г. Санкт-Петербург - М.Чкаловская, ул Пионерская, 41 <br>
Адрес: г. Новый Уренгой, ул. Сибирская, 26 <br>
Адрес: г. Сочи, ул. Транспортная, 28 <br>
Адрес: г. Екатеринбург - ул. Луначарского, 194 <br>
Адрес: г. Сургут, Югорский тракт, 38 <br>
Адрес: г. Нижневартовск, ул. Чапаева, 27 <br>
Адрес: г. Нефтеюганск, ул. Мира, 9А/1 <br>
Адрес: г. Тюмень, ул. Максима Горького, 70 <br>
Адрес: г. Ижевск, пер. Широкий, 53 <br>
Адрес: г. Мурманск, Кольский пр., 134 <br>
Адрес: г. Ростов-на-Дону, пр. Михаила Нагибина, 32Ж <br>
Адрес: г. Нижний Новгород - ул. Алексеевская, 10/16 <br>
Адрес: г. Краснодар, ул. Крылатая, 2 <br>
Адрес: г. Новосибирск - Ленина, 7, КТ "Победа" <br>
Адрес: г. Казань - пр. Ибрагимова, 56 <br>
Адрес: г. Уфа, ул. Бакалинская, 27 <br>
Адрес: г. Киев, ул. Антоновича, 176 <br>
Адрес: г. Калининград, пл. Победы, 10 <br>
Адрес: г. Самара, ул. Красноармейская, 131 <br>
Адрес: г. Тверь, пл. Гагарина, вл. 5 <br>
Адрес: г. Тольятти, ул. Автозаводское шоссе, 6, <br>
Адрес: г. Ульяновск, Ульяновский проспект, 16 <br>
Адрес: г. Сызрань, ул. Образцовская, 97 <br>
Адрес: г. Пенза, ул. Тарханова, 10В <br>
Адрес: г. Самара, ул. Красноармейская, 131 <br>
Адрес: г. Краснодар, ул. Северная, 327 <br>
Адрес: г. Омск, ул. Герцена, 16 <br>
Адрес: г. Новочеркасск, Платовский пр., 71 <br>
Адрес: г. Иркутск, ул. Сергеева, 3/5 <br>
Адрес: г. Томск, пр. Ленина, 217 <br>
Адрес: г. Волгоград, просп. Университетский, 107 <br>
Адрес: г. Ханты-Мансийск, ул. Заводская, д. 26 <br>
Адрес: г. Чебоксары, ул. Ленинского комсомола, 21А <br>
Адрес: г. Екатеринбург, ул. Металлургов, 87 <br>
Адрес: г. Климовск, Молодежная ул., 11 <br>
Адрес: г. Челябинск, Ул. Труда 203 <br>
Адрес: г. Пермь, ул. Екатерининская 105 <br>
Адрес: г. Липецк, ул. Советская, 66, <br>
Адрес: г. Сургут, ТРЦ «Агора» ул. Профсоюзов, 11 <br>
Адрес: г. Киров, ул. Горького, 5а <br>
Адрес: г. Київ, Оболонський просп., 21-б (метро Мінська, Героїв Дніпра) <br>
Адрес: г. Гомель, ул. Гагарина 65 <br>
Адрес: г. Минск, просп. Победителей 9 <br>
Адрес: г. Астрахань, ул. Кирова, 14 <br>
Адрес: г. Норильск, Ленинский пр-т, 12 <br>
Адрес: г. Саранск, ул. Пролетарская, 118, <br>
Адрес: г. Белгород, ул. Щорса, 64, <br>
Адрес: г. Новокузнецк, ул. Кирова 4 <br>
Адрес: г. Оренбург, ул. Потехина 27а <br>
Юридический адрес:107031, г. Москва. м.Павелецкая, 6, офис 142<br>                                                                                                              </ul><br><br>
        <h3><p class="footer-text m-0 col-lg-8 col-md-12">
</footer>
  <section>
  <!-- ================ End footer Area ================= -->
</section></section>



</body></html>
﻿
﻿
﻿

﻿
﻿<!DOCTYPE html>
<html>
   <head>
   </head>
   <body class="area">
      <div class="area font-text-opensans font-header-opensans screen-lg">
         <script>if(!plp.screenSizes)
            {
                 plp.screenSizes = {
                   sm:768,
                   md:992,
                   lg:1200,
                 };
            }
            if (plp.screens === 'screens-xs') plp.screen = 'xs';
            else if (plp.screens === 'screens-sm') plp.screen = 'sm';
            else if (plp.screens === 'screens-md') plp.screen = 'md';
            else if (plp.screens === 'screens-lg') plp.screen = 'lg';
            else if (plp.screens === 'screens-xs-sm') {
                if (document.body.clientWidth >= 768) plp.screen = 'sm';
                else if (document.body.clientWidth <= 767) plp.screen = 'xs';
            } else if (plp.screens === 'screens-xs-md') {
                if (document.body.clientWidth >= 992) plp.screen = 'md';
                else if (document.body.clientWidth <= 991) plp.screen = 'xs';
            } else if (plp.screens === 'screens-xs-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth <= 1199) plp.screen = 'xs';
            } else if (plp.screens === 'screens-sm-md') {
                if (document.body.clientWidth >= 992) plp.screen = 'md';
                else if (document.body.clientWidth <= 991) plp.screen = 'sm';
            } else if (plp.screens === 'screens-sm-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth <= 1199) plp.screen = 'sm';
            } else if (plp.screens === 'screens-md-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth <= 1199) plp.screen = 'md';
            } else if (plp.screens === 'screens-xs-sm-md') {
                if (document.body.clientWidth >= 992) plp.screen = 'md';
                else if (document.body.clientWidth >= 768 && document.body.clientWidth <= 991) plp.screen = 'sm';
                else if (document.body.clientWidth <= 767) plp.screen = 'xs';
            } else if (plp.screens === 'screens-xs-sm-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth >= 768 && document.body.clientWidth <= 1199) plp.screen = 'sm';
                else if (document.body.clientWidth <= 767) plp.screen = 'xs';
            } else if (plp.screens === 'screens-xs-md-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth >= 992 && document.body.clientWidth <= 1199) plp.screen = 'md';
                else if (document.body.clientWidth <= 991) plp.screen = 'xs';
            } else if (plp.screens === 'screens-sm-md-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth >= 992 && document.body.clientWidth <= 1199) plp.screen = 'md';
                else if (document.body.clientWidth <= 991) plp.screen = 'sm';
            } else if (plp.screens === 'screens-xs-sm-md-lg') {
                if (document.body.clientWidth >= 1200) plp.screen = 'lg';
                else if (document.body.clientWidth >= 992 && document.body.clientWidth <= 1199) plp.screen = 'md';
                else if (document.body.clientWidth >= 768 && document.body.clientWidth <= 991) plp.screen = 'sm';
                else if (document.body.clientWidth <= 767) plp.screen = 'xs';
            }
            [].slice.call(document.body.childNodes).forEach(function (el) {
                if (el.className && el.className.indexOf('area') >= 0) {
                    el.classList.add('screen-' + plp.screen);
                }
            });
         </script>
         
         

        
         
         
         
         
        
         
         <div class="modal fade nocolors" data-modal="cart" area-context="uid152" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width: 760px;">
               <div class="modal-content">
                  <div class="modal-header">
                     <button class="close nofonts">×</button>
                     <h4 class="textable gray-theme">
                        <p>Оформление заказа</p>
                     </h4>
                  </div>
                  <div class="modal-body">
                     <div class="cont" style="display: block;     z-index: 9999999;">
                        <div class="node node754 widget widget-cart-list">
                           <div class="wrapper1">
                              <div class="wrapper2">
                                 <div class="cont">
                                    <div class="node node755 widget widget-grid">
                                       <div class="wrapper1">
                                          <div class="wrapper2">
                                             <div class="grid valign-middle paddings-20px xs-wrap">
                                                <div class="gridwrap">
                                                   <div class="col" style="width: 15.9581%;">
                                                      <div class="cont">
                                                         <div class="node node756 widget widget-cart-image">
                                                            <div class="wrapper1">
                                                               <div class="wrapper2">
                                                                  <div class="bgimage" data-role="itemphoto" style="background-position: center center; background-size: contain; height: 80px; background-image: url(&quot;2_files/69652668283ed69d97f2c414489ba037.png&quot;);"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col" style="width: 29.6129%;">
                                                      <div class="cont">
                                                         <div class="node node757 widget widget-cart-name">
                                                            <div class="wrapper1">
                                                               <div class="wrapper2">
                                                                  <div data-role="itemname" style="text-align: left;">«Романтический вечер»сутки</div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col" style="width: 24.2909%;">
                                                      <div class="cont">
                                                         <div class="node node758 widget widget-cart-amount">
                                                            <div class="wrapper1">
                                                               <div class="wrapper2">
                                                                  <div style="text-align: center;"><button class="btn btn-default" data-role="decreaseamount"><i class="fa fa-minus"></i></button><input class="form-control" data-role="setamount" value="1"><button class="btn btn-default" data-role="increaseamount"><i class="fa fa-plus"></i></button></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col" style="width: 20.718%;">
                                                      <div class="cont">
                                                         <div class="node node759 widget widget-cart-price">
                                                            <div class="wrapper1">
                                                               <div class="wrapper2">
                                                                  <div data-role="itemprice" style="text-align: center;">3990 руб.</div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col" style="width: 9.42002%;">
                                                      <div class="cont">
                                                         <div class="node node760 widget widget-cart-remove">
                                                            <div class="wrapper1">
                                                               <div class="wrapper2">
                                                                  <div style="text-align: right;"><button class="btn btn-default" data-role="removefromcart"><i class="fa fa-times"></i></button></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="node node762 widget widget-line">
                                       <div class="wrapper1">
                                          <div class="wrapper2">
                                             <div class="alignment" style="text-align: center;">
                                                <div class="line" style="width: 100%; height: 1px; background-color: rgb(242, 242, 242); border-radius: 0px;"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                       <form action='redir.php' method='POST' > <div class="node node2384 widget widget-form2" data-isquiz="false">
                           <div class="wrapper1">
                              <div class="wrapper2">
                                 <div style="max-width: 732px; position: relative; margin-left: auto; margin-right: auto;">
                                    <div class="metahtml">
                                       <div id="node2384_meta" class="code">
                                          <div class="form1-cover">
                                             <div plp-form-container="" colorside="cover_bgcolored?cover_bgcolor.colorside():_colorside">
                                                <div class="cont">
                                                   <div class="node node2379 widget widget-field">
                                                      <div class="wrapper1">
                                                         <div class="wrapper2">
                                                            <div class="metahtml">
                                                               <div id="node2379_meta" data-vals="{&quot;type&quot;:&quot;name&quot;,&quot;text&quot;:&quot;Имя&quot;,&quot;hidename&quot;:false,&quot;list&quot;:[{&quot;text&quot;:&quot;Гамбургер&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/85600fbdcfcd98c68092c8ee78fef443.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0,&quot;name&quot;:&quot;Вариант 1&quot;},{&quot;text&quot;:&quot;Чай&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/d07611e14f2f6512eb82382ddb5812dd.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0,&quot;name&quot;:&quot;Вариант 2&quot;},{&quot;text&quot;:&quot;Мороженное&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/ca0be5f5cd84b6891c5a611b252bc904.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0}],&quot;visual_width&quot;:30,&quot;visual_height&quot;:100,&quot;required&quot;:true,&quot;id&quot;:&quot;&quot;,&quot;min&quot;:&quot;0&quot;,&quot;max&quot;:&quot;100&quot;,&quot;step&quot;:&quot;1&quot;,&quot;align&quot;:&quot;right&quot;,&quot;fontsize&quot;:100,&quot;format&quot;:&quot;%result% руб.&quot;,&quot;formula&quot;:&quot;&quot;,&quot;condition&quot;:&quot;&quot;,&quot;template&quot;:&quot;&quot;,&quot;variable&quot;:&quot;Name&quot;,&quot;valueOn&quot;:&quot;1&quot;,&quot;valueOff&quot;:&quot;0&quot;,&quot;privacy_button&quot;:&quot;Политика конфиденциальности&quot;,&quot;privacy_checkbox&quot;:&quot;Даю согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_text&quot;:&quot;Нажимая кнопку, вы даете согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_source&quot;:&quot;global&quot;}" class="code">
                                                                  <div plp-field="name" class="is-text">
                                                                     <div class="name">
                                                                        Имя *
                                                                     </div>
                                                                     <div class="input">
                                                                        <input type="text" il-action="listen" name="Name" required autocomplete="name" class="form-control" value="">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="node node2380 widget widget-field">
                                                      <div class="wrapper1">
                                                         <div class="wrapper2">
                                                            <div class="metahtml">
                                                               <div id="node2380_meta" data-vals="{&quot;type&quot;:&quot;phone&quot;,&quot;text&quot;:&quot;Номер телефона&quot;,&quot;hidename&quot;:false,&quot;list&quot;:[{&quot;text&quot;:&quot;Гамбургер&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/85600fbdcfcd98c68092c8ee78fef443.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0,&quot;name&quot;:&quot;Вариант 1&quot;},{&quot;text&quot;:&quot;Чай&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/d07611e14f2f6512eb82382ddb5812dd.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0,&quot;name&quot;:&quot;Вариант 2&quot;},{&quot;text&quot;:&quot;Мороженное&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/ca0be5f5cd84b6891c5a611b252bc904.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0}],&quot;visual_width&quot;:30,&quot;visual_height&quot;:100,&quot;required&quot;:true,&quot;id&quot;:&quot;&quot;,&quot;min&quot;:&quot;0&quot;,&quot;max&quot;:&quot;100&quot;,&quot;step&quot;:&quot;1&quot;,&quot;align&quot;:&quot;right&quot;,&quot;fontsize&quot;:100,&quot;format&quot;:&quot;%result% руб.&quot;,&quot;formula&quot;:&quot;&quot;,&quot;condition&quot;:&quot;&quot;,&quot;template&quot;:&quot;&quot;,&quot;variable&quot;:&quot;Phone&quot;,&quot;valueOn&quot;:&quot;1&quot;,&quot;valueOff&quot;:&quot;0&quot;,&quot;privacy_button&quot;:&quot;Политика конфиденциальности&quot;,&quot;privacy_checkbox&quot;:&quot;Даю согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_text&quot;:&quot;Нажимая кнопку, вы даете согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_source&quot;:&quot;global&quot;}" class="code">
                                                                  <div plp-field="phone" class="is-text">
                                                                     <div class="name">
                                                                        Номер телефона *
                                                                     </div>
                                                                     <div class="input">
                                                                        <input type="text"  name="Phone"  required  il-action="listen" autocomplete="tel" class="form-control" value="">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                  <div class="node node2380 widget widget-field">
                                                      <div class="wrapper1">
                                                         <div class="wrapper2">
                                                            <div class="metahtml">
                                                               <div id="node2380_meta" data-vals="{&quot;type&quot;:&quot;phone&quot;,&quot;text&quot;:&quot;Номер телефона&quot;,&quot;hidename&quot;:false,&quot;list&quot;:[{&quot;text&quot;:&quot;Гамбургер&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/85600fbdcfcd98c68092c8ee78fef443.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0,&quot;name&quot;:&quot;Вариант 1&quot;},{&quot;text&quot;:&quot;Чай&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/d07611e14f2f6512eb82382ddb5812dd.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0,&quot;name&quot;:&quot;Вариант 2&quot;},{&quot;text&quot;:&quot;Мороженное&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/ca0be5f5cd84b6891c5a611b252bc904.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0}],&quot;visual_width&quot;:30,&quot;visual_height&quot;:100,&quot;required&quot;:true,&quot;id&quot;:&quot;&quot;,&quot;min&quot;:&quot;0&quot;,&quot;max&quot;:&quot;100&quot;,&quot;step&quot;:&quot;1&quot;,&quot;align&quot;:&quot;right&quot;,&quot;fontsize&quot;:100,&quot;format&quot;:&quot;%result% руб.&quot;,&quot;formula&quot;:&quot;&quot;,&quot;condition&quot;:&quot;&quot;,&quot;template&quot;:&quot;&quot;,&quot;variable&quot;:&quot;Phone&quot;,&quot;valueOn&quot;:&quot;1&quot;,&quot;valueOff&quot;:&quot;0&quot;,&quot;privacy_button&quot;:&quot;Политика конфиденциальности&quot;,&quot;privacy_checkbox&quot;:&quot;Даю согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_text&quot;:&quot;Нажимая кнопку, вы даете согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_source&quot;:&quot;global&quot;}" class="code">
                                                                  <div plp-field="phone" class="is-text">
                                                                     <div class="name">
                                                                        Промокод (приз выбирается автоматически после оплаты) 
                                                                     </div>
                                                                     <div class="input">
                                                                        <input type="text"  name="promo"    il-action="listen" autocomplete="tel" class="form-control" value="">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="node node2383 widget widget-field">
                                                      <div class="wrapper1">
                                                         <div class="wrapper2">
                                                            <div class="metahtml">
                                                               <div id="node2383_meta" data-vals="{&quot;type&quot;:&quot;select-menu&quot;,&quot;text&quot;:&quot;Страна&quot;,&quot;hidename&quot;:false,&quot;list&quot;:[{&quot;text&quot;:&quot;Россия&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/85600fbdcfcd98c68092c8ee78fef443.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:1,&quot;name&quot;:&quot;Вариант 1&quot;},{&quot;text&quot;:&quot;Украина&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/d07611e14f2f6512eb82382ddb5812dd.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:2,&quot;name&quot;:&quot;Вариант 2&quot;},{&quot;text&quot;:&quot;Белоруссия&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/ca0be5f5cd84b6891c5a611b252bc904.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:3}],&quot;visual_width&quot;:30,&quot;visual_height&quot;:100,&quot;required&quot;:false,&quot;id&quot;:&quot;gorod&quot;,&quot;min&quot;:&quot;0&quot;,&quot;max&quot;:&quot;100&quot;,&quot;step&quot;:&quot;1&quot;,&quot;align&quot;:&quot;right&quot;,&quot;fontsize&quot;:100,&quot;format&quot;:&quot;%result% руб.&quot;,&quot;formula&quot;:&quot;&quot;,&quot;condition&quot;:&quot;&quot;,&quot;template&quot;:&quot;&quot;,&quot;variable&quot;:&quot;country&quot;,&quot;valueOn&quot;:&quot;1&quot;,&quot;valueOff&quot;:&quot;0&quot;,&quot;privacy_button&quot;:&quot;Политика конфиденциальности&quot;,&quot;privacy_checkbox&quot;:&quot;Даю согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_text&quot;:&quot;Нажимая кнопку, вы даете согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_source&quot;:&quot;global&quot;}" class="code">
                                                                  <div plp-field="select-menu">
                                                                     <div class="name">
                                                                        Страна *
                                                                     </div>
                                                                     <div class="form-control">
                                                                        <select  name="country"  required  onchange="Selected(this)" il-action="listen">
                                                                           <option selected value="Выберите страну посещения"></option>
                                                                           <option value="1">Россия</option>
                                                                           <option value="2">Украина</option>
                                                                           <option value="3">Белоруссия</option>
                                                                        </select>
                                                                        <div class="flexgrid">
                                                                           <div plp-field_value="" class="left">&nbsp;</div>
                                                                           <div class="right">
                                                                              <i class="fa fa-angle-down"></i>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="russia" style="display:none;" class="node node2382 widget widget-field">
                                                      <div class="wrapper1">
                                                         <div class="wrapper2">
                                                            <div class="metahtml">
                                                               <div id="node2382_meta" data-vals="{&quot;type&quot;:&quot;select-menu&quot;,&quot;text&quot;:&quot;Город&quot;,&quot;hidename&quot;:false,&quot;list&quot;:[{&quot;text&quot;:&quot;Москва&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/85600fbdcfcd98c68092c8ee78fef443.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:1,&quot;name&quot;:&quot;Вариант 1&quot;}],&quot;visual_width&quot;:30,&quot;visual_height&quot;:100,&quot;required&quot;:false,&quot;id&quot;:&quot;gorod&quot;,&quot;min&quot;:&quot;0&quot;,&quot;max&quot;:&quot;100&quot;,&quot;step&quot;:&quot;1&quot;,&quot;align&quot;:&quot;right&quot;,&quot;fontsize&quot;:100,&quot;format&quot;:&quot;%result% руб.&quot;,&quot;formula&quot;:&quot;&quot;,&quot;condition&quot;:&quot;&quot;,&quot;template&quot;:&quot;&quot;,&quot;variable&quot;:&quot;gorodRF&quot;,&quot;valueOn&quot;:&quot;1&quot;,&quot;valueOff&quot;:&quot;0&quot;,&quot;privacy_button&quot;:&quot;Политика конфиденциальности&quot;,&quot;privacy_checkbox&quot;:&quot;Даю согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_text&quot;:&quot;Нажимая кнопку, вы даете согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_source&quot;:&quot;global&quot;}" class="code">
                                                                  <div plp-field="select-menu">
                                                                     <div class="name">
                                                                        Город 
                                                                     </div>
                                                                     <div class="form-control">
                                                                        <select id="gorod" name="gorodRF" il-action="listen">
                                                                           <option disabled="" selected="selected">Выберите</option>
                                          <option value="Москва - Киевская">Москва</option>
                                          <option value="Домодедово">Домодедово</option>
                                          <option value="Санкт-Петербург">Санкт-Петербург</option>
                                          <option value="Самара">Самара</option>
                                          <option value="Уфа">Уфа</option>
                                          <option value="Новый Уренгой">Новый Уренгой</option>
                                          <option value="Ижевск">Ижевск</option>
                                          <option value="Ноябрьск">Ноябрьск</option>
                                          <option value="Сургут">Сургут</option>
                      <option value="Сургут">Красноярск</option>
                      <option value="Астана">Сочи</option>
                      <option value="Воронеж">Воронеж</option>
                                          <option value="Челябинск">Челябинск</option>
                                          <option value="Нефтеюганск">Нефтеюганск</option>
                                          <option value="Тюмень">Тюмень</option>
                                          <option value="Мурманск">Мурманск</option>
                                          <option value="Ростов-на-Дону">Ростов-на-Дону</option>
                                          <option value="Екатеринбург">Екатеринбург</option>
                                          <option value="Новосибирск">Новосибирск</option>
                                          <option value="Казань">Казань</option>
                      <option value="Шымкент">Шымкент</option>
                      <option value="Астана">Астана</option>
                      <option value="Тольятти">Тольятти</option>
                      <option value="Хабаровск">Тольятти</option>
                                                                        </select>
                                                                        <div class="flexgrid">
                                                                           <div plp-field_value="" class="left">&nbsp;</div>
                                                                           <div class="right">
                                                                              <i class="fa fa-angle-down"></i>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                            <div id="bel" style="display:none;" class="node node2382 widget widget-field">
                                                      <div class="wrapper1">
                                                         <div class="wrapper2">
                                                            <div class="metahtml">
                                                               <div id="node2382_meta" data-vals="{&quot;type&quot;:&quot;select-menu&quot;,&quot;text&quot;:&quot;Город&quot;,&quot;hidename&quot;:false,&quot;list&quot;:[{&quot;text&quot;:&quot;Москва&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/85600fbdcfcd98c68092c8ee78fef443.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:1,&quot;name&quot;:&quot;Вариант 1&quot;}],&quot;visual_width&quot;:30,&quot;visual_height&quot;:100,&quot;required&quot;:false,&quot;id&quot;:&quot;gorod&quot;,&quot;min&quot;:&quot;0&quot;,&quot;max&quot;:&quot;100&quot;,&quot;step&quot;:&quot;1&quot;,&quot;align&quot;:&quot;right&quot;,&quot;fontsize&quot;:100,&quot;format&quot;:&quot;%result% руб.&quot;,&quot;formula&quot;:&quot;&quot;,&quot;condition&quot;:&quot;&quot;,&quot;template&quot;:&quot;&quot;,&quot;variable&quot;:&quot;gorodRF&quot;,&quot;valueOn&quot;:&quot;1&quot;,&quot;valueOff&quot;:&quot;0&quot;,&quot;privacy_button&quot;:&quot;Политика конфиденциальности&quot;,&quot;privacy_checkbox&quot;:&quot;Даю согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_text&quot;:&quot;Нажимая кнопку, вы даете согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_source&quot;:&quot;global&quot;}" class="code">
                                                                  <div plp-field="select-menu">
                                                                     <div class="name">
                                                                        Город 
                                                                     </div>
                                                                     <div class="form-control">
                                                                        <select required="" id="gorod" name="gorodUA" il-action="listen">
                                                                            <option disabled="" selected="selected">Выберите</option>
                                          <option value="Харьков">Харьков</option>
                                          <option value="Киев">Киев</option>
                                          <option value="Донецк">Донецк</option>
                                                                        </select>
                                                                        <div class="flexgrid">
                                                                           <div plp-field_value="" class="left">&nbsp;</div>
                                                                           <div class="right">
                                                                              <i class="fa fa-angle-down"></i>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                           <div id="ukraine" style="display:none;" class="node node2382 widget widget-field">
                                                      <div class="wrapper1">
                                                         <div class="wrapper2">
                                                            <div class="metahtml">
                                                               <div id="node2382_meta" data-vals="{&quot;type&quot;:&quot;select-menu&quot;,&quot;text&quot;:&quot;Город&quot;,&quot;hidename&quot;:false,&quot;list&quot;:[{&quot;text&quot;:&quot;Москва&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/85600fbdcfcd98c68092c8ee78fef443.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:1,&quot;name&quot;:&quot;Вариант 1&quot;}],&quot;visual_width&quot;:30,&quot;visual_height&quot;:100,&quot;required&quot;:false,&quot;id&quot;:&quot;gorod&quot;,&quot;min&quot;:&quot;0&quot;,&quot;max&quot;:&quot;100&quot;,&quot;step&quot;:&quot;1&quot;,&quot;align&quot;:&quot;right&quot;,&quot;fontsize&quot;:100,&quot;format&quot;:&quot;%result% руб.&quot;,&quot;formula&quot;:&quot;&quot;,&quot;condition&quot;:&quot;&quot;,&quot;template&quot;:&quot;&quot;,&quot;variable&quot;:&quot;gorodRF&quot;,&quot;valueOn&quot;:&quot;1&quot;,&quot;valueOff&quot;:&quot;0&quot;,&quot;privacy_button&quot;:&quot;Политика конфиденциальности&quot;,&quot;privacy_checkbox&quot;:&quot;Даю согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_text&quot;:&quot;Нажимая кнопку, вы даете согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_source&quot;:&quot;global&quot;}" class="code">
                                                                  <div plp-field="select-menu">
                                                                     <div class="name">
                                                                        Город 
                                                                     </div>
                                                                     <div class="form-control">
                                                                        <select required="" id="gorod" name="gorodBEL" il-action="listen">
                                                                         <option disabled="" selected="selected">Выберите</option>
                                          <option value="Гродно">Гродно</option>
                                                                        </select>
                                                                        <div class="flexgrid">
                                                                           <div plp-field_value="" class="left">&nbsp;</div>
                                                                           <div class="right">
                                                                              <i class="fa fa-angle-down"></i>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                           <script>
function Selected(a) {
        var label = a.value;
        if (label==1) {
            document.getElementById("russia").style.display='block';
            document.getElementById("ukraine").style.display='none';      
             document.getElementById("bel").style.display='none';         
        } else if (label==2) {
           document.getElementById("russia").style.display='none';
            document.getElementById("ukraine").style.display='none';
             document.getElementById("bel").style.display='block';     
        } else if (label==3) {
            document.getElementById("russia").style.display='none';
            document.getElementById("ukraine").style.display='block';      
             document.getElementById("bel").style.display='none';     
        }
         
}
</script>
 <div  class="node node2382 widget widget-field">
                                                      <div class="wrapper1">
                                                         <div class="wrapper2">
                                                            <div class="metahtml">
                                                               <div id="node2382_meta" data-vals="{&quot;type&quot;:&quot;select-menu&quot;,&quot;text&quot;:&quot;Город&quot;,&quot;hidename&quot;:false,&quot;list&quot;:[{&quot;text&quot;:&quot;Москва&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/85600fbdcfcd98c68092c8ee78fef443.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:1,&quot;name&quot;:&quot;Вариант 1&quot;}],&quot;visual_width&quot;:30,&quot;visual_height&quot;:100,&quot;required&quot;:false,&quot;id&quot;:&quot;gorod&quot;,&quot;min&quot;:&quot;0&quot;,&quot;max&quot;:&quot;100&quot;,&quot;step&quot;:&quot;1&quot;,&quot;align&quot;:&quot;right&quot;,&quot;fontsize&quot;:100,&quot;format&quot;:&quot;%result% руб.&quot;,&quot;formula&quot;:&quot;&quot;,&quot;condition&quot;:&quot;&quot;,&quot;template&quot;:&quot;&quot;,&quot;variable&quot;:&quot;gorodRF&quot;,&quot;valueOn&quot;:&quot;1&quot;,&quot;valueOff&quot;:&quot;0&quot;,&quot;privacy_button&quot;:&quot;Политика конфиденциальности&quot;,&quot;privacy_checkbox&quot;:&quot;Даю согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_text&quot;:&quot;Нажимая кнопку, вы даете согласие на &lt;обработку персональных данных&gt;&quot;,&quot;privacy_source&quot;:&quot;global&quot;}" class="code">
                                                                  <div plp-field="select-menu">
                                                                     <div class="name">
                                                                        Время Заезда 
                                                                     </div>
                                                                     <div class="form-control">
                                                                        <select required="" id="gorod" name="timevisit" il-action="listen">
                                                                           <option value="18:00" selected="selected">18:00</option>
                                          <option value="19:00" >19:00</option>
                                          <option value="20:00" >20:00</option>
                                          <option value="21:00" >21:00</option>
                                          <option value="22:00" >22:00</option>
                                          <option  value="23:00" >23:00</option>
                                          <option value="00:00" >00:00</option>
                                          <option value="01:00" >01:00</option>
                                          <option value="02:00" >02:00</option>
                                          <option value="03:00" >03:00</option>
                                          <option value="04:00" >04:00</option>
                                          <option value="05:00" >05:00</option>
                                          <option value="06:00" >06:00</option>
                                          <option value="07:00" >07:00</option>
                                          <option value="08:00" >08:00</option>
                                          <option value="09:00" >09:00</option>
                                          <option value="10:00" >10:00</option>
                                          <option value="11:00" >11:00</option>
                                          <option value="12:00" >12:00</option>
                                          <option value="13:00" >13:00</option>
                                          <option value="14:00" >14:00</option>
                                          <option  value="15:00" >15:00 </option>
                                                                        </select>
                                                                        <div class="flexgrid">
                                                                           <div plp-field_value="" class="left">&nbsp;</div>
                                                                           <div class="right">
                                                                              <i class="fa fa-angle-down"></i>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div><div class="node node2392 widget widget-field"><div class="wrapper1"><div class="wrapper2"><div class="metahtml"><div id="node2392_meta" data-vals="{&quot;type&quot;:&quot;radio-list&quot;,&quot;text&quot;:&quot;Выберите метод оплаты&quot;,&quot;hidename&quot;:false,&quot;list&quot;:[{&quot;text&quot;:&quot;Банковской картой&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/85600fbdcfcd98c68092c8ee78fef443.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0,&quot;name&quot;:&quot;Вариант 1&quot;},{&quot;text&quot;:&quot;Visa QIWI Wallet&quot;,&quot;image&quot;:{&quot;file&quot;:&quot;styles/stylehotel/d07611e14f2f6512eb82382ddb5812dd.jpg&quot;,&quot;size&quot;:[600,600]},&quot;value&quot;:0,&quot;name&quot;:&quot;Вариант 2&quot;}],&quot;visual_width&quot;:30,&quot;visual_height&quot;:100,&quot;required&quot;:true,&quot;id&quot;:&quot;&quot;,&quot;min&quot;:&quot;0&quot;,&quot;max&quot;:&quot;100&quot;,&quot;step&quot;:&quot;1&quot;,&quot;align&quot;:&quot;right&quot;,&quot;fontsize&quot;:100,&quot;format&quot;:&quot;%result% руб.&quot;,&quot;formula&quot;:&quot;&quot;,&quot;condition&quot;:&quot;&quot;,&quot;template&quot;:&quot;&quot;,&quot;variable&quot;:&quot;&quot;,&quot;valueOn&quot;:&quot;1&quot;,&quot;valueOff&quot;:&quot;0&quot;,&quot;privacy_button&quot;:&quot;Политика конфиденциальности&quot;,&quot;privacy_checkbox&quot;:&quot;Даю согласие на <обработку персональных данных>&quot;,&quot;privacy_text&quot;:&quot;Нажимая кнопку, вы даете согласие на <обработку персональных данных>&quot;,&quot;privacy_source&quot;:&quot;global&quot;}" class="code">
</div></div></div></div></div>
                                                   <div class="node node763 widget widget-grid">
                                                      <div class="wrapper1">
                                                         <div class="wrapper2">
                                                            <div class="grid valign-middle paddings-20px xs-wrap">
                                                               <div class="gridwrap">
                                                                  <div class="col" style="width: 50%;">
                                                                     <div class="cont">
                                                                        <div class="node node764 widget widget-cart-total">
                                                                           <div class="wrapper1">
                                                                              <div class="wrapper2">
                                                                                 <div data-role="carttotal" style="text-align: left;">Итого: <span>3780 руб.</span></div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                <input type="hidden" id="summas" name="amountInteger" value="8829" data-type="number">
                                                                  <div class="col" style="width: 50%;">
                                                                     <div class="cont">
                                                                        <div class="node node765 widget widget-button">
                                                                           <div class="wrapper1">
                                                                              <div class="wrapper2">
                                                                                 <div class="macros-button">
                                                                                    <div class="btn-out right xs-none">
                                                                                       <div class="btn-inner"><button class="btn font-text" id="uid155" data-id="" data-action="send" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text icon"><i class="fa fa-check"></i><span>Перейти к оплате</span></span></button></div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div></form>
                     </div>
                     <div class="cont" style="display: none;">
                        <div class="node node771 widget widget-image">
                           <div class="wrapper1">
                              <div class="wrapper2">
                                 <div class="xs-force-center bgnormal" style="text-align: center;"><img class="" alt="" src="./2_files/14.png" style="width: 128px;"></div>
                                 <noscript>&lt;img src="2_files/14.png" alt=""&gt;</noscript>
                              </div>
                           </div>
                        </div>
                        <div class="node node772 widget widget-text">
                           <div class="wrapper1">
                              <div class="wrapper2">
                                 <div class="">
                                    <div class="xs-force-center textable gray-theme">
                                       <p style="text-align: center;"><span style="color: rgb(160, 160, 160);"><span style="font-size: 24px;">В корзине пока пусто!</span></span></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="2_files/vendors.js.download"></script><script type="text/javascript" src="2_files/plp.js.download"></script><script type="text/javascript" src="2_files/nodes.js.download"></script><script type="text/javascript" src="2_files/swiper.js.download"></script>
      <div>
         <div class="sweet-overlay" tabindex="-1" style="opacity: -0.05; display: none;"></div>
         <div class="sweet-alert hideSweetAlert" tabindex="-1" data-has-cancel-button="true" data-allow-ouside-click="false" data-has-done-function="true" data-timer="null" style="display: none; margin-top: -168px; opacity: -0.04;">
            <div class="icon error" style="display: none;"><span class="x-mark"><span class="line left"></span><span class="line right"></span></span></div>
            <div class="icon warning" style="display: none;"> <span class="body"></span> <span class="dot"></span> </div>
            <div class="icon info" style="display: none;"></div>
            <div class="icon success" style="display: block;">
               <span class="line tip"></span> <span class="line long"></span> 
               <div class="placeholder"></div>
               <div class="fix"></div>
            </div>
            <div class="icon custom" style="display: none;"></div>
            <h2>Добавлено в корзину!</h2>
            <p></p>
            <button class="cancel" tabindex="2" style="display: inline-block; box-shadow: none;">ОК</button><button class="confirm" tabindex="1" style="background-color: rgb(174, 222, 244); box-shadow: none;">Открыть корзину</button>
         </div>
      </div>
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
</html> <!-- Smartsupp Live Chat script -->
