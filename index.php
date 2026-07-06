<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/logo.avif" type="image/x-icon">
    <title>AlphaStores MVP</title>
</head>
<body>
    <main>
        <?php require_once "./partials/header.php"
         ?>
         <section id="hero">
            <div class="left">
                <h1>Alpha  </h1>
                    <h2>Stores</h2>
                <h4>Shop Smart, Shop Fast. Buy From Trusted Vendors Worldwide At Competitive Prices</h4>
                <div class="bottom">
                    <span>
                        <ul>
                        <li>Fast</li>
                        <li>Reliable</li>
                        <li>Accessible</li>
                        <li>Ease</li>
</ul>                </div>
 <div class="sign">
                <span>
                    <h2>148</h2>
                    <p>Active Users</p>
                </span>
                <span>
                    <h2>45</h2>
                    <p>Active Vendors</p>
                </span>
                <span>
                    <h2>201</h2>
                    <p>Deals Closed</p>
                </span>
                
            </div>
             <a href="./pages/waitlist.php">Join Waitlist</a>
             <a href="./pages/vendor.php">Sell</a>
             <a href="#message">Add A Voice</a>
             <br>
            </div>
            <div class="right">
                <div class="img">
                <img src="./images/ricecooker.avif" alt="">
            </div></div>
           
         </section>
            <h3>Browse Categories</h3>
         <section id="categories">
            <div class="content">
                <div class="card">
                    <img src="./images/necklace.avif" alt="accessories">
                    <h4>Accessories</h4>
                    <a href="">View More</a>
                </div>
                 <div class="card">
                    <img src="./images/beauty.avif" alt="accessories">
                    <h4>Beauty</h4>
                    <a href="">View More</a>
                </div>
                 <div class="card">
                    <img src="./images/ricecooker.avif" alt="accessories">
                    <h4>Gadgets</h4>
                    <a href="">View More</a>
                </div>
                 <div class="card">
                    <img src="./images/groceries.avif" alt="accessories">
                    <h4>Groceries</h4>
                    <a href="">View More</a>
                </div>
                 <div class="card">
                    <img src="./images/tools.avif" alt="accessories">
                    <h4>Hardwares </h4>
                    <a href="">View More</a>
                </div>
                <div class="card">
                    <img src="./images/download.avif" alt="accessories">
                    <h4>Men's Wear</h4>
                    <a href="">View More</a>
                </div>
                 <div class="card">
                    <img src="./images/shoes.avif" alt="accessories">
                    <h4>Shoes</h4>
                    <a href="">View More</a>
                </div>
                 <div class="card">
                    <img src="./images/women.avif" alt="accessories">
                    <h4>Women</h4>
                    <a href="">View More</a>
                </div>
            </div>
         </section>
            <h3>Featured Products</h3>
            <section id="products">
    <?php require_once "./views/Products.php" ?>
    </section>
    <h3>Trusted Vendors</h3>
    <section id="vendors">
       <?php require_once "./views/Vendors.php" ?>
    </section>
    <section id="message">
        <h3>Add A Voice</h3>
        <div id="errors" style="color: red;" >
           <?php require_once "./services/errorhandling.php";
           ?>
        </div>
        <form action="./includes/messages.inc.php" method="post">
            <label for="name">Enter Your Name:</label><br>
            <input type="text" name="name" id="name" placeholder="John Doe" required><br><br>
            <label for="phone">Enter Phone Number:</label><br>
            <input type="tel" name="phone" id="phone" placeholder="02XXXXXXXX" required><br><br>
            <label for="email">Enter Email (optional):</label><br>
            <input type="email" name="email" id="email" placeholder="johndoe@icloud.com"><br><br>
            <label for="message">Enter Your Message:</label><br>
            <textarea name="message" id="message" rows="4" placeholder="I want to Join.................."></textarea><br>
            <button name="submit">Message</button>
        </form>
    </section>
    <footer>
       <div class="top">
        <h4>Join Our Newsletter</h4>
        <p>Get Notified When We Post A Message!</p>
        <div class="newsletter">
        <input type="email" name="email" id="email" placeholder="johndoe@gmail.com">
        <button>Join</button>
       </div>
       </div>
       <div class="mid">
        <div class="docs">
         <a href="">Terms</a>
         <a href="">Policies</a>
         <a href="">User Agreement</a>
         <a href="">About Us</a>
        </div>
       </div>
       <span> All Rights Reserved, Developed By Alpha &#169 2026</span>
    </footer>
    </main>
    <article>
        
        <nav>
            <a href=""><img src="./images/logo.avif" alt=""></a>
            <a href="./pages/waitlist.php"><img src="./images/user.avif" alt=""></a>
            <a href="./pages/terms.php"><img src="./images/shopping-cart.avif" alt=""></a>
        </nav>
    </article>

</body>
</html>