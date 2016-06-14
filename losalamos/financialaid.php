<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - UNIVERSITY OF NEW MEXICO LOS ALAMOS</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage losalamosbgimage">
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
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Grants are awarded based on need as determined by your FAFSA and do not have to be paid back. These include the Federal Pell Grant, Federal Supplemental Educational Opportunity Grant ( SSEOG) and the State Student Incentive Grant ( SSIG). In order to be eligible for SEOG and SSIG, students must have their FAFSA in by March 1.</p>
            <p><a href="http://losalamos.unm.edu/students/financial-aid/index.html">UNM Los Alamos Financial Aid Pell Grant Info</a></p>
            
            <h4 id="scholarship">Scholarships</h4>
            <p>Scholarships are awarded on a variety of criteria. Some are need based, but nearly all have certain academic requirements, such as GPA, course of study, and course load. Please see our scholarships page for more information.</p>
            <p><a href="http://losalamos.unm.edu/students/financial-aid/index.html">UNM Los Alamos Scholarship Info</a></p>
            <h4 id="loan">Loans</h4>
            <p>Loans are available for students or parents to borrow to help pay educational expenses. Students must have a FAFSA submitted in order to be considered for these federal loans. The amount of eligibility is determined by grade level.</p>
            <p><a href="http://losalamos.unm.edu/students/financial-aid/index.html">UNM Los Alamos Financial Aid Loan Info</a></p>
            <h4 id="deadlines">Deadlines</h4>
            <p>Students must have their FAFSA in by March 1.</p>
            <p><h4>UNM Los Alamos Federal School Code:</h4><strong>002663</strong></p>
            <p><a href="http://losalamos.unm.edu/students/financial-aid/index.html">SCHOOL Financial Aid Applying Info</a>
              <br /><a href="https://fafsa.gov/">FAFSA (Free Application for Student Aid) on the Web</a></p>

            </div>
          </div>

          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          <div id="footer">
            <?php include '../includes/footer.php'; ?>
          </div>

          <script src="../js/jquery.min.js"></script>
          <script src="../js/bootstrap.min.js"></script>
          <script src="../js/bootstrap-submenu.min.js" defer></script>
          <script src="../js/navbar.js"></script>
          <script src="../js/script.js"></script>
        </body>
        </html>
