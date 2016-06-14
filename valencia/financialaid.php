<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER 
  - UNIVERSITY OF NEW MEXICO VALENCIA</title>
  
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
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>The Federal Pell Grant is a need based grant which requires the FAFSA  to be completed in order to determine eligibility.</p>

            <p>Students must provide certain income information, i.e. Federal tax return, child support paid/received, social security benefits, or TANF benefits.</p>

            <p>A minimum enrollment status of three credit hours is usually required.</p>

            <p>A Federal Pell Grant is not repaid. Students must adhere to the Satisfactory Academic Progress Guidelines in order to continue receiving the Federal Pell Grant.</p>

            <p>Enrollment status of at least half time is required.</p>

            <p>SEOG is not repaid.</p>
            <p><a href="http://valencia.unm.edu/students/financial-aid/grants-and-loans.html">UNM Valencia Financial Aid Pell Grant Info</a></p>
            
            <h4 id="scholarship">Scholarships</h4>
            <p>UNM-Valencia Campus offers several need based and merit based scholarships for students enrolled full time, three quarter time or half time enrollment.</p>
            <p>Awards are made for an entire academic year or on a semester basis.</p>
            <p>To be eligible, a student must be a degree seeking, classified student.
              UNM-Valencia Campus also honors the New Mexico Scholars scholarship through the Commission on Higher Education.
            </p>
            <p><a href="http://valencia.unm.edu/students/financial-aid/scholarships.html">UNM Valencia Scholarship Info</a></p>
            <h4 id="loan">Loans</h4>
            <p>UNM participates in a number of student loan programs. Before student loans can be awarded to you, you must have a complete financial aid file. Below are the types of Loans you are considered for and offered upon completing your FAFSA and your Financial Aid file:</p>
            <p>Federal direct loans</p>
            <p>University-administered loans
            </p>
            <p><a href="http://valencia.unm.edu/students/financial-aid/grants-and-loans.html">UNM Valencia Financial Aid Loan Info</a></p>
            <h4 id="deadlines">Deadlines</h4>
            <p>March 1 Priority Filing Date</p>
            <p><h4>UNM Valencia Federal School Code:</h4><strong> 002663 </strong></p>
            <p><a href="http://valencia.unm.edu/students/financial-aid/index.html">SCHOOL Financial Aid Applying Info</a>
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
