<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../images/logo.avif" type="image/x-icon">
    <link rel="stylesheet" href="../css/register.css">
    <title>Register</title>
</head>
<body>
    <header>
     <a href="../index.php"><img src="../images/logo.avif" alt=""></a>    
    <h1>AlphaStores</h1>
 <a href="./knightlogin.php">Login</a>

    </header>
    <div class="container">
        
    <div class="intro">
        <h3>Sell Products</h3>
        <p>Sell Products To Users Worldwide!!</p>
</div>
        <form method="POST" action="../includes/vendors.inc.php">
               
               
               <div class="business">
                <h4>Business Details</h4>
                <label for="bname">Please Enter Business Name:</label><br>
                <input type="text" name="bname" id="bname"><br><br>
                <label for="email">Please Enter Business email: </label><br>
                <input type="text" name="email" id="email"><br><br>
                 <label for="password">Please Enter Your Password</label><br>
                 <input type="password" name="password" id="password"><br><br>
               </div>
             <button name="signup">Join</button>
             <p>------------ Or ------------</p>
               <span><p>Already Have An Account?</p>
                <a href="../index.php">Login</a>
                        </span>
        </form>
    </div>
    </div>
    <footer>
         <p>Powered By <a href="">Alpha</a></p>       
    </footer>

<script src="../js/home.js">

</script>
<?php 
require_once "../services/errorhandling.php";
 ?>
</body>
</html>