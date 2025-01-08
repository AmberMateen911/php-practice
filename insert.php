<?php
include "php-pdo.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (
        isset($_POST['name'], $_POST['course'], $_POST['batch'], $_POST['city'], $_POST['year']) &&
        !empty($_POST['name']) && !empty($_POST['course']) && !empty($_POST['batch']) && !empty($_POST['city']) && !empty($_POST['year'])
    ) {
        $name = $_POST['name'];
        $course = $_POST['course'];
        $batch = $_POST['batch'];
        $city = $_POST['city'];
        $year = $_POST['year'];

        $insertData = $conn->prepare("INSERT INTO students (name, course, batch, city, year) 
        VALUES (:name, :course, :batch, :city, :year)");
        $insertData->bindParam(':name', $name);
        $insertData->bindParam(':course', $course);
        $insertData->bindParam(':batch', $batch);
        $insertData->bindParam(':city', $city);
        $insertData->bindParam(':year', $year);

        if ($insertData->execute()) {

            header("Location: " . $_SERVER['PHP_SELF']);
            exit;

        } else {
            echo "Error inserting record";
        }
    }
    else{
        echo "All fields are required";
    }
}
?>

    <form method="POST">
        <input type="text" name="name" placeholder="Name" required >
        <input type="text" name="course" placeholder="Course" required >
        <input type="text" name="batch" placeholder="Batch" required >
        <input type="text" name="city" placeholder="City" required >
        <input type="number" name="year" placeholder="Year" required >
        <button type="submit">Add Student</button>
    </form>