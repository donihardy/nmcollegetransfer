<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage losalamosbgimage img-responsive">
         
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
          <a class="navbar-brand losalamos" href="index.php">UNIVERSITY OF NEW MEXICO<br />LOS ALAMOS</a>
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
              UNM LOS ALAMOS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/losalamos.jpg"  alt="Responsive Image">
            <p>UNM Los Alamos offers classes and degrees that easily transfer within UNM and to other four-year programs. We also offer degrees and certificates that meet the needs of a changing job market. Whether your goal is an advanced degree or training for a career, we offer excellent preparation for your future.</p>
            <p>Visit: <a href="http://losalamos.unm.edu/">UNM Los Alamos Website</a><br />
              Visit: <a href="http://losalamos.unm.edu/about/campus-map/index.html">Map</a></p>

            </div>
          </div>

          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
 <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
