<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
	define("access", "yes"); 
	include 'connection.php';

	$ak = $_POST['antikino'];
	$av = $_POST['antikinovip'];
	$vr = $_POST['vrquest'];
	$vk = $_POST['vkcoins'];
	$ht = $_POST['hotel'];
	$bw = $_POST['bowling'];
    $pay = $_POST['payname'];

	$sn = R::load('sitenames', 1);

			if (!$sn) {
				$snames = R::dispense('sitenames');
				$snames->ak = $ak;
				$snames->av = $av;
				$snames->vr = $vr;
				$snames->vk = $vk;
				$snames->ht = $ht;
				$snames->bw = $bw;
                $snames->pay = $pay;
				$id = R::store($snames);
                echo 1;
                exit;
			} else {
				$snames = R::load('sitenames', 1);
				$snames->ak = $ak;
				$snames->av = $av;
				$snames->vr = $vr;
				$snames->vk = $vk;
				$snames->ht = $ht;
				$snames->bw = $bw;
                $snames->pay = $pay;
				$id = R::store($snames);
                echo 1;
                exit;
			}
} else {
    echo 0;
    exit;
}