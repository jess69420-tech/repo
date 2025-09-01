<?php
include '../../settings.php';
include '../core/funcs.php';
session_start();


if (isset($_POST['transport'])) {
    $_SESSION['transport'] = $_POST['transport'];
    header('location: ../loading.php?page=card.php');
}