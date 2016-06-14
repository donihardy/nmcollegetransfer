<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE &#38; TRANSFER 
    - NEW MEXICO HIGHLANDS UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmhubgimage">
        <img class="container-fluid">
        <!--<div class="title">NM COLLEGE TRANSFER</div> -->
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
          <a class="navbar-brand nmhu" href="index.php">NEW MEXICO<br />HIGHLANDS UNIVERSITY</a>
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
              <a href="index.php">NMHU</a>
            </li>
            <li>
              STEM DEGREES
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>STEM Degrees</h3>
            <p><h4>Science Majors</h4></p>
            <p>Biology<br />
              Chemistry<br />
              Computer & Mathematical Modeling<br />
              Computer Science<br />
              Geology<br />
              Water Resources</p>
              <p><h4>Engineering Majors</h4></p>
              <p>General Engineering</p>
              <p><h4>Mathematics Majors</h4></p>
              <p>Mathematics</p>
              <br/>
              <a href="http://www.nmhu.edu/current-students/undergraduate/">NMHU Degrees</a>
            </div></div>
            
            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side menu ?>
            
            <div id="footer">
              <?php include '../includes/footer.php'; ?>
            </div>

            <script src="../js/jquery.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/bootstrap-submenu.min.js" defer></script>
            <script src="../js/navbar.js"></script>
            <script src="../js/script.js"></script>
          </body>
          </html>
