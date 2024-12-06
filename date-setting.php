<?php 
echo date("Y M D");
echo "<br>";
 echo date_default_timezone_get();
 echo "<br>";
date_default_timezone_set("Asia/Karachi");
 echo date("h:i:s");


?>