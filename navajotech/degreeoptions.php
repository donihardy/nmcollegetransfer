<?php include '../includes/header.php'; ?>  

  <body>
    <div class="container-fluid">
      <header class="bgimage ntubgimage">
         
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
          <a class="navbar-brand ntu" href="index.php">NAVAJO<br />TECHNICAL UNIVERSITY</a>
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
              <a href="index.php">NAVAJO TECH</a>
            </li>
            <li>
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            Visit: <a href="http://www.nmcollegetransfer101.com/nmcommoncore.html">NM Common Core</a>
            <h4 id="cert">Certificates</h4>
            <p>List of certificates at Navajo Tech</p>
            Visit: <a href="http://www.navajotech.edu/academics/degree-programs/certificate">Navajo Tech Certificates</a>
            <h4 id="as">Associates Degrees</h4>
            <p>Visit: <a href="http://www.navajotech.edu/academics/degree-programs/associate-of-arts/general-education">Associates of Arts</a><br />
              Visit: <a href="http://www.navajotech.edu/academics/degree-programs/associate-of-science">Associates of Science</a><br />
              Visit: <a href="http://www.navajotech.edu/academics/degree-programs/associate-of-applied-science">Associates of Applied Science</a></p>
            <h4 id="bs">Bachelor's Degrees</h4>
            <p>Visit: <a href="http://www.navajotech.edu/academics/degree-programs/bachelor-of-science">Bachelor of Science</a><br />
              Visit: <a href="http://www.navajotech.edu/academics/degree-programs/bachelor-of-applied-science">Bachelor of Applied Science</a><br />
              Visit: <a href="http://www.navajotech.edu/academics/degree-programs/bachelor-of-arts">Bachelor of Arts</a><br />
              Visit: <a href="http://www.navajotech.edu/academics/degree-programs/bachelor-of-fine-arts">Bachelor of Fine Arts</a>
            </p>
            <h4 id="ms">Master's Degrees</h4>
            <p>Visit: <a href="http://www.navajotech.edu/academics/degree-programs/master-of-arts">Master of Arts</a>
            </p>
          </div>
        </div>
        
        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side menu ?> 
        
        <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
