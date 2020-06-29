<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $dusername = mysqli_real_escape_string($db,$_POST['d_username']);
      $dpassword = mysqli_real_escape_string($db,$_POST['d_password']); 
      
      $sql = "SELECT id FROM doctor_details WHERE username = '$dusername' and passcode = '$dpassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("d_username");
         $_SESSION['login_user'] = $dusername;
         
         header("location: drprofile.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>