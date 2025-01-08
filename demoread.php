<?php
include 'php-pdo.php';
session_start(); // Start the session to store messages

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['name'], $_POST['course'], $_POST['batch'], $_POST['city'], $_POST['year']) &&
        !empty($_POST['name']) && !empty($_POST['course']) && !empty($_POST['batch']) &&
        !empty($_POST['city']) && !empty($_POST['year'])
    ) {

        $name = $_POST['name'];
        $course = $_POST['course'];
        $batch = $_POST['batch'];
        $city = $_POST['city'];
        $year = $_POST['year'];

        $students = $conn->prepare("INSERT INTO students (name, course, batch, city, year) VALUES (:name, :course, :batch, :city, :year)");
        $students->bindParam(':name', $name);
        $students->bindParam(':course', $course);
        $students->bindParam(':batch', $batch);
        $students->bindParam(':city', $city);
        $students->bindParam(':year', $year);
        $result = $students->execute();

        if ($result) {
            $_SESSION['message'] = "Student added successfully!";
        } else {
            $_SESSION['message'] = "Failed to add student.";
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $_SESSION['message'] = "All fields are required.";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']); // Clearing message after displaying it
}
?>

<html lang="en">

<body>
    <!-- Display Message -->
    <?php if (!empty($message)): ?>
        <p style="color: green;"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <!-- Form -->
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="course" placeholder="Course" required>
        <input type="text" name="batch" placeholder="Batch" required>
        <input type="text" name="city" placeholder="City">
        <input type="text" name="year" placeholder="Year" required>
        <button type="submit">Add Student</button>
    </form>
</body>

</html>