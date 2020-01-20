<html><head><title>DVDs</title></head>
<body>

<?php
include('database_connection.php');
include('security.php');

$id=$_GET['id'];

$result=mysqli_query($con,"DELETE FROM DVD WHERE ID = '$id'");

IF($result){
	
	echo "Deleted";
	echo "<br><br><a href=\"database_edit_delete.php\">Back to film listing</a>";

} ELSE {

	echo "Something went wrong";
	echo mysql_error();
	
}

?>