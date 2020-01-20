<?php

$con=mysqli_connect("localhost","dvdUser","scribble","dvdList") or die(mysql_error());
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
	  echo "Connected to Database";
  }
  
?>