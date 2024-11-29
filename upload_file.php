<html>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br>
    <button>Send</button>
</form>


</html>
<pre>
<?php

echo '<br>';
if ($_FILES) {
    $path = $_FILES['file']['name'];
    $uploadFile = "./uploads/" . $path;
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo '<br>File Uploaded Successfully <br>'. "<img src=$uploadFile alt>";
    
    } else {
        echo 'File not Uploaded';
    }
} else {
    echo 'No File Selected';
}
?>
</pre>