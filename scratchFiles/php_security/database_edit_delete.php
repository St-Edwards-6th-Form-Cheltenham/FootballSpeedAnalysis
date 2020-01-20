<html><head><title>DVDs</title></head>
<body>

<?php
include('database_connection.php');
include('security.php');

$result=mysqli_query($con,"select * from DVD");

?>

<table border="1">
<tr>
<td><b>Title</b></td>
<td><b>Genre</b></td>
<td><b>Running Time</b></td>
<td><b>Year</b></td>
<td><b>Edit<b></td>
<td><b>Delete<b></td>
</tr>

<?php
// begin while loop - everything below until the closing } will be repeated for each record that the SQL query returns
while ($row=mysqli_fetch_array($result)){ 
echo "<tr><td>$row[Title]</td>";
echo "<td>$row[Genre]</td>";
echo "<td>$row[RunningTime]</td>";
echo "<td>$row[Year]</td>";
echo "<td><a href='edit.php?id=$row[ID]'>Edit</a></td>";
echo "<td><a href='delete.php?id=$row[ID]'>Delete</a></td><tr>";
} // While loop ends here
?>

</table>
<br>
<a href="database_insert_form.php">Add a film</a>
<br><br>
<a href="logout.php">Logout</a>

</body>
</html>