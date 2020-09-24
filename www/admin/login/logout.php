<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['token']);
echo "<script>document.location.replace('/admin/login');</script>";