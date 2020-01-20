<?php

SESSION_START();

include('database_connection.php');
echo $scope;
//$con=mysqli_connect("localhost","dvdUser","scribble","dvdList") or die(mysql_error());
$result=mysqli_query($con,"select * from users WHERE Username='$_POST[username]' AND Password='$_POST[password]'");

$numrows=mysqli_num_rows($result);

IF ($numrows=="1"){
	$_SESSION['username']=$_POST['username'];
} ELSE {
	echo "The username and password entered are incorrect";
	echo "<br><br><a href='index.php'>Back to login</a>";
	exit();
}

header('Location: database_edit_delete.php');

?>
