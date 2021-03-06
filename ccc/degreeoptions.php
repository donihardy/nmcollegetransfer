<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage clovisccbgimage">
         
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
          <a class="navbar-brand ccc" href="index.php">CLOVIS COMMUNITY<br />COLLEGE</a>
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
              <a href="index.php">CCC</a>
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
            <p>Computer Information System<br />
              Criminal Justice<br />
              Automotive Chassis Systems<br />
              Automotive Power Train Systems<br />
              Industrial Technology<br />
              Information Systems and Technology<br />
              Networking<br />
              Office Specialist<br />
              Web Technology</p>
              <p>Visit: <a href="http://www.clovis.edu/programs/index.aspx">Certificates</a></p>
              <h4 id="as">Associates Degrees</h4>
              <p>Criminal Justice<br />
                Computer Information Systems<br />
                Automotive Technology<br />
                Industrial Technology<br />
                Information Technology<br />
                Radiologic Technology<br />
              </p>
              <p>Visit: <a href="http://www.clovis.edu/programs/index.aspx">Associate Degrees</a></p>
              
            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          
            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
