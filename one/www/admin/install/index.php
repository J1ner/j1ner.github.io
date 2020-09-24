<?php 
ob_start();
define("access", "yes"); 
require_once(__DIR__ . '/../engine/database/connection.php');
$us = R::load('users', 1);
if ($us->login) {
    header("Location: /admin/");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TapeAdmin > Настройка</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript" src="/admin/engine/js/jquery-3.4.0.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="57x57" href="/admin/img/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/admin/img/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/admin/img/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/admin/img/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/admin/img/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/admin/img/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/admin/img/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/admin/img/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/admin/img/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/admin/img/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/admin/img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/admin/img/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/admin/img/icons/favicon-16x16.png">
	<link rel="manifest" href="/admin/img/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/admin/img/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<style type="text/css">
		* {
		  scroll-behavior: smooth;
		  transition: 0.3s all;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		}

		  input, input:before, input:after {
		      -webkit-user-select: initial;
		      -khtml-user-select: initial;
		      -moz-user-select: initial;
		      -ms-user-select: initial;
		      user-select: initial;
		     } 

		html,
		body {
		  height: 100%;
		}

		body {
		  display: -ms-flexbox;
		  display: flex;
		  -ms-flex-align: center;
		  align-items: center;
		  padding-top: 40px;
		  padding-bottom: 40px;
            background: linear-gradient(270deg, #38427d, #6d387d, #7d3844);
            background-size: 600% 600%;

            -webkit-animation: AnimationName 30s ease infinite;
            -moz-animation: AnimationName 30s ease infinite;
            animation: AnimationName 30s ease infinite;
		}

		.form-signin {
		  width: 100%;
		  max-width: 330px;
		  padding: 15px;
		  margin: auto;
		}

		.form-control {
		  color: #b4b4b4;
		}
		.form-signin .checkbox {
		  font-weight: 400;
		}
		.form-signin .form-control {
		  border: 0;
		  position: relative;
		  box-sizing: border-box;
		  height: auto;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		  color: #b4b4b4;
		}
		.form-signin input[type="text"] {
		  border: 0;
		  margin-bottom: 10px;
		}
		.form-signin input[type="password"] {
		  border: 0;
		  margin-bottom: 10px;
		}

		      .bd-placeholder-img {
		        font-size: 1.125rem;
		        text-anchor: middle;
		        -webkit-user-select: none;
		        -moz-user-select: none;
		        -ms-user-select: none;
		        user-select: none;
		      }

		      @media (min-width: 768px) {
		        .bd-placeholder-img-lg {
		          font-size: 3.5rem;
		        }
		      }

        @-webkit-keyframes AnimationName {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @-moz-keyframes AnimationName {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @keyframes AnimationName {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }

        .gradbutton {
            border: 0 !important;
            background-color: #002878;
            background-image: linear-gradient(45deg, #009CFF 0%, #00F0F4 50%, #009CFF 100%);
            background-position: 100% 0;
            background-size: 200% 200%;
            color: white;
            border-radius: 50px;
            padding: 12px 48px;
            font-family: 'Nunito', sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            margin-right: 3px;
            margin-left: 3px;
            box-shadow: 0 0 32px 0 rgba(0, 40, 120, .35);
            transition: all 0.5s ease;
        }

        .glowin {
            box-shadow: 0 0 20px #0003 !important;
        }

        .form-control {
            border: 0px solid #ced4da !important;
            border-radius: 15px !important;
        }
	</style>
	<script>
		$(document).ready(function() {
		    $("#install").submit(function(event) {
		        event.preventDefault();
		        $.ajax({
		            type: $(this).attr('method'),
		            url: $(this).attr('action'),
		            data: new FormData(this),
		            contentType: false,
		            cache: false,
		            processData: false,
		            success: function() {
		                $('#submitinstall').addClass('animated flash');
		                setTimeout(function () {
		                  $('#submitinstall').removeClass('animated flash');
		                }, 2000);

		                setTimeout(function(){ window.location.href = "/admin/"; },2000);
		            },
		            error: function() {
		                $('#submitinstall').addClass('animated shake');
		                setTimeout(function () {
		                  $('#submitinstall').removeClass('animated shake');
		                }, 2000);
		            }
		        });
		    });

		});
	</script>
</head>
<body class="text-center">
    <form class="form-signin" method="POST" id="install" action="install.php" autocomplete="off">
	  <img class="mb-4" src="/admin/img/logo_white.png" style="height: 72px;">
	  <h5 style="color: lightgray;">Данные авторизации</h5>
	  <label for="login" class="sr-only">Имя пользователя</label>
	  <input type="text" class="form-control glowin" name="login" placeholder="Имя пользователя" required>
	  <label for="password" class="sr-only">Пароль</label>
	  <input type="password" name="password" class="form-control glowin" placeholder="Пароль" required>
	  <h5 style="color: lightgray;">Платежные данные</h5>
	  <label for="cardnumber" class="sr-only">Номер карты</label>
	  <input type="text" class="form-control glowin" name="cardnumber" placeholder="Номер карты" required>
	  <h5 style="color: lightgray;">Названия сайтов</h5>
	  <label for="pay" class="sr-only">Платежная система</label>
	  <input type="text" class="form-control glowin" name="pay" placeholder="Платежная система" required>
	  <label for="antikino" class="sr-only">Антикино</label>
	  <input type="text" class="form-control glowin" name="antikino" placeholder="Антикино" required>
	  <label for="antikinovip" class="sr-only">Антикино VIP</label>
	  <input type="text" class="form-control glowin" name="antikinovip" placeholder="Антикино VIP" required>
	  <label for="vrquest" class="sr-only">VR-Квест</label>
	  <input type="text" class="form-control glowin" name="vrquest" placeholder="VR-Квест" required>
	  <label for="vkcoins" class="sr-only">VK-Коины</label>
	  <input type="text" class="form-control glowin" name="vkcoins" placeholder="VK-Коины" required>
	  <label for="hotel" class="sr-only">Отель</label>
	  <input type="text" class="form-control glowin" name="hotel" placeholder="Отель" required>
	  <label for="bowling" class="sr-only">Боулинг</label>
	  <input type="text" class="form-control glowin" name="bowling" placeholder="Боулинг" required>
	  <button class="gradbutton" type="submit" id="submitinstall" name="submitinstall">Установить</button>
	  <p class="mt-5 mb-3" style="color: white;">&copy; Developed by <a href="https://tele.click/tapeadmin">tape</a></p>
	</form>
</body>
</html>