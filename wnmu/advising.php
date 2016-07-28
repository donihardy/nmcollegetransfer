<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - WESTERN NEW MEXICO UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage wnmubgimage">
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
          <a class="navbar-brand wnmu" href="index.php">WESTERN NEW MEXICO<br />UNIVERSITY</a>        
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
              <a href="index.php">WNMU</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>WNMU Advising <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p><strong>Services</strong></p>
            <p>Academic Advisors offer assistance to first year and undeclared second year students with class schedules and degree plans. The advisors assist students in defining academic goals and career planning. They provide guidance with appropriate class scheduling so that students can meet their desired goals. Instruction is also provided in study habits and techniques, time management skills and test anxiety.</p>
            <p><ul><li>Academic Advisors can help you:</li>
              <li>Develop a schedule that works for you</li>
              <li>Guide you in choosing the perfect degree plan</li>
              <li>Choose a major</li>
              <li>Understand the academic policies of WNMU</li></ul></p>
              
              <h4 id="website">NNMC Advising Website</h4>
              <p><a href="http://wnmu.edu/advising/">WNMU Advising Website</a></p>
              <h4 id="appt">Schedule an Appointment</h4>
              <p>To schedule an appointment:</p>
              <p><a href="tel:1-575-538-6400">(575) 538-6400</a></p>

            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          

            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
