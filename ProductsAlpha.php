<?php

require_once "../views/selectQuery2.php";
$products = selectQuery('products');
//var_dump($users);
foreach ($products as $product) { ?>
  <div class="product">
                <p><?php echo htmlspecialchars($product['vendor_id']) ?></p>
                <h5><?php echo htmlspecialchars($product['name']) ?></h5>
                <h5>GHS<?php echo htmlspecialchars($product['price']) ?></h5>
            </div>
            
<?php } ?>