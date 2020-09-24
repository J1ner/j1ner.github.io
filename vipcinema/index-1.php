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
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head profile="http://gmpg.org/xfn/11">
<meta charset="utf-8" />
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P24PF4B');</script>
<!--
<meta property="fb:page_id" content="6427302910" />
-->
<link rel="dns-prefetch" href="//s.w.org" />
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link href="https://plus.google.com/107188080561309681193" rel="publisher" />
<meta name="google-site-verification" content="7VWES_-rcHBcmaQis9mSYamPfNwE03f4vyTj4pfuAw0" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog Tool, Publishing Platform, and CMS &mdash; WordPress</title>
<meta name="referrer" content="always">

		<link href="//s.w.org/wp-includes/css/dashicons.min.css?20181204" rel="stylesheet" type="text/css" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="//s.w.org/style/wp4.css?78" />

<link rel="shortcut icon" href="//s.w.org/favicon.ico?2" type="image/x-icon" />
<meta name="apple-itunes-app" content="app-id=335703880" /><link rel="alternate" type="application/rss+xml" title="WordPress Blog RSS" href="http://wordpress.org/news/feed/" /><style type="text/css">#home-welcome,body,html{font-size:16px}#home-welcome *{box-sizing:border-box}#home-welcome{font-family:"Open Sans",sans-serif;line-height:1.5;font-weight:400;color:#32373c;padding:0;margin:0;background:#fff}#home-welcome header{padding:18px 36px;background:#0073aa}@media (min-width:737px){body,html{font-size:18px}#home-welcome header{padding:1.5625rem}}#home-welcome header h1{text-align:center;color:#FFF;line-height:1}#home-welcome h1{font-size:3.8147rem;font-weight:300}#home-welcome h1,#home-welcome h2,#home-welcome h3,#home-welcome h4,#home-welcome h5,#home-welcome h6{line-height:1.5;margin:2rem 0 1rem;font-family:inherit}#home-welcome header p.subheading{color:#FFF}#home-welcome p.subheading{font-size:1.25rem;font-weight:300;text-align:center;color:#82878C;margin:-.4rem auto 2rem}#home-welcome p{margin:1em 0;max-width:35.52714rem;font-size:18px}@media (min-width:67rem){#home-welcome #lang-guess{margin:1rem auto 0;max-width:50rem}}#home-welcome #lang-guess{padding:.5rem;background:#C7E8CA;text-align:center;font-size:.8rem;}#home-welcome .intro{padding-bottom:0}#home-welcome .screenshots{height:400px;overflow:hidden;padding:1rem 1rem 0;position:relative;left:-30px;right:0;width:106%}@media(max-width:739px){#home-welcome .screenshots{padding:0;left:auto;right:auto;width:100%}}#home-welcome .screenshots .dashboard{box-shadow:0 1px 8px rgba(0,0,0,.2);max-width:800px}#home-welcome .screenshots .dashboard-mobile{position:absolute;bottom:-100px;right:1px;z-index:1;max-width:200px}#home-welcome img{border-style:none;max-width:100%}#home-welcome .showcase{max-width:100%;margin:0;border-bottom:none;padding-left:0;padding-right:0}#home-welcome section{margin:0 auto;padding:3.05176rem 1.5625rem;max-width:50rem;border-bottom:2px solid #EEE}#home-welcome section:last-child{border-bottom:none}#home-welcome section h2{text-align:center;line-height:1}#home-welcome h2{font-size:2.44141rem;font-weight:300}#home-welcome .showcase>div{width:100%;height:300px;background:url(https://s.w.org/images/home/collage-min.jpg?3) center top;background-size:cover;box-shadow:inset 0 0 8px rgba(0,0,0,.4)}@media (min-width:700px){#home-welcome .showcase>div{height:600px;background-attachment:fixed}}#home-welcome .cta-link{max-width:100%;text-align:center;margin:3.05176rem 0 0}#home-welcome a:hover{text-decoration:underline}#home-welcome a:active,a:hover{outline-width:0}#home-welcome a{color:#0073aa;text-decoration:none;background-color:transparent;border:none}#home-welcome .features{border-top:2px solid #eee}#home-welcome .features ul{list-style:none;margin:3rem 0;padding:0;display:flex;flex-wrap:wrap;align-items:center}#home-welcome .features ul li{display:flex;align-items:center;justify-content:center;flex-direction:column;width:50%;height:160px;text-align:center;border-right:1px solid #eee;border-bottom:1px solid #eee}@media (max-width:739px){#home-welcome h1{font-size:3.2rem}#home-welcome .features ul li:nth-child(n+7){border-bottom:none}#home-welcome .features ul li:nth-child(2n){border-right:none}}@media (min-width:740px){#home-welcome .features ul li{width:25%;height:200px}#home-welcome .features ul li:nth-child(4n){border-right:none}#home-welcome .features ul li:nth-child(n+5){border-bottom:none}}#home-welcome .features ul li img{height:2.5rem;margin:.25rem auto 1.25rem}#home-welcome .features ul li img,#home-welcome .features ul li span{display:block;margin-bottom:1rem;color:#00A0D2;font-size:3rem}#home-welcome .dashicons{display:block;margin:0 auto -1rem;font-size:4rem;color:#CBCDCE;width:auto;height:auto}#home-welcome .features p{text-align:center;margin-left:auto;margin-right:auto}#home-welcome .community-2{background:url(https://s.w.org/images/home/community-2.jpg?3) no-repeat;position:relative;max-width:100%;background-size:cover;height:500px;border:none;display:flex;align-items:flex-start;justify-content:flex-end;flex-direction:column}#home-welcome .community-2 .screen{background:rgba(0,0,0,.5);position:absolute;left:0;right:0;top:0;z-index:0;width:100%;height:100%}#home-welcome .community-2 .subheading,#home-welcome .community-2 h2{color:#fff;position:relative;z-index:1;text-shadow:0 0 8px rgba(0,0,0,.5);text-align:left;margin:0 0 1rem;max-width:100%}#home-welcome section .container{max-width:50rem;margin:0 auto;z-index:0}@media (min-width:737px){#home-welcome .cta-wrapper{font-size:.8rem;margin:4rem 0 2rem}}#home-welcome .cta-wrapper{text-align:center;font-size:.9144rem;margin:2rem 0;display:block}#home-welcome .button,#home-welcome .button-primary,#home-welcome .button-secondary{display:inline-block;text-decoration:none!important;font-size:.8rem;line-height:1;height:1.5625rem;margin:0;padding:0 .8rem;cursor:pointer;border-width:1px;border-style:solid;-webkit-appearance:none;-webkit-border-radius:3px;border-radius:3px;white-space:nowrap;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}#home-welcome button::-moz-focus-inner,#home-welcome input[type=reset]::-moz-focus-inner,#home-welcome input[type=button]::-moz-focus-inner,#home-welcome input[type=submit]::-moz-focus-inner{border-width:0;border-style:none;padding:0}#home-welcome .button-group.button-xl .button,#home-welcome .button.button-xl{height:2.44141rem;line-height:2.3;padding:0 1.5rem;font-size:1rem}#home-welcome .button-group.button-large .button,#home-welcome .button.button-large{height:1.95313rem;line-height:1;padding:0 1rem}#home-welcome .button-group.button-small .button,#home-welcome .button.button-small{height:1.25rem;line-height:1;padding:0 .5rem;font-size:.64rem}#home-welcome .button:active,#home-welcome .button:focus{outline:0}#home-welcome .button.hidden{display:none}#home-welcome input[type=reset],#home-welcome input[type=reset]:active,#home-welcome input[type=reset]:focus,#home-welcome input[type=reset]:hover{background:0 0;border:none;-webkit-box-shadow:none;box-shadow:none;padding:0 2px 1px;width:auto}#home-welcome .button,#home-welcome .button-secondary{color:#555;border-color:#ccc;background:#f7f7f7;-webkit-box-shadow:0 1px 0 #ccc;box-shadow:0 1px 0 #ccc;vertical-align:top}#home-welcome p .button{vertical-align:baseline}#home-welcome .button-secondary:focus,#home-welcome .button-secondary:hover,#home-welcome .button.focus,#home-welcome .button.hover,#home-welcome .button:focus,#home-welcome .button:hover{background:#fafafa;border-color:#999;color:#23282d}#home-welcome .button-link:focus,#home-welcome .button-secondary:focus,#home-welcome .button.focus,#home-welcome .button:focus{border-color:#5b9dd9;-webkit-box-shadow:0 0 3px rgba(0,115,170,.8);box-shadow:0 0 3px rgba(0,115,170,.8)}#home-welcome .button-secondary:active,#home-welcome .button.active,#home-welcome .button.active:hover,#home-welcome .button:active{background:#eee;border-color:#999;-webkit-box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5);box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5);-webkit-transform:translateY(1px);-ms-transform:translateY(1px);transform:translateY(1px)}#home-welcome .button.active:focus{border-color:#5b9dd9;-webkit-box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5),0 0 3px rgba(0,115,170,.8);box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5),0 0 3px rgba(0,115,170,.8)}#home-welcome .button-disabled,#home-welcome .button-secondary.disabled,#home-welcome .button-secondary:disabled,#home-welcome .button-secondary[disabled],#home-welcome .button.disabled,#home-welcome .button:disabled,#home-welcome .button[disabled]{color:#a0a5aa!important;border-color:#ddd!important;background:#f7f7f7!important;-webkit-box-shadow:none!important;box-shadow:none!important;text-shadow:0 1px 0 #fff!important;cursor:default;-webkit-transform:none!important;-ms-transform:none!important;transform:none!important}#home-welcome .button-link{margin:0;padding:0;-webkit-box-shadow:none;box-shadow:none;border:0;-webkit-border-radius:0;border-radius:0;background:0 0;outline:0;cursor:pointer}#home-welcome .button-link:focus{outline:#5b9dd9 solid 1px}#home-welcome .button-primary{background:#0085ba;border-color:#0073aa #006799 #006799;-webkit-box-shadow:0 1px 0 #006799;box-shadow:0 1px 0 #006799;color:#fff;text-decoration:none;text-shadow:0 -1px 1px #006799,1px 0 1px #006799,0 1px 1px #006799,-1px 0 1px #006799}#home-welcome .button-primary.focus,#home-welcome .button-primary.hover,#home-welcome .button-primary:focus,#home-welcome .button-primary:hover{background:#008ec2;border-color:#006799;color:#fff}#home-welcome .button-primary.focus,#home-welcome .button-primary:focus{-webkit-box-shadow:0 1px 0 #0073aa,0 0 2px 1px #33b3db;box-shadow:0 1px 0 #0073aa,0 0 2px 1px #33b3db}#home-welcome .button-primary.active,#home-welcome .button-primary.active:focus,#home-welcome .button-primary.active:hover,#home-welcome .button-primary:active{background:#0073aa;border-color:#006799;-webkit-box-shadow:inset 0 2px 0 #006799;box-shadow:inset 0 2px 0 #006799;vertical-align:top}#home-welcome .button-primary-disabled,#home-welcome .button-primary.disabled,#home-welcome .button-primary:disabled,#home-welcome .button-primary[disabled]{color:#66c6e4!important;background:#008ec2!important;border-color:#007cb2!important;-webkit-box-shadow:none!important;box-shadow:none!important;text-shadow:0 -1px 0 rgba(0,0,0,.1)!important;cursor:default}#home-welcome .button-group{position:relative;display:inline-block;white-space:nowrap;font-size:0;vertical-align:middle}#home-welcome .button-group>.button{display:inline-block;-webkit-border-radius:0;border-radius:0;margin-right:-1px;z-index:10}#home-welcome .button-group>.button-primary{z-index:100}#home-welcome .button-group>.button:hover{z-index:20}#home-welcome .button-group>.button:first-child{-webkit-border-radius:3px 0 0 3px;border-radius:3px 0 0 3px}#home-welcome .button-group>.button:last-child{-webkit-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0}#home-welcome .button-group>.button:focus{position:relative;z-index:1}#home-welcome a.button.button-large{line-height:31.25px;line-height:1.953125rem}#lang-guess{width:inherit;max-width:inherit;margin:0;background:inherit;border:inherit;text-align:center;font:inherit;padding:0;-moz-border-radius:inherit;-khtml-border-radius:inherit;-webkit-border-radius:inherit;border-radius:inherit}</style><link rel="alternate" href="https://af.wordpress.org/" hreflang="af" />
<link rel="alternate" href="https://ak.wordpress.org/" hreflang="ak" />
<link rel="alternate" href="https://am.wordpress.org/" hreflang="am" />
<link rel="alternate" href="https://ar.wordpress.org/" hreflang="ar" />
<link rel="alternate" href="https://arq.wordpress.org/" hreflang="arq" />
<link rel="alternate" href="https://emoji.wordpress.org/" hreflang="art-xemoji" />
<link rel="alternate" href="https://ary.wordpress.org/" hreflang="ary" />
<link rel="alternate" href="https://as.wordpress.org/" hreflang="as" />
<link rel="alternate" href="https://ast.wordpress.org/" hreflang="ast" />
<link rel="alternate" href="https://az.wordpress.org/" hreflang="az" />
<link rel="alternate" href="https://az-tr.wordpress.org/" hreflang="az-tr" />
<link rel="alternate" href="https://azb.wordpress.org/" hreflang="azb" />
<link rel="alternate" href="https://bcc.wordpress.org/" hreflang="bcc" />
<link rel="alternate" href="https://bel.wordpress.org/" hreflang="bel" />
<link rel="alternate" href="https://bg.wordpress.org/" hreflang="bg" />
<link rel="alternate" href="https://bn.wordpress.org/" hreflang="bn" />
<link rel="alternate" href="https://bo.wordpress.org/" hreflang="bo" />
<link rel="alternate" href="https://bre.wordpress.org/" hreflang="br" />
<link rel="alternate" href="https://bs.wordpress.org/" hreflang="bs" />
<link rel="alternate" href="https://ca.wordpress.org/" hreflang="ca" />
<link rel="alternate" href="https://ceb.wordpress.org/" hreflang="ceb" />
<link rel="alternate" href="https://ku.wordpress.org/" hreflang="ckb" />
<link rel="alternate" href="https://co.wordpress.org/" hreflang="co" />
<link rel="alternate" href="https://cs.wordpress.org/" hreflang="cs" />
<link rel="alternate" href="https://cy.wordpress.org/" hreflang="cy" />
<link rel="alternate" href="https://da.wordpress.org/" hreflang="da" />
<link rel="alternate" href="https://de.wordpress.org/" hreflang="de" />
<link rel="alternate" href="https://de-ch.wordpress.org/" hreflang="de-ch" />
<link rel="alternate" href="https://dv.wordpress.org/" hreflang="dv" />
<link rel="alternate" href="https://dzo.wordpress.org/" hreflang="dzo" />
<link rel="alternate" href="https://el.wordpress.org/" hreflang="el" />
<link rel="alternate" href="https://wordpress.org/" hreflang="en" />
<link rel="alternate" href="https://en-au.wordpress.org/" hreflang="en-au" />
<link rel="alternate" href="https://en-ca.wordpress.org/" hreflang="en-ca" />
<link rel="alternate" href="https://en-gb.wordpress.org/" hreflang="en-gb" />
<link rel="alternate" href="https://en-nz.wordpress.org/" hreflang="en-nz" />
<link rel="alternate" href="https://en-za.wordpress.org/" hreflang="en-za" />
<link rel="alternate" href="https://eo.wordpress.org/" hreflang="eo" />
<link rel="alternate" href="https://es.wordpress.org/" hreflang="es" />
<link rel="alternate" href="https://es-ar.wordpress.org/" hreflang="es-ar" />
<link rel="alternate" href="https://cl.wordpress.org/" hreflang="es-cl" />
<link rel="alternate" href="https://es-co.wordpress.org/" hreflang="es-co" />
<link rel="alternate" href="https://es-cr.wordpress.org/" hreflang="es-cr" />
<link rel="alternate" href="https://es-gt.wordpress.org/" hreflang="es-gt" />
<link rel="alternate" href="https://es-mx.wordpress.org/" hreflang="es-mx" />
<link rel="alternate" href="https://pe.wordpress.org/" hreflang="es-pe" />
<link rel="alternate" href="https://es-pr.wordpress.org/" hreflang="es-pr" />
<link rel="alternate" href="https://ve.wordpress.org/" hreflang="es-ve" />
<link rel="alternate" href="https://et.wordpress.org/" hreflang="et" />
<link rel="alternate" href="https://eu.wordpress.org/" hreflang="eu" />
<link rel="alternate" href="https://fa.wordpress.org/" hreflang="fa" />
<link rel="alternate" href="https://fa-af.wordpress.org/" hreflang="fa-af" />
<link rel="alternate" href="https://fi.wordpress.org/" hreflang="fi" />
<link rel="alternate" href="https://fao.wordpress.org/" hreflang="fo" />
<link rel="alternate" href="https://fr.wordpress.org/" hreflang="fr" />
<link rel="alternate" href="https://fr-be.wordpress.org/" hreflang="fr-be" />
<link rel="alternate" href="https://fr-ca.wordpress.org/" hreflang="fr-ca" />
<link rel="alternate" href="https://frp.wordpress.org/" hreflang="frp" />
<link rel="alternate" href="https://fuc.wordpress.org/" hreflang="fuc" />
<link rel="alternate" href="https://fur.wordpress.org/" hreflang="fur" />
<link rel="alternate" href="https://fy.wordpress.org/" hreflang="fy" />
<link rel="alternate" href="https://ga.wordpress.org/" hreflang="ga" />
<link rel="alternate" href="https://gd.wordpress.org/" hreflang="gd" />
<link rel="alternate" href="https://gl.wordpress.org/" hreflang="gl" />
<link rel="alternate" href="https://gu.wordpress.org/" hreflang="gu" />
<link rel="alternate" href="https://hat.wordpress.org/" hreflang="hat" />
<link rel="alternate" href="https://hau.wordpress.org/" hreflang="hau" />
<link rel="alternate" href="https://haz.wordpress.org/" hreflang="haz" />
<link rel="alternate" href="https://he.wordpress.org/" hreflang="he" />
<link rel="alternate" href="https://hi.wordpress.org/" hreflang="hi" />
<link rel="alternate" href="https://hr.wordpress.org/" hreflang="hr" />
<link rel="alternate" href="https://hu.wordpress.org/" hreflang="hu" />
<link rel="alternate" href="https://hy.wordpress.org/" hreflang="hy" />
<link rel="alternate" href="https://id.wordpress.org/" hreflang="id" />
<link rel="alternate" href="https://ido.wordpress.org/" hreflang="ido" />
<link rel="alternate" href="https://is.wordpress.org/" hreflang="is" />
<link rel="alternate" href="https://it.wordpress.org/" hreflang="it" />
<link rel="alternate" href="https://ja.wordpress.org/" hreflang="ja" />
<link rel="alternate" href="https://jv.wordpress.org/" hreflang="jv" />
<link rel="alternate" href="https://ka.wordpress.org/" hreflang="ka" />
<link rel="alternate" href="https://kab.wordpress.org/" hreflang="kab" />
<link rel="alternate" href="https://kal.wordpress.org/" hreflang="kal" />
<link rel="alternate" href="https://kin.wordpress.org/" hreflang="kin" />
<link rel="alternate" href="https://kk.wordpress.org/" hreflang="kk" />
<link rel="alternate" href="https://km.wordpress.org/" hreflang="km" />
<link rel="alternate" href="https://kn.wordpress.org/" hreflang="kn" />
<link rel="alternate" href="https://ko.wordpress.org/" hreflang="ko" />
<link rel="alternate" href="https://ltz.wordpress.org/" hreflang="lb" />
<link rel="alternate" href="https://li.wordpress.org/" hreflang="li" />
<link rel="alternate" href="https://lin.wordpress.org/" hreflang="lin" />
<link rel="alternate" href="https://lo.wordpress.org/" hreflang="lo" />
<link rel="alternate" href="https://lt.wordpress.org/" hreflang="lt" />
<link rel="alternate" href="https://lv.wordpress.org/" hreflang="lv" />
<link rel="alternate" href="https://me.wordpress.org/" hreflang="me" />
<link rel="alternate" href="https://mg.wordpress.org/" hreflang="mg" />
<link rel="alternate" href="https://mk.wordpress.org/" hreflang="mk" />
<link rel="alternate" href="https://ml.wordpress.org/" hreflang="ml" />
<link rel="alternate" href="https://khk.wordpress.org/" hreflang="mn" />
<link rel="alternate" href="https://mr.wordpress.org/" hreflang="mr" />
<link rel="alternate" href="https://mri.wordpress.org/" hreflang="mri" />
<link rel="alternate" href="https://ms.wordpress.org/" hreflang="ms" />
<link rel="alternate" href="https://mya.wordpress.org/" hreflang="mya" />
<link rel="alternate" href="https://nb.wordpress.org/" hreflang="nb" />
<link rel="alternate" href="https://ne.wordpress.org/" hreflang="ne" />
<link rel="alternate" href="https://nl.wordpress.org/" hreflang="nl" />
<link rel="alternate" href="https://nl-be.wordpress.org/" hreflang="nl-be" />
<link rel="alternate" href="https://nn.wordpress.org/" hreflang="nn" />
<link rel="alternate" href="https://oci.wordpress.org/" hreflang="oci" />
<link rel="alternate" href="https://ory.wordpress.org/" hreflang="ory" />
<link rel="alternate" href="https://os.wordpress.org/" hreflang="os" />
<link rel="alternate" href="https://pan.wordpress.org/" hreflang="pa" />
<link rel="alternate" href="https://pl.wordpress.org/" hreflang="pl" />
<link rel="alternate" href="https://ps.wordpress.org/" hreflang="ps" />
<link rel="alternate" href="https://pt.wordpress.org/" hreflang="pt" />
<link rel="alternate" href="https://br.wordpress.org/" hreflang="pt-br" />
<link rel="alternate" href="https://rhg.wordpress.org/" hreflang="rhg" />
<link rel="alternate" href="https://ro.wordpress.org/" hreflang="ro" />
<link rel="alternate" href="https://roh.wordpress.org/" hreflang="roh" />
<link rel="alternate" href="https://ru.wordpress.org/" hreflang="ru" />
<link rel="alternate" href="https://rup.wordpress.org/" hreflang="rup" />
<link rel="alternate" href="https://sa.wordpress.org/" hreflang="sa-in" />
<link rel="alternate" href="https://sah.wordpress.org/" hreflang="sah" />
<link rel="alternate" href="https://scn.wordpress.org/" hreflang="scn" />
<link rel="alternate" href="https://si.wordpress.org/" hreflang="si" />
<link rel="alternate" href="https://sk.wordpress.org/" hreflang="sk" />
<link rel="alternate" href="https://sl.wordpress.org/" hreflang="sl" />
<link rel="alternate" href="https://sna.wordpress.org/" hreflang="sna" />
<link rel="alternate" href="https://snd.wordpress.org/" hreflang="snd" />
<link rel="alternate" href="https://so.wordpress.org/" hreflang="so" />
<link rel="alternate" href="https://sq.wordpress.org/" hreflang="sq" />
<link rel="alternate" href="https://sq-xk.wordpress.org/" hreflang="sq-xk" />
<link rel="alternate" href="https://sr.wordpress.org/" hreflang="sr" />
<link rel="alternate" href="https://srd.wordpress.org/" hreflang="srd" />
<link rel="alternate" href="https://su.wordpress.org/" hreflang="su" />
<link rel="alternate" href="https://sv.wordpress.org/" hreflang="sv" />
<link rel="alternate" href="https://sw.wordpress.org/" hreflang="sw" />
<link rel="alternate" href="https://syr.wordpress.org/" hreflang="syr" />
<link rel="alternate" href="https://szl.wordpress.org/" hreflang="szl" />
<link rel="alternate" href="https://ta.wordpress.org/" hreflang="ta" />
<link rel="alternate" href="https://ta-lk.wordpress.org/" hreflang="ta-lk" />
<link rel="alternate" href="https://tah.wordpress.org/" hreflang="tah" />
<link rel="alternate" href="https://te.wordpress.org/" hreflang="te" />
<link rel="alternate" href="https://tg.wordpress.org/" hreflang="tg" />
<link rel="alternate" href="https://th.wordpress.org/" hreflang="th" />
<link rel="alternate" href="https://tir.wordpress.org/" hreflang="tir" />
<link rel="alternate" href="https://tl.wordpress.org/" hreflang="tl" />
<link rel="alternate" href="https://tr.wordpress.org/" hreflang="tr" />
<link rel="alternate" href="https://tt.wordpress.org/" hreflang="tt" />
<link rel="alternate" href="https://tuk.wordpress.org/" hreflang="tuk" />
<link rel="alternate" href="https://twd.wordpress.org/" hreflang="twd" />
<link rel="alternate" href="https://tzm.wordpress.org/" hreflang="tzm" />
<link rel="alternate" href="https://ug.wordpress.org/" hreflang="ug" />
<link rel="alternate" href="https://uk.wordpress.org/" hreflang="uk" />
<link rel="alternate" href="https://ur.wordpress.org/" hreflang="ur" />
<link rel="alternate" href="https://uz.wordpress.org/" hreflang="uz" />
<link rel="alternate" href="https://vi.wordpress.org/" hreflang="vi" />
<link rel="alternate" href="https://xho.wordpress.org/" hreflang="xho" />
<link rel="alternate" href="https://yor.wordpress.org/" hreflang="yor" />
<link rel="alternate" href="https://cn.wordpress.org/" hreflang="zh-cn" />
<link rel="alternate" href="https://zh-hk.wordpress.org/" hreflang="zh-hk" />
<link rel="alternate" href="https://tw.wordpress.org/" hreflang="zh-tw" />
<link rel="canonical" href="https://wordpress.org/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Blog Tool, Publishing Platform, and CMS - WordPress" />
<meta property="og:description" content="Open source software which you can use to easily create a beautiful website, blog, or app." />
<meta name="description" content="Open source software which you can use to easily create a beautiful website, blog, or app." />
<meta property="og:url" content="https://wordpress.org/" />
<meta property="og:site_name" content="WordPress" />
<meta property="og:image" content="https://s.w.org/images/home/screen-themes.png?3" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:creator" content="@WordPress" />
<script type="application/ld+json">
{
    "@context":"https://schema.org",
    "@graph":[
        {
            "@type":"Organization",
            "@id":"https://wordpress.org/#organization",
            "url":"https://wordpress.org/",
            "name":"WordPress",
            "logo":{
                "@type":"ImageObject",
                "@id":"https://wordpress.org/#logo",
                "url":"https://s.w.org/style/images/about/WordPress-logotype-wmark.png"
            },
            "sameAs":[
                "https://www.facebook.com/WordPress/",
                "https://twitter.com/WordPress",
                "https://en.wikipedia.org/wiki/WordPress"
            ]
        },
        {
            "@type":"WebSite",
            "@id":"https://wordpress.org/#website",
            "url":"https://wordpress.org/",
            "name":"WordPress.org",
            "publisher":{
                "@id":"https://wordpress.org/#organization"
            }
        },
        {
            "@type":"WebPage",
            "@id":"https://wordpress.org/",
            "url":"https://wordpress.org/",
            "inLanguage":"en",
            "name":"Blog Tool, Publishing Platform, and CMS - WordPress",
            "description":"Open source software which you can use to easily create a beautiful website, blog, or app.",
            "isPartOf":{
                "@id":"https://wordpress.org/#website"
            }
        }
    ]
}
</script>
<script type="text/javascript" src="//s.w.org/wp-includes/js/jquery/jquery.js?v=1.11.1"></script>
<script>document.cookie='devicePixelRatio='+((window.devicePixelRatio === undefined) ? 1 : window.devicePixelRatio)+'; path=/';</script>

</head>


<body id="wordpress-org" >
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P24PF4B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="wporg-header">
	<div class="wrapper">
		<button id="mobile-menu-button" aria-expanded="false"><span class="screen-reader-text">Toggle Menu</span></button>
	<h1><a href="//wordpress.org">WordPress.org</a></h1>				<div id="head-search">
		<form action="//wordpress.org/search/do-search.php" method="get">
			<label for="global-search" class="screen-reader-text">Search WordPress.org for:</label>
			<input id="global-search" class="text" name="search" type="text" value="" maxlength="150" placeholder="Search WordPress.org" />
			<button type="submit" class="button"><span class="screen-reader-text">Submit</span></button>
		</form>
		</div>
				<div style="clear:both"></div>
		
<ul id="wporg-header-menu">
<li class="menu-item"><a href='//wordpress.org/showcase/' title='See some of the sites built on WordPress.'>Showcase</a></li>
<li class="menu-item"><a href='//wordpress.org/themes/' title='Find just the right look for your website.'>Themes</a></li>
<li class="menu-item"><a href='//wordpress.org/plugins/' title='Plugins can extend WordPress to do almost anything you can imagine.'>Plugins</a></li>
<li class="menu-item"><a href='//wordpress.org/mobile/' title='Take your website on the go!'>Mobile</a></li>
<li class="menu-item"><a href='//wordpress.org/support/' title='Forums, documentation, help.'>Support</a><ul class="nav-submenu"><li><a href='//wordpress.org/support/forums/' title='Support and discussion forums.'>Forums</a></li><li><a href='//codex.wordpress.org/Main_Page' title='Documentation, tutorials, best practices.'>Documentation</a></li></ul><div class="uparrow"></div></li>
<li class="menu-item"><a href='//make.wordpress.org/' title='Contribute your knowledge.'>Get Involved</a></li>
<li class="menu-item"><a href='//wordpress.org/about/' title='About the WordPress Organization, and where we&#039;re going.'>About</a></li>
<li class="menu-item"><a href='//wordpress.org/news/' title='Come here for the latest scoop.'>Blog</a></li>
<li class="menu-item"><a href='//wordpress.org/hosting/' title='Find a home for your blog.'>Hosting</a></li>
<li id="download" class="button download-button menu-item"><a href='//wordpress.org/download/' title='Get it. Got it? Good.'>Get WordPress</a></li>
</ul>
		<div style="clear:both"></div>
	</div>
</div>

<div id="download-mobile">
    <div class="wrapper">
        <span class="download-ready">Ready to get started?</span><a class="button download-button" href="//wordpress.org/download/" title="Get it. Got it? Good.">Download WordPress</a>
    </div>
</div>

<!-- feed is cached -->
<div id="home-welcome">
<header>
	<h1>Meet WordPress</h1>
	<p class="subheading">WordPress is open source software you can use to create a beautiful website, blog, or app.</p>
</header>

<div id="lang-guess-wrap"></div>

<section class="intro">
	<p class="subheading">Beautiful designs, powerful features, and the freedom to build anything you want. WordPress is both free and priceless at the same time.</p>
	<div class="screenshots">
		<img src="https://s.w.org/images/home/screen-themes.png?3" class="dashboard" alt="" />
		<img src="https://s.w.org/images/home/iphone-themes.png?3" class="dashboard-mobile" alt="" />
	</div>
</section>

<section class="showcase">
	<h2>Trusted by the Best</h2>
	<p class="subheading">32% of the web uses WordPress, from hobby blogs to the biggest news sites online.</p>
	<div class="collage">

	</div>
	<p class="cta-link"><a href="https://wordpress.org/showcase/">Discover more sites built with WordPress</a>.</p>
</section>

<section class="features">
	<h2>Powerful Features</h2>
	<p class="subheading">Limitless possibilities. What will you create?</p>
	<ul>
		<li>
			<span class="dashicons dashicons-admin-customizer"></span>
			Customizable<br />Designs
		</li>
		<li>
			<span class="dashicons dashicons-welcome-widgets-menus"></span>
			SEO<br />Friendly
		</li>
		<li>
			<span class="dashicons dashicons-smartphone"></span>
			Responsive<br />Mobile Sites
		</li>
		<li>
			<span class="dashicons dashicons-chart-line"></span>
			High<br />Performance
		</li>
		<li>
			<a href="https://wordpress.org/mobile/"><img src="https://s.w.org/images/home/icon-run-blue.svg" alt="" />
				Manage<br />on the Go</a>
		</li>
		<li>
			<span class="dashicons dashicons-lock"></span>
			High<br />Security
		</li>
		<li>
			<span class="dashicons dashicons-images-alt2"></span>
			Powerful<br />Media Management
		</li>
		<li>
			<span class="dashicons dashicons-universal-access"></span>
			Easy and<br />Accessible
		</li>
	</ul>
	<p>Extend WordPress with over 54,000 plugins to help your website meet your needs. Add an online store, galleries, mailing lists, forums, analytics, and <a href="https://wordpress.org/plugins/">much more</a>.</p>
</section>

<section class="community-2">
	<div class="screen"></div>
	<div class="container">
		<h2>Community</h2>
		<p class="subheading">Hundreds of thousands of developers, content creators, and site owners gather at monthly meetups in 436 cities worldwide.</p>
		<a class="button button-secondary button-large" href="https://make.wordpress.org/community/meetups-landing-page">Find a local WordPress community</a>
	</div>
</section>

<section class="get">
	<h2>Get Started with WordPress</h2>
	<p class="subheading">Over 60 million people have chosen WordPress to power the place on the web they call &ldquo;home&rdquo; &mdash; join the family.</p>
	<div class="cta-wrapper">
		<a href="https://wordpress.org/download/" class="button button-primary button-xl">Get WordPress</a>
	</div>
</section>
</div>

<div id="home-below">
	<div class="wrapper">
		<div class="col-2">


<h4><a href="https://wordpress.org/about/swag/">WordPress&nbsp;Swag</a></h4>
<a href="https://wordpress.org/about/swag/"><img width="132" height="177" src="https://s.w.org/images/home/swag_col-1.jpg?1" alt="WordPress Swag" /></a>

		</div>

		<div class="col-4">
			<h4><a href="https://wordpress.org/news/">News From Our Blog</a></h4>

			<h5><a href="https://wordpress.org/news/2019/01/wordpress-5-1-beta-1/">WordPress 5.1 Beta 1</a></h5>
	 	    <p>WordPress 5.1 Beta 1 is now available! This software is still in development,&#160;so we don’t recommend you run it on a production site. Consider setting up a test site to play with the new version. There are two ways to test the WordPress 5.1 beta: try the&#160;WordPress Beta Tester&#160;plugin (you’ll want to select the “bleeding [&#8230;]</p>
		</div>

		<div class="col-4">
			<h4>It&rsquo;s Easy&nbsp;As&hellip;</h4>

			<ol class="steps">
				<li class="one"><span></span><a href="https://wordpress.org/hosting/">Find a Web Host</a> and get great hosting while supporting WordPress at the same&nbsp;time.</li>
				<li class="two"><span></span><a href="https://wordpress.org/download/">Download &amp; Install WordPress</a> with our famous 5-minute&nbsp;installation. Feel like a rock star.</li>
				<li class="three"><span></span><a href="https://developer.wordpress.org">Read the Documentation</a> and become a WordPress expert yourself, impress your friends.</li>

			</ol>
		</div>

		<div class="col-2">
			<h4><a href="/showcase/">WordPress&nbsp;Users</a></h4>
			<ul id="notable-users">
				<li><a href='https://wordpress.org/showcase/the-white-house/'><img src='https://s.w.org/images/notableusers/whitehouse-2x.png' alt='whitehouse' width='130' height='57' /></a></li><li><a href='https://wordpress.org/showcase/blondie/'><img src='https://s.w.org/images/notableusers/blondie-2x.png' alt='blondie' width='130' height='57' /></a></li><li><a href='https://wordpress.org/showcase/themarthablog/'><img src='https://s.w.org/images/notableusers/marthastewart-2x.png' alt='marthastewart' width='130' height='57' /></a></li>			</ul>
			<p id="showcase-link"><a href="https://wordpress.org/showcase/">&hellip; and hundreds more</a></p>
		</div>
	</div>
</div>


<div id="wporg-footer">
	<div class="wrapper">
		<ul>
			<li><a href="//wordpress.org/about/" title="An introduction to the WordPress project">About</a></li>
			<li><a href="//wordpress.org/news/" title="News and Updates">Blog</a></li>
			<li><a href="//wordpress.org/hosting/" title="Recommended web hosting providers">Hosting</a></li>
			<li><a href="https://wordpressfoundation.org/donate/" title="Donate to the WordPress Foundation">Donate</a></li>
		</ul>

		<ul>
			<li><a href="//wordpress.org/support/" title="Forums, documentation, and other resources">Support</a></li>
			<li><a href="//developer.wordpress.org" title="Resources for WordPress developers">Developers</a></li>
			<li><a href="//make.wordpress.org/" title="Give back to WordPress through code, support, translation and more">Get Involved</a></li>
			<li><a href="//learn.wordpress.org/" title="Workshops and training materials">Learn</a></li>
		</ul>

		<ul>
			<li><a href="//wordpress.org/showcase/" title="Some of the best WordPress sites on the Web">Showcase</a></li>
			<li><a href="//wordpress.org/plugins/" title="Add extra functionality to WordPress">Plugins</a></li>
			<li><a href="//wordpress.org/themes/" title="Make your WordPress pretty">Themes</a></li>
			<li><a href="//wordpress.org/ideas/" title="Share your ideas for improving WordPress">Ideas</a></li>
		</ul>

		<ul>
			<li><a href="//central.wordcamp.org/" title="Find a WordPress event near you">WordCamp</a></li>
			<li><a href="//wordpress.tv/" title="Videos, tutorials, and WordCamp sessions">WordPress.TV</a></li>
			<li><a href="//buddypress.org/" title="A set of plugins to transform your WordPress into a social network">BuddyPress</a></li>
			<li><a href="//bbpress.org/" title="Fast, slick forums built on WordPress">bbPress</a></li>
		</ul>

		<ul>
			<li><a href="//wordpress.com/?ref=wporg-footer" title="Hassle-free WordPress hosting">WordPress.com</a></li>
			<li><a href="//ma.tt/" title="Co-founder of WordPress, an example of what WordPress can do">Matt</a></li>
			<li><a href="//wordpress.org/about/privacy/" title="WordPress.org Privacy Policy">Privacy</a></li>
			<li><a href="https://publiccode.eu/" target="_blank">Public Code</a></li>
		</ul>

		<ul>
			<li>
				<iframe title="Follow @WordPress on Twitter" allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=WordPress&amp;show_count=false" style="width:135px; height:20px;"></iframe>
			</li>
			<li>
				<iframe title="Like WordPress on Facebook" src="//www.facebook.com/plugins/like.php?app_id=121415197926116&amp;href=http%3A%2F%2Fwww.facebook.com%2Fwordpress&amp;send=false&amp;layout=button_count&amp;width=135&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=lucida+grande&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:135px; height:21px;" allowTransparency="true"></iframe>
			</li>
		</ul>
	</div>

		<p class="cip cip-image">Code is Poetry.</p>
</div>

<script type="text/javascript">
	/**
	 * Handles toggling the navigation menu for small screens and enables TAB key
	 * navigation support for dropdown menus.
	 */
	( function( $ ) {
		var container, button, menu, links, i, len;

		container = document.getElementById( 'wporg-header' );
		if ( ! container ) {
			return;
		}

		button = container.getElementsByTagName( 'button' )[0];
		if ( 'undefined' === typeof button ) {
			return;
		}

		menu = container.getElementsByTagName( 'ul' )[0];

		// Hide menu toggle button if menu is empty and return early.
		if ( 'undefined' === typeof menu ) {
			button.style.display = 'none';
			return;
		}

		if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
			menu.className += ' nav-menu';
		}

		button.onclick = function() {
			if ( -1 !== menu.className.indexOf( 'toggled' ) ) {
				menu.className = menu.className.replace( ' toggled', '' );
				button.setAttribute( 'aria-expanded', 'false' );
			} else {
				menu.className += ' toggled';
				button.setAttribute( 'aria-expanded', 'true' );
			}
		};

		// Get all the link elements within the menu.
		links = menu.getElementsByTagName( 'a' );

		// Each time a menu link is focused or blurred, toggle focus.
		for ( i = 0, len = links.length; i < len; i++ ) {
			links[i].addEventListener( 'focus', toggleFocus, true );
			links[i].addEventListener( 'blur', toggleFocus, true );
		}

		/**
		 * Sets or removes .focus class on an element.
		 */
		function toggleFocus() {
			var self = this;

			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					if ( -1 !== self.className.indexOf( 'focus' ) ) {
						self.className = self.className.replace( ' focus', '' );
					} else {
						self.className += ' focus';
					}
				}

				self = self.parentElement;
			}
		}

		/**
		 * Toggles `focus` class to allow submenu access on tablets.
		 */
		( function( container ) {
			var touchStartFn, i,
				parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

			if ( 'ontouchstart' in window ) {
				touchStartFn = function( e ) {
					var menuItem = this.parentNode, i;

					if ( ! menuItem.classList.contains( 'focus' ) ) {
						e.preventDefault();
						for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
							if ( menuItem === menuItem.parentNode.children[i] ) {
								continue;
							}
							menuItem.parentNode.children[i].classList.remove( 'focus' );
						}
						menuItem.classList.add( 'focus' );
					} else {
						menuItem.classList.remove( 'focus' );
					}
				};

				for ( i = 0; i < parentLink.length; ++i ) {
					parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
				}
			}
		}( container ) );
	} )();
</script>
<!--  -->
<script type="text/javascript" src="//gravatar.com/js/gprofiles.js"></script>
<script type="text/javascript">
(function($){
	$.ajax({
		url : '/lang-guess/lang-guess-ajax.php?uri=%2F',
		dataType: 'html'
	}).done(function(data) {
		if ( ! data ) return;
		$(document).ready( function() {
			$('#lang-guess-wrap').html(data);
		});
	});
})(jQuery);
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
