<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - SANTA FE COMMUNITY COLLEGE</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage sfccbgimage">
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
          <a class="navbar-brand sfcc" href="index.php">SANTA FE<br />COMMUNITY COLLEGE</a>
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
              <a href="index.php">SFCC</a>
            </li>
            <li>
              AGREEMENTS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Agreements with Other Schools</h3>
            <div class="subtitle"><div class="transfer">
              <p>The Santa Fe Higher Education Center (SFHEC) is a partnership among four universities and Santa Fe Community College. The partner universities are Institute of American Indian Arts (IAIA), New Mexico Highlands University (NMHU), New Mexico State University (NMSU) and University of New Mexico (UNM). The partner universities at the SFHEC offer courses leading to baccalaureate and graduate degrees, which will be located at 1950 Siringo Road beginning January 2015.</p>
              <a href="http://hec.sfcc.edu/programs/">Santa Fe Higher Education Center</a>
            </div>
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
