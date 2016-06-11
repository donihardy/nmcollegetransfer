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
    - NEW MEXICO STATE UNIVERSITY GRANTS</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage grantsbgimage">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY GRANTS</a>
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
              <a href="index.php">NMSU GRANTS</a>
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
            <p>Admissions Process:</p>
            <p><ol style="list-style-type:none"><li>Step 1: Apply for Admission</li>
              <li>Step 2: Apply for Financial Aid</li>
              <li>Step 3: Take the Compass Placement Test</li>
              <li>Step 4: Create Your NMSU Account</li>
              <li>Step 5: See an Academic Advisor</li>
            </ol></p>
            <p><a href="https://grants.nmsu.edu/students/admissions/">General Admissions</a><br />
              <a href="https://grants.nmsu.edu/students/transfers/">NMSU Grants Transfer Admissions Requirements</a>
            </p>
            <h4 id="eligibility">Eligibility</h4>
            <p>As a new student (or if you’re transferring from another college, or if you’re a prior student and requesting to be re-admitted), you’ll need to complete the admission application process before you can register for classes.</p>
            <a href="https://grants.nmsu.edu/students/admissions/">NMSU Grants Admissions Eligibility</a>
            <h4 id="deadlines">Deadlines</h4>
            <p>This institution has an open admission policy.</p>
            <a href="http://admissions.unm.edu/future_students/transfer.html">NMSU Grants Admissions Deadlines</a>
            <h4 id="fees">Fees</h4>
            <p>A one-time, non-refundable fee for first time admission to NMSU Grants $20</p>
            <a href="https://grants.nmsu.edu/business-office/tuition-and-fees/">NMSU Grants Admissions Fees</a>
            <h4 id="visits">Campus Visits</h4>
            <p>One of the most important first steps that new college students can take is to attend campus orientation. Among the topics you’ll learn about are:</p>

            <ul><li>Advising and planning your college career</li>
              <li>Accommodations for special needs</li>
              <li>Expectations and policies for student behavior and performance</li>
              <li>Library resources</li>
              <li>Resources for student success</li>
              <li>Resources for computer support, email, and online courses</li>
              <li>Printing on campus</li>
              <li>Introduction to Associated Student Government, clubs and organizations</li>
              <li>Financial Aid and Scholarships</li></ul>
              <a href="https://grants.nmsu.edu/orientation/">Orientation</a>

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
