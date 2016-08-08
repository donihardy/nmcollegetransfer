<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage iaiabgimage">
         
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
          <a class="navbar-brand iaia" href="index.php">INSTITUTE OF<br />AMERICAN INDIAN ARTS</a>
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
              <a href="index.php">IAIA</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Completing and submitting the FAFSA is free and quick, and it gives you access to the largest source of financial aid to pay for college or career school.</p>
            <p>Visit: <a href="https://iaia.edu/student-success-center/financial-aid/">IAIA Financial Aid Pell Grants</a></p>
            <h4 id="loans">Loans</h4>
            <p>At IAIA we believe one’s abilities should not be measured or judged by their ability to afford a quality education. As such, IAIA provides financial assistance and resources for students who would otherwise be unable to pursue a post-secondary education. IAIA chooses not to participate in the Federal Student Loan Programs, including PLUS, Perkins and Stafford.</p>
            <h4 id="scholarship">Scholarships</h4>
            <p>Because scholarships are offered for different reasons and by many sources, it is important that you understand that each scholarship has its own requirements and deadlines, so you should begin searching for scholarships as soon as possible. You should also know that in most instances you should not have to pay to apply for a scholarship. Please visit the IAIA Financial Aid website for more info on scholarships.</p>
            <p>Visit: <a href="https://iaia.edu/student-success-center/financial-aid/">IAIA Financial Aid Scholarships</a></p>
                <!--<h4 id="deadlines">Deadlines</h4>
                <p></p>-->
                <h4 id="schoolcode">IAIA School Code</h4>
                <p><strong>014152</strong></p>
              </div>
            </div>

            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side menu ?>
            
             <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
