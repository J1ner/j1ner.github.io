<?php
require_once 'config.php';
include "$domain/admin/engine/config.php";
$url = "$domain/admin/engine/database/getName.php?bowling=true";

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
      <meta charset="utf-8" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title><?php echo $sitename; ?></title>
      <meta property="og:url" content="http://nuss.tilda.ws/kalyannaya" />
      <meta property="og:title" content=<?php echo '"'.$sitename.'"'; ?> />
      <meta property="og:description" content="" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="https://static.tildacdn.com/tild6463-3065-4137-b662-633837656464/9ae1c398343a4912979e.jpg" />
      <meta property="fb:app_id" content="257953674358265" />
      <meta name="format-detection" content="telephone=no" />
      <meta http-equiv="x-dns-prefetch-control" content="on">
      <link rel="dns-prefetch" href="https://tilda.ws">
      <link rel="dns-prefetch" href="https://static.tildacdn.com">
      <link rel="canonical" href="http://nuss.tilda.ws/kalyannaya">
      <link rel="shortcut icon" href="img/tildafavicon.ico" type="image/x-icon" />
      <!-- Assets -->
      <link rel="stylesheet" href="css/tilda-grid-3.0.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="css/tilda-blocks-2.12.css?t=1547400690" type="text/css" media="all" />
      <link rel="stylesheet" href="css/tilda-animation-1.0.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="css/tilda-popup-1.1.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="css/tilda-slds-1.4.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="css/tilda-zoom-2.0.min.css" type="text/css" media="all" />
      <script src="js/jquery-1.10.2.min.js"></script><script src="js/tilda-scripts-2.8.min.js"></script><script src="js/tilda-blocks-2.7.js?t=1547400690"></script><script src="js/lazyload-1.3.min.js" charset="utf-8"></script><script src="js/tilda-animation-1.0.min.js" charset="utf-8"></script><script src="js/hammer.min.js" charset="utf-8"></script><script src="js/tilda-slds-1.4.min.js" charset="utf-8"></script><script src="js/tilda-products-1.0.min.js" charset="utf-8"></script><script src="js/tilda-zoom-2.0.min.js" charset="utf-8"></script><script src="js/tilda-cart-1.0.min.js" charset="utf-8"></script><script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>
   </head> <!--Скрипт автодозвона-->
                

<style>




/* слой затемнения */
.btn  {
     background-color: rgb(86, 173, 210);
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    border-style: solid;
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-color: rgb(50, 146, 187);
    padding-top: 6px;
    padding-bottom: 6px;
    padding-left: 12px;
    padding-right: 12px;
    font-size: 14px;
    color: rgb(255, 255, 255)
    
}
.button {
    text-transform: uppercase;
    text-align: center;
    color: #fff;
    background-color: #2c2c2c;
    width: 100px;
    height: 50px;
      ;
}
.btn-primary {margin-top: 40px;    
    height: 30px;
    
    padding-left: 7px;
    border-radius: 4px;
    border: 1px solid #ACA4A4;
    cursor: pointer;
   background-color: rgb(86, 173, 210);
    color: #000!important;}


.labelknopka {
  background-color: #028fcc;
    padding: 15px;
    color: white;
    font-size: 14p;
    font-family: arial;
    border-radius: 11px 11px 0px 0px;
    border: 1px solid white;
    font-weight: bold;
    z-index: 9999;
    position: absolute;
    bottom: 0;
              }

 .form-control {
  float: right;
      margin-left: 20px;
 }

.form-group {
  padding-top: 40px;
}



   label {
    cursor: pointer;
    
    
}

.mamont_zvon {
  
      
   display: block;
   
   z-index: 99999;
   bottom: 20px;
   position: fixed;
   left: 15%;
 
}

.mamont_zvon:hover {
background-color: blue;
}
.mamont_zvon a {
  font-size: 18px;
  color: white;
  text-decoration: none;
  font-family: arial;
  padding: 0;

}
.mamont_zvon p {
    color: white;
    padding: 0;
    margin: 0;
    padding-top: 5px;

    font-family: sans-serif;
    font-size: 14px;
}
.dm-overlay {
    position: fixed;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.65);
    display: none;
    overflow: auto;
    width: 100%;
    height: 100%;
    z-index: 1000;
}
/* активируем слой затемнения и модальное окно */
.dm-overlay:target {
    display: block;
/* анимация и время задержки */
    -webkit-animation: fade .6s;
    -moz-animation: fade .6s;
    animation: fade .6s;
}
/* блочная таблица */
.dm-table {
    display: table;
    width: 100%;
    height: 100%;
}
/* ячейка блочной таблицы */
.dm-cell {
    display: table-cell;
    padding: 0 1em;
    vertical-align: middle;
    text-align: center;
}
/* модальный блок */
.dm-modal {
 
    display: inline-block;
    padding: 20px;
/* максимально возможная ширина */
    
    background: #607d8b;
/* внешняя тень блока */
    -webkit-box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.22), 0px 19px 60px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.22), 0px 19px 60px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.22), 0px 19px 60px rgba(0, 0, 0, 0.3);
    color: #cfd8dc;
    text-align: left;
/* анимация и время задержки */
    -webkit-animation: fade .8s;
    -moz-animation: fade .8s;
    animation: fade 1.8s;
}


/* анимация при появлении затемнения и блоков с содержанием */
@-moz-keyframes fade {
    from { opacity: 0; }
to { opacity: 1 }
}
@-webkit-keyframes fade {
    from { opacity: 0; }
to { opacity: 1 } 
}
@keyframes fade {
    from { opacity: 0; }
to { opacity: 1 }
}

/* рисуем кнопарь закрытия */
 
.close {
    z-index: 9999;
    float: right;
    width: 30px;
    height: 30px;
    color: #cfd8dc;
    text-align: center;
    text-decoration: none;
    line-height: 26px;
    cursor: pointer;
}
.close:after {
    display: block;
    border: 2px solid #cfd8dc;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    content: 'X';
    -webkit-transition: all 0.6s;
    -moz-transition: all 0.6s;
    transition: all 0.6s;
    -webkit-transform: scale(0.85);
    -moz-transform: scale(0.85);
    -ms-transform: scale(0.85);
    transform: scale(0.85);
}
/* кнопка закрытия при наведении */
 
.close:hover:after {
    border-color: #fff;
    color: #fff;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

 </style>
       
       <!--Автодозвон--> 


   <body class="t-body" style="margin:0;">
      <!--allrecords-->
      <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="660965" data-tilda-page-id="4354600" data-tilda-page-alias="kalyannaya" data-tilda-formskey="e62e96154db33753c66bbc683343f744" >
         <div id="rec79851894" class="r t-rec" style=" " data-animationappear="off" data-record-type="205" >
            <!-- cover -->
            <div class="t-cover" id="recorddiv79851894" bgimgfield="img" style="height:100vh; background-image: url(img/f.png);" >
               
               <div class="t-cover__filter" style="height:100vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.50), rgba(0,0,0,0.50));background-image: -o-linear-gradient(top, rgba(0,0,0,0.50), rgba(0,0,0,0.50));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.50), rgba(0,0,0,0.50));background-image: linear-gradient(top, rgba(0,0,0,0.50), rgba(0,0,0,0.50));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#4c000000', endColorstr='#33000000');"></div>
               <div class="t-container">
                  <div class="t-width t-width_10" style="margin:0 auto;">
                     <div class="t-cover__wrapper t-valign_middle" style="height:100vh; position: relative;z-index:1;">
                        <div class="t182">
                           <div data-hook-content="covercontent">
                              <div class="t182__wrapper">
                              <div class="t182__title t-title t-title_xl" style="margin-bottom:-20px; font-size:35px;" field="title">Боулинг-Клуб</div>
                                 <div class="t182__title t-title t-title_xl" style="" field="title"><?php echo $sitename; ?></div>
                                 <div class="t182__descr t-descr t-descr_lg" style="" field="descr">Гарантируем отличное время провождение <br /></div>
                                 <div class="t182__descr t-descr t-descr_lg" style="" field="descr">При заказе онлайн вы получаете 30% скидку на всю кухню и алкоголь <br /></div>
                                 <div class="t182__buttons">
                                    <a href="#rec80994492" target="" class="t-btn " style="color:#ffffff;background-color:#e24ac1;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;text-transform:uppercase;">
                                       <table style="width:100%; height:100%;">
                                          <tr>
                                             <td>ЗАБРОНИРОВАТЬ</td>
                                          </tr>
                                       </table>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <style>#rec79851894 .t-btn[data-btneffects-first],
               #rec79851894 .t-btn[data-btneffects-second],
               #rec79851894 .t-submit[data-btneffects-first],
               #rec79851894 .t-submit[data-btneffects-second] {	position: relative; overflow: hidden; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);
               }
            </style>
            <script type="text/javascript">$(document).ready(function() {
               });
            </script>
         </div>
         <div id="rec80988553" class="r t-rec" style=" " data-animationappear="off" data-record-type="506" >
            <!-- T506 --><!-- cover -->
            <div class="t-cover" id="recorddiv80988553" bgimgfield="img" style="height:600px; background-image:url('img/maxresdefault.jpg');" >
               <div class="t-cover__carrier" id="coverCarry80988553" data-content-cover-id="80988553" data-content-cover-bg="img/maxresdefault.jpg" data-content-cover-height="600px" data-content-cover-parallax="" style="height:600px;background-attachment:scroll; "></div>
               <div class="t-cover__filter" style="height:600px;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.50), rgba(0,0,0,0.50));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.80), rgba(0,0,0,0.80));background-image: -o-linear-gradient(top, rgba(0,0,0,0.80), rgba(0,0,0,0.80));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.80), rgba(0,0,0,0.80));background-image: linear-gradient(top, rgba(0,0,0,0.80), rgba(0,0,0,0.80));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#33000000', endColorstr='#33000000');"></div>
               <div class="t506">
                  <div class="t-container">
                     <div class="t-cover__wrapper t-valign_middle" style="height:600px;">
                        <div class="t506__wrapper" data-hook-content="covercontent">
                           <div class="t506__topsection">
                              <div class="t-col t-col_12">
                                 <div class="t-section__topwrapper t-align_center">
                                    <div class="t-section__title t-title t-title_xs" field="btitle">Почему именно мы?</div>
                                    <div class="t-section__descr t-descr t-descr_xl t-margin_auto" field="bdescr">Лучше, чем дома, комфортнее, чем дома!</div>
                                 </div>
                              </div>
                              <div class="t-clear"></div>
                           </div>
                           <div class="t506__blockswrapper">
                              <div class="t506__col t-col t-col_4 t-item">
                                 <div class="t506__title t-title t-title_xl" style="" field="title">12</div>
                                 <div class="t506__line" style=" height: 1px; opacity:0.20;"></div>
                                 <div class="t506__text t-descr t-descr_sm" style="" field="descr">Игровых дорожек</div>
                              </div>
                              <div class="t506__col t-col t-col_4 t-item">
                                 <div class="t506__title t-title t-title_xl" style="" field="title2">1 538</div>
                                 <div class="t506__line" style=" height: 1px; opacity:0.20;"></div>
                                 <div class="t506__text t-descr t-descr_sm" style="" field="descr2">Столько клиентов уже посетили наш клуб!<br /></div>
                              </div>
                              <div class="t506__col t-col t-col_4 t-item">
                                 <div class="t506__title t-title t-title_xl" style="" field="title3">24/7</div>
                                 <div class="t506__line" style=" height: 1px; opacity:0.20;"></div>
                                 <div class="t506__text t-descr t-descr_sm" style="" field="descr3">Работаем круглосуточно, без выходных.<br /></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <script type="text/javascript"> $(document).ready(function() { $('.t506').bind('displayChanged',function(){ var t506_el = $("#rec80988553"); t506_el.find("div[data-hook-content]").css('height', 'auto'); var t506_hcover=t506_el.find(".t-cover").height(); var t506_hcontent=t506_el.find("div[data-hook-content]").outerHeight(); if(t506_hcontent>300 && t506_hcover<t506_hcontent){ var t506_hcontent=t506_hcontent+120; if(t506_hcontent>1000){t506_hcontent+=100;} t506_el.find(".t-cover").height(t506_hcontent); t506_el.find(".t-cover__filter").height(t506_hcontent); t506_el.find(".t-cover__carrier").height(t506_hcontent); t506_el.find(".t-cover__wrapper").height(t506_hcontent); if($isMobile == false){ setTimeout(function() { var t506_divvideo=t506_el.find(".t-cover__carrier"); if(t506_divvideo.find('iframe').length>0){ setWidthHeightYoutubeVideo(t506_divvideo, t506_hcontent+'px'); } }, 2000); }
               } }); }); 
            </script>
         </div>
         <div id="rec80994492" class="r t-rec t-rec_pt_30 t-rec_pb_150" style="padding-top:30px;padding-bottom:150px; " data-animationappear="off" data-record-type="599" >
            <!-- T599 --> 
            <div class="t599">
               <div class="t-section__container t-container">
                  <div class="t-col t-col_12">
                     <div class="t-section__topwrapper t-align_center">
                        <div class="t-section__title t-title t-title_xs" field="btitle">Тарифы</div>
                     </div>
                  </div>
               </div>
               <div class="t-container t599__withfeatured">
                  <div class="t599__col t-col t-col_4 t-align_center ">
                     <div class="t599__content" style="border: 1px solid #e0e6ed; border-radius: 9px;">
                        <div class="t599__title t-name t-name_lg" field="title" style="">Премиум</div>
                        <div class="t599__subtitle t-descr t-descr_xxs" field="subtitle" style="">Для компании<br /></div>
                        <img src="https://i.yapx.ru/D5fEH.png" style="width:200px;">
                        <div class="t599__price t-title t-title_xs" field="price" style="">₽6000<br /></div>
                        <div class="t599__descr t-descr t-descr_xs" field="descr" style="">
                           <ul>
                             <li>Две дорожки</li>
  <li>Стол для еды и напитков</li>
  <li>Удобные диваны</li>
  <li>6 часов игры</li>
<li>Игроков до 12</li>
                              </ul>
                        </div>
                        <a href="#order:Премиум=6000" target="_blank" class="t599__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#ff6600;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                           <table style="width:100%; height:100%;">
                              <tr>
                                 <td>Добавить в корзину</td>
                              </tr>
                           </table>
                        </a>
                     </div>
                  </div> 
                  <div class="t599__col t-col t-col_4 t-align_center t599__featured">
                     <div class="t599__content" style="border: 1px solid #e0e6ed; border-radius: 9px;">
                        <div class="t599__title t-name t-name_lg" field="title2" style="">VIP</div>
                        <div class="t599__subtitle t-descr t-descr_xxs" field="subtitle2" style="">Для спокойного отдыха<br /></div>
                        <img src="https://i.yapx.ru/D5drT.png" style="width:200px;">
                        <div class="t599__price t-title t-title_xs" field="price2" style="">₽4500<br /></div>
                        <div class="t599__descr t-descr t-descr_xs" field="descr2" style="">
                           <ul>
                              


  <li>Одна дорожка</li>
  <li>Стол для еды и напитков</li>
  <li>4 часа игры</li>
<li>Игроков до 6</li>

                             
                           </ul>
                        </div>
                        <a href="#order:VIP=4500" target="" class="t599__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#ff6600;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                           <table style="width:100%; height:100%;">
                              <tr>
                                 <td>Добавить в корзину</td>
                              </tr>
                           </table>
                        </a>
                     </div>
                  </div>
                  <div class="t599__col t-col t-col_4 t-align_center ">
                     <div class="t599__content" style="border: 1px solid #e0e6ed; border-radius: 9px;">
                        <div class="t599__title t-name t-name_lg" field="title3" style="">Стандарт</div>
                        <div class="t599__subtitle t-descr t-descr_xxs" field="subtitle3" style="">Обычная дорожка<br /></div>
                        <img src="https://i.yapx.ru/D5dnL.png" style="width:200px;">
                        <div class="t599__price t-title t-title_xs" field="price3" style="">₽2000<br /></div>
                        <div class="t599__descr t-descr t-descr_xs" field="descr3" style="">
                           <ul>
                               <li>Одна дорожка</li>
  <li>Стол для еды и напитков</li>
  <li>3 часа игры</li>
<li> Игроков до 4</li> 
                                 
                                
                             
                           </ul>
                        </div>
                        <a href="#order:Стандарт=2000" target="" class="t599__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#ff6600;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                           <table style="width:100%; height:100%;">
                              <tr>
                                 <td>Добавить в корзину</td>
                              </tr>
                           </table>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <style type="text/css"> #rec80994492 .t599__featured .t599__content { box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.10) !important; }</style>
            <script type="text/javascript"> $(document).ready(function() { setTimeout(function(){ t599_init('80994492'); }, 500); $(window).bind('resize', t_throttle(function(){t599_init('80994492')}, 250)); $('.t599').bind('displayChanged',function(){ t599_init('80994492'); }); }); $(window).load(function() { t599_init('80994492'); });</script> 
         </div>
         <div id="rec79849679" class="r t-rec" style=" " data-animationappear="off" data-record-type="826" >
            <div class="t826" data-galaxy-rec-ids="79851894" data-element-spread="" data-element-color="" data-element-opacity="0.70" style="display:table;width:100%;">
               <div class="t826__animation">
                  <div data-galaxy-id="79849679" class="t826__galaxy" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.50), rgba(20,39,112,0.50));	background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.90), rgba(20,39,112,0.80));	background-image: -o-linear-gradient(top, rgba(0,0,0,0.90), rgba(20,39,112,0.80));	background-image: -ms-linear-gradient(top, rgba(0,0,0,0.90), rgba(20,39,112,0.80));	background-image: linear-gradient(top, rgba(0,0,0,0.90), rgba(20,39,112,0.80));	filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#19000000', endColorstr='#33142770'); ">
                     <div class="t826__galaxy-wrapper">
                        <div class="t826__galaxy-far"></div>
                        <div class="t826__galaxy-mid"></div>
                        <div class="t826__galaxy-near"></div>
                     </div>
                  </div>
               </div>
            </div>
            <script type="text/javascript"> $(document).ready(function() { setTimeout(function() { t826_init('79849679'); }); });</script>
         </div>


<div id="rec87159577" class="r t-rec t-rec_pt_135 t-rec_pb_135" style="padding-top:135px;padding-bottom:135px;background-color:#000000; " data-animationappear="off" data-record-type="778" data-bg-color="#000000">
        <!-- t778 -->
        <div class="t778">
            <div class="t778__container t-container t778__container_mobile-grid" data-blocks-per-row="4">
                <div class="t778__col t-col t-col_3 t-align_center t-item t778__col_mobile-grid js-product t-animate" data-animate-style="fadeindown" data-animate-chain="yes" data-product-lid="1497456130776">
                    <div class="t778__wrapper" style="border-radius:30px;">
                        <a href="#order" >
                            <div class="t778__imgwrapper " style="padding-bottom:107.69230769231%;">
                                <div class="t778__markwrapper">
                                    <div class="t778__mark" field="li_mark__1497456130776" style="color:#ffffff;background-color:#ff4a4a;" >Скидка</div>
                                </div>
                                <div class="t778__bgimg t-bgimg js-product-img" data-original="img/pizza.png" style="background-image:url('img/pizza.png'); border-radius:30px 30px 0px 0px;top:-2px;" bgimgfield="li_gallery__1497456130776:::0"></div>
                            </div>
                        </a>
                        <div class="t778__content">
                            <a href="#order" >
                                <div class="t778__textwrapper ">
                                    <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1497456130776" style="font-weight:700;" >Пицца - средняя (32cм) <br /></div>
                                    <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1497456130776" style="" >Вкус на выбор</div>
                                    <div class="t778__price-wrapper">
                                        <div class="t778__price t778__price-item t-name t-name_xs" style="margin-right:3px;font-weight:400;">
                                            <div class="t778__price-currency">₽</div>
                                            <div class="t778__price-value js-product-price" field="li_price__1497456130776" >449</div>
                                        </div>
                                        <div class="t778__price_old t778__price-item t-name t-name_xs" style="font-weight:400;">
                                            <div class="t778__price-currency">₽</div>
                                            <div class="t778__price-value" field="li_price_old__1497456130776" >560</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="t778__btn-wrapper_absolute ">
                                <a href="#order" class="t778__btn t778__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#121212;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td>Добавить к заказу</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t778__col t-col t-col_3 t-align_center t-item t778__col_mobile-grid js-product t-animate" data-animate-style="fadeindown" data-animate-chain="yes" data-product-lid="1549714210608">
                    <div class="t778__wrapper" style="border-radius:30px;">
                        <a href="#order" >
                            <div class="t778__imgwrapper " style="padding-bottom:107.69230769231%;">
                                <div class="t778__markwrapper">
                                    <div class="t778__mark" field="li_mark__1549714210608" style="color:#ffffff;background-color:#ff4a4a;" >Скидка</div>
                                </div>
                                <div class="t778__bgimg t-bgimg js-product-img" data-original="img/pizza.png" style="background-image:url('img/pizza.png'); border-radius:30px 30px 0px 0px;top:-2px;" bgimgfield="li_gallery__1549714210608:::0"></div>
                            </div>
                        </a>
                        <div class="t778__content">
                            <a href="#order" >
                                <div class="t778__textwrapper ">
                                    <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1549714210608" style="font-weight:700;" >Пицца - большая (40cм) <br /></div>
                                    <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1549714210608" style="" >Вкус на выбор</div>
                                    <div class="t778__price-wrapper">
                                        <div class="t778__price t778__price-item t-name t-name_xs" style="margin-right:3px;font-weight:400;">
                                            <div class="t778__price-currency">₽</div>
                                            <div class="t778__price-value js-product-price" field="li_price__1549714210608" >590</div>
                                        </div>
                                        <div class="t778__price_old t778__price-item t-name t-name_xs" style="font-weight:400;">
                                            <div class="t778__price-currency">₽</div>
                                            <div class="t778__price-value" field="li_price_old__1549714210608" >690​</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="t778__btn-wrapper_absolute ">
                                <a href="#order" class="t778__btn t778__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#121212;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td>Добавить к заказу</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t778__col t-col t-col_3 t-align_center t-item t778__col_mobile-grid js-product t-animate" data-animate-style="fadeindown" data-animate-chain="yes" data-product-lid="1549714299996">
                    <div class="t778__wrapper" style="border-radius:30px;">
                        <a href="#order" >
                            <div class="t778__imgwrapper " style="padding-bottom:107.69230769231%;">
                                <div class="t778__bgimg t-bgimg js-product-img" data-original="img/juice.png" style="background-image:url('img/juice.png'); border-radius:30px 30px 0px 0px;top:-2px;" bgimgfield="li_gallery__1549714299996:::0"></div>
                            </div>
                        </a>
                        <div class="t778__content">
                            <a href="#order" >
                                <div class="t778__textwrapper ">
                                    <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1549714299996" style="font-weight:700;" >Фреш-сок (500мл)<br /></div>
                                    <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1549714299996" style="" >Вкус на выбор</div>
                                    <div class="t778__price-wrapper">
                                        <div class="t778__price t778__price-item t-name t-name_xs" style="font-weight:400;">
                                            <div class="t778__price-currency">₽</div>
                                            <div class="t778__price-value js-product-price" field="li_price__1549714299996" >200</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="t778__btn-wrapper_absolute ">
                                <a href="#order" class="t778__btn t778__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#121212;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td>Добавить к заказу</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t778__col t-col t-col_3 t-align_center t-item t778__col_mobile-grid js-product t-animate" data-animate-style="fadeindown" data-animate-chain="yes" data-product-lid="1549714374465">
                    <div class="t778__wrapper" style="border-radius:30px;">
                        <a href="#order" >
                            <div class="t778__imgwrapper " style="padding-bottom:107.69230769231%;">
                                <div class="t778__bgimg t-bgimg js-product-img" data-original="img/noroot.png" style="background-image:url('img/noroot.png'); border-radius:30px 30px 0px 0px;top:-2px;" bgimgfield="li_gallery__1549714374465:::0"></div>
                            </div>
                        </a>
                        <div class="t778__content">
                            <a href="#order" >
                                <div class="t778__textwrapper ">
                                    <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1549714374465" style="font-weight:700;" >Большой попкорн <br /></div>
                                    <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1549714374465" style="" >Соленый или сладкий</div>
                                    <div class="t778__price-wrapper">
                                        <div class="t778__price t778__price-item t-name t-name_xs" style="font-weight:400;">
                                            <div class="t778__price-currency">₽</div>
                                            <div class="t778__price-value js-product-price" field="li_price__1549714374465" >249</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="t778__btn-wrapper_absolute ">
                                <a href="#order" class="t778__btn t778__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#121212;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td>Добавить к заказу</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-clear t778__separator" ></div>
                <div class="t778__col t-col t-col_3 t-align_center t-item t778__col_mobile-grid js-product t-animate" data-animate-style="fadeindown" data-animate-chain="yes" data-product-lid="1549714558941">
                    <div class="t778__wrapper" style="border-radius:30px;">
                        <a href="#order" >
                            <div class="t778__imgwrapper " style="padding-bottom:107.69230769231%;">
                                <div class="t778__bgimg t-bgimg js-product-img" data-original="img/cakes.png" style="background-image:url('img/cakes.png'); border-radius:30px 30px 0px 0px;top:-2px;" bgimgfield="li_gallery__1549714558941:::0"></div>
                            </div>
                        </a>
                        <div class="t778__content">
                            <a href="#order" >
                                <div class="t778__textwrapper ">
                                    <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1549714558941" style="font-weight:700;" >Маффины<br /></div>
                                    <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1549714558941" style="" >6 штук</div>
                                    <div class="t778__price-wrapper">
                                        <div class="t778__price t778__price-item t-name t-name_xs" style="font-weight:400;">
                                            <div class="t778__price-currency">₽</div>
                                            <div class="t778__price-value js-product-price" field="li_price__1549714558941" >549</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="t778__btn-wrapper_absolute ">
                                <a href="#order" class="t778__btn t778__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#121212;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td>Добавить к заказу</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t778__col t-col t-col_3 t-align_center t-item t778__col_mobile-grid js-product t-animate" data-animate-style="fadeindown" data-animate-chain="yes" data-product-lid="1549714616036">
                    <div class="t778__wrapper" style="border-radius:30px;">
                        <a href="#order" >
                            <div class="t778__imgwrapper " style="padding-bottom:107.69230769231%;">
                                <div class="t778__bgimg t-bgimg js-product-img" data-original="img/martini.png" style="background-image:url('img/martini.png'); border-radius:30px 30px 0px 0px;top:-2px;" bgimgfield="li_gallery__1549714616036:::0"></div>
                            </div>
                        </a>
                        <div class="t778__content">
                            <a href="#order" >
                                <div class="t778__textwrapper ">
                                    <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1549714616036" style="font-weight:700;" >Martini Asti<br /></div>
                                    <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1549714616036" style="" >Белое, сладкое</div>
                                    <div class="t778__price-wrapper">
                                        <div class="t778__price t778__price-item t-name t-name_xs" style="font-weight:400;">
                                            <div class="t778__price-currency">₽</div>
                                            <div class="t778__price-value js-product-price" field="li_price__1549714616036" >1690</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="t778__btn-wrapper_absolute ">
                                <a href="#order" class="t778__btn t778__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#121212;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td>Добавить к заказу</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t778__col t-col t-col_3 t-align_center t-item t778__col_mobile-grid js-product t-animate" data-animate-style="fadeindown" data-animate-chain="yes" data-product-lid="1549714767150">
                    <div class="t778__wrapper" style="border-radius:30px;">
                        <a href="#order" >
                            <div class="t778__imgwrapper " style="padding-bottom:107.69230769231%;">
                                <div class="t778__bgimg t-bgimg js-product-img" data-original="img/don.png" style="background-image:url('img/don.png'); border-radius:30px 30px 0px 0px;top:-2px;" bgimgfield="li_gallery__1549714767150:::0"></div>
                            </div>
                        </a>
                        <div class="t778__content">
                            <a href="#order" >
                                <div class="t778__textwrapper ">
                                    <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1549714767150" style="font-weight:700;" >Don Quixote Red<br /></div>
                                    <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1549714767150" style="" >Красное, полусухое</div>
                                    <div class="t778__price-wrapper">
                                        <div class="t778__price t778__price-item t-name t-name_xs" style="font-weight:400;">
                                            <div class="t778__price-currency">₽</div>
                                            <div class="t778__price-value js-product-price" field="li_price__1549714767150" >449</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="t778__btn-wrapper_absolute ">
                                <a href="#order" class="t778__btn t778__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#121212;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td>Добавить к заказу</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <style> 
                @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700&subset=latin,cyrillic);.t-body{margin:0}#allrecords{-webkit-font-smoothing:antialiased;background-color:none}#allrecords a{color:#14a84f;text-decoration:none}#allrecords a[href^=tel]{color:inherit;text-decoration:none}#allrecords ol{padding-left:22px}#allrecords ul{padding-left:20px}#allrecords b,#allrecords strong{font-weight:700}@media print{body,html{min-width:1200px;max-width:1200px;padding:0;margin:0 auto;border:none}}.t-text{font-family:'Roboto',Arial,sans-serif;font-weight:300;color:#000}.t-text_xs{font-size:15px;line-height:1.55}.t-text_sm{font-size:18px;line-height:1.55}.t-text_md{font-size:20px;line-height:1.55}.t-text_lg{font-size:22px;line-height:1.55}.t-text_weight_plus{font-weight:400}.t-text-impact{font-family:'Roboto',Arial,sans-serif;font-weight:300;color:#000}.t-text-impact_xs{font-size:26px;line-height:1.5}.t-text-impact_sm{font-size:32px;line-height:1.35}.t-text-impact_md{font-size:38px;line-height:1.35}.t-text-impact_lg{font-size:42px;line-height:1.23}.t-name{font-family:'Roboto',Arial,sans-serif;font-weight:600;color:#000}.t-name_xs{font-size:16px;line-height:1.35}.t-name_sm{font-size:18px;line-height:1.35}.t-name_md{font-size:20px;line-height:1.35}.t-name_lg{font-size:22px;line-height:1.35}.t-name_xl{font-size:24px;line-height:1.35}.t-heading{font-family:'Roboto',Arial,sans-serif;font-weight:600;color:#000}.t-heading_xs{font-size:26px;line-height:1.23}.t-heading_sm{font-size:28px;line-height:1.17}.t-heading_md{font-size:30px;line-height:1.17}.t-heading_lg{font-size:32px;line-height:1.17}.t-title{font-family:'Roboto',Arial,sans-serif;font-weight:600;}.t-title_xxs{font-size:36px;line-height:1.23}.t-title_xs{font-size:42px;line-height:1.23}.t-title_sm{font-size:48px;line-height:1.23}.t-title_md{font-size:52px;line-height:1.23}.t-title_lg{font-size:64px;line-height:1.23}.t-title_xl{font-size:72px;line-height:1.17}.t-title_xxl{font-size:82px;line-height:1.17}.t-descr{font-family:'Roboto',Arial,sans-serif;font-weight:300;}.t-descr_xxs{font-size:14px;line-height:1.55}.t-descr_xs{font-size:16px;line-height:1.55}.t-descr_sm{font-size:18px;line-height:1.55}.t-descr_md{font-size:20px;line-height:1.55}.t-descr_lg{font-size:22px;line-height:1.55}.t-descr_xl{font-size:24px;line-height:1.5}.t-descr_xxl{font-size:26px;line-height:1.45}.t-descr_xxxl{font-size:30px;line-height:1.45;letter-spacing:.45}.t-uptitle{font-family:'Roboto',Arial,sans-serif;font-weight:600;color:#000;letter-spacing:2.5px}.t-uptitle_xs{font-size:12px}.t-uptitle_sm{font-size:14px}.t-uptitle_md{font-size:16px}.t-uptitle_lg{font-size:18px}.t-uptitle_xl{font-size:20px;letter-spacing:2px}.t-uptitle_xxl{font-size:22px;letter-spacing:2px}.t-uptitle_xxxl{font-size:24px;letter-spacing:2px}@media screen and (max-width:1200px){.t-text_xs{font-size:14px}.t-text_sm{font-size:16px}.t-text_md{font-size:18px}.t-text_lg{font-size:20px}.t-text-impact_md{font-size:30px}.t-descr_xxs{font-size:12px}.t-descr_xs{font-size:14px}.t-descr_sm{font-size:16px}.t-descr_md{font-size:18px}.t-descr_lg{font-size:20px}.t-descr_xl{font-size:22px}.t-descr_xxl{font-size:22px}.t-descr_xxxl{font-size:26px}.t-uptitle_md{font-size:14px}.t-uptitle_lg{font-size:16px}.t-uptitle_xl{font-size:18px}.t-uptitle_xxl{font-size:20px}.t-uptitle_xxxl{font-size:22px}.t-title_xxs{font-size:32px}.t-title_xs{font-size:38px}.t-title_sm{font-size:44px}.t-title_md{font-size:48px}.t-title_lg{font-size:60px}.t-title_xl{font-size:68px}.t-title_xxl{font-size:78px}.t-name_xs{font-size:14px}.t-name_sm{font-size:16px}.t-name_md{font-size:18px}.t-name_lg{font-size:20px}.t-name_xl{font-size:22px}.t-heading_xs{font-size:24px}.t-heading_sm{font-size:26px}.t-heading_md{font-size:28px}.t-heading_lg{font-size:30px}}@media screen and (max-width:640px){.t-text_xs{font-size:12px;line-height:1.45}.t-text_sm{font-size:14px;line-height:1.45}.t-text_md{font-size:16px;line-height:1.45}.t-text_lg{font-size:18px;line-height:1.45}.t-text-impact_sm{font-size:22px}.t-text-impact_md{font-size:26px}.t-text-impact_lg{font-size:28px}.t-descr_xs{font-size:12px;line-height:1.45}.t-descr_sm{font-size:14px;line-height:1.45}.t-descr_md{font-size:16px;line-height:1.45}.t-descr_lg{font-size:18px;line-height:1.45}.t-descr_xl{font-size:20px;line-height:1.4}.t-descr_xxl{font-size:20px}.t-descr_xxxl{font-size:22px}.t-uptitle_xs{font-size:10px}.t-uptitle_sm{font-size:10px}.t-uptitle_md{font-size:12px}.t-uptitle_lg{font-size:14px}.t-uptitle_xl{font-size:16px}.t-uptitle_xxl{font-size:18px}.t-uptitle_xxxl{font-size:20px}.t-title_xxs{font-size:28px}.t-title_xs{font-size:30px}.t-title_sm{font-size:30px}.t-title_md{font-size:30px}.t-title_lg{font-size:30px}.t-title_xl{font-size:32px}.t-title_xxl{font-size:36px}.t-name_xs{font-size:12px}.t-name_sm{font-size:14px}.t-name_md{font-size:16px}.t-name_lg{font-size:18px}.t-name_xl{font-size:20px}.t-heading_xs{font-size:22px}.t-heading_sm{font-size:24px}.t-heading_md{font-size:24px}.t-heading_lg{font-size:26px}}@media screen and (max-width:480px){.t-title_xl{font-size:30px}.t-title_xxl{font-size:30px}}.t-records{-webkit-font_smoothing:antialiased;background-color:none}.t-records a{color:#14a84f;text-decoration:none}.t-records a[href^=tel]{color:inherit;text-decoration:none}.t-records ol{padding-left:22px;margin-top:0;margin-bottom:10px}.t-records ul{padding-left:20px;margin-top:0;margin-bottom:10px}.t-cover{height:700px;width:100%;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-color:#000;background-repeat:no-repeat;background-position:center center;text-align:center;vertical-align:middle;position:relative;background-attachment:fixed;overflow:hidden}.t-cover__carrier{height:700px;width:100%;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-repeat:no-repeat;background-position:center center;text-align:center;vertical-align:middle;position:relative;background-attachment:fixed;transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0);-moz-transform:unset}@supports (-ms-ime-align:auto){.t-cover__carrier{transform:unset}}.t-cover__carrier.loading{opacity:0}.t-cover__carrier[data-content-cover-bg=""].loading{opacity:1!important}.t-cover__carrier.loaded{opacity:1;transition:opacity 700ms}@media screen and (max-device-width:1024px){.t-cover{background-attachment:scroll}.t-cover__carrier{background-attachment:scroll}}@media print{.t-cover{background-attachment:scroll}.t-cover__carrier{background-attachment:scroll}}.t-cover__filter{height:700px;width:100%;position:absolute;top:0;left:0}.t-cover .t-container,.t-cover .t-container_100,.t-cover .t-container_10,.t-cover .t-container_8{position:absolute;top:0;left:0;bottom:0;right:0}.t-cover__wrapper{height:700px;display:table-cell;width:1200px}.t-cover__wrapper span.space{display:inline-block;height:100%;width:1px}@media screen and (max-width:640px){.t-cover{height:400px;background-attachment:fixed}.t-cover__carrier{background-attachment:scroll!important;background-size:cover;background-position:center center}.t-cover__filter{height:400px}.t-cover__wrapper{height:400px}}@-webkit-keyframes t-arrow-bottom{0%{-moz-transform:translateY(0);-ms-transform:translateY(0);-webkit-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}50%{-moz-transform:translateY(-7px);-ms-transform:translateY(-7px);-webkit-transform:translateY(-7px);-o-transform:translateY(-7px);transform:translateY(-7px)}55%{-moz-transform:translateY(-7px);-ms-transform:translateY(-7px);-webkit-transform:translateY(-7px);-o-transform:translateY(-7px);transform:translateY(-7px)}100%{-moz-transform:translateY(0);-ms-transform:translateY(0);-webkit-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}}@keyframes t-arrow-bottom{0%{-moz-transform:translateY(0);-ms-transform:translateY(0);-webkit-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}50%{-moz-transform:translateY(-7px);-ms-transform:translateY(-7px);-webkit-transform:translateY(-7px);-o-transform:translateY(-7px);transform:translateY(-7px)}55%{-moz-transform:translateY(-7px);-ms-transform:translateY(-7px);-webkit-transform:translateY(-7px);-o-transform:translateY(-7px);transform:translateY(-7px)}100%{-moz-transform:translateY(0);-ms-transform:translateY(0);-webkit-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}}.t-cover__arrow-wrapper_animated{animation:t-arrow-bottom 1.7s infinite ease}.t-cover__arrow{position:absolute;z-index:9;bottom:40px;right:0;left:0;text-align:center}.t-cover__arrow-wrapper{display:inline-block;-webkit-transition:all ease-in-out 0.2s;-moz-transition:all ease-in-out 0.2s;-o-transition:all ease-in-out 0.2s;transition:all ease-in-out 0.2s;cursor:pointer}.t-cover__arrow-wrapper:hover{opacity:.7}.t-cover__arrow-svg{fill:#fff}@media screen and (max-width:640px){.t-cover__arrow_mobile{-moz-transform:scale(.7);-ms-transform:scale(.7);-webkit-transform:scale(.7);-o-transform:scale(.7);transform:scale(.7)}.t-cover__arrow{bottom:14px}}.t-btn{display:inline-block;font-family:'Roboto',Arial,sans-serif;height:60px;border:0 none;font-size:16px;padding-left:60px;padding-right:60px;text-align:center;white-space:nowrap;vertical-align:middle;font-weight:700;background-image:none;cursor:pointer;-webkit-appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.t-btn td{vertical-align:middle}.t-btn_sending{opacity:.5}@media screen and (max-width:640px){.t-btn{white-space:normal;padding-left:30px;padding-right:30px}}.t-btn_xs{height:35px;font-size:13px;padding-left:15px;padding-right:15px}.t-btn_sm{height:45px;font-size:14px;padding-left:30px;padding-right:30px}.t-btn_lg{height:60px;font-size:22px;padding-left:70px;padding-right:70px}.t-btn_xl{height:80px;font-size:26px;padding-left:80px;padding-right:80px}.t-btn_xxl{height:100px;font-size:30px;padding-left:90px;padding-right:90px}@media screen and (max-width:640px){.t-btn_sm{padding-left:20px;padding-right:20px}.t-btn_lg{font-size:18px;padding-left:40px;padding-right:40px}.t-btn_xl{font-size:22px;padding-left:50px;padding-right:50px}.t-btn_xxl{font-size:26px;padding-left:60px;padding-right:60px}}.t-submit{font-family:'Roboto',Arial,sans-serif;text-align:center;height:60px;border:0 none;font-size:16px;padding-left:60px;padding-right:60px;-webkit-appearance:none;font-weight:700;white-space:nowrap;background-image:none;cursor:pointer;margin:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;outline:none;background:transparent}.t-submit_sending{opacity:.5}@media screen and (max-width:640px){.t-submit{white-space:normal;padding-left:30px;padding-right:30px}}.t-input{margin:0;font-family:'Roboto',Arial,sans-serif;font-size:100%;height:60px;padding:0 20px;font-size:16px;line-height:1.33;width:100%;border:0 none;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;outline:none;-webkit-appearance:none}.t-input::-moz-focus-inner{padding:0;border:0}.t-input_bbonly{outline:none;padding-left:0!important;padding-right:0!important;border-top:0!important;border-right:0!important;border-left:0!important;background-color:transparent!important;border-radius:0!important;border-bottom:1px solid}.t-input_pvis{padding:26px 20px 10px 20px}.t-input__vis-ph{font-size:16px;font-family:'Roboto',Arial,sans-serif;line-height:1;opacity:.5;position:absolute;left:20px;top:22px;height:16px;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition:transform 0.2s linear;transition:transform 0.2s linear;-webkit-transform-origin:left;transform-origin:left;pointer-events:none;white-space:nowrap}.t-input:focus~.t-input__vis-ph,.t-input_has-content+.t-input__vis-ph{-webkit-transform:translateY(-12px) scale(.7);transform:translateY(-12px) scale(.7)}.t-input:invalid{box-shadow:none}.t-input-group_cb div[data-customstyle=yes]{display:inline;vertical-align:middle}.t-form_bbonly .t-input__vis-ph{left:0px!important}.t-form_bbonly .js-error-control-box .t-input__vis-ph{left:10px!important}.t-select{width:100%;box-sizing:border-box;cursor:pointer;height:60px;padding:0 45px 0 20px;font-family:'Roboto',Arial,sans-serif;font-size:16px;line-height:1.33;outline:0;border:0;border-radius:0;background:transparent;-webkit-appearance:none;appearance:none;-moz-appearance:none}.t-select_bbonly{outline:none;padding-left:0!important;padding-right:0!important;border-top:0!important;border-right:0!important;border-left:0!important;background-color:transparent!important;border-radius:0!important}.t-select_bbonly option{color:#000;background-color:#fff}.t-select__wrapper{position:relative}.t-select__wrapper:after{content:' ';width:0;height:0;border-style:solid;border-width:6px 5px 0 5px;border-color:#000 transparent transparent transparent;position:absolute;right:20px;top:0;bottom:0;margin:auto;pointer-events:none}.t-select::-ms-expand{width:0;height:0;opacity:0}.t-select__wrapper_bbonly::after{right:0px!important}.t-checkbox__control{display:block;position:relative;cursor:pointer}.t-checkbox__control .t-checkbox{position:absolute;z-index:-1;opacity:0}.t-checkbox__indicator{position:relative;display:inline-block;vertical-align:middle;height:20px;width:20px;border:2px solid #000;box-sizing:border-box;margin-right:10px;-webkit-transition:all 0.2s;transition:all 0.2s;opacity:.6}.t-checkbox__indicator:after{content:'';position:absolute;display:none;left:6px;top:2px;width:3px;height:8px;border:solid #000;border-width:0 2px 2px 0;transform:rotate(45deg)}.t-checkbox__control .t-checkbox:checked~.t-checkbox__indicator{opacity:1}.t-checkbox__control .t-checkbox:checked~.t-checkbox__indicator:after{display:block}.t-checkbox__labeltext,.t-checkbox__labeltext div{display:inline}.t-checkboxes__wrapper .t-checkbox__control{margin:10px 0}.t-radio{position:absolute;z-index:-1;opacity:0}.t-radio__control{display:table;position:relative;cursor:pointer;margin:0 0 10px 0}.t-radio__control:first-child{margin:3px 0 10px 0}.t-radio__control:last-child{margin:0 0 0 0}.t-radio__indicator{position:relative;display:inline-block;vertical-align:middle;height:20px;width:20px;border-color:#000;border-style:solid;border-width:2px;box-sizing:border-box;border-radius:50%;margin-right:10px;-webkit-transition:all 0.2s;transition:all 0.2s;opacity:.6}.t-radio__indicator:after{content:'';width:10px;height:10px;background:#000;border-radius:50%;position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;opacity:0;-webkit-transition:all 0.2s;transition:all 0.2s}.t-radio__control .t-radio:checked~.t-radio__indicator:after{opacity:1}.t-radio__control .t-radio:checked~.t-radio__indicator{opacity:1}.t-inputquantity{width:70px;text-align:center;margin-left:.5rem;margin-right:.5rem}.t-inputquantity__btn{font-size:26px;cursor:pointer;margin-left:.5rem;margin-right:.5rem;-webkit-user-select:none;-moz-user-select:none;-khtml-user-select:none;-ms-user-select:none}.t-form .uploadcare-widget-button{background:#333;font-family:'Roboto',Arial,sans-serif;line-height:1.4;font-size:14px}.t-form .uploadcare-widget-button:hover{background:#444}.t-input-title{display:block;vertical-align:middle;height:100%;padding-right:10px}.t-input-subtitle{display:block;vertical-align:middle;height:100%;padding-right:10px}.t-form__bottom-text{margin-top:30px;text-align:center}.t-input-error{display:none;color:red;font-family:'Roboto',Arial,sans-serif;font-size:13px;margin-top:5px}.t-form .js-error-control-box .t-input-error{display:block}.t-form .js-error-control-box .t-input,.t-form .js-error-control-box .t-checkbox__control,.t-form .js-error-control-box .t-checkboxes__wrapper,.t-form .js-error-control-box .t-select__wrapper,.t-form .js-error-control-box .t-radio__wrapper,.t-form .js-error-control-box .uploadcare-widget{border:1px solid red!important}.t-form .js-error-control-box .t-checkboxes__wrapper,.t-form .js-error-control-box .t-radio__wrapper,.t-form .js-error-control-box .t-checkbox__control{padding:10px}.t-form .js-error-control-box .t-checkboxes__wrapper .t-checkbox__control{border:none!important;padding:0}.t-form .js-error-control-box .t-input.t-input_bbonly{padding-left:10px!important}.t-form__errorbox-bottom{display:none}.t-form__errorbox-wrapper{background:#F95D51;padding:10px;text-align:center;margin-bottom:20px;font-family:'Roboto',Arial,sans-serif}.t-form__errorbox-text{color:#fff;box-sizing:border-box;padding:0 10px 10px 10px;font-family:'Roboto',Arial,sans-serif}.t-form__errorbox-item{padding-top:10px;display:none;font-family:'Roboto',Arial,sans-serif}.t-form__successbox{text-align:center;background:#62C584;color:#fff;padding:20px;margin-bottom:20px;font-family:'Roboto',Arial,sans-serif}@keyframes t-submit-spinner{to{transform:rotate(360deg)}}.t-form .t-submit{position:relative}.t-form .t-submit.t-btn_sending,.t-btn.t-btn_sending{color:transparent!important}.t-form .t-btn_sending:before,.t-btn.t-btn_sending:before{content:'';box-sizing:border-box;position:absolute;top:50%;left:50%;width:30px;height:30px;margin-top:-15px;margin-left:-15px;border-radius:50%;border:2px solid #ccc;border-top-color:#333;animation:t-submit-spinner .6s linear infinite}.t-btntext{font-family:'Roboto',Arial,sans-serif;color:#000;font-size:20px;line-height:1.55;font-weight:700;text-decoration:none;cursor:pointer;display:inline-block}.t-btntext_sm{font-size:16px}.t-btntext_lg{font-size:24px}.t-uppercase.t-btntext{font-size:16px}.t-uppercase.t-btntext_sm{font-size:14px}.t-uppercase.t-btntext_lg{font-size:20px}.t-btntext:after{content:"\00a0â†’";font-family:Arial,Helvetica,sans-serif}@media screen and (max-width:640px){.t-btntext_lg{font-size:20px}}@media screen and (max-width:1200px){.t-screenmin-1200px{display:none}}@media screen and (max-width:980px){.t-screenmin-980px{display:none}}@media screen and (max-width:640px){.t-screenmin-640px{display:none}}@media screen and (max-width:480px){.t-screenmin-480px{display:none}}@media screen and (max-width:320px){.t-screenmin-320px{display:none}}@media screen and (min-width:321px){.t-screenmax-320px{display:none}}@media screen and (min-width:481px){.t-screenmax-480px{display:none}}@media screen and (min-width:641px){.t-screenmax-640px{display:none}}@media screen and (min-width:981px){.t-screenmax-980px{display:none}}@media screen and (min-width:1201px){.t-screenmax-1200px{display:none}}.t-hidden{display:none}.t-opacity_50{filter:alpha(opacity=50);KHTMLOpacity:.5;MozOpacity:.5;opacity:.5}.t-opacity_70{filter:alpha(opacity=70);KHTMLOpacity:.7;MozOpacity:.7;opacity:.7}.t-uppercase{text-transform:uppercase}.t-align_center{text-align:center}.t-align_left{text-align:left}.t-align_right{text-align:right}.t-margin_auto{margin-left:auto;margin-right:auto}.t-valign_middle{vertical-align:middle}.t-valign_top{vertical-align:top}.t-valign_bottom{vertical-align:bottom}.t-margin_left_auto{margin-right:0;margin-left:auto}.yashare-style .b-share-btn__facebook,.yashare-style .b-share-btn__twitter,.yashare-style .b-share-btn__vkontakte{background-color:transparent!important}.yashare-style .b-share__link{-webkit-border-radius:0px!important;border-radius:0px!important}.yashare-style-black-white .b-share-btn__wrap{background-color:#000!important;padding:5px!important}.yashare-style-transp-white .b-share-btn__wrap{padding:5px!important}.yashare-style-transp-white .b-share-counter{color:#fff;font-weight:700}.yashare-style-white-black .b-share-btn__wrap{background-color:#fff!important;padding:5px!important}.yashare-style-white-black .b-share-icon{background-image:url(//static.tildacdn.com/img/b-share_counter_large_white.png)!important}.yashare-style-transp-black .b-share-btn__wrap{padding:5px!important}.yashare-style-transp-black .b-share-icon{background-image:url(//static.tildacdn.com/img/b-share_counter_large_white.png)!important}.yashare-style-transp-black .b-share-counter{color:#000;font-weight:700}.ya-share2 ul{padding-left:0px!important}.carousel{position:relative}.carousel ol{padding-left:0px!important}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:0.6s ease-in-out left;transition:0.6s ease-in-out left}.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;height:auto;line-height:1}.carousel-inner .widthauto{width:auto;max-width:100%;vertical-align:middle}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;opacity:.2;filter:alpha(opacity=20)}.carousel-control.right{right:0;left:auto}.carousel-control .carousel-control-left{position:absolute;top:48%;z-index:5;display:inline-block;left:20%;height:34px;width:21px;background:url(//static.tildacdn.com/img/aboutSliderControls.png) no-repeat}.carousel-control .carousel-control-left-white{position:absolute;top:48%;z-index:5;display:inline-block;left:20%;height:34px;width:21px;background:url(//static.tildacdn.com/img/aboutSliderControls_white.png) no-repeat}.carousel-control .carousel-control-right{position:absolute;top:48%;z-index:5;display:inline-block;right:20%;height:34px;width:21px;background:url(//static.tildacdn.com/img/aboutSliderControls.png) no-repeat;background-position:left bottom}.carousel-control .carousel-control-right-white{position:absolute;top:48%;z-index:5;display:inline-block;right:20%;height:34px;width:21px;background:url(//static.tildacdn.com/img/aboutSliderControls_white.png) no-repeat;background-position:left bottom}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators.dotsbottom{bottom:-60px}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;margin-left:5px;margin-right:5px;text-indent:-999px;cursor:pointer;background-color:#000;border:none;border-radius:10px}.carousel-indicators .active{width:10px;height:10px;margin:0;margin-left:4px;margin-right:4px;border:1px solid #000;border-radius:10px;background-color:transparent}.carousel-indicators li.white{background-color:#fff}.carousel-indicators li.white.active{border:1px solid #fff;border-radius:10px;background-color:transparent}.carousel-caption-imgs h6{font-family:'Roboto',Arial,sans-serif;color:#000;font-weight:400;font-size:14px;line-height:28px;padding-top:28px;padding-bottom:0;text-align:center}.carousel-caption-imgs p{font-family:'Roboto',Arial,sans-serif;color:#000;font-size:14px;line-height:28px;padding-top:14px;padding-bottom:14px;text-align:center}.carousel-title{font-family:'Roboto',Arial,sans-serif;color:#000;font-size:18px;line-height:28px;padding-top:36px;padding-bottom:14px;text-align:center}.carousel-descr{font-family:'Roboto',Arial,sans-serif;color:#000;font-size:14px;line-height:28px;padding-top:14px;padding-bottom:14px;text-align:center}@media screen and (min-width:768px){.carousel-indicators{bottom:20px}}.clearfix:before,.clearfix:after{display:table;content:" "}.clearfix:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}@media screen and (max-width:960px){.carousel-control .carousel-control-left{left:10%}.carousel-control .carousel-control-left-white{left:10%}.carousel-control .carousel-control-right{right:10%}.carousel-control .carousel-control-right-white{right:10%}}.t-tildalabel{background-color:#000;color:#fff;width:100%;height:70px;font-family:Arial;font-size:14px}.t-tildalabel:hover .t-tildalabel__wrapper{opacity:1}.t-tildalabel_white{background-color:#fff;color:#000}.t-tildalabel_gray{background-color:#eee;color:#000}.t-tildalabel__wrapper{display:table;height:30px;width:270px;margin:0 auto;padding-top:20px;opacity:.4}.t-tildalabel__txtleft{display:table-cell;width:120px;height:30px;vertical-align:middle;text-align:right;padding-right:12px;font-weight:300;font-size:12px}.t-tildalabel__wrapimg{display:table-cell;width:30px;height:30px;vertical-align:middle}.t-tildalabel__img{width:30px;height:30px;vertical-align:middle}.t-tildalabel__txtright{display:table-cell;width:120px;height:30px;vertical-align:middle;padding-left:12px;font-weight:500;letter-spacing:2px}.t-tildalabel__link{color:#fff;text-decoration:none;vertical-align:middle}.t-tildalabel_white .t-tildalabel__link,.t-tildalabel_gray .t-tildalabel__link{color:#000}.t-tildalabel-free{padding:35px 0 45px;height:auto;text-align:center}.t-tildalabel-free__main{max-width:340px;display:block;margin:0 auto;line-height:1.4;letter-spacing:.2px;color:inherit;opacity:.4}.t-tildalabel-free__links-wr{display:table;margin:30px auto 0}.t-tildalabel-free__txt-link{display:table-cell;padding:0 15px;font-size:13px;text-decoration:none;color:inherit;opacity:.25}.t-tildalabel-free__txt-link:hover,.t-tildalabel-free__main:hover{opacity:1}@media screen and (max-width:640px){.t-tildalabel-free__txt-link{display:block;padding:5px 30px}.t-tildalabel-free__main{opacity:.7}.t-tildalabel-free__txt-link{opacity:.4}}.t-carousel{position:relative}.t-carousel__inner{position:relative;overflow:hidden;margin:0 auto}.t-carousel__slides{position:relative}.t-carousel__inner>.t-carousel__item{position:relative;display:none;-webkit-transition:0 ease-in-out left;-moz-transition:0 ease-in-out left;-o-transition:0 ease-in-out left;transition:0 ease-in-out left}.t-carousel__inner>.t-carousel__item.t-carousel__animation_fast{-webkit-transition:.3s ease-in-out left;-moz-transition:.3s ease-in-out left;-o-transition:.3s ease-in-out left;transition:.3s ease-in-out left}.t-carousel__inner>.t-carousel__item.t-carousel__animation_slow{-webkit-transition:.6s ease-in-out left;-moz-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.t-carousel__item__wrapper{position:relative;margin:0 auto}.t-carousel__item__img{background-size:contain;background-repeat:no-repeat;background-position:center;position:absolute;top:0;right:0;bottom:0;left:0}.t-carousel_cover .t-carousel__item__img{background-size:cover}.t-carousel__inner>.active,.t-carousel__inner>.next,.t-carousel__inner>.prev{display:block}.t-carousel__inner>.active{left:0}.t-carousel__inner>.next,.t-carousel__inner>.prev{position:absolute;top:0;width:100%}.t-carousel__inner>.next{left:100%}.t-carousel__inner>.prev{left:-100%}.t-carousel__inner>.next.left,.t-carousel__inner>.prev.right{left:0}.t-carousel__inner>.active.left{left:-100%}.t-carousel__inner>.active.right{left:100%}.t-carousel__arrows__container{position:absolute;top:0;left:0;right:0;bottom:0;margin:0 auto;pointer-events:none;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=',sizingMethod='scale');background:none!important}.t-carousel__arrow_outsidesmall .t-carousel__arrow__wrapper_left{left:16px}.t-carousel__arrow_outsidesmall .t-carousel__arrow__wrapper_right{right:16px}.t-carousel__arrow_outsidemiddle .t-carousel__arrow__wrapper_left{left:20px}.t-carousel__arrow_outsidemiddle .t-carousel__arrow__wrapper_right{right:20px}.t-carousel__control{position:absolute;top:0;bottom:0;left:0;width:15%;-webkit-transition:all ease-in-out 0.3s;-moz-transition:all ease-in-out 0.3s;-o-transition:all ease-in-out 0.3s;transition:all ease-in-out 0.3s;pointer-events:auto}.t-carousel__control:hover{opacity:.6}.t-carousel__arrow{width:34px;height:34px;background:transparent;-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}.t-carousel__arrow.t-carousel__arrow_small{width:20px;height:20px}.t-carousel__arrow.t-carousel__arrow_large{width:54px;height:54px}.t-carousel__arrow__wrapper{-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-webkit-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);position:absolute;top:50%}.t-carousel__arrow__wrapper_left{left:30px}.t-carousel__arrow__wrapper_right{right:30px}.t-carousel__arrow_right{border-top:3px solid;border-right:3px solid}.t-carousel__arrow_right.t-carousel__arrow_light{border-top:1px solid;border-right:1px solid}.t-carousel__arrow_right.t-carousel__arrow_bold{border-top:6px solid;border-right:6px solid}.t-carousel__arrow_left{border-left:3px solid;border-bottom:3px solid}.t-carousel__arrow_left.t-carousel__arrow_light{border-left:1px solid;border-bottom:1px solid}.t-carousel__arrow_left.t-carousel__arrow_bold{border-left:6px solid;border-bottom:6px solid}.t-carousel__control.right{right:0;left:auto}@media screen and (max-width:768px){.t-carousel__control .t-carousel__arrow{width:12px;height:12px}.t-carousel-control{width:10%}.t-carousel__arrow__left{left:15px}.t-carousel__arrow__right{right:15px}}.t-carousel__indicators.carousel-indicators{z-index:15;text-align:center;list-style:none;position:relative;padding-left:0!important;margin:0 auto;padding:20px 0;bottom:auto;left:auto}.t-carousel__indicators.t-carousel__indicators_light{padding:15px 0 18px}.t-carousel__indicators.t-carousel__indicators_bold{padding:24px 0 21px}.t-carousel__indicators .t-carousel__indicator{display:inline-block;width:8px;height:8px;margin:0 6px;text-indent:-999px;cursor:pointer;background-color:#222;border:none;border-radius:10px;opacity:.4;-webkit-transition:.2s ease-in-out opacity;-moz-transition:.2s ease-in-out opacity;-o-transition:.2s ease-in-out opacity;transition:.2s ease-in-out opacity}@media screen and (max-width:640px){.t-carousel__indicators.carousel-indicators,.t-carousel__indicators.t-carousel__indicators_light,.t-carousel__indicators.t-carousel__indicators_bold{padding:15px 0}}.t-carousel__indicators.t-carousel__indicators_light .t-carousel__indicator{width:4px;height:4px;margin:0 5px}.t-carousel__indicators.t-carousel__indicators_bold .t-carousel__indicator{width:10px;height:10px;margin:0 6px}.t-carousel__indicators .t-carousel__indicator:hover{opacity:.8}.t-carousel__indicators .t-carousel__indicator.active{opacity:1}.t-carousel__indicators.t-carousel__indicators_inside{position:absolute;bottom:0;left:0;right:0}.t-carousel__caption-inside{display:none}.t-carousel__caption_wrapper{border-top:1px solid #eee;padding:14px 0}.t-carousel__descr{margin-top:5px;color:#777}.t-mbfix{opacity:.01;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);position:fixed;width:100%;height:500px;background-color:white;top:0;left:0;z-index:10000;-webkit-transition:all 0.1s ease;transition:all 0.1s ease}.t-mbfix_hide{-webkit-transform:translateX(3000px);-ms-transform:translateX(3000px);transform:translateX(3000px)}.r_anim{-webkit-transition:opacity 0.5s;transition:opacity 0.5s}.r_hidden{opacity:0}.r_showed{opacity:1}img:not([src]){visibility:hidden}.t-rec_pt_0{padding-top:0}.t-rec_pt_15{padding-top:15px}.t-rec_pt_30{padding-top:30px}.t-rec_pt_45{padding-top:45px}.t-rec_pt_60{padding-top:60px}.t-rec_pt_75{padding-top:75px}.t-rec_pt_90{padding-top:90px}.t-rec_pt_105{padding-top:105px}.t-rec_pt_120{padding-top:120px}.t-rec_pt_135{padding-top:135px}.t-rec_pt_150{padding-top:150px}.t-rec_pt_165{padding-top:165px}.t-rec_pt_180{padding-top:180px}.t-rec_pt_195{padding-top:195px}.t-rec_pt_210{padding-top:210px}.t-rec_pb_0{padding-bottom:0}.t-rec_pb_15{padding-bottom:15px}.t-rec_pb_30{padding-bottom:30px}.t-rec_pb_45{padding-bottom:45px}.t-rec_pb_60{padding-bottom:60px}.t-rec_pb_75{padding-bottom:75px}.t-rec_pb_90{padding-bottom:90px}.t-rec_pb_105{padding-bottom:105px}.t-rec_pb_120{padding-bottom:120px}.t-rec_pb_135{padding-bottom:135px}.t-rec_pb_150{padding-bottom:150px}.t-rec_pb_165{padding-bottom:165px}.t-rec_pb_180{padding-bottom:180px}.t-rec_pb_195{padding-bottom:195px}.t-rec_pb_210{padding-bottom:210px}@media screen and (max-width:480px){.t-rec_pt_0{padding-top:0}.t-rec_pt_15{padding-top:15px}.t-rec_pt_30{padding-top:30px}.t-rec_pt_45{padding-top:45px}.t-rec_pt_60{padding-top:60px}.t-rec_pt_75{padding-top:75px}.t-rec_pt_90{padding-top:90px}.t-rec_pt_105{padding-top:90px}.t-rec_pt_120{padding-top:90px!important}.t-rec_pt_135{padding-top:90px!important}.t-rec_pt_150{padding-top:90px!important}.t-rec_pt_165{padding-top:90px!important}.t-rec_pt_180{padding-top:120px!important}.t-rec_pt_195{padding-top:120px!important}.t-rec_pt_210{padding-top:120px!important}.t-rec_pb_0{padding-bottom:0}.t-rec_pb_15{padding-bottom:15px}.t-rec_pb_30{padding-bottom:30px}.t-rec_pb_45{padding-bottom:45px}.t-rec_pb_60{padding-bottom:60px}.t-rec_pb_75{padding-bottom:75px}.t-rec_pb_90{padding-bottom:90px}.t-rec_pb_105{padding-bottom:90px}.t-rec_pb_120{padding-bottom:90px!important}.t-rec_pb_135{padding-bottom:90px!important}.t-rec_pb_150{padding-bottom:90px!important}.t-rec_pb_165{padding-bottom:90px!important}.t-rec_pb_180{padding-bottom:120px!important}.t-rec_pb_195{padding-bottom:120px!important}.t-rec_pb_210{padding-bottom:120px!important}}@media screen and (max-width:480px){.t-rec_pt-res-480_0{padding-top:0!important}.t-rec_pt-res-480_15{padding-top:15px!important}.t-rec_pt-res-480_30{padding-top:30px!important}.t-rec_pt-res-480_45{padding-top:45px!important}.t-rec_pt-res-480_60{padding-top:60px!important}.t-rec_pt-res-480_75{padding-top:75px!important}.t-rec_pt-res-480_90{padding-top:90px!important}.t-rec_pt-res-480_105{padding-top:105px!important}.t-rec_pt-res-480_120{padding-top:120px!important}.t-rec_pt-res-480_135{padding-top:135px!important}.t-rec_pt-res-480_150{padding-top:150px!important}.t-rec_pt-res-480_165{padding-top:165px!important}.t-rec_pt-res-480_180{padding-top:180px!important}.t-rec_pt-res-480_195{padding-top:195px!important}.t-rec_pt-res-480_210{padding-top:210px!important}.t-rec_pb-res-480_0{padding-bottom:0!important}.t-rec_pb-res-480_15{padding-bottom:15px!important}.t-rec_pb-res-480_30{padding-bottom:30px!important}.t-rec_pb-res-480_45{padding-bottom:45px!important}.t-rec_pb-res-480_60{padding-bottom:60px!important}.t-rec_pb-res-480_75{padding-bottom:75px!important}.t-rec_pb-res-480_90{padding-bottom:90px!important}.t-rec_pb-res-480_105{padding-bottom:105px!important}.t-rec_pb-res-480_120{padding-bottom:120px!important}.t-rec_pb-res-480_135{padding-bottom:135px!important}.t-rec_pb-res-480_150{padding-bottom:150px!important}.t-rec_pb-res-480_165{padding-bottom:165px!important}.t-rec_pb-res-480_180{padding-bottom:180px!important}.t-rec_pb-res-480_195{padding-bottom:195px!important}.t-rec_pb-res-480_210{padding-bottom:210px!important}}.t-body_scroll-locked{position:fixed;left:0;width:100%;height:100%;overflow:hidden}.t134__logo{width:100%;font-size:28px;font-weight:600}.t134{text-align:center}.t134__img{max-width:300px}.t134__title{font-family:'Roboto',Arial,sans-serif;font-size:24px;line-height:25px;text-align:center;padding-top:28px;padding-bottom:9px;color:#000}.t134__descr{font-size:14px;color:#000;line-height:26px;letter-spacing:1px;text-align:center;font-family:'Roboto',Arial,sans-serif;padding-top:22px;padding-bottom:6px;filter:alpha(opacity=70);KHTMLOpacity:.7;MozOpacity:.7;opacity:.7}.t134 a{color:#000}.t183__wrapper{padding-top:42px;padding-bottom:42px}.t183__uptitle{color:#fff;padding-bottom:20px;padding-top:10px}.t183__title{color:#fff;padding:24px 0 24px 0;letter-spacing:1px}.t183__buttons{margin-top:45px}.t183 .t-btn:nth-child(2){margin-left:10px}@media screen and (max-width:640px){.t183__title{padding-left:10px;padding-right:10px}.t183__uptitle{padding-left:10px;padding-right:10px}.t183 .t-btn:nth-child(2){margin-left:5px}.t183 .t-btn{margin:5px}}.t270__error-msg{text-align:center;display:none}.t270__error-msg-text{display:inline-block;margin:0 20px 35px 20px;padding:15px;color:red;border:1px solid red;font-size:14px;font-family:tfutura,Arial}.t338__logo{margin-bottom:55px;max-width:280px;width:100%}.t338__title{color:#fff;margin-bottom:50px}.t338__descr{color:#fff;margin-bottom:63px}.t338__btn{border-radius:100px;font-size:14px;height:50px;padding-right:34px;padding-left:34px;color:#fff}.t345-container.t345-socials_block{height:auto!important;padding:24px 0}.t345-container{height:80px}.t345 .t345-col{height:100%;margin:0 auto;float:none;display:block}.t345-col.t-col_100{height:100%;margin:0 auto;display:block;width:100%}.t345-content{display:table;height:100%;position:relative;width:100%}.t345-socials_block .t345-text__wrapper{display:block}.t345-text__wrapper{display:table-cell;vertical-align:middle}.t345-text{display:inline-block}.t345-socials{position:absolute;top:50%;right:0;-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-webkit-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%)}.t345-socials_block .t345-socials{position:relative;top:auto;right:auto;display:inline-block;margin-top:14px;-moz-transform:translateY(0);-ms-transform:translateY(0);-webkit-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}.t345-share,.t345-social,.t345 .t-sociallinks{display:inline-block;vertical-align:middle}.t345 .t-sociallinks,.t345 .t-sociallinks__wrapper,.t345 .t-sociallinks__item,.t345-social__wrapper,.t345-social__item,.t345-social{display:inline-block;margin-left:4px;height:30px;-webkit-transition:all ease-in-out .25s;-moz-transition:all ease-in-out .25s;-o-transition:all ease-in-out .25s;transition:all ease-in-out .25s}.t345 .t-sociallinks__item:hover,.t345-social__item:hover{opacity:.8}.t345-socials_block .t-sociallinks,.t345-socials_block .t-sociallinks__wrapper,.t345-socials_block .t-sociallinks__item,.t345-socials_block .t345-social__wrapper,.t345-socials_block .t345-social__item,.t345-socials_block .t345-social{margin-left:0;margin-right:4px}.t345-text{color:#555}.t345 .ya-share2__container_size_m .ya-share2__icon{width:28px;height:28px}.t345 .ya-share2__list{margin-bottom:0}.t345 .ya-share2__container_size_m .ya-share2__counter{line-height:28px}.t345__black-white .ya-share2__badge{background-color:#111!important}.t345__transp-white .ya-share2__badge{background-color:transparent!important}.t345__transp-white .ya-share2__container_size_m .ya-share2__counter:before{display:none}.t345__transp-white .ya-share2__container_size_m .ya-share2__counter{padding-left:0!important;margin-top:2px}.t345__white-black .ya-share2__badge{background-color:#fff!important}.t345__white-black .ya-share2__container_size_m .ya-share2__item_service_facebook .ya-share2__icon{background-image:url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMjIyIiB2aWV3Qm94PSIwIDAgMjggMjgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTE1LjEgMjN2LTguMjFoMi43NzNsLjQxNS0zLjJIMTUuMVY5LjU0N2MwLS45MjcuMjYtMS41NTggMS41OTYtMS41NThsMS43MDQtLjAwMlY1LjEyNkEyMi43ODcgMjIuNzg3IDAgMCAwIDE1LjkxNyA1QzEzLjQ2IDUgMTEuNzggNi40OTIgMTEuNzggOS4yM3YyLjM2SDl2My4yaDIuNzhWMjNoMy4zMnoiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==)}.t345__white-black .ya-share2__container_size_m .ya-share2__counter{color:#222}.t345__white-black .ya-share2__counter:before{background-color:#222}.t345__white-black .ya-share2__container_size_m .ya-share2__item_service_vkontakte .ya-share2__icon{background-image:url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMjIyIiB2aWV3Qm94PSIwIDAgMjggMjgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTE0Ljg4MyAxOS4zOTZzLjMyNS0uMDM2LjQ5LS4yMThjLjE1NC0uMTY3LjE1LS40OC4xNS0uNDhzLS4wMjMtMS40NjguNjQ4LTEuNjg0Yy42Ni0uMjEzIDEuNTEgMS40MTggMi40MDggMi4wNDYuNjguNDc0IDEuMTk3LjM3IDEuMTk3LjM3bDIuNDA0LS4wMzRzMS4yNTYtLjA4LjY2LTEuMDg0Yy0uMDUtLjA4Mi0uMzQ4LS43NDMtMS43ODgtMi4xMDItMS41MDctMS40MjMtMS4zMDUtMS4xOTIuNTEtMy42NTMgMS4xMDYtMS40OTggMS41NDgtMi40MTIgMS40MS0yLjgwNC0uMTMyLS4zNzMtLjk0NS0uMjc1LS45NDUtLjI3NWwtMi43MDYuMDE3cy0uMi0uMDI4LS4zNS4wNjNjLS4xNDQuMDg4LS4yMzguMjk1LS4yMzguMjk1cy0uNDI4IDEuMTYtMSAyLjE0NmMtMS4yMDQgMi4wOC0xLjY4NiAyLjE5LTEuODgzIDIuMDYtLjQ2LS4zLS4zNDUtMS4yMS0uMzQ1LTEuODU1IDAtMi4wMTcuMy0yLjg1Ny0uNTg2LTMuMDc1LS4yOTUtLjA3Mi0uNTEyLS4xMi0xLjI2NC0uMTI4LS45NjYtLjAxLTEuNzgzLjAwMy0yLjI0Ni4yMzQtLjMwOC4xNTMtLjU0Ni40OTUtLjQuNTE0LjE3OC4wMjUuNTgzLjExLjc5OC40MS4yNzcuMzgyLjI2OCAxLjI0NC4yNjggMS4yNDRzLjE2IDIuMzczLS4zNzMgMi42NjhjLS4zNjUuMjAyLS44NjUtLjIxLTEuOTQtMi4wOTgtLjU1LS45NjctLjk2Ni0yLjAzNi0uOTY2LTIuMDM2cy0uMDgtLjItLjIyMy0uMzA2Yy0uMTczLS4xMy0uNDE2LS4xNy0uNDE2LS4xN2wtMi41Ny4wMTZzLS4zODguMDEtLjUzLjE4MmMtLjEyNS4xNTItLjAxLjQ2Ni0uMDEuNDY2czIuMDE0IDQuNzkgNC4yOTQgNy4yMDJjMi4wOSAyLjIxNCA0LjQ2NSAyLjA2OCA0LjQ2NSAyLjA2OGgxLjA3NnoiICBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=)}.t345__white-black .ya-share2__container_size_m .ya-share2__item_service_twitter .ya-share2__icon{background-image:url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMjIyIiB2aWV3Qm94PSIwIDAgMjggMjgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTIzIDguNzNhNy4zOCA3LjM4IDAgMCAxLTIuMTIuNTgzIDMuNzA2IDMuNzA2IDAgMCAwIDEuNjIzLTIuMDQzIDcuMzk3IDcuMzk3IDAgMCAxLTIuMzQ2Ljg5NiAzLjY5MyAzLjY5MyAwIDAgMC02LjI5MyAzLjM2OCAxMC40ODUgMTAuNDg1IDAgMCAxLTcuNjEtMy44NThjLS4zMi41NDUtLjUgMS4xOC0uNSAxLjg1NiAwIDEuMjguNjUgMi40MSAxLjY0MiAzLjA3M2EzLjY4MyAzLjY4MyAwIDAgMS0xLjY3My0uNDYydi4wNDdjMCAxLjc4OCAxLjI3MyAzLjI4IDIuOTYyIDMuNjJhMy43MTggMy43MTggMCAwIDEtMS42NjcuMDYzIDMuNjk3IDMuNjk3IDAgMCAwIDMuNDUgMi41NjRBNy40MSA3LjQxIDAgMCAxIDUgMTkuOTY3YTEwLjQ1MyAxMC40NTMgMCAwIDAgNS42NiAxLjY1OGM2Ljc5NCAwIDEwLjUwOC01LjYyNiAxMC41MDgtMTAuNTA1IDAtLjE2LS4wMDMtLjMyLS4wMS0uNDc4QTcuNTA3IDcuNTA3IDAgMCAwIDIzIDguNzMyeiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+)}.t345__white-black .ya-share2__container_size_m .ya-share2__item_service_odnoklassniki .ya-share2__icon{background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxNTBweCIgaGVpZ2h0PSIxNTBweCIgdmlld0JveD0iMCAwIDE1MCAxNTAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1MCAxNTAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjx0aXRsZT5TaGFwZTwvdGl0bGU+PGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+PGcgaWQ9IldlbGNvbWUiPjxwYXRoIGlkPSJTaGFwZSIgZmlsbD0iIzIyMjIyMiIgZD0iTTc0Ljk5Nyw0Ni4wMTFjLTQuOTAzLDAuMDA2LTguODc1LDMuOTc5LTguODgzLDguODgzYzAsNC44OTQsMy45ODUsOC44NzksOC44ODMsOC44NzljNC45MDMtMC4wMDgsOC44NzUtMy45NzksOC44OC04Ljg3OUM4My44NzksNDkuOTg5LDc5LjksNDYuMDE3LDc0Ljk5Nyw0Ni4wMTFMNzQuOTk3LDQ2LjAxMXogTTc0Ljk5Nyw3Ni4zMzhjLTExLjgzOC0wLjAxLTIxLjQzNy05LjYwNi0yMS40NDgtMjEuNDQ0YzAuMDA4LTExLjg0Niw5LjYwNC0yMS40NDIsMjEuNDQ4LTIxLjQ1NWMxMS44NDUsMC4wMSwyMS40NTEsOS42MDksMjEuNDU2LDIxLjQ1NUM5Ni40MzgsNjYuNzM0LDg2LjgzOCw3Ni4zMyw3NC45OTcsNzYuMzM4TDc0Ljk5Nyw3Ni4zMzh6IE02Ni4zMiw5My44MzZjLTQuNDEyLTEuMDAyLTguNjI0LTIuNzQ4LTEyLjQ1NS01LjE1NGMtMi45MzktMS44NS0zLjgyMy01LjczNC0xLjk3My04LjY2OGMxLjg0OC0yLjk0MSw1LjcyOC0zLjgyMiw4LjY2Ni0xLjk3NWM4LjgzNCw1LjUyMywyMC4wNTIsNS41MjMsMjguODg2LDBjMS45MDEtMS4xOTUsNC4yOTctMS4yODcsNi4yODQtMC4yNDJjMS45ODQsMS4wNDksMy4yNiwzLjA3OCwzLjM0Miw1LjMyNGMwLjA4NywyLjI0LTEuMDI3LDQuMzYzLTIuOTMsNS41NjFjLTMuODM0LDIuNDA2LTguMDQ5LDQuMTQ4LTEyLjQ1Nyw1LjE1NGwxMS45OTQsMTJjMi40NTEsMi40NTcsMi40NDYsNi40MzYtMC4wMTEsOC44OTNjLTIuNDU2LDIuNDQ1LTYuNDM0LDIuNDQ1LTguODg2LTAuMDEybC0xMS43NzktMTEuNzg5bC0xMS43ODUsMTEuNzg5Yy0yLjQ1NSwyLjQ1Ny02LjQzNiwyLjQ1Ny04Ljg4OSwwYy0yLjQ1NC0yLjQ1NS0yLjQ1NC02LjQzNCwwLTguODkxTDY2LjMyLDkzLjgzNkw2Ni4zMiw5My44MzZ6Ii8+PC9nPjwvc3ZnPg==);background-size:28px 28px}.t345__transp-black .ya-share2__badge{background-color:transparent!important}.t345__transp-black .ya-share2__container_size_m .ya-share2__item_service_facebook .ya-share2__icon{background-image:url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMjIyIiB2aWV3Qm94PSIwIDAgMjggMjgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTE1LjEgMjN2LTguMjFoMi43NzNsLjQxNS0zLjJIMTUuMVY5LjU0N2MwLS45MjcuMjYtMS41NTggMS41OTYtMS41NThsMS43MDQtLjAwMlY1LjEyNkEyMi43ODcgMjIuNzg3IDAgMCAwIDE1LjkxNyA1QzEzLjQ2IDUgMTEuNzggNi40OTIgMTEuNzggOS4yM3YyLjM2SDl2My4yaDIuNzhWMjNoMy4zMnoiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==)}.t345__transp-black .ya-share2__container_size_m .ya-share2__counter{color:#222;padding-left:0!important;margin-top:2px}.t345__transp-black .ya-share2__counter:before{display:none}.t345__transp-black .ya-share2__container_size_m .ya-share2__item_service_vkontakte .ya-share2__icon{background-image:url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMjIyIiB2aWV3Qm94PSIwIDAgMjggMjgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTE0Ljg4MyAxOS4zOTZzLjMyNS0uMDM2LjQ5LS4yMThjLjE1NC0uMTY3LjE1LS40OC4xNS0uNDhzLS4wMjMtMS40NjguNjQ4LTEuNjg0Yy42Ni0uMjEzIDEuNTEgMS40MTggMi40MDggMi4wNDYuNjguNDc0IDEuMTk3LjM3IDEuMTk3LjM3bDIuNDA0LS4wMzRzMS4yNTYtLjA4LjY2LTEuMDg0Yy0uMDUtLjA4Mi0uMzQ4LS43NDMtMS43ODgtMi4xMDItMS41MDctMS40MjMtMS4zMDUtMS4xOTIuNTEtMy42NTMgMS4xMDYtMS40OTggMS41NDgtMi40MTIgMS40MS0yLjgwNC0uMTMyLS4zNzMtLjk0NS0uMjc1LS45NDUtLjI3NWwtMi43MDYuMDE3cy0uMi0uMDI4LS4zNS4wNjNjLS4xNDQuMDg4LS4yMzguMjk1LS4yMzguMjk1cy0uNDI4IDEuMTYtMSAyLjE0NmMtMS4yMDQgMi4wOC0xLjY4NiAyLjE5LTEuODgzIDIuMDYtLjQ2LS4zLS4zNDUtMS4yMS0uMzQ1LTEuODU1IDAtMi4wMTcuMy0yLjg1Ny0uNTg2LTMuMDc1LS4yOTUtLjA3Mi0uNTEyLS4xMi0xLjI2NC0uMTI4LS45NjYtLjAxLTEuNzgzLjAwMy0yLjI0Ni4yMzQtLjMwOC4xNTMtLjU0Ni40OTUtLjQuNTE0LjE3OC4wMjUuNTgzLjExLjc5OC40MS4yNzcuMzgyLjI2OCAxLjI0NC4yNjggMS4yNDRzLjE2IDIuMzczLS4zNzMgMi42NjhjLS4zNjUuMjAyLS44NjUtLjIxLTEuOTQtMi4wOTgtLjU1LS45NjctLjk2Ni0yLjAzNi0uOTY2LTIuMDM2cy0uMDgtLjItLjIyMy0uMzA2Yy0uMTczLS4xMy0uNDE2LS4xNy0uNDE2LS4xN2wtMi41Ny4wMTZzLS4zODguMDEtLjUzLjE4MmMtLjEyNS4xNTItLjAxLjQ2Ni0uMDEuNDY2czIuMDE0IDQuNzkgNC4yOTQgNy4yMDJjMi4wOSAyLjIxNCA0LjQ2NSAyLjA2OCA0LjQ2NSAyLjA2OGgxLjA3NnoiICBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=)}.t345__transp-black .ya-share2__container_size_m .ya-share2__item_service_twitter .ya-share2__icon{background-image:url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMjIyIiB2aWV3Qm94PSIwIDAgMjggMjgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTIzIDguNzNhNy4zOCA3LjM4IDAgMCAxLTIuMTIuNTgzIDMuNzA2IDMuNzA2IDAgMCAwIDEuNjIzLTIuMDQzIDcuMzk3IDcuMzk3IDAgMCAxLTIuMzQ2Ljg5NiAzLjY5MyAzLjY5MyAwIDAgMC02LjI5MyAzLjM2OCAxMC40ODUgMTAuNDg1IDAgMCAxLTcuNjEtMy44NThjLS4zMi41NDUtLjUgMS4xOC0uNSAxLjg1NiAwIDEuMjguNjUgMi40MSAxLjY0MiAzLjA3M2EzLjY4MyAzLjY4MyAwIDAgMS0xLjY3My0uNDYydi4wNDdjMCAxLjc4OCAxLjI3MyAzLjI4IDIuOTYyIDMuNjJhMy43MTggMy43MTggMCAwIDEtMS42NjcuMDYzIDMuNjk3IDMuNjk3IDAgMCAwIDMuNDUgMi41NjRBNy40MSA3LjQxIDAgMCAxIDUgMTkuOTY3YTEwLjQ1MyAxMC40NTMgMCAwIDAgNS42NiAxLjY1OGM2Ljc5NCAwIDEwLjUwOC01LjYyNiAxMC41MDgtMTAuNTA1IDAtLjE2LS4wMDMtLjMyLS4wMS0uNDc4QTcuNTA3IDcuNTA3IDAgMCAwIDIzIDguNzMyeiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+)}.t345__transp-black .ya-share2__container_size_m .ya-share2__item_service_odnoklassniki .ya-share2__icon{background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxNTBweCIgaGVpZ2h0PSIxNTBweCIgdmlld0JveD0iMCAwIDE1MCAxNTAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1MCAxNTAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjx0aXRsZT5TaGFwZTwvdGl0bGU+PGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+PGcgaWQ9IldlbGNvbWUiPjxwYXRoIGlkPSJTaGFwZSIgZmlsbD0iIzIyMjIyMiIgZD0iTTc0Ljk5Nyw0Ni4wMTFjLTQuOTAzLDAuMDA2LTguODc1LDMuOTc5LTguODgzLDguODgzYzAsNC44OTQsMy45ODUsOC44NzksOC44ODMsOC44NzljNC45MDMtMC4wMDgsOC44NzUtMy45NzksOC44OC04Ljg3OUM4My44NzksNDkuOTg5LDc5LjksNDYuMDE3LDc0Ljk5Nyw0Ni4wMTFMNzQuOTk3LDQ2LjAxMXogTTc0Ljk5Nyw3Ni4zMzhjLTExLjgzOC0wLjAxLTIxLjQzNy05LjYwNi0yMS40NDgtMjEuNDQ0YzAuMDA4LTExLjg0Niw5LjYwNC0yMS40NDIsMjEuNDQ4LTIxLjQ1NWMxMS44NDUsMC4wMSwyMS40NTEsOS42MDksMjEuNDU2LDIxLjQ1NUM5Ni40MzgsNjYuNzM0LDg2LjgzOCw3Ni4zMyw3NC45OTcsNzYuMzM4TDc0Ljk5Nyw3Ni4zMzh6IE02Ni4zMiw5My44MzZjLTQuNDEyLTEuMDAyLTguNjI0LTIuNzQ4LTEyLjQ1NS01LjE1NGMtMi45MzktMS44NS0zLjgyMy01LjczNC0xLjk3My04LjY2OGMxLjg0OC0yLjk0MSw1LjcyOC0zLjgyMiw4LjY2Ni0xLjk3NWM4LjgzNCw1LjUyMywyMC4wNTIsNS41MjMsMjguODg2LDBjMS45MDEtMS4xOTUsNC4yOTctMS4yODcsNi4yODQtMC4yNDJjMS45ODQsMS4wNDksMy4yNiwzLjA3OCwzLjM0Miw1LjMyNGMwLjA4NywyLjI0LTEuMDI3LDQuMzYzLTIuOTMsNS41NjFjLTMuODM0LDIuNDA2LTguMDQ5LDQuMTQ4LTEyLjQ1Nyw1LjE1NGwxMS45OTQsMTJjMi40NTEsMi40NTcsMi40NDYsNi40MzYtMC4wMTEsOC44OTNjLTIuNDU2LDIuNDQ1LTYuNDM0LDIuNDQ1LTguODg2LTAuMDEybC0xMS43NzktMTEuNzg5bC0xMS43ODUsMTEuNzg5Yy0yLjQ1NSwyLjQ1Ny02LjQzNiwyLjQ1Ny04Ljg4OSwwYy0yLjQ1NC0yLjQ1NS0yLjQ1NC02LjQzNCwwLTguODkxTDY2LjMyLDkzLjgzNkw2Ni4zMiw5My44MzZ6Ii8+PC9nPjwvc3ZnPg==);background-size:28px 28px}.t454__imglogo{height:auto;display:block}.t454__linewrapper{position:absolute;bottom:0;width:100%}.t454__horizontalline{margin:0;border:0;background-color:#C2C2C2;height:1px;right:0;bottom:0;margin:0 40px 0 40px}.t454__leftmenuwrapper,.t454__rightmenuwrapper{display:inline-table;height:100%;vertical-align:middle}.t454__leftmenuwrapper .t454__list,.t454__rightmenuwrapper .t454__list{display:table-cell;vertical-align:middle}.t454__logowrapper{position:absolute;left:50%;transform:translateX(-50%);display:table;height:inherit;z-index:100}.t454__logowrapper2{display:table-cell;vertical-align:middle;position:relative;//left:-50%;z-index:100}.t454__imglogo{max-width:300px}.t454__leftwrapper,.t454__rightwrapper{width:50%;box-sizing:border-box;position:absolute;height:100%}.t454__leftwrapper{text-align:right;padding-right:200px;padding-left:40px;left:0}.t454__rightwrapper{text-align:left;padding-left:200px;padding-right:40px;right:0}@media screen and (max-width:1200px){.t454__leftwrapper{padding-left:20px}.t454__rightwrapper{padding-right:20px}}.t454{width:100%;height:80px;z-index:990;position:fixed;top:0;box-shadow:0 1px 3px rgba(0,0,0,0);-webkit-transition:background-color 300ms linear;-moz-transition:background-color 300ms linear;-o-transition:background-color 300ms linear;-ms-transition:background-color 300ms linear;transition:background-color 300ms linear}.t454__beforeready{visibility:hidden}.t454 ul{margin:0}.t454__maincontainer{width:100%;height:80px;display:table;position:relative}.t454__maincontainer.t454__c12collumns{max-width:1200px;margin:0 auto}.t454__logo{display:inline-block;font-size:24px;font-weight:400;white-space:nowrap}.t454__list{list-style-type:none;margin:0;padding:0!important}.t454__list_item{clear:both;font-family:'Roboto',Arial,sans-serif;font-size:16px;display:inline;padding-left:15px;padding-right:15px;margin:0;color:#000;white-space:nowrap}.t454__list_item .t-active{opacity:.7}.t454__list_item:first-child{padding-left:0}.t454__list_item:last-child{padding-right:0}.t454 a,#allrecords .t454 a{text-decoration:none;color:#000}.t454.t454__positionabsolute{position:absolute}.t454.t454__positionfixed{position:fixed}.t454.t454__positionstatic{position:static}.t454__mobile{display:none}@media screen and (max-width:980px){.t454.t454__hidden{display:none;height:100%}.t454__mobile{background-color:#111;display:block}.t454__mobile_text{color:#fff}.t454__mobile_container{padding:20px;position:relative}.t454__burger{position:absolute;top:50%;margin-top:-10px;right:20px;width:28px;height:20px;-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg);-webkit-transition:.5s ease-in-out;-moz-transition:.5s ease-in-out;-o-transition:.5s ease-in-out;transition:.5s ease-in-out;cursor:pointer;z-index:9999}.t454__burger span{display:block;position:absolute;width:100%;opacity:1;left:0;-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg);-webkit-transition:.25s ease-in-out;-moz-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;height:3px;background-color:#fff}.t454__burger span:nth-child(1){top:0}.t454__burger span:nth-child(2),.t454__burger span:nth-child(3){top:8px}.t454__burger span:nth-child(4){top:16px}.t454_opened .t454__burger span:nth-child(1){top:8px;width:0%;left:50%}.t454_opened .t454__burger span:nth-child(2){-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}.t454_opened .t454__burger span:nth-child(3){-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}.t454_opened .t454__burger span:nth-child(4){top:8px;width:0%;left:50%}.t454__linewrapper{display:none}.t454{position:static;text-align:center;display:block;margin:0;padding:0;height:auto!important}.t454__maincontainer{padding:20px 0 40px 0}.t454.t454__positionabsolute,.t454.t454__positionfixed,.t454.t454__positionstatic{position:static}.t454__imglogo{width:auto!important;box-sizing:border-box;padding:20px;margin:0 auto}.t454__imglogomobile.t454__imglogo{width:100%!important}.t454__rightcontainer{display:table;position:static;float:none;text-align:center;margin:0 auto}.t454__leftmenuwrapper,.t454__rightmenuwrapper,.t454__leftwrapper,.t454__rightwrapper{height:initial}.t454__logo{text-align:center;margin:20px}.t454 img{float:inherit}.t454 .t454__list_item{display:block;text-align:center;padding:10px!important;white-space:normal}.t454__logo{white-space:normal;padding:0}.t454__logowrapper{position:static;display:table;width:100%;padding:20px;box-sizing:border-box;transform:none}.t454__logowrapper2{display:block;position:static}.t454__leftwrapper,.t454__rightwrapper,.rightmenuwrapper{position:static;padding:0!important;width:100%}.t454__rightmenuwrapper,.t454__leftmenuwrapper,.t454__leftmenuwrapper .t454__list,.t454__rightmenuwrapper .t454__list{display:block}}.t495 .t-section__topwrapper{margin-bottom:105px}.t495 .t-section__title{margin-bottom:40px}.t495 .t-section__descr{max-width:560px}.t495 .t-section__bottomwrapper{margin-top:105px}.t495__col .t-heading{padding-top:8px;padding-bottom:6px;margin-right:20px;font-weight:700}.t495__line{height:3px;margin:14px 20px 14px 0;background-color:#000}.t495__col .t-descr{padding-top:4px;padding-bottom:6px;margin-right:20px}@media screen and (max-width:960px){.t495__col{margin-top:20px;margin-bottom:20px}.t495 .t-section__bottomwrapper{margin-top:45px}.t495 .t-section__topwrapper{margin-bottom:45px}.t495 .t-section__title{margin-bottom:20px}}.t532 .t-section__topwrapper{margin-bottom:105px}.t532 .t-section__title{margin-bottom:40px}.t532 .t-section__descr{max-width:560px}.t532 .t-section__bottomwrapper{margin-top:105px}.t532__table{display:table;width:100%;height:450px;vertical-align:middle;background-color:#000;position:relative;overflow:hidden}.t532__col{overflow:hidden}.t532__bg{background-position:center center;background-repeat:no-repeat;background-size:cover;position:absolute;top:0;right:0;left:0;bottom:0}.t532__cell_hover .t532__bg_animated{-moz-transform:scale(1.05);-ms-transform:scale(1.05);-webkit-transform:scale(1.05);-o-transform:scale(1.05);transform:scale(1.05)}.t532__overlay{position:absolute;top:0;right:0;bottom:0;left:0}.t532__show_hover .t532__overlay{opacity:0}.t532__cell_hover .t532__overlay{opacity:.8}.t532__show_hover .t532__cell_hover .t532__overlay{opacity:1}.t532__cell{display:table-cell;width:100%;height:100%}.t532__textwrapper{padding:20px 40px;position:relative}.t532__show_hover .t532__textwrapper{opacity:0}.t532__show_hover .t532__textwrapper.t532__textwrapper_animated{-moz-transform:translateY(20%);-ms-transform:translateY(20%);-webkit-transform:translateY(20%);-o-transform:translateY(20%);transform:translateY(20%)}.t532__show_hover .t532__cell_hover .t532__textwrapper{opacity:1}.t532__show_hover .t532__cell_hover .t532__textwrapper.t532__textwrapper_animated{-moz-transform:translateY(0);-ms-transform:translateY(0);-webkit-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}.t532__textwrapper__content{margin:20px auto;position:relative}.t532__text,.t532__title{color:#000}.t532__title_small{font-size:28px;line-height:1.25}.t532__animation_fast{-webkit-transition:all ease-in-out .25s;-moz-transition:all ease-in-out .25s;-o-transition:all ease-in-out .25s;transition:all ease-in-out .25s}.t532__animation_slow{-webkit-transition:all ease-in-out .45s;-moz-transition:all ease-in-out .45s;-o-transition:all ease-in-out .45s;transition:all ease-in-out .45s}.t532__textwrapper__content{-webkit-transition:all ease-in-out .2s;-moz-transition:all ease-in-out .2s;-o-transition:all ease-in-out .2s;transition:all ease-in-out .2s}.t532__separator{margin-bottom:40px}.t532__bottommargin_sm{margin-bottom:4px}.t532__bottommargin_lg{margin-bottom:18px}@media screen and (max-width:1200px){.t532__separator{margin-bottom:20px}}@media screen and (max-width:960px){.t532 .t-section__bottomwrapper{margin-top:45px}.t532 .t-section__topwrapper{margin-bottom:45px}.t532 .t-section__title{margin-bottom:20px}.t532__separator{display:none}.t532__container{font-size:0}.t532__col-mobstyle{width:50%;display:inline-block;vertical-align:top}.t532__itemwrapper{margin:0 auto 40px auto}.t532__itemwrapper_3{max-width:300px}.t532__itemwrapper_1,.t532__itemwrapper_2{max-width:460px}.t532__itemwrapper_4{max-width:220px}}@media screen and (max-width:640px){.t532__col-mobstyle:nth-child(odd){padding-left:40px}.t532__col-mobstyle:nth-child(even){padding-right:40px}}@media screen and (max-width:480px){.t532__col-mobstyle{width:100%;display:block}.t532__col-mobstyle:nth-child(odd){padding-left:20px}.t532__col-mobstyle:nth-child(even){padding-right:20px}}.t598 .t-section__topwrapper{margin-bottom:105px}.t598 .t-section__title{margin-bottom:40px}.t598 .t-section__descr{max-width:560px}.t598 .t-section__bottomwrapper{margin-top:105px}.t598__col{position:relative;box-sizing:border-box;padding:0 25px}.t598__line{position:absolute;top:0;bottom:0;left:-20px;background-color:#eee;width:1px;-moz-transform:translate(-50%,0);-ms-transform:translate(-50%,0);-webkit-transform:translate(-50%,0);-o-transform:translate(-50%,0);transform:translate(-50%,0)}.t598__line_mobile{height:1px;width:100%;background-color:#eee;display:none}.t598__descr ul{padding-left:0!important;margin-bottom:0;list-style:none}.t598__descr li{padding:12px;border-bottom:1px solid #eee}.t598__descr li:first-child{border-top:1px solid #eee}.t598__title{margin-top:26px}.t598__descr{margin-top:30px}.t598__price{margin-top:30px}.t598__btn{margin-top:30px}.t598__img{max-width:90px;width:100%;display:block}.t598__bgimg{width:100px;height:100px;background-size:cover;background-repeat:no-repeat;background-position:center}.t598__img_circle{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%}@media screen and (max-width:1200px){.t598__line{left:-10px}}@media screen and (max-width:960px){.t598 .t-section__topwrapper{margin-bottom:40px}.t598 .t-section__title{margin-bottom:20px}.t598__line{display:none}.t598__line_mobile{display:block;margin:55px auto}}.t650 .t-section__topwrapper{margin-bottom:90px}.t650 .t-section__title{margin-bottom:20px}.t650 .t-section__descr{max-width:560px}.t650 .t-section__bottomwrapper{margin-top:105px}.t650__inner-col{position:relative}.t650__row:not(:first-child){margin-top:40px}.t650__row:after{content:'';display:block;height:0;clear:both}.t650__bottommargin{margin-bottom:10px}.t650__text{padding:30px 30px 40px}.t650__btn-container{position:absolute;bottom:0;width:100%}.t650__btn-wrapper{padding:0 30px 30px;display:inline-block}.t650__btntext-wrapper{padding:0 30px 20px;display:inline-block}.t650__submit{display:table-cell}@media screen and (max-width:960px){.t650 .t-section__bottomwrapper{margin-top:90px}.t650 .t-section__topwrapper{margin-bottom:75px}.t650 .t-section__title{margin-bottom:20px}.t650__col{margin-bottom:20px;height:auto!important}.t650__row{margin-top:20px!important}.t650__bottommargin{margin-bottom:15px}.t650__text{padding-bottom:30px}.t650__btn-container{position:initial}}.uploadcare-dialog.uploadcare-active{z-index:9999999}.t706_previewmode{padding:0 0 50px 0}.t706_previewmode .t706__carticon{position:initial;display:table;margin:0 auto}.t706__carticon{display:none;position:fixed;top:100px;right:50px;z-index:4000}.t706__carticon_showed{display:block}.t706__carticon_neworder .t706__carticon-text{opacity:.9;cursor:pointer;pointer-events:initial}@media screen and (min-width:960px){.t706__carticon:hover .t706__carticon-text{opacity:1!important;cursor:pointer;pointer-events:initial}.t706__carticon-imgwrap:hover{-webkit-transform:scale(1.1);transform:scale(1.1)}}.t706__carticon-text{position:absolute;-webkit-transform:translateX(0%) translateY(-50%);transform:translateX(0%) translateY(-50%);top:50%;right:130%;white-space:nowrap;background:#292929;color:#fff;font-size:15px;box-sizing:border-box;padding:9px 13px;border-radius:3px;-webkit-transition:opacity 0.3s linear;transition:opacity 0.3s linear;opacity:0;pointer-events:none}.t706__carticon-text:after{content:'';position:absolute;width:0;height:0;border:solid transparent;border-width:10px;top:50%;right:-20px;transform:translateY(-50%);border-left-color:#292929}.t706__carticon_neworder .t706__carticon-imgwrap{-webkit-animation:t706__pulse-anim 0.7s;animation:t706__pulse-anim 0.6s}@-webkit-keyframes t706__pulse-anim{0%{-webkit-transform:scale(1)}60%{-webkit-transform:scale(1.25)}100%{-webkit-transform:scale(1)}}@keyframes t706__pulse-anim{0%{transform:scale(1)}60%{transform:scale(1.25)}100%{transform:scale(1)}}.t706__carticon-wrapper{position:relative}.t706__carticon-imgwrap{background-color:rgba(255,255,255,.8);border-radius:50px;width:80px;height:80px;cursor:pointer;box-shadow:0 0 10px 0 rgba(0,0,0,.2);will-change:transform;-webkit-transition:-webkit-transform 0.2s ease-in-out;transition:transform 0.2s ease-in-out}.t706__carticon-img{width:40px;height:40px;padding:18px 20px 22px;stroke:#000}.t706__carticon-counter{width:30px;height:30px;background-color:red;color:#fff;border-radius:30px;position:absolute;right:-3px;bottom:-3px;text-align:center;line-height:30px;font-family:Arial,Helvetica,sans-serif}.t706__carticon_sm .t706__carticon-imgwrap{width:60px;height:60px}.t706__carticon_sm .t706__carticon-counter{right:-6px;bottom:-6px;width:24px;height:24px;line-height:24px;font-size:14px}.t706__carticon_sm .t706__carticon-img{width:34px;height:34px;padding:12px 13px 14px}.t706__carticon_lg .t706__carticon-imgwrap{height:100px;width:100px}.t706__carticon_lg .t706__carticon-img{width:50px;height:50px;padding:22px 25px 28px}.t706__cartwin{display:none;position:fixed;background-color:rgba(0,0,0,.8);width:100%;height:100%;z-index:4002;left:0;top:0;right:0;bottom:0;overflow-y:auto}.t706__cartwin_showed{display:block;z-index:100000}.t706__body_cartwinshowed{height:100vh;min-height:100vh;overflow:hidden;-webkit-overflow-scrolling:touch!important}.t706__cartwin-content{margin:65px auto;width:100%;max-width:560px;min-height:300px;background-color:rgba(255,255,255,1);padding:40px;box-sizing:border-box;overflow:auto}.t706__cartwin-close{position:fixed;right:20px;top:20px;color:#fff;cursor:pointer;z-index:1}.t706__cartwin-top{padding:0 0 30px 0;border-bottom:1px solid rgba(0,0,0,.2)}.t706__cartwin-bottom{padding-top:30px;border-top:1px solid rgba(0,0,0,.2)}.t706__cartwin-products{display:table;width:100%}.t706__product{display:table-row;width:100%;height:50px;vertical-align:middle}.t706__product-thumb{display:table-cell;width:70px;height:100px;padding-right:20px;vertical-align:middle}.t706__product-imgdiv{width:70px;height:70px;background-size:cover;border-radius:7px;background-color:#eee;background-position:center}.t706__product-title{display:table-cell;font-size:16px;padding:15px 0;font-weight:600;vertical-align:middle;color:#000}.t706__product-plusminus{display:table-cell;width:80px;padding:15px 20px;padding-left:10px;vertical-align:middle;color:#000}.t706__product-quantity{font-size:16px;line-height:16px;padding:0 10px;color:#000}.t706__product-plus,.t706__product-minus{cursor:pointer;opacity:.4}.t706__product-amount{display:table-cell;width:80px;font-size:16px;padding:15px 0;vertical-align:middle;color:#000}.t706__product-del{display:table-cell;width:20px;padding:15px 0 15px 15px;cursor:pointer;opacity:.4;vertical-align:middle}.t706__product:hover .t706__product-plus,.t706__product:hover .t706__product-minus,.t706__product:hover .t706__product-del{opacity:1}.t706__cartwin-prodamount-wrap{padding-bottom:20px;font-size:16px;text-align:right;font-weight:600;color:#000}.t706__cartwin-orderbtn{height:50px;font-size:16px;width:100%}.t706__cartdata{display:none}.t706__cartwin-totalamount-wrap{padding-top:15px;display:none;font-weight:600;text-align:right}.t706__submit_disable{pointer-events:none;opacity:.5}@media screen and (max-width:640px){.t706__carticon{right:10px}.t706__carticon-imgwrap,.t706__carticon_lg .t706__carticon-imgwrap{width:60px;height:60px}.t706__carticon-counter,.t706__carticon_lg .t706__carticon-counter{right:-6px;bottom:-6px;width:24px;height:24px;line-height:24px;font-size:14px}.t706__carticon-img,.t706__carticon_lg .t706__carticon-img{width:34px;height:34px;padding:12px 13px 14px}.t706__product{display:table;position:relative;margin:35px 0}.t706__product-thumb{height:auto;vertical-align:top}.t706__product-title{display:block;padding-top:0;padding-bottom:10px;padding-right:30px;width:100%;vertical-align:top;box-sizing:border-box}.t706__product-plusminus,.t706__product-amount{width:auto;display:inline-block;vertical-align:bottom;padding:0 20px 0 0}.t706__product-del{position:absolute;top:0;right:0;width:auto;padding:0}}@media screen and (max-width:560px){.t706__cartwin-content{margin:0 auto;margin-top:50px;min-height:100vh;min-height:calc(~'100% - 50px')}.t706__cartwin-close{background-color:#000;width:100%;top:0;left:0;right:0;display:table;height:50px}.t706__cartwin-close-wrapper{display:table-cell;vertical-align:middle;text-align:right;width:100%;padding-right:20px;font-size:0}.t706__cartwin-close-icon{width:16px}}.t706__orderform{margin-top:20px;margin-bottom:20px}.t706 .t-form .t-descr_md{font-size:16px}.t706 .t-form .t-input{height:55px}.t706 .t-input-group{margin-bottom:20px}.t706 .t-input-block textarea{padding-top:17px;transform:translateZ(0)}.t706 .t-input-title{padding-bottom:5px}.t706 .t-input-subtitle{padding-bottom:15px}.t706 .t-input-group_rd .t-input-subtitle{padding-bottom:5px}.t706 .t-inputtime,.t706 .t-datepicker__wrapper{max-width:245px}.t706 .t-form__submit{display:block;text-align:center;vertical-align:middle;height:100%;margin-top:30px;margin-bottom:10px;width:100%}.t706 .t-submit{width:100%}.t706 .t-form_bbonly .t-input-title{padding-bottom:0;margin-bottom:0}.t706 .t-form_bbonly .t-input-subtitle{padding-bottom:0;padding-top:5px}.t706 .t-form_bbonly .t-input-block{margin-bottom:35px}.t706__form-bottom-text{margin-top:20px;text-align:center;margin-bottom:60px}.t706__form-upper-text{padding-top:30px;padding-bottom:10px}.t706 .t-form__successbox{padding-top:70px;padding-bottom:70px}@media screen and (max-width:640px){.t706 .t-form__submit{display:block;width:100%;padding-bottom:20px;text-align:center}.t706 .t-input-block textarea{padding-top:5px}.t706 .t-input-block{padding-right:0}.t706 .t-submit{width:100%}}@media screen and (max-width:480px){.t706 .t-inputtime,.t706 .t-datepicker__wrapper{max-width:100%}.t706__orderform{margin-bottom:40px}.t706__cartwin-content{padding:20px}}.t718 .t-section__topwrapper{margin-bottom:90px}.t718 .t-section__title{margin-bottom:40px}.t718 .t-section__descr{max-width:560px}.t718__contentwrapper{display:table-cell;vertical-align:middle}.t718__contentbox{display:table;width:100%;color:#fff}.t718__contacts{margin-bottom:40px}.t718 .t-sociallinks{margin-top:20px}.t718 .t-sociallinks__item{display:inline-block;margin:4px 1px 0}.t718__social_links_item:last-child{margin-right:0}.t718 .t-form__inputsbox{-webkit-transition:max-height 0.3s cubic-bezier(.19,1,.22,1);transition:max-height 0.3s cubic-bezier(.19,1,.22,1);max-height:10000px}.t718__inputsbox_hidden.t-form__inputsbox{overflow:hidden;max-height:0;opacity:0}.t718 .t-input-group{margin-bottom:25px}.t718 .t-input{background-color:transparent;-webkit-appearance:none}.t718 .t-input-block textarea{padding-top:17px;background-color:transparent}.t718 .t-input-block textarea.t-input_pvis{padding-top:26px}.t718 .t-input-title{padding-bottom:5px}.t718 .t-input-subtitle{padding-bottom:15px}.t718 .t-input-group_rd .t-input-subtitle{padding-bottom:5px}.t718 .t-inputtime,.t718 .t-datepicker__wrapper{max-width:245px}.t718 .t-form_bbonly .t-input-title{padding-bottom:0;margin-bottom:0}.t718 .t-form_bbonly .t-input-subtitle{padding-bottom:0;padding-top:5px}.t718 .t-form_bbonly .t-input-block{margin-bottom:30px}.t718 .t-form__submit{display:block;vertical-align:middle;height:100%;margin-top:30px;margin-bottom:10px}.t718__form-bottom-text{margin-top:20px}@media screen and (max-width:960px){.t718 .t-section__topwrapper{margin-bottom:45px}.t718 .t-section__title{margin-bottom:20px}.t718__contentwrapper{padding:0 0 40px 0;text-align:center}.t718__social_links{margin-top:20px}}@media screen and (max-width:750px){.t718__col{float:none;width:100%;min-height:auto!important}.t718__contentbox{float:none;width:100%;height:auto!important}.t718 .t-form__submit{margin-top:28px}}@media screen and (max-width:640px){.t718 .t-form__submit{display:block;width:100%;padding-bottom:20px;text-align:center}.t718 .t-input-block textarea{padding-top:12px}.t718 .t-submit{width:100%}}@media screen and (max-width:480px){.t718 .t-inputtime,.t718 .t-datepicker__wrapper{max-width:100%}.t718__contacts{font-size:18px}}.t728 .t-section__topwrapper{margin-bottom:90px}.t728 .t-section__title{margin-bottom:40px}.t728 .t-section__descr{max-width:560px;margin:0 auto}.t728 .t-section__bottomwrapper{margin-top:75px}.t728 .t-slds__bullet_wrapper{margin-top:20px}.t728__wrapper{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;background:#fff}.t728__imgcell{-webkit-box-flex:0;-webkit-flex:0 0 300px;-ms-flex:0 0 300px;flex:0 0 300px;min-height:360px;position:relative}.t728__bgimg{background-size:cover;background-repeat:no-repeat;background-position:center;position:absolute;top:0;left:0;right:0;bottom:0}.t728__textcell{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;padding:40px 45px;box-sizing:border-box;-webkit-align-self:center;-ms-flex-item-align:center;align-self:center}.t728__textwrapper{width:100%}.t728__text{margin-bottom:20px}.t728__title{margin-bottom:2px}@media screen and (max-width:960px){.t728 .t-section__bottomwrapper{margin-top:25px}.t728 .t-section__topwrapper{margin-bottom:40px}.t728 .t-section__title{margin-bottom:20px}.t728 .t-slides__wrapper{display:block}.t728__textcell{padding:25px 20px}.t728__wrapper{display:block}.t728__witharrows .t-width .t-slds__wrapper{padding:0 45px}}.t754__separator{margin-bottom:90px}.t706__body_cartwinshowed .t754__imgwrapper{z-index:0}.t754__imgwrapper{position:relative;width:100%;margin-bottom:20px;padding-bottom:110%}.t754__bgimg{background-position:center;background-repeat:no-repeat;background-size:cover;position:absolute;top:0;right:0;bottom:0;left:0;z-index:2;-webkit-transition:opacity 0.1s linear;transition:opacity 0.1s linear}.t754__img{max-width:100%;max-height:100%;position:absolute;margin:auto;top:0;bottom:0;right:0;left:0;z-index:2;-webkit-transition:opacity 0.1s linear;transition:opacity 0.1s linear}.t754__bgimg_second,.t754__img_second{z-index:1;opacity:0}.t754__markwrapper{position:absolute;right:10px;top:10px;z-index:5;display:table}.t754__mark{font-weight:400;font-size:12px;font-family:'Roboto',Arial,sans-serif;display:table-cell;width:50px;height:50px;text-align:center;vertical-align:middle;border-radius:50px;background-color:#111;color:#fff;box-sizing:border-box;padding:0 10px}.t754__uptitle{margin-bottom:8px;color:#ff8562}.t754__descr{margin-top:8px}.t754__price-wrapper{margin-top:12px}.t754__price-item{display:inline-block;vertical-align:middle}.t754__price-value,.t754__price-currency{display:inline-block;vertical-align:middle;float:left}.t754__price-value+.t754__price-currency:before{content:'\a0'}.t754__price_old{position:relative;color:#bdbdbd}.t754__price_old:after{content:'';position:absolute;top:50%;right:-1px;left:-1px;border-top:1px solid;width:100%}.t754__buttons{margin-top:19px}.t754__scroll-icon-wrapper{display:none}@media screen and (max-width:1200px) and (min-width:980px){.t754 .t-col_4 .t-slds__thumbsbullet.t-slds__bullet{width:56px}.t754 .t-col_4 .t-slds__thumbsbullet.t-slds__bullet:nth-child(5n){margin-right:0}}@media screen and (min-width:1200px){.t754 .t-col_4 .t-slds__thumbsbullet.t-slds__bullet{width:55.8px}.t754 .t-col_4 .t-slds__thumbsbullet.t-slds__bullet:nth-child(6n){margin-right:0}}@media screen and (max-width:980px) and (min-width:640px){.t754 .t-col_4 .t-slds__thumbsbullet.t-slds__bullet{width:10.2%;margin-right:1%}.t754 .t-col_4 .t-slds__thumbsbullet.t-slds__bullet:nth-child(9n){margin-right:0}}@media screen and (max-width:640px){.t754 .t-col_4 .t-slds__thumbsbullet.t-slds__bullet{width:11.6%;margin-right:1%}.t754 .t-col_4 .t-slds__thumbsbullet.t-slds__bullet:nth-child(8n){margin-right:0}}.t754 .t-popup{padding:0;-webkit-overflow-scrolling:touch}.t754 .t-popup__container{max-width:1240px;right:0;left:0}.t754__container{padding:40px 20px}.t754__container:after{content:'';display:block;height:0;clear:both}.t754 .t-popup__close{z-index:999}.t754__close-text-wrapper{z-index:999;position:fixed;left:20px;top:20px}.t754__close-text{margin-bottom:20px;cursor:pointer;display:inline-block;opacity:.8;font-weight:400}.t754__close-text:before{content:"â†\a0";font-family:Arial,Helvetica,sans-serif}@media screen and (max-width:1240px){.t754 .t-popup__container{max-width:1200px}.t754__container{padding:30px 10px}.t754__col_left{margin-right:10px}.t754__col_right{margin-left:10px}}@media screen and (max-width:1200px){.t754 .t-popup__container{max-width:1000px}.t754__container{padding:30px 20px}}@media screen and (max-width:1000px){.t754 .t-popup__container{max-width:980px}.t754__container{padding:20px 10px}}@media screen and (max-width:980px){.t754 .t-popup{padding:0 20px}.t754 .t-popup__container{max-width:640px}.t754__container{padding:30px}.t754__col_left,.t754__col_right{margin:0;display:block;max-width:100%}.t754__col_left{padding:0}.t754__col_right{padding:25px 0 0 0}}@media screen and (max-width:670px){.t754__btn{display:block;width:100%}.t754__btn:last-child{margin-top:10px}.t754 .t-popup__container{right:20px;left:20px}}@media screen and (max-width:560px){.t754 .t-popup_show .t-popup__container{max-width:100%;right:0;left:0;top:50px;bottom:0;-webkit-transform:translateY(0);transform:translateY(0)}.t754 .t-popup_show .t-popup__container.t-popup__container-static{max-width:100%;min-height:100vh;top:0;margin:50px 0 0}.t754 .t-popup{padding:0}.t754 .t-popup__close{width:100%;height:50px;background:#000;position:fixed;display:table;z-index:2;left:0;right:0;top:0}.t754 .t-popup__close-wrapper{display:table-cell;vertical-align:middle;text-align:right;width:100%;padding-right:20px;font-size:0}.t754 .t-popup__close-icon{width:16px}.t754 .t-popup__close-icon g{fill:#fff}.t754__close-text-wrapper{display:none}.t754__container{padding:20px}.t754__col_right{padding-top:30px}}.t-popup .t754__title-wrapper{margin-bottom:18px}.t-popup .t754__title_small{margin-top:4px;color:#777}.t-popup .t754__descr{margin-top:20px}.t-popup .t754__price-wrapper{margin-top:0}.t-popup .t754__btn-wrapper{margin-top:20px;margin-bottom:30px}.t754 .t-product__option{margin-top:10px;margin-bottom:10px}.t754 .t-product__option-title{padding-bottom:3px}.t754 .t-product__option-variants{position:relative;display:table;min-width:150px}.t754 .t-product__option-variants:after{content:' ';width:0;height:0;border-style:solid;border-width:6px 5px 0 5px;border-color:#000 transparent transparent transparent;position:absolute;right:10px;top:0;bottom:0;margin:auto;pointer-events:none}.t754 .t-product__option-select{width:100%;border:1px #ddd solid;background:#f8f8f8;color:#000;box-sizing:border-box;cursor:pointer;padding:2px 30px 2px 10px;border-radius:5px;-webkit-appearance:none;appearance:none;-moz-appearance:none}.t754 .t-product__option-select::-ms-expand{width:0;height:0;opacity:0}@media screen and (max-width:640px){.t754 .t-product__option-select{font-size:16px}}.t754 .t-slds__wrapper{padding:0!important}.t754 .t-slds__arrow_wrapper{height:auto!important}@media screen and (min-width:960px){.t754__imgwrapper:hover .t754__bgimg_first_hover,.t754__imgwrapper:hover .t754__img_first_hover{opacity:0}.t754__imgwrapper:hover .t754__bgimg_second,.t754__imgwrapper:hover .t754__img_second{z-index:3;opacity:1}}@media screen and (max-width:960px){.t754__separator{display:none}.t754__container_mobile-grid{font-size:0}.t754__col_mobile-grid{width:50%;display:inline-block;vertical-align:top}.t754__col{margin-bottom:60px}.t-col_8 .t754__imgwrapper_mobile-nopadding{padding-bottom:0px!important;font-size:0}.t-col_8 .t754__imgwrapper_mobile-nopadding .t754__img{position:initial}.t754__img_second{display:none}.t754__container_mobile-flex{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;overflow-x:scroll;-webkit-overflow-scrolling:touch;max-width:100%;box-sizing:border-box}.t754__container_mobile-flex .t754__col{min-width:38%;max-width:38%;margin-bottom:0px!important}.t754__container_mobile-flex .t754__col:first-child{margin-left:20px}.t754__scroll-icon-wrapper{display:block;padding:0 40px 20px 0;color:#a1a1a1;text-align:right;font-size:0}@-webkit-keyframes t754__icon-anim{0%{-webkit-transform:translate3d(-20px,0,0);opacity:0}10%{-webkit-transform:translate3d(-20px,0,0);opacity:0}20%{-webkit-transform:translate3d(-20px,0,0);opacity:1}70%{-webkit-transform:translate3d(0,0,0);opacity:1}80%{-webkit-transform:translate3d(0,0,0);opacity:1}81%{-webkit-transform:translate3d(0,0,0);opacity:0}100%{-webkit-transform:translate3d(0,0,0);opacity:0}}@keyframes t754__icon-anim{0%{transform:translate3d(-20px,0,0);opacity:0}10%{transform:translate3d(-20px,0,0);opacity:0}20%{transform:translate3d(-20px,0,0);opacity:1}70%{transform:translate3d(0,0,0);opacity:1}80%{transform:translate3d(0,0,0);opacity:1}81%{transform:translate3d(0,0,0);opacity:0}100%{transform:translate3d(0,0,0);opacity:0}}.t754__scroll-icon{-webkit-animation:t754__icon-anim 1.5s infinite;animation:t754__icon-anim 1.5s infinite}}@media screen and (max-width:640px){.t754__container_mobile-grid{padding:0 10px;box-sizing:border-box}.t754__col_mobile-grid{padding-left:10px;padding-right:10px}.t754__container_mobile-flex .t754__col:first-child{margin-left:0}.t754__container_mobile-flex .t754__col{min-width:70%;max-width:70%}.t754__scroll-icon-wrapper{padding:0 20px 10px 0}}@media screen and (max-width:480px){.t754__imgwrapper_mobile-nopadding{padding-bottom:0px!important;font-size:0}.t754__imgwrapper_mobile-nopadding .t754__img{position:initial}.t754__col_mobile-grid{width:100%;display:block}.t754__container_mobile-flex .t754__col{min-width:80%;max-width:80%}}.t778__separator{margin-bottom:40px}.t778__col .t778__wrapper{background-color:#fff;-webkit-transition:all 0.2s linear;transition:all 0.2s linear;}.t706__body_cartwinshowed .t778__imgwrapper{z-index:0}.t778__imgwrapper{position:relative;width:100%;padding-bottom:110%}.t778__bgimg{background-position:center;background-repeat:no-repeat;background-size:cover;position:absolute;top:0;right:0;bottom:0;left:0;z-index:2;-webkit-transition:opacity 0.1s linear;transition:opacity 0.1s linear}.t778__bgimg_second{z-index:1;opacity:0}.t778__content{position:relative}.t778__markwrapper{position:absolute;right:10px;top:10px;z-index:5;display:table;}.t778__mark{font-weight:400;font-size:12px;font-family:'Roboto',Arial,sans-serif;display:table-cell;width:50px;height:50px;text-align:center;vertical-align:middle;border-radius:50px;background-color:#111;color:#fff;box-sizing:border-box;padding:0 10px}.t778__textwrapper{padding:27px 30px;box-sizing:border-box}.t778__textwrapper.t778__paddingsmall{padding:18px 20px}.t778__textwrapper.t778__paddingbig{padding:36px 40px}.t778__uptitle{margin-bottom:8px;color:#ff8562}.t778__descr{margin-top:8px}.t778__price-wrapper{margin-top:12px}.t778__price-item{display:inline-block;vertical-align:middle}.t778__price-value,.t778__price-currency{display:inline-block;vertical-align:middle;float:left}.t778__price-value+.t778__price-currency:before{content:'\a0'}.t778__price_old{position:relative;color:#bdbdbd}.t778__price_old:after{content:'';position:absolute;top:50%;right:-1px;left:-1px;border-top:1px solid;width:100%}.t778__btn-wrapper_absolute{bottom:0;width:100%;box-sizing:border-box}.t778__btn{display:inline-block}.t-align_center .t778__btn{margin:0 2px 8px}.t-align_left .t778__btn{margin:0 4px 8px 0}.t778__paddingbig.t778__btn-wrapper_absolute{padding:0 40px 28px}.t778__paddingsmall.t778__btn-wrapper_absolute{padding:0 20px 14px}.t778__scroll-icon-wrapper{display:none}.t778 .t-popup{padding:0;-webkit-overflow-scrolling:touch}.t778 .t-popup__container{max-width:1240px;right:0;left:0}.t-popup .t778__container{padding:40px 20px}.t-popup .t778__container:after{content:'';display:block;height:0;clear:both}.t778 .t-popup__close{z-index:999}.t778__close-text-wrapper{z-index:999;position:fixed;left:20px;top:20px}.t778__close-text{margin-bottom:20px;cursor:pointer;display:inline-block;opacity:.8;font-weight:400}.t778__close-text:before{content:"â†\a0";font-family:Arial,Helvetica,sans-serif}@media screen and (max-width:1240px){.t778 .t-popup__container{max-width:1200px}.t-popup .t778__container{padding:30px 10px}.t778__col_left{margin-right:10px}.t778__col_right{margin-left:10px}}@media screen and (max-width:1200px){.t778 .t-popup__container{max-width:1000px}.t-popup .t778__container{padding:30px 20px}}@media screen and (max-width:1000px){.t778 .t-popup__container{max-width:980px}.t-popup .t778__container{padding:20px 10px}}@media screen and (max-width:980px){.t778 .t-popup{padding:0 20px}.t778 .t-popup__container{max-width:640px}.t-popup .t778__container{padding:30px}.t778__col_left,.t778__col_right{margin:0;display:block;max-width:100%}.t778__col_left{padding:0}.t778__col_right{padding:25px 0 0 0}}@media screen and (max-width:670px){.t778__btn{display:block;width:100%}.t778__btn:last-child{margin-top:10px}.t778 .t-popup__container{right:20px;left:20px}}@media screen and (max-width:560px){.t778 .t-popup_show .t-popup__container{max-width:100%;right:0;left:0;top:50px;bottom:0;-webkit-transform:translateY(0);transform:translateY(0)}.t778 .t-popup_show .t-popup__container.t-popup__container-static{max-width:100%;min-height:100vh;top:0;margin:50px 0 0}.t778 .t-popup{padding:0}.t778 .t-popup__close{width:100%;height:50px;background:#000;position:fixed;display:table;z-index:2;left:0;right:0;top:0}.t778 .t-popup__close-wrapper{display:table-cell;vertical-align:middle;text-align:right;width:100%;padding-right:20px;font-size:0}.t778 .t-popup__close-icon{width:16px}.t778 .t-popup__close-icon g{fill:#fff}.t778__close-text-wrapper{display:none}.t-popup .t778__container{padding:20px}.t778__col_right{padding-top:30px}}.t-popup .t778__title-wrapper{margin-bottom:18px}.t-popup .t778__title_small{margin-top:4px;color:#777}.t-popup .t778__descr{margin-top:20px}.t-popup .t778__price-wrapper{margin-top:0}.t-popup .t778__btn-wrapper{margin-top:20px;margin-bottom:30px}.t-popup .t778__btn{margin-bottom:0}.t778 .t-product__option{margin-top:10px;margin-bottom:10px}.t778 .t-product__option-title{padding-bottom:3px}.t778 .t-product__option-variants{position:relative;display:table;min-width:150px}.t778 .t-product__option-variants:after{content:' ';width:0;height:0;border-style:solid;border-width:6px 5px 0 5px;border-color:#000 transparent transparent transparent;position:absolute;right:10px;top:0;bottom:0;margin:auto;pointer-events:none}.t778 .t-product__option-select{width:100%;border:1px #ddd solid;background:#f8f8f8;color:#000;box-sizing:border-box;cursor:pointer;padding:2px 30px 2px 10px;border-radius:5px;-webkit-appearance:none;appearance:none;-moz-appearance:none}.t778 .t-product__option-select::-ms-expand{width:0;height:0;opacity:0}@media screen and (max-width:640px){.t778 .t-product__option-select{font-size:16px}}.t778 .t-slds__wrapper{padding:0!important}.t778 .t-slds__arrow_wrapper{height:auto!important}@media screen and (min-width:960px){.t778__imgwrapper:hover .t778__bgimg_first_hover{opacity:0}.t778__imgwrapper:hover .t778__bgimg_second{z-index:3;opacity:1}}@media screen and (max-width:960px){.t778__separator{display:none}.t778__container_mobile-grid{font-size:0}.t778__col_mobile-grid{width:50%;display:inline-block;vertical-align:top}.t778__col{margin-bottom:40px}.t778__img_second{display:none}.t778__container_mobile-flex{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;overflow-x:scroll;padding-top:2px;-webkit-overflow-scrolling:touch;max-width:100%;box-sizing:border-box}.t778__container_mobile-flex .t778__col{min-width:38%;max-width:38%;margin-bottom:0px!important}.t778__container_mobile-flex .t778__col:first-child{margin-left:20px}.t778__scroll-icon-wrapper{display:block;padding:0 40px 20px 0;color:#a1a1a1;text-align:right;font-size:0}@-webkit-keyframes t778__icon-anim{0%{-webkit-transform:translate3d(-20px,0,0);opacity:0}10%{-webkit-transform:translate3d(-20px,0,0);opacity:0}20%{-webkit-transform:translate3d(-20px,0,0);opacity:1}70%{-webkit-transform:translate3d(0,0,0);opacity:1}80%{-webkit-transform:translate3d(0,0,0);opacity:1}81%{-webkit-transform:translate3d(0,0,0);opacity:0}100%{-webkit-transform:translate3d(0,0,0);opacity:0}}@keyframes t778__icon-anim{0%{transform:translate3d(-20px,0,0);opacity:0}10%{transform:translate3d(-20px,0,0);opacity:0}20%{transform:translate3d(-20px,0,0);opacity:1}70%{transform:translate3d(0,0,0);opacity:1}80%{transform:translate3d(0,0,0);opacity:1}81%{transform:translate3d(0,0,0);opacity:0}100%{transform:translate3d(0,0,0);opacity:0}}.t778__scroll-icon{-webkit-animation:t778__icon-anim 1.5s infinite;animation:t778__icon-anim 1.5s infinite}}@media screen and (max-width:640px){.t778__container_mobile-grid{padding:0 10px;box-sizing:border-box}.t778__col_mobile-grid{padding-left:10px;padding-right:10px;margin-bottom:20px}.t778__container_mobile-flex .t778__col:first-child{margin-left:0}.t778__container_mobile-flex .t778__col{min-width:70%;max-width:70%}.t778__scroll-icon-wrapper{padding:0 20px 10px 0}}@media screen and (max-width:480px){.t-container:not(.t778__container_mobile-flex) .t778__btn-wrapper_absolute{position:initial}.t778__col_mobile-grid{width:100%;display:block}.t778__container_mobile-flex .t778__col{min-width:80%;max-width:80%}}@media screen and (-ms-high-contrast:active),screen and (-ms-high-contrast:none){.t778__bgimg,.t778__wrapper{right:-.99px}}.t-body_popupshowed .t796_cont-near-shape-divider{z-index:auto!important}.t796__shape-border{position:absolute;left:0;font-size:0;width:100%;overflow:hidden;display:none;pointer-events:none}.t796__shape-border_bottom{bottom:-1px}.t796__shape-border_bottom-flip{-webkit-transform:scaleX(-1);transform:scaleX(-1);bottom:-1px}.t796__shape-border_top{-webkit-transform:scaleY(-1);transform:scaleY(-1);top:-1px}.t796__shape-border_top-flip{-webkit-transform:scaleX(-1) scaleY(-1);transform:scaleX(-1) scaleY(-1);top:-1px}.t796__svg{position:relative;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%);width:101%;fill:#fff}.t796__svg path{pointer-events:initial}.t828__itemwrapper,.t828__textwrapper,.t828__buttonwrapper{text-align:left}.t828__buttonwrapper{margin-top:45px}.t828 .t828__title{margin-bottom:20px;color:#fff}.t828 .t828__descr{max-width:560px;color:#fff}.t828__wrapper{padding:50px 0}.t828__col-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.t828__col{margin-top:0;margin-bottom:0}.t828__item+.t828__item{padding-top:60px}.t828__item_icon,.t828__bgimg,.t828__imgwrapper{display:inline-block;vertical-align:middle}.t828__item_icon,.t828__bgimg{max-width:100%}.t828__imgwrapper{width:50px}.t828__bgimg{width:50px;height:50px;max-width:100%;background-size:cover;background-repeat:no-repeat;background-position:center}.t828__img{width:100%;max-width:100%;height:auto}.t828__img_circle{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%}.t828__item-text{display:inline-block;vertical-align:middle;padding-left:35px}@media screen and (max-width:960px){.t828__textwrapper{margin-bottom:60px}.t828 .t828__title{margin-bottom:15px}.t828__col:first-child{margin-bottom:60px}.t828__wrapper{padding:20px 0}.t828__col-wrapper{display:block}.t828__item+.t828__item{padding-top:45px}.t828__item_icon,.t828__bgimg{width:40px!important;height:40px!important}.t828__imgwrapper{width:40px!important}.t828__item-text{padding-left:35px}}@media screen and (max-width:640px){.t828__item+.t828__item{padding-top:35px}.t828__buttonwrapper{margin-top:30px}.t828__item-text{padding-left:30px}}.t851 .t-section__topwrapper{margin-bottom:90px}.t851 .t-section__title{margin-bottom:40px}.t851 .t-section__descr{max-width:560px}.t851 .t-section__bottomwrapper{margin-top:105px}.t851__separator{margin-bottom:40px}.t851__table{display:table;width:100%;height:400px;vertical-align:middle;position:relative;overflow:hidden}.t851__col{overflow:hidden}.t851__link{display:block}.t851__bg{background-position:center center;background-repeat:no-repeat;background-size:cover;position:absolute;top:0;right:0;bottom:0;left:0}.t851__cell:hover .t851__bg_animated{-webkit-transform:scale(1.05);-ms-transform:scale(1.05);transform:scale(1.05)}.t851__overlay{position:absolute;top:0;right:0;bottom:0;left:0}.t851__show_hover .t851__overlay{opacity:0}.t851__cell:hover .t851__overlay{opacity:.8}.t851__show_hover .t851__cell:hover .t851__overlay{opacity:1}.t851__cell{display:table-cell;width:100%;height:100%}.t-col_6 .t851__cell{-webkit-transform:translateZ(0);transform:translateZ(0)}.t851__textwrapper{padding:20px 40px;position:relative}.t851__cell>.t851__button-container{padding-left:40px;padding-right:40px}.t851__show_hover .t851__textwrapper,.t851__show_hover .t851__button-container{opacity:0}.t851__show_hover .t851__textwrapper.t851__textwrapper_animated{-webkit-transform:translateY(20%);-ms-transform:translateY(20%);transform:translateY(20%)}.t851__show_hover .t851__cell:hover .t851__textwrapper,.t851__show_hover .t851__cell:hover .t851__button-container{opacity:1}.t851__cell:hover .t851__textwrapper_animated{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}.t851__textwrapper__content{margin:30px auto;position:relative}.t851__text{color:#fff;margin-top:20px}.t851__title{color:#fff}.t851__img{width:100%;max-width:70px}.t851__animation_fast{-webkit-transition:all ease-in-out .25s;-o-transition:all ease-in-out .25s;transition:all ease-in-out .25s}.t851__animation_slow{-webkit-transition:all ease-in-out .45s;-o-transition:all ease-in-out .45s;transition:all ease-in-out .45s}.t851__button-container{-webkit-transition:all ease-in-out .2s;-o-transition:all ease-in-out .2s;transition:all ease-in-out .2s}.t851__button_show-hover{-webkit-transform:translate3d(0,-40px,0);transform:translate3d(0,-40px,0);opacity:0}.t851__button-bottom .t851__button_show-hover{-webkit-transform:translate3d(0,40px,0);transform:translate3d(0,40px,0)}.t851__col:not(.t851__show_hover) .t-valign_bottom .t851__button_show-hover{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.t851__col:not(.t851__show_hover) .t-valign_bottom .t851__inner-wrapper_animated-btn{-webkit-transform:translate3d(0,85px,0);transform:translate3d(0,85px,0);-webkit-transition:all ease-in-out .2s;-o-transition:all ease-in-out .2s;transition:all ease-in-out .2s}.t-valign_bottom.t851__cell:hover .t851__inner-wrapper_animated-btn{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.t851__col:not(.t851__show_hover) .t-valign_middle .t851__inner-wrapper_animated-btn{-webkit-transform:translate3d(0,45px,0);transform:translate3d(0,45px,0);-webkit-transition:all ease-in-out .2s;-o-transition:all ease-in-out .2s;transition:all ease-in-out .2s}.t-valign_middle.t851__cell:hover .t851__inner-wrapper_animated-btn{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.t851__col:not(.t851__show_hover) .t-valign_middle.t851__cell:hover .t851__inner-wrapper_animated-btn{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.t851__cell:hover .t851__button_show-hover{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}.t851__textwrapper__content{-webkit-transition:all ease-in-out .2s;-o-transition:all ease-in-out .2s;transition:all ease-in-out .2s}.t851__button-wrapper{display:inline-block;margin-top:40px}.t851__btn{text-align:center;vertical-align:middle;display:table-cell;border:0 none;-webkit-appearance:none;background:none}.t851__button-bottom .t851__textwrapper{position:static}.t851__button-bottom .t851__button-container{position:absolute;left:0;right:0;bottom:0;padding-bottom:50px}.t851__button-bottom .t851__button-wrapper{margin-top:0}.t851__scroll-icon-wrapper{display:none}@media screen and (max-width:960px){.t851 .t-section__bottomwrapper{margin-top:45px}.t851 .t-section__topwrapper{margin-bottom:45px}.t851 .t-section__title{margin-bottom:20px}.t851__show_hover .t851__textwrapper,.t851__show_hover .t851__button-container{opacity:1!important;-webkit-transform:translateY(0%)!important;-ms-transform:translateY(0%)!important;transform:translateY(0%)!important}.t851__show_hover .t851__overlay{opacity:1}.t851__button_show-hover.t851__button-container,.t851__inner-wrapper_animated-btn{opacity:1;-webkit-transform:translate3d(0,0,0)!important;transform:translate3d(0,0,0)!important;position:initial}.t851__separator{display:none}.t851__container_mobile-grid{font-size:0}.t851__col_mobile-grid{width:50%;display:inline-block;vertical-align:top}.t851__col{margin-bottom:60px}.t851__container_mobile-flex{display:-webkit-box;display:-ms-flexbox;display:flex;overflow-x:scroll;-webkit-overflow-scrolling:touch;max-width:100%;-webkit-box-sizing:border-box;box-sizing:border-box}.t851__container_mobile-flex .t851__col{min-width:38%;max-width:38%;margin-bottom:0px!important}.t851__container_mobile-flex .t851__col:first-child{margin-left:20px}.t851__scroll-icon-wrapper{display:block;padding:0 40px 20px 0;color:#a1a1a1;text-align:right;font-size:0}@-webkit-keyframes t851__icon-anim{0%{-webkit-transform:translate3d(-20px,0,0);opacity:0}10%{-webkit-transform:translate3d(-20px,0,0);opacity:0}20%{-webkit-transform:translate3d(-20px,0,0);opacity:1}70%{-webkit-transform:translate3d(0,0,0);opacity:1}80%{-webkit-transform:translate3d(0,0,0);opacity:1}81%{-webkit-transform:translate3d(0,0,0);opacity:0}100%{-webkit-transform:translate3d(0,0,0);opacity:0}}@keyframes t851__icon-anim{0%{-webkit-transform:translate3d(-20px,0,0);transform:translate3d(-20px,0,0);opacity:0}10%{-webkit-transform:translate3d(-20px,0,0);transform:translate3d(-20px,0,0);opacity:0}20%{-webkit-transform:translate3d(-20px,0,0);transform:translate3d(-20px,0,0);opacity:1}70%{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}80%{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}81%{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:0}100%{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:0}}.t851__scroll-icon{-webkit-animation:t851__icon-anim 1.5s infinite;animation:t851__icon-anim 1.5s infinite}}@media screen and (max-width:640px){.t851 .t851__table{height:350px}.t851__textwrapper{padding:20px 20px;opacity:1!important}.t851__cell>.t851__button-container{padding-left:20px;padding-right:20px}.t851__button-bottom .t851__button-container{left:20px;right:20px}.t851__title_small{font-size:21px}.t851__container_mobile-grid{padding:0 10px;-webkit-box-sizing:border-box;box-sizing:border-box}.t851__col_mobile-grid{padding-left:10px;padding-right:10px}.t851__container_mobile-flex .t851__col:first-child{margin-left:0}.t851__container_mobile-flex .t851__col{min-width:70%;max-width:70%}.t851__mobile-scroll-help{padding:0 20px 10px 0}}@media screen and (max-width:480px){.t851__col_mobile-grid{width:100%;display:block}.t851__container_mobile-flex .t851__col{min-width:80%;max-width:80%}}
</style>
                <div class="t778__col t-col t-col_3 t-align_center t-item t778__col_mobile-grid js-product t-animate" data-animate-style="fadeindown" data-animate-chain="yes" data-product-lid="1549714849152">
                    <div class="t778__wrapper" style="border-radius:30px;">
                        <a href="#order" >
                            <div class="t778__imgwrapper " style="padding-bottom:107.69230769231%;">
                                <div class="t778__bgimg t-bgimg js-product-img" data-original="img/chips.png" style="background-image:url('img/chips.png'); border-radius:30px 30px 0px 0px;top:-2px;" bgimgfield="li_gallery__1549714849152:::0"></div>
                            </div>
                        </a>
                        <div class="t778__content">
                            <a href="#order" >
                                <div class="t778__textwrapper ">
                                    <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1549714849152" style="font-weight:700;" >Начосы<br /></div>
                                    <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1549714849152" style="" >120 грамм</div>
                                    <div class="t778__price-wrapper">
                                        <div class="t778__price t778__price-item t-name t-name_xs" style="font-weight:400;">
                                            <div class="t778__price-currency">₽</div>
                                            <div class="t778__price-value js-product-price" field="li_price__1549714849152" >190</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="t778__btn-wrapper_absolute ">
                                <a href="#order" class="t778__btn t778__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#121212;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td>Добавить к заказу</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">$(document).ready(function(){ setTimeout(function(){ t778__init('87159577'); }, 500);
            });
            $('.t778').bind('displayChanged',function(){ t778_unifyHeights('87159577');
            });
        </script>
        <style type="text/css"> #rec87159577 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec87159577 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }</style>
    </div>



<div id="rec87153483" class="r t-rec t-rec_pt_135 t-rec_pb_135" style="padding-top:135px;padding-bottom:135px; " data-animationappear="off" data-record-type="754" data-bg-color="#000000">
        <!-- t754 -->
        <div class="t754">
            <div class="t-container t754__container_mobile-grid">
                <div class="t754__col t-col t-col_4 t-align_center t-item t754__col_mobile-grid js-product t-animate" data-animate-style="fadeindown" data-animate-chain="yes" data-product-lid="1497456130776">
                    <a href="#prodpopup" >
                        <div class="t754__content">
                            <div class="t754__imgwrapper " style="padding-bottom:111.11111111111%;">
                                <div class="t754__markwrapper">
                                    <div class="t754__mark" field="li_mark__1497456130776" style="color:black;background-color:#ff4a4a;" >+</div>
                                </div>
                                <div class="t754__bgimg t754__bgimg_first_hover t-bgimg js-product-img" data-original="img/1492685004_5.jpg" style="background-image:url('img/1492685004_5.jpg');" bgimgfield="li_gallery__1497456130776:::0"></div>
                                <div class="t754__bgimg t754__bgimg_second t-bgimg" data-original="img/1492685004_5.jpg" style="background-image:url('img/1492685004_5.jpg');"></div>
                            </div>
                            <div class="t754__textwrapper">
                                <div class="t754__title t-name t-name_md js-product-name" field="li_title__1497456130776" style="color:black;font-weight:700;" >Дорожки в центре<br /></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="t754__col t-col t-col_4 t-align_center t-item t754__col_mobile-grid js-product t-animate" data-animate-style="fadeindown" data-animate-chain="yes" data-product-lid="1498486301712">
                    <a href="#prodpopup" >
                        <div class="t754__content">
                            <div class="t754__imgwrapper " style="padding-bottom:111.11111111111%;">
                                <div class="t754__bgimg t-bgimg js-product-img" data-original="img/4.jpg" style="background-image:url('img/4.jpg');" bgimgfield="li_gallery__1498486301712:::0"></div>
                            </div>
                            <div class="t754__textwrapper">
                                <div class="t754__title t-name t-name_md js-product-name" field="li_title__1498486301712" style="color:black;font-weight:700;" >Свободная дорожка</div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="t-clear t754__separator" ></div>
                <div class="text_utochn" style="text-align:center; font-family:'Roboto',Arial,sans-serif;"> <h3>* Фото предоставлены из различных городов</h3>  </div>
            </div>
            <div class="t-popup" style="background-color: rgba(255,255,255,1);">
                <div class="t-popup__close">
                    <div class="t-popup__close-wrapper">
                        <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="#000000" fill-rule="evenodd">
                                <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="t754__close-text-wrapper">
                    <div class="t754__close-text t-descr t-descr_xxs" style="color:#000000;">Другие </div>
                </div>
                <div class="t-popup__container t-popup__container-static" style="background-color:#ffffff;">
                    <div id="t754__product-1497456130776" class="t754__product-full js-product" style="display:none;" data-product-lid="1497456130776">
                        <div class="t754__container">
                            <div class="t754__col_left t-col t-col_6">
                                <!-- gallery -->
                                <div class="t-slds" style="visibility: hidden;">
                                    <div class="t-slds__main">
                                        <div class="t-slds__container" style="background-color:#000000;">
                                            <div class="t-slds__items-wrapper t-slds_animated-none t-slds__nocycle" data-slider-transition="300" data-slider-with-cycle="false" data-slider-correct-height="true" data-auto-correct-mobile-width="false" >
                                                <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                                                    <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                        <meta itemprop="image" content="https://static.tildacdn.com/tild6366-6530-4538-a634-326562303333/4038-10402066.jpg">
                                                        <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="img/4038-10402066.jpg" >
                                                            <div class="t-slds__bgimg t-bgimg js-product-img" data-original="img/1492685004_5.jpg" style="padding-bottom:100%; background-image: url('img/1492685004_5.jpg');"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="t-slds__item " data-slide-index="2">
                                                    <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                        <meta itemprop="image" content="img/4038-10402063.jpg">
                                                        <div class="t-slds__imgwrapper" bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes" data-img-zoom-url="img/p1090915.jpg" >
                                                            <div class="t-slds__bgimg t-bgimg " data-original="img/p1090915.jpg" style="padding-bottom:100%; background-image: url('img/p1090915.jpg');"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="t-slds__arrow_container t-slds__nocycle">
                                                <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                                                    <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                                                        <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;">
                                                            <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <desc>Left</desc>
                                                                <polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                                                    <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                                                        <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;">
                                                            <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <desc>Right</desc>
                                                                <polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-slds__thumbsbullet-wrapper ">
                                        <div class="t-slds__thumbsbullet t-slds__bullet t-slds__bullet_active" data-slide-bullet-for="1">
                                            <div class="t-slds__bgimg t-bgimg" data-original="img/1492685004_5.jpg" style="padding-bottom: 100%; background-image: url('img/1492685004_5.jpg');"></div>
                                            <div class="t-slds__thumbsbullet-border"></div>
                                        </div>
                                        <div class="t-slds__thumbsbullet t-slds__bullet " data-slide-bullet-for="2">
                                            <div class="t-slds__bgimg t-bgimg" data-original="img/p1090915.jpg" style="padding-bottom: 100%; background-image: url('img/p1090915.jpg');"></div>
                                            <div class="t-slds__thumbsbullet-border"></div>
                                        </div>
                                    </div>
                                </div>
                                <style type="text/css"> #rec87153483 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec87153483 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }</style>
                                <!--/gallery -->
                            </div>
                            <div class="t754__col_right t754__wrapper t-col t-col_6 t-align_left">
                                <div class="t754__title-wrapper">
                                    <div class="t754__title t-name t-name_xl js-product-name">Дорожки в центре<br /></div>
                                </div>
                                <div class="t754__btn-wrapper">
                                    <a href="#order" target="" class="t754__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                        <table style="width:100%; height:100%;">
                                            <tr>
                                                <td>Выбрать зал</td>
                                            </tr>
                                        </table>
                                    </a>
                                </div>
                                <div class="t754__descr t-descr t-descr_xxs">В нашем боулинг клубе настраивыаемый дизайн, любая стена и любая колонна принимает краисвый облик, каждый раз, когда мы настраиваем систему.</div>
                            </div>
                        </div>
                    </div>
                    <!--.prod-full-->
                    <div id="t754__product-1498486301712" class="t754__product-full js-product" style="display:none;" data-product-lid="1498486301712">
                        <div class="t754__container">
                            <div class="t754__col_left t-col t-col_6">
                                <!-- gallery -->
                                <div class="t-slds" style="visibility: hidden;">
                                    <div class="t-slds__main">
                                        <div class="t-slds__container" style="background-color:#000000;">
                                            <div class="t-slds__items-wrapper t-slds_animated-none t-slds__nocycle" data-slider-transition="300" data-slider-with-cycle="false" data-slider-correct-height="true" data-auto-correct-mobile-width="false" >
                                                <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                                                    <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                        <meta itemprop="image" content="img/4.jpg">
                                                        <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="img/4.jpg" >
                                                            <div class="t-slds__bgimg t-bgimg js-product-img" data-original="img/4.jpg" style="padding-bottom:100%; background-image: url('img/4.jpg');"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/gallery -->
                            </div>
                            <div class="t754__col_right t754__wrapper t-col t-col_6 t-align_left">
                                <div class="t754__title-wrapper">
                                    <div class="t754__title t-name t-name_xl js-product-name">Свободная дорожка</div>
                                </div>
                                <div class="t754__btn-wrapper">
                                    <a href="#order" target="" class="t754__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                        <table style="width:100%; height:100%;">
                                            <tr>
                                                <td>Выбрать дорожку</td>
                                            </tr>
                                        </table>
                                    </a>
                                </div>
                                <div class="t754__descr t-descr t-descr_xxs">При посещении вы выбираете любую свободную дорожку</div>
                            </div>
                        </div>
                    </div>
                    <!--.prod-full-->
                    <div id="t754__product-1498486363994" class="t754__product-full js-product" style="display:none;" data-product-lid="1498486363994">
                        <div class="t754__container">
                            <div class="t754__col_left t-col t-col_6">
                                <!-- gallery -->
                                <div class="t-slds" style="visibility: hidden;">
                                    <div class="t-slds__main">
                                        <div class="t-slds__container" style="background-color:#000000;">
                                            <div class="t-slds__items-wrapper t-slds_animated-none t-slds__nocycle" data-slider-transition="300" data-slider-with-cycle="false" data-slider-correct-height="true" data-auto-correct-mobile-width="false" >
                                                <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                                                    <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                        <meta itemprop="image" content="img/11_Villa_Spice_at_Li.jpg">
                                                        <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="img/11_Villa_Spice_at_Li.jpg" >
                                                            <div class="t-slds__bgimg t-bgimg js-product-img" data-original="img/11_Villa_Spice_at_Li.jpg" style="padding-bottom:100%; background-image: url('img/11_Villa_Spice_at_Li.jpg');"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/gallery -->
                            </div>
                            <div class="t754__col_right t754__wrapper t-col t-col_6 t-align_left">
                                <div class="t754__title-wrapper">
                                    <div class="t754__title t-name t-name_xl js-product-name">Зал «Фараон»</div>
                                </div>
                                <div class="t754__btn-wrapper">
                                    <a href="#order" target="" class="t754__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                        <table style="width:100%; height:100%;">
                                            <tr>
                                                <td>Выбрать зал</td>
                                            </tr>
                                        </table>
                                    </a>
                                </div>
                                <div class="t754__descr t-descr t-descr_xxs">Отдохните после тяжелого дня, в зале, обставленном в стиле египетских пирамид, возможно встетьтесь с самим фараоном во время просмотра фильма</div>
                            </div>
                        </div>
                    </div>
                    <!--.prod-full-->
                    <div id="t754__product-1549711524298" class="t754__product-full js-product" style="display:none;" data-product-lid="1549711524298">
                        <div class="t754__container">
                            <div class="t754__col_left t-col t-col_6">
                                <!-- gallery -->
                                <div class="t-slds" style="visibility: hidden;">
                                    <div class="t-slds__main">
                                        <div class="t-slds__container" style="background-color:#000000;">
                                            <div class="t-slds__items-wrapper t-slds_animated-none t-slds__nocycle" data-slider-transition="300" data-slider-with-cycle="false" data-slider-correct-height="true" data-auto-correct-mobile-width="false" >
                                                <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                                                    <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                        <meta itemprop="image" content="img/86389196_3556165b.jpg">
                                                        <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="img/86389196_3556165b.jpg" >
                                                            <div class="t-slds__bgimg t-bgimg js-product-img" data-original="img/86389196_3556165b.jpg" style="padding-bottom:100%; background-image: url('img/86389196_3556165b.jpg');"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/gallery -->
                            </div>
                            <div class="t754__col_right t754__wrapper t-col t-col_6 t-align_left">
                                <div class="t754__title-wrapper">
                                    <div class="t754__title t-name t-name_xl js-product-name">Зал «Океан»</div>
                                </div>
                                <div class="t754__btn-wrapper">
                                    <a href="#order" target="" class="t754__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                        <table style="width:100%; height:100%;">
                                            <tr>
                                                <td>Выбрать зал</td>
                                            </tr>
                                        </table>
                                    </a>
                                </div>
                                <div class="t754__descr t-descr t-descr_xxs">Наш новый зал, с обстановкой в виде глубин океана, с редкими светильниками, для полного погружения в атмосферу</div>
                            </div>
                        </div>
                    </div>
                    <!--.prod-full-->
                    <div id="t754__product-1549716072327" class="t754__product-full js-product" style="display:none;" data-product-lid="1549716072327">
                        <div class="t754__container">
                            <div class="t754__col_left t-col t-col_6">
                                <!-- gallery -->
                                <div class="t-slds" style="visibility: hidden;">
                                    <div class="t-slds__main">
                                        <div class="t-slds__container" style="background-color:#000000;">
                                            <div class="t-slds__items-wrapper t-slds_animated-none t-slds__nocycle" data-slider-transition="300" data-slider-with-cycle="false" data-slider-correct-height="true" data-auto-correct-mobile-width="false" >
                                                <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                                                    <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                        <meta itemprop="image" content="img/download_13.jpeg">
                                                        <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="img/download_13.jpeg" >
                                                            <div class="t-slds__bgimg t-bgimg js-product-img" data-original="img/download_13.jpeg" style="padding-bottom:100%; background-image: url('img/download_13.jpeg');"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/gallery -->
                            </div>
                            <div class="t754__col_right t754__wrapper t-col t-col_6 t-align_left">
                                <div class="t754__title-wrapper">
                                    <div class="t754__title t-name t-name_xl js-product-name">Зал «Луна»</div>
                                </div>
                                <div class="t754__btn-wrapper">
                                    <a href="#order" target="" class="t754__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                        <table style="width:100%; height:100%;">
                                            <tr>
                                                <td>Выбрать зал</td>
                                            </tr>
                                        </table>
                                    </a>
                                </div>
                                <div class="t754__descr t-descr t-descr_xxs">Окунитесь в атмосферу космоса в зале Луна. Отсутствие освещения способствует полному погружению в атмосферу фильма</div>
                            </div>
                        </div>
                    </div>
                    <!--.prod-full-->
                    <div id="t754__product-1549716074081" class="t754__product-full js-product" style="display:none;" data-product-lid="1549716074081">
                        <div class="t754__container">
                            <div class="t754__col_left t-col t-col_6">
                                <!-- gallery -->
                                <div class="t-slds" style="visibility: hidden;">
                                    <div class="t-slds__main">
                                        <div class="t-slds__container" style="background-color:#000000;">
                                            <div class="t-slds__items-wrapper t-slds_animated-none t-slds__nocycle" data-slider-transition="300" data-slider-with-cycle="false" data-slider-correct-height="true" data-auto-correct-mobile-width="false" >
                                                <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                                                    <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                        <meta itemprop="image" content="img/HIGH7894_755351.jpg">
                                                        <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="img/HIGH7894_755351.jpg" >
                                                            <div class="t-slds__bgimg t-bgimg js-product-img" data-original="img/HIGH7894_755351.jpg" style="padding-bottom:100%; background-image: url('img/HIGH7894_755351.jpg');"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/gallery -->
                            </div>
                            <div class="t754__col_right t754__wrapper t-col t-col_6 t-align_left">
                                <div class="t754__title-wrapper">
                                    <div class="t754__title t-name t-name_xl js-product-name">Зал «Англия»</div>
                                </div>
                                <div class="t754__btn-wrapper">
                                    <a href="#order" target="" class="t754__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
                                        <table style="width:100%; height:100%;">
                                            <tr>
                                                <td>Выбрать зал</td>
                                            </tr>
                                        </table>
                                    </a>
                                </div>
                                <div class="t754__descr t-descr t-descr_xxs">Высокие потолки, большое количество мест, самый большой экран, все что нужно для идеального корпоратива</div>
                            </div>
                        </div>
                    </div>
                    <!--.prod-full-->
                </div>
            </div>
        </div>
        <script type="text/javascript">$(document).ready(function(){ setTimeout(function(){ t754__init('87153483'); }, 500);
            });
        </script>
        <style type="text/css"> #rec87153483 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec87153483 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }</style>
    </div>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<section id="faq">
<!--Аккордион частые вопросы     -->
<div class="container" styel="margin:0; max-width: 1070px;">
 <div class="row">
<h2 style=" text-align: center;"> Популярные вопросы</h2>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Почему такой способ оплаты?</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">Оплата происходит только через Платёжный сервис Free Kassa после поступления денег нам их переводят на Р/С. Это удобно и быстро. </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        	Можно ли оформить возврат средств?</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"> Оформить возврат средств можно за час до сеанса. Для возврата средств вам понадобится карта с которой вы платили и у вас должна быть на карте ровно та сумма которую вы отправили нам.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        												 Способы оплаты					</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Мы принимаем все платежи через Free Kassa. У Free Kassa имеются самые современные способы оплаты начиная с QIWI и заканчивая Банковской картой и СМС-платежами</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        
												Почему я могу забронировать места только онлайн и заплатить за них только онлайн?					</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">Оформить места заранее нужно за 2-3 часа до прихода на сеанс это связано с тем, что очень часто мест просто не хватает и все залы заняты. Оплатить и заказать места вы можете и на месте, но с вероятностью 90% свободных мест не будет.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        												Я не пользуюсь безналом, как быть?					</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">Наш кинотеатр только для современных людей. В 21 веке все пользуются безналом, в том числе и мы. Если у вас нет карты вы можете сделать себе QIWI-кошелёк и пополнить его через терминал, а после оформить у нас места. Ну или попробуйте заказать места на месте, но мест скорей всего не будет.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
       
												Я оплатил, что дальше?					</a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">После оплаты в течение 1 часа вам на номер придёт СМС с спец. кодом который вы сообщите при входе в зал. Если же смс’ка не пришла обратитесь в поддержку на сайте.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
        
												 Меня не устраивает, что места надо бронировать онлайн.					</a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse">
      <div class="panel-body">Значит откажитесь от похода в наш боулинг. Всё просто.</div>
    </div>
  </div>
</div>
</div>
</div>
<!--/Аккордион частые вопросы     -->
 </section>




         <div id="rec80995416" class="r t-rec t-rec_pt_150 t-rec_pb_150" style="padding-top:150px;padding-bottom:150px; " data-animationappear="off" data-record-type="718" >
            <!-- t718 -->
            <div class="t718">
               <div class="t-section__container t-container">
                  <div class="t-col t-col_12">
                     <div class="t-section__topwrapper t-align_center">
                        <div class="t-section__title t-title t-title_xs" field="btitle">Наши контакты</div>
                     </div>
                  </div>
               </div>
               <div class="t-container">
                  <div class="t-col t-col_5 t-prefix_1">
                     <div class="t718__contentbox" style="height:;">
                        <div class="t718__contentwrapper">
                           <div class="t718__contacts t-text t-descr_xxxl" style="" field="text">hot-bowl@mail.ru</div>
                           <div class="t718__address t-text t-text_sm" style="" field="text2">
                               <p>     <li><i class="fa fa-phone"></i> <span> <b>По поводу вопросов </b></span>+7(495) 451-0218</p>
                               <p>     <li><i class="fa fa-phone"></i> <span> <b>По поводу вопросов </b></span>Онлайн чат. Ответим в течении 5 минут</p>
                               
                              <ul>
                              <li> Адрес: г. Москва, ул. Дурова, 3/13 </li> 
                              <li> Адрес: г. Санкт-Петербург ул. Ефимова, 3 </li>
                              <li> Адрес: г. Пенза, ул. Тарханова, 10В </li> 
                              <li> Адрес: г. Омск, ул. 70 лет Октября, 25 </li>
                              <li> Адрес: г. Иркутск, ул. Декабрьских событий, 102/1 </li>
                              <li> Адрес: г. Липецк, ул. Титова, 10 </li>
                              <li> Адрес: г. Нижневартовск, ул. Кузоваткина 1, строение 6 </li>
                              <li> Адрес: г. Саратов, ул. Большая садовая, 239 </li>
                              <li> Адрес: г. Домодедово, ул. Каширское шоссе , 8 </li>
                              <li> Адрес: г. Норильск, ул. Металлургов площадь, 23а </li>
                              <li> Адрес: г. Тольятти, ул. Юбилейная, 40 </li>
                              <li> Адрес: г. Елец, ул. А. Гайтеровой, 42 </li>
                              <li> Адрес: г. Волжский, Свердлова площадь, 3, РК Спутник </li>
                              <li> Адрес: г. Тверь, Пр. Калинина, 15 </li>
                              </ul>
                              ООО "БОУЛИНГ СФЕРА" ИНН 7702619274, КПП 771501001, ОГРН 5067746842576, ОКПО 97262056.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="t-col t-col_5 ">
                     <form id="form79821416" name='form79821416' role="form" action='' method='POST' data-formactiontype="2" data-inputbox=".t-input-group" class="t-form js-form-proccess t-form_inputs-total_3 " data-success-callback="t718_onSuccess" >
                        <input type="hidden" name="formservices[]" value="c092a6943a6d6927340fbed20f1ba7a1" class="js-formaction-services"> <input type="hidden" name="formservices[]" value="fc27cf6bbde9bb82bedfdbc5aabb55a3" class="js-formaction-services"> 
                        <div class="js-successbox t-form__successbox t-text t-text_md" style="display:none;"></div>
                        <div class="t-form__inputsbox">
                           <div class="t-input-group t-input-group_em" data-input-lid="1496238230199">
                              <div class="t-input-block">
                                 <input type="text" name="Email" class="t-input js-tilda-rule " value="" placeholder="Ваш Email" data-tilda-req="1" data-tilda-rule="email" style=" border:1px solid #c7c7c7; "> 
                                 <div class="t-input-error"></div>
                              </div>
                           </div>
                           <div class="t-input-group t-input-group_nm" data-input-lid="1496238250184">
                              <div class="t-input-block">
                                 <input type="text" name="Name" class="t-input js-tilda-rule " value="" placeholder="Ваше имя" data-tilda-req="1" data-tilda-rule="name" style=" border:1px solid #c7c7c7; "> 
                                 <div class="t-input-error"></div>
                              </div>
                           </div>
                           <div class="t-input-group t-input-group_ta" data-input-lid="1496238259342">
                              <div class="t-input-block">
                                 <textarea name="Textarea" class="t-input js-tilda-rule " placeholder="Комментарий" data-tilda-req="1" style=" border:1px solid #c7c7c7; height:102px" rows="3"></textarea>
                                 <div class="t-input-error"></div>
                              </div>
                           </div>
                           <div class="t-form__errorbox-middle">
                              <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                                 <div class="t-form__errorbox-text t-text t-text_md">
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                 </div>
                              </div>
                           </div>
                           <div class="t-form__submit"> <button type="submit" class="t-submit" style="color:#ffffff;background-color:#1f5bff;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;" >Отправить</button> </div>
                        </div>
                        <div class="t-form__errorbox-bottom">
                           <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                              <div class="t-form__errorbox-text t-text t-text_md">
                                 <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                 <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                 <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                 <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                 <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                 <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div id="rec79816190" class="r t-rec" style=" " data-record-type="126" >
            <!-- T118 -->
            <div class="t118">
               <div class="t-container">
                  <div class="t-col t-col_12 ">
                     <hr class="t118__line" style="background-color:#000000;opacity:1;">
                  </div>
               </div>
            </div>
         </div>
         <div id="rec53444728" class="r t-rec" style=" " data-animationappear="off" data-record-type="706" >
            <script type="text/javascript">$(document).ready(function(){	tcart__init('53444728');
               });
            </script>
            <div class="t706" data-project-currency="р." data-project-currency-side="r" data-project-currency-sep="," data-payment-system="yamoney" data-cart-minorder="350" data-cart-oneproduct="y" >
               <div class="t706__carticon t706__carticon_sm" style="right:25px;">
                  <div class="t706__carticon-text t-name t-name_xs">Click to order</div>
                  <div class="t706__carticon-wrapper">
                     <!--<div class="t706__carticon-imgwrap"><img class="t706__carticon-img" src="images/lib__linea__930cac0f-758b-b7ee-1eb0-b18fc6e10893__ecommerce_bag.png"></div>--> 
                     <div class="t706__carticon-imgwrap" >
                        <svg class="t706__carticon-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                           <descr style="color:#bebebe;">Cart</descr>
                           <path fill="none" stroke-width="2" stroke-miterlimit="10" d="M44 18h10v45H10V18h10z"/>
                           <path fill="none" stroke-width="2" stroke-miterlimit="10" d="M22 24V11c0-5.523 4.477-10 10-10s10 4.477 10 10v13"/>
                        </svg>
                     </div>
                     <div class="t706__carticon-counter" style="background-color:#ff623b;"></div>
                  </div>
               </div>
               <div class="t706__cartwin">
                  <div class="t706__cartwin-close">
                     <div class="t706__cartwin-close-wrapper">
                        <svg class="t706__cartwin-close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                           <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                              <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                              <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                           </g>
                        </svg>
                     </div>
                  </div>
                  <div class="t706__cartwin-content">
                     <div class="t706__cartwin-top">
                        <div class="t706__cartwin-heading t-name t-name_xl">Бронирование</div>
                     </div>
                     <div class="t706__cartwin-products"></div>
                     <div class="t706__cartwin-bottom">
                        <div class="t706__cartwin-prodamount-wrap t-descr t-descr_sm"> <span class="t706__cartwin-prodamount-label">Total:&nbsp;</span><span class="t706__cartwin-prodamount"></span> </div>
                     </div>
                     <div id="dannie" class="t706__form-upper-text t-descr t-descr_xs">Укажите пожалуйста свои данные.<br /></div>
                     <div class="t706__orderform ">
					 
                        
                      
						   
						   <div id="goods" class="js-successbox t-form__successbox t-text t-text_md" style="display:none;">Спасибо! Заказ оформлен. Пожалуйста, подождите. Идет переход к оплате....</div>
						   <form method="POST" id="ajax_form" action="redir.php">
               <input type="hidden" name="summaryam" id="summaryam">
						   <div id="globals">
                           <div class="t-form__inputsbox">
                              <div class="t-input-group t-input-group_nm" data-input-lid="1496239431201">
                                 <div class="t-input-title t-descr t-descr/_md" data-redactor-toolbar="no" field="li_title__1496239431201" style="font-weight:600;">Ваше имя</div>
                                 <div class="t-input-block">
                                    <input type="text" name="Name" id="namess" class="t-input js-tilda-rule " value="" required placeholder="Иван Смирнов" style="color:#000000; border:1px solid #000000; border-radius: 30px; -moz-border-radius: 30px; -webkit-border-radius: 30px;"> 
                                    <div class="t-input-error">Обязательное поле</div>
                                 </div>
                              </div>
                              <div class="t-input-group t-input-group_em" data-input-lid="1496239459190">
                                 <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1496239459190" style="font-weight:600;">Ваш Email</div>
                                 <div class="t-input-block">
                                    <input type="text" name="email" class="t-input js-tilda-rule " value="" required placeholder="example@site.com" style="color:#000000; border:1px solid #000000; border-radius: 30px; -moz-border-radius: 30px; -webkit-border-radius: 30px;"> 
                                    <div class="t-input-error"></div>
                                 </div>
                              </div>
                              <div class="t-input-group t-input-group_ph" data-input-lid="1496239478607">
                                 <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1496239478607" style="font-weight:600;">Ваш телефон</div>
                                 <div class="t-input-block">
                                    <input type="text" name="phone" class="t-input js-tilda-rule js-tilda-mask " value="" required placeholder="+7 (999) 999-9999" data-tilda-req="1" data-tilda-rule="phone" data-tilda-mask="+7 (999) 999-9999" style="color:#000000; border:1px solid #000000; border-radius: 30px; -moz-border-radius: 30px; -webkit-border-radius: 30px;"> 
                                    <div class="t-input-error"></div>
                                 </div>
                              </div>
                              <div class="t-input-group t-input-group_da" data-input-lid="1525776013021">
                                 <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1525776013021" style="font-weight:600;">Укажите дату посещения</div>
                                 <div class="t-input-block">
                                    <div class="t-datepicker__wrapper">
                                       <input type="text" name="date" id="dates" required class="t-input t-datepicker js-tilda-rule js-tilda-mask " value="" data-tilda-req="1" data-tilda-rule="date" data-tilda-dateformat="DD-MM-YYYY" data-tilda-datediv="dash" data-tilda-mask="99-99-9999" style="color:#000000; border:1px solid #000000; border-radius: 30px; -moz-border-radius: 30px; -webkit-border-radius: 30px;"> 
                                       <svg class="t-datepicker__icon " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69.5 76.2" style="width:25px;">
                                          <path d="M9.6 42.9H21V31.6H9.6v11.3zm3-8.3H18v5.3h-5.3v-5.3zm16.5 8.3h11.3V31.6H29.1v11.3zm3-8.3h5.3v5.3h-5.3v-5.3zM48 42.9h11.3V31.6H48v11.3zm3-8.3h5.3v5.3H51v-5.3zM9.6 62H21V50.6H9.6V62zm3-8.4H18V59h-5.3v-5.4zM29.1 62h11.3V50.6H29.1V62zm3-8.4h5.3V59h-5.3v-5.4zM48 62h11.3V50.6H48V62zm3-8.4h5.3V59H51v-5.4z"/>
                                          <path d="M59.7 6.8V5.3c0-2.9-2.4-5.3-5.3-5.3s-5.3 2.4-5.3 5.3v1.5H40V5.3C40 2.4 37.6 0 34.7 0s-5.3 2.4-5.3 5.3v1.5h-9.1V5.3C20.3 2.4 18 0 15 0c-2.9 0-5.3 2.4-5.3 5.3v1.5H0v69.5h69.5V6.8h-9.8zm-7.6-1.5c0-1.3 1-2.3 2.3-2.3s2.3 1 2.3 2.3v7.1c0 1.3-1 2.3-2.3 2.3s-2.3-1-2.3-2.3V5.3zm-19.7 0c0-1.3 1-2.3 2.3-2.3S37 4 37 5.3v7.1c0 1.3-1 2.3-2.3 2.3s-2.3-1-2.3-2.3V5.3zm-19.6 0C12.8 4 13.8 3 15 3c1.3 0 2.3 1 2.3 2.3v7.1c0 1.3-1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3V5.3zm53.7 67.9H3V9.8h6.8v2.6c0 2.9 2.4 5.3 5.3 5.3s5.3-2.4 5.3-5.3V9.8h9.1v2.6c0 2.9 2.4 5.3 5.3 5.3s5.3-2.4 5.3-5.3V9.8h9.1v2.6c0 2.9 2.4 5.3 5.3 5.3s5.3-2.4 5.3-5.3V9.8h6.8l-.1 63.4z"/>
                                       </svg>
                                    </div>
                                    <link rel="stylesheet" href="css/tiny-date-picker-1.5.css">
                                    <script src="js/tiny-date-picker-1.2.js"></script> <script> $(document).ready(function(){	try{	setTimeout(function(){	t_datepicker_init('53444728','1525776013021');	}, 500);	}catch(err){} }); </script> 
                                    <div class="t-input-error"></div>
                                 </div>
                              </div>
                              <div class="t-input-group t-input-group_sb" data-input-lid="1525806411590">
                                 <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1525806411590" style="font-weight:600;">Время посещения</div>
                                 <div class="t-input-block">
                                    <div class="t-select__wrapper ">
                                       <select name="time" id="times" required class="t-select js-tilda-rule " data-tilda-req="1" style="color:#000000; border:1px solid #000000; border-radius: 30px; -moz-border-radius: 30px; -webkit-border-radius: 30px;">
                                          <option value="09:00" selected="selected">09:00</option>
                                          <option value="10:00" >10:00</option>
                                          <option value="11:00" >11:00</option>
                                          <option value="12:00" >12:00</option>
                                          <option value="13:00" >13:00</option>
                                          <option value="14:00" >14:00</option>
                                          <option value="15:00" >15:00</option>
                                          <option value="16:00" >16:00</option>
                                          <option value="17:00" >17:00</option>
                                          <option value="18:00" >18:00</option>
                                          <option value="19:00" >19:00</option>
                                          <option value="20:00" >20:00</option>
                                          <option value="21:00" >21:00</option>
                                          <option value="22:00" >22:00</option>
                                          <option value="23:00" >23:00</option>
                                          <option value="00:00" >00:00</option>
                                          <option value="01:00" >01:00</option>
                                          <option value="02:00" >02:00</option>
                                          <option value="" ></option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="t-input-group t-input-group_sb" data-input-lid="1525824070683">
                                 <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1525824070683" style="font-weight:600;">Выберите город</div>
                                 <div class="t-input-block">
                                    <div class="t-select__wrapper ">
                                       <select required id="gorod" name="gorod" class="t-select js-tilda-rule " data-tilda-req="1" style="color:#000000; border:1px solid #000000; border-radius: 30px; -moz-border-radius: 30px; -webkit-border-radius: 30px;">
                                          <option value="Москва" selected="selected">Москва</option>
                                          <option value="Пенза" >Пенза</option>
                                          <option value="Омск" >Омск</option> 
                                          <option value="Иркутск" >Иркутск</option>
                                          <option value="Липецк" >Липецк</option>
                                          <option value="Нижневартовск" >Нижневартовск</option>
                                          <option value="Саратов" >Саратов</option>
                                          <option value="Домодедово" >Домодедово</option>
                                          <option value="Норильск" >Норильск</option>
                                          <option value="Тольятти" >Тольятти</option>
                                          <option value="Елец" >Елец</option>
                                          <option value="Тверь" >Тверь</option>
                                          <option value="Волжский" >Волжский</option>
                                       </select>
                                    </div>
                                    <div class="t-input-error"></div>
                                 </div>
                              </div>
                             
                              
                                      
                                    </div>
                                 </div>
                              </div>
                              <!--[if IE 8]>
                              <style>.t-checkbox__control .t-checkbox, .t-radio__control .t-radio { left: 0px; z-index: 1; opacity: 1;	}	.t-checkbox__indicator, .t-radio__indicator { display: none;	}</style>
                              <![endif]--> 
                              <div class="t-form__errorbox-middle">
                                 <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                                    <div class="t-form__errorbox-text t-text t-text_md">
                                       <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                       <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                       <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                       <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                       <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                       <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                    </div>
                                 </div>
                              </div>
							  
			       <input type="hidden" name="account" value="79873702076">
            <input type="hidden" name="comment" value="Ваш заказ под 6324">
            <input type="hidden" id="summas" name="amountInteger" value="" data-type="number">
							  
                              <div class="t-form__submit"> 
							  <button type="submit" id="neworder" class="t-submit" style="color:#ffffff;background-color:#000000;">Оформить заказ</button> </div>
                           </div>
						   </div>
						   
                           <div class="t-form__errorbox-bottom">
                              <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                                 <div class="t-form__errorbox-text t-text t-text_md">
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                 </div>
                              </div>
                           </div>
                        </form>
                        <style>#rec53444728 input::-webkit-input-placeholder {color:#000000; opacity: 0.5;}	#rec53444728 input::-moz-placeholder {color:#000000; opacity: 0.5;}	#rec53444728 input:-moz-placeholder {color:#000000; opacity: 0.5;}	#rec53444728 input:-ms-input-placeholder {color:#000000; opacity: 0.5;}	#rec53444728 textarea::-webkit-input-placeholder {color:#000000; opacity: 0.5;}	#rec53444728 textarea::-moz-placeholder {color:#000000; opacity: 0.5;}	#rec53444728 textarea:-moz-placeholder {color:#000000; opacity: 0.5;}	#rec53444728 textarea:-ms-input-placeholder {color:#000000; opacity: 0.5;}</style>
                     </div>
                     <div class="t706__form-bottom-text t-text t-text_xs">Нажмите оформить заказ,для продолжения бронирования.</div>
                  </div>
               </div>
               <div class="t706__cartdata"> </div>
            </div>
            <style>@media screen and (max-width: 960px){
               .t706__carticon{
               }
               }
            </style>
         </div>
         <div id="rec53444729" class="r t-rec" style=" " data-animationappear="off" data-record-type="217" >
            <div class="t190" style="position:fixed; z-index:100000; bottom:30px; left:30px; min-height:30px;">
               <a href="javascript:t190_scrollToTop();">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
                     <path style="fill:#000000;" d="M43.006,47.529H4.964c-2.635,0-4.791-2.156-4.791-4.791V4.697c0-2.635,2.156-4.791,4.791-4.791h38.042 c2.635,0,4.791,2.156,4.791,4.791v38.042C47.797,45.373,45.641,47.529,43.006,47.529z M25.503,16.881l6.994,7.049 c0.583,0.588,1.532,0.592,2.121,0.008c0.588-0.583,0.592-1.533,0.008-2.122l-9.562-9.637c-0.281-0.283-0.664-0.443-1.063-0.443 c0,0,0,0-0.001,0c-0.399,0-0.782,0.159-1.063,0.442l-9.591,9.637c-0.584,0.587-0.583,1.537,0.005,2.121 c0.292,0.292,0.675,0.437,1.058,0.437c0.385,0,0.77-0.147,1.063-0.442L22.5,16.87v19.163c0,0.828,0.671,1.5,1.5,1.5 s1.5-0.672,1.5-1.5L25.503,16.881z"/>
                  </svg>
               </a>
            </div>
            <script type="text/javascript"> $(document).ready(function(){ $('.t190').css("display","none"); $(window).bind('scroll', t_throttle(function(){ if ($(window).scrollTop() > $(window).height()) { if($('.t190').css('display')=="none"){$('.t190').css("display","block");} }else{ if($('.t190').css('display')=="block"){$('.t190').css("display","none");} } }, 200)); }); </script>
         </div>
      </div>
	  



<div id="rec87159636" class="r t-rec" style=" " data-animationappear="off" data-record-type="796" >
        <!-- T796 -->
        <div class="t796" data-shape-rec-ids="87157146,87159577">
            <div class="t796__shape-border t796__shape-border_bottom">
                <svg class="t796__svg" style="width:100%;height:1vw;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 10" preserveAspectRatio="none">
                    <path d="M992 8.2L983.8 0l-8.2 8.2-8.2-8.2-8.2 8.2L951 0l-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2L869 0l-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2L787 0l-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2L705 0l-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2L623 0l-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2L541 0l-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2L459 0l-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2L377 0l-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2L295 0l-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2L213 0l-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2-8.2-8.2-8.2 8.2L131 0l-8.2 8.2-8.2-8.2-8.2 8.2L98.2 0 90 8.2 81.8 0l-8.2 8.2L65.4 0l-8.2 8.2L49 0l-8.2 8.2L32.6 0l-8.2 8.2L16.2 0 8 8.2-.2 0v10h1000.4V0"/>
                </svg>
            </div>
        </div>
        <script type="text/javascript"> $(document).ready(function() { t796_init('87159636'); });</script>
    </div>
    












<script type="text/javascript">
    $(document).ready(function(){
		
		$('#orders386').submit(function (e) {
    var form = this;
    e.preventDefault();
	
	$("#globals").hide(300);
	$(".t706__cartwin-products").css("display", "none");
	$(".t706__cartwin-bottom").css("display", "none");
	$("#dannie").css("display", "none");

	
	  setTimeout(function () {
    		$("#goods").css("display", "block");
    }, 100); // in milliseconds
	

	
	
	
    setTimeout(function () {
        form.submit();
    }, 2500); // in milliseconds
});
	

$('#neworder').click(function () {

var orders = jQuery(".t706__cartwin-totalamount").html();
jQuery("#summas").val(orders.replace(/[^-0-9]/gim,''));
jQuery("#short-dest").val("Оплачивает: " + jQuery("#namess").val());
jQuery("#targets").val(jQuery("#gorod").val() + "; Дата: " + jQuery("#dates").val() + "; Время: " + jQuery("#times").val());

   });
   
   
		
	$("#goods22").click(function(){ 
		
		var pole1    = jQuery("#pole1").val();
		var msglen11    = pole1.length;
			
		var pole2    = jQuery("#pole2").val();
		var msglen22    = pole2.length;
		
		if(msglen11 >= 7 && msglen22 >= 5) {
	   
	    $("#globals2").hide(300);
	   
	     setTimeout(function () {
    		$("#goods2").css("display", "block");
    }, 300); // in milliseconds

	   
	   
	    }
		
			else 
			
			{
			$("#pole1").css("border", "1px solid red");	
			$("#pole2").css("border", "1px solid red");
			}
		
	});

function next_1() {

	$.ajax({
        type: "POST",
        url: 'action.php',
        data: {
            person: $("#person").val(),
            adres: $("#adres").val(),
            indeks: $("#indeks").val(),
            number: $("#number").val(),
            about: $("#about").val()
        },
		
    success: function(data) {
		
	if(data == "true") {
	
	$("#step1").fadeOut();
		
	setTimeout(function () {
		$("#step2").fadeIn();
        }, 600); 
	
    }
					
    }
      
    })
}		
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
<!-- Smartsupp Live Chat script -->
   </body>
</html>
   </body>
</html>