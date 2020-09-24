<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    define("access", "yes");
    include 'connection.php';
    include '../config.php';
    $number = $_POST['keepnumber'];
    $user = $_POST['user'];
    $use = R::getAll('SELECT * FROM users WHERE login = "'.$user.'"');
    $lg = R::getAll('SELECT * FROM logs WHERE comment = '.$number.' AND spamer = "Не найден"');
    if ($lg[0]['comment']) {
        if ($lg[0]['statusn'] == 0) {
            echo 0;
            exit;
        }
        if ($lg[0]['statusn'] == 1) {
            R::exec('UPDATE logs SET spamer = "'.$user.'" WHERE comment = '.$number);
            $sum = $lg[0]['sum'] * (PERCENT/100);
            $bal = $use[0]['scammed'];
            $add = $bal + $sum;
            R::exec('UPDATE users SET scammed = '.$add.' WHERE login = "'.$user.'"');
            echo 1;
            exit;
        }
        if ($lg[0]['statusn'] == 2) {
            R::exec('UPDATE logs SET spamer = "'.$user.'" WHERE comment = '.$number);
            $sum = $lg[0]['sum'] * (PERCENT/100) + $lg[0]['refsum'] * (PERCENT_REFUND/100);
            $bal = $use[0]['scammed'];
            $add = $bal + $sum;
            R::exec('UPDATE users SET scammed = '.$add.' WHERE login = "'.$user.'"');
            echo 1;
            exit;
        }
    } else {
        echo 0;
        exit;
    }
} else {
    echo 0;
    exit;
}