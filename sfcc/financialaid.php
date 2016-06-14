<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - SANTA FE COMMUNITY COLLEGE</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage sfccbgimage">
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
          <a class="navbar-brand sfcc" href="index.php">SANTA FE<br />COMMUNITY COLLEGE</a>
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
            <a href="index.php">SFCC</a>
          </li>
          <li>
            FINANCIAL AID
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
          <h4 id="pellgrant">Pell Grant</h4>
          <p>The Federal and State Grant Programs provide grants to undergraduate students who have financial need and meet other requirements. Although the U.S. Department of Education calculates the student's Expected Family Contribution (EFC) and performs certain eligibility matches, SFCC has many responsibilities in administering the program. We must ensure that a student meets the general eligibility requirements for any aid that is disbursed. Students must file a Free Application for Federal Student Aid (FAFSA) each year to establish their continued eligibility for need-based financial assistance.</p>
          <p><a href="http://www.sfcc.edu/financial_aid/grants">Santa Fe Community College Financial Aid Pell Grant Info</a></p>
          
          <h4 id="scholarship">Scholarships</h4>
          <p>SFCC offers scholarships that are based on a variety of factors or criteria specified by the donor. Scholarships are considered part of SFCC's financial aid program and awards; therefore, the Financial Aid Office may reduce other aid already approved to prevent giving financial assistance in excess of unmet need (over-awarding) if a scholarship is awarded.</p>
          <p><a href="http://www.sfcc.edu/financial_aid/scholarships">Santa Fe Community College Scholarship Info</a></p>
          <h4 id="loan">Loans</h4>
          <p>In accordance with our default prevention management plan, SFCC has implemented the following requirements for student loan borrowers.
            <ul><li>Students applying for a student loan must have all previous college transcripts in the Registrar’s Office before submitting the loan application. Evaluation of transcripts may change loan eligibility if a student has not completed the last two semesters at a previous institution.</li>
              <li>Students must be registered in courses from their current declared degree program to be eligible for student loans. HPER courses will not count towards student eligibility.</li>
              <li>Fall-only loans will be granted to students graduating at the end of the fall semester and spring-only student loans will be granted to students graduating at the end of spring, or students that are not attending summer classes.</li></ul></p>
              <p><a href="http://www.sfcc.edu/financial_aid/loans">SCHOOL Financial Aid Loan Info</a></p>
              <h4 id="deadlines">Deadlines</h4>
              <p>Deadlines vary.</p>
              <p><h4>SCHOOL Federal School Code:</h4><strong> 016065 </strong></p>
              <p><a href="http://www.sfcc.edu/financial_aid">SCHOOL Financial Aid Applying Info</a>
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
