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
        <?php //End Top Nav Bar ?>

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">ENMU</a>
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
              Biochemistry<br />
              Chemistry<br />
              Computer Science<br />
              Electronics Engineering Technology<br />
              Enviornmental Science<br />
              Forensic Biology<br />
              Forensic Chemistry<br />
              Forensic Science<br />
              Earth Science/Geology<br />
              Industrial Mathematics and Statistics<br />
              Mathematics<br />
              Microbiology<br />
              Nutrition<br />
              Wildlife and Fishery Sciences</p></div>
            </div></div>
            
            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side menu ?>
            
             <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
