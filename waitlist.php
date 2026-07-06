<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="shortcut icon" href="../images/logo.avif" type="image/x-icon">
    <title>Waitlist</title>
</head>
<body>
    <header>
        <a href="../index.php"><img src="../images/logo.avif" alt=""></a>
        <h1>AlphaStores</h1>
        <a href="../index.php">Login</a>
    </header>
    <div class="container">
        
    <div class="intro">
        <h2>Register</h2>
        <span></span>
        <p>Be the first to know when it's launched</p>
        
</div>
        <form method="POST" action="../includes/signup.php">
            <label for="name">Please Enter Your Name:</label><br>
            <input type="text" name="name" id="name" placeholder="Elias Abdul Basit"><br><br>
            <label for="email">Please Enter Your Email:</label><br>
            <input type="email" name="email" id="email" placeholder="abdulbasitilias@icloud.com"><br><br>
            <label for="password">Please Enter Password:</label><br>
            <input type="password" name="password" id="password"><br><br>
             <button name="signup">Join</button>
                               </div></span>

               
        </form>
    </div>
    </div>
    <footer>
         <p>Powered By <a href="">Alpha</a></p>       
    </footer>

<?php 
require_once "../services/errorhandling.php";

 ?>
</body>
</html>