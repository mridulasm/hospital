<html>
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
                                <td><B>Username: <B></td>
                                <td><input type="text" name="p_username"></td>                    
                            </tr>
                            <tr>
                                <td><B>Name: <B></td>
                                <td><input type="text" name="p_name"></td>                    
                            </tr>
                            <tr>
                                <td><B>Age: <B></td>
                                <td><input type="text" name="p_age"></td>
                            </tr>
                            <tr>
                                <td><B>Passord: <B></td>
                                <td><input type="password" name="p_password" style="background-color: rgba(163, 241, 213, 0.568);"></td>
                            </tr>
                            <tr>
                                <td><B>Contact no.: <B></td>
                                <td><input type="text" name="p_no" pattern="[0-9] {10}"></td>
                            </tr>
                            <tr> 
                                <td> <a href="register.php"><input type="button" name="register" value="register"style="background-color: rgba(17, 117, 211, 0.726);" ></a></td>
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
                                <td><B>Username: <B></td>
                                <td><input type="text" name="p_username"></td>                    
                            </tr>
                            <tr>
                                <td><B>Password: <B></td>
                                <td><input type="text" name="p_password"></td>                    
                            </tr>
                            <tr> 
                                <td> <a href="login.php"><button name="login" type="submit" style= "background-color: rgba(17, 117, 211, 0.726);" >Login</button></td>
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
        $p_username=$_POST['p_username'];
        $p_password=$_POST['p_password'];
        $sql="select * from patient_details where username='$p_username' and password='p_password'";
        $result=$conn->query($sql);
            if($result->num_rows>0 and (strcmp($p_username,'admin')))
            {
                $_SESSION['d_username']=$d_username;
                header('location:patientprof.html');
            }
            elseif ($result->num_rows>0 and !(strcmp($p_username,'admin')))
            {
                $_SESSION['d_username']=$p_username;
                header('location:admin.html');
            }
            else{
                echo '<script>alert("invaalid user")</script>';
            }
    }
?>
</body>
</html>