<?php include '../includes/header.php'; ?>


  
  <body>
    <div class="container-fluid">
      <header class="bgimage enmubgimage">
         
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY</a>
        </div>
        
        <?php //Begin top Nav Bar ?>
        <?php require '../includes/schooltopnav.php'; ?>
        <?php //End top nav ?>
        
        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">ENMU</a>
            </li>
            <li>
              AGREEMENTS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Agreements with Other Schools</h3>
            <p>Visit: <a href="http://www.enmu.edu/2-2/cnm-albuquerque-transfer-partnership-program-options">CNM-Albuquerque</a><br />
              Visit: <a href="http://www.enmu.edu/2-2/clovis-community-college-transfer-partnership-program-options">Clovis Community College (CCC)</a><br />
              Visit: <a href="http://www.enmu.edu/2-2/enmu-roswell-transfer-partnership-program-options">ENMU-Roswell</a><br />
              Visit: <a href="http://www.enmu.edu/2-2/enmu-ruidoso-transfer-partnership-program-options">ENMU-Ruidoso</a></p>
            </div>
          </div>

          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side Menu ?>

 <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
