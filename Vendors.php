<?php

require "./views/selectQuery.php";
$vendors = selectQuery('vendors');

foreach ($vendors as $vendor) {
$vendorName =$vendor['businessName'];
$firstLetter = $vendorName[0];
?>
 <div class="vendor">
      <h1><?php echo htmlspecialchars($firstLetter) ?></h1>
       <h5><?php echo htmlspecialchars($vendor['businessName']) ?></h5>
        </div>
<?php } ?>