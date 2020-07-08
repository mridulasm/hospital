<?php
session_start();
require_once('config.php');
$username=$_SESSION['username'];

//retreival_query
$sql = "SELECT p_username, p_name,p_age,p_no FROM patient_details";
$result = mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
	if ($num > 0) {
	  // output data of each row

	echo "<table border='1' align='center'>
	<caption><h3>Details Table</h3></caption>
	<tr>
		<th>Username</th>
		<th>Name</th>
		<th>age</th>
		<th>contact</th>
	
	</tr>";	
	  while($row = mysqli_fetch_assoc($result)) {
	    echo "<tr>";
	    echo "<td>".$row['p_username']."</td>";
	    echo "<td>".$row['p_name']."</td>";
	    echo "<td>".$row['p_age']."</td>";
	    echo "<td>".$row['p_no']."</td>";
	    echo "</tr>";
	  }
	  echo "</table>";
	} 
	else
	{
	  echo "Empty table.";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Details Table</title>
</head>
<body style="background-color:#bdc3c7;">
		<center>
		
			<br><br>
			<a href="adminprof.php"><input type="button" name="finish" value="Finish"></a>
		</center>
</body>
</html>