<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/


error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$facebook = $_POST['facebook'];


$error = '';

if(!$error)
{
$mail = mail("ecoschool@zpspace.com.ua", "Заявка на участь в екологічній школі", "Хочу навчатись" .$facebook,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());
}


}
?>