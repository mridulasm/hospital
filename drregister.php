<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_management";

$d_username = $_POST['d_username'];
$d_name = $_POST['d_name'];
$d_department = $_POST['d_department'];
$d_no = $_POST['d_no'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO patient_details (d_username,d_name,d_department,d_no)
    VALUES ('$d_username','$d_name','$d_department','$d_no')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
