<?php include 'conn.php'; ?>



<?php

session_start();


mysqli_select_db($con,"messenger");

$reciever=$_SESSION["reciever"];

$sender=$_SESSION["user"];


$history = mysqli_query($con, "select * from message where (sender='$sender' AND reciever='$reciever') OR (sender='$reciever' AND reciever='$sender')");

echo "<table>";

while($show = mysqli_fetch_array($history))

{

$messages=$show["message"];

$me=$show["sender"];

echo "<tr><td>
<font size=5 style='font-family:Purisa;'>" . "<b>" . $me . "</b>" . ":" . "<font color='red'>" . $messages . "</td></tr>";

}

echo "</table>";


?>
