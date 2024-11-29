<html>
    <form action="" method="post">
        <input type="text" name="username">
        <br>
        <br>
        <input type="email" name="email">
        <br>
        <br>
        <input type="password" name="pass">
        <br>
        <button>Send</button>
 
    </form>
</html>
<pre>
<?php

//GETTING DATA AND PRINT ALL DATA BY LOOP
if($_POST){
foreach($_POST as $key=>$data){
    echo $key ." ". $data;
    echo"<br>";
}

}
else{
    echo "Data type is not post";
}
print_r($_SERVER);
?>
</pre