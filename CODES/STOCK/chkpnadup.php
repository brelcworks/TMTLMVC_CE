<?php
require 'Connect.php';
$aData=$_GET['aData'];
$RESULT = mysqli_query($db1, "SELECT * FROM TABLE1 WHERE PARTI='".$aData."'");
$cn = mysqli_num_rows($RESULT);
echo $cn;
?>