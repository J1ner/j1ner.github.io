<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    define("access", "yes");
    include 'connection.php';

    $sn = R::load('msg', 1);

    if (!$sn) {
        $msg = R::dispense('msg');
        $msg->text = $_POST['message'];
        $id = R::store($msg);
        echo 1;
        exit;
    } else {
        $msg = R::load('msg', 1);
        $msg->text = $_POST['message'];
        $id = R::store($msg);
        echo 1;
        exit;
    }
} else {
    echo 0;
    exit;
}