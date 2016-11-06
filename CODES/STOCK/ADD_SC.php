<?php
include ("MSSQL.php");
$RID2=$_POST['RID1'];
$PART_NO2=$_POST['PART_NO1'];
$PARTI2=$_POST['PARTI1'];
$TYPE2=$_POST['TYPE1'];
$MRP2=$_POST['MRP1'];
$QTY2=$_POST['QTY1'];
$TOTAL2=$_POST['TOTAL1'];
$STOTAL2=$_POST['STOTAL1'];
$UNIT2=$_POST['UNIT1'];
$EOR2=$_POST['EOR1'];
$grop2=$_POST['GROP1'];
$SPRICE2=$_POST['SPRICE1'];
$PPRICE2=$_POST['PPRICE1'];
$USER12=$_POST['USER11'];
$AEDT2=$_POST['AEDT1'];
$DPCODE2=$_POST['DPCODE1'];
$TAX2=$_POST['TAX1'];
$TVAL2=$_POST['TVAL1'];
$RACKNO2=$_POST['RACKNO1'];
//Insert query
$query = sqlsrv_query($conn, "insert into TABLE2(RID, PART_NO, PARTI, TYPE, MRP, QTY, TOTAL, STOTAL, UNIT, EOR, grop, SPRICE, PPRICE, USER1, AEDT, DPCODE, TAX, TVAL, RACKNO) values ('$RID2', '$PART_NO2', '$PARTI2','$TYPE2', '$MRP2', '$QTY2', '$TOTAL2', '$STOTAL2', '$UNIT2', '$EOR2', '$grop2', '$SPRICE2', '$PPRICE2', '$USER12', '$AEDT2', '$DPCODE2', '$TAX2', '$TVAL2', '$RACKNO2')");
echo "Form Submitted Succesfully";
if ($query === true) {
	echo "Form Submitted Succesfully";
}
else
{
	die( print_r( sqlsrv_errors(), true));
}
?>