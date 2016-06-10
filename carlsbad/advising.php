<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap-submenu.min.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/school.css">
  <link rel='shortcut icon' type='image/x-icon' href="../images/favicon.ico" />
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-78535673-1', 'auto');
    ga('send', 'pageview');

  </script>

  <title>NM COLLEGE & TRANSFER 
    - NEW MEXICO STATE UNIVERSITY CARLSBAD</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage carlsbadbgimage img-responsive">      <img class="container-fluid">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY CARLSBAD</a>      </div>

          <?php //Begin top Nav Bar ?>

          <?php require '../includes/schooltopnav.php'; ?>

          <!--End Top Nav Bar-->
          
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
            <div class="textbody"><h3>NMSU Carlsbad Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
              <h4 id="geninfo">Advising General Info</h4>
              <p>The Counseling & Student Development Center (CSDC), room 107, supports students step by step through their college experience through:</p>
              <ul><li>Academic Advising</li>
                <li>Special Needs Accommodations</li>
                <li>New Student Orientation and Welcome Week</li>
                <li>Career and Job Placement</li>
                <li>Student Government and Organizations (ASNMSU Carlsbad)</li></ul>
              </p>
              <p><a href="https://carlsbad.nmsu.edu/departments/counseling-and-student-development/">NMSU Carlsbad Advising</a></p>
              <h4 id="appt">Schedule an Appointment</h4>
              <p>Academic advisors help students interpret placement test scores, select and enroll in classes, explore majors, develop degree plans and evaluate academic progress. Advisors are available by appointment during regular office hours, Monday through Thursday, 8:00 a.m. to 6:00 p.m. and Friday from 8:00 a.m. to 5:00 p.m. and on a walk-in basis as schedules permit.</p>
              <p><a href="https://carlsbad.nmsu.edu/departments/counseling-and-student-development/">NMSU Carlsbad Advising Appointment</a></p>
            </div>
          </div>

          <?php //Begin Side menu ?>
         <?php require '../includes/sidemenu.php'; ?>
          <!--End Side Menu-->

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
