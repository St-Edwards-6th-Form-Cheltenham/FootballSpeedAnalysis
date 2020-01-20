<?
include('database_connection.php');
include('security.php');
?>

<html>

<form method="post" action="dvd_insert.php">
Title: <input method="text" name="title">
<br>
Genre: <select name="genre">
  <option value="Thriller">Thriller</option>
  <option value="Sci Fi">Sci Fi</option>
  <option value="Comedy">Comedy</option>
</select>
<br>
Running Time: <input method="text" name="runningtime">
<br>
Year: <input method="text" name="year">
<br>
Plot Summary: <input method="text" name="plotsummary">
<br><br>

<input type="submit">

</form>