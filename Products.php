<?php
require_once "./includes/dbh.inc.php";
$sql = "SELECT vendors.vendor_id,
 vendors.businessName, products.vendor_id,
  products.name, products.image, products.price,
   products.description FROM products 
   INNER JOIN vendors ON
    vendors.vendor_id = products.vendor_id;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($products as $product) {?>
 <div class="card">
 <img src="./products/<?php echo htmlspecialchars($product['image']) ?>" alt="">
              <div class="bottom">
                <div class="name">
                    <h4>GHS <?php echo htmlspecialchars($product['price']) ?></h4>
                <h5><?php echo htmlspecialchars($product['name']) ?></h5>
                </div>
                <div class="kn"><h6><?php echo htmlspecialchars($product['businessName']) ?></h6></div>
                <div class="buy">
                    <input type="number" name="quanity" aria-id="quantity" placeholder="Quantity" value="1">
                    <a href="./pages/waitlist.php">Join</a >
                </div>
         </div>
 </div>
<?php 
} ?>