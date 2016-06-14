<?php include '../includes/header.php'; ?>



  <title>NM COLLEGE & TRANSFER 
    - NMT</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmtbgimage">
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
          <a class="navbar-brand nmt" href="index.php">NEW MEXICO TECH</a>
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
              <a href="index.php">NMT</a>
            </li>
            <li>
              STEM DEGREES
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">

            <h3>STEM DEGREES</h3>
            <p><h4>Science Majors</h4></p>
            Biology<br />
            Chemistry<br />
            Earth Science<br />
            Geology<br />
            Geochemistry<br />
            Geophysics<br />
            Hydrology<br />
            Physics<br>
            <p><h4>Engineering Majors</h4></p>
            Chemical Engineering<br />
            Civil Engineering<br />
            Computer Science<br />
            Information Technology<br />
            Environmental Science<br />
            Electrical Engineering<br />
            Environmental Engineering<br />
            Materials Engineering<br />
            
            Mechanical Engineering<br />
            Mineral Engineering<br />
            Petroleum Engineering<br />
            <p><h4>Mathematics</h4></p>
            Mathematics
          </p>
        </div>

        
      </div>
    </div>

    <?php //Begin Side menu ?>
    <?php require '../includes/sidemenu.php'; ?>
    <?php //End Side Menu ?>

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
