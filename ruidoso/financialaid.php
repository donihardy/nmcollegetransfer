<?php include '../includes/header.php'; ?>



  <title>NM COLLEGE & TRANSFER 
    - ENMU-RUIDOSO</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage enmuruidosobgimage">
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY-RUIDOSO</a>
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
              <a href="index.php">ENMU-RUIDOSO</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>The three types of grants available at ENMU-Ruidoso are Pell Grants, SEOG and NMSIG.</p>
            <strong>Federal Grants</strong>
            <ul><li>Federal Pell Grant</li>
              <li>Federal Supplemental Educational Opportunity Grant (FSEOG)</li></ul>
              <strong>State Grants</strong>
              <li>New Mexico Student Incentive Grant/Leveraging Educational Assistance Partnership(NMSIG/LEAP)</li>
            </ul><p>
            <p><a href="http://ruidoso.enmu.edu/index.php/new-page/170-financial-aid-faqs">ENMU Ruidoso Financial Aid Pell Grants</a></p>
            <h4 id="scholarship">Scholarships</h4>
            <p>Scholarships at ENMU Ruidoso:</p>
            <p><a href="http://ruidoso.enmu.edu/files/Foundation_Scholarship_Guide_2015-2016.pdf">ENMU Ruidoso Foundation Scholarships</a><br />
              <a href="http://ruidoso.enmu.edu/files/ENMU-Ruidoso_Foundation_Scholarship_Application_2015.pdf">ENMU Ruidoso Foundation Scholarship Application</a></p>
              <h4 id="loans">Loans</h4>
              <p>ENMU Ruidoso participates in the Perkins Loan program, the Stafford Subsidized and Unsubsidized Loan programs and the Parent Loan for Undergraduate Students.</p>
              <p><a href="http://ruidoso.enmu.edu/images/downloads/loan_request_ruidoso_1213.pdf">ENMU Ruidoso Student Loan Request</a>
                <h4 id="deadlines">Deadlines</h4>
                <p>April 30th </p>
                <p><a href="http://ruidoso.enmu.edu/files/Foundation_Scholarship_Guide_2015-2016.pdf">ENMU Financial Aid Deadlines</a></p>
                <h4>ENMU Ruidoso Federal School code:</h4>
                <p><strong>002651</strong></p>
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
