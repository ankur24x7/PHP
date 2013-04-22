<?php include 'conn.php'; ?>

<?php
session_start();

mysqli_select_db($con,"messenger");
$message = $_POST["ta"];
$reciever=$_SESSION["reciever"];
$sender=$_SESSION["user"];
$chat = mysqli_query($con, "INSERT INTO message VALUES ('$sender', '$reciever', '$message')");
?>
