<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "mydatabase");

// Check connection
if (!$conn) {
    die("Connection failed");
}

// Get all users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>

<h2>Users List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
    </tr>

    <?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
