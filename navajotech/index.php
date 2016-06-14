<?php include '../includes/header.php'; ?>

  <title>NM COLLEGE & TRANSFER 
    - NAVAJO TECH</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage ntubgimage img-responsive">
        <img class="container-fluid">
        <!--<div class="title">NM COLLEGE TRANSFER</div> -->
        <a href="../index.php"><img id="LogoImg" src="../images/NMCollegeTransfer2.png" class="img-responsive" alt="NM College Transfer 101 Logo"></a>
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
                  NAVAJO TECH
                </li>
              </ol>
            </div>
            <div class="container-fluid">
              <div class="textbody">  
                <img class="schoolimg img-responsive pull-right col-lg-6" src="../images/crownpoint.jpg"  alt="Responsive Image">
                <p>Navajo Tech is committed to offering quality technical, vocational, and academic degrees, and community education in student oriented, hands-on learning environment based on the Dine Philosophy of Education. Our primary campus is located in Crownpoint, New Mexico; two Arizona instructional sites in Chinle and Teec Nos Pos are growing rapidly!</p>
                <p><a href="http://www.navajotech.edu">Navajo Tech Website</a><br />
                  <a href="http://www.navajotech.edu/about/visit/campus-map">Map</a></p>


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
