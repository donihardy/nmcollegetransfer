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
    - NMSU ALAMOGORDO</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage alamogordobgimage img-responsive">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY ALAMOGORDO</a>
        </div>

        <?php //Begin top Nav Bar ?>
        <?php require '../includes/schooltopnav.php'; ?>
        <?php //End Top Nav Bar ?>

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              NMSU ALAMOGORDO
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/nmsu_alamogordo.jpg"  alt="Responsive Image">
            <p>We are a community college located in beautiful Alamogordo, New Mexico, with the Lincoln National Forest fifteen miles to our east and White Sands National Monument fifteen miles to our west. The campus is situated “on the hill” above Alamogordo and provides inspiring views of the city and the Tularosa Basin. It offers the perfect venue for creative and motivated learning. We are one of four community colleges in the New Mexico State University system.</p>
            <P>NMSU-A was established in 1958 and has a long history of excellence that is supported by a caring community of hard working students and dedicated faculty and staff. Our primary mission is to educate the diverse population in our region. We accomplish this with award winning faculty, reasonable tuition, and excellent facilities, three of the many reasons to choose NMSU-A for your college education.</p>
              <p><a href="http://nmsua.edu/">NMSU Alamogordo Website</a><br />
                <a href="http://nmsua.edu/facilities/maps/">Map</a></p>

              </div>
            </div>

             <?php //Begin Side menu ?>
             <?php require '../includes/sidemenu.php'; ?>
             <?php //End Side menu ?>
                               
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
