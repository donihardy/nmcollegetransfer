<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap-submenu.min.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/school.css">
  <link rel='shortcut icon' type='image/x-icon' href="../images/favicon.ico" />
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-78535673-1', 'auto');
    ga('send', 'pageview');

  </script>
  <title>NM COLLEGE & TRANSFER 
    - NAVAJO TECH</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage ntubgimage img-responsive">
        <img class="container-fluid">
        <!--<div class="title">NM COLLEGE TRANSFER</div> -->
        <a href="../index.php"><img id="LogoImg" src="../images/NMCollegeTransfer2.png" class="img-responsive" alt="NM College Transfer 101 Logo"></a>
      </header>
    </div>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand ntu" href="index.php">NAVAJO<br />TECHNICAL UNIVERSITY</a>
        </div>

        <!--Begin top nav-->
        
       <?php require '../includes/schooltopnav.php'; ?>

            <!--End Top Nav Bar-->

            <div id="breadcrumb">
              <ol class="breadcrumb">
                <li>
                  <a href="../index.php">HOME</a>
                </li>
                <li>
                  NAVAJO TECH
                </li>
              </ol>
            </div>
            <div class="container-fluid">
              <div class="textbody">  
                <img class="schoolimg img-responsive pull-right col-lg-6" src="../images/crownpoint.jpg"  alt="Responsive Image">
                <p>Navajo Tech is committed to offering quality technical, vocational, and academic degrees, and community education in student oriented, hands-on learning environment based on the Dine Philosophy of Education. Our primary campus is located in Crownpoint, New Mexico; two Arizona instructional sites in Chinle and Teec Nos Pos are growing rapidly!</p>
                <p><a href="http://www.navajotech.edu">Navajo Tech Website</a><br />
                  <a href="http://www.navajotech.edu/about/visit/campus-map">Map</a></p>


                </div>
              </div>
              <!-- Side menu -->
              <?php require '../includes/sidemenu.php'; ?>
          <!-- End Side Menu -->
                        <div id="footer">
                        <?php include '../includes/footer.php'; ?>
                        </div>

                        <script src="../js/jquery.min.js"></script>
                        <script src="../js/bootstrap.min.js"></script>
                        <script src="../js/bootstrap-submenu.min.js" defer></script>
                        <script src="../js/navbar.js"></script>
                        <script src="../js/script.js"></script>
                      </body>
                      </html>
