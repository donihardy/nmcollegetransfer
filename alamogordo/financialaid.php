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
    - NMSU ALAMOGORDO</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage alamogordobgimage">
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
          <div class="textbody"><h3>Financial Aid <a href="../questions.html#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Grants are often called “gift aid” because they are free money—financial aid that doesn’t have to be repaid. Grants are often need-based and determined by your FAFSA. There are state and federal grants available.</p>
            <P>Federal Supplemental Educational Opportunity Grant (SEOG): is a Federal Grant awarded to undergraduate students with exceptional financial need. Must have a zero Expected Family Contribution. Funding limited.
            </p>
            <p><a href="http://fa.nmsu.edu/grants/">NMSU Alamogordo Financial Aid Pell Grant Info</a></p>
            
            <h4 id="scholarship">Scholarships</h4>
            <p>NMSU offers various scholarships to New Mexico students, transfer students, and out-of-state students.</p>
            <p>Before you can use Scholar Dollar$, you need to Apply to NMSU. Scholar Dollar$ is open October 1st to March 1st. </p>
            <p><a href="http://fa.nmsu.edu/scholarships/">NMSU Alamogordo Scholarship Info</a></p>
            <h4 id="loan">Loans</h4>
            <p>Student loans, unlike grants and work-study, are borrowed money that must be repaid with interest.</p>
            <p><a href="http://fa.nmsu.edu/loans/">NMSU Alamogordo Financial Aid Loan Info</a></p>
            <h4 id="deadlines">Deadlines</h4>
            <p>The FAFSA application opens January 1st. NMSU’s Priority Deadline is March 1st. File by this deadline to gain priority status for some aid. Scholar Dollar$ is open October 1st to March 1st. For information about admissions applications deadlines, please visit Admissions.</p>
            <a href="http://fa.nmsu.edu/timeline/">Financial Aid Important Dates</a></p>
            <p><h4>NMSU Alamogordo Federal School Code:</h4><strong> 002658 </strong></p>
            <p><a href="http://fa.nmsu.edu/">NMSU Alamogordo Financial Aid Applying Info</a>
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
