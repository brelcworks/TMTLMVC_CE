<?php
require 'MSSQL.php';
$searchTerm = $_GET['term'];
    $query = sqlsrv_query($conn, "SELECT * FROM SHEET1 WHERE PARTI LIKE '%".$searchTerm."%' ORDER BY PART_NO ASC");
    while ($row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC)) {
        $data[] = $row['PARTI'];
    }
    echo json_encode($data);
?>