<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage wnmubgimage img-responsive">
         
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
            <p>Visit: <a href="http://www.wnmu.edu">WNMU Website</a><br />
              Visit: <a href="http://wnmu.edu/quickfacts/wnmu_map.pdf">WNMU Map</a></p>

            </div>
          </div>

          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side Menu ?>

            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
