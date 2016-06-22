<?php include '../includes/header.php'; ?>

  <title>NM COLLEGE &#38; TRANSFER 
    - UNM TAOS</title>
  
  <body>
    <div class="container-fluid">
      <header class="bgimage taosbgimage img-responsive">
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
          <a class="navbar-brand taos" href="index.php">UNIVERSITY OF NEW MEXICO<br />TAOS</a>
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
              UNM TAOS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/taos.jpg"  alt="Responsive Image">
            <p>UNM-Taos is one of the newest and smallest of the UNM branches, yet in 2011 was ranked as one of the top 25 community colleges in the nation for growth. We boast a sophisticated curriculum and highly qualified faculty. The campus is situated in a high mountain valley between the Rio Grande and the 1,000 year old Taos Pueblo. The campus is fully powered by one of the largest solar arrays in New Mexico, but still retains the laid-back “Taos style” ambience known throughout the southwest. If you are seeking quality education in a beautiful natural setting, apply now!</p>
            <p><a href="http://taos.unm.edu/home/">UNM Taos Website</a><br />
              <a href="http://taos.unm.edu/home/about/campus-maps/">Maps</a></p>

            </div>
          </div>

          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
 <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
