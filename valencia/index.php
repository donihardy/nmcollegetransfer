<?php include '../includes/header.php'; ?>

  <title>NM COLLEGE &#38; TRANSFER 
    - UNM VALENCIA</title>
  
  <body>
    <div class="container-fluid">
      <header class="bgimage valenciabgimage img-responsive">
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
          <a class="navbar-brand valencia" href="index.php">UNIVERSITY OF NEW MEXICO<br />VALENCIA</a>
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
              UNM VALENCIA
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/valencia.jpg"  alt="Responsive Image">
            <p>The University of New Mexico Valencia Campus is located in Tome, New Mexico, halfway between Belen and Los Lunas, the two main population centers of Valencia County. The campus occupies 150 acres of rural land overlooking the Rio Grande Valley to the west, the Manzano Mountains to the east, and historic Tome Hill to the north. The campus includes nine buildings designed in a modern, Southwestern style. UNM Valencia Campus received a prestigious award from the New Mexico Society of Architecture for its outstanding landscaping.</p>
            <p><a href="http://valencia.unm.edu/index.html">UNM Valencia Website</a><br />
              <a href="https://vc.unm.edu/Map/campusmap.htm">Map</a></p>

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
