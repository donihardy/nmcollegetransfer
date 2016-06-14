<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - EASTERN NEW MEXICO UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage enmubgimage">
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY</a>
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
              <a href="index.php">ENMU</a>
            </li>
            <li>
              ADMISSIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Admissions <a href="../questions.php#admissions"><img class="question" src="../images/questionmark.png"></a></h3>

            <h4 id="requirements">Requirements</h4>

            <p>ENMU admission application, there is no application fee (apply online or download an application) FAFSA application and scholarship application, ACT or SAT scores (Eastern's ACT code is 2636 and the SAT code is 4299). <p>A copy of your official high school transcript or GED certificate showing your completion date.</p>
            <div class="subtitle">Send your materials to:<br />
              Office of Enrollment Services<br />
              ENMU Station 7<br />
              1500 S Ave K<br />
              Portales, NM 88130</div>
            </p>
            <p><a href="http://www.enmu.edu/future-students/transfer/">Admission Requirements</a></p>
            <a href="http://www.enmu.edu/future-students/applyNow.html">Application</a>
            <h4 id="eligibility">Eligibility</h4>
            <p>You need a college GPA of at least 2.0 for regular admission. If you have fewer than 30 hours of college credit, you also need a high school GPA of 2.5 or ACT of 17 or SAT of 810.</p>
            <a href="http://www.enmu.edu/future-students/faq/ ">ENMU Admissions FAQs</a>
            <h4 id="deadlines">Deadlines</h4>
            <p>You should apply for admission at least 30 days before the start of your first semester, but you don't have to wait. We recommend that you apply online as soon as possible.</p>
            <a href="http://www.enmu.edu/future-students/faq/admission.shtml ">ENMU Admissions Deadlines</a>
            <h4 id="fees">Fees</h4>
            <p>Applying to ENMU is free.</p>
            <a href="http://www.enmu.edu/future-students/faq/admission.shtml">ENMU Admissions Fees</a>
            <h4 id="visits">Campus Visits</h4>
            <p>Come feel the spirit of Eastern, first-hand. Be our guest for a guided tour of the campus with our President’s Ambassadors. Talk with current students to find out more about ENMU and why they chose Eastern as their college home.
              During your visit, you may have the option to eat at the Ultimate Dining hall, stop by the Ground Zero Coffee Shop and get a feel for what Eastern has to offer you. You will find that Eastern is the place you’ll want to spend your college days.
            </p>
            <a href="http://www.enmu.edu/future-students/visit/">Schedule a Visit</a>

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
