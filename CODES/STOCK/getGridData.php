<?php
include ("connect1.php"); 
$page = $_GET['page']; 
$limit = $_GET['rows']; 
$sidx = $_GET['sidx']; 
$sord = $_GET['sord']; 

if(!$sidx) $sidx =1; 

$result = mysql_query("SELECT COUNT(*) AS count FROM SHEET1"); 
$row = mysql_fetch_array($result,MYSQL_ASSOC); 
echo $result;
$count = $row['count']; 
if( $count > 0 && $limit > 0) { 
    $total_pages = ceil($count/$limit); 
} else { 
    $total_pages = 0; 
} 
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit;
if($start <0) $start = 0; 

$SQL = "SELECT * FROM SHEET1 ORDER BY $sidx $sord LIMIT $start , $limit"; 
$result = mysql_query($SQL) or die("Couldn't execute query.".mysql_error()); 

$i=0;
while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
	$responce->rows[$i]['id']=$row['RID'];
	$responce->rows[$i]['cell']=array($row['RID'],$row['PART_NO'],$row['PARTI'],$row['MRP'],$row['GROP'],$row['CATE'],$row['UNIT']);
	$i++;
}
echo json_encode($responce);
?>