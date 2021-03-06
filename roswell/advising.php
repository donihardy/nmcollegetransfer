<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage enmuroswellbgimage">
         
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY-ROSWELL</a>
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
              <a href="index.php">ENMU-ROSWELL</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>ENMU Roswell Advising <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>The Advising and Retention Center assists undergraduate students with all aspects of academic planning. Students will meet with an academic advisor to explore their interests, discuss course options, consider programs of study, plan for the future, and address any academic concerns.</p>
            <p>“It is the people who come face-to-face with students on a regular basis who provide the positive growth experiences for students that enable them to identify their goals and talents and learn how to put them to use. The caring attitude of college personnel is viewed as the most potent retention force on a campus.” (Noel, L. 1985, p.17).</p>
            <ul><li>GPA Calculator</li>
              <li>Guide to Graduation</li>
              <li>Academic Advice</li>
              <li>Tutoring Services</li>
              <li>Personal Counseling</li>
              <li>Course Withdrawal Policy</li>
              <li>Academic Probation and Suspension</li>
              <li>Appealing Violations of Student Rights</li>
              <li>Helpful Links</li></ul>
            <p>Visit: <a href="http://www.roswell.enmu.edu/student-affairs/advising-and-retention/advising-and-retention-home">ENMU Roswell Advising and Retention</a></p>
            <h4 id="website">ENMU Advising Website</h4>
            <p>Visit: <a href="http://www.roswell.enmu.edu/student-affairs/advising-and-retention/advising-and-retention-home">ENMU Advising Website</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>Please feel free to contact us at <a href="1-575-624-7162">(575) 624-7162</a> with any transfer questions you may have.</p>
          </div>
        </div>
        
        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side menu ?> 
        
          <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
