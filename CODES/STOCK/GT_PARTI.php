<?php
include ("connect1.php");
$aData=$_GET['aData'];
$result = mysql_query("SELECT * FROM sheet1 where  PARTI LIKE '%".$aData."%'");
  $array = mysql_fetch_row($result);                            
  echo json_encode($array);
?>