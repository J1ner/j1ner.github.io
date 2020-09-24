<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    define("access", "yes");
    include 'connection.php';

    $id = $_POST['id'];

    R::exec("DELETE FROM users WHERE id = ".$id);

    echo 1;
    exit;
} else {
    echo 0;
    exit;
}