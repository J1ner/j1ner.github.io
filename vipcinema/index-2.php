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
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js no-svg">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>Premium &amp; Free Wordpress Themes 2018 – VelaThemes</title>

<!-- This site is optimized with the Yoast SEO plugin v8.2 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="VelaThemes provides Best Premium and free Wordpress themes responsive, seo-friendly, multipurpose for photographers, magazine, business and bloggers."/>
<link rel="canonical" href="https://velathemes.com/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Premium &amp; Free Wordpress Themes 2018 – VelaThemes" />
<meta property="og:description" content="VelaThemes provides Best Premium and free Wordpress themes responsive, seo-friendly, multipurpose for photographers, magazine, business and bloggers." />
<meta property="og:url" content="https://velathemes.com/" />
<meta property="og:site_name" content="Vela Themes" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="VelaThemes provides Best Premium and free Wordpress themes responsive, seo-friendly, multipurpose for photographers, magazine, business and bloggers." />
<meta name="twitter:title" content="Premium &amp; Free Wordpress Themes 2018 – VelaThemes" />
<meta name="twitter:image" content="https://velathemes.com/wp-content/uploads/2018/04/cactus-screenshot-1024x768.jpg" />
<script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/velathemes.com\/","name":"Vela Themes","potentialAction":{"@type":"SearchAction","target":"https:\/\/velathemes.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="alternate" type="application/rss+xml" title="Vela Themes &raquo; Feed" href="https://velathemes.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Vela Themes &raquo; Comments Feed" href="https://velathemes.com/comments/feed/" />
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
<link rel='stylesheet' id='pt-cv-public-style-css'  href='https://velathemes.com/wp-content/plugins/content-views-query-and-display-post-page/public/assets/css/cv.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://velathemes.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='https://velathemes.com/wp-content/plugins/vela-companion/assets/vendor/owl-carousel/css/owl.carousel.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='vela-companion-front-css'  href='https://velathemes.com/wp-content/plugins/vela-companion/assets/css/front.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='vela-companion-element-css'  href='https://velathemes.com/wp-content/plugins/vela-companion/assets/css/element.css?ver=4.9.9' type='text/css' media='all' />
<style id='vela-companion-element-inline-css' type='text/css'>
.page-id-1513 .page-wrap,.postid-1513 .page-wrap{background-color:#ffffff;}.page-id-1513 .page-inner, .postid-1513 .page-inner{padding-top: 30px;}.cactus-e-img-frame:before {
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
<link rel='stylesheet' id='cactus-companion-front-css'  href='https://velathemes.com/wp-content/plugins/vela-companion/assets/css/cactus-frontpage.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='wspsc-style-css'  href='https://velathemes.com/wp-content/plugins/velatehems-paypal-shopping-cart/wp_shopping_cart_style.css?ver=4.3.9' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='https://velathemes.com/wp-content/themes/cactus-pro/assets/plugins/bootstrap/css/bootstrap.css?ver=4.9.9' type='text/css' media='' />
<link rel='stylesheet' id='cactus-style-css'  href='https://velathemes.com/wp-content/themes/cactus-pro/style.min.css?ver=4.9.9' type='text/css' media='' />
<style id='cactus-style-inline-css' type='text/css'>
.site-name,.site-tagline {display: none;}h1,h2,h3,h4,h5,h6{font-family:Montserrat;}html, div, span, applet, object, iframe, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {font-family:Montserrat;}html, body, div{font-size:14px;}h1{font-size:36px;}h2{font-size:30px;}h3{font-size:24px;}h4{font-size:20px;}h5{font-size:18px;}h6{font-size:16px;}.cactus-section .cactus-section-title{font-size:40px;}.cactus-section .cactus-section-desc{font-size:14px;}.cactus-section h4{font-size:20px;}.cactus-section, .cactus-section p, .cactus-section div{font-size:14px;}.cactus-section-title { color: #333; }.cactus-section-desc { color: #555; }.cactus-feature-caption h4, .cactus-team-vcard h4, .cactus-counter-title, .cactus-section .cactus-testimonial-name, .cactus-section .entry-title,.cactus-section .woocommerce ul.products li.product h3 { color: #bc2944;}.cactus-section-content { color: #555;}.cactus-section-content a {color: #a0a0a0;}.cactus-section-content a:hover {color: #bc2944;}.cactus-feature-item i,.cactus-counter-item i,.cactus-feature-item i {color: #555;}header .cactus-fixed-header-wrap,header .cactus-fixed-header-wrap .cactus-header{background-color:rgba(255,255,255,0.5);}.cactus-section-custom { background-color:#edf9ff; background-image:url();}.cactus-section-custom .cactus-section-content {padding:50px 0;}.cactus-section-service { background-color:#ffffff; background-image:url();}.cactus-section-service .cactus-section-content {padding:50px 0;}.cactus-section-promo { background-color:#f5f5f5; background-image:url();}.cactus-section-promo .cactus-section-content {padding:100px 0;}.cactus-section-works { background-color:#ffffff; background-image:url();}.cactus-section-works .cactus-section-content {padding:50px 0;}.cactus-section-team { background-color:#f5f5f5; background-image:url();}.cactus-section-team .cactus-section-content {padding:50px 0 0;}.cactus-section-counter { background-color:#ffffff; background-image:url(https://velathemes.com/wp-content/themes/cactus-pro/assets/images/bg-counter.jpg);}.cactus-section-counter .cactus-section-content {padding:100px 0;}.cactus-section-testimonial { background-color:#f5f5f5; background-image:url();}.cactus-section-testimonial .cactus-section-content {padding:100px 0 0;}.cactus-section-clients { background-color:#f5f5f5; background-image:url();}.cactus-section-clients .cactus-section-content {padding:30px 0 100px;}.cactus-section-news { background-color:#ffffff; background-image:url();}.cactus-section-news .cactus-section-content {padding:30px 0 100px;}.cactus-section-contact { background-color:#ffffff; background-image:url();}.cactus-section-contact .cactus-section-content {padding:100px 0;}.cactus-section-pricing { background-color:#ffffff; background-image:url();}.cactus-section-pricing .cactus-section-content {padding:50px 0;}.cactus-section-call_to_action { background-color:#ffffff; background-image:url();}.cactus-section-call_to_action .cactus-section-content {padding:50px 0;}.cactus-section-subscribe { background-color:#ffffff; background-image:url();}.cactus-section-subscribe .cactus-section-content {padding:50px 0;}.cactus-section-video { background-color:#ffffff; background-image:url();}.cactus-section-video .cactus-section-content {padding:50px 0;}.cactus-section-shop { background-color:#ffffff; background-image:url();}.cactus-section-shop .cactus-section-content {padding:50px 0;}a:hover,a:active {color: #bc2944;}header a:hover {color: #bc2944;}.site-nav  > div > ul > li.current > a {color: #bc2944;}.blog-list-wrap .entry-category a {color: #bc2944;}.entry-meta a:hover {color: #bc2944;}.form-control:focus,select:focus,input:focus,textarea:focus,input[type='text']:focus,input[type='password']:focus,input[type='datetime']:focus,input[type='datetime-local']:focus,input[type='date']:focus,input[type='month']:focus,input[type='time']:focus,input[type='week']:focus,input[type='number']:focus,input[type='email']:focus,input[type='url']:focus,input[type='search']:focus,input[type='tel']:focus,input[type='color']:focus,.uneditable-input:focus {border-color: #bc2944;}input[type='submit'] {background-color: #bc2944;}.entry-box.grid .img-box-caption .entry-category {position: absolute;top: -10px;left: 15px;padding: 0 5px;background-color: #bc2944;}.widget-title:before {color: #bc2944;}.btn-normal {background-color: #bc2944;}.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt {background-color: #bc2944;}.woocommerce #respond input#submit.alt:hover,.woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover {background-color: #bc2944;.woocommerce #respond input#submit.alt.disabled,.woocommerce #respond input#submit.alt.disabled:hover,.woocommerce #respond input#submit.alt:disabled,.woocommerce #respond input#submit.alt:disabled:hover,.woocommerce #respond input#submit.alt:disabled[disabled],.woocommerce #respond input#submit.alt:disabled[disabled]:hover,.woocommerce a.button.alt.disabled,.woocommerce a.button.alt.disabled:hover,.woocommerce a.button.alt:disabled,.woocommerce a.button.alt:disabled:hover,.woocommerce a.button.alt:disabled[disabled],.woocommerce a.button.alt:disabled[disabled]:hover,.woocommerce button.button.alt.disabled,.woocommerce button.button.alt.disabled:hover,.woocommerce button.button.alt:disabled,.woocommerce button.button.alt:disabled:hover,.woocommerce button.button.alt:disabled[disabled],.woocommerce button.button.alt:disabled[disabled]:hover,.woocommerce input.button.alt.disabled,.woocommerce input.button.alt.disabled:hover,.woocommerce input.button.alt:disabled,.woocommerce input.button.alt:disabled:hover,.woocommerce input.button.alt:disabled[disabled],.woocommerce input.button.alt:disabled[disabled]:hover {background-color: #bc2944;}.woocommerce nav.woocommerce-pagination ul li a:focus,.woocommerce nav.woocommerce-pagination ul li a:hover {color: #bc2944;}.cactus-header .cactus-main-nav > li > a:hover,.cactus-header .cactus-main-nav > li.active > a {color: #bc2944;}@media (min-width: 920px) {.frontpage .main-header:not(.fxd-header) .site-nav > div > ul > li > a:hover {color: #bc2944;}}.cactus-btn.primary,.cactus-btn.cactus-primary,.cactus-contact-form input[type='submit'],input[type='submit'].form-control {background-color: #bc2944;}.cactus-portfolio-filter li.active a {background-color: #bc2944;}.cactus-feature-caption h4,.cactus-gallery-item h4,.cactus-testimonial-name, .cactus-team-name,.cactus-section .entry-title a {color: #bc2944;}.cactus-pricing-item.cactus-featured .cactus-pricing-header {background-color: #bc2944;}.jetpack_subscription_widget input[type='submit'] {background-color: #bc2944;}.cactus-header .cactus-main-nav > li > a:hover, .cactus-header .cactus-main-nav > li.active > a {color:#bc2944;}.cactus-btn.primary, .cactus-btn.cactus-primary, .cactus-contact-form input[type='submit'], input[type='submit'].form-control {background-color: #bc2944;}.form-control:focus, select:focus, input:focus, textarea:focus, input[type='text']:focus, input[type='password']:focus, input[type='datetime']:focus, input[type='datetime-local']:focus, input[type='date']:focus, input[type='month']:focus, input[type='time']:focus, input[type='week']:focus, input[type='number']:focus, input[type='email']:focus, input[type='url']:focus, input[type='search']:focus, input[type='tel']:focus, input[type='color']:focus, .unedit able-input:focus{border-color: #bc2944;}
</style>
<link rel='stylesheet' id='cactus-frontpage-css'  href='https://velathemes.com/wp-content/plugins/velathemes-companion/css/frontpage.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='wpforo-widgets-css'  href='https://velathemes.com/wp-content/plugins/wpforo/wpf-themes/classic/widgets.css?ver=1.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='cactus-google-fonts-css'  href='//fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700%26subset%3Dlatin%2C&#038;ver=4.9.9' type='text/css' media='' />
<link rel='stylesheet' id='font-awesome-css'  href='https://velathemes.com/wp-content/themes/cactus-pro/assets/plugins/font-awesome/css/font-awesome.min.css?ver=4.9.9' type='text/css' media='' />
<link rel='stylesheet' id='prettyphoto-css'  href='https://velathemes.com/wp-content/themes/cactus-pro/assets/plugins/prettyphoto/css/prettyPhoto.min.css?ver=4.9.9' type='text/css' media='' />
<link rel='stylesheet' id='rpt_front_style-css'  href='https://velathemes.com/wp-content/plugins/related-posts-thumbnails/assets/css/front.css?ver=1.6.2' type='text/css' media='all' />
<script type='text/javascript' src='https://velathemes.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://velathemes.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://velathemes.com/wp-content/plugins/vela-companion/assets/vendor/jquery.cookie.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var vela_params = {"ajaxurl":"https:\/\/velathemes.com\/wp-admin\/admin-ajax.php","i18n":{"i1":"Please fill out all required fields.","i2":"Please enter your name.","i3":"Please enter valid email.","i4":"Please enter subject.","i5":"Message is required."},"plugins_url":"https:\/\/velathemes.com\/wp-content\/plugins\/vela-companion"};
/* ]]> */
</script>
<script type='text/javascript' src='https://velathemes.com/wp-content/plugins/vela-companion/assets/js/front.js?ver=1.1.2'></script>
<link rel='https://api.w.org/' href='https://velathemes.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://velathemes.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://velathemes.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.9" />
<link rel='shortlink' href='https://velathemes.com/' />

<!-- WP Simple Shopping Cart plugin v4.3.9 - https://www.tipsandtricks-hq.com/wordpress-simple-paypal-shopping-cart-plugin-768/ -->

	<script type="text/javascript">
	<!--
	//
	function ReadForm (obj1, tst) 
	{ 
	    // Read the user form
	    var i,j,pos;
	    val_total="";val_combo="";		
	
	    for (i=0; i<obj1.length; i++) 
	    {     
	        // run entire form
	        obj = obj1.elements[i];           // a form element
	
	        if (obj.type == "select-one") 
	        {   // just selects
	            if (obj.name == "quantity" ||
	                obj.name == "amount") continue;
		        pos = obj.selectedIndex;        // which option selected
		        val = obj.options[pos].value;   // selected value
		        val_combo = val_combo + " (" + val + ")";
	        }
	    }
		// Now summarize everything we have processed above
		val_total = obj1.product_tmp.value + val_combo;
		obj1.wspsc_product.value = val_total;
	}
	//-->
	</script>       <style>
        #related_posts_thumbnails li{
            border-right: 1px solid #dddddd;
            background-color: #ffffff       }
        #related_posts_thumbnails li:hover{
            background-color: #eeeeee;
        }
        .relpost_content{
            font-size: 16px;
            color: #333333;
        }
        .relpost-block-single{
            background-color: #ffffff;
            border-right: 1px solid  #dddddd;
            border-left: 1px solid  #dddddd;
            margin-right: -1px;
        }
        .relpost-block-single:hover{
            background-color: #eeeeee;
        }
        </style>

        </head>
<body class="home page-template page-template-template-fullwidth page-template-template-fullwidth-php page page-id-1513 wp-custom-logo blog light">

  <div class="wrapper">
        <!--Header-->
                <header class="header-wrap">
<div class="cactus-header cactus-inline-header right">
	            <div class="cactus-main-header">
             <div class="cactus-logo">
			  <a href="https://velathemes.com/"><img src="https://velathemes.com/wp-content/uploads/2017/12/vela_logo.png"></a>
            </div>
                
               

  <nav class="cactus-navigation cactus-wp-menu" role="navigation">
  <ul id="top-menu" class="hoverline-fromcenter cactus-main-nav cactus-nav-main"><li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-63"><a href="https://velathemes.com/"><span>Home</span></a></li>
<li id="menu-item-2480" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2480"><a href="https://velathemes.com/wordpress-themes/"><span>WP Themes</span></a>
<ul class="sub-menu">
	<li id="menu-item-10124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10124"><a href="https://velathemes.com/capeone-theme/"><span>CapeOne Theme</span></a></li>
	<li id="menu-item-10123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10123"><a href="https://velathemes.com/capeone-pro-theme/"><span>CapeOne Pro Theme</span></a></li>
	<li id="menu-item-2692" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2692"><a href="https://velathemes.com/cactus-theme/"><span>Cactus Theme</span></a></li>
	<li id="menu-item-2691" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2691"><a href="https://velathemes.com/cactus-pro-theme/"><span>Cactus Pro Theme</span></a></li>
	<li id="menu-item-2689" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2689"><a href="https://velathemes.com/onetone-theme/"><span>Onetone Theme</span></a></li>
	<li id="menu-item-2688" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2688"><a href="https://velathemes.com/onetone-pro-theme/"><span>Onetone Pro Theme</span></a></li>
	<li id="menu-item-2690" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2690"><a href="https://velathemes.com/astore-theme/"><span>AStore Theme</span></a></li>
	<li id="menu-item-3571" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3571"><a href="https://velathemes.com/astore-pro-theme/"><span>AStore Pro Theme</span></a></li>
</ul>
</li>
<li id="menu-item-85" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-85"><a href="#"><span>Documentation</span></a>
<ul class="sub-menu">
	<li id="menu-item-1625" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1625"><a href="https://velathemes.com/cactus-documentation/"><span>Cactus Documentation</span></a></li>
	<li id="menu-item-1624" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1624"><a href="https://velathemes.com/astore-documentation/"><span>AStore Documentation</span></a></li>
	<li id="menu-item-10122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10122"><a href="https://velathemes.com/capeone-documentation/"><span>CapeOne Documentation</span></a></li>
</ul>
</li>
<li id="menu-item-1362" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1362"><a href="https://velathemes.com/blog/"><span>Blog</span></a></li>
<li id="menu-item-530" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-530"><a href="https://velathemes.com/member/"><span>Member</span></a></li>
<li id="menu-item-3574" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3574"><a href="https://velathemes.com/vela-themes-bundle/"><span>Vela Themes Bundle</span></a></li>
</ul>    <div class="cactus-f-microwidgets"></div>
</nav>

            </div>
              <div class="cactus-mobile-main-header">
                <div class="cactus-logo">
                     <a href="https://velathemes.com/"><img src="https://velathemes.com/wp-content/uploads/2017/12/vela_logo.png"></a>
                </div>

                <div class="cactus-menu-toggle">
                    <div class="cactus-toggle-icon">
                        <span class="cactus-line"></span>
                    </div>
                </div>
            </div>
<div class="cactus-mobile-drawer-header" style="display: none;">
<ul id="top-menu" class="cactus-mobile-main-nav"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-63"><a href="https://velathemes.com/"><span>Home</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2480"><a href="https://velathemes.com/wordpress-themes/"><span>WP Themes</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10124"><a href="https://velathemes.com/capeone-theme/"><span>CapeOne Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10123"><a href="https://velathemes.com/capeone-pro-theme/"><span>CapeOne Pro Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2692"><a href="https://velathemes.com/cactus-theme/"><span>Cactus Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2691"><a href="https://velathemes.com/cactus-pro-theme/"><span>Cactus Pro Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2689"><a href="https://velathemes.com/onetone-theme/"><span>Onetone Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2688"><a href="https://velathemes.com/onetone-pro-theme/"><span>Onetone Pro Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2690"><a href="https://velathemes.com/astore-theme/"><span>AStore Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3571"><a href="https://velathemes.com/astore-pro-theme/"><span>AStore Pro Theme</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-85"><a href="#"><span>Documentation</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1625"><a href="https://velathemes.com/cactus-documentation/"><span>Cactus Documentation</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1624"><a href="https://velathemes.com/astore-documentation/"><span>AStore Documentation</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10122"><a href="https://velathemes.com/capeone-documentation/"><span>CapeOne Documentation</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1362"><a href="https://velathemes.com/blog/"><span>Blog</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-530"><a href="https://velathemes.com/member/"><span>Member</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3574"><a href="https://velathemes.com/vela-themes-bundle/"><span>Vela Themes Bundle</span></a></li>
</ul>             
</div>        </div>
                 <div class="cactus-fixed-header-wrap" style="display: none;">
            <div class="cactus-header cactus-inline-header shadow right">
                <div class="cactus-main-header">
                     <div class="cactus-logo">
					  <a href="https://velathemes.com/"><img src="https://velathemes.com/wp-content/uploads/2017/12/vela_logo.png"></a>
                      </div>
                
                    

  <nav class="cactus-navigation cactus-wp-menu" role="navigation">
  <ul id="top-menu" class="hoverline-fromcenter cactus-main-nav cactus-nav-main"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-63"><a href="https://velathemes.com/"><span>Home</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2480"><a href="https://velathemes.com/wordpress-themes/"><span>WP Themes</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10124"><a href="https://velathemes.com/capeone-theme/"><span>CapeOne Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10123"><a href="https://velathemes.com/capeone-pro-theme/"><span>CapeOne Pro Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2692"><a href="https://velathemes.com/cactus-theme/"><span>Cactus Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2691"><a href="https://velathemes.com/cactus-pro-theme/"><span>Cactus Pro Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2689"><a href="https://velathemes.com/onetone-theme/"><span>Onetone Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2688"><a href="https://velathemes.com/onetone-pro-theme/"><span>Onetone Pro Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2690"><a href="https://velathemes.com/astore-theme/"><span>AStore Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3571"><a href="https://velathemes.com/astore-pro-theme/"><span>AStore Pro Theme</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-85"><a href="#"><span>Documentation</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1625"><a href="https://velathemes.com/cactus-documentation/"><span>Cactus Documentation</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1624"><a href="https://velathemes.com/astore-documentation/"><span>AStore Documentation</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10122"><a href="https://velathemes.com/capeone-documentation/"><span>CapeOne Documentation</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1362"><a href="https://velathemes.com/blog/"><span>Blog</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-530"><a href="https://velathemes.com/member/"><span>Member</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3574"><a href="https://velathemes.com/vela-themes-bundle/"><span>Vela Themes Bundle</span></a></li>
</ul>    <div class="cactus-f-microwidgets"></div>
</nav>

                   
                </div>
                  <div class="cactus-mobile-main-header">
                <div class="cactus-logo">
                     <a href="https://velathemes.com/"><img src="https://velathemes.com/wp-content/uploads/2017/12/vela_logo.png"></a>
                </div>

                <div class="cactus-menu-toggle">
                    <div class="cactus-toggle-icon">
                        <span class="cactus-line"></span>
                    </div>
                </div>
            </div>
<div class="cactus-mobile-drawer-header" style="display: none;">
<ul id="top-menu" class="cactus-mobile-main-nav"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-63"><a href="https://velathemes.com/"><span>Home</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2480"><a href="https://velathemes.com/wordpress-themes/"><span>WP Themes</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10124"><a href="https://velathemes.com/capeone-theme/"><span>CapeOne Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10123"><a href="https://velathemes.com/capeone-pro-theme/"><span>CapeOne Pro Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2692"><a href="https://velathemes.com/cactus-theme/"><span>Cactus Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2691"><a href="https://velathemes.com/cactus-pro-theme/"><span>Cactus Pro Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2689"><a href="https://velathemes.com/onetone-theme/"><span>Onetone Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2688"><a href="https://velathemes.com/onetone-pro-theme/"><span>Onetone Pro Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2690"><a href="https://velathemes.com/astore-theme/"><span>AStore Theme</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3571"><a href="https://velathemes.com/astore-pro-theme/"><span>AStore Pro Theme</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-85"><a href="#"><span>Documentation</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1625"><a href="https://velathemes.com/cactus-documentation/"><span>Cactus Documentation</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1624"><a href="https://velathemes.com/astore-documentation/"><span>AStore Documentation</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10122"><a href="https://velathemes.com/capeone-documentation/"><span>CapeOne Documentation</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1362"><a href="https://velathemes.com/blog/"><span>Blog</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-530"><a href="https://velathemes.com/member/"><span>Member</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3574"><a href="https://velathemes.com/vela-themes-bundle/"><span>Vela Themes Bundle</span></a></li>
</ul>             
</div>            </div>
        </div>
        
      </header><div class="page-wrap">
   
  <div class="container-fullwidth">
          <article class="post-entry text-left">
                        <div id="page-1513">
  <article class="entry-box">
    <div class="entry-main">
      <div class="entry-summary">
	<div class="cactus-sections-wrap">
<div class="cactus-section text-center cactus-text-light" style="background:url(https://velathemes.com/wp-content/uploads/2018/04/main-bg-1.jpg)">
<div class="cactus-section-content" style="padding: 150px 0;">
<div class="cactus-container">
<h1 style="font-size:24px;" style="color:rgba(255,255,255,.7);">WELCOME TO VELATHEMES<br />
                <span class="cactus-slider-title" style="margin-top: 20px;display:inline-block;">FREE WORDPRESS THEMES</span></h1>
<p class="cactus-slider-desc" style="font-size:16px;">We offer clean and professional free &#038; premium WordPress themes, which can help you create beautiful sites as easy as ABC.</p>
<div class="cactus-action"><a href="https://velathemes.com/wordpress-themes/" target="_self"><span class="cactus-btn cactus-primary"><i class="fa fa-search"></i> Browser Our Themes</span></a></div>
</p></div>
</p></div>
</p></div>
<div class="cactus-section" id="themes">
<div class="cactus-section-content" style="padding: 100px 0 20px;">
<div class="cactus-container">
<div class="row">
<div class="col-md-4" style="padding-top: 90px;">
<h2 class="cactus-section-title"><a href="https://velathemes.com/" style="font-size: 28px;color:#333;text-transform:uppercase;">Check Our Themes</a></h2>
<p class="cactus-section-desc">We provides free and Premium WordPress Themes. And our WordPress Themes currently is trusted by 30,000+ users. Check out our latest releases or click the button to see all our themes.</p>
</p></div>
<div class="col-md-4 text-center">
                        <a href="https://velathemes.com/cactus-pro-theme/"><img src="https://velathemes.com/wp-content/uploads/2018/04/cactus-screenshot-1024x768.jpg"></a></p>
<h3>Cactus</h3>
<p><a href="https://velathemes.com/wp/best-woocommerce-wordpress-themes/">Business</a>, <a href="https://velathemes.com/wp/best-wordpress-portfolio-themes">Corporate</a></p>
</p></div>
<div class="col-md-4 text-center">
                        <a href="https://velathemes.com/astore-theme/"><img src="https://velathemes.com/wp-content/uploads/2018/05/a4.jpg"></a></p>
<h3>AStore</h3>
<p><a href="https://velathemes.com/wp/free-ecommerce-wordpress-themes/">eCommerce</a></p>
</p></div>
</p></div>
</p></div>
</p></div>
</p></div>
<div class="cactus-section text-center" style="background:#efeff7;">
<div class="cactus-section-content" style="padding: 100px 0 0;">
<div class="cactus-container">
<h2 class="cactus-section-title" style="margin-bottom: 50px;"><a href="https://velathemes.com/" style="font-size: 30px;color:#333;text-transform:uppercase;">Why Choose Our Themes?</a></h2>
<ul class="cactus-services cactus-list-md-3 style2">
<li>
<div class="cactus-feature-item">
<div class="cactus-feature-figure"><img src="https://velathemes.com/wp-content/uploads/2018/04/fe-design.png"></div>
<div class="cactus-feature-caption">
<h4>FLEXIBLE DESIGN</h4>
<p>All our WordPress themes are pre-built with styling options and templates. You can switch to any default styles with one mouse click.</p>
</p></div>
</p></div>
</li>
<li>
<div class="cactus-feature-item">
<div class="cactus-feature-figure"><img src="https://velathemes.com/wp-content/uploads/2018/04/fe-plugins.png"></div>
<div class="cactus-feature-caption">
<h4>COMPATIBLE WITH PLUGINS</h4>
<p>Our themes integrate with all popular WordPress plugins, such as Elementor Page Builder, WooCommerce, Polylang and Contact Form 7.</p>
</p></div>
</p></div>
</li>
<li>
<div class="cactus-feature-item">
<div class="cactus-feature-figure"><img src="https://velathemes.com/wp-content/uploads/2018/04/fe-seo.png"></div>
<div class="cactus-feature-caption">
<h4>SEO OPTIMIZED</h4>
<p>With clean &#038; well-organized codes, our WordPress themes are SEO friendly, which can help your website get higher ranking on Google.</p>
</p></div>
</p></div>
</li>
<li>
<div class="cactus-feature-item">
<div class="cactus-feature-figure"><img src="https://velathemes.com/wp-content/uploads/2018/04/fe-import.png"></div>
<div class="cactus-feature-caption">
<h4>EASY SETUP</h4>
<p>You could set up an elegant and amazing websites with just several simple steps by the help of our WordPress themes, even if you are a WordPress newbie. No demo importing tools or coding skills required.</p>
</p></div>
</p></div>
</li>
<li>
<div class="cactus-feature-item">
<div class="cactus-feature-figure"><img src="https://velathemes.com/wp-content/uploads/2018/04/fe-options.png"></div>
<div class="cactus-feature-caption">
<h4>ADVANCED OPTIONS</h4>
<p>All customized and advanced options are located in the powerful Theme Customizer. Those customized and advanced options can help you to customize your WordPress website or blog according to your needs.</p>
</p></div>
</p></div>
</li>
<li>
<div class="cactus-feature-item">
<div class="cactus-feature-figure"><img src="https://velathemes.com/wp-content/uploads/2018/04/fe-update.png"></div>
<div class="cactus-feature-caption">
<h4>CONTINUOUS SUPPORT</h4>
<p>We will continuously update our themes to fix any potential bugs, be compatible with the latest version of WordPress, and add new features and functionality. Our customers love our rapid and friendly support.</p>
</p></div>
</p></div>
</li>
</ul></div>
</p></div>
</p></div>
<div class="cactus-section">
<div class="cactus-section-content" style="padding: 100px 0 30px;">
<div class="cactus-container">
<h2 class="cactus-section-title text-center" style="margin-bottom: 50px;font-size: 30px;color:#333;text-transform:uppercase;">Latest Posts</a></h2>
<div class="pt-cv-wrapper"><div class="pt-cv-view pt-cv-grid pt-cv-colsys" id="pt-cv-view-88dd18cc06"><div data-id="pt-cv-page-1" class="pt-cv-page" data-cvc="3"><div class="col-md-4 col-sm-6 col-xs-12 pt-cv-content-item pt-cv-1-col" ><div class='pt-cv-ifield'><a href="https://velathemes.com/wp/psychology-wordpress-themes/" class="_self pt-cv-href-thumbnail pt-cv-thumb-default" target="_self" ><img width="480" height="360" src="https://velathemes.com/wp-content/uploads/2018/07/psychology-wordpress-themes-480x360.jpg" class="pt-cv-thumbnail" alt="psychology wordpress themes" /></a>
<h4 class="pt-cv-title"><a href="https://velathemes.com/wp/psychology-wordpress-themes/" class="_self" target="_self" >Best Responsive Psychology WordPress Themes for Psychology, Psychiatry, Medicine, Counselling, Therapist Businesses 2018</a></h4>
<div class="pt-cv-content">Burdened and exhausted under huge pressure, more and more people suffer from this or that psychological illness. Especially in this highly ...<br /><a href="https://velathemes.com/wp/psychology-wordpress-themes/" class="_self pt-cv-readmore btn btn-success" target="_self" >Read More</a></div></div></div>
<div class="col-md-4 col-sm-6 col-xs-12 pt-cv-content-item pt-cv-1-col" ><div class='pt-cv-ifield'><a href="https://velathemes.com/wp/children-wordpress-themes/" class="_self pt-cv-href-thumbnail pt-cv-thumb-default" target="_self" ><img width="480" height="360" src="https://velathemes.com/wp-content/uploads/2018/07/children-wordpress-themes-480x360.jpg" class="pt-cv-thumbnail" alt="Children WordPress Themes" /></a>
<h4 class="pt-cv-title"><a href="https://velathemes.com/wp/children-wordpress-themes/" class="_self" target="_self" >Best Kids, Kindergarten, Nursery, Preschool ,Childcare and Children WordPress themes</a></h4>
<div class="pt-cv-content">Children are the ribbons to connect one generation with the next generation. Not only every single family attaches great importance ...<br /><a href="https://velathemes.com/wp/children-wordpress-themes/" class="_self pt-cv-readmore btn btn-success" target="_self" >Read More</a></div></div></div>
<div class="col-md-4 col-sm-6 col-xs-12 pt-cv-content-item pt-cv-1-col" ><div class='pt-cv-ifield'><a href="https://velathemes.com/wp/colorful-wordpress-themes/" class="_self pt-cv-href-thumbnail pt-cv-thumb-default" target="_self" ><img width="480" height="360" src="https://velathemes.com/wp-content/uploads/2018/07/colorful-wordpress-themes-480x360.jpg" class="pt-cv-thumbnail" alt="Colorful WordPress Themes" /></a>
<h4 class="pt-cv-title"><a href="https://velathemes.com/wp/colorful-wordpress-themes/" class="_self" target="_self" >Best Eye-catching &amp; Colorful WordPress Themes &amp; Templates for Creative Websites</a></h4>
<div class="pt-cv-content">Surrounded by thousands of WordPress themes, it seems that to create a website is not a difficult thing. However, the ...<br /><a href="https://velathemes.com/wp/colorful-wordpress-themes/" class="_self pt-cv-readmore btn btn-success" target="_self" >Read More</a></div></div></div></div></div></div></div>
</p></div>
</p></div>
</div>
      </div>
    </div>
  </article>
</div>
                           
          </article>
                   </section>
      </div>
    </div>

<footer class="site-footer">
  <div class="container">
    <div class="footer-info-area style1 text-center ">
      
	<div class="footer-logo cactus-footer-logo footer_logo_selective"><img src="https://velathemes.com/wp-content/uploads/2017/12/vela_logo.png" alt=""></div>        
      <ul class="footer-sns cactus-footer-sns footer_icons_selective">
             
            </ul>
            <div class="site-info"><span class="copyright_selective"><p><a href="/blog/">Blog</a> / <a href="/terms/">Terms</a> / <a href="/contact/">Contact</a> / <a href="/privacy-policy/">Privacy</a> / <a href="/about-velathemes/">About</a><br /> Designed by <a href="https://velathemes.com/">Vela Themes</a>. All Rights Reserved.<br /> <a class="secure" href="//www.mcafeesecure.com/verify?host=velathemes.com" target="_blank" rel="nofollow noopener"><img src="https://velathemes.com/wp-content/uploads/2018/01/55.png" alt="" /></a></p><p><!-- Global site tag (gtag.js) - Google Analytics --><br /> <script src="https://www.googletagmanager.com/gtag/js?id=UA-116847649-1"></script><br /> <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116847649-1');
</script></p></span>
      </div>
    </div>
    
  </div>
</footer>
</div>
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
var wpcf7 = {"apiSettings":{"root":"https:\/\/velathemes.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://velathemes.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var PT_CV_PUBLIC = {"_prefix":"pt-cv-","page_to_show":"5","_nonce":"302ef60499","is_admin":"","is_mobile":"","ajaxurl":"https:\/\/velathemes.com\/wp-admin\/admin-ajax.php","lang":"","loading_image_src":"data:image\/gif;base64,R0lGODlhDwAPALMPAMrKygwMDJOTkz09PZWVla+vr3p6euTk5M7OzuXl5TMzMwAAAJmZmWZmZszMzP\/\/\/yH\/C05FVFNDQVBFMi4wAwEAAAAh+QQFCgAPACwAAAAADwAPAAAEQvDJaZaZOIcV8iQK8VRX4iTYoAwZ4iCYoAjZ4RxejhVNoT+mRGP4cyF4Pp0N98sBGIBMEMOotl6YZ3S61Bmbkm4mAgAh+QQFCgAPACwAAAAADQANAAAENPDJSRSZeA418itN8QiK8BiLITVsFiyBBIoYqnoewAD4xPw9iY4XLGYSjkQR4UAUD45DLwIAIfkEBQoADwAsAAAAAA8ACQAABC\/wyVlamTi3nSdgwFNdhEJgTJoNyoB9ISYoQmdjiZPcj7EYCAeCF1gEDo4Dz2eIAAAh+QQFCgAPACwCAAAADQANAAAEM\/DJBxiYeLKdX3IJZT1FU0iIg2RNKx3OkZVnZ98ToRD4MyiDnkAh6BkNC0MvsAj0kMpHBAAh+QQFCgAPACwGAAAACQAPAAAEMDC59KpFDll73HkAA2wVY5KgiK5b0RRoI6MuzG6EQqCDMlSGheEhUAgqgUUAFRySIgAh+QQFCgAPACwCAAIADQANAAAEM\/DJKZNLND\/kkKaHc3xk+QAMYDKsiaqmZCxGVjSFFCxB1vwy2oOgIDxuucxAMTAJFAJNBAAh+QQFCgAPACwAAAYADwAJAAAEMNAs86q1yaWwwv2Ig0jUZx3OYa4XoRAfwADXoAwfo1+CIjyFRuEho60aSNYlOPxEAAAh+QQFCgAPACwAAAIADQANAAAENPA9s4y8+IUVcqaWJ4qEQozSoAzoIyhCK2NFU2SJk0hNnyEOhKR2AzAAj4Pj4GE4W0bkJQIAOw=="};
var PT_CV_PAGINATION = {"first":"\u00ab","prev":"\u2039","next":"\u203a","last":"\u00bb","goto_first":"Go to first page","goto_prev":"Go to previous page","goto_next":"Go to next page","goto_last":"Go to last page","current_page":"Current page is","goto_page":"Go to page"};
/* ]]> */
</script>
<script type='text/javascript' src='https://velathemes.com/wp-content/plugins/content-views-query-and-display-post-page/public/assets/js/cv.js?ver=2.0.2'></script>
<script type='text/javascript' src='https://velathemes.com/wp-content/plugins/vela-companion/assets/vendor/owl-carousel/js/owl.carousel.min.js'></script>
<script type='text/javascript' src='https://velathemes.com/wp-content/plugins/vela-companion/assets/vendor/mixitup/mixitup.min.js'></script>
<script type='text/javascript' src='https://velathemes.com/wp-content/plugins/velathemes-companion/public/js/paypal-ipn-for-wordpress-public-bn.js?ver=1.1.2'></script>
<script type='text/javascript' src='https://velathemes.com/wp-content/plugins/velathemes-companion/js/front.js?ver=4.9.9'></script>
<script type='text/javascript' src='https://velathemes.com/wp-content/themes/cactus-pro/assets/plugins/bootstrap/js/bootstrap.min.js'></script>
<script type='text/javascript' src='https://velathemes.com/wp-content/themes/cactus-pro/assets/plugins/respond.min.js'></script>
<script type='text/javascript' src='https://velathemes.com/wp-content/themes/cactus-pro/assets/plugins/waypoints/jquery.waypoints.min.js'></script>
<script type='text/javascript' src='https://velathemes.com/wp-content/themes/cactus-pro/assets/plugins/parallax/jquery.parallax-1.1.3.js'></script>
<script type='text/javascript' src='https://velathemes.com/wp-content/themes/cactus-pro/assets/plugins/prettyphoto/js/jquery.prettyPhoto.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var cactus_params = {"ajaxurl":"https:\/\/velathemes.com\/wp-admin\/admin-ajax.php","themeurl":"https:\/\/velathemes.com\/wp-content\/themes\/cactus-pro","mixitup":"1","isotope":"0","video_background":"0","banner_video":"","slider_autoplay":"1","autoplaytimeout":"5000","page_preloader":"0","preloader_background":"rgba(153,153,153,0.8)","preloader_image":"https:\/\/velathemes.com\/wp-content\/themes\/cactus-pro\/assets\/images\/preloader.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='https://velathemes.com/wp-content/themes/cactus-pro/assets/js/cactus.js'></script>
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
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1547768388 -->