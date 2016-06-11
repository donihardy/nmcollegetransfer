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
    - NMMI</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmmibgimage">
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
          <a class="navbar-brand nmmi" href="index.php">NEW MEXICO<br />MILITARY INSTITUTE</a>
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
              <a href="index.php">NMMI</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Completion and approval of the FAFSA (Free Application of Federal Student Aid) is required for participation in ALL federally-funded programs. Federal Pell Grant Program The largest federal need-based student aid program providing grant assistance ranging from $602 to $5,730 to undergraduate students who are enrolled in a degree or certificate program and have not received their first bachelor's degree. Eligibility is based on demonstrated financial need, cost of education, and enrollment status. The amount of the student's award is determined using the Federal Institutional Student Information Record (ISIR), Expected Family Contribution (EFC) and the Payment Schedule provided by the U.S. Department of Education</p>
            <p><a href="https://www.nmmi.edu/financialaid/Federal_Aid_Programs.htm">NMMI Financial Aid Pell Grant Info</a></p>
            
            <h4 id="scholarship">Scholarships</h4>
            <p>There are many opportunities to receive scholarships at NMMI for both college and high school cadets.</p>
            <p>To apply for NMMI scholarships, other than the legislative scholarships, all you need to do is apply for admission online. To locate the on-line application select the admissions homepage . Once you have applied and been accepted to attend NMMI you will automatically be considered for scholarships.</p>
            <p><a href="https://www.nmmi.edu/financialaid/scholarships.htm">NMMI Scholarship Info</a></p>
            <h4 id="loan">Loans</h4>
            <p>The Financial Aid Office at New Mexico Military Institute is committed to providing educational funding option as appropriate to students and parents to help fulfill student’s goals and dreams.</p>
            <p><a href="https://www.nmmi.edu/financialaid/loans.htm">NMMI Financial Aid Loan Info</a></p>
            <h4 id="deadlines">Deadlines</h4>
            <p>The application priority date is May 1.</p>
            <p><h4>NMMI Federal School Code:</h4><strong> 002656 </strong></p>
            <p><a href="http://www.nmmi.edu/financialaid/finaidjc.htm">NMMI Financial Aid Applying Info</a>
              <br /><a href="https://fafsa.gov/">FAFSA (Free Application for Student Aid) on the Web</a></p>

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
