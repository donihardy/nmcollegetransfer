<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage enmuroswellbgimage">
         
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY-ROSWELL</a>
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
              <a href="index.php">ENMU-ROSWELL</a>
            </li>
            <li>
              STEM DEGREES
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>STEM Degrees</h3>
           <div class="subtitle">
             <p>Biology<br />
               Computer Applications &#38; Support<br />
               Chemistry<br />
               Engineering and Design Technology<br />
               Geology<br />
               Mathematics<br />
               Renewable Energy Technology<br />
               Industrial Engineering Technology<br />
               Media Arts<br />
               Occupational Safety and Environmental Management Techologies<br />
               Physics<br />
               Statistics</p>
             </div>
           </div></div>
           
           <?php //Begin Side menu ?>
           <?php require '../includes/sidemenu.php'; ?>
           <?php //End Side Menu ?>
           
           <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
