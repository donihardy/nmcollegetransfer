<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage gallupbgimage img-responsive">
         
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
          <a class="navbar-brand gallup" href="index.php">UNIVERSITY OF NEW MEXICO<br />GALLUP</a>
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
              UNM GALLUP
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/gallup.jpg"  alt="Responsive Image">
            <p>Chartered as a community college more than four decades ago, we operate under the aegis of the University of New Mexico as Gallup's branch campus. Although our priority has always been to serve our community as a two-year college, our association with UNM has allowed us to be flexible and stretch as the need arrives. In addition to our two-year programs, we also have the UNM Bachelor and Graduate Programs on our campus - and much, much more. Just a few of the other entities operating on our campus or under our leadership: South Campus at Zuni, Adult Basic Education Center on the North Side of Gallup, Middle College High School, Community Education and the Center for Career and Technical Education (CCTE). All these programs help to meet the needs of our very diverse community.</p>
            <p>Visit: <a href="http://www.gallup.unm.edu/">UNM Gallup Website</a><br />
              Visit: <a href="http://www.gallup.unm.edu/main/about/campusmap.php">UNM Gallup Map</a></p>

            </div>
          </div>

          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
 <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
