<?php
include ("MSSQL.php");
$aData=$_GET['aData'];
$result = sqlsrv_query($conn, "SELECT * FROM SHEET1 where  PARTI LIKE '%".$aData."%'");
  $array = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);                            
  echo json_encode($array);
?>