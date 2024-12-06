
<?php 
//converting an array into json.. it can be done using echo.
$data = ["name"=>"Ali", "age" =>"25", "class" =>"kindergarden"];
$data = json_encode($data);
echo $data;

//converting json data into array need print_r() funtion
echo "<br>";
$convtJson = '{"name":"Ali","age":"25","class":"kindergarden"}';
$convtJson = json_decode($convtJson, true);
print_r($convtJson) ;
?>