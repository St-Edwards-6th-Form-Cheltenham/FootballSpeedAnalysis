<?
SESSION_START();

IF (!isset($_SESSION['username'])){
	echo "sorry you can't use this page";
	exit();
}

$result=mysqli_query($con,"select * from users WHERE Username='$_SESSION[username]'");

$numrows=mysqli_num_rows($result);

IF ($numrows!="1"){
	echo "sorry you can't use this page";
	exit();
}
?>