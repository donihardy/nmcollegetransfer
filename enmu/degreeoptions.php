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
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            <p>These are the basic classes ENMU students take as a foundation of their college work. To find out more, please contact the records clerk in your college of your major or refer to our <a href="http://www.enmu.edu/academics/resources/ug-catalog/index.shtml">online catalogs</a>.</p>
            <h4 id="as">Associates Degrees</h4>
            <p>List of Associates Degrees at ENMU:</p>
            Visit: <a href="http://www.enmu.edu/degrees.shtml#associate">ENMU Main Associate Degrees</a><br />
            Visit: <a href="http://www.roswell.enmu.edu/degrees-and-programs">ENMU Roswell Associate Degrees</a><br />
            Visit: <a href="http://ruidoso.enmu.edu/index.php/academics-programs/programs">ENMU Ruidoso Associate Degrees</a>
            <h4 id="bs">Bachelor's Degrees</h4>
            <p class="subtitle">Biology<br />
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
              Wildlife and Fishery Sciences</p>
              Visit: <a href="http://www.enmu.edu/degrees.shtml#bachelors">ENMU Bachelor's Degrees</a>
              <h4 id="ms">Masters Degrees</h4>
              <p class="subtitle">Biology<br />
                Chemistry<br />
              </p>
              Visit: <a href="http://graduate.enmu.edu/degrees.shtml">ENMU Masters Degrees</a>
            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          
            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
