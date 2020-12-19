<?php
   include('dashBoard.php');
   include('config.php');

   $label = $_SESSION['label'];
   echo $label;


   if(!isset($_SESSION['email'])) {
       header('location: ../../index.html');
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="../CSS/myprofile.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
    <title>Profile Card</title>
</head>
<body>
    <div class="modal">
        <img src="vdaga.jpg" alt="">
        <div class="close"></div>
    </div>
    
    <div class="container">
        <div class="card">
            <div class="header">
                <!-- <div class="hamburger-menu">
                    <div class="center"></div>
                </div> -->
                <a href="../../login&registration/logout.php" class="mail">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <div class="main">
                    <div class="image">
                        <div class="hover">
                            <i class="fas fa-camera fa-2x"></i>
                        </div>
                    </div>
                    <h3 class="name">Vimal Daga</h3>
                    <h3 class="sub-name">4CB18CS051</h3>
                </div>
            </div>

            <div class="content">
                <div class="left">
                    <div class="about-container">
                        <h3 class="title">Dept</h3>
                        <p class="text">Computer Science And Engineering</p>
                    </div>
                    <div class="about-container">
                        <h3 class="title">Desig</h3>
                        <p class="text">Head of the Department</p>
                    </div>
                    <div class="about-container">
                        <h3 class="title">Email</h3>
                        <p class="text">vimal@lw.com</p>
                    </div>
                    <!-- <div class="icons-container">
                        <a href="#" class="icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a> -->
                    <!-- </div>
                    <div class="buttons-wrap">
                        <div class="follow-wrap">
                            <a href="#" class="follow">Follow</a>
                        </div>
                        <div class="share-wrap">
                            <a href="#" class="share">Share</a>
                        </div>
                    </div> -->
                </div>

                <div class="right">
                    <div>
                        <h3 class="number">91</h3>
                        <h3 class="number-title">Posts</h3>
                    </div>
                    <!-- <div>
                        <h3 class="number">2.4K</h3>
                        <h3 class="number-title">Following</h3>
                    </div>
                    <div>
                        <h3 class="number">4.7K</h3>
                        <h3 class="number-title">Followers</h3>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>

    <!-- <hr class="line"> -->
    <div class="myposts">
        <center><h1>My Posts</h1></center>
    </div>
</body>

</html>