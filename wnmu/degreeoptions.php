<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage wnmubgimage">
         
        <a href="../index.php"><img id="LogoImg" src="../images/NMCollegeTransfer2.png" class="img-responsive" alt="Responsive Image"></a>
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
          <a class="navbar-brand wnmu" href="index.php">WESTERN NEW MEXICO<br />UNIVERSITY</a>        
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
              <a href="index.php">WNMU</a>
            </li>
            <li>
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            Visit: <a href="../nmcommoncore.html">NM Common Core</a>
            <h4 id="cert">Certificates</h4>
            <p>Audio Engineering<br />
              Computer Technology<br />
              Electrical Technology
            </p>
            <p>Visit: <a href="http://wnmu.edu/degrees/">Certificates</a></p>
            <h4 id="as">Associates Degrees</h4>
            <p>Computer Technology<br />
              Electrical Technology
            </p>
            <p>Visit: <a href="http://wnmu.edu/degrees/">Associate Degrees</a></p>
            <h4 id="ba">Bachelor Degrees</h4>
            <p>Biology<br />
              Botany<br />
              Cell and Molectular Biology<br />
              Chemistry<br />
              General Science<br />
              Mathematics<br />
              Zoology
            </p>
            <p>Visit: <a href="http://wnmu.edu/degrees/">Bachelor's Degrees</a></p>
          </div>
        </div>
        
        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side menu ?> 

        <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
