<?php
    session_start();
?>
<html>
    <body style="background-image: url(bg9.jpg);">
        <head>
            <title>DrProfile</title>
            <link rel="stylesheet" href="drstyle.css">
            <style>
                .button2 {
                background-color: rgb(212, 160, 160);
                border: none;
                color: white;
                padding: 15px 25px;
                text-align: center;
                font-size: 16px;
                cursor: pointer;
                margin: 150px 6px;
                position: absolute;
                
                }
    
                .button2:hover {
                     background-color: rgb(129, 87, 87);
                }
                .linka a:hover{
                    background-color: rgba(53, 54, 54, 0.322) ;border-radius: 50px;padding: 20px
    
                }
                .navi a:hover{
                    background-color: rgba(27, 31, 34, 0.561) ;border-radius: 0px;padding: 20px
    
                }
                a{
                    text-decoration: none; color: black;
                }
                .button{background-color:transparent; border: none; color:black; padding: 20px; text-align: center;text-decoration: none;
                    display: inline-block; font-size: 20px; margin: 50px 25px; cursor: pointer;word-spacing: 30px;
                }
                .button1{ border-radius: 50px;
                }
            </style>
        </head>
    
        <body>
            <header>
                
                <nav style="background-color: transparent;">
                    <div class="navi">
                   
                    <!--<img src="ass4.jpg" class="profile-img">-->
                    <ul>
                        <li style="font-size: x-large;font-family: Bradley Hand ITC;" class="active"><b><a href="#">My profile</a></b></li>
                        <li style="font-size: x-large;font-family: Bradley Hand ITC;"><b><a href="welcome.html">Home</a></b></li>
                        
                    
                    </ul>
                  
                    </div>
                </nav>
            </header>
            <main>
                <section id="hero">
                    <div class="section-inner">
                        <h1>Hello <?php echo $_SESSION['d_username']; ?></h1>
                        <p style="font-family: Harrington;font-size: 18px;">“Profile”</p>
                    </div>
                    <br>
                    <br>
                    <a href="drview.php"><button class="button2">View patients</button></a>
    
                </section>
            </main>
    </body>
</html>