

<!--html>
<head>
        <title>Registeration</title>  
        <link rel="stylesheet" type="text/css" href="pregisteration.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>  
<body>
    <div  >
        <div class="container mt-5">
            <div class="row " id="login-box">
                <div class="col-4 offset-2">
                    <form method="POST" action="register.php">
                        <table>
                            <tr>
                                <td align="center"><B>REGISTRATION FORM<B></td>
                            </tr>
                            <tr>
                                <td>Username: </td>
                                <td><input type="text" name="p_username" required></td>                    
                            </tr>
                            <tr>
                                <td>Name: </td>
                                <td><input type="text" name="p_name" required></td>                    
                            </tr>
                            <tr>
                                <td>Department: </td>
                                <td><input type="text" name="p_department" required></td>
                            </tr>
                            <tr>
                                <td>Passord: </td>
                                <td><input type="password" name="p_password" required></td>
                            </tr>
                            <tr>
                                <td>Contact no.: </td>
                                <td><input type="text" name="p_no" required></td>
                            </tr>
                            <tr> 
                                <td> <input type="submit" name="register" style="background-color: rgba(17, 117, 211, 0.726);" ></td>
                            </tr>
                        </table> 
                    </form>
                </div>
                <div class="col-4 offset-2">

                <div class="row">
                    <div class="col">
                        <h4>Alredy have an account?<br>Login here</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <form name="pUser" method="post" action="login.php">
                        <table>
                            <tr>
                                <td align="center"><B>Login<B></td>
                            </tr>
                            <tr>
                                <td>Username: </td>
                                <td><input type="text" name="p_username"></td>                    
                            </tr>
                            <tr>
                                <td>Password: </td>
                                <td><input type="text" name="p_password"></td>                    
                            </tr>
                            <tr> 
                                <td> <input type="submit" style="background-color: rgba(17, 117, 211, 0.726);" ></td>
                            </tr>
                        </table>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    
    
    </div>
</div>
    </div---->
<?php
    session_start();
require_once('config.php');
/*$d_username=$_SESSION['p_username'];*/
if (isset($_POST['register']))
{
$p_username = $_POST['p_username'];
$p_name = $_POST['p_name'];
$p_age = $_POST['p_age'];
$p_password = $_POST['p_password'];
$p_no = $_POST['p_no'];


$sql = "SELECT * FROM patient_details WHERE username='$p_username'";

$result=$conn->query($sql);


if ($result->num_rows>0)  {
    echo '<script> alert("username alredy taken")</script>'; 	

}else{
     $query = "INSERT INTO patient_details (p_username, p_name, p_password, p_age, p_no) 
              VALUES ('$p_username', '$p_name', '$p_password', '$p_age', '$p_no')";
     
     if ($conn->query ($query)) 
     {
        echo '<script> alert("new record created succeffully")</script>'; 
        header('location:patient.php');
     }
     else{
         echo  '<script> alert("error")</script>';
     }
        
        

    }
}

?>
</body>
</html>

registeration succefful
