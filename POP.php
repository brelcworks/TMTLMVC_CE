<?php
$_SESSION["PNAME"] = "POPULATION";
require 'LAYOUT.php';
include ("connect1.php");
$sql = "SELECT * FROM MAINPOPUs";
$records = mysql_query($sql);
?>
<html>
<script>
	$(document).ready(function () {
        var source =
   {
       datatype: "json",
       datafields: [
            { name: 'RID', type: 'int' },
            { name: 'CNAME', type: 'string' },
            { name: 'SNAME', type: 'string' },
            { name: 'SID', type: 'string' },
            { name: 'ENS', type: 'string' },
            { name: 'ALSN', type: 'string' },
       ],
       url: 'data.php'
   };
        var editrow = -1;
        var dataAdapter = new $.jqx.dataAdapter(source);
        // initialize jqxGrid
        $("#grid").jqxGrid(
            {
                width: '98%',
                height: '100%',
                source: dataAdapter,
                sortable: true,
                filterable: true,
                altrows: true,
                theme: 'energyblue',
                editable: true,
                columns: [
                    { text: "RECORD NO", datafield: "RID", hidden: true },
                    { text: "SITE ID", datafield: "SID" },
                    { text: "SITE NAME", datafield: "SNAME" },
                    { text: "CUSTOMER", datafield: "CNAME" },
                    { text: "ENGINE NO", datafield: "ENS" },
                    { text: "ALT NO", datafield: "ALSN" }
                ]
            });
});
</script>
<h6>LIST OF SITES</h6>
<div id="grid"></div>
<table class="table table-bordered table-hover table-responsive" style="font-size : smaller">
<tr>
<th nowrap bgcolor="#00ffe1">Site Id</th>
        <th nowrap bgcolor="#00ffe1">Customer</th>
        <th nowrap bgcolor="#00ffe1">Site Name</th>
        <th nowrap bgcolor="#00ffe1">Engine No</th>
        <th nowrap bgcolor="#00ffe1">Rating</th>
        <th nowrap bgcolor="#00ffe1">Phase</th>
        <th nowrap bgcolor="#00ffe1">Contact Person</th>
        <th nowrap bgcolor="#00ffe1">Ph No</th>
        <th nowrap bgcolor="#00ffe1">DT of Commissioning</th>
        <th nowrap bgcolor="#00ffe1">Current Hmr</th>
        <th nowrap bgcolor="#00ffe1">RECORD OPERATION</th>
</tr>
<?php
while ($pops = mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$pops['SID']."</td>";
	echo "<td>".$pops['CNAME']."</td>";
	echo "<td>".$pops['SNAME']."</td>";
	echo "<td>".$pops['ENS']."</td>";
	echo "<td>".$pops['RAT_PH']."</td>";
	echo "<td>".$pops['PHASE']."</td>";
	echo "<td>".$pops['CPN']."</td>";
	echo "<td>".$pops['PHNO']."</td>";
	echo "<td>".$pops['DOC']."</td>";
	echo "<td>".$pops['CHMR']."</td>";
	echo "<td></td>";
	echo "</tr>";
}
?>
</table>
<hr/>
</html>