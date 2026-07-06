<?php
$user_id = $_SESSION['id'];
try {
    require_once "../includes/dbh.inc.php";
    $query = "SELECT * FROM `users` WHERE `id` = :id; ";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id' => $user_id]);
    $userFetch = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($userFetch as $user) {?>
    <div class="user">
        <div class="vitals">
            <h3>Information</h3>
            <h4>Name: <?php echo htmlspecialchars($user['name']) ?></h4>
            <h5>Email: <?php echo htmlspecialchars($user['email']) ?></h5>
            <h5>User:0000<?php echo htmlspecialchars($user['id']) ?></h5>
            <h5>Status: Verified</h5>
        </div>
<?php } ?>

<?php 
} catch (PDOException $th) {
    echo $th->getMessage();
}
