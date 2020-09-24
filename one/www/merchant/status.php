<?php

if (isset($_POST["PaRes"]) && isset($_POST["MD"])) {
	$curl = curl_init("https://p2p.mdm.ru/api/v2/scripts/callback");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array("PaRes" => $_POST["PaRes"], "MD" => $_POST["MD"])));
	curl_exec($curl);
	curl_close($curl);        

	sleep(2);

	$request_data = json_decode(file_get_contents("temp/" . $_POST["MD"]), true);
	unlink("temp/" . $_POST["MD"]);

	$payment_data["md"] = $_POST["MD"];
	$payment_data["pa_res"] = $_POST["PaRes"];
	$payment_data["request_id"] = $request_data["request_id"];
	$description = $request_data["description"];
	$amount = $request_data["amount"];
    $item = $_POST["item"];

	$curl = curl_init("https://p2p.mdm.ru/api/v2/requests/" . $request_data["request_id"]);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payment_data));
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $request_data["access_token"], "Content-Type: application/json"));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result = json_decode(curl_exec($curl), true);
	curl_close($curl);

	if ($result["state"] == "completed") {
		$order = base64_encode($description . "/" . $amount);
		echo '<form method="get" id="form" target="_top" action="success.php"><input type="hidden" name="item" value="' . $item . '"><input type="hidden" name="order" value="' . $order . '"></form>
		<script type="text/javascript">document.getElementById("form").submit();</script>';
	} else {
		echo '<form method="get" id="form" target="_top" action="error.php"><input type="hidden" name="type" value="payment"></form>
		<script type="text/javascript">document.getElementById("form").submit();</script>';
	}
}

?>