<?php 
ob_start();
session_start();
define("access", "yes");
require_once(__DIR__ . '/../engine/database/connection.php');
$us = R::load('users', 1);
if (!$us->login) {
	header("Location: /admin/install/");
}
if ($_SESSION['token'] == $us->password)
{   
	header("Location: /admin/");
}
$rand = mt_rand(0, 80000000);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TapeAdmin > Авторизация</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" <?php echo 'href="/admin/engine/css/login.css?'.$rand.'"';?>>
	<script type="text/javascript" src="/admin/engine/js/jquery-3.4.0.min.js"></script>
    <script src="https://kit.fontawesome.com/c8c58714da.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script type="text/javascript" src="/admin/engine/js/login.js?1v41234sa12f2"></script>
	<link rel="apple-touch-icon" sizes="57x57" href="/admin/img/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/admin/img/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/admin/img/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/admin/img/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/admin/img/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/admin/img/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/admin/img/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/admin/img/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/admin/img/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/admin/img/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/admin/img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/admin/img/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/admin/img/icons/favicon-16x16.png">
	<link rel="manifest" href="/admin/img/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/img/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body class="text-center">
    <form class="form-signin" method="POST" id="login" action="../engine/account/login.php" autocomplete="off">
	  <img class="mb-4" src="/admin/img/logo_white.png" style="height: 72px;">
	  <label for="inputEmail" class="sr-only">Имя пользователя</label>
	  <input type="text" class="form-control glowin" name="login" placeholder="Имя пользователя" required autocomplete="off">
	  <label for="inputPassword" class="sr-only">Пароль</label>
	  <input type="password" name="password" class="form-control glowin" placeholder="Пароль" required autocomplete="off">
	  <button class="gradbutton" type="submit" id="log" name="do_login"><i class="fas fa-key"></i> Войти</button>
	  <p style="color: white" class="mt-5 mb-3">&copy; Developed by <a href="https://tele.click/tapeadmin">tape</a></p>
	</form>
</body>
</html>