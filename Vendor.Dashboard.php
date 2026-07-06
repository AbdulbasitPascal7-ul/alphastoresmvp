<?php
$vendor_id = $_SESSION['vendor_id'];
if (!isset($vendor_id)) {
    header("Location: ../pages/knightlogin.php");
       exit();
}
else{
require_once "../includes/dbh.inc.php";
$query = "SELECT `businessName` FROM `vendors` WHERE `vendor_id` = :vendor_id ;";
$stmt = $pdo->prepare($query);
$stmt->execute(['vendor_id' => $vendor_id]);
$vendor = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($vendor as $vendorName) {?>
        <h3><?php echo htmlspecialchars($vendorName['businessName']) ?> Dashboard</h3>
        <form method="POST">
        <button name="logout">LOGOUT</button>
        </form>
<?php } 

if (isset($_POST['logout'])) {
       session_abort();
       session_destroy();
       session_unset();
       header("Location: ../pages/knightlogin.php");
}
}?>