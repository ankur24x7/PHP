<?php include 'conn.php'; ?>



<?php

session_start();


if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == 1 && isset($_SESSION["user"]))

{


$display = $_SESSION["user"];

mysqli_select_db($con,"messenger");

$query = mysqli_query($con, "SELECT * FROM all_users WHERE userid = '$display'");


while($row = mysqli_fetch_array($query))

{

echo "<font size=20 style='font-family:Purisa;'>";

echo "Welcome" . " " . $row['FirstName'];

echo " " . $row['LastName'];
echo "</font>";

}

}


else

{
	
header("Location: Login.php");

}

?>



<a href="logout.php">
 
<table align="right">

  <tr>

    <th>logout</th>

  </tr>

</table>

</a>



<?php


echo "<iframe width='81%' height='85%' name='test' id='i' align='left' seamless='seamless'></iframe>";


?>



<?php


mysqli_select_db($con,"messenger");

$all = mysqli_query($con, "select userid from all_users WHERE userid != '$display'");


echo "<form action='message.php' target='test' method='post'>";

echo "<table border='0' align='right'>";

while($bud = mysqli_fetch_array($all))

{

$b=$bud['userid'];

echo "<tr><td><input type='radio' value='$b' name='bud' checked></td>";

echo "<td>
<font size=5 style='font-family:Purisa;'>" . $bud['userid'] . "</td></tr>";

}

echo "<td><input type='submit' value='start'></td>";

echo "</table>";

echo "</form>";


?>
