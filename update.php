
<?php include "php-pdo.php";?>
<?php 
include "php-pdo.php";
echo "welcome to update paeg";
// $id = $_GET["id"];
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getstudent = $conn->prepare("select * from students where id='$id'");
    $getstudent->execute();
    $student = $getstudent->fetchAll();
   
    $name = $student[0]['name'];
    $course = $student[0]['course'];
    $batch = $student[0]['batch'];
    $city = $student[0]['city'];
    $year = $student[0]['year'];

}
?>

<form action="" method="post">
    <input type="text" name="name" id="" value="<?php echo $name ;?>">
    <input type="text" name="course" id="" value="<?php echo $course;?>">
    <input type="text" name="batch" id="" value="<?php echo $batch;?>">
    <input type="text" name="year" id="" value="<?php echo $year;?>">
    <input type="text" name="city" id="" value="<?php echo $city;?>">
    <button value="<?php echo $id;?>" name="update">Update</button>
</form>

<?php 
if(isset($_POST['update'])){
    $id = $_POST['update'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    $updatedstudent = $conn->prepare("update students set
    name='$name',
    course='$course',
    batch='$batch',
    city='$city',
    year='$year'
    where id='$id'");
    if($updatedstudent->execute()){
        header("location:readdata.php");
    }
    else{
        echo "error in updating student";
    }
}
?>