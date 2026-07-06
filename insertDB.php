<?php

function insertDB(string $table, string $column1, string $column2, string $column3 ,string $column4 ="",string $column5 ="",string $column6 ="", string $column7 ="" ,
                   string $data1 ,string $data2, string $data3, string $data4 = "", string $data5 = "", string $data6 = "", string $data7 = ""){
    require_once "../includes/dbh.inc.php";
    $sql = "INSERT INTO $table ($column1, $column2, $column3) VALUES(?, ?, ?);";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$data1, $data2, $data3]);
            $user_id = $pdo->lastInsertId('id');
            $_SESSION['id'] = $user_id;
            $pdo = null;
            $stmt = null;
}