<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage ntubgimage">
         
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
          <a class="navbar-brand ntu" href="index.php">NAVAJO<br />TECHNICAL UNIVERSITY</a>
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
              <a href="index.php">NAVAJO TECH</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <p>STEM Lab offers tutoring services and general use of computers.</p>
           <p> Visit: <a href="http://www.navajotech.edu/about/campus-facilities">Campus Facilities</a></p>
            <p>Career counseling is offered to provide guidance to students in selecting a career path and a corresponding academic program at NTU. The career and job placement counselor uses computer-based pre-assessment testing to evaluate an individual‘s personality, interests, skills, and aptitude in order to identify his/her career competencies.</p>
            <p>Visit: <a href="http://www.navajotech.edu/campus-life/student-support-services/counseling-advisement">Career Counseling</a></p>
            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          
            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
