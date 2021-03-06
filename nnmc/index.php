<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nnmcbgimage img-responsive">
         
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
          <a class="navbar-brand nnmc" href="index.php">NORTHERN NEW MEXICO <br />COLLEGE</a>
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
              NNMC
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <img class="schoolimg img-responsive pull-right col-lg-6" src="../images/nnmc.jpg"  alt="Responsive Image">
            <p >Northern New Mexico College recognizes and incorporates the place-based uniqueness of northern New Mexico into academics and campus life.
              Northern's communities of service are deeply tied to the region, a fact that influences both the educational choices of our students and the ways in which we serve them.</p>
              <p>We primarily serve rural communities within a 40-mile radius of our main campus in Española, New Mexico, including eight Native American communities, within one of the most underserved regions in the state.</p>
            <p>Visit: <a href="http://www.nnmc.edu">NNMC Website</a><br />
              Visit: <a href="http://nnmc.edu/home/about-northern/espanola-campus-map/">NNMC Map</a></p>

            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side Menu ?>

            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
