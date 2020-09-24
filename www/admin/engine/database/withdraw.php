<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    define("access", "yes");
    include 'connection.php';
    $number = $_POST['qiwi'];
    $sum = $_POST['sum'];
    $user = $_POST['user'];
    $lg = R::getAll('SELECT * FROM users WHERE login = "'.$user.'"');
    if($sum <= $lg[0]['scammed'] ) {
        $rand = rand(00000000, 99999999);
        require_once 'Qiwi.php';
        include '../config.php';
        $qiwi = new Qiwi(QIWI, QIWI_API);
        $sendMoney = $qiwi->sendMoneyToQiwi([
            'id' => 'time() + 10 * 5',
            'sum' => [
                'amount'   => $sum,
                'currency' => '643'
            ],
            'paymentMethod' => [
                'type' => 'Account',
                'accountId' => '643'
            ],
            'comment' => 'ID выплаты '.$rand,
            'fields' => [
                'account' => '+'.$number
            ]
        ]);
        $take = $lg[0]['scammed']-$sum;
        R::exec('UPDATE users SET scammed = '.$take.' WHERE login = "'.$user.'"');
        $hi = R::dispense('withdrawals');
        $hi->order = $rand;
        $hi->sum = $sum;
        $hi->date = date('Y/m/d H:i');
        $hi->qiwi = $number;
        $hi->user = $user;
        R::store($hi);
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