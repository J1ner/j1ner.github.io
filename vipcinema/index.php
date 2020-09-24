<?php
require_once 'config.php';
include "$domain/admin/engine/config.php";
$url = "$domain/admin/engine/database/getName.php?antikinovip=true";

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
<html lang="ru-RU" class="no-js no-svg">
<!-- Copied from http://test.host1732997.hostland.pro/ by Cyotek WebCopy 1.6.0.559, 18 января 2019 г., 7:56:39 -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php echo $sitename; ?> &#8212; Анти-кинотеатр</title>
<link rel='dns-prefetch' href='//fonts.googleapis.com'>
<link rel='dns-prefetch' href='//s.w.org'>
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/test.host1732997.hostland.pro\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.9"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.3' type='text/css' media='all'>
<link rel='stylesheet' id='owl-carousel-css' href='wp-content/plugins/vela-companion/assets/vendor/owl-carousel/css/owl.carousel.css?ver=4.9.9' type='text/css' media='all'>
<link rel='stylesheet' id='vela-companion-front-css' href='wp-content/plugins/vela-companion/assets/css/front.css?ver=4.9.9' type='text/css' media='all'>
<link rel='stylesheet' id='vela-companion-element-css' href='wp-content/plugins/vela-companion/assets/css/element.css?ver=4.9.9' type='text/css' media='all'>
<style id='vela-companion-element-inline-css' type='text/css'>
.cactus-e-img-frame:before {
			border-color: #61ce70;
		}
		.cactus-e-testimonial-item .cactus-e-person-avatar:before {
			border-color: #61ce70;
		}
		.cactus-e-testimonial-carousel .owl-dot.active {
			background-color: #61ce70;
		}
		.cactus-e-port-category {
			color: #00dfb8;
		}
		.cactus-e-port-filter li.active a {
			background-color: #61ce70;
		}
		.cactus-e-post-action a {
			color: #61ce70;
		}
		.cactus-e-post-mon {
			color: #61ce70;
		}
</style>
<link rel='stylesheet' id='cactus-companion-front-css' href='wp-content/plugins/vela-companion/assets/css/cactus-frontpage.css?ver=4.9.9' type='text/css' media='all'>
<link rel='stylesheet' id='cactus-google-fonts-css' href='//fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700%26subset%3Dlatin%2C&#038;ver=4.9.9' type='text/css' media=''>
<link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/cactus/assets/plugins/bootstrap/css/bootstrap.css?ver=4.9.9' type='text/css' media=''>
<link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all'>
<link rel='stylesheet' id='prettyphoto-css' href='wp-content/themes/cactus/assets/plugins/prettyphoto/css/prettyPhoto.min.css?ver=4.9.9' type='text/css' media=''>
<link rel='stylesheet' id='cactus-style-css' href='wp-content/themes/cactus/style.css?ver=4.9.9' type='text/css' media='all'>
<style id='cactus-style-inline-css' type='text/css'>
.site-name,
		.site-tagline {
		color: #333333 !important;
	}.site-tagline {
			display: none;
		}
h1,h2,h3,h4,h5,h6{font-family:Montserrat;}html, div, span, applet, object, iframe, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {font-family:Montserrat;}html, body, div{font-size:14px;}h1{font-size:36px;}h2{font-size:30px;}h3{font-size:24px;}h4{font-size:20px;}h5{font-size:18px;}h6{font-size:16px;}.cactus-section .cactus-section-title{font-size:40px;}.cactus-section .cactus-section-desc{font-size:14px;}.cactus-section h4{font-size:20px;}.cactus-section, .cactus-section p, .cactus-section div{font-size:14px;}.cactus-section-service {
			  background-color:#ffffff;
			  background-image:url();
		  }
.cactus-section-works {
			  background-color:#ffffff;
			  background-image:url();
		  }
.cactus-section-promo {
			  background-color:#f5f5f5;
			  background-image:url();
		  }
.cactus-section-team {
			  background-color:#f5f5f5;
			  background-image:url();
		  }
.cactus-section-counter {
			  background-color:#ffffff;
			  background-image:url(wp-content/themes/cactus/assets/images/bg-counter.jpeg);
		  }
.cactus-section-testimonial {
			  background-color:#f5f5f5;
			  background-image:url();
		  }
.cactus-section-clients {
			  background-color:#f5f5f5;
			  background-image:url();
		  }
.cactus-section-news {
			  background-color:#ffffff;
			  background-image:url();
		  }
.cactus-section-contact {
			  background-color:#ffffff;
			  background-image:url();
		  }
.cactus-section-shop {
			  background-color:#ffffff;
			  background-image:url();
		  }
a:hover,
				a:active {
					color: #bc2944;
				}
				
				header a:hover {
					color: #bc2944;
				}
				
				.site-nav  > div > ul > li.current > a {
					color: #bc2944;
				}
				
				.blog-list-wrap .entry-category a {
					color: #bc2944;
				}
				
				.entry-meta a:hover {
					color: #bc2944;
				}
				
				.form-control:focus,
				select:focus,
				input:focus,
				textarea:focus,
				input[type='text']:focus,
				input[type='password']:focus,
				input[type='datetime']:focus,
				input[type='datetime-local']:focus,
				input[type='date']:focus,
				input[type='month']:focus,
				input[type='time']:focus,
				input[type='week']:focus,
				input[type='number']:focus,
				input[type='email']:focus,
				input[type='url']:focus,
				input[type='search']:focus,
				input[type='tel']:focus,
				input[type='color']:focus,
				.uneditable-input:focus {
					border-color: #bc2944;
				}
				
				input[type='submit'] {
					background-color: #bc2944;
				}
				
				.entry-box.grid .img-box-caption .entry-category {
					position: absolute;
					top: -10px;
					left: 15px;
					padding: 0 5px;
					background-color: #bc2944;
				}
				
				.widget-title:before {
					color: #bc2944;
				}
				
				.btn-normal {
					background-color: #bc2944;
				}
				
				.woocommerce #respond input#submit.alt,
				.woocommerce a.button.alt,
				.woocommerce button.button.alt,
				.woocommerce input.button.alt {
					background-color: #bc2944;
				}
				
				.woocommerce #respond input#submit.alt:hover,
				.woocommerce a.button.alt:hover,
				.woocommerce button.button.alt:hover,
				.woocommerce input.button.alt:hover {
					background-color: #bc2944;
				}
				
				.woocommerce #respond input#submit.alt.disabled,
				.woocommerce #respond input#submit.alt.disabled:hover,
				.woocommerce #respond input#submit.alt:disabled,
				.woocommerce #respond input#submit.alt:disabled:hover,
				.woocommerce #respond input#submit.alt:disabled[disabled],
				.woocommerce #respond input#submit.alt:disabled[disabled]:hover,
				.woocommerce a.button.alt.disabled,
				.woocommerce a.button.alt.disabled:hover,
				.woocommerce a.button.alt:disabled,
				.woocommerce a.button.alt:disabled:hover,
				.woocommerce a.button.alt:disabled[disabled],
				.woocommerce a.button.alt:disabled[disabled]:hover,
				.woocommerce button.button.alt.disabled,
				.woocommerce button.button.alt.disabled:hover,
				.woocommerce button.button.alt:disabled,
				.woocommerce button.button.alt:disabled:hover,
				.woocommerce button.button.alt:disabled[disabled],
				.woocommerce button.button.alt:disabled[disabled]:hover,
				.woocommerce input.button.alt.disabled,
				.woocommerce input.button.alt.disabled:hover,
				.woocommerce input.button.alt:disabled,
				.woocommerce input.button.alt:disabled:hover,
				.woocommerce input.button.alt:disabled[disabled],
				.woocommerce input.button.alt:disabled[disabled]:hover {
					background-color: #bc2944;
				}
				
				.woocommerce nav.woocommerce-pagination ul li a:focus,
				.woocommerce nav.woocommerce-pagination ul li a:hover {
					color: #bc2944;
				}
				
				.cactus-header .cactus-main-nav > li > a:hover,
				.cactus-header .cactus-main-nav > li.active > a {
					color: #bc2944;
				}
				
				@media (min-width: 920px) {
					.frontpage .main-header:not(.fxd-header) .site-nav > div > ul > li > a:hover {
						color: #bc2944;
					}
				}
				
				.cactus-btn.primary,
				.cactus-btn.cactus-primary,
				.cactus-contact-form input[type='submit'],
				input[type='submit'].form-control {
					background-color: #bc2944;
				}
				
				.cactus-portfolio-filter li.active a {
					background-color: #bc2944;
				}
				
				.cactus-feature-caption h4,
				.cactus-gallery-item h4,
				.cactus-testimonial-name,
				.cactus-team-name,
				.cactus-section .entry-title a {
					color: #bc2944;
				}
				
				.cactus-pricing-item.cactus-featured .cactus-pricing-header {
					background-color: #bc2944;
				}
				
				.jetpack_subscription_widget input[type='submit'] {
					background-color: #bc2944;
				}
				.cactus-header .cactus-main-nav > li > a:hover, .cactus-header .cactus-main-nav > li.active > a {color:#bc2944;}
				.cactus-btn.primary, .cactus-btn.cactus-primary, .cactus-contact-form input[type='submit'], input[type='submit'].form-control {
   				 background-color: #bc2944;
					}
				
				
</style>
<link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=3.6.0' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=2.1.6' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.min.css?ver=2.1.6' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/elementor/css/global.css?ver=1534198538' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-post-33-css' href='wp-content/uploads/elementor/css/post-33.css?ver=1536501362' type='text/css' media='all'>
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COswald%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=cyrillic&#038;ver=4.9.9' type='text/css' media='all'>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='wp-content/plugins/vela-companion/assets/vendor/jquery.cookie.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var vela_params = {"ajaxurl":"http:\/\/test.host1732997.hostland.pro\/wp-admin\/admin-ajax.php","i18n":{"i1":"Please fill out all required fields.","i2":"Please enter your name.","i3":"Please enter valid email.","i4":"Please enter subject.","i5":"Message is required."},"plugins_url":"http:\/\/test.host1732997.hostland.pro\/wp-content\/plugins\/vela-companion"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/vela-companion/assets/js/front.js?ver=1.1.2'></script>
<link rel='https://api.w.org/' href='wp-json/index.htm'>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.xml?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.9.9">
<link rel="canonical" href="index.htm">
<link rel='shortlink' href='index.htm'>
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed?url=http%3A%2F%2Ftest.host1732997.hostland.pro%2F">
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed-1?url=http%3A%2F%2Ftest.host1732997.hostland.pro%2F&#038;format=xml">
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<link rel="icon" href="wp-content/uploads/2018/09/cropped-movie-alt2-48-32x32.png" sizes="32x32">
<link rel="icon" href="wp-content/uploads/2018/09/cropped-movie-alt2-48-192x192.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="wp-content/uploads/2018/09/cropped-movie-alt2-48-180x180.png">
<meta name="msapplication-TileImage" content="http://test.host1732997.hostland.pro/wp-content/uploads/2018/09/cropped-movie-alt2-48-270x270.png">
		<style type="text/css" id="wp-custom-css">
			.footer-info-area.style1.text-center {
    display: none;
}
.select_zal1 {
    cursor: pointer;
}
.select_zal2 {
    cursor: pointer;
}
.select_zal3 {
    cursor: pointer;
}
.select_zal4 {
    cursor: pointer;
}
.select_zal5 {
    cursor: pointer;
}
.select_zal6 {
    cursor: pointer;
}
.selects {
    background: rgb(99, 92, 112);
    padding: 8px;
   
}


.select_film1 {
    cursor: pointer;
}
.select_film2 {
    cursor: pointer;
}
.select_film3 {
    cursor: pointer;
}
.select_film4 {
    cursor: pointer;
}
.select_film5 {
    cursor: pointer;
}
.select_film6 {
    cursor: pointer;
}
.select_film7 {
    cursor: pointer;
}
.select_film8 {
    cursor: pointer;
}
.select_film9 {
    cursor: pointer;
}
.select_film10 {
    cursor: pointer;
}
.select_film11 {
    cursor: pointer;
}
.select_film12 {
    cursor: pointer;
}
.select_film13 {
    cursor: pointer;
}
.select_film14 {
    cursor: pointer;
}
.select_film15 {
    cursor: pointer;
}
.select_film16 {
    cursor: pointer;
}
.select_film17 {
    cursor: pointer;
}
.select_film18 {
    cursor: pointer;
}
.select_film19 {
    cursor: pointer;
}
.selects-film {
    background: rgb(99, 92, 112);
    padding: 8px;
   
}

.elementor-widget-image-box .elementor-image-box-content .elementor-image-box-title {
    color: #6ec1e4;
    font-weight: 600;
    font-family: "Oswald", Sans-serif!important;
}
		</style>
	

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.min.css">


</head>
<body class="home page-template page-template-elementor_header_footer page page-id-33 wp-custom-logo blog light elementor-default elementor-template-full-width elementor-page elementor-page-33">

  <div class="wrapper">
        <!--Header-->
                <header class="header-wrap">
<div class="cactus-header cactus-inline-header right">
	            <div class="cactus-main-header">
             <div class="cactus-logo">
			  <a href="#"><img src="wp-content/uploads/2018/08/movie-alt2-48.png"></a>
            </div>
                
               

  <nav class="cactus-navigation cactus-wp-menu" role="navigation">
  <ul id="top-menu" class=" cactus-main-nav cactus-nav-main"><li id="menu-item-364" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-364"><a href="#"><span>Главная</span></a></li>
<li id="menu-item-365" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-365"><a href="/otzivy"><span>Отзывы</span></a></li>
<li id="menu-item-257" class="color-white menu-item menu-item-type-custom menu-item-object-custom menu-item-257"><a href="/menu"><span>Еда и напитки</span></a></li>
<li id="menu-item-335" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-335"><a href="/contact"><span>Контакты</span></a></li>
<li id="menu-item-344" class="bookme menu-item menu-item-type-custom menu-item-object-custom menu-item-344"><a href="booking/index.htm"><span>Забронировать</span></a></li>
</ul>    <div class="cactus-f-microwidgets"><div class="cactus-microwidget cactus-search" style="z-index:9999;">
                        <div class="cactus-search-label"></div>
                        <div class="cactus-search-wrap right-overflow" style="display:none;">
                            <form action="" class="search-form">
                                <div>
                                        <span class="screen-reader-text">Искать:</span>
                                        <input type="text" class="search-field" placeholder="Search …" value="" name="s">
                                        <input type="submit" class="search-submit" value="Search">
                                </div>                                    
                            </form>
                        </div>
                    </div></div>
</nav>

            </div>
              <div class="cactus-mobile-main-header">
                <div class="cactus-logo">
                     <a href="index.htm"><img src="wp-content/uploads/2018/08/movie-alt2-48.png"></a>
                </div>

                <div class="cactus-menu-toggle">
                    <div class="cactus-toggle-icon">
                        <span class="cactus-line"></span>
                    </div>
                </div>
            </div>
<div class="cactus-mobile-drawer-header" style="display: none;">
<ul id="top-menu" class="cactus-mobile-main-nav"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-364"><a href="index.htm"><span>Главная</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-365"><a href="/otzivy"><span>Отзывы</span></a></li>
<li class="color-white menu-item menu-item-type-custom menu-item-object-custom menu-item-257"><a href="/menu"><span>Еда и напитки</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-335"><a href="/contact"><span>Контакты</span></a></li>
<li class="bookme menu-item menu-item-type-custom menu-item-object-custom menu-item-344"><a href="booking/index.htm"><span>Забронировать</span></a></li>
</ul>             
</div>        </div>
                 <div class="cactus-fixed-header-wrap" style="display: none;">
            <div class="cactus-header cactus-inline-header shadow right">
                <div class="cactus-main-header">
                     <div class="cactus-logo">
					  <a href="index.htm"><img src="wp-content/uploads/2018/08/movie-alt2-48.png"></a>
                      </div>
                
                    

  <nav class="cactus-navigation cactus-wp-menu" role="navigation">
  <ul id="top-menu" class=" cactus-main-nav cactus-nav-main"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-364"><a href="index.htm"><span>Главная</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-365"><a href="/otzivy"><span>Отзывы</span></a></li>
<li class="color-white menu-item menu-item-type-custom menu-item-object-custom menu-item-257"><a href="/menu"><span>Еда и напитки</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-335"><a href="/contact"><span>Контакты</span></a></li>
<li class="bookme menu-item menu-item-type-custom menu-item-object-custom menu-item-344"><a href="booking/index.htm"><span>Забронировать</span></a></li>
</ul>    <div class="cactus-f-microwidgets"><div class="cactus-microwidget cactus-search" style="z-index:9999;">
                        <div class="cactus-search-label"></div>
                        <div class="cactus-search-wrap right-overflow" style="display:none;">
                            <form action="" class="search-form">
                                <div>
                                        <span class="screen-reader-text">Искать:</span>
                                        <input type="text" class="search-field" placeholder="Search …" value="" name="s">
                                        <input type="submit" class="search-submit" value="Search">
                                </div>                                    
                            </form>
                        </div>
                    </div></div>
</nav>

                   
                </div>
                  <div class="cactus-mobile-main-header">
                <div class="cactus-logo">
                     <a href="index.htm"><img src="wp-content/uploads/2018/08/movie-alt2-48.png"></a>
                </div>

                <div class="cactus-menu-toggle">
                    <div class="cactus-toggle-icon">
                        <span class="cactus-line"></span>
                    </div>
                </div>
            </div>
<div class="cactus-mobile-drawer-header" style="display: none;">
<ul id="top-menu" class="cactus-mobile-main-nav"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-364"><a href="index.htm"><span>Главная</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-365"><a href="/otzivy"><span>Отзывы</span></a></li>
<li class="color-white menu-item menu-item-type-custom menu-item-object-custom menu-item-257"><a href="/menu"><span>Еда и напитки</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-335"><a href="/contact"><span>Контакты</span></a></li>
<li class="bookme menu-item menu-item-type-custom menu-item-object-custom menu-item-344"><a href="booking/index.htm"><span>Забронировать</span></a></li>
</ul>             
</div>            </div>
        </div>
        
      </header>		<div class="elementor elementor-33">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section data-id="5bb8dbf4" class="elementor-element elementor-element-5bb8dbf4 elementor-section-height-full elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/www.youtube.com\/watch?v=W3RJVYrXz2Y&quot;,&quot;background_video_start&quot;:7}" data-element_type="section">
								<div class="elementor-background-video-container elementor-hidden-phone">
													<div class="elementor-background-video-embed"></div>
											</div>
								<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="2bc8dd94" class="elementor-element elementor-element-2bc8dd94 elementor-column elementor-col-50 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="42725091" class="elementor-element elementor-element-42725091 elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Это не просто кинотеатр</h2>		</div>
				</div>
				<div data-id="613de3f6" class="elementor-element elementor-element-613de3f6 elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Анти-кинотеатр </h2>		</div>
				</div>
				<div data-id="2eb12c8a" class="elementor-element elementor-element-2eb12c8a elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p><strong>Уютные кинозалы от 2х до 6 человек, новинки кино, напитки и еда</strong></p></div>
				</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="5be90804" class="elementor-element elementor-element-5be90804 elementor-column elementor-col-50 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="3366dcea" class="elementor-element elementor-element-3366dcea elementor-widget elementor-widget-image" data-element_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
										<img width="300" height="300" src="wp-content/uploads/2018/08/cinema-300x300.png" class="attachment-medium size-medium" alt="" srcset="wp-content/uploads/2018/08/cinema-300x300.png 300w, wp-content/uploads/2018/08/cinema-150x150.png 150w, wp-content/uploads/2018/08/cinema.png 512w" sizes="(max-width: 300px) 100vw, 300px">											</div>
				</div>
				</div>
				<div data-id="7fe39e9" class="elementor-element elementor-element-7fe39e9 elementor-align-center elementor-widget elementor-widget-button" data-element_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="booking/index.htm" class="elementor-button-link elementor-button elementor-size-lg" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Забронировать</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="73a77978" class="elementor-element elementor-element-73a77978 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="e7c125" class="elementor-element elementor-element-e7c125 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="3f849e6" class="elementor-element elementor-element-3f849e6 elementor-widget elementor-widget-image" data-element_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
										<img width="480" height="360" src="wp-content/uploads/2018/08/main-2-480x360.jpeg" class="attachment-cactus-works size-cactus-works" alt="" srcset="wp-content/uploads/2018/08/main-2-480x360.jpeg 480w, wp-content/uploads/2018/08/main-2-960x720.jpeg 960w" sizes="(max-width: 480px) 100vw, 480px">											</div>
				</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="5471b7a6" class="elementor-element elementor-element-5471b7a6 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="167662a4" class="elementor-element elementor-element-167662a4 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-element_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="64" height="64" src="wp-content/uploads/2018/09/SMOOTHIE-64.png" class="attachment-full size-full" alt=""></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Еда и напитки</h3><p class="elementor-image-box-description">В наших залах можно есть и употреблять как обычные так и спиртные напитки.
<br>
<br></p></div></div>		</div>
				</div>
				<div data-id="7b0e97a6" class="elementor-element elementor-element-7b0e97a6 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-element_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="64" height="64" src="wp-content/uploads/2018/09/clock-64.png" class="attachment-full size-full" alt=""></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Аренда зала на любое время</h3><p class="elementor-image-box-description">Мы предоставляем аренду зала на любое нужное для вас время, от 1 до 24 часов.</p></div></div>		</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="2614d7f6" class="elementor-element elementor-element-2614d7f6 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="42fd3693" class="elementor-element elementor-element-42fd3693 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-element_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="64" height="64" src="wp-content/uploads/2018/09/7_Bonus_gift_present-64.png" class="attachment-full size-full" alt=""></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Бонусы и подарки</h3><p class="elementor-image-box-description">Мы ценим и любим своих клиентов, по этому регулярно предоставляем различные бонусы.
<br>
<br></p></div></div>		</div>
				</div>
				<div data-id="1cc453cd" class="elementor-element elementor-element-1cc453cd elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-element_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="64" height="64" src="wp-content/uploads/2018/09/edit-note-pencil-document-write-64.png" class="attachment-full size-full" alt=""></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Онлайн бронирование</h3><p class="elementor-image-box-description">Вы можете забронировать зал в любое удобное для вас время, прямо на нашем сайте.</p></div></div>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="79f52518" class="elementor-element elementor-element-79f52518 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/www.youtube.com\/watch?v=pkQgnbAn_7M&quot;,&quot;background_video_start&quot;:6,&quot;background_video_end&quot;:50}" data-element_type="section">
								<div class="elementor-background-video-container elementor-hidden-phone">
													<div class="elementor-background-video-embed"></div>
											</div>
								<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="747819ea" class="elementor-element elementor-element-747819ea elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="251f103e" class="elementor-element elementor-element-251f103e elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Как забронировать билеты</h2>		</div>
				</div>
				<div data-id="79958e29" class="elementor-element elementor-element-79958e29 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>Забронировать билеты просто, как 1..2..3</p></div>
				</div>
				</div>
				<section data-id="28bd15ba" class="elementor-element elementor-element-28bd15ba elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="54b02f6" class="elementor-element elementor-element-54b02f6 elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="1c3d7d8c" class="elementor-element elementor-element-1c3d7d8c elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
					<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<i class="fa fa-check" aria-hidden="true"></i>
				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span>Шаг 1</span>
				</h3>
				<p class="elementor-icon-box-description">Выбираете желаемый фильм или зал и нажимаете кнопку "Забронировать" </p>
			</div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="7e099fb0" class="elementor-element elementor-element-7e099fb0 elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="46d1d3cf" class="elementor-element elementor-element-46d1d3cf elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
					<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<i class="fa fa-dollar" aria-hidden="true"></i>
				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span>Шаг 2</span>
				</h3>
				<p class="elementor-icon-box-description">Пройдите мгновенное онлайн-бронирование на выбранное вами время, после чего введите простые шаги с информацией по заказу и оплатите бронь.</p>
			</div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="3d63706e" class="elementor-element elementor-element-3d63706e elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="3140a7a3" class="elementor-element elementor-element-3140a7a3 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
					<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<i class="fa fa-ticket" aria-hidden="true"></i>
				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span>Шаг 3</span>
				</h3>
				<p class="elementor-icon-box-description">Получите уникальный код бронирования на почту, так же при желании вы можете загрузить электронный билет в зал.</p>
			</div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="59bfdb9f" class="elementor-element elementor-element-59bfdb9f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="3dd0be0c" class="elementor-element elementor-element-3dd0be0c elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="29959732" class="elementor-element elementor-element-29959732 elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">УЖЕ ХОТИТЕ ОКУНУТЬСЯ В УЮТНЫЙ ПРОСМОТР ФИЛЬМА?</h2>		</div>
				</div>
				<div data-id="564af1c3" class="elementor-element elementor-element-564af1c3 elementor-align-center elementor-widget elementor-widget-button" data-element_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="booking/index.htm" class="elementor-button-link elementor-button elementor-size-lg" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Забронировать</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="ca5151c" class="elementor-element elementor-element-ca5151c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="612be21" class="elementor-element elementor-element-612be21 elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="6e40280" class="elementor-element elementor-element-6e40280 elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h1 class="elementor-heading-title elementor-size-default">НАШИ ЗАЛЫ</h1>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="f9faa85" class="elementor-element elementor-element-f9faa85 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="a78ae41" class="elementor-element elementor-element-a78ae41 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="77c382f" class="elementor-element elementor-element-77c382f elementor-widget elementor-widget-image" data-element_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
											<a href="wp-content/uploads/2018/08/rosha.png" data-elementor-open-lightbox="yes">
							<img width="960" height="720" src="wp-content/uploads/2018/08/rosha-960x720.png" class="attachment-cactus-featured-image size-cactus-featured-image" alt="" srcset="wp-content/uploads/2018/08/rosha-960x720.png 960w, wp-content/uploads/2018/08/rosha-480x360.png 480w" sizes="(max-width: 960px) 100vw, 960px">								</a>
											</div>
				</div>
				</div>
				<div data-id="808dc05" class="elementor-element elementor-element-808dc05 elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Зал «Филин»</h2>		</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="212eb77" class="elementor-element elementor-element-212eb77 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="6a99dc1" class="elementor-element elementor-element-6a99dc1 elementor-widget elementor-widget-image" data-element_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
											<a href="wp-content/uploads/2018/08/rosa.png" data-elementor-open-lightbox="yes">
							<img width="960" height="720" src="wp-content/uploads/2018/08/rosa-960x720.png" class="attachment-cactus-featured-image size-cactus-featured-image" alt="" srcset="wp-content/uploads/2018/08/rosa-960x720.png 960w, wp-content/uploads/2018/08/rosa-480x360.png 480w" sizes="(max-width: 960px) 100vw, 960px">								</a>
											</div>
				</div>
				</div>
				<div data-id="df5c04f" class="elementor-element elementor-element-df5c04f elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Зал «Роща»</h2>		</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="2f47a38" class="elementor-element elementor-element-2f47a38 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="b6d9e1d" class="elementor-element elementor-element-b6d9e1d elementor-widget elementor-widget-image" data-element_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
											<a href="wp-content/uploads/2018/08/olimp.png" data-elementor-open-lightbox="yes">
							<img width="960" height="720" src="wp-content/uploads/2018/08/olimp-960x720.png" class="attachment-cactus-featured-image size-cactus-featured-image" alt="" srcset="wp-content/uploads/2018/08/olimp-960x720.png 960w, wp-content/uploads/2018/08/olimp-480x360.png 480w" sizes="(max-width: 960px) 100vw, 960px">								</a>
											</div>
				</div>
				</div>
				<div data-id="053eff9" class="elementor-element elementor-element-053eff9 elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Зал «Олимп»</h2>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="31dbfa9" class="elementor-element elementor-element-31dbfa9 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="23801e9" class="elementor-element elementor-element-23801e9 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="11d68df" class="elementor-element elementor-element-11d68df elementor-widget elementor-widget-image" data-element_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
											<a href="wp-content/uploads/2018/08/lobovnik.png" data-elementor-open-lightbox="yes">
							<img width="960" height="720" src="wp-content/uploads/2018/08/lobovnik-960x720.png" class="attachment-cactus-featured-image size-cactus-featured-image" alt="" srcset="wp-content/uploads/2018/08/lobovnik-960x720.png 960w, wp-content/uploads/2018/08/lobovnik-480x360.png 480w" sizes="(max-width: 960px) 100vw, 960px">								</a>
											</div>
				</div>
				</div>
				<div data-id="e449df6" class="elementor-element elementor-element-e449df6 elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Зал «Любовник»</h2>		</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="1ce9b6d" class="elementor-element elementor-element-1ce9b6d elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="aa51bb5" class="elementor-element elementor-element-aa51bb5 elementor-widget elementor-widget-image" data-element_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
											<a href="wp-content/uploads/2018/08/princ.png" data-elementor-open-lightbox="yes">
							<img width="480" height="360" src="wp-content/uploads/2018/08/princ-480x360.png" class="attachment-cactus-works size-cactus-works" alt="" srcset="wp-content/uploads/2018/08/princ-480x360.png 480w, wp-content/uploads/2018/08/princ-960x720.png 960w" sizes="(max-width: 480px) 100vw, 480px">								</a>
											</div>
				</div>
				</div>
				<div data-id="c01087d" class="elementor-element elementor-element-c01087d elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Зал «Тёмный принц»</h2>		</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="1f05b04" class="elementor-element elementor-element-1f05b04 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="f5e10e9" class="elementor-element elementor-element-f5e10e9 elementor-widget elementor-widget-image" data-element_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
											<a href="wp-content/uploads/2018/08/pandora.png" data-elementor-open-lightbox="yes">
							<img width="960" height="720" src="wp-content/uploads/2018/08/pandora-960x720.png" class="attachment-cactus-featured-image size-cactus-featured-image" alt="" srcset="wp-content/uploads/2018/08/pandora-960x720.png 960w, wp-content/uploads/2018/08/pandora-480x360.png 480w" sizes="(max-width: 960px) 100vw, 960px">								</a>
											</div>
				</div>
				</div>
				<div data-id="05e0e9b" class="elementor-element elementor-element-05e0e9b elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Зал «Сердце пандоры»</h2>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="a930c04" class="elementor-element elementor-element-a930c04 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="eb6c67a" class="elementor-element elementor-element-eb6c67a elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="18872cc" class="elementor-element elementor-element-18872cc elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Наши предложения</h2>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="8531443" class="elementor-element elementor-element-8531443 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/www.youtube.com\/watch?v=FyCsOsi4lys&quot;,&quot;background_video_end&quot;:50}" data-element_type="section">
								<div class="elementor-background-video-container elementor-hidden-phone">
													<div class="elementor-background-video-embed"></div>
											</div>
							<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="f7dc276" class="elementor-element elementor-element-f7dc276 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="8fc19be" class="elementor-element elementor-element-8fc19be elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-element_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="960" height="720" src="wp-content/uploads/2018/08/raznoe-muzhchina-zhenschina-bokal-svidan-583626-960x720.jpeg" class="attachment-cactus-featured-image size-cactus-featured-image" alt="" srcset="wp-content/uploads/2018/08/raznoe-muzhchina-zhenschina-bokal-svidan-583626-960x720.jpeg 960w, wp-content/uploads/2018/08/raznoe-muzhchina-zhenschina-bokal-svidan-583626-480x360.jpeg 480w" sizes="(max-width: 960px) 100vw, 960px"></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Романтическое свидание - 5500 руб</h3><p class="elementor-image-box-description">3 часа
<br>
Для 2х человек
<br>
Оригинальное украшение зала
<br>
Элитное вино или шампанское включены
<br>
Большая пицца или сет роллов из меню
<br>
Доступны любые фильмы из афиши
<br>
Кальян на выбор
<br>
Бесплатный Wi-Fi
<br>
<br>
<br>
<br>
<a href="booking/index.htm" class="elementor-button-link elementor-button elementor-size-sm" style="color:#fff;background-color: #ff3233;
    border-radius: 69px 69px 69px 69px;" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Заказать</span>
		</span>
					</a>
<br>
<br></p></div></div>		</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="0c863ad" class="elementor-element elementor-element-0c863ad elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="5401423" class="elementor-element elementor-element-5401423 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-element_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="960" height="720" src="wp-content/uploads/2018/08/korporativ-960x720.jpeg" class="attachment-cactus-featured-image size-cactus-featured-image" alt="" srcset="wp-content/uploads/2018/08/korporativ-960x720.jpeg 960w, wp-content/uploads/2018/08/korporativ-300x225.jpeg 300w, wp-content/uploads/2018/08/korporativ-768x576.jpeg 768w, wp-content/uploads/2018/08/korporativ-1024x768.jpeg 1024w, wp-content/uploads/2018/08/korporativ-480x360.jpeg 480w, wp-content/uploads/2018/08/korporativ.jpeg 1280w" sizes="(max-width: 960px) 100vw, 960px"></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">VIP Встреча  - 8000 руб </h3><p class="elementor-image-box-description">4 часа
<br>
До 6 человек
<br>
Оригинальное украшение зала 
<br>
Доступны любые фильмы из афишы
<br>
Виски, коньяк или шампанское из меню
<br>
Кальян на выбор
<br>
Любая еда из меню
<br>
PlayStation 4 с 20 играми
<br>
Бесплатный Wi-Fi 
<br>
<br>
<br>
<br>

<a href="booking/index.htm" class="elementor-button-link elementor-button elementor-size-sm" style="color:#fff;background-color: #ff3233;
    border-radius: 69px 69px 69px 69px;" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Заказать</span>
		</span>
					</a>


<br>
<br></p></div></div>		</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="b5e172e" class="elementor-element elementor-element-b5e172e elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="24f0e38" class="elementor-element elementor-element-24f0e38 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-element_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="480" height="360" src="wp-content/uploads/2018/08/8bf0687148983bdb5c6ef412cd26f439-480x360.jpeg" class="attachment-cactus-widget-post-image size-cactus-widget-post-image" alt="" srcset="wp-content/uploads/2018/08/8bf0687148983bdb5c6ef412cd26f439-480x360.jpeg 480w, wp-content/uploads/2018/08/8bf0687148983bdb5c6ef412cd26f439-960x720.jpeg 960w" sizes="(max-width: 480px) 100vw, 480px"></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Ночь Кино - 11 000 руб</h3><p class="elementor-image-box-description">8 часов
<br>
До 10 человек
<br>
Особое украшение зала 
<br>
Доступны любые  4 фильма из афишы
<br>
Любой алкоголь из меню
<br>
Кальян на выбор
<br>
Кубинкие сигары
<br>
Любая еда из меню
<br>
Бесплатный Wi-Fi 
<br>
Бонус от заведения
<br>
Бесплатное такси домой
<br>
<br>
<a href="booking/index.htm" class="elementor-button-link elementor-button elementor-size-sm" style="color:#fff;background-color: #ff3233;
    border-radius: 69px 69px 69px 69px;" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Заказать</span>
		</span>
					</a>
<br>
<br></p></div></div>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="0eab01d" class="elementor-element elementor-element-0eab01d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="7504f94" class="elementor-element elementor-element-7504f94 elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="51c530e" class="elementor-element elementor-element-51c530e elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">ПОПУЛЯРНЫЕ ВОПРОСЫ</h2>		</div>
				</div>
				<div data-id="b96e935" class="elementor-element elementor-element-b96e935 elementor-widget elementor-widget-toggle" data-element_type="toggle.default">
				<div class="elementor-widget-container">
					<div class="elementor-toggle" role="tablist">
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1941" class="elementor-tab-title" tabindex="1941" data-tab="1" role="tab" aria-controls="elementor-tab-content-1941">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												Почему такой способ оплаты?					</div>
					<div id="elementor-tab-content-1941" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1941"><p>Оплата происходит только через Платёжный сервис Free Kassa после поступления денег нам их переводят на Р/С. Это удобно и быстро.</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1942" class="elementor-tab-title" tabindex="1942" data-tab="2" role="tab" aria-controls="elementor-tab-content-1942">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												Можно ли оформить возврат средств?					</div>
					<div id="elementor-tab-content-1942" class="elementor-tab-content elementor-clearfix" data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-1942"><p>Оформить возврат средств можно за час до сеанса. Для возврата средств вам понадобится карта с которой вы платили и у вас должна быть на карте ровно та сумма которую вы отправили нам.</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1943" class="elementor-tab-title" tabindex="1943" data-tab="3" role="tab" aria-controls="elementor-tab-content-1943">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												 Способы оплаты					</div>
					<div id="elementor-tab-content-1943" class="elementor-tab-content elementor-clearfix" data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-1943"><p>Мы принимаем все платежи через Free Kassa. У Free Kassa имеются самые современные способы оплаты начиная с QIWI и заканчивая Банковской картой и СМС-платежами</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1944" class="elementor-tab-title" tabindex="1944" data-tab="4" role="tab" aria-controls="elementor-tab-content-1944">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												Почему я могу забронировать места только онлайн и заплатить за них только онлайн?					</div>
					<div id="elementor-tab-content-1944" class="elementor-tab-content elementor-clearfix" data-tab="4" role="tabpanel" aria-labelledby="elementor-tab-title-1944"><p>Оформить места заранее нужно за 2-3 часа до прихода на сеанс это связано с тем, что очень часто мест просто не хватает и все залы заняты. Оплатить и заказать места вы можете и на месте, но с вероятностью 90% свободных мест не будет.</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1945" class="elementor-tab-title" tabindex="1945" data-tab="5" role="tab" aria-controls="elementor-tab-content-1945">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												Я не пользуюсь безналом, как быть?					</div>
					<div id="elementor-tab-content-1945" class="elementor-tab-content elementor-clearfix" data-tab="5" role="tabpanel" aria-labelledby="elementor-tab-title-1945"><p>Наш кинотеатр только для современных людей. В 21 веке все пользуются безналом, в том числе и мы. Если у вас нет карты вы можете сделать себе QIWI-кошелёк и пополнить его через терминал, а после оформить у нас места. Ну или попробуйте заказать места на месте, но мест скорей всего не будет.</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1946" class="elementor-tab-title" tabindex="1946" data-tab="6" role="tab" aria-controls="elementor-tab-content-1946">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												Я оплатил, что дальше?					</div>
					<div id="elementor-tab-content-1946" class="elementor-tab-content elementor-clearfix" data-tab="6" role="tabpanel" aria-labelledby="elementor-tab-title-1946"><p>После оплаты в течение 1 часа вам на номер придёт СМС с спец. кодом который вы сообщите при входе в зал. Если же смс&#8217;ка не пришла обратитесь в поддержку на сайте.</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1947" class="elementor-tab-title" tabindex="1947" data-tab="7" role="tab" aria-controls="elementor-tab-content-1947">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												Как лучше забронировать места?					</div>
					<div id="elementor-tab-content-1947" class="elementor-tab-content elementor-clearfix" data-tab="7" role="tabpanel" aria-labelledby="elementor-tab-title-1947"><p>Сайт корректней всего отображается на компьютере. Проще и быстрее всё сделать через компьютер.</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1948" class="elementor-tab-title" tabindex="1948" data-tab="8" role="tab" aria-controls="elementor-tab-content-1948">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												 Меня не устраивает, что места надо бронировать онлайн.					</div>
					<div id="elementor-tab-content-1948" class="elementor-tab-content elementor-clearfix" data-tab="8" role="tabpanel" aria-labelledby="elementor-tab-title-1948"><p>Значит откажитесь от похода в наш кинотеатр. Всё просто.</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1949" class="elementor-tab-title" tabindex="1949" data-tab="9" role="tab" aria-controls="elementor-tab-content-1949">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												Почему я не могу дозвониться до вас?					</div>
					<div id="elementor-tab-content-1949" class="elementor-tab-content elementor-clearfix" data-tab="9" role="tabpanel" aria-labelledby="elementor-tab-title-1949"><p>У нас 1 номер телефона на все адреса наших кинотеатров и часто дозвониться не возможно, но получить консультацию можно и на сайте в поддержке.</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-19410" class="elementor-tab-title" tabindex="19410" data-tab="10" role="tab" aria-controls="elementor-tab-content-19410">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												Можно в ваших залах заниматься сексом или курить?					</div>
					<div id="elementor-tab-content-19410" class="elementor-tab-content elementor-clearfix" data-tab="10" role="tabpanel" aria-labelledby="elementor-tab-title-19410"><p>Заниматься можно чем угодно за исключением порчи имущества.</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-19411" class="elementor-tab-title" tabindex="19411" data-tab="11" role="tab" aria-controls="elementor-tab-content-19411">
												<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
							<i class="elementor-toggle-icon-closed fa fa-caret-right"></i>
							<i class="elementor-toggle-icon-opened fa fa-caret-up"></i>
						</span>
												Где я могу посмотреть отзывы о нашей организации?					</div>
					<div id="elementor-tab-content-19411" class="elementor-tab-content elementor-clearfix" data-tab="11" role="tabpanel" aria-labelledby="elementor-tab-title-19411"><p>У нас есть страница &#171;Отзывов&#187; там размещены отзывы наших посетителей. Вы тоже можете оставить отзыв после посещения нашего кинотеатра. Мы при вас разместим его на сайте.</p></div>
				</div>
					</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="17b0e943" class="elementor-element elementor-element-17b0e943 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="24512e7b" class="elementor-element elementor-element-24512e7b elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="35e0e850" class="elementor-element elementor-element-35e0e850 elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><br>БОЛЬШАЯ КОЛЛЕКЦИЯ ФИЛЬМОВ</h2>		</div>
				</div>
				<div data-id="6a0875d4" class="elementor-element elementor-element-6a0875d4 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"></div>
				</div>
				</div>
				<section data-id="582a39ea" class="elementor-element elementor-element-582a39ea elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="53a14fbe" class="elementor-element elementor-element-53a14fbe elementor-column elementor-col-50 elementor-inner-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="3579c3e" class="elementor-element elementor-element-3579c3e elementor-widget elementor-widget-image" data-element_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
										<img width="850" height="425" src="wp-content/uploads/2018/08/DUl5o_eVAAAVas7-1024x512.jpeg" class="attachment-large size-large" alt="" srcset="wp-content/uploads/2018/08/DUl5o_eVAAAVas7-1024x512.jpeg 1024w, wp-content/uploads/2018/08/DUl5o_eVAAAVas7-300x150.jpeg 300w, wp-content/uploads/2018/08/DUl5o_eVAAAVas7-768x384.jpeg 768w, wp-content/uploads/2018/08/DUl5o_eVAAAVas7.jpeg 1200w" sizes="(max-width: 850px) 100vw, 850px">											</div>
				</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="9db615a" class="elementor-element elementor-element-9db615a elementor-column elementor-col-50 elementor-inner-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="1b1453ad" class="elementor-element elementor-element-1b1453ad elementor-widget elementor-widget-testimonial" data-element_type="testimonial.default">
				<div class="elementor-widget-container">
					<div class="elementor-testimonial-wrapper elementor-testimonial-text-align-left">
							<div class="elementor-testimonial-content">В нашем анти-кинотеатре имеется большая коллекция фильмов, от ужасов и комедий до классики и ретро-фильмов, в том числе последние новинки кино.</div>
			
					</div>
			</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="14c0439" class="elementor-element elementor-element-14c0439 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="e59e49b" class="elementor-element elementor-element-e59e49b elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="04c3db6" class="elementor-element elementor-element-04c3db6 elementor-widget elementor-widget-icon-list" data-element_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
										<span class="elementor-icon-list-text">г. Москва, Проспект Мира, д. 211</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
										<span class="elementor-icon-list-text">г. Санкт-Петербург,  ул. Полюстровский пр., д. 84А</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
										<span class="elementor-icon-list-text">г. Волгоград, ул. Рабоче-Крестьянская, 9 Б</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
										<span class="elementor-icon-list-text">г. Ростов-на-Дону, пр. Космонавтов, 19A</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
										<span class="elementor-icon-list-text">г. Воронеж, ул. Бульвар Победы, 23Б</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
										<span class="elementor-icon-list-text">г. Екатеринбург, пр. Ленина, 25</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
										<span class="elementor-icon-list-text">г. Нижний Новгород, пл. Революции, 9</span>
									</li>
						</ul>
				</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="ab86e37" class="elementor-element elementor-element-ab86e37 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="e155648" class="elementor-element elementor-element-e155648 elementor-widget elementor-widget-counter" data-element_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="2000" data-to-value="100" data-delimiter=",">0</span>
				<span class="elementor-counter-number-suffix"></span>
			</div>
							<div class="elementor-counter-title">Довольных клиентов</div>
					</div>
				</div>
				</div>
						</div>
			</div>
		</div>
				<div data-id="a97a313" class="elementor-element elementor-element-a97a313 elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="e7edc5a" class="elementor-element elementor-element-e7edc5a elementor-view-default elementor-widget elementor-widget-icon" data-element_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
				<i class="fa fa-clock-o" aria-hidden="true"></i>
			</div>
		</div>
				</div>
				</div>
				<div data-id="628995e" class="elementor-element elementor-element-628995e elementor-widget elementor-widget-heading" data-element_type="heading.default">
				<div class="elementor-widget-container">
			<span class="elementor-heading-title elementor-size-default">Наши залы работают 24/7</span>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section data-id="0a5f435" class="elementor-element elementor-element-0a5f435 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div data-id="d022dee" class="elementor-element elementor-element-d022dee elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div data-id="5d8c3aa" class="elementor-element elementor-element-5d8c3aa elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><h4 style="text-align: center; color: #ffffff;">© ООО &#171;<?php echo $sitename; ?>&#187;</h4></div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
						</div>
			</div>
		</div>
		<footer class="site-footer">
  <div class="container">
    <div class="footer-info-area style1 text-center ">
      
	<div class="footer-logo cactus-footer-logo footer_logo_selective"><img src="wp-content/themes/cactus/assets/images/logo.png" alt=""></div>        
      <ul class="footer-sns cactus-footer-sns footer_icons_selective">
             
            <li><a href="" title="" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="" title="" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="" title="" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="" title="" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="" title="" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <div class="site-info"><span class="copyright_selective"></span>
	Designed by <a href="https://www.velathemes.com/" target="_blank">Vela Themes</a>. All Rights Reserved.      </div>
    </div>
    
  </div>
</footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://bootstraptema.ru/plugins/2016/bmd/bootstrap-material-datetimepicker.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="http://bootstraptema.ru/plugins/2016/bmd/moment-with-locales.min.js"></script>
<script src="http://bootstraptema.ru/plugins/2016/bmd/bootstrap-material-datetimepicker.js"></script>



<script src="http://t00rk.github.io/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">

					<script>
					jQuery(document).ready(function($) {
						if ($.cookie( 'gridcookie' ) == null) {
					    	$( '.archive .post-wrap ul.products' ).addClass( 'grid' );
					    	$( '.gridlist-toggle #grid' ).addClass( 'active' );
					    }
					});
					</script>
				<div class="back-to-top"></div><script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/test.host1732997.hostland.pro\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u043f\u043e\u0434\u0442\u0432\u0435\u0440\u0434\u0438\u0442\u0435, \u0447\u0442\u043e \u0432\u044b \u043d\u0435 \u0440\u043e\u0431\u043e\u0442."}}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.3'></script>
<script type='text/javascript' src='wp-content/plugins/vela-companion/assets/vendor/owl-carousel/js/owl.carousel.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/vela-companion/assets/vendor/mixitup/mixitup.min.js'></script>
<script type='text/javascript' src='wp-content/themes/cactus/assets/plugins/bootstrap/js/bootstrap.min.js'></script>
<script type='text/javascript' src='wp-content/themes/cactus/assets/plugins/respond.min.js'></script>
<script type='text/javascript' src='wp-content/themes/cactus/assets/plugins/waypoints/jquery.waypoints.min.js'></script>
<script type='text/javascript' src='wp-content/themes/cactus/assets/plugins/counter-up/jquery.counterup.js'></script>
<script type='text/javascript' src='wp-content/themes/cactus/assets/plugins/parallax/jquery.parallax-1.1.3.js'></script>
<script type='text/javascript' src='wp-content/themes/cactus/assets/plugins/prettyphoto/js/jquery.prettyPhoto.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var cactus_params = {"ajaxurl":"http:\/\/test.host1732997.hostland.pro\/wp-admin\/admin-ajax.php","themeurl":"http:\/\/test.host1732997.hostland.pro\/wp-content\/themes\/cactus","mixitup":"1","isotope":"0","video_background":"0","banner_video":"","slider_autoplay":"1","autoplaytimeout":"5000","page_preloader":"0","preloader_background":"rgba(153,153,153,0.8)","preloader_image":"http:\/\/test.host1732997.hostland.pro\/wp-content\/themes\/cactus\/assets\/images\/preloader.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/cactus/assets/js/cactus.js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min.js?ver=4.9.9'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/position.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.4.1'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/swiper/swiper.jquery.min.js?ver=4.4.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var elementorFrontendConfig = {"isEditMode":"","is_rtl":"","breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"urls":{"assets":"http:\/\/test.host1732997.hostland.pro\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_enable_lightbox_in_editor":"yes"}},"post":{"id":33,"title":"Landing Page \u2013 Business","excerpt":""}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.min.js?ver=2.1.6'></script>
<script>

    </script>
<script>

    jQuery('.select_zal1').on('click', function() {
        jQuery( ".selects" ).removeClass( "selects" );
        jQuery( ".select_zal1" ).addClass( "selects" );
    });
    jQuery('.select_zal2').on('click', function() {
        jQuery( ".selects" ).removeClass( "selects" );
        jQuery( ".select_zal2" ).addClass( "selects" );
    });
    jQuery('.select_zal3').on('click', function() {
        jQuery( ".selects" ).removeClass( "selects" );
        jQuery( ".select_zal3" ).addClass( "selects" );
    });
    jQuery('.select_zal4').on('click', function() {
        jQuery( ".selects" ).removeClass( "selects" );
        jQuery( ".select_zal4" ).addClass( "selects" );
    });
    jQuery('.select_zal5').on('click', function() {
        jQuery( ".selects" ).removeClass( "selects" );
        jQuery( ".select_zal5" ).addClass( "selects" );
    });
    jQuery('.select_zal6').on('click', function() {
        jQuery( ".selects" ).removeClass( "selects" );
        jQuery( ".select_zal6" ).addClass( "selects" );
    });

    jQuery('.select_film1').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film1" ).addClass( "selects-film" );
    });
    jQuery('.select_film2').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film2" ).addClass( "selects-film" );
    });
    jQuery('.select_film3').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film3" ).addClass( "selects-film" );
    });
    jQuery('.select_film4').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film4" ).addClass( "selects-film" );
    });
    jQuery('.select_film5').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film5" ).addClass( "selects-film" );
    });
    jQuery('.select_film6').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film6" ).addClass( "selects-film" );
    });
    jQuery('.select_film7').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film7" ).addClass( "selects-film" );
    });
    jQuery('.select_film8').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film8" ).addClass( "selects-film" );
    });
    jQuery('.select_film9').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film9" ).addClass( "selects-film" );
    });
    jQuery('.select_film10').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film10" ).addClass( "selects-film" );
    });
    jQuery('.select_film11').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film11" ).addClass( "selects-film" );
    });
    jQuery('.select_film12').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film12" ).addClass( "selects-film" );
    });
    jQuery('.select_film13').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film13" ).addClass( "selects-film" );
    });
    jQuery('.select_film14').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film14" ).addClass( "selects-film" );
    });
    jQuery('.select_film15').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film15" ).addClass( "selects-film" );
    });
    jQuery('.select_film16').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film16" ).addClass( "selects-film" );
    });
    jQuery('.select_film17').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film17" ).addClass( "selects-film" );
    });
    jQuery('.select_film18').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film18" ).addClass( "selects-film" );
    });
    jQuery('.select_film19').on('click', function() {
        jQuery( ".selects-film" ).removeClass( "selects-film" );
        jQuery( ".select_film19" ).addClass( "selects-film" );
    });
    jQuery('.agree').prop('checked', false);
</script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('#date').bootstrapMaterialDatePicker
        ({
            time: false,
            clearButton: true
        });

        $('#time').bootstrapMaterialDatePicker
        ({
            date: false,
            shortTime: false,
            format: 'HH:mm'
        });

        $('#date-format').bootstrapMaterialDatePicker
        ({
            format: 'dddd DD MMMM YYYY - HH:mm'
        });
        $('#date-fr').bootstrapMaterialDatePicker
        ({
            format: 'DD/MM/YYYY HH:mm',
            lang: 'fr',
            weekStart: 1,
            cancelText : 'ANNULER',
            nowButton : true,
            switchOnClick : true
        });

        $('#date-end').bootstrapMaterialDatePicker
        ({
            weekStart: 0, format: 'DD/MM/YYYY HH:mm'
        });
        $('#date-start').bootstrapMaterialDatePicker
        ({
            weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
        }).on('change', function(e, date)
        {
            $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
        });

        $('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

        $.material.init()
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
<!-- Copied from http://test.host1732997.hostland.pro/ by Cyotek WebCopy 1.6.0.559, 18 января 2019 г., 7:56:39 -->
</html>
