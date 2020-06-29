<?php
session_start();
require_once('config.php');
$username=$_SESSION['p_username'];

//retreival_query
$sql = "SELECT * FROM details where username='$p_username'";
$result = mysqli_query($conn,$sql);

	if (mysqli_num_rows($result)> 0) {
	  // output data of each row

	echo "<table border='1' align='center'>
	<tr>
		<th>Username</th>
		<th>Name</th>
		<th>Password</th>
		<th>Age</th>
		<th>contact</th>
		
	</tr>";	
	  while($row = mysqli_fetch_assoc($result)) {
	    echo "<tr>";
	    echo "<td>".$row['p_username']."</td>";
	    echo "<td>".$row['p_name']."</td>";
	    echo "<td>".$row['p_password']."</td>";
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
	<title>Details Table</title>
</head>
<body>
		<center>
		
			<br><br>
			<a href="welcome.html"><input type="button" name="finish" value="Finish"></a>
			
		
		
	</center>
</body>
</html>