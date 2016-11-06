<?php
include ("MSSQL.php"); 
$page = $_GET['page']; 
$limit = $_GET['rows']; 
$sidx = $_GET['sidx']; 
$sord = $_GET['sord']; 

if(!$sidx) $sidx =1; 
$ab = "SELECT COUNT(*) AS count FROM SHEET1";
$result = sqlsrv_query( $conn, $ab); 
if( $result === false) {
    die( print_r( sqlsrv_errors(), true) );
}
$row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC); 

$count = $row['count']; 
if( $count > 0 && $limit > 0) { 
    $total_pages = ceil($count/$limit); 
} else { 
    $total_pages = 0; 
} 
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit;
if($start <0) $start = 0; 

$SQL = "SELECT * FROM SHEET1 ORDER BY $sidx $sord"; 
$result1 = sqlsrv_query( $conn, $SQL); 
if( $result1 === false) {
    die( print_r( sqlsrv_errors(), true) );
}
$i=0;
while($row1 = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC)) {
	$responce->rows[$i]['id']=$row1['RID'];
	$responce->rows[$i]['cell']=array($row1['RID'],$row1['PART_NO'],$row1['PARTI'],$row1['MRP'],$row1['GROP'],$row1['CATE'],$row1['unit']);
	$i++;
}
echo json_encode($responce);
?>