<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage alamogordobgimage">
         
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY ALAMOGORDO</a>
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
              <a href="index.php">NMSU ALAMOGORDO</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Grants are often called “gift aid” because they are free money—financial aid that doesn’t have to be repaid. Grants are often need-based and determined by your FAFSA. There are state and federal grants available.</p>
            <P>Federal Supplemental Educational Opportunity Grant (SEOG): is a Federal Grant awarded to undergraduate students with exceptional financial need. Must have a zero Expected Family Contribution. Funding limited.
            </p>
            <p>Visit: <a href="http://fa.nmsu.edu/grants/">NMSU Alamogordo Financial Aid Pell Grant Info</a></p>
            <h4 id="loan">Loans</h4>
            <p>Student loans, unlike grants and work-study, are borrowed money that must be repaid with interest.</p>
            <p>Visit: <a href="http://fa.nmsu.edu/loans/">NMSU Alamogordo Financial Aid Loan Info</a></p>
            <h4 id="deadlines">Deadlines</h4>
            <h4 id="scholarship">Scholarships</h4>
            <p>NMSU offers various scholarships to New Mexico students, transfer students, and out-of-state students.</p>
            <p>Before you can use Scholar Dollar$, you need to Apply to NMSU. Scholar Dollar$ is open October 1st to March 1st. </p>
            <p>Visit: <a href="http://fa.nmsu.edu/scholarships/">NMSU Alamogordo Scholarship Info</a></p>
            
            <p>The FAFSA application opens January 1st. NMSU’s Priority Deadline is March 1st. File by this deadline to gain priority status for some aid. Scholar Dollar$ is open October 1st to March 1st. For information about admissions applications deadlines, please visit Admissions.</p>
            <p>Visit: <a href="http://fa.nmsu.edu/timeline/">Financial Aid Important Dates</a></p>
            <h4>NMSU Alamogordo Federal School Code:</h4><strong> 002658 </strong>
            <p>Visit: <a href="http://fa.nmsu.edu/">NMSU Alamogordo Financial Aid Applying Info</a>
              <br />Visit: <a href="https://fafsa.gov/">FAFSA (Free Application for Student Aid) on the Web</a></p>

            </div>
          </div>


         <?php //Begin Side Menu ?>
         <?php require '../includes/sidemenu.php'; ?>
         <?php //End Side Menu ?>


            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
