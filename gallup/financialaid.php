<?php include '../includes/header.php'; ?>

<body>
  <div class="container-fluid">
    <header class="bgimage gallupbgimage">

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
        <a class="navbar-brand gallup" href="index.php">UNIVERSITY OF NEW MEXICO<br />GALLUP</a>
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
            <a href="index.php">UNM GALLUP</a>
          </li>
          <li>
            FINANCIAL AID
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody"><h3>Financial Aid <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
          <h4 id="pellgrant">Pell Grant</h4>
          <p>A Federal Pell Grant, unlike a loan, does not have to be repaid. Federal Pell Grants usually are awarded only to undergraduate students who have not earned a bachelor’s or a professional degree.</p>
          <p>Visit: <a href="http://www.gallup.unm.edu/vert/paying-college/financial-aid/grants.php">UNM Gallup Financial Aid Pell Grant Info</a></p>
          <h4 id="loan">Loans</h4>
          <p>All loans are subject to individual student eligibility and fund availability. Borrowing should be done conservatively to avoid heavy loan debt and the potential for default.</p>
          <p>UNM-Gallup is part of the William D. Ford Federal Direct Loans Program effective as of July 1, 2010. UNM-Gallup offers Federal Stafford Loans, which are fixed-rate federal student loans for undergraduates and graduate students attending college at least half-time. Students must be admitted as "degree-seeking" and must be enrolled at least half-time to qualify for federal student loans.</p>
          <p>Visit: <a href="http://www.gallup.unm.edu/vert/paying-college/financial-aid/loans.php">UNM Gallup Financial Aid Loan Info</a></p>
          <h4 id="deadlines">Deadlines</h4>
          <h4 id="scholarship">Scholarships</h4>
          <p>Scholarships are funded from many different sources. Each may require different application(s) and renewable criteria. Students are responsible for knowing the deadlines, application procedures, and renewable criteria for each scholarship(s) they receive. Students cannot receive more than one scholarship that is designated strictly for tuition expenses.</p>
          <p>Remember to apply early - preferably before May of the fall term you plan to attend or before October of the spring term you plan to attend.</p>
          <p>To ensure student confidentiality, photo identification is required for all students requesting assistance from the Financial Aid Office.</p>
          <p>Visit: <a href="http://www.gallup.unm.edu/vert/paying-college/scholarships/index.php">UNM Gallup Scholarship Info</a></p>

          <p>Priority consideration for grants given to students who apply by March 1 and complete their Financial Aid files promptly thereafter.</p>
          <p>Visit: <a href="http://www.gallup.unm.edu/vert/paying-college/financial-aid/info.php">UNM Gallup Deadlines</a></p>
          <h4>UNM Gallup Federal School Code:</h4><strong> 002663 </strong>
          <p>Visit: <a href="http://www.gallup.unm.edu/vert/paying-college/financial-aid/">UNM Gallup Financial Aid Applying Info</a>
            <br />Visit: <a href="https://fafsa.gov/">FAFSA (Free Application for Student Aid) on the Web</a></p>

          </div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side menu ?>

        <div class="clear"></div>
        <div class="container">
          <?php include '../includes/schoolfooter.php'; ?>
