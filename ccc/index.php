<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage clovisccbgimage img-responsive">
         
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
          <a class="navbar-brand ccc" href="index.php">CLOVIS COMMUNITY<br />COLLEGE</a>
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
              CCC
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <img class="schoolimg img-responsive pull-right col-lg-6" src="../images/cloviscc.jpg"  alt="Responsive Image">
            <p >Everyday, more and more students are looking for affordable education right here in our community. At Clovis Community College, our goal is to put you, the learner, at the center of all of our decision making.</p>

          <p>Visit: <a href="http://www.clovis.edu">CCC Website</a><br />
            Visit: <a href="http://www.clovis.edu/about/docs/CampusMap.pdf">CCC Map</a></p>

          </div>
        </div>
        
        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side menu ?>
        
          <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
