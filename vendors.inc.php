<?php
session_start();
    require_once "./dbh.inc.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
   $password = $_POST['password'];
   $businessName = $_POST['bname'];
   $email = $_POST['email'];
   $hashedPassword = password_hash($password, PASSWORD_ARGON2ID);

   
   if (empty($email) || empty($password) || empty($businessName)) {
      header("Location: ../pages/knightregistration.php?message=all");
      exit();
    exit();
   }
   if (preg_match("/[a-zA-z]",$businessName )) {
    header("Location: ../pages/knightregistration.php?message=char");
    exit();
   }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   header("Location: ../pages/knightregistration.php?message=email");
   exit();
   }
    elseif (strlen($password) < 8) {
        header("Location: ../pages/knightregistration.php?message=pass");
        exit();
    exit();
   }
   else {
    $query = "SELECT * FROM `vendors` WHERE `email` = :email";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    //echo json_encode($user);
    if($user){
        header("Location: ../pages/knightregistration.php?message=exist");
        exit();
    }
    else {
        try {
            $pdo->beginTransaction();
            $sql = "INSERT INTO vendors (`businessName`, `email`, `pass`) VALUES ( ?, ?, ?);";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([ $businessName, $email, $hashedPassword]);
            $vendor_id = $pdo->lastInsertId('vendor_id');
            $_SESSION['vendor_id'] = $vendor_id;
            header("Location: ../pages/vendor.php");
            $pdo->commit();
            exit();
        } catch (PDOException $th) {
            echo $th->getMessage();
            $pdo->rollback();
            exit();
        }
    }
   }

}