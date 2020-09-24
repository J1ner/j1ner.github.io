<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') { 
	define("access", "yes");
	include 'connection.php';
	R::exec('DELETE  FROM `logs` ORDER BY `id` DESC LIMIT 1');
    echo 1;
    exit;
} else {
    echo 0;
    exit;
}