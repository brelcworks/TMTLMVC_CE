<?php
$_SESSION["PNAME"] = "PRICE LIST";
require_once 'LAYOUT.php';
?>
<html>
<script type="text/javascript">
	$(document).ready(function () {
		var wd = $(window).width() - 50;
        var ht = $(window).height() - 190;
		$("#list_records").jqGrid({
			url: "CODES/STOCK/getGridData.php",
			datatype: "json",
			mtype: "GET",
			colNames: ["ID", "PART NO", "PART NAME", "MRP", "TYPE", "CATEGORY", "UNIT"],
			colModel: [
                { name: "RID",align:"right", width:'5%'},
				{ name: "PART_NO",align:"right", width:'15%'},
				{ name: "PARTI", width:'50%'},
				{ name: "MRP", width:'5%'},
				{ name: "GROP", width:'5%'},
				{ name: "CATE", width:'10%'},
				{ name: "UNIT", width:'10%'}
			],
			height: ht,
			width: wd,
			toppager: true,
			pager: jQuery('#perpage'),
			rowNum: 100000000,
            rowList: [10, 20, 30, 100000000],
            loadComplete: function () {
               $("option[value=100000000]").text('All');
            },
			sortname: "PART_NO",
			sortorder: "asc",
			emptyrecords: 'BLANK',
            loadonce: true,
            shrinkToFit: true,
			height: 'auto',
			viewrecords: true,
			caption: "PRICE LIST"
		}).navGrid('#perpage', { edit: false, add: false, del: false, refresh: true, search: true, view: true, cloneToTop: true }); 	
	});
	</script>
<div style="margin-left:2%;margin-right:1%;background-color :orange">
<table id="list_records" ></table> 
<div id="perpage"></div>
<hr/>
</div>
</html>