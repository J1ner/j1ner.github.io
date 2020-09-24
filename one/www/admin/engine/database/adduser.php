<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    define("access", "yes");
    include 'connection.php';
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $count = count(R::find('users', 'login LIKE :login', array(':login' => $login)));
    if($count === 0){
        if(isset($_POST['isadmin'])) {
            $users = R::dispense('users');
            $users->login = $login;
            $users->password = md5(md5($pass));
            $users->scammed = 0;
            $users->isadmin = 1;
            R::store($users);
            echo 1;
            exit;
        } else {
            $users = R::dispense('users');
            $users->login = $login;
            $users->password = md5(md5($pass));
            $users->scammed = 0;
            $users->isadmin = 0;
            R::store($users);
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