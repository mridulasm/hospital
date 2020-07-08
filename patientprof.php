<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Patient Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      
    }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
#book
{
  font-size: large;
}
#booking-box
{
  background-color: transparent
}
  </style>
</head>

<body style="background-image: url(bg5.jpg);">

<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Patient</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">My profile</a></li>
        <li><a href="welcome.html">Home</a></li>
        <li><a href="pview.php">View</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="welcome.html"><span class="logout"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron" style="background: transparent;">
  <div class="container text-center" >
    <h1>Medicare</h1> 
    <h3>Hello <?php echo $_SESSION['p_username']; ?></h3>     
    <p>We care god cures..</p>
    <a href="view.php"><button type="button">view</button></a>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center" div id="doctor">    
  <h3>Our Specialities..</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <!-----------------------------------------flip card----------------------------------------------------->
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="icon text-center pt-4 ">
                    <i class="fa fa-user card-icon"></i>
                    <div class="card-text pt-2"><h3>Orthopeadics</h3></div>
                 </div>
              </div>
              <div class="flip-card-back">
                <h1>Dr.William Spark</h1> 
                <p>Orthopeadics</p> 
                <p>We love that guy</p>
              </div>
            </div>
          </div>
    </div>
    <div class="col-sm-4"> 
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="icon text-center pt-4 ">
                    <i class="fa fa-user card-icon"></i>
                    <div class="card-text pt-2"><h3>Heart</h3></div>
                 </div>
              </div>
              <div class="flip-card-back">
                <h1>Dr.John Doe</h1> 
                <p>Cardiac Surgeon</p> 
                <p>We love that guy</p>
              </div>
            </div>
          </div>
    </div>
    <div class="col-sm-4"> 
      
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="icon text-center pt-4 ">
                    <i class="fa fa-user card-icon"></i>
                    <div class="card-text pt-2"><h3>Neurology</h3></div>
                 </div>
              </div>
              <div class="flip-card-back">
                <h1>Dr.Carl Bencs</h1> 
                <p>Neurologist</p> 
                <p>We love that guy</p>
              </div>
            </div>
          </div>
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-4"> 
      
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="icon text-center pt-4 ">
                    <i class="fa fa-user card-icon"></i>
                    <div class="card-text pt-2"><h3>Orthopaedics</h3></div>
                 </div>
              </div>
              <div class="flip-card-back">
                <h1>Dr.Saire Jacob</h1> 
                <p>Orthopaedics</p> 
                <p>We love that guy</p>
              </div>
            </div>
          </div>
    </div>
    <div class="col-sm-4"> 
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="icon text-center pt-4 ">
                    <i class="fa fa-user card-icon"></i>
                    <div class="card-text pt-2"><h3>Dermatology</h3></div>
                 </div>
              </div>
              <div class="flip-card-back">
                <h1>Dr.Joy Lae</h1> 
                <p>Dermatologist</p> 
                <p>We love that guy</p>
              </div>
            </div>
          </div>
    </div>
    <div class="col-sm-4"> 
      
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="icon text-center pt-4 ">
                    <i class="fa fa-user card-icon"></i>
                    <div class="card-text pt-2"><h3>Pediatrician</h3></div>
                 </div>
              </div>
              <div class="flip-card-back">
                <h1>Dr.Cerry Matt</h1> 
                <p>Pediatrician</p> 
                <p>We love that guy</p>
              </div>
            </div>
          </div>
    </div>
  
  </div>
</div><br><br>
<!-----------------------------------------booking------------------------------------->
<div class="container-fluid bg-3 text-center" id="book">
  <div class="row">
    <div class="row justify-content-center">
      <div class="col-4">
        <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Bookings</h1>
      </div>  
  </div>
    
  <div class="row " id="booking-box">
      <div class="col-sm-4">
        
      </div>
      <div class="col-sm-4"> 
        <form method="POST" action="booking.php">
          <table>
            
              <tr>
                  <td>Name: </td>
                  <td><input type="text" name="p_name"></td>                    
              </tr>
              <tr>
                  <td>Age: </td>
                  <td><input type="text" name="p_age"></td>
              </tr>
              <tr>
                  <td>Doctor</td>
                  <td><input type="password" name="doctor"></td>
              </tr>
              <tr>
                  <td>Contact no.: </td>
                  <td><input type="text" name="p_no"></td>
              </tr>
              <tr> 
                  <td> <input type="submit" style="background-color: rgba(17, 117, 211, 0.726);"></td>
              </tr>
          </table>
      </form></div>
      </div>
    </div>
  </div> 
</div>

</html>
