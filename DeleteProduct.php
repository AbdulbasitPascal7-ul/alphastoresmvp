<?php
session_start();
require_once "../includes/dbh.inc.php";

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['delete'])) {
    // Taking the Product Details
    $product_id = $_POST['product_id'];
    

    try {
        // Deleting Product
        $pdo->beginTransaction();
        $query = "DELETE FROM `products` WHERE `product_id` =  :product_id;";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['product_id'=>$product_id]);
        $pdo->commit();
        header("Location: ../pages/vendor.php?message=ds");
        $stmt = null;
        $pdo = null;
        exit();
    } catch (PDOException $th) {
        echo $th->getMessage();
        $pdo->rollBack();
    }
}
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['editButton'])) {
        $product_id = $_POST['product_id'];
        $_SESSION['editproductId'] = $product_id;
        header("Location: ../partials/editproduct.php");
         
        try {
            $pdo->beginTransaction();
        } catch (\Throwable $th) {
            //throw $th;
        }
}
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['edit'])) {
   // session_start();
   // echo 1;
    # code...
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $desc = trim($_POST['description']);
    

  // ;
  //  var_dump($_SESSION['editproductId']);
try {

    $pdo->beginTransaction();
    $query = "UPDATE `products` SET `name` = ?, `price` = ?, `description` = ? WHERE `product_id` = ?;";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $price, $desc, $_SESSION['editproductId']]);
    $pdo->commit();
   header("Location: ../pages/vendor.php?message=us");
  

    //code...
} catch (PDOException $th) {
    echo $th->getMessage();
}
}