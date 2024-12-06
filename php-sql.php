<?php 
$host = "localhost";
$username ="root";
$password = "";
$database = "school";

$conn = new mysqli ($host, $username, $password, $database);
if($conn->connect_error){
    die("Error connecting to while connecting");
}
else{
    echo "Connected successfully";
}

$result = $conn->query("show tables")-> fetch_all();
print_r($result);
foreach($result as $key => $data){
    echo $data[$key];
}

?>