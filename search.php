<form action="" method="post">
    <input type="text" name="search" id="search" placeholder="search students names">
    <button>Search</button>

</form>

<?php
include "php-pdo.php";
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $students = $conn->prepare("select * from students where name like '$search%'");
    $students->execute();
    $result = $students->fetchAll();
    // $search = $_POST['search'];
    // $stmt = $pdo->prepare("SELECT * FROM users WHERE name LIKE :search");
    // $stmt->bindValue(':search', '%'.$search.'%', PDO::PARAM_STR);
    // $stmt->execute();
    // $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<table border='1'>
    <?php
    foreach ($result as $students) { ?>
        <tr>
            <td><?php echo $students['name']; ?></td>
            <td><?php echo $students['course']; ?></td>
            <td><?php echo $students['batch']; ?></td>
            <td><?php echo $students['city']; ?></td>
            <td><?php echo $students['year']; ?></td>
    </tr>
        <?php } ?>
</table>