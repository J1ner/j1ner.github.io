<?php
include_once('config.php');
$name = $_POST['Name'];
$sum = $_POST['summaryam'];
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
header("Location: ".$domain."/merchant/method.php?item=Оплата [".$sitename."]. Имя - ".$name."&amount=".$sum);