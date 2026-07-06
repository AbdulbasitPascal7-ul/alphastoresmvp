<?php
session_start();
require_once "./dbh.inc.php";
if (isset($_POST['update']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $opassword = $_POST['opassword'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
       // check the existent of the user
        $sql = "SELECT `email`, `pass` FROM `users` WHERE `email` = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
         echo $opassword;
            //checks user exists with the right password
        if($user && password_verify($opassword, $user['pass'])) {
        // Updates User credentials    
        $query = "UPDATE `users` SET `name`= ?, `email` = ?, `pass` = ? WHERE `id`= ?;";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name, $email, $hashedPassword, $id ]);
        echo "User Updated Successfully";
        exit();
        }
         else {
            echo "Password Mismatch";
            exit();
         }
            
        
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
        
}
if (isset($_POST['logout'])) {
   session_destroy();
   header('Location: ../pages/login.php');
   exit();
}
elseif (isset($_POST['sell'])) {
    header('../pages/register.php');
    
} 



if (isset($_POST['delete']) && $_SERVER["REQUEST_METHOD"]==="POST") {
    $id = $_POST['id'];
    $password = $_POST['password'];

    try {
        $query = "SELECT `pass` FROM `users` WHERE `id` = :id;";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['id' => $id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['pass'])) {
            $sql = "DELETE FROM `users` WHERE id = :id; ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id'=>$id]);
           $stmt = null;
           $pdo = null;
            header("Location: ../pages/register.php");
        }

    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}