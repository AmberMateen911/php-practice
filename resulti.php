<html>
<body>

<?php 

include 'header.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' ){
  $name = htmlspecialchars($_POST['fname']);
  if (empty($name)){  
   
   
    $_SESSION['message'] = "Please enter a name";
    header('Location: super_global.php'); // Redirect back to the same page
    exit(); // Stop further execution
  }
  else{  
  
     echo 'Welcome <b>'.   $_POST["fname"] .'</b>';
       
  }
}
  ?>




</body>
</html>