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
    - SAN JUAN COLLEGE</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage sjcbgimage">

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
          <a class="navbar-brand" href="index.php">SAN JUAN COLLEGE</a>
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
              <a href="index.php">SJC</a>
            </li>
            <li>
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            <p>The core matrix of approved courses guaranteed to transfer and meet general education requirements of any New Mexico college or university can be found on the New Mexico Higher Education Department website at <a href="http://www.hed.state.nm.us/institutions/general-ed-core-course-transfer-curriculum.aspx">NM Higher Education Department</a></p>
            <a href="http://catalog.sanjuancollege.edu/content.php?catoid=6&navoid=283&hl=nm+core&returnto=search#San_Juan_College_Common_Core_Course_Listing">San Juan College Common Core Listing</a>
            <h4 id="as">Certificate Degrees</h4>
            <p>Computer Science<br />
              Drafting<br />
              Geographic Information System<br />
              Instumentation and Controls Technology<br />
              Occupational Safety<br />
              Petroleum Production Operations        
            </p>
            <a href="https://www.sanjuancollege.edu/academics/">Certificates</a>
            <h4 id="as">Associates Degrees</h4>
            <p>Biology AS<br />
              Chemistry AS<br />
              Computer Science AS<br />
              Digital Media Arts and Design AAS<br />
              Drafting AAS<br />
              Engineering AS<br />
              General Science AS<br />
              Geographic Information Systems AAS<br />
              Geology AS<br />
              Horiculture AAS<br />
              Instrumentation and Controls Technology AAS<br />
              Mathematics AS<br />
              Occupational Safety AAS<br />
              Petroleum Production Operations AAS<br />        
              Physics AS
            </p>
            <a href="https://www.sanjuancollege.edu/academics/">San Juan College Associates Degrees</a>
          </div>
        </div>

        <!-- Side menu -->

        <?php require '../includes/sidemenu.php'; ?>

      </div>

      <!--End Side Menu-->

      <div id="footer">
        <footer class="navbar-fixed-bottom">
          <div id="footerContent">
            <div id="leftFooter">
              <h4><a href="http://stemup.unm.edu">© STEM UP</a></h4>
              1716 Las Lomas Road NE &#149  Albuquerque, NM 87131 &#149; <a href="tel:1-505-277-1723">505-277.1723</a>
              <h5><a href="mailto:stemup@unm.edu">Contact STEM UP</a></h5>
            </div>

          </div>
        </footer>
      </div>

      <script src="../js/jquery.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/bootstrap-submenu.min.js" defer></script>
      <script src="../js/navbar.js"></script>
      <script src="../js/script.js"></script>
    </body>
    </html>
