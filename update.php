<?php
include("connection.php");

if($_SERVER["REQUEST_METHOD"] == "GET"){
$id = $_GET["id"];
$sql = "SELECT * FROM tasks WHERE id = $id";
$result =$conn->query($sql);
$row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <input type="teks" name="task" placeholder= "Updqate task" value="<?php echo $row['task']?>">
        <button>Update</button>

    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $id = $_POST['id'];
        $task = $_POST ['task'];

        $sql = "UPDATE tasks SET task='$task' WHERE id = $id";
        $conn->query($sql);

        header("Location: index.php");

    }
    
    ?>
</body>
</html>