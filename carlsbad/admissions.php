<?php include '../includes/header.php'; ?>



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
                ADMISSIONS
              </li>
            </ol>
          </div>
          <div class="container-fluid">
            <div class="textbody">
              <h3>Admissions <a href="../questions.php#admissions"><img class="question" src="../images/questionmark.png"></a></h3>
              <h4 id="requirements">Admission Requirements</h4>
              <p>Apply for Admission and Financial Aid</p>
              <p><ul><li>Student Services and Financial Aid, Room 111. Admissions: 234-9222, Financial Aid: 234-9230</li>
                <li>Apply for admission at https://app.applyyourself.com/?id=nmsu-u. Applications are also available in Student Services, room 111.</li>
                <li>Send official high school or GED and college transcripts to NMSU Carlsbad, Attn: Student Services Office, 1500 University Dr., Carlsbad, NM 88220. Students who have completed 30 credit hours or more (45 quarter hours) at a university other than NMSU are not required to submit high school or GED transcripts. Apply for financial aid online at http://www.fafsa.ed.gov. Visit the Financial Aid Office, room 111, for questions about veteran’s benefits, if applicable.</li></ul>
              </p>

              <p><a href="https://carlsbad.nmsu.edu/students/future-students/admission-and-application-process/">NMSU Carlsbad Admissions Requirements</a><br />
                <h4 id="eligibility">Eligibility</h4>
                <p>Transfer students from other colleges or universities will be accepted for undergraduate studies if they have at least a C (2.0) cumulative grade average and are eligible to return to the college or university last attended. The transfer student must submit official transcripts or records of credit earned at each college or educational institution previously attended within the first two weeks. These transcripts must be sent directly to the NMSU Carlsbad Admissions Office by the registrar of each institution attended. A student who conceals the fact that he/she has attended another college or university and who does not submit a transcript for each institution, whether or not credit was earned, can be subject to immediate suspension. Transcripts are evaluated, allowable credits are determined, and class standing is assigned only after the formal application for admission is submitted.</p>
                <a href="https://carlsbad.nmsu.edu/files/2014/08/1415-final-web-version.pdf">NMSU Carlsbad Catalog</a>
                <h4 id="deadlines">Deadlines</h4>
                <p>NMSU Carlsbad has an open admissions policy.</p>
                <a href="https://app.applyyourself.com/AYApplicantLogin/fl_ApplicantConnectLogin.asp?id=nmsu-u">NMSU Admissions</a>
                <h4 id="fees">Fees</h4>
                <p>The application fee is $20 and nonrefundable.</p>
                <a href="https://app.applyyourself.com/AYApplicantLogin/fl_ApplicantConnectLogin.asp?id=nmsu-u">NMSU Carlsbad Admissions Fees</a>
                <h4 id="visits">Campus Visits</h4>
                <p>Students will complete the enrollment process by learning about campus programs, services, and policies in addition to learning how to use Canvas, necessary for online, hybrid and most face-to-face classes.</p>
                <p>Sign up for New Student Orientation at the Counseling & Student Development Center</p>
                <a href="https://carlsbad.nmsu.edu/students/future-students/admission-and-application-process/">Admission and Registration Checklist</a>

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
