<?php
session_start();
require_once('config.php');

		if(isset($_POST['login']))
		{
			$username=$_POST['d_username'];
			$password=$_POST['d_password'];
			$sql="select * from doctor_details where d_username='$username' and d_password='$password'";
			$result=$conn->query($sql);
                if($result->num_rows>0 and (strcmp($username,'admin')))
                {
                    $_SESSION['d_username']=$username;
                    header('location:drprofile.html');
				}
				elseif ($result->num_rows>0 and !(strcmp($username,'admin')))
				{
					$_SESSION['d_username']=$username;
                    header('location:admin.html');	
				}
				else 
				{
					echo '<script>alert("Invalid User Credentials!! Better Luck next time.")</script>';
				}
		}
	?>
</body>
</html>