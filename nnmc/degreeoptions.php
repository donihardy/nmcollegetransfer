<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nnmcbgimage">
         
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
          <a class="navbar-brand nnmc" href="index.php">NORTHERN NEW MEXICO<br />COLLEGE</a>
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
              <a href="index.php">NNMC</a>
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
            <p>Barbering/Cosmetology<br />
              Electrical Technology<br />
              Film and Digital Media Arts<br />
              Nursing (LPN)<br />
              Radiation Science
            </p>
            <p>Visit: <a href="http://nnmc.edu/home/academics/degrees-certificates/">Certificates</a></p>
            <h4 id="as">Associates Degrees</h4>
            <p>Biology<br />
              Chemistry<br />
              Electrical Technology<br />
              Environmental Science<br />
              Information Engineering Technology<br />
              Math and Physical Science<br />
              Electromechanical Engineering Tech (Pre-Engineering)<br />
              Software Engineering<br />
              Wildland Fire Science<br />
            </p>
            <p><a href="http://nnmc.edu/home/academics/degrees-certificates/">Associate Degrees</a></p>
            <h4 id="ba">Bachelor Degrees</h4>
            <p>Biology (Molecular and Cell OR Ecology and Evolutionary Biology)<br />
              Environmental Science<br />
              Information Engineering Technology<br />
              Math and Physical Science (Math with concentrations in Engineering, IT, Chemistry or Physics)<br />
              Electromechanical Engineering Tech</p>
              <p>Visit: <a href="http://nnmc.edu/home/academics/degrees-certificates/">Bachelor's Degrees</a></p>
            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          
            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
