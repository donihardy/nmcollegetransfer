<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nnmcbgimage">
         
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
          <a class="navbar-brand nnmc" href="index.php">NORTHERN NEW MEXICO <br />COLLEGE</a>
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
              <a href="index.php">NNMC</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <!--<p>Info to come</p>-->
          <p>
            The Student Success Center at Northern New Mexico College offers a variety of services, all free of charge, designed to help every student reach his/her educational goals. These services include:</p>

            <ul><li>Computer lab</li>
              <li>Self-paced computer tutorial programs</li>
              <li>Tutorial assistance</li>
              <li>Study groups</li>
              <li>Mentors</li>
              <li>Peer Tutor Application</li>
              <li>Course Placement Evaluation</li>
              <li>Internet assistance</li>
              <li>Video library</li></ul>
              <p>Visit: <a href="http://nnmc.edu/home/student-gateway/student-success-center/ ">Student Success Center</a></p>
              <p>Northern's Math Learning Center provides services for students and faculty, and is dedicated to helping students strengthen their math skills so they gain confidence and independence in math learning. The Math Learning Center welcomes all students as valued mathematicians and critical thinkers.</p>
                <ul><li>Free Drop-in Tutoring</li>
                  <li>Online Math Resources</li>
                  <li>COMPASS Placement Test Workshops</li>
                  <li>MATLAB</li>
                  <li>Online Resources</li>
                  <li>Support for Instructors</li></ul>

                  Visit: <a href="http://nnmc.edu/home/student-gateway/the-math-center/">Math Learning Center</a>
                </div>
              </div>
              
              <?php //Begin Side menu ?>
              <?php require '../includes/sidemenu.php'; ?>
              <?php //End Side menu ?>
              
               <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
