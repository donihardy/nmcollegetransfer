<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage alamogordobgimage img-responsive">
         
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
              <p>Visit: <a href="http://nmsua.edu/">NMSU Alamogordo Website</a><br />
                Visit: <a href="http://nmsua.edu/facilities/maps/">NMSU Alamogordo Map</a></p>

              </div>
            </div>

             <?php //Begin Side menu ?>
             <?php require '../includes/sidemenu.php'; ?>
             <?php //End Side menu ?>
                               
               <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
