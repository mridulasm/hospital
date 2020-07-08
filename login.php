<?php
session_start();
require_once('config.php');

		if(isset($_POST['login']))
		{
			$username=$_POST['p_username'];
			$password=$_POST['p_password'];
			$sql="select * from patient_details where p_username='$username' and p_password='$password'";
			$result=$conn->query($sql);
                if($result->num_rows>0 and (strcmp($username,'admin')))
                {
                    $_SESSION['p_username']=$username;
                    header('location:patientprof.php');
				}
				elseif ($result->num_rows>0 and !(strcmp($username,'admin')))
				{
					$_SESSION['p_username']=$username;
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