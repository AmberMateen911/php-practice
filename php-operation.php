<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="course" placeholder="Course" required>
    <input type="text" name="batch" placeholder="Batch" required>
    <input type="text" name="city" placeholder="City" required>
    <input type="number" name="year" placeholder="Year" required>
    <button type="submit">Add Student</button>
</form>

<?php
include 'php-pdo.php';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    $students = $conn->prepare("INSERT INTO `students`(`id`, `name`, `course`, `batch`, `city`, `year`) 
    VALUES (NULL, '$name', '$course', '$batch', '$city', '$year')");
    $result = $students->execute();

    if ($result) {
        echo "Student added successfully!";
    } else {
        echo "Error adding student!";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: php-operation.php");
    exit(); 
}
?>

