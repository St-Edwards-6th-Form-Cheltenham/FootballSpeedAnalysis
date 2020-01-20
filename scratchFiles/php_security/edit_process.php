<?
include('database_connection.php');
include('security.php');

$id=$_POST['id'];
$Title=$_POST['title'];
$Genre=$_POST['genre'];
$RunningTime=$_POST['runningtime'];
$Year=$_POST['year'];
$PlotSummary=$_POST['plotsummary'];

$result=mysqli_query($con,"update dvd set Title='$Title', Genre='$Genre', RunningTime='$RunningTime', 
	Year='$Year', PlotSummary='$PlotSummary' where ID='$id'");

IF(!$result){

	echo "Something has gone wrong";
	echo mysql_error();

} ELSE {

	echo "The DVD has been updated";
	echo "<br><br><a href=\"database_edit_delete.php\">Back to film listing</a>";

}

?>