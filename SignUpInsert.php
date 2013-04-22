<?php include 'conn.php'; ?>



<?php


mysqli_select_db($con,"messenger");


$pwd=sha1($_POST['pwd']);

$sql="INSERT INTO all_users (FirstName, LastName, Age, EmailId, userid, password)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]','$_POST[emailid]','$_POST[userid]','$pwd')";


if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "details submitted successfully";
echo "<a href='Login.php'>LOGIN</a>";
mysqli_close($con);


?>
