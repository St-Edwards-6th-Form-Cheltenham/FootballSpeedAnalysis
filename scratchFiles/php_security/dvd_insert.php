<?php
include('database_connection.php');
include('security.php');

$title=$_POST['title'];
$genre=$_POST['genre'];
$runningtime=$_POST['runningtime'];
$year=$_POST['year'];
$plotsummary=$_POST['plotsummary'];

$result=mysqli_query($con,"INSERT INTO dvd (Title, Genre, RunningTime, Year, PlotSummary) 
VALUES ('$title','$genre','$runningtime','$year','$plotsummary')");

IF(!$result){

	echo "Data insert failed <br><br>";
	echo mysqli_error($con);
	
} ELSE {

	echo "Data inserted";
	echo "<br><br><a href=\"database_edit_delete.php\">Back to film listing</a>";
	
}

?>