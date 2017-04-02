<?php
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=testdb";
   $credentials = "user=dingwang password=1115";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

$joy = $_POST['joy'];
$anger = $_POST['anger'];
$sad = $_POST['sad'];
$contempt = $_POST['contempt'];
$surprise = $_POST['surprise'];
$username = $_POST['name'];

   $sql =<<<EOF
      INSERT INTO COMPANY123 (name, company, video, joy, anger, sad, contempt, surprise)
      VALUES ('$username', 'company01', 'video01', $joy, $anger, $sad, $contempt, $surprise);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);

   echo "The insertajax function is called.";
?>