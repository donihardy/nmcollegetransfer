<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage carlsbadbgimage img-responsive">
         
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY CARLSBAD</a>      </div>

          <?php //Begin top Nav Bar ?>
          <?php require '../includes/schooltopnav.php'; ?>
          <?php //End Top Nav Bar ?>

          <div id="breadcrumb">
            <ol class="breadcrumb">
              <li>
                <a href="../index.php">HOME</a>
              </li>
              <li>
                NMSU CARLSBAD
              </li>
            </ol>
          </div>
          <div class="container-fluid">
            <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/carlsbad.jpg"  alt="Responsive Image">
              <p>NMSU Carlsbad is a two-year branch community college of New Mexico State University and is independently accredited by the North Central Association. For 1998, 1999, and 2000, NMSU Carlsbad was the only two-year college in the state to be recognized consecutively by Quality New Mexico. </p>
              <p>Visit: <a href="https://carlsbad.nmsu.edu">NMSU Carlsbad Website</a><br />
                Visit: <a href="https://carlsbad.nmsu.edu/about-nmsu-carlsbad/maps-and-directions/">NMSU Carlsbad Map</a></p>

              </div>
            </div>

            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side Menu ?>

             <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
