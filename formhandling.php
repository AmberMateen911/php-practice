<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>
    <body>

    <?php include 'header.php';?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            Name: <input type="text" name="name" id=""><br>
            Email:<input type="email" name="email" id=""><br>
            <input type="submit" value="send" id="send-btn">      
        </form>

        <?php 
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        if(empty($name) && empty($email)){
            echo 'Both field are required';
        }
 
   else if (isset($name)=='' && isset($email)=='' ){
    echo 'fill our the form';

   }
   else { 
    echo 'your name is <b>'.$name.'</b> ' . '<br>your email is <b>' .$email . '</b>';
   }
        ?>


    </body>
</html