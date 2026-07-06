<?php
session_start();

$admin_id = $_SESSION['admin_id'];
if (!isset($admin_id)) {
    header("Location: ../alpha/index.php");
    exit();
}