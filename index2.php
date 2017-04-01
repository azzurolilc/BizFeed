
<?php

$myfile = fopen("index2.txt", "w");

// function sayHiBack() {
   // Check if we have parameters w1 and w2 being passed to the script through the URL
   if (isset($_GET["w1"]) && isset($_GET["w2"])) {

      // Put the two words together with a space in the middle to form "hello world"
      $hello = $_GET["w1"] . " " . $_GET["w2"];
      echo "$hello ";

      $myfile = fopen("index2.txt", "w") or die("Unable to open file!");
      fwrite($myfile, $hello);
      fclose($myfile);
   }
// }

?>