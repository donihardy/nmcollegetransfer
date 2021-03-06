<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage carlsbadbgimage img-responsive">       
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY CARLSBAD</a>      </div>

          <?php //Begin top Nav Bar ?>
          <?php require '../includes/schooltopnav.php'; ?>
          <?php //End Top Nav Bar ?>
          
          <div id="breadcrumb">
            <ol class="breadcrumb">
              <li>
                <a href="../index.php">HOME</a>
              </li>
              <li>
                <a href="index.php">NMSU CARLSBAD</a>
              </li>
              <li>
                ADVISING
              </li>
            </ol>
          </div>
          <div class="container-fluid">
            <div class="textbody"><h3>NMSU Carlsbad Advising <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
              <h4 id="geninfo">Advising General Info</h4>
              <p>The Counseling & Student Development Center (CSDC), room 107, supports students step by step through their college experience through:</p>
              <ul><li>Academic Advising</li>
                <li>Special Needs Accommodations</li>
                <li>New Student Orientation and Welcome Week</li>
                <li>Career and Job Placement</li>
                <li>Student Government and Organizations (ASNMSU Carlsbad)</li></ul>
              <p>Visit: <a href="https://carlsbad.nmsu.edu/departments/counseling-and-student-development/">NMSU Carlsbad Advising</a></p>
              <h4 id="appt">Schedule an Appointment</h4>
              <p>Academic advisors help students interpret placement test scores, select and enroll in classes, explore majors, develop degree plans and evaluate academic progress. Advisors are available by appointment during regular office hours, Monday through Thursday, 8:00 a.m. to 6:00 p.m. and Friday from 8:00 a.m. to 5:00 p.m. and on a walk-in basis as schedules permit.</p>
              <p>Visit: <a href="https://carlsbad.nmsu.edu/departments/counseling-and-student-development/">NMSU Carlsbad Advising Appointment</a></p>
            </div>
          </div>

         <?php //Begin Side Menu ?>
         <?php require '../includes/sidemenu.php'; ?>
         <?php //End Side Menu ?>

            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
