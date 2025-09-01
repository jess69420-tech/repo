<?php
include 'funcs.php';
include '../../settings.php';

if (isset($_GET['ip'])) {
    change($_GET['ip'], $_GET['status']);
}
?>