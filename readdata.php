<?php
include "php-pdo.php";
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $studentdata = $conn->prepare("DELETE FROM students WHERE id = :id");
    $studentdata->bindParam(':id', $id);
    if ($studentdata->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record";
    }
    // Redirect to the same page after deletion
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$students = $conn->prepare("SELECT * FROM students");
$students->execute();
$result = $students->fetchAll();


echo "<table border='1'>";
echo "<tr>
 <th> Name</th>
 <th> Course</th>
 <th> Batch</th>
 <th> City</th>
 <th> Year</th>
<th colsapn='2'> Action</th>
 </tr>
 ";
foreach ($result as $student) {
    echo "<tr>
<td>" . $student['name'] . "</td>
<td>" . $student['course'] . "</td>   
<td>" . $student['batch'] . "</td>
<td>" . $student['city'] . "</td>
<td>" . $student['year'] . "</td>
<td><form method='POST'>
<button value=" . $student['id'] . " name='delete' > Delete </button>
</form></td>

<td><a href='update.php?id=" . $student['id'] . "'>Edit</a></td>

 </tr>";
}
echo "</table>";



?>