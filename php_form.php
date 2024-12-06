<?php 

if(isset($_POST['name'])){
    echo "<b>Name is: </b> " . $_POST['name'];
    echo "<br>";
    echo "<b>Email is: </b> " . $_POST['email'];
    echo "<br>";
    echo "<b>Password is: </b> " . $_POST['password'];
    echo "<br>";
    echo "<b>Gender is: </b> " . $_POST['gen'];
    echo "<br>";
    echo "<b>Skill is</b>: " . implode('<br> ', $_POST['skill']);
    echo "<br>";
    echo "<b>City is</b>: " . $_POST['city'];




}

?>