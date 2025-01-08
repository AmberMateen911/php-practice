
<?php 
$host = "localhost";
$username = "root";
$password = null;
$database = "school";

$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
    die("Error connecting to database");
}
else{
    echo "Connected successfully";
}
?>