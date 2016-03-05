<?php
$_SESSION["PNAME"] = "POPULATION";
require 'LAYOUT.php';
?>
<html>
<script>
	$(document).ready(function () {
    // prepare the data
    var source ={
        datatype: "json",
        datafields: [{ name: 'CNAME' },{ name: 'SNAME' },{ name: 'SID' },{ name: 'ENS' },{ name: 'ALSN' },],
        url: 'data.php'
    };
    $("#jqxgrid").jqxGrid({
        source: source,
        theme: 'classic',
        columns: [{ text: 'CUSTOMER', datafield: 'CNAME', width: 250 },{ text: 'SITE NAME', datafield: 'SNAME', width: 150 },{ text: 'SITE ID', datafield: 'ENS', width: 180 },{ text: 'ENGINE NO', datafield: 'ENS', width: 200 },{ text: 'ALT. NO', datafield: 'ALSN', width: 120 }]
    });
});
	</script>
<hr/>
<h2>List of Sites</h2>
<div id="jqxgrid"></div>
<hr/>
</html>