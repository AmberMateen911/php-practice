<html>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<br>
<br>
<button>Read File</button>
</form>

</html>

<?php 
if(isset($_FILES['file'])){
 $file_name =$_FILES['file']['tmp_name'];
$file = fopen($file_name, "r") or die("Can't open file");
echo fread($file, filesize($file_name));
fclose($file);

}





?>