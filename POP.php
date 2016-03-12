<?php
$_SESSION["PNAME"] = "POPULATION";
require 'LAYOUT.php';
include ("MSSQL.php");
$sql = "SELECT * FROM PMRs";
$records = sqlsrv_query( $conn, $sql );
?>
<html>
<hr/>
<div style="font-size : smaller; width:98%; margin-left:1%">
<h4>LIST OF ISSUES</h4>
<table class="table table-bordered table-hover table-responsive">
<tr>
<th nowrap bgcolor="#00ffe1">Site Id</th>
        <th nowrap bgcolor="#00ffe1">Customer</th>
        <th nowrap bgcolor="#00ffe1">Site Name</th>
        <th nowrap bgcolor="#00ffe1">Engine No</th>
        <th nowrap bgcolor="#00ffe1">Rating</th>
        <th nowrap bgcolor="#00ffe1">DT. of Issue</th>
        <th nowrap bgcolor="#00ffe1">Issue Closed Dt</th>
        <th nowrap bgcolor="#00ffe1">HMR</th>
        <th nowrap bgcolor="#00ffe1">Issue Type</th>
<th nowrap bgcolor="#00ffe1">Issue Status</th>
        <th nowrap bgcolor="#00ffe1">RECORD OPERATION</th>
</tr>
<?php
while ($pops = sqlsrv_fetch_array( $records, SQLSRV_FETCH_ASSOC)){
	echo "<tr>";
	echo "<td nowrap>".$pops['SID']."</td>";
	echo "<td nowrap>".$pops['CUST']."</td>";
	echo "<td nowrap>".$pops['SNAME']."</td>";
	echo "<td nowrap>".$pops['ENGINE_No']."</td>";
	echo "<td nowrap>".$pops['KVA']."</td>";
	echo "<td nowrap>".$pops['DOS']."</td>";
	echo "<td nowrap>".$pops['CDATI']."</td>";
	echo "<td nowrap>".$pops['HMR']."</td>";
	echo "<td nowrap>".$pops['STYPE']."</td>";
	echo "<td nowrap>".$pops['STA']."</td>";
	echo "<td></td>";
	echo "</tr>";
}
?>
</table>
</div>
<hr/>
</html>