
<?php 
// $host = "localhost";
// $username = "root";
// $password = "";


// try{
//     $conn = new PDO("mysql:host=$host; dbname:school", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// }
// catch(PDOException $err){
//     echo "Connection failed: ". $err->getMessage();
// }


// $host = "localhost";
// $username = "root";
// $password = null;
// try{
//   $conn = new PDO("mysql:host=$host; dbname=school", $username, $password);  
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// }
// catch(PDOException $error){
//     echo "Connection failed:". $error->getMessage();
// }

// $result = $conn->query("show tables");
// while($row = $result->fetch(PDO::FETCH_NUM)){
//     print_r($row);
// }


$host = "localhost";
$username = "root";
$password = null;

try{
    $conn = new PDO("mysql:host=$host; dbname=school;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
}
catch(PDOException $error){
    echo "Connection failed:". $error->getMessage();
}

echo "<br/>";
$result = $conn->query("show  tables");
while($row = $result->fetch(PDO::FETCH_NUM)){
    // print_r($row);

}
?>