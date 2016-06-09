<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="NM College Transfer 101 statewide website assists students, parents, faculty, staff, advisors to find transfer information and links to all the public New Mexico higher education schools.">
  <meta name="keywords" content="New Mexico, NM, College, University, Transfer, Higher Ed, UNM, ENMU, NMSU, NM Tech, WNMU, NMHU, CNM">
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
    - ENMU-ROSWELL</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage enmuroswellbgimage img-responsive">
        <img class="container-fluid">
        <!--<div class="title">NM COLLEGE TRANSFER</div> -->
        <a href="../index.php"><img id="LogoImg" src="../images/NMCollegeTransfer2.png" class="img-responsive" alt="NM College Transfer 101 Logo"></a>
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY-ROSWELL</a>
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
              ENMU-ROSWELL
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><img class="schoolimg img-responsive pull-right" src="../images/enmuroswell.jpg"  alt="Responsive Image" >
            <p>Established in 1958, the campus of Eastern New Mexico University-Roswell (ENMU-Roswell) provides high quality, affordable education and life-long learning opportunities. More than 70 certificate and associate degree programs are available in a wide range of academic transfer and career-oriented programs. ENMU-Roswell also offers access to complete bachelor’s and master’s degrees on campus through ENMU in Portales. More than 4,000 students enroll in credit classes each semester. Modern, safe, and affordable on-campus living is available at Sierra Vista Village. Apartments include private bedrooms, washer/dryer units and kitchens.</p>
            <p><strong>Student Support</strong></p>
            <p>The faculty-student ratio is kept low, with small classes, allowing instructors to provide support and personal attention to students. A wide range of tutoring and other student support services are also available. Compared to traditional four-year institutions, ENMU-Roswell is a superior value. Currently, tuition and fees are about $54 per credit hour for in-state students and about $175 per credit hour for non-resident students.</p>

            <p><a href="http://www.roswell.enmu.edu">ENMU-Roswell Website</a><br />
              <a href="http://www.roswell.enmu.edu/enmu-roswell-campus-map">Map</a></p>
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
