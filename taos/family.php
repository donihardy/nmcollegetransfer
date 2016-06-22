<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - UNIVERSITY OF NEW MEXICO TAOS</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage taosbgimage">
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
              <a href="index.php">UNM TAOS</a>
            </li>
            <li>
             FAMILY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Family Life</h3>
          <h4 id="housing">Housing</h4>
          <p>No housing available.</p>
          <!--<p><a href="#">Housing</a></p>-->
          <h4 id="childcare">Child Care</h4>
          <p>The Kid's Campus serves children 6 weeks to 5 years of age. We are licensed by the New Mexico Children Youth and Families Department and participate in the Aim‐High quality rating system. We are pleased to be able to serve you and your child. UNM‐Taos Kid’s Campus opened in spring of 2008 through a grant funded by Daniel’s Foundation.</p>
          <a href="http://taos.unm.edu/kids-campus/index.html">Kid's Campus</a>
        </p>
        <h4 id="parent">Parent Info</h4>
        <p><a href="http://taos.unm.edu/triomathsci/parents.html">Upward Bound Math & Science - Parents Resources</a></p>
      </div>
    </div>

    <?php //Begin Side menu ?>
    <?php require '../includes/sidemenu.php'; ?>
    <?php //End Side menu ?>

     <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
    </div>
