<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage valenciabgimage">
         
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
          <a class="navbar-brand valencia" href="index.php">UNIVERSITY OF NEW MEXICO<br />VALENCIA</a>
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
              <a href="index.php">UNM VALENCIA</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>UNM Valencia Advising <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>Students who have decided upon a UNM-Valencia Campus or UNM degree major are encouraged to meet with UNM–Valencia Campus advisors (faculty or student services staff) to develop a program of study plan and to make sure that steady progress is being made towards completion of the degree.</p>
            <p>Visit: <a href="http://valencia.unm.edu/students/advisement-and-counseling/services.html">UNM Valencia Advising</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>Please drop by to make an appointment or walk-in basis from 8:30 a.m. to 4:30 p.m. Monday through Friday, or call 925-8560 or email <a href="mailto:vcadvise@unm.edu">vcadvise@unm.edu</a>.</p>
            <p>Visit: <a href="http://valencia.unm.edu/students/advisement-and-counseling/services.html">UNM Valencia Advising Appointment</a></p>
          </div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

          <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
