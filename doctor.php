<html>
<head>
        <title>Registeration</title>  
        <link rel="stylesheet" type="text/css" href="drregisteration.css">
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
                    <form method="POST" action="drregister.php">
                        <table>
                            <tr>
                                <td align="center"><B>REGISTRATION FORM<B></td>
                            </tr>
                            <tr>
                                <td>Username: </td>
                                <td><input type="text" name="d_username"></td>                    
                            </tr>
                            <tr>
                                <td>Name: </td>
                                <td><input type="text" name="d_name"></td>                    
                            </tr>
                            <tr>
                                <td>Department: </td>
                                <td><input type="text" name="d_department"></td>
                            </tr>
                            <tr>
                                <td>Passord: </td>
                                <td><input type="password" name="d_password"></td>
                            </tr>
                            <tr>
                                <td>Contact no.: </td>
                                <td><input type="text" name="d_no" pattern="[0-9] {10}"></td>
                            </tr>
                            <tr> 
                                <td> <a href="drregister.php"><input type="button" name="register" value="register"style="background-color: rgba(17, 117, 211, 0.726);" ></a></td>
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
                    <form name="drUser" method="post" action="drlogin.php">
                        <table>
                            <tr>
                                <td align="center"><B>Login<B></td>
                            </tr>
                            <tr>
                                <td>Username: </td>
                                <td><input type="text" name="d_username"></td>                    
                            </tr>
                            <tr>
                                <td>Password: </td>
                                <td><input type="text" name="d_password"></td>                    
                            </tr>
                            <tr> 
                                <td> <a href="drprofile.html"><button name="login" type="submit" style="background-color: rgba(17, 117, 211, 0.726);" >Login</button></td>
                            </tr>
                        </table>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    
    
    </div>
</div>
    </div>

<?php
    if (isset($_POST['Login']))
    {
        $d_username=$_POST['d_username'];
        $d_password=$_POST['d_password'];
        $sql="select * from doctor_details where username='$d_username' and password='d_password'";
        $result=$conn->query($sql);
            if($result->num_rows>0 and (strcmp($d_username,'admin')))
            {
                $_SESSION['d_username']=$d_username;
                header('location:drprofile.html');
            }
            elseif ($result->num_rows>0 and !(strcmp($d_username,'admin')))
            {
                $_SESSION['d_username']=$d_username;
                header('location:admin.html');
            }
            else{
                echo '<script>alert("invaalid user")</script>';
            }
    }
?>
</body>
</html>