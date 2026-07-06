<?php
$vendor_id =  $_SESSION['vendor_id'];

require_once "../includes/dbh.inc.php";
$query = "SELECT * FROM `products` WHERE vendor_id = :vendor_id;";
$stmt = $pdo->prepare($query);
$stmt->execute(['vendor_id' => $vendor_id]);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($products === []) {?>
      <div class="card">
       
     <h1>No Products Yet</h1>
        </div>
    <?php } 
    else {
        # code...
  
foreach ($products as $product) {?>

 <div class="card">
        <img src="../products/<?php echo htmlspecialchars($product['image']) ?>" alt="asdfgh">
        <div class="bot">
            <h4>GHS <?php echo htmlspecialchars($product['price']) ?>.00</h4>
            <h5> <?php echo htmlspecialchars($product['name']) ?></h5>
        </div>
       <form action="../controllers/DeleteProduct.php" method="post">
        <button name="editButton">EDIT</button>
        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['product_id']) ?>">
        <button name="delete">DELETE</button>
       </form>
        </div>
<?php } }?>