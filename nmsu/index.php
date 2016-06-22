<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - NEW MEXICO STATE UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmsubgimage img-responsive">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO<br />STATE UNIVERSITY</a>
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
              NMSU
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/NMSU_Skeen_Hall.jpg"  alt="Responsive Image">
            <p>We are New Mexico’s land-grant institution, a comprehensive research institution of higher education dedicated to teaching, research, and service at the undergraduate and graduate levels. NMSU is a NASA Space Grant College, a Hispanic-serving institution and is home to the very first Honors College in New Mexico. We have been recognized by Forbes magazine as one of America’s Top Colleges for 2014. </p>
            <p><a href="http://www.nmsu.edu">NMSU Website</a><br />
              <a href="https://maps.nmsu.edu/">Map</a></p>

            </div>
          </div>

          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
 <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
    </div>
