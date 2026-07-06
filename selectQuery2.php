<?php

function selectQuery(string $select) {
    try {    
    require "../includes/dbh.inc.php";
    
    $query = "SELECT * FROM $select;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $selected = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $selected;
}
 catch (PDOException $th) {
        echo $th->getMessage();
    }
}