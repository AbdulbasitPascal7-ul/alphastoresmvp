<?php
require_once "../includes/dbh.inc.php";

$sql = "SELECT COUNT(*) FROM waitlist";
$stmt = $pdo->prepare($sql);
 $stmt->execute();
 $allUsers = $stmt->fetchColumn();

 $sql = "SELECT COUNT(*) FROM vendors";
$stmt = $pdo->prepare($sql);
 $stmt->execute();
 $allVendors = $stmt->fetchColumn();

 $sql = "SELECT COUNT(*) FROM products";
$stmt = $pdo->prepare($sql);
 $stmt->execute();
 $allProducts = $stmt->fetchColumn();

 $sql = "SELECT COUNT(*) FROM waitlist";
$stmt = $pdo->prepare($sql);
 $stmt->execute();
 $allUsers = $stmt->fetchColumn();
