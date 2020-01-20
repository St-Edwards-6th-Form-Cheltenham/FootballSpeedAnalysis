<?
include('database_connection.php');
include('security.php');

$id=$_GET['id'];

$result=mysqli_query($con,"select * from DVD WHERE ID = '$id'");

IF (!$result){

	echo "No ID found";
	exit;
}

$row=mysqli_fetch_array($result);

?>

<html>

<form method="post" action="edit_process.php">
<input type="hidden" name="id" value="<?=$row['ID']?>">

Title: <input method="text" name="title" value="<?=$row['Title']?>">

<br>

Genre: <input method="text" name="genre" value="<?=$row['Genre']?>">

<br>

Running Time: <input method="text" name="runningtime" value="<?=$row['RunningTime']?>">

<br>

Year: <input method="text" name="year" value="<?=$row['Year']?>">

<br>

Plot Summary: <input method="text" name="plotsummary" value="<?=$row['PlotSummary']?>">

<br><br>

<input type="submit" value="Edit">

</form>