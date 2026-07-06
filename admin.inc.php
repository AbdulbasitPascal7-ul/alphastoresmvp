<?php
session_start();
session_regenerate_id(true);

if ($_SERVER["REQUEST_METHOD"]==="POST") {

// Taking Of Inputs
    $email = $_POST['email'];
    $password = $_POST['password'];

 
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Incorrect Email Format";
    }
   
    else {
        
    try {
        require_once "./dbh.inc.php";
        $query =  "SELECT `admin_id`, `email`, `pass`  FROM `admin` Where email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->execute([':email' => $email]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($admin && password_verify($password, $admin['pass'])) {
        $_SESSION['admin_id'] = $admin['admin_id'];           
           header("Location: ../alpha/home.php");
        }
        else {
            echo "User Does not Exist";
        }
    }
    catch(PDOException $e){
     echo $e->getMessage();
    }
    }
}