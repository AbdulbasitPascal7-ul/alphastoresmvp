<?php
session_start();

if ($_SERVER["REQUEST_METHOD"]==="POST") {

// Taking Of Inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_ARGON2ID);
    //validation Of Inputs
    if (strlen($name) < 3) {
            header("Location: ../pages/waitlist.php?message=name");
            exit();
    }
    elseif (!preg_match("/^[a-zA-z]/",$name)) {
        header("Location: ../pages/waitlist.php?message=char");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../pages/waitlist.php?message=email");
        exit();
    }
    elseif (strlen($password) < 8) {
        header("Location: ../pages/waitlist.php?message=pass");
        exit;
        }
    else {
        
    try {
        require_once "./dbh.inc.php";
        $query =  "SELECT email from `waitlist` Where email = :email;";
        $stmt = $pdo->prepare($query);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
       header("Location: ../pages/waitlist.php?message=exist");    
       exit();
        }
        else {
            $sql = "INSERT INTO `waitlist` (`name`, `email`, `pass`) VALUES(?, ?, ?);";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $email, $hashedPassword]);
            $user_id = $pdo->lastInsertId('id');
            $_SESSION['id'] = $user_id;
            $pdo = null;
            $stmt = null;
            header("Location: ../pages/waitlist.php?message=success");  
            exit;
          }
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
    }
}
