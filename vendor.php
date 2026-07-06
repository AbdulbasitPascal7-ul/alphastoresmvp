<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.avif">

    <title>Vendors Dashboard</title>
</head>
<body>
    <div id="vendor">
    <main>
    <header>
        <a href="../index.php"><img src="../images/arrows.png" alt=""></a>
        <?php require_once "../views/Vendor.Dashboard.php" ?>
    </header>
       
    <form action="../includes/products.inc.php" method="post" enctype="multipart/form-data">
     <label for="image">Please Add Product Image</label><br>
     <input type="file" name="image" id="image"><br><br>
     <label for="name">Please Enter Product Name:</label><br>
     <input type="text" name="name" id="name" maxlength="20"><br><br>
     <label for="price">Please Enter Product Price:</label><br>
     <input type="number" name="price" id="price"><br><br>
     <label for="description">Please Enter Description</label><br>
     <textarea name="description" id="description" rows="5"></textarea><br><br>
     <button>Add Product</button>
    </form>
    <h2>
        Products
    </h2>
    <section id="products">
       <?php require_once "../views/Products.Vendor.php" ?>
    </section>
    <section id="edit">
        <form action="../includes/products.inc.php" method="post" enctype="multipart/form-data">
     
     <label for="name">Please Enter Product Name:</label><br>
     <input type="text" name="name" id="name" maxlength="20"><br><br>
     <label for="price">Please Enter Product Price:</label><br>
     <input type="number" name="price" id="price"><br><br>
     <label for="description">Please Enter Description</label><br>
     <textarea name="description" id="description" rows="5"></textarea><br><br>
     <button>Edit Product</button>
    </form>
    </section>
    </main>
    <div class="messages">
    <?php require_once "../services/errorhandling.php" ?>
    </div>
    </div>
</body>
</html>