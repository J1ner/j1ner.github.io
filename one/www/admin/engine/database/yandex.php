<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
	define("access", "yes");
	include 'connection.php';

	$number = $_POST['ynumber'];$token = $_POST['token'];

	$set = R::load('settings', 1);

	if (!$set) {
		$settings = R::dispense('settings');

		$settings->number = $number;

		$id = R::store($settings);
        echo 1;
        exit;
        R::exec('ALTER TABLE `settings` MODIFY COLUMN `number` BIGINT');
	} else {
			$settings = R::load('settings', 1);
            R::exec('ALTER TABLE `settings` MODIFY COLUMN `number` BIGINT');
			$settings->number = $number;

			$id = R::store($settings);
        echo 1;
        exit;
	}
} else {
    echo 0;
    exit;
}