<?php
include 'connection.php';


$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database_Web</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Task Managemen App</h1>
        <table border="1px" class="table_task">
            <thead>
                <tr>
                    <th>id</th>
                    <th>task</th>
                    <th>actions</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["task"] . "</td>";
                    echo "<td><a href='update.php?id=" . $row['id'] . "'>Edit</a></td>";
                    echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>

            <table>
                <form action="create.php" method="POST">
                    <input type="text" name="task" placeholder="Enter new Task">
                    <button class="btn_update" type="submit">Create</button>
                </form>
            </table>
        </table>
    </div>
</body>

</html>