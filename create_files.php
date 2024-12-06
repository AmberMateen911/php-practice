<!-- <html>


<form action="" method="post">
    <input type="text" name="file_name">
    <br>
    <br>
    <textarea name="content" id=""></textarea>

    <br>
    <br>
    <button>Create File</button>
</form>
</html> -->


<?php

// if(isset($_POST['file_name'])){
// $file_name ='./c_file/'. $_POST[ 'file_name'];
// $content =$_POST['content'] ;
// $file = fopen($file_name, 'w') or die('not created successfully');
// fwrite($file, $content);
// fclose($file);
// echo 'file created successfully';

// }

// else{
//     echo 'file not created successfully';
// }

?>

<html>
<form action="" method="post">
    <input type="text" name="filename">
    <br>
    <br>
    <textarea name="content"></textarea>
    <button name="button" value="create"> Creaet File</button>
</form>

</html>

<?php
if (isset($_POST['button'])) {
    if ($_POST['button'] == 'create') {
        if (isset($_POST['filename'])) {
            $file_name = './c_file/'.$_POST['filename'];
            $content = $_POST['content'];
            $file = fopen($file_name, "w") or die("Error: not created successfully");
            fwrite($file, $content);
            fclose($file);
            echo " file Created successfully:<a href='$file_name'>open file</a>";
        } else {
            echo "Please enter a file name";
        }
    }

} else {
    echo "create file by writing name";
}






?>