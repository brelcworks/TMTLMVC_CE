<?php
#Include the connect.php file
include ('connect2.php');
// Connect to the database
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
// get data and store in a json array
$from = 0;
$to = 30;
$query = "SELECT * FROM FROM MAINPOPUs LIMIT ?,?";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
/* bind result variables */
$result->bind_result($CNAME, $SNAME, $SID, $ENS, $ALSN);
/* fetch values */
while ($result->fetch())
	{
	$customers[] = array(
		'CNAME' => $CNAME,
		'SNAME' => $SNAME,
		'SID' => $SID,
		'ENS' => $ENS,
		'ALSN' => $ALSN
	);
	}
echo json_encode($customers);
/* close statement */
$result->close();
/* close connection */
$mysqli->close();
?>