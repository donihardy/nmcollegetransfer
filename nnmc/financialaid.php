<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="NM College Transfer 101 statewide website assists students, parents, faculty, staff, advisors to find transfer information and links to all the public New Mexico higher education schools.">
  <meta name="keywords" content="New Mexico, NM, College, University, Transfer, Higher Ed, UNM, ENMU, NMSU, NM Tech, WNMU, NMHU, DINE">
  <meta name="author" content="Doni Hardy">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap-submenu.min.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/school.css">
  <link rel='shortcut icon' type='image/x-icon' href="../images/favicon.ico" />
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-78535673-1', 'auto');
    ga('send', 'pageview');

  </script>

  <title>NM COLLEGE & TRANSFER 
    - NNMC</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nnmcbgimage">
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
          <a class="navbar-brand nnmc" href="index.php">NORTHERN NEW MEXICO<br />COLLEGE</a>
        </div>

        <!--Begin top nav-->

        <?php require '../includes/schooltopnav.php'; ?>

        <!--End top nav-->

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">NNMC</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Northern New Mexico College places a high priority on need-based financial aid to fulfill its commitment to meeting the demonstrated financial need of Northern undergraduates.</p>
            <p>The types of grants awarded to Northern students :</p>
            <p>Federal Pell Grant (FPELL)<br />
              Federal Supplemental Education Grant (FSEOG)<br />
              New Mexico Student Incentive Grant  (NMSIG)  (NM residents only)<br />
              College Affordability Grant<br />
              Federal Teach Grant<br />
              Iraq and Afghanistan Service Grant</p>

              <p><a href="http://nnmc.edu/home/student-gateway/financial-aid/grants-available-at-northern/">NNMC Financial Aid Pell Grants</a></p>
              <h4 id="pellgrant">NMMC Loan Website</h4>
              <p>A student loan is money borrowed to help pay the cost of a student’s education that must be repaid with interest.</p>
              <p>Loans are legal obligations. Before you take out a student loan, think about the amount you will have to repay over the years.</p>
              <p>You cannot have these loans canceled because you didn’t like the education you received, didn’t get a job in your field of study, or you’re having financial difficulty. The publication, Your Federal Student Loan:  Learn the Basics and Manage your Debt can help you learn more about federal student loan programs and repayment options.</p>
              <p><a href="http://nnmc.edu/home/student-gateway/financial-aid/loans/">Loans</a></p>
              <h4 id="scholarship">Scholarships</h4>
              <p>There are many scholarship opportunities for students at Northern. Each year Northern awards 60+ merit, need-based, and program-specific scholarships.</p>
              <p><a href="http://nnmc.edu/home/student-gateway/financial-aid/scholarships/">NNMC Financial Aid Scholarships</a></p>
              <h4 id="schoolcode">NNMC School Code</h4>
              <p><strong>005286</strong></p>
            </div>
          </div>

          <!-- Side menu -->
          <?php require '../includes/sidemenu.php'; ?>
          <!-- End Side Menu -->
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