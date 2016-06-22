<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - WESTERN NEW MEXICO UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage wnmubgimage">
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
          <a class="navbar-brand wnmu" href="index.php">WESTERN NEW MEXICO<br />UNIVERSITY</a>        
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
              <a href="index.php">WNMU</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Grants are federal financial support offered to students on a need base basis. To apply for any available grant, please submit a FAFSA application with the link below. The FAFSA application opens January 1st. The earlier you apply the more likely you will be awarded.</p>

            <p><a href="http://financialaid.wnmu.edu/aid/ ">WNMU Financial Aid Pell Grants</a></p>
            <h4 id="pellgrant">WNMU Loan Website</h4>
            <p>To apply for a loan:
              <ol type="1"><li>Submit FAFSA application at http://fafsa.ed.gov/</li>
                <li>First time opening a loan? Call the Financial Aid Office (575-538-6173) to schedule a meeting.</li>
                <li>A loan award will appear in your Mustang Express account. Click here to learn how to view your awards.</li>
                <li>Complete Entrance Counseling and Promissory Note using your FAFSA login credentials at https://studentloans.gov/myDirectLoan/index.action. Be aware this is a legal process where you promise to pay back your borrowed money.</li></ol></p>
                <p><a href="http://financialaid.wnmu.edu/aid/">Loan Information</a></p>
                <h4 id="scholarship">Scholarships</h4>
                <p>Office of Admissions offers unique scholarships tailored to incoming freshmen to help manage costs.</p>
                <p><a href="http://admissions.wnmu.edu/save/">WNMU Scholarships</a></p>
                <h4 id="schoolcode">WNMU School Code</h4>
                <p><strong>002664</strong></p>
              </div>
            </div>

            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side menu ?>
            
             <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
    </div>
