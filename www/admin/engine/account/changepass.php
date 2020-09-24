<?php
define("access", "yes");
session_start();
require "../database/connection.php";

$old = $_POST['oldpass'];
$new = $_POST['newpass'];

$users = R::load('users', 1);

if ($users) {
	$password = $users->password;
	if ($password == md5(md5($old))) {
		$us = R::load('users', 1);
		$us->password = md5(md5($new));
		R::store($us);
		$_SESSION['token'] = md5(md5($new));
	} else {
		die(header("HTTP/1.0 404 Not Found"));
	}
} else {
	die(header("HTTP/1.0 404 Not Found"));
}