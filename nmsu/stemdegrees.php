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
              STEM DEGREES
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">

            <h3>STEM DEGREES</h3>
            <p><h4>Science Majors</h4></p>
            <a href="http://mae.nmsu.edu/">Aerospace engineering</a><br />
            <a href="http://eppws.nmsu.edu/">Agricultural Biology</a><br />
            <a href="http://aces.nmsu.edu/academics/pes/agronomy-degree.html">Agronomy:<br />
             <a href="http://aces.nmsu.edu/academics/anrs/">Animal Science</a><br />
             <a href="http://cmi.nmsu.edu/">Animation and Digital Effects</a><br />
             <a href="http://chemistry.nmsu.edu/">Biochemistry</a><br />
             <a href="http://bio.nmsu.edu/">Biology</a><br />
             <a href="http://chme.nmsu.edu/">Chemical Engineering</a><br />
             <a href="http://chemistry.nmsu.edu/">Chemistry</a><br />
             <a href="http://ce.nmsu.edu/">Civil Engineering</a><br />
             <a href="http://www.cs.nmsu.edu/wp13/">Computer Science</a><br />
             <a href="http://aces.nmsu.edu/academics/fws/untitled.html">Conservation Ecology</a><br />
             <a href="http://business.nmsu.edu/departments/economics/">Economics</a><br />
             <a href="http://ece.nmsu.edu/">Electrical Engineering</a><br />
             <a href="http://engineeringphysics.nmsu.edu/">Engineering Physics</a><br />
             <a href="http://et.nmsu.edu/">Engineering Technology – Civil</a><br />
             <a href="https://et.nmsu.edu/">Engineering Technology - Electronics and Computer</a><br />
             <a href="https://et.nmsu.edu/">Engineering Technology – Mechanical</a><br />
             <a href="http://aces.nmsu.edu/academics/pes/">Environmental Science</a><br />
             <a href="http://aces.nmsu.edu/academics/FCS/">Food Science and Technology</a><br />
             <a href="http://aces.nmsu.edu/academics/pes/genetics-degree.html">Genetics and Biotechnology</a><br />
             <a href="http://geography.nmsu.edu/">Geography</a><br />
             <a href="http://deptweb-p.nmsu.edu/~geology/">Geology</a><br />
             <a href="http://aces.nmsu.edu/academics/pes/">Horticulture</a><br />
             <a href="http://aces.nmsu.edu/academics/fcs/">Human Nutrition and Dietetic Sciences</a><br />
             <a href="http://ie.nmsu.edu/">Industrial Engineering</a><br />
             <a href="https://et.nmsu.edu/">Information and Communication Technology</a><br />
             <a href="https://www.math.nmsu.edu/">Mathematics</a><br />
             <a href="http://mae.nmsu.edu/">Mechanical Engineering</a><br />
             <a href="http://bio.nmsu.edu/">Microbiology</a><br />
             <a href="http://aces.nmsu.edu/academics/aeab/natural-resouce-economic.html">Natural Resource Economics and Policy</a><br />
             <a href="http://physics.nmsu.edu/">Physics</a><br />
             <a href="http://aces.nmsu.edu/academics/pes/index.html">Soil Science</a><br />
             <a href="https://et.nmsu.edu/">Surveying Engineering</a><br />
             <a href="http://aces.nmsu.edu/academics/fws/">Wildlife Science</a></p>


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
