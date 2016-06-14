<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER 
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
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Grants, unlike loans, do not have to be repaid. Click the links below to learn more about grant programs available for eligible students pursuing a postsecondary education. </p>
            <strong>Federal Grants</strong>
            <ul><li>Teacher Education Assistance for College and Higher Education Grant (TEACH Grant)</li>
              <li>Federal Pell Grant</li>
              <li>Federal Supplemental Educational Opportunity Grant (FSEOG)</li></ul>
              <strong>State Grants</strong>
              <ul><li>College Affordability Grant (CAG)</li>
                <li>New Mexico Student Incentive Grant/Leveraging Educational Assistance Partnership(NMSIG/LEAP)</li>
                <li>New Mexico Lottery Scholarship for New Mexico residents</li></ul>
                <p><a href="https://www.enmu.edu/services/financialaid/fa_types.shtml#grants">ENMU Financial Aid Pell Grants</a></p>
                <h4 id="scholarship">Scholarships</h4>
                <p>Scholarships are awarded by Enrollment Services, the ENMU Foundation and various academic departments. The Office of Financial Aid administers these funds after they have been awarded. You can also receive scholarships from outside sources.</p>
                <p><a href="https://www.enmu.edu/services/financialaid/scholarships/index.shtml">ENMU Financial Aid Scholarships</a></p>
                <h4 id="loans">Loans</h4>
                <p>Student loans, unlike grants and work-study, are borrowed money that must be repaid, with interest, just like car loans and home mortgages. You cannot have these loans canceled because you didn’t like the education you received, didn’t get a job in your field of study or because you’re having financial difficulty. Loans are legal obligations, so before you take out a student loan, think about the amount you’ll have to repay over the years. Your Federal Student Loans: Learn the Basics and Manage Your Debt can help you learn more about federal student loan debt.
                  <p>ENMU realizes that some students will not receive enough money from grants and scholarships to cover all of the expenses associated with attending college.  In an effort to relieve the financial burden for these expenses, ENMU participates in several student loan programs. Below you will find descriptions of each lending program which we partake in.</p>
                  <p><a href="https://www.enmu.edu/services/financialaid/loan/">ENMU Student Loans</a>
                    <h4 id="deadlines">Deadlines</h4>
                    <p>March 1st deadline for new students. February 14th for current students. </p>
                    <p><a href="http://www.enmu.edu/services/financialaid/">ENMU Financial Aid Deadlines</a></p>
                    <h4>ENMU Federal School code:</h4>
                    <p><strong>002651</strong></p>
                  </div>
                </div>

                <?php //Begin Side Menu ?>
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
