<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    - UNM TAOS</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage taosbgimage">
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
          <a class="navbar-brand taos" href="index.php">UNIVERSITY OF NEW MEXICO<br />TAOS</a>
        </div>

        <!--Begin top Nav Bar-->

        <?php require '../includes/schooltopnav.php'; ?>

        <!--End Top Nav Bar-->

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">UNM TAOS</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Grants are awarded based on need and DO NOT have to be repaid. In addition to the general eligibility requirements, you must be enrolled as an undergraduate in an eligible degree program and not have a previous baccalaureate degree. Some grants that are available to students in New Mexico are the Federal Pell Grant, the Federal Supplemental Educational Opportunity Grant, and the New Mexico State Student Incentive Grant. Contact the UNM-Taos Financial Aid Office for complete grant information.</p>
            <p><a href="http://taos.unm.edu/student-enrollment/financial-aid/index.html">UNM Taos Financial Aid Pell Grant Info</a></p>
            
            <h4 id="scholarship">Scholarships</h4>
            <p>Several scholarships are available to UNM-Taos students who meet the requirements.</p>
            <p><a href="http://taos.unm.edu/student-enrollment/financial-aid/scholarships.html">UNM Taos Scholarship Info</a></p>
            <h4 id="loan">Loans</h4>
            <p>You should apply for a loan only if you do not qualify and have been turned down for other forms of financial aid. A student loan is a loan that usually carries a lower interest rate that other types of loans. A Student Loan is a serious and legal financial obligation and it is a form of financial aid that must be repaid. The UNM-Taos Financial Aid office can guide you through applying for a Student Loan.</p>
            <p><a href="http://taos.unm.edu/student-enrollment/financial-aid/index.html">UNM Taos Financial Aid Loan Info</a></p>
            <h4 id="deadlines">Deadlines</h4>
            <p>January 1 is the earliest date for submitting the FAFSA form<br />
              June 30 is the date by which the FAFSA form must be received by the Federal Aid Student Programs office.<br />
              Priority deadline of March 1st.
            </p>
            <p><h4>UNM Taos Federal School Code:</h4><strong> 002663 </strong></p>
            <p><a href="http://taos.unm.edu/student-enrollment/financial-aid/index.html">UNM Taos Financial Aid Applying Info</a>
              <br /><a href="https://fafsa.gov/">FAFSA (Free Application for Student Aid) on the Web</a></p>

            </div>
          </div>

          <!-- Side menu -->

          <?php require '../includes/sidemenu.php'; ?>


          <!--End Side Menu-->

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