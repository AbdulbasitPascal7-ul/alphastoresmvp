<?php
session_start();
session_regenerate_id(true);
if ($_SERVER['REQUEST_METHOD'] === "POST") {
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);

   if (empty($email) || empty($password)) {
      header("Location: ../pages/knightlogin.php?message=all");
    exit();
   }
   elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    header("Location: ../pages/knightlogin.php?message=email");
    exit();
   }{
    
   
   }
   try {

    require_once "./dbh.inc.php";
    $query = "SELECT `vendor_id`, `pass` FROM `vendors` WHERE `email` = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['email'=>$email]);
    $vendor = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($vendor && password_verify($password,$vendor['pass'])) {
      $_SESSION['vendor_id'] = $vendor['vendor_id'];
      //var_dump($_SESSION['vendor_id']);
      header("Location: ../pages/vendor.php");
     }
     else {
     header("Location: ../pages/knightlogin.php?message=notexists");
     }
   
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
}
