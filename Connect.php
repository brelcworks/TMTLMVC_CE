<?php
$user = "afcujvrlzjemqcva";
$pass = "BFg8WdqaarvDjTpnyxP7ojFoneT6HeB3igQG76a76eXeCkrkg7epz3Tr8ZURrty4";
$name = "dbe891d6b4ce2a48939823a5a900b1754d";
$host = "e891d6b4-ce2a-4893-9823-a5a900b1754d.mysql.sequelizer.com";

$db1 = mysqli_connect($host, $user, $pass, $name);
if($db1) {
	echo "Hello";
}
else {
	echo mysql_error();
}
?>