<?php

if ($_GET['action'] == "check") {
    $data = json_decode(@file_get_contents('live.json'), true);
    echo $data[$_GET['ip']];
}

?>