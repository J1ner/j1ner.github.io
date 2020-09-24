<?php

include(__DIR__ . '/../admin/engine/config.php');
function send_log($message, $to) {
	$chat_id = CHAT_ADMIN;
	$group_id = CHAT_ADMIN;

	if ($to == "group") {
		$url = "https://cdn.cloudhold.host/api/telegram/send/?chat=" . $group_id . "&from=asknotify&message=" . urlencode($message);

            	$curl = curl_init();
            	curl_setopt($curl, CURLOPT_URL, $url);
            	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1; rv:2.0.1) Gecko/20100101 Firefox/4.0.1");
            	curl_exec($curl);
            	curl_close($curl);
	} else if ($to == "chat") {
                        $url = "https://cdn.cloudhold.host/api/telegram/send/?chat=" . $chat_id . "&from=asknotify&message=" . urlencode($message);

                    	$curl = curl_init();
                    	curl_setopt($curl, CURLOPT_URL, $url);
                    	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1; rv:2.0.1) Gecko/20100101 Firefox/4.0.1");
                    	curl_exec($curl);
                    	curl_close($curl);
	}
}

?>