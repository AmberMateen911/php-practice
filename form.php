<html>
    <head>
        <style>
            form{
               display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
                margin-top: 100px;
            }
            fieldset{
                display: flex;
                flex-direction: column;
                width: 30%;
               
            }
            legend{
                text-align: center;
            }
            input{
                height: 30px;
            }
            #btn{
                background-color: green;
                color: white;
                outline: none;
                border: none;
                padding: 5px 8px ;
               
            }
            #btn:hover{
                background-color: rgb(100, 150, 100);
            }
            p{
                font-size: 18px;
                font-family: sans-serif;
            }
            h5{
                color:red;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
<?php include 'header.php';?>

        
    <form method="post" action="main.php " >
        <fieldset>
        <legend> Fill The From</legend>
        <label for="fname">FirstName:</label>
        <input type="text" name="fname" id="fname">
        <label for="lname">LastName:</label>
        <input type="text" name="lname" id="lname"><br><br>
        <input type="submit" id="btn">
    </fieldset>
    </form>

    <?php 


    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = htmlspecialchars($_REQUEST['fname']);
        $lname = htmlspecialchars($_REQUEST['lname']);
       

        if(empty($fname && $lname)){
            
            echo "<form><h5>Please fill out the both field</h5></form>";

        }
    
        else{
            echo "<br> <form> <p> FirstName is: <b>" . strtoupper($fname) . "</b>"."<br> LastName is: <b>" .  strtoupper($lname). "</b></p></form>" ;
        }
    }
    
    ?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
   Ename: <input type="text" name="ename" id="ename">
   <input type="submit" value="send">
</form>




    </body>
</html>

<?php
  $ename = $_POST['ename'];
if(empty($ename)){
echo 'please fill out the field';
}
  else{
    echo $ename;
  }
    
?>
