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
        $query =  "SELECT `id`, `email`, `pass`  FROM `users` Where email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['pass'])) {
        $_SESSION['id'] = $user['id'];           
           header("Location: ../pages/user.php");
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