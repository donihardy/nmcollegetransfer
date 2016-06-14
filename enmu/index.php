<?php include '../includes/header.php'; ?>

  <title>NM COLLEGE & TRANSFER 
    - ENMU</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage enmubgimage img-responsive">
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
              ENMU
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><img class="schoolimg img-responsive pull-right" src="../images/enmu.jpg"  alt="Responsive Image" ><p>Students choose Eastern New Mexico University for its personal touch, accredited academic programs and affordable costs. ENMU offers a variety of services to help students succeed in their academic, personal and professional lives. That's why our slogan is "Student Success—that's what it's all about!"</p>
            <p><a href="http://www.enmu.edu">ENMU Website</a><br />
              <a href="http://www.enmu.edu/admission/campus-map">Map</a></p>
            </div>
          </div>
          
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
