<!-- <html>
<form action="" method="post">

<input type="text" name="user">
<br>
<br>
<button name="button" value="set">Set</button>

<br>
<br>
<button name="button" value="get">Get</button>
<br>
<br>
<button name="button" value="del">Delete</button>
</form>

</html> -->

<?php 
// session_start();
// if(isset($_POST['button'])){
//     if($_POST['button'] == 'set'){
//         $val = $_POST['user'];
//         $_SESSION['user']= $val;
//         echo "session started";
//     }

//     if ($_POST['button']== 'get'){
//         echo $_SESSION['user'];
//     }

//     if($_POST['button']== 'del'){
//         session_destroy();
//     }
// }


?>

<html>
<form action="" method="post">

<input type="text" name="username">
<br>
<br>
<button name="button" value="set">Set</button>

<br>
<br>
<button name="button" value="display">Dispaly</button>
<br>
<br>
<button name="button" value="del">Delete</button>
</form>
</html>

<?php 

session_start();
if(isset($_POST['button'])){
    if($_POST['button'] == 'set'){
        $val = $_POST['username'];
        $_SESSION['username'] = $val;
        if($val == ""){
            echo "please enter text in input field";
        }
       else{
        echo "Sessions is set";
    } 
    }

    if($_POST['button']== 'display'){
        if($_SESSION['username'] == ""){
            echo  "can't display session data bcs it is not set";
        }
        else{
            echo"Session data is: " .$_SESSION['username'];
        }
    }

    if($_POST['button']=='del'){
        session_destroy();
        echo 'Session deleted';

    }
    }


?>