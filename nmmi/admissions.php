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
    - NMMI</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmmibgimage">
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
          <a class="navbar-brand nmmi" href="index.php">NEW MEXICO<br />MILITARY INSTITUTE</a>
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
              <a href="index.php">NMMI</a>
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
            <p>All applicants may send partial/unofficial transcripts or report cards to expedite the admissions process and then have official transcripts sent at the completion of the current semester. Junior college applicants must have a final high school transcript showing graduation date and GPA or GED results and transcripts for any college work. Please have transcripts sent directly to our office by the school. Will complete our admission examination during their campus visit. Domestic applicants must also submit an English test (this can be any standardized English test taken in school). Students who took the SSAT or other standardized tests should submit those scores to NMMI.</p>
            <p><a href="http://www.nmmi.edu/admissions/Admissions_Process.htm">NMMI Admissions Requirements</a>
              <h4 id="eligibility">Eligibility</h4>
              <p>New Mexico Military Institute (NMMI) reviews all applications for admissions on a holistic basis. Candidates are encouraged to apply for admissions and submit all according documents.</p>
              
              <p>Students with one of the disqualifying factors, listed below, are NOT eligible to apply for admissions at NMMI.</p>
              
              <p>Applicant must be:
                <ul><li>be under 22 years of age</li>
                  <li>never have been married</li>
                  <li>have no dependent children</li>
                  <li>be in good physical condition</li>
                  <li>able to participate in athletic and leadership development activities</li>
                  <li>have no major disciplinary and/or drug or alcohol abuse problems</li></ul></p>
                  <a href="http://www.nmmi.edu/admissions/basic_qualifications.htm">NMMI Admissions Eligibility</a>
                  <h4 id="deadlines">Deadlines</h4>
                  <p>Priority deadline is March 1. Applications will be accepted after the deadline, however our ability to help fund
                    your education is contingent on funds available.</p>
                    <a href="https://www.nmmi.edu/admissions/Admissions_Process.htm">NMMI Admissions Deadlines</a>
                    <h4 id="fees">Fees</h4>
                    <p>Application is free of charge.</p>
                    <a href="https://www.nmmi.edu/admissions/Admissions_Process.htm">NMMI Admissions Fees</a>
                    <h4 id="visits">Campus Visits</h4>
                    <p>Tours are generally available Monday through Friday at 8 a.m. and 1 p.m. Please contact the Admissions Office for further details or to schedule your visit. We also host several Open House events on Saturdays. Call <a href="tel:1-800-421-5376">800-421-5376</a>.<br />
                     <a href="http://www.nmmi.edu/admissions/openhouse.htm">Schedule a Visit</a></p>
                     <p>All Cadets attending Leader's Training Course at Fort Knox over the summer before entering the Early Commissioning Program are required to attend a 5-day orientation (mini-camp) on the NMMI campus.<br />
                       <a href="https://nmmi.edu/rotc/LeadersTrainingCourse.htm">Leader's Training Course</a></p>

                     </div>
                   </div>

                   <?php //Begin Side menu ?>
                   <?php require '../includes/sidemenu.php'; ?>
                   <?php //End Side Menu ?>

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
