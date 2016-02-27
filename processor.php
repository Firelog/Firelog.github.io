<?php

header('Content-Type: text/html; charset= utf-8');
$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));
$headers = "MIME-Version: 1.0" . "\r\n" .
	"From: 17407078@hostingaccount.com" . "\r\n" .
	"Reply-To: 17407078@hostingaccount.com" . "\r\n" .
	"Return-Path: 17407078@hostingaccount.com" . "\r\n" .
	"X-Mailer: PHP/" . phpversion();
$k=300;
if($_POST['field_3']<$k) {
	$k=$_POST['field_3'];
}
for ($i = 1; $i <= $k; $i++) 
  { 
    $arr[$i]=rand(1,$_POST['field_2']);
  } 
mail("admin@pony.ultimatefreehost.in","Число от " . $_POST['field_1'] . "","Form data:

Cube sides: " . $_POST['field_2'] . " 
Iterations: " . $_POST['field_3'] . "
Date and time: " . date("Y-m-d H:i:s") . " 
Array of random numbers: " . implode(", ", $arr) . "

Please do not reply on this email.

");

echo "Твой набор случайных чисел " . "<br />";
echo implode(", ", $arr);

?>