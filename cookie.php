
<!-- <hmtl>

    <form action="" method="post">
    <input type="text" name="user">
    <br>
    <br>
    <button name="button" value="set">Set Cookie</button>
    <br>
    <br>
    <button name="button" value="display">Display Cookie</button>
    <br>
    <br>
    <button name="button" value="del">Delete Cookie</button>
    </form>
</hmtl> -->

<?php 
    //  if(isset($_POST['button'])){
    //     if($_POST['button'] == 'set'){
    //         $cook = $_POST['user'];
    //         setcookie("user", $cook);
    //         echo "Cookie set successfully";
    //     }

    //     if($_POST['button'] == 'display'){
    //      if(isset($_COOKIE['user'])){
    //         echo "Cookie is: " . $_COOKIE['user'];
    //      }
    //     }

    //     if($_POST['button']=='del'){
    //         setcookie("user", null,-1); // here -1 is time period to delete the cookie.
    //             echo "Cookie deleted successfully";
       
    //     }

        
    //  } 


    //MY PRACTICE -------------
?>

<html>
<form action="" method="post">

<input type="text" name="username">
<br>
<br>
<button name="button" value="set">set cookie</button>
<br>
<br>
<button name="button" value="display">display cookie</button>
<br>
<br>
<button name="button" value="del">Delete cookie</button>
</form>


<?php 
if (isset($_POST['button'])){
    if($_POST["button"]=='set'){
        $val = $_POST['username'];
        $cook =  setcookie("username", $val);
        if(($val == "")){
        echo "please fill the field";
        }
        else{
            echo "Cookie is set";
        }
     
      
    }
 
    if($_POST['button'] == 'display'){
        if(isset($_COOKIE['username'])){
            echo 'Cookie is: '. $_COOKIE['username'];
        }
        else{
           echo  "Cookie can't be display bcz it is not set";
        }
      
    }

    if(($_POST['button'] == 'del')){
        if(isset($_COOKIE['username'])){
            setcookie("username", null, -1);
        }
        else{
            echo  "Cookie can't be deleted bcz it is not set";
        }
    }
}
else{
    echo "No button pressed no cookie is set";
}


?>

</html>