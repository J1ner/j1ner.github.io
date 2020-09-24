<?php
ob_start();
define("access", "yes");
session_start();
require "../database/connection.php";

$users = R::load('users', 1);

if ($users) {
    $count = count(R::find('users', 'login LIKE :login', array(':login' => $_POST['login'])));
    if ($count !== 0) {
        $us = R::findOne('users',' login = :login', array(':login' => $_POST['login']));
        if (md5(md5($_POST['password'])) == $us['password']) {
                $_SESSION['token'] = md5(md5($_POST['password']));
                $_SESSION['user'] = $_POST['login'];
                echo 1;
                exit;
        } else {
            echo 0;
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