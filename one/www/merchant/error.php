<?php
define("access", "yes");
include(__DIR__ . '/../admin/engine/database/connection.php');
$sn = R::load('sitenames', 1);
$type = $_GET["type"];

if ($type == "payment") {
	$description = "Возникла ошибка платежной системы. Попробуйте повторить попытку позже.";
} else if ($type == "form") {
	$description = "Серверу не удалось обработать форму. Проверьте введенные данные и повторите платеж.";
} else if ($type == "prop") {
	$description = "Не обнаружен платежный модуль. Свяжитесь с Администратором сайта для решения проблемы.";
} else {
	$description = "Произошла неизвестная ошибка системы. Свяжитесь с Администратором сайта для решения проблемы.";
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
						<p class="heading">Ошибка при оплате!</p>
						<p class="sub-heading"><?php echo $description; ?></p>
					</div>
				</form>

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