<?php
if (isset($_POST['sv2']))
{
	include ("connect1.php");
	$PRPART_NO = $_POST['PRPART_NO'];
	$PRCATE = $_POST['PRCATE'];
	$PRPARTI = $_POST['PRPARTI'];
	$PRMRP = $_POST['PRMRP'];
	$PRGROP = $_POST['PRGROP'];
	$PRunit = $_POST['PRunit'];
	$PRTRATE = $_POST['PRTRATE'];
	$PRDPCODE = $_POST['PRDPCODE'];
	$PRlmodi = $_POST['PRlmodi'];
	$PRrid1 = $_POST['PRrid1'];
	$PRAEDT = $_POST['PRAEDT'];
	$query = mysql_query("insert into sheet1(PART_NO, PARTI, MRP, GROP, CATE, DPCODE, lmodi, TRATE, rid1, UNIT, AEDT) values ('$PRPART_NO', '$PRPARTI', '$PRMRP', '$PRGROP', '$PRCATE', '$PRDPCODE', '$PRlmodi', '$PRTRATE', '$PRrid1', '$PRunit', '$PRAEDT')");
	if ($query) {
	echo '<script>alert("RECORD ADDED");</script>';
	header ('Location: ST_LIST.php');
}
else {
	echo mysql_error();
}
}
?>