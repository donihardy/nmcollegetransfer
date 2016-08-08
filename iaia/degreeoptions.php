<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage iaiabgimage">
         
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
          <a class="navbar-brand iaia" href="index.php">INSTITUTE OF<br />AMERICAN INDIAN ARTS</a>
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
              <a href="index.php">IAIA</a>
            </li>
            <li>
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            Visit: <a href="http://www.hed.state.nm.us/institutions/general-ed-core-course-transfer-curriculum.aspx">Basic Core</a>
            <h4 id="cert">Certificates</h4>
            <p>Museum Studies<br />
              Business and Entrepreneurship<br />
              Native American Art History<br />
            </p>
            <h4 id="as">Associates Degrees</h4>
            <p>Studio Arts<br />
              Creative Writing<br />
              Museum Studies<br />
              Cinematic Arts and Technology<br />
              Indegenous Liberal Studies<br />
            </p>
            <h4 id="bs">Bachelor Degrees</h4>
            <p>Studio Arts<br />
              Creative Writing<br />
              Museum Studies<br />
              Cinematic Arts and Technology<br />
              Indegenous Liberal Studies<br />
            </p>
            <h4 id="ms">Master Degrees</h4>
            <p>Creative Writing</p>
          </div>
        </div>
        
        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side menu ?> 
        
        <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
