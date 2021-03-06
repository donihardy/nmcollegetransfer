<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage enmuruidosobgimage">
         
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY-RUIDOSO</a>
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
              <a href="index.php">ENMU-RUIDOSO</a>
            </li>
            <li>
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            <p>The New Mexico General Education Common Core (Core) is
              designed to include as many course options as possible. While all
              courses with NMCCNS will transfer, the degree plans of (1) ENMU Ruidoso
              and (2) their selected four-year transfer institution may
              restrict the courses that may be used to fulfill Core requirements.
              Courses in the Core without NMCCNS destination may not transfer.</p>
              <p>Visit: <a href="https://issuu.com/enmuruidoso/docs/catalog_2015-2016/28">Common Core</a>.</p>
              <h4 id="as">Associates Degrees</h4>
              <p>List of Associates Degrees at ENMU:</p>
                <ul style="list-style-type:none"><li>Information Systems</li>
                  <li>Information Systems - Cybersecurity</li>
                  <li>Natural Science</li></ul>
                  <p><a href="http://ruidoso.enmu.edu/index.php/academics-programs/programs">ENMU Ruidoso Associate Degrees</a></p>
                </div>
              </div>
                       
              <?php //Begin Side menu ?>
              <?php require '../includes/sidemenu.php'; ?>
              <?php //End Side menu ?> 
             

               <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
