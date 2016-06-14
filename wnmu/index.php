<?php include '../includes/header.php'; ?>

  <title>NM COLLEGE TRANSFER-WNMU</title>
</head>
<body>
  <div class="container-fluid">
    <header class="bgimage wnmubgimage img-responsive">
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
        <a class="navbar-brand wnmu" href="index.php">WESTERN NEW MEXICO <br />UNIVERSITY</a>
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
            WNMU
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody">
          <img class="schoolimg img-responsive pull-right col-lg-6" src="../images/wnmu.jpg"  alt="Responsive Image">
          <p >Accredited by the North Central Association of Colleges and Secondary Schools, the Professional Standards Commission of the State of New Mexico, the National Council for Accreditation of Teacher Education, and the Council on Social Work Education.</p>
          <p>We offer fully online master and bachelor degrees.</p>
          <p>The world's largest permanent collection of Mimbres pottery is found in our University Museum</p>
          <p><a href="http://www.wnmu.edu">WNMU Website</a><br />
            <a href="http://wnmu.edu/quickfacts/wnmu_map.pdf">Map</a></p>

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
