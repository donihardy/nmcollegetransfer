<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER 
  - NEW MEXICO STATE UNIVERSITY DO&#209;A ANA</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage donaanabgimage">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY DO&#209;A ANA</a>

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
              <a href="index.php">NMSU DO&#209;A ANA</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <h4 id="housing">Academic</h4>
          <p><a href="http://dacc.nmsu.edu/tutoring/">Tutoring</a><br />
            <a href="http://dacc.nmsu.edu/computer-labs/">Computer Labs</a><br />
            <a href="http://dacc.nmsu.edu/sa/">Student Activities</a><br />

          </p>

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
