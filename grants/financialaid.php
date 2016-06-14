<?php include '../includes/header.php'; ?>

  <title>NM COLLEGE & TRANSFER 
    - NEW MEXICO STATE UNIVERSITY GRANTS</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage grantsbgimage">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY GRANTS</a>
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
              <a href="index.php">NMSU GRANTS</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>A college degree can add up to success, but sometimes you need help along the way. Utilize this website to explore the scholarships, tuition waivers and financial aid options that are available to help make your education possible. University Financial Aid and Scholarship Services’ goal is to provide understandable information and timely service to all students. Financial Aid advisors and staff are here to help you reach your goals.</p>
            <p><a href="https://grants.nmsu.edu/students/financial-aid/">NMSU Grants Financial Aid Pell Grant Info</a>
              <a href="http://fa.nmsu.edu/">NMSU Financial Aid Info</a></p>
              
              <h4 id="scholarship">Scholarships</h4>
              <p>There are numerous opportunities for you to pursue if you’re looking for ways to pay for some of your college education.</p>
              <p><a href="https://grants.nmsu.edu/students/scholarships/">NMSU Grants Scholarship Info</a></p>
              <h4 id="loan">Loans</h4>
              <p>Student loans, unlike grants and work-study, are borrowed money that must be repaid with interest.</p>

              <p>To learn more about Federal Student Loans and how to manage your debt, visit the <a href="https://studentaid.ed.gov/sa/redirects/federal-student-aid-ed-gov">Federal Student Aid Gateway</a>.</p>

              <ul><li>Student Loan Options</li>
                <li>Federal Direct Subsidized and Unsubsidized Loans</li>
                <li>Federal Direct Parent PLUS</li>
                <li>Federal Direct Graduate PLUS Loans</li>
                <li>Federal Perkins Loans</li>
                <li>Private (Alternative) Loans</li>
                <li>Federal Student Loan Consolidation</li></ul></p>
                <p><a href="https://grants.nmsu.edu/students/financial-aid/">NMSU Grants Financial Aid Loan Info</a><br />
                  <a href="http://fa.nmsu.edu/loans/">NMSU Financial Aid Loan Info</a></p>
                  <h4 id="deadlines">Deadlines</h4>
                  <p>Use the NMSU online portal to apply before March 1 each year.</p>
                  <p><h4>SCHOOL Federal School Code:</h4><strong>008854</strong></p>
                  <p><a href="https://grants.nmsu.edu/students/financial-aid/">NMSU Grants Financial Aid Applying Info</a>
                    <br /><a href="https://fafsa.gov/">FAFSA (Free Application for Student Aid) on the Web</a></p>

                  </div>
                </div>

                <?php //Begin Side menu ?>
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
