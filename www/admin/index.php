<?php
	ob_start();
	define("access", "yes");
	session_start();
	require_once 'engine/database/connection.php';
	require_once 'engine/config.php';
	if (!R::testConnection()) {
		echo '
		<style>
			body {
				margin: 0;
				padding: 0;
				background: #1d1d1d;
			}
			h2 {
				color: white;
				font-size: 1em;
				margin: 0;
				padding: 0;
				font-family: "arial";
				text-align: center;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translateX(-50%) translateY(-50%);
			}
		</style>
		<h2>Нет доступа к базе данных. Проверьте данные в файлах конфигурации и повторите попытку.</h2>
		';
	}
	$us = R::load('users', 1);
    $use = R::findOne('users',' login = :login', array(':login' => $_SESSION['user']));
    if (!$_SESSION['user'])
    {
        header("Location: /admin/login/");
    }
    if ($_SESSION['token'] !== $use['password'])
	{   
	    header("Location: /admin/login/");
	}
	if (!$us->login) {
		header("Location: /admin/install/");
	}
	if ($use['isadmin'] != "1") {
        header("Location: /admin/login/");
    }
	$st = R::load('settings', 1);
	$sn = R::load('sitenames', 1);
    $sd = R::load('sitedomains', 1);
    $msg = R::load('msg', 1);
	$rand = mt_rand(0, 80000000);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TapeAdmin > Panel</title>
	<link rel="stylesheet" type="text/css" <?php echo 'href="/admin/engine/css/main.css?'.$rand.'"';?>>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.8.7/dist/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.8.7/dist/sweetalert2.min.css">
	<script type="text/javascript" src="/admin/engine/js/jquery-3.4.0.min.js"></script>
	<script type="text/javascript" <?php echo 'src="/admin/engine/js/main.js?' . $rand . '"'; ?>></script>
    <script src="https://kit.fontawesome.com/c8c58714da.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="57x57" href="img/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
	<link rel="manifest" href="img/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body class="justify-content-center text-center">
	<nav class="navbar navbar-expand-lg navbar-dark bggrad">
		  <a class="navbar-brand" href="#">
		    <img src="/admin/img/logo_white.png" height="50" alt="">
		  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
	    <ul class="navbar-nav">
	      <a class="nav-item nav-link" id="hmain" href="#"><i class="fas fa-home"></i> Главная</a>
	      <a class="nav-item nav-link" id="hlist" href="#"><i class="fas fa-stream"></i> Скам-лист</a>
	      <a class="nav-item nav-link" id="hsettings" href="#"><i class="fas fa-cogs"></i> Настройки</a>
          <a class="nav-item nav-link" id="hspamers" href="#"><i class="fas fa-users-cog"></i> Пользователи</a>
            <a class="nav-item nav-link" id="hwithdraw" href="#"><i class="fas fa-wallet"></i> Выплаты</a>
	    </ul>
		<ul class="navbar-nav">
            <a class="nav-item nav-link" onclick="return false;" style="cursor: default;" href="#"><i class="fas fa-key"></i> Привет, <?php echo $_SESSION['user']; ?></a>
			<div class="text-center">
			  <button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <span class="sr-only"></span>
			  </button>
			  <div style="border-radius: 30px; margin-right: 5px; margin-top: 5px;" class="animate slideIn dropdown-menu dropdown-menu-lg-right bg-light text-center justify-content-center glowin" style="width: 250px; color: rgba(255,255,255,.5);">
			    <h5 style="color: #545454;">Смена пароля</h5>
					<form id="changepass" class="p-4" action="/admin/engine/account/changepass.php" method="POST">
					  <div class="form-group">
					    <label for="oldpass" style="color: #545454;">Старый пароль</label>
					    <input type="password" class="form-control glowin" name="oldpass" placeholder="Старый пароль">
					  </div>
					  <div class="form-group">
					    <label for="newpass" style="color: #545454;">Новый пароль</label>
					    <input type="password" class="form-control glowin" name="newpass" placeholder="Новый пароль">
					  </div>
					  <button type="submit" class="gradbutton" style="font-size: 12px;"><i class="far fa-check-circle"></i> Сохранить</button>
				  	  <div class="dropdown-divider"></div>
				  	  <button type="button" onclick="window.location.href = '/admin/login/logout.php';" class="gradbutton1"><i class="fas fa-sign-out-alt"></i> Выход</button>
					</form>
			  </div>
			</div>
		</ul>
	  </div>
	</nav>
	<div class="main" id="main">
		<p style="color: #666; font-weight: 600;">Цель дня:</p>
		<div class="progress glowin">
		  <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar"
		  <?php
                          $all = R::getAll( 'SELECT SUM(`sum` + `refsum`) as `summary` FROM `logs` WHERE (`statusn` = 1 OR `statusn` = 2) AND `date` >= CURDATE()' );
                          if ($all[0]['summary']) {
                              $one = $all[0]['summary'] * 100;
                              $two = $one/10000;
                              echo 'style="width: '.round($two).'%" aria-valuenow="'.round($two).'"';
                          } else {
                              echo 'style="width: 0%" aria-valuenow="0"';
                          }
		?> aria-valuemin="0" aria-valuemax="100">
		<?php
                        $all = R::getAll( 'SELECT SUM(`sum` + `refsum`) as `summary` FROM `logs` WHERE (`statusn` = 1 OR `statusn` = 2) AND `date` >= CURDATE()' );
                        if ($all[0]['summary']) {
                            echo $all[0]['summary'].' / 10000₽';
                        } else {
                            echo '0₽ / 10000₽';
                        }
		?>			
		</div>
		</div>
		<hr style="content: '';background: linear-gradient(to right, #f5f5f5, #d1d1d1, #f5f5f5);height: 2px;width: 100%;left: 0;">
		<div class="card-deck justify-content-center">
				<div class="card text-white bg-info mb-3" style="width: 100%;">
				  <div class="card-header">Оборот за сегодня</div>
				  <div class="card-body">
				    <h5 class="card-title">
				    <?php
                        $all = R::getAll( 'SELECT SUM(`sum` + `refsum`) as `summary` FROM `logs` WHERE (`statusn` = 1 OR `statusn` = 2) AND `date` >= CURDATE()' );
                        if ($all[0]['summary']) {
                            echo $all[0]['summary'];
                        } else {
                            echo '0';
                        }
			  		?>₽</h5>
				  </div>
				</div>
				<div class="card text-white bg-info mb-3" style="width: 100%;">
				  <div class="card-header">Самый крупный скам за сегодня</div>
				  <div class="card-body">
				    <h5 class="card-title">				    
				    <?php
                        $all = R::getAll( 'SELECT max(`sum`) as `max` FROM `logs` WHERE (`statusn` = 1 OR `statusn` = 2) AND `date` >= CURDATE()' );
                        if ($all[0]['max']) {
                            echo $all[0]['max'];
                        } else {
                            echo '0';
                        }
			  		?>₽</h5>
				  </div>
				</div>
				<div class="card text-white bg-info mb-3" style="width: 100%;">
				  <div class="card-header">Последний скам</div>
				  <div class="card-body">
				    <h5 class="card-title">
				    <?php
                        $all = R::getAll( 'SELECT sum FROM logs WHERE `statusn` = 1 OR `statusn` = 2 ORDER BY id DESC LIMIT 1' );
                        if ($all[0]['sum']) {
                            echo $all[0]['sum'];
                        } else {
                            echo '0';
                        }
                    ?>₽</h5>
				  </div>
				</div>
				<div class="card text-white bg-info mb-3" style="width: 100%;">
				  <div class="card-header">Сумма за все время</div>
				  <div class="card-body">
				    <h5 class="card-title">				    
				    <?php
                        $all = R::getAll( 'SELECT SUM(`sum` + `refsum`) as `summary` FROM `logs` WHERE `statusn` = 1 OR `statusn` = 2' );
                        if ($all[0]['summary']) {
                            echo $all[0]['summary'];
                        } else {
                            echo '0';
                        }
                    ?>₽</h5>
				  </div>
				</div>
		</div>
        <div class="card-deck justify-content-center">
            <div class="card text-white bg-danger mb-3" style="width: 100%;">
                <div class="card-header">Сегодня не оплачено</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php
                        $all = R::getAll( 'SELECT SUM(`sum`) as `summary` FROM `logs` WHERE `date` >= CURDATE() AND `statusn` = 0' );
                        if ($all[0]['summary']) {
                            echo $all[0]['summary'];
                        } else {
                            echo '0';
                        }
                        ?>₽</h5>
                </div>
            </div>
            <div class="card text-white bg-success mb-3" style="width: 100%;">
                <div class="card-header">Сегодня возвратов</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php
                        $all = R::getAll( 'SELECT SUM(`sum`) as `max` FROM `logs` WHERE `date` >= CURDATE() AND `statusn` = 2' );
                        if ($all[0]['max']) {
                            echo $all[0]['max'];
                        } else {
                            echo '0';
                        }
                        ?>₽</h5>
                </div>
            </div>
            <div class="card text-white bg-danger mb-3" style="width: 100%;">
                <div class="card-header">Не оплачено за все время</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php
                        $all = R::getAll( 'SELECT SUM(`sum`) as `sum` FROM `logs` WHERE `statusn` = 0' );
                        if ($all[0]['sum']) {
                            echo $all[0]['sum'];
                        } else {
                            echo '0';
                        }
                        ?>₽</h5>
                </div>
            </div>
            <div class="card text-white bg-success mb-3" style="width: 100%;">
                <div class="card-header">Возвратов за все время</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php
                        $all = R::getAll( 'SELECT SUM(`sum`) as `summary` FROM `logs` WHERE `statusn` = 2 ');
                        if ($all[0]['summary']) {
                            echo $all[0]['summary'];
                        } else {
                            echo '0';
                        }
                        ?>₽</h5>
                </div>
            </div>
        </div>
        <hr style="content: '';background: linear-gradient(to right, #f5f5f5, #d1d1d1, #f5f5f5);height: 2px;width: 100%;left: 0;">
        <div class="card-deck">
            <div class="card text-center bg-light">
                <div class="card-header" style="color: #545454;">
                    Сообщение от админа
                </div>
                <div class="card-body">
                    <form class="form-inline justify-content-center" id="message" action="/admin/engine/database/message.php"
                          method="post">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" name="message" class="form-control glowin" id="message"
                                   placeholder="Сообщение.."
                                <?php
                                $mesg = $msg->text;
                                echo 'value="'.$mesg.'"';
                                ?>
                                   required>
                        </div>
                        <button type="submit" name="submit" class="gradbutton mb-2">
                            <i class="far fa-check-circle"></i> Изменить
                        </button>
                    </form>
                </div>
            </div>
        </div>
	</div>
	<div class="main" id="scamlist" style="display: none;">
		<div class="btn-group" role="group" style="margin-bottom: 10px;">
			<form id="dellast" action="/admin/engine/database/dellast.php" method="post">
                <button type="submit" name="dellast" id="dellast" class="gradbutton"><i class="far fa-trash-alt"></i> Удалить последний лог</button>
			</form>
			<form id="delall" action="/admin/engine/database/delall.php" method="post">
			  	<button type="submit" name="delall" id="delall" class="gradbutton"><i class="fas fa-trash-alt"></i> Удалить все логи</button>
			</form>
		</div>
		<div class="table-responsive">
			<table class="table table-striped bg-white">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
                  <th scope="col">Сайт</th>
			      <th scope="col">Сумма</th>
                  <th scope="col">Сумма возврата</th>
			      <th scope="col">Дата</th>
			      <th scope="col">Номер бронирования</th>
                  <th scope="col">Карта</th>
                  <th scope="col">Статус</th>
                  <th scope="col">Спамер</th>
			    </tr>
			  </thead>
			  <tbody>
			 <?php
             $rows = R::getAll( 'SELECT id, site, sum, refsum, dating, comment, card, status, statusn, spamer FROM logs ORDER BY id DESC' );
             foreach ($rows as $all) {
                 if ($all["statusn"] == 0) {
                     echo "<tr class='bg-danger'><td style='color: white;'>" . $all["id"] . "</td><td style='color: white;'>" . $all["site"] . "</td><td style='color: white;'>" . $all["sum"] . "₽</td><td style='color: white;'>" . $all["refsum"] . "₽</td><td style='color: white;'>" . $all["dating"] . "</td><td style='color: white;'>" . $all["comment"] . "</td><td style='color: white;'>" . $all["card"] . "</td><td style='color: white;'>" . $all["status"] . "</td><td style='color: white;'>" . $all["spamer"] . "</td></tr>";
                 }
                 if ($all["statusn"] == 1) {
                     echo "<tr class='bg-success'><td style='color: white;'>" . $all["id"] . "</td><td style='color: white;'>" . $all["site"] . "</td><td style='color: white;'>" . $all["sum"] . "₽</td><td style='color: white;'>" . $all["refsum"] . "₽</td><td style='color: white;'>" . $all["dating"] . "</td><td style='color: white;'>" . $all["comment"] . "</td><td style='color: white;'>" . $all["card"] . "</td><td style='color: white;'>" . $all["status"] . "</td><td style='color: white;'>" . $all["spamer"] . "</td></tr>";
                 }
                 if ($all["statusn"] == 2) {
                     echo "<tr class='bg-primary'><td style='color: white;'>" . $all["id"] . "</td><td style='color: white;'>" . $all["site"] . "</td><td style='color: white;'>" . $all["sum"] . "₽</td><td style='color: white;'>" . $all["refsum"] . "₽</td><td style='color: white;'>" . $all["dating"] . "</td><td style='color: white;'>" . $all["comment"] . "</td><td style='color: white;'>" . $all["card"] . "</td><td style='color: white;'>" . $all["status"] . "</td><td style='color: white;'>" . $all["spamer"] . "</td></tr>";
                 }
             }
             echo "</table>";
			?>
			  </tbody>
			</table>
		</div>
	</div>
	<div class="main" id="settings" style="display: none;">
		<div class="card-deck">
			<div class="card text-center bg-light">
			  <div class="card-header" style="color: #545454;">
			    Платежные данные
			  </div>
			  <div class="card-body">
			  	<form class="form-inline justify-content-center" id="yandexsettings" action="/admin/engine/database/yandex.php" method="post">
				  <div class="form-group mx-sm-3 mb-2">
				    <input type="text" name="ynumber" class="form-control glowin" id="ynumber" placeholder="Номер карты"
				    <?php
						$number = $st->number;
						echo 'value="'.$number.'"';
				    ?>
				    required>
				  </div>
				  <button type="submit" name="submit" class="gradbutton mb-2">
                      <i class="far fa-check-circle"></i> Сохранить <div class="spinner-border spinner-border-sm" role="status" id="sub2" style="width: 20px; height: 20px; display: none;"></div>
				  </button>
				</form>
			  </div>
			</div>
		</div>
		<hr style="content: '';background: linear-gradient(to right, #f5f5f5, #d1d1d1, #f5f5f5);height: 2px;width: 100%;left: 0;">
        <div class="card-deck">
            <div class="card text-center bg-light">
                <div class="card-header" style="color: #545454;">
                    Названия сайтов
                </div>
                <div class="card-body">
                    <form id="setnames" action="/admin/engine/database/setnames.php" method="post">
                            <div class="form-group" style="width: 100%;">
                                <label for="payname" style="color: #545454; font-weight: 600;">Название платежной системы</label>
                                <input type="text" name="payname" class="form-control glowin" id="payname" placeholder="Название платежной системы"
                                    <?php
                                    $sname = $sn->pay;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="antikino" style="color: #545454; font-weight: 600;">Антикино</label>
                                <input type="text" name="antikino" class="form-control glowin" id="antikino" placeholder="Антикино"
                                    <?php
                                    $sname = $sn->ak;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="antikinovip" style="color: #545454; font-weight: 600;">Антикино VIP</label>
                                <input type="text" name="antikinovip" class="form-control glowin" id="antikinovip" placeholder="Антикино VIP"
                                    <?php
                                    $sname = $sn->av;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="vrquest" style="color: #545454; font-weight: 600;">VR-Квест</label>
                                <input type="text" name="vrquest" class="form-control glowin" id="vrquest" placeholder="VR-Квест"
                                    <?php
                                    $sname = $sn->vr;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="vkcoins" style="color: #545454; font-weight: 600;">VK-Коины</label>
                                <input type="text" name="vkcoins" class="form-control glowin" id="vkcoins" placeholder="VK-Коины"
                                    <?php
                                    $sname = $sn->vk;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="hotel" style="color: #545454; font-weight: 600;">Отель</label>
                                <input type="text" name="hotel" class="form-control glowin" id="hotel" placeholder="Отель"
                                    <?php
                                    $sname = $sn->ht;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="bowling" style="color: #545454; font-weight: 600;">Боулинг</label>
                                <input type="text" name="bowling" class="form-control glowin" id="bowling" placeholder="Боулинг"
                                    <?php
                                    $sname = $sn->bw;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                        </div>
                        <button type="submit" name="submit" id="yep" class="gradbutton mb-2">
                            <i class="far fa-check-circle"></i> Сохранить <div class="spinner-border spinner-border-sm" role="status" id="sub3" style="width: 20px; height: 20px; display: none;"></div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <hr style="content: '';background: linear-gradient(to right, #f5f5f5, #d1d1d1, #f5f5f5);height: 2px;width: 100%;left: 0;">
        <div class="card-deck">
            <div class="card text-center bg-light">
                <div class="card-header" style="color: #545454;">
                    Доменные имена
                </div>
                <div class="card-body">
                    <form id="setdomains" action="/admin/engine/database/setdomains.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="antikino" style="color: #545454; font-weight: 600;">Антикино</label>
                                <input type="url" name="antikino" class="form-control glowin" id="antikino" placeholder="Антикино"
                                    <?php
                                    $sname = $sd->ak;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="antikinovip" style="color: #545454; font-weight: 600;">Антикино VIP</label>
                                <input type="url" name="antikinovip" class="form-control glowin" id="antikinovip" placeholder="Антикино VIP"
                                    <?php
                                    $sname = $sd->av;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="vrquest" style="color: #545454; font-weight: 600;">VR-Квест</label>
                                <input type="url" name="vrquest" class="form-control glowin" id="vrquest" placeholder="VR-Квест"
                                    <?php
                                    $sname = $sd->vr;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="vkcoins" style="color: #545454; font-weight: 600;">VK-Коины</label>
                                <input type="url" name="vkcoins" class="form-control glowin" id="vkcoins" placeholder="VK-Коины"
                                    <?php
                                    $sname = $sd->vk;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="hotel" style="color: #545454; font-weight: 600;">Отель</label>
                                <input type="url" name="hotel" class="form-control glowin" id="hotel" placeholder="Отель"
                                    <?php
                                    $sname = $sd->ht;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="bowling" style="color: #545454; font-weight: 600;">Боулинг</label>
                                <input type="url" name="bowling" class="form-control glowin" id="bowling" placeholder="Боулинг"
                                    <?php
                                    $sname = $sd->bw;
                                    echo 'value="'.$sname.'"';
                                    ?>
                                       required>
                            </div>
                        </div>
                        <button type="submit" name="submit" id="yep" class="gradbutton mb-2">
                            <i class="far fa-check-circle"></i> Сохранить <div class="spinner-border spinner-border-sm" role="status" id="sub3" style="width: 20px; height: 20px; display: none;"></div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
	</div>
    <div class="main" id="spamers" style="display: none;">
        <div class="card-deck">
            <div class="card text-center bg-light">
                <div class="card-header" style="color: #545454;">
                    Зарегистрировать пользователя
                </div>
                <div class="card-body">
                    <form class="form-inline justify-content-center" id="adduser" action="/admin/engine/database/adduser.php" method="post" autocomplete="off">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" name="login" class="form-control glowin" id="login" placeholder="Логин" required>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="password" name="password" class="form-control glowin" id="password" placeholder="Пароль" required>
                        </div>
                        <div class="custom-control custom-checkbox mx-sm-3 mb-2">
                            <input type="checkbox" name="isadmin" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Администратор</label>
                        </div>
                        <button type="submit" name="submit" class="gradbutton mb-2">
                            <i class="far fa-check-circle"></i> Зарегистрировать <div class="spinner-border spinner-border-sm" role="status" id="sub2" style="width: 20px; height: 20px; display: none;"></div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <hr style="content: '';background: linear-gradient(to right, #f5f5f5, #d1d1d1, #f5f5f5);height: 2px;width: 100%;left: 0;">
        <div class="card-deck">
            <div class="card text-center bg-light">
                <div class="card-header" style="color: #545454;">
                    Список пользователей
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="userstable" class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Логин</th>
                                <th scope="col">Баланс</th>
                                <th scope="col">Группа</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody class="tbodyusers">
                            <?php
                            $rows = R::getAll( 'SELECT login, scammed, isadmin, id FROM users ORDER BY id DESC' );
                            foreach ($rows as $all) {
                                if($all["isadmin"] != 1) {
                                    $groupuser = "Спамер";
                                    global $groupuser;
                                } else if($all["isadmin"] = 1) {
                                    $groupuser = "Администратор";
                                    global $groupuser;
                                }
                                    echo "<tr id=\"spamerlist\">
                                    <td style='line-height: 60px;'>" . $all["login"] . "</td>
                                    <td style='line-height: 60px;'>" . $all["scammed"] . "₽</td>
                                    <td style='line-height: 60px;'>" . $groupuser . "</td>
                                    <td><button type=\"button\" id=\"id_" . $all["id"] . "\" name=\"submit\" class=\"remus gradbutton2 mb-2\"><i class=\"far fa-trash-alt\"></i> Удалить</button></td>
                                    </tr>";
                            }
                            echo "</table>";
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main" id="withdraw" style="display: none;">
        <div class="card-deck">
            <div class="card text-center bg-light">
                <div class="card-header" style="color: #545454;">
                    Список выплат
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="userstable" class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Спамер</th>
                                <th scope="col">Сумма</th>
                                <th scope="col">Дата</th>
                                <th scope="col">Кошелек</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $rows = R::getAll( 'SELECT * FROM withdrawals ORDER BY id DESC' );
                            foreach ($rows as $all) {
                                echo "<tr>
                                    <td style='line-height: 60px;'>" . $all["order"] . "</td>
                                    <td style='line-height: 60px;'>" . $all["user"] . "</td>
                                    <td style='line-height: 60px;'>" . $all["sum"] . "₽</td>
                                    <td style='line-height: 60px;'>" . $all["date"] . "</td>
                                    <td style='line-height: 60px;'>" . $all["qiwi"] . "</td>
                                    </tr>";
                            }
                            echo "</table>";
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script type="text/javascript">
		$( "#hmain" ).click(function() {
		  $( "#scamlist" ).hide();
		  $( "#settings" ).hide();
		  $( "#spamers" ).hide();
            $( "#withdraw" ).hide();
		  $( "#main" ).show();
		});

		$( "#hlist" ).click(function() {
		  $( "#main" ).hide();
		  $( "#settings" ).hide();
		  $( "#spamers" ).hide();
            $( "#withdraw" ).hide();
		  $( "#scamlist" ).show();
		});

		$( "#hsettings" ).click(function() {
		  $( "#main" ).hide();
		  $( "#scamlist" ).hide();
		  $( "#spamers" ).hide();
            $( "#withdraw" ).hide();
		  $( "#settings" ).show();
		});

        $( "#hspamers" ).click(function() {
          $( "#main" ).hide();
          $( "#scamlist" ).hide();
          $( "#settings" ).hide();
            $( "#withdraw" ).hide();
          $( "#spamers" ).show();
        });
        $( "#hwithdraw" ).click(function() {
            $( "#main" ).hide();
            $( "#scamlist" ).hide();
            $( "#settings" ).hide();
            $( "#spamers" ).hide();
            $( "#withdraw" ).show();
        });
	</script>
</body>
</html>