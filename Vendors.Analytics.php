<?php
require_once "../includes/dbh.inc.php";
$query = "SELECT `businessName`, `vendor_id` FROM `vendors`;";
$stmt = $pdo->prepare($query);
$stmt->execute();
$vendors = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($vendors as $vendor) {?>
  <div class="vendor">
             <p><?php echo htmlspecialchars($vendor['vendor_id']) ?></p>
             <h4><?php echo htmlspecialchars($vendor['businessName']) ?></h4>
             <button>View</button>
            </div>
<?php } ?>