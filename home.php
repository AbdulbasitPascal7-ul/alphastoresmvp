<?php $allUsers = "";
$allProducts = "";
$allVendors = "";
require_once "../controllers/AdminController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.avif" type="image/x-icon">
    <link rel="stylesheet" href="./admin.css">

    <title>Home __Admin</title>
</head>
<body>
    <header>
        <a href="../index.php"><img src="../images/logo.avif" alt="logo"></a>
        <h1>AlphaStores Admin Page</h1>
    </header>
    <main>
        
     <div class="left-nav">
        <nav>
         <a href="#analytics">Analytics</a>
            <a href="#messages">Messages</a>
            <a href="#users">Users</a>
            <a href="#vendors">Validation</a>
            </nav>
            <div class="admin">
                <img src="../images/user.avif" alt="">
                <div class="name">

                    <h4>Elias Abdul-Basit</h4>
                    <h5>abdulbasitilias@icloud.com</h5>
                </div>
            </div>
     </div>
     <div id="interface">
        <?php require_once "../views/ProductAnalytics.php" ?>
        <section id="analytics">
        <h2>Analytics</h2>
        <div class="analyticContainer">
            <div class="analyticCards">
                <h3><?php echo htmlspecialchars($allUsers) ?></h3>
                <h5>Users</h5>
            </div>
             <div class="analyticCards">
                <h3><?php echo htmlspecialchars($allVendors) ?></h3>
                <h5>Vendors</h5>
            </div>
             <div class="analyticCards">
                <h3><?php echo htmlspecialchars($allProducts) ?></h3>
                <h5>Products</h5>
            </div>
             <div class="analyticCards">
                <h3>8</h3>
                <h5>Verified vendors</h5>
            </div>
             <div class="analyticCards">
                <h3>2</h3>
                <h5>Admins</h5>
            </div>
        </div>
     </section>
     <section id="messages">
        <h2>Feedback & Complains</h2>
        <div class="messagesContainer">
           <?php require_once "../views/blogs.php" ?>
            
        </div>
     </section>
     <section id="users">
        <h2>Users</h2>
        <div class="vitals">
            <p>User ID</p>
            <p>User Name</p>
            <p>User Email</p>
        </div>
        <div class="usersContainer">
            <?php require_once "../views/Users.php";
            ?>
        </div>
     </section>
     <section id="products">

        <h2>Vendors</h2>
        <div class="vitals">
            <p>Vendor ID</p>
            <p>Vendor Name</p>
            <p> Action</p>
        </div>
        <div class="vendorContainer">
           <?php require_once "../views/Vendors.Analytics.php" ?>
        </div>
     </section>
     <section id="vendors">

        <h2>Products</h2>
        <div class="vitals">
            <p>Vendor ID</p>
            <p>Product Name</p>
            <p> Price</p>
        </div>
        <div class="productsContainer">
          
           <?php require_once "../views/ProductsAlpha.php" ?>
        </div>
     </section>
     </div>
    </main>
   <article>
        <nav>
            <a href="#analytics">Analytics</a>
            <a href="#messages">Messages</a>
            <a href="#users">Users</a>
            <a href="#vendors">Validation</a>
        </nav>
    </article>
</body>
</html>