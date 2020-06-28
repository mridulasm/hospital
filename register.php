<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_management";

$p_username = $_POST['p_username'];
$p_name = $_POST['p_name'];
$p_age = $_POST['p_age'];
$p_password = $_POST['p_password'];
$p_no = $_POST['p_no'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO patient_details (p_username,p_name,p_age,p_passsword,p_no)
    VALUES ('$p_username', '$p_name','$p_age','$p_password','$p_no')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
