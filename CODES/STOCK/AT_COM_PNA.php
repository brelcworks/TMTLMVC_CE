<?php
require 'Connect.php';
$searchTerm = $_GET['term'];
    $query = $db1->query("SELECT * FROM sheet1 WHERE PARTI LIKE '%".$searchTerm."%' ORDER BY PARTI ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['PARTI'];
    }
    echo json_encode($data);
?>