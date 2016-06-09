<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <!--Begin top Nav Bar-->
        
        <?php require '../includes/schooltopnav.php'; ?>

        <!--End Top Nav Bar-->

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">NMSU</a>
            </li>
            <li>
              ADMISSIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Admissions <a href="../questions.php#admissions"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="requirements">Admission Requirements</h4>
            <p>You are eligible for regular admission to NMSU if you are a graduate of an accredited high school, have met the minimum high school course requirements listed below and meet one of the following GPA (grade point average)/test score requirements.</p>
            <p><a href="http://nmsu.edu/admissions.html">NMSU Transfer Admissions Requirements</a><br />
              <a href="http://admissions.nmsu.edu/apply/first-time-freshmen/">Freshman Admissions</a></p>
              <h4 id="eligibility">Eligibility</h4>
              <p>A 2.0 or above cumulative GPA in your college courses and 30 completed credit hours. Must be eligible to return to your last college or university. Application for admission and official college transcripts or e-transcripts mailed directly from each college or university attended. If you have fewer than 30 complete college credit hours, you must fulfill the First Time Freshmen admission.</p>
              <a href="http://admissions.nmsu.edu/apply/transfer-students/">NMSU Admissions Eligibility</a>
              <h4 id="deadlines">Deadlines</h4>
              <p>University Admissions encourages the applicant to apply by March 15th for fall enrollment and by October 15th for spring enrollment to be considered for financial support. </p>
              <a href="http://nmsu.smartcatalogiq.com/2014-2015/Graduate-Catalog/General-Information/Admission/Application-Dates-and-Deadlines">NMSU Admissions Deadlines</a>
              <h4 id="fees">Fees</h4>
              <p>The application fee is $20 and nonrefundable.</p>
              <a href="http://admissions.nmsu.edu/apply/">NMSU Admissions Fees</a>
              <h4 id="visits">Campus Visits</h4>
              <p>Campus visit info:
                <ul><li>Admissions and Financial Aid presentations prior to each tour</li>
                  <li>Student led campus tour</li>
                  <li>Opportunities to meet faculty</li>
                  <li>Tours of residence halls</li></ul>
                </p>
                <a href="http://admissions.nmsu.edu/visit/">Schedule a Visit</a><br />
                <a href="https://nmsu.askadmissions.net/Portal/EI/Search">Orientation request</a>
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
