<?php
require 'MSSQL.php';
$aData=$_GET['aData'];
$RESULT = "SELECT * FROM TABLE2 WHERE PARTI='".$aData."'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $RESULT , $params, $options );
$cn = sqlsrv_num_rows( $stmt );
echo $cn;
?>