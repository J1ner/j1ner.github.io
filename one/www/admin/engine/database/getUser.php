<?php
if ( isset( $_GET['secret'] ) && $_GET['secret'] ) {
	define("access", "yes");
	include "connection.php";
	$settings = R::load('settings', 1);
	echo $settings->number;
}
