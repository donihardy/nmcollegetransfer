<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER
 -LUNA COMMUNITY COLLEGE</title>
<body>
  <div class="container-fluid">
    <header class="bgimage lunabgimage img-responsive">
      <img class="container-fluid">
      <!--<div class="title">NM COLLEGE TRANSFER</div> -->
      <a href="../index.php"><img id="LogoImg" src="../images/NMCollegeTransfer2.png" class="img-responsive" alt="NM College Transfer 101 Logo"></a><
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
        <a class="navbar-brand" href="index.php">LUNA COMMUNITY COLLEGE</a>
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
            LCC
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody">
          <img class="schoolimg img-responsive pull-right col-lg-6" src="../images/lunacc.jpg"  alt="Responsive Image">
          <p>Luna Community College (LCC) is the only community college in northeastern New Mexico. LCC is located in the lower slopes of the majestic Sangre de Cristo Mountain Range overlooking the city of Las Vegas, New Mexico. LCC enjoys an outstanding reputation for its caliber of facilities, teaching methods, curricula, and dedication to excellence. </p>
          <p>LCC has satellite centers in northeastern New Mexico towns of Santa Rosa and Springer. In addition, the college also has a site in Mora. These satellites, in addition to the main campus, serve participants of the Springer Municipal Schools, Maxwell Municipal Schools, and Santa Rosa Consolidated Schools, which are within Colfax and Guadalupe counties. LCC also has a presence in Pecos and Wagon Mound schools.</p>
          <p>All campuses are administered and supervised by LCC and governed by an elected Board of Trustees from the service area. Programs may be offered in any community of the service area where need is demonstrated.</p>
          <p><a href="http://www.luna.edu">LCC Website</a><br />
            <a href="http://www.luna.edu/orientation/map.html">Map</a></p>
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
