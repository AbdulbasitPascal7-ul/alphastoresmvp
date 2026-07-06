<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit();
}

// Input
$name        = trim($_POST['name']);
$price       = trim($_POST['price']);
$description = trim($_POST['description']);
$image       = $_FILES['image']  ;
$vendor_id   = $_SESSION['vendor_id']  ;
var_dump($vendor_id); 


// Validate text fields
if (empty($name) || empty($price) || empty($description)) {
   header("Location: ../pages/vendor.php?message=all");
    exit();
}
elseif (!preg_match("/[a-zA-z]/", $name)) {
    header("Location: ../pages/vendor.php?message=char");
    
}

elseif (strlen($name) > 50) {
    header("Location: ../pages/vendor.php?message=more");
    exit();
}

elseif (!is_numeric($price) || $price <= 0) {
    header("Location: ../pages/vendor.php?message=positive");
    exit();
}

// Validate image
elseif (!$image || $image['error'] !== UPLOAD_ERR_OK) {
    header("Location: ../pages/vendor.php?message=noimage");
    exit();
}

$allowedExt = ['jpeg', 'jpg', 'png', 'avif'];
$ext        = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));

if (!in_array($ext, $allowedExt)) {
    header("Location: ../pages/vendor.php?message=ext");
    exit();
}

elseif ($image['size'] > 2 * 1024 * 1024) {
    header("Location: ../pages/vendor.php?message=large");
    // "Image must be 2MB or smaller.";
    exit();
}

//  Move uploaded file
$newImageName = uniqid('img_', true) . '.' . $ext;
$destination  = '../products/' . $newImageName;

if (!move_uploaded_file($image['tmp_name'], $destination)) {
    header("Location: ../pages/vendor.php?message=save");
    // "Failed to save image. Please try again.";
    exit();
}

// Insert into database
try {
    require_once './dbh.inc.php';
    $pdo->beginTransaction();
    $query = "INSERT INTO `products` (`image`, `name`, `price`, `description`, `vendor_id`)
              VALUES (?, ?, ?, ?, ?)";
    $stmt  = $pdo->prepare($query);
    $stmt->execute([$newImageName, $name, $price, $description, $vendor_id]);

    $pdo->commit();
    $stmt = null;
    $pdo  = null;
    header("Location: ../pages/vendor.php");
    exit();

} catch (PDOException $e) {
    $pdo->rollBack();
   echo $e->getMessage();
    exit();
}