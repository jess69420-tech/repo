<?php 
session_start();
$data = json_decode(file_get_contents("https://pro.ip-api.com/json/".$_SERVER['REMOTE_ADDR']."?key=J9TQazL9UIH1so3&fields=21164031"), true);

$_SESSION['ipinfo'] = @"{$data}";
$_SESSION['isp'] = @"{$data['isp']}";
$_SESSION['org'] = @"{$data['org']}";
$_SESSION['proxy'] = @"{$data['proxy']}";
$_SESSION['country'] = @"{$data['country']}";
$_SESSION['countryCode'] = @"{$data['countryCode']}";
$_SESSION['hosting'] = @"{$data['hosting']}";

header('Location: /home/');