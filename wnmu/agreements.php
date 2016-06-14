<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - WNMU</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage wnmubgimage">
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
          <a class="navbar-brand wnmu" href="index.php">WESTERN NEW MEXICO<br />UNIVERSITY</a>        
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
              <a href="index.php">WNMU</a>
            </li>
            <li>
              AGREEMENTS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Agreements with Other Schools</h3>
            <p><a href="http://wnmu.edu/wnmu-partners-with-glendale-community-college-for-biology-program/">Transfer agreements with Glendale</a></br>
              <a href="http://wnmu.edu/wnmu-signs-agreement-with-mexican-university/">Transfer agreement with Mexican University</a><br />
              <a href="http://wnmu.edu/wnmu-partners-with-cnm-for-transfer-program/">Transfer agreement with CNM</a><br />
              <a href="http://wnmu.edu/univ/consumerInfo/Transfer%20of%20Credit%20Policies%20and%20Articulation%20Agreements.htm">Articulation Agreements</a></p>        
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
