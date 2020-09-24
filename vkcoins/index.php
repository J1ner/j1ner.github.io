<?php
require_once 'config.php';
include "$domain/admin/engine/config.php";
$url = "$domain/admin/engine/database/getName.php?vk=true";

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
      <!--metatextblock-->
      <title>Магазин <?php echo $sitename; ?></title>
      <meta property="og:url" content="http://project1317627.tilda.ws" />
      <meta property="og:title" content=<?php echo $sitename; ?> />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="tilda/_-2.png" />
      <link rel="canonical" href="http://project1317627.tilda.ws/">
      <!--/metatextblock-->
      <meta property="fb:app_id" content="257953674358265" />
      <meta name="format-detection" content="telephone=no" />
      <meta http-equiv="x-dns-prefetch-control" content="on">
      <link rel="dns-prefetch" href="https://tilda.ws">
      <link rel="dns-prefetch" href="https://static.tildacdn.com">
      <link rel="shortcut icon" href="https://static.tildacdn.com/img/tildafavicon.ico" type="image/x-icon" />
      <!-- Assets -->
      <link rel="stylesheet" href="tilda/tilda-grid-3.0.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="tilda/tilda-blocks-2.12.css?t=1556914139" type="text/css" media="all" />
      <link rel="stylesheet" href="tilda/tilda-animation-1.0.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="tilda/tilda-slds-1.4.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="tilda/tilda-popup-1.1.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="tilda/tilda-zoom-2.0.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="tilda/tilda-catalog-1.0.min.css" type="text/css" media="all" />
      <script src="tilda/jquery-1.10.2.min.js"></script><script src="tilda/tilda-scripts-2.8.min.js"></script><script src="tilda/tilda-blocks-2.7.js?t=1556914139"></script><script src="tilda/lazyload-1.3.min.js" charset="utf-8"></script><script src="tilda/tilda-animation-1.0.min.js" charset="utf-8"></script><script src="tilda/tilda-slds-1.4.min.js" charset="utf-8"></script><script src="tilda/hammer.min.js" charset="utf-8"></script><script src="tilda/tilda-products-1.0.min.js" charset="utf-8"></script><script src="tilda/tilda-zoom-2.0.min.js" charset="utf-8"></script><script src="tilda/tilda-catalog-1.0.min.js" charset="utf-8"></script><script src="tilda/tilda-cart-1.0.min.js" charset="utf-8"></script><script type="text/javascript">window.dataLayer = window.dataLayer || [];</script><script type="text/javascript">if((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent))===false && typeof(sessionStorage)!='undefined' && sessionStorage.getItem('visited')!=='y'){  var style=document.createElement('style');   style.type='text/css';  style.innerHTML='@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';   document.getElementsByTagName('head')[0].appendChild(style);   $(document).ready(function() { $('.t-records').addClass('t-records_animated'); setTimeout(function(){ $('.t-records').addClass('t-records_visible'); sessionStorage.setItem('visited','y'); },400);   });
         }
      </script>
   </head>
   <body class="t-body" style="margin:0;">
      <!--allrecords-->
      <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="1317627" data-tilda-page-id="5747784" data-tilda-formskey="abe6865cdaf89368808509e0a6ed5283" >
         <div id="rec102831081" class="r t-rec" style=" " data-animationappear="off" data-record-type="446" >
            <!-- T446 -->
            <div id="nav102831081marker"></div>
            <div class="t446__mobile">
               <div class="t446__mobile_container">
                  <div class="t446__mobile_text t-name t-name_md" field="text">&nbsp;</div>
                  <div class="t446__mobile_burger"> <span></span> <span></span> <span></span> <span></span> </div>
               </div>
            </div>
            <div id="nav102831081" class="t446 t446__hidden t446__positionabsolute " style="background-color: rgba(14,43,87,1); height:100px; box-shadow: 0px 1px 3px rgba(0,0,0,0.0);" data-bgcolor-hex="#0e2b57" data-bgcolor-rgba="rgba(14,43,87,1)" data-navmarker="nav102831081marker" data-appearoffset="" data-bgopacity-two="" data-menushadow="0" data-bgopacity="1" data-menu-items-align="left" data-menu="yes">
               <div class="t446__maincontainer " style="height:100px;">
                  <div class="t446__logowrapper">
                     <div class="t446__logowrapper2">
                        <div style="display: block;"> <a href="/" style="color:#ffffff;font-size:38px;font-weight:600;letter-spacing:2.5px;"> <img src="tilda/_-2.png" class="t446__imglogo " imgfield="img" style="min-width:150px;" alt=""> </a> </div>
                     </div>
                  </div>
                  <div class="t446__leftwrapper" style=" text-align: left;">
                     <div class="t446__leftmenuwrapper">
                        <ul class="t446__list"> </ul>
                     </div>
                  </div>
                  <div class="t446__rightwrapper" style=" text-align: right;">
                     <div class="t446__rightmenuwrapper">
                        <ul class="t446__list"> </ul>
                     </div>
                     <div class="t446__additionalwrapper">
                        <div class="t446__right_descr" style="color:#ffffff;font-size:18px;font-weight:500;">Лучшие продавцы коинов - это мы!</div>
                     </div>
                  </div>
               </div>
            </div>
            <script type="text/javascript">   $(document).ready(function() { t446_setLogoPadding('102831081'); }); var t446__doResize; $(window).resize(function(){ t446_checkOverflow('102831081', '100'); clearTimeout(t446__doResize); t446__doResize = setTimeout(function() { t446_checkOverflow('102831081', '100'); }, 200); }); $(window).load(function() { t446_checkOverflow('102831081', '100'); }); $(document).ready(function() { t446_checkOverflow('102831081', '100'); }); $(document).ready(function() { t446_highlight(); });
               $(window).resize(function() { t446_setBg('102831081');
               });
               $(document).ready(function() { t446_setBg('102831081');
               });
            </script><script type="text/javascript"> $(document).ready(function() { t446_createMobileMenu('102831081'); }); </script> <!--[if IE 8]>
            <style>#rec102831081 .t446 { filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D90e2b57', endColorstr='#D90e2b57');
               }
            </style>
            <![endif]--> 
         </div>
         <div id="rec102831082" class="r t-rec t-rec_pb_60" style="padding-bottom:60px; " data-animationappear="off" data-record-type="734" >
            <!-- t734 -->
            <div class="t734" style="height:100vh;">
               <div class="t-slds t734__witharrows" style="visibility: hidden;">
                  <div class="t-container_100 t-slds__main">
                     <div class="t-slds__container">
                        <div class="t-slds__items-wrapper t-slds_animated-none" data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false" >
                           <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                              <div class="t734__slds-wrapper t-slds__wrapper" style="">
                                 <div class="t-cover__carrier" data-content-cover-bg="tilda/bg.png" style="background-image: url('tilda/bg.png'); height:100vh;"></div>
                                 <div class="t-cover__filter" style="height:100vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div>
                                 <div class="t734__table" style="height:100vh;">
                                    <div class="t-cell t-valign_middle">
                                       <div class="t-container">
                                          <div class="t734__wrapper t-width t-width_8 t-margin_auto">
                                             <div class="t734__textwrapper t-align_center">
                                                <div class="t734__title t-title t-title_sm" field="li_title__1496797390759" style="">Новое пополнение коинов от 3 мая!</div>
                                                <div class="t734__descr t-descr t-descr_md" field="li_descr__1496797390759" style="">Успей купить, количество ограничено!</div>
                                                <div class="t734__button">
                                                   <a href="#store" target="" class="t-btn" style="color:#052555;background-color:#ffffff;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;" >
                                                      <table style="width:100%; height:100%;">
                                                         <tr>
                                                            <td>В магазин</td>
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
                        </div>
                     </div>
                     <div class="t-slds__arrow_container ">
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                           <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                              <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;">
                                 <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>Left</desc>
                                    <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" />
                                 </svg>
                              </div>
                           </div>
                        </div>
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                           <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                              <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;">
                                 <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>Right</desc>
                                    <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" />
                                 </svg>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="t-slds__bullet_wrapper">
                        <div class="t-slds__bullet t-slds__bullet_active" data-slide-bullet-for="1">
                           <div class="t-slds__bullet_body" style="width: 10px; height: 10px;background-color: transparent;border: 2px solid #ffffff;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <script type="text/javascript"> $(document).ready(function() { try { t734_init('102831082'); } catch (err) { } });</script>
            <style type="text/css"> #rec102831082 .t-slds__bullet_active .t-slds__bullet_body { background-color: #ffffff !important; } #rec102831082 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #ffffff !important; }</style>
            <style>#rec102831082 .t-btn[data-btneffects-first],
               #rec102831082 .t-btn[data-btneffects-second],
               #rec102831082 .t-submit[data-btneffects-first],
               #rec102831082 .t-submit[data-btneffects-second] {  position: relative; overflow: hidden; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);
               }
            </style>
            <script type="text/javascript">$(document).ready(function() {
               });
            </script>
         </div>
         <div id="rec102831084" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; " data-record-type="474" >
            <!-- T474 -->
            <div class="t474">
               <div class="t-container t-align_center">
                  <div class="t-col t-col_10 t-prefix_1">
                     <div class="t474__descr t-descr t-descr_xxxl t-margin_auto" field="descr" style="">Успей купить VK Коины по скидкам!</div>
                  </div>
               </div>
            </div>
         </div>
         <div id="rec102831085" class="r t-rec t-rec_pt_60 t-rec_pb_45" style="padding-top:60px;padding-bottom:45px; " data-animationappear="off" data-record-type="754" >
            <!-- t754 -->
            <div class="t754">
               <div class="t-container t754__container_mobile-grid">
                  <div class="t754__col t-col t-col_3 t-align_center t-item t754__col_mobile-grid js-product" data-product-lid="1500032524080">
                     <a href="#order" >
                        <div class="t754__content">
                           <div class="t754__imgwrapper " style="padding-bottom:103.84615384615%;">
                              <div class="t754__bgimg t-bgimg js-product-img" data-original="tilda/500.png" style="background-image:url('tilda/500.png');" bgimgfield="li_gallery__1500032524080:::0"></div>
                           </div>
                           <div class="t754__textwrapper">
                              <div class="t754__title t-name t-name_xs js-product-name" field="li_title__1500032524080" style="font-size:18px;font-weight:500;padding-top:15px;" >500 000 Коинов</div>
                              <div class="t754__price-wrapper">
                                 <div class="t754__price t754__price-item t-name t-name_xs" style="margin-right:3px;font-size:18px;font-weight:400;">
                                    <div class="t754__price-value js-product-price" field="li_price__1500032524080" >149.00</div>
                                    <div class="t754__price-currency">р.</div>
                                 </div>
                                 <div class="t754__price_old t754__price-item t-name t-name_xs" style="font-size:18px;font-weight:400;">
                                    <div class="t754__price-value" field="li_price_old__1500032524080" >199.00</div>
                                    <div class="t754__price-currency">р.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="t754__col t-col t-col_3 t-align_center t-item t754__col_mobile-grid js-product" data-product-lid="1497456130776">
                     <a href="#order" >
                        <div class="t754__content">
                           <div class="t754__imgwrapper " style="padding-bottom:103.84615384615%;">
                              <div class="t754__markwrapper">
                                 <div class="t754__mark" field="li_mark__1497456130776" style="color:#000000;background-color:#ffc117;" >SALE</div>
                              </div>
                              <div class="t754__bgimg t-bgimg js-product-img" data-original="tilda/1.png" style="background-image:url('tilda/1.png');" bgimgfield="li_gallery__1497456130776:::0"></div>
                           </div>
                           <div class="t754__textwrapper">
                              <div class="t754__title t-name t-name_xs js-product-name" field="li_title__1497456130776" style="font-size:18px;font-weight:500;padding-top:15px;" >1 000 000 Коинов<br /></div>
                              <div class="t754__price-wrapper">
                                 <div class="t754__price t754__price-item t-name t-name_xs" style="margin-right:3px;font-size:18px;font-weight:400;">
                                    <div class="t754__price-value js-product-price" field="li_price__1497456130776" >299.00</div>
                                    <div class="t754__price-currency">р.</div>
                                 </div>
                                 <div class="t754__price_old t754__price-item t-name t-name_xs" style="font-size:18px;font-weight:400;">
                                    <div class="t754__price-value" field="li_price_old__1497456130776" >399.00</div>
                                    <div class="t754__price-currency">р.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="t754__col t-col t-col_3 t-align_center t-item t754__col_mobile-grid js-product" data-product-lid="1498486301712">
                     <a href="#order" >
                        <div class="t754__content">
                           <div class="t754__imgwrapper " style="padding-bottom:103.84615384615%;">
                              <div class="t754__bgimg t-bgimg js-product-img" data-original="tilda/15.png" style="background-image:url('tilda/15.png');" bgimgfield="li_gallery__1498486301712:::0"></div>
                           </div>
                           <div class="t754__textwrapper">
                              <div class="t754__title t-name t-name_xs js-product-name" field="li_title__1498486301712" style="font-size:18px;font-weight:500;padding-top:15px;" >5 000 000 Коинов</div>
                              <div class="t754__price-wrapper">
                                 <div class="t754__price t754__price-item t-name t-name_xs" style="margin-right:3px;font-size:18px;font-weight:400;">
                                    <div class="t754__price-value js-product-price" field="li_price__1498486301712" >599.00</div>
                                    <div class="t754__price-currency">р.</div>
                                 </div>
                                 <div class="t754__price_old t754__price-item t-name t-name_xs" style="font-size:18px;font-weight:400;">
                                    <div class="t754__price-value" field="li_price_old__1498486301712" >799.00</div>
                                    <div class="t754__price-currency">р.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="t754__col t-col t-col_3 t-align_center t-item t754__col_mobile-grid js-product" data-product-lid="1498486363994">
                     <a href="#order" >
                        <div class="t754__content">
                           <div class="t754__imgwrapper " style="padding-bottom:103.84615384615%;">
                              <div class="t754__bgimg t-bgimg js-product-img" data-original="tilda/5.png" style="background-image:url('tilda/5.png');" bgimgfield="li_gallery__1498486363994:::0"></div>
                           </div>
                           <div class="t754__textwrapper">
                              <div class="t754__title t-name t-name_xs js-product-name" field="li_title__1498486363994" style="font-size:18px;font-weight:500;padding-top:15px;" >10 000 000 Коинов</div>
                              <div class="t754__price-wrapper">
                                 <div class="t754__price t754__price-item t-name t-name_xs" style="margin-right:3px;font-size:18px;font-weight:400;">
                                    <div class="t754__price-value js-product-price" field="li_price__1498486363994" >990.00</div>
                                    <div class="t754__price-currency">р.</div>
                                 </div>
                                 <div class="t754__price_old t754__price-item t-name t-name_xs" style="font-size:18px;font-weight:400;">
                                    <div class="t754__price-value" field="li_price_old__1498486363994" >1499</div>
                                    <div class="t754__price-currency">р.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <script type="text/javascript">$(document).ready(function(){ setTimeout(function(){ t754__init('102831085'); }, 500);
               });
            </script>
            <style type="text/css"> #rec102831085 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec102831085 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }</style>
         </div>
         <div id="rec102831086" class="r t-rec t-rec_pt_0 t-rec_pb_45" style="padding-top:0px;padding-bottom:45px; " data-record-type="473" >
            <!-- T473 -->
            <div class="t473">
               <div class="t-container t-align_center">
                  <div class="t-col t-col_8 t-prefix_2">
                     <div class="t473__title t-title t-name_xs t-margin_auto" field="title" style="text-transform:uppercase;">Почему мы?</div>
                     <div class="t473__descr t-descr t-descr_xxxl t-margin_auto" field="descr" style="">Мы работаем в сфере продаж уже более двух лет, а в продаже коинов - несколько месяцев. У нас множество положительных отзывов, соответственно, нам можно доверять!<br /></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="rec102831087" class="r t-rec t-rec_pt_90 t-rec_pb_150" style="padding-top:90px;padding-bottom:150px;background-color:#1f2f3d; " data-record-type="572" data-bg-color="#1f2f3d">
            <!-- t572 -->
            <div class="t572">
               <div class="t-section__container t-container">
                  <div class="t-col t-col_12">
                     <div class="t-section__topwrapper t-align_center">
                        <div class="t-section__title t-title t-title_xs" field="btitle">
                           <div style="color:#ffffff;" data-customstyle="yes">Возникли вопросы? Пишите нам!</div>
                        </div>
                        <div class="t-section__descr t-descr t-descr_xl t-margin_auto" field="bdescr">
                           <div style="color:#ffffff;" data-customstyle="yes">Мы всегда стремимся подружиться с нашими клиентами, звоните и пишите нам по любым вопросам.</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="t572__container t-container">
                  <div class="t-col t-col_6 t-prefix_3 t-align_center">
                     <div class="t572__text t-text t-text_sm" field="text" style="color:#ffffff;"><strong>E-mail:</strong> vkcoinshop@mail.ru<br /></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="rec102831088" class="r t-rec" style=" " data-animationappear="off" data-record-type="217" >
            <div class="t190" style="position:fixed; z-index:100000; bottom:70px; left:30px; min-height:30px;">
               <a href="javascript:t190_scrollToTop();">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
                     <g>
                        <path style="fill:#edb10c;" d="M24,3.125c11.511,0,20.875,9.364,20.875,20.875S35.511,44.875,24,44.875S3.125,35.511,3.125,24S12.489,3.125,24,3.125 M24,0.125C10.814,0.125,0.125,10.814,0.125,24S10.814,47.875,24,47.875S47.875,37.186,47.875,24S37.186,0.125,24,0.125L24,0.125z" />
                     </g>
                     <path style="fill:#edb10c;" d="M25.5,36.033c0,0.828-0.671,1.5-1.5,1.5s-1.5-0.672-1.5-1.5V16.87l-7.028,7.061c-0.293,0.294-0.678,0.442-1.063,0.442 c-0.383,0-0.766-0.146-1.058-0.437c-0.587-0.584-0.589-1.534-0.005-2.121l9.591-9.637c0.281-0.283,0.664-0.442,1.063-0.442 c0,0,0.001,0,0.001,0c0.399,0,0.783,0.16,1.063,0.443l9.562,9.637c0.584,0.588,0.58,1.538-0.008,2.122 c-0.589,0.583-1.538,0.58-2.121-0.008l-6.994-7.049L25.5,36.033z"/>
                  </svg>
               </a>
            </div>
            <script type="text/javascript"> $(document).ready(function(){ $('.t190').css("display","none"); $(window).bind('scroll', t_throttle(function(){ if ($(window).scrollTop() > $(window).height()) { if($('.t190').css('display')=="none"){$('.t190').css("display","block");} }else{ if($('.t190').css('display')=="block"){$('.t190').css("display","none");} } }, 200)); }); </script>
         </div>
         <div id="rec102831089" class="r t-rec" style=" " data-animationappear="off" data-record-type="706" >
            <!--tcart--><script type="text/javascript">$(document).ready(function(){ tcart__init('102831089');
               });
            </script>
            <div class="t706" data-opencart-onorder="yes" data-project-currency="р." data-project-currency-side="r" data-project-currency-sep="," >
               <div class="t706__carticon" style="right:25px;">
                  <div class="t706__carticon-text t-name t-name_xs">Click to order</div>
                  <div class="t706__carticon-wrapper">
                     <!--<div class="t706__carticon-imgwrap"><img class="t706__carticon-img" src="https://static.tildacdn.com/lib/linea/930cac0f-758b-b7ee-1eb0-b18fc6e10893/ecommerce_bag.svg"></div>--> 
                     <div class="t706__carticon-imgwrap" >
                        <svg class="t706__carticon-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                           <descr style="color:#bebebe;">Cart</descr>
                           <path fill="none" stroke-width="2" stroke-miterlimit="10" d="M44 18h10v45H10V18h10z"/>
                           <path fill="none" stroke-width="2" stroke-miterlimit="10" d="M22 24V11c0-5.523 4.477-10 10-10s10 4.477 10 10v13"/>
                        </svg>
                     </div>
                     <div class="t706__carticon-counter"></div>
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
                        <div class="t706__cartwin-heading t-name t-name_xl"></div>
                     </div>
                     <div class="t706__cartwin-products"></div>
                     <div class="t706__cartwin-bottom">
                        <div class="t706__cartwin-prodamount-wrap t-descr t-descr_sm"> <span class="t706__cartwin-prodamount-label">Total:&nbsp;</span><span class="t706__cartwin-prodamount"></span> </div>
                     </div>
                     <div class="t706__orderform ">
                        <form role="form" action='redir.php' method='POST' data-inputbox=".t-input-group" class="t-form js-form-proccess t-form_inputs-total_3" >
                           <!-- NO ONE SERVICES CONNECTED --> <input type="hidden" name="tildaspec-formname" tabindex="-1" value="Cart"> <input type="hidden" name="summaryam" id="summaryam"> 
                           <div class="t-form__inputsbox">
                              <div class="t-input-group t-input-group_nm" data-input-lid="1496239431201">
                                 <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1496239431201" style="">Ваше имя</div>
                                 <div class="t-input-block">
                                    <input type="text" name="Name" class="t-input js-tilda-rule " value="" placeholder="Иван Смирнов" data-tilda-req="1" data-tilda-rule="name" style="color:#000000; border:1px solid #000000; "> 
                                    <div class="t-input-error"></div>
                                 </div>
                              </div>
                              <div class="t-input-group t-input-group_em" data-input-lid="1496239459190">
                                 <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1496239459190" style="">Ваш Email</div>
                                 <div class="t-input-block">
                                    <input type="text" name="Email" class="t-input js-tilda-rule " value="" data-tilda-req="1" data-tilda-rule="email" style="color:#000000; border:1px solid #000000; "> 
                                    <div class="t-input-error"></div>
                                 </div>
                              </div>
                              <div class="t-input-group t-input-group_ur" data-input-lid="1496239478607">
                                 <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1496239478607" style="">Ваша страница VK</div>
                                 <div class="t-input-block">
                                    <input type="text" name="Ваша страница VK" class="t-input js-tilda-rule " value="" placeholder="https://vk.com/id1" data-tilda-req="1" data-tilda-rule="url" style="color:#000000; border:1px solid #000000; "> 
                                    <div class="t-input-error"></div>
                                 </div>
                              </div>
                              <div class="t-form__submit"> <button type="submit" class="t-submit" style="color:#ffffff;background-color:#000000;" >Оформить заказ</button> </div>
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
                        <style>#rec102831089 input::-webkit-input-placeholder {color:#000000; opacity: 0.5;}   #rec102831089 input::-moz-placeholder {color:#000000; opacity: 0.5;} #rec102831089 input:-moz-placeholder {color:#000000; opacity: 0.5;}  #rec102831089 input:-ms-input-placeholder {color:#000000; opacity: 0.5;}   #rec102831089 textarea::-webkit-input-placeholder {color:#000000; opacity: 0.5;} #rec102831089 textarea::-moz-placeholder {color:#000000; opacity: 0.5;} #rec102831089 textarea:-moz-placeholder {color:#000000; opacity: 0.5;}  #rec102831089 textarea:-ms-input-placeholder {color:#000000; opacity: 0.5;}</style>
                     </div>
                  </div>
               </div>
               <div class="t706__cartdata"> </div>
            </div>
            <!--/tcart-->
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
</html>