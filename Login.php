<?php include 'conn.php'; ?>



<?php

session_start();

if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == 1)
  
{
	
header("Location: Profile.php");
  
}

else
  
{
    
$_SESSION["loggedin"] = 0;
  
}

?>


<?php

echo "<html><body>";

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?> ">


Username:<?php echo "<input type='text' name='username' /> "; ?>

Password:<?php echo "<input type='password' name='pwd' />"; ?>



<input type="submit" value="Login">

</body>

</form>

</html>




<?php 

mysqli_select_db($con,"messenger");


if( isset($_POST["username"]) && isset($_POST["pwd"]))

{



$u=$_POST['username'];
$login=mysqli_query($con, "SELECT * FROM all_users WHERE userid = '$u'");


$row = mysqli_fetch_array($login);

	
}
if (isset($_POST["username"]) && isset($_POST["pwd"])) 
{
if ($_POST['username'] == $row['userid'] && sha1($_POST['pwd']) == $row['password']
)
{
		
$_SESSION["loggedin"] = 1;
		
$_SESSION["user"] = $_POST['username'];
		
header("Location: Profile.php");
	
}
	
else
	
{
		
echo "Please provide correct login details";
	
}

}

?>