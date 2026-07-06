<?php
 if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if (empty($phone) || empty($name) || empty($message)) {
        header("Location: ../index.php?message=all");
        exit();
    }
    else {
        try {
        require_once "./dbh.inc.php";
        $pdo->beginTransaction();
        $query = "INSERT INTO `messages` (`name`, `email`, `phone`, `message`) VALUES (?, ?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name, $email, $phone, $message]);
        $pdo->commit();
        $stmt = null;
        $pdo = null;
        header("Location: ../index.php?message=success");
        exit();
            //code...
        } catch (PDOException $th) {
            $pdo->rollBack();
            echo $th->getMessage();
        }
    }
    }
 