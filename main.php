<html>
    <body>
        <?php include 'header.php';?>
    </body>
</html>
<?php

$x = 70;
function my_function(){
    echo $GLOBALS['x'];
}

my_function();
echo '<br>'. $_SERVER['REQUEST_METHOD'];
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['SCRIPT_FILENAME'];
echo $_SERVER['SERVER_PROTOCOL'];
//getting name we have passed insode form.php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$name = $fname .' '. $lname;
echo '<br>' .$name;


?>

<html>
    <body>
        <br>Welcome <?php echo $_POST['fname'];?> <br>
        Your last name is: <?php echo $_POST['lname'];?> <br>
    </body>



</html>