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
    - NMSU</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmsubgimage">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO<br />STATE UNIVERSITY</a>
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
              <a href="index.php">NMSU</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>A college degree can add up to success, but sometimes you need help along the way. Utilize this website to explore the scholarships, tuition waivers and financial aid options that are available to help make your education possible.
              University Financial Aid and Scholarship Services’ goal is to provide understandable information and timely service to all students. Financial Aid advisors and staff are here to help you reach your goals.
            </p>
            <p><a href="http://fa.nmsu.edu/ ">NMSU Financial Aid Pell Grant Info</a></p>
            
            <h4 id="scholarship">Scholarships</h4>
            <p>NMSU offers various scholarships to New Mexico students, transfer students, and out-of-state students listed below. Students are encouraged to fill out a Scholar Dollar$ application to apply for all NMSU scholarships not listed below! Before you can use Scholar Dollar$, you need to Apply to NMSU. Scholar Dollar$ is open October 1st to March 1st. (We strongly recommend using Google Chrome or Mozilla Firefox to apply.)</p>
            <p><a href="http://fa.nmsu.edu/scholarships/ ">NMSU Scholarship Info</a></p>
            <h4 id="loan">Loans</h4>
            <p>Student loans, unlike grants and work-study, are borrowed money that must be repaid with interest. To learn more about Federal Student Loans and how to manage your debt, visit the Federal Student Aid Gateway.
              Student Loan Options
              <ul><li>Federal Direct Subsidized and Unsubsidized Loans</li>
                <li>Federal Direct Parent PLUS</li>
                <li>Federal Direct Graduate PLUS Loans</li>
                <li>Private (Alternative) Loans</li>
                <li>Federal Student Loan Consolidation</li></ul>
              </p>
              <p><a href="http://fa.nmsu.edu/loans/">NMSU Financial Aid Loan Info</a></p>
              <h4 id="deadlines">Deadlines</h4>
              <p>Priority Date: March 1st</p>
              <p><h4>NMSU Federal School Code:</h4><strong>002657</strong></p>
              <p><a href="http://fa.nmsu.edu/application-process/">NMSU Financial Aid Applying Info</a>
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
