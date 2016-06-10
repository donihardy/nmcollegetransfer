<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    - UNM VALENCIA</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage valenciabgimage">
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
              ADMISSIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Admissions <a href="../questions.php#admissions"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="requirements">Admission Requirements</h4>
            <p>Applications are required for:</p>
            <p>Students who have not previously attended UNM Valencia.<br />
              Students who have not attended UNM Valencia for an academic year or more and are seeking readmission.<br />
              Students who are changing from non-degree to degree status.<br />
              Students who are changing from associate degree programs to bachelor’s degree programs.<br />
              Students who are changing from bachelor’s degree programs to associate degree programs.
            </p>
            <a href="http://valencia.unm.edu/students/admissions-and-registration/apply-now.html">General Admissions</a></p>
            <h4 id="eligibility">Eligibility</h4>
            <p>Students who wish to transfer to UNM-Valencia from other schools must meet the same admissions requirements as all other applicants.</p>
            <a href="http://valencia.unm.edu/academics/Catalog/admission--registration.html">UNM Valencia Admissions Eligibility</a>
            <h4 id="deadlines">Deadlines</h4>
            <p>No deadline found.</p>
            <a href="http://admissions.unm.edu/future_students/transfer.html">SCHOOL Admissions Deadlines</a>
            <h4 id="fees">Fees</h4>
            <p>Application Fee - $15</p>
            <a href="http://valencia.unm.edu/students/admissions-and-registration/apply-now.html">UNM Valencia Admissions Fees</a>
            <h4 id="visits">Campus Visits</h4>
            <p>New Student Orientation/Advisement and Registration Workshop</p>
            <p>Students will attend a workshop conducted by a SR Academic Advisor. In this workshop you will learn basic information about the college and services available for students (career services, counseling, library, tutors, computer labs, support programs, wellness center and day care). The advisor will explain academic requirements through the use of the college catalog. Students will learn how to schedule their classes using the current semester Schedule of Classes. Once classes are determined, students will learn to register on-line using LoboWeb (UNM online registration).
            </p>
            <a href="http://www.unm.edu/~vcadvise/prospective.htm">New Student Orientation</a>

          </div>
        </div>

        <!-- Side menu -->

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
