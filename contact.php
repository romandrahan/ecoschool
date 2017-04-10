<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/


error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$phone = stripslashes($_POST['phone']);
$facebook = stripslashes($_POST['facebook']);


$error = '';

if(!$error)
{
$mail = mail(ecoschool@zpspace.com.ua, "Заявка на участь в екологічній школі", "Хочу навчатись",
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());
}


}
?>