<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../images/logo.avif" type="image/x-icon">
    <link rel="stylesheet" href="../css/register.css">
    <title>Vendor Login</title>
</head>
<body>
    <header>
        <a href="../index.php"><img src="../images/logo.avif" alt=""></a>
        <h2>Vendor Login</h2>
        <a href="./knightregistration.php">Register</a>
    </header>

    <form action="../includes/knightlogin.inc.php" method="post">
        <div class="intro">
            <br>
            <h1>Welcome Vendor,</h1>
        <span></span>
            <p>Login To Add Products & More!</p>
        </div>
        <p>Note! Password Should Not Contain Spaces</p>
    <label for="email">Please Enter Your Email:</label><br>
    <input type="email" name="email" id="email"><br><br>
    <label for="password">Please Enter Your Password:</label><br>
    <input type="password" name="password" id="password"><br><br>
    <button name="login">Login</button>

    </form><br><br><br>
    <div id="errors">
        <?php require_once "../services/errorhandling.php" ?>
    </div>
</body>
</html>