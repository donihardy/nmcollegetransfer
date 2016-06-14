<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - NEW MEXICO HIGHLANDS UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmhubgimage">
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
          <a class="navbar-brand nmhu" href="index.php">NEW MEXICO<br />HIGHLANDS UNIVERSITY</a>
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
              <a href="index.php">NMHU</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Pell Grants are given to both in-state and out-of-state undergraduates with financial need. To qualify, you must also have a high school diploma or GED certificate and be enrolled as a student at the university in a degree-seeking program.</p>
            <p>To be considered for a Pell Grant, as well as other federal financial aid, you must submit the FAFSA. Your eligibility is determined by your Expected Family Contribution (EFC).</p>
            <p><a href="http://www.nmhu.edu/financial-aid/grants/">NMHU Financial Aid Pell Grants</a></p>
            <h4 id="pellgrant">Loans</h4>
            <p>Loans available:<br /> Federal Perkins Loan, Stafford Loans, Federal Subsidized Stafford Loan, Federal PLUS Loan, Alternative Private Loans</p>
            <p><a href="http://www.nmhu.edu/financial-aid/loans/">NMHU Financial Aid Loans</a></p>
            <h4 id="scholarship">Scholarships</h4>
            <p>Undergraduate students with grade point averages of 2.5 and better should apply for state, university, and Highlands Foundation scholarships by filling out the Highlands Scholarship application by May 1.</p>
            <p><a href="http://www.nmhu.edu/financial-aid/scholarships/">NMHU Financial Aid Scholarships</a></p>
            <h4 id="deadlines">Deadlines</h4>
            <p><b>Priority Date: March 1</b> - Receive the most financial aid funding based on eligibility. Apply Early!!</p>
            <p><a href="http://www.nmhu.edu/financial-aid/">NMHU Financial Aid Deadlines</a></p>
            <h4 id="schoolcode">NMHU School Code</h4>
            <p><strong>002653</strong></p>
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
