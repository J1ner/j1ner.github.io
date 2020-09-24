<?php
define("access", "yes");
require_once "connection.php";
$sn = R::load('sitenames', 1);
if ( isset( $_GET['bowling'] ) && $_GET['bowling'] ) {
	echo $sn->bw;
}
if ( isset( $_GET['hotel'] ) && $_GET['hotel'] ) {
	echo $sn->ht;
}
if ( isset( $_GET['vk'] ) && $_GET['vk'] ) {
	echo $sn->vk;
}
if ( isset( $_GET['vr'] ) && $_GET['vr'] ) {
	echo $sn->vr;
}
if ( isset( $_GET['antikinovip'] ) && $_GET['antikinovip'] ) {
	echo $sn->av;
}
if ( isset( $_GET['antikino'] ) && $_GET['antikino'] ) {
	echo $sn->ak;
}
