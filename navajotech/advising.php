<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - NAVAJO TECHNICAL UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage ntubgimage">
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
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Navajo Tech Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p><strong>Services</strong></p>
            <p>The Academic Counselor coordinates with the First Year Advisor to assist in evaluating student’s abilities and interests to develop realistic academic and career goals. Advisement includes educational planning, choosing a major, planning for a certificate, an associate or a baccalaureate degree, and planning strategies for academic success.</p>
            <h4 id="website">Navajo Tech Advising Website</h4>
            <p><a href="http://www.navajotech.edu/campus-life/student-support-services/academic-advisement">Navajo Tech Advising Website</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>Call for more info:<br />
              <a href="tel:505-786-4328">(505) 786-4328</p>
              </div>
            </div>
            
            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side menu ?>
            

             <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
