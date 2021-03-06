<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage losalamosbgimage">
         
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
          <a class="navbar-brand losalamos" href="index.php">UNIVERSITY OF NEW MEXICO<br />LOS ALAMOS</a>
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
              <a href="index.php">UNM LOS ALAMOS</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>UNM Los Alamos Advising <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>Academic advisors can provide guidance through the admission process, degree and course selection, and registration. Advisors also assist with changing a major, following up instructors’ early alerts, filing graduation petitions, and planning for baccalaureate work. Advisors can help resolve registration errors, as well. Degree-seeking students must meet with an advisor before registering for each semester to check that their chosen classes will continue to make progress toward their degrees and have their advising hold lifted.</p>
            <p>Visit: <a href="http://losalamos.unm.edu/students/advisement/index.html">UNM Los Alamos Advising</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>To schedule an appointment with an advisor, contact Student Services: Building Two, Lower Level or <a href="tel:1-505-662-0332">(505) 662-0332</a>.</p>
            <p>Visit: <a href="http://losalamos.unm.edu/students/advisement/index.html">UNM Los Alamos Advising Appointment</a></p>
          </div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

          <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
