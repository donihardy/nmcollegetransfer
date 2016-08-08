<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage iaiabgimage">
         
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
          <a class="navbar-brand iaia" href="index.php">INSTITUTE OF<br />AMERICAN INDIAN ARTS</a>
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
              <a href="index.php">IAIA</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>IAIA Advising <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p><strong>Services</strong></p>
            <p>Academic Advising at IAIA is designed as two distinct
              phases: First Year Advising, and Major Advising. Every
              student is assigned an Academic Advisor when they are
              accepted into the college; most students are assigned a
              First Year Advisor, and transfer students (those students
              with 24 or more transferrable credits) are assigned a Major
              Advisor. Students in First Year Advising will be transferred
              to a Major Advisor after they have completed ePortfolio,
              applied to their major, and been accepted into their
              program, usually after the second or third semester.</p>
              <h4 id="website">IAIA Advising Website</h4>
              <p>The purpose of the Student Success Center (SSC) is to support student learning and success. It is a place where students can rest, study and seek assistance from the Student Success Center’s faculty and staff. The SSC includes comfortable living room couches and chairs, a kitchen and a table where students can share a meal and/or study. It also houses the Learning Lab (Tutoring Center), which provides Learning Specialists in English and Math to tutor students. Faculty who teach Essential Studies courses in English, Math and Science work with students in offices located in SSC. Most First Year Academic Advisors are located at SSC.</p>
              <p>Visit: <a href="https://iaia.edu/student-success-center/">IAIA Advising Website</a></p>
              <h4 id="appt">Schedule an Appointment</h4>
              <p>If you have questions about advising you can ask your own
                Academic Advisor or contact the Retention Director in the
                Student Success Center or at x5707.</p>
                <p>IAIA Retention<a href="tel:1-505-424-5707"> (505) 424-5707</a></p>

              </div>
            </div>
            
            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side menu ?>
            

             <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
