<?php
ini_set('mongo.native_long', strlen(decbin(~0)) == 32 ? 0 : 1);
   $db = parse_ini_file("set.ini");
   $m = new MongoClient($db['MONGO']);
   $db1 = $m->selectDB('appharbor_9spxvctt');
   $collection = $db1->SHEET1;
   $cursor = $collection->find();
   foreach ($cursor as $document) {
	   echo $document["PARTI"] . "";
   }
?>
