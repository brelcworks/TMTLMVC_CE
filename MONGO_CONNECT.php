<?php
   $m = new MongoClient();
   $db1 = $m->selectDB('ANJAN');
if( $db1 ) {
	echo "ok";
}   
?>
