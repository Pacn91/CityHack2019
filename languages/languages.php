<?php
ob_start();
$default = "pt";

if( isset( $_POST['changeLanguage'] ) )
{
require $_POST['changeLanguage'] . ".php";
setcookie("saveLanguage", $_POST['changeLanguage'], time()+3600*24*30, '/'); // cookie, expira em 1 mes
}
else
if( isset($_COOKIE["saveLanguage"]) )
{
require $_COOKIE["saveLanguage"] . ".php";
}
else
if (!isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
{
require $default .".php";
}
else
{
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$language = substr($language,0,2);
if( ( $language == "pt")  or ( $language == "en") ) // verifica se a lingua é válida
{
require $language . ".php";
}
else
{
require $default . ".php";
}
}
ob_end_flush();
?>