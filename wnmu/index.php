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
  <title>NM COLLEGE TRANSFER-WNMU</title>
</head>
<body>
  <div class="container-fluid">
    <header class="bgimage wnmubgimage img-responsive">
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
        <a class="navbar-brand wnmu" href="index.php">WESTERN NEW MEXICO <br />UNIVERSITY</a>
      </div>

      <!--Begin top nav-->

      <?php require '../includes/schooltopnav.php'; ?>

      <!--End Top Nav Bar-->

      <div id="breadcrumb">
        <ol class="breadcrumb">
          <li>
            <a href="../index.php">HOME</a>
          </li>
          <li>
            WNMU
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody">
          <img class="schoolimg img-responsive pull-right col-lg-6" src="../images/wnmu.jpg"  alt="Responsive Image">
          <p >Accredited by the North Central Association of Colleges and Secondary Schools, the Professional Standards Commission of the State of New Mexico, the National Council for Accreditation of Teacher Education, and the Council on Social Work Education.</p>
          <p>We offer fully online master and bachelor degrees.</p>
          <p>The world's largest permanent collection of Mimbres pottery is found in our University Museum</p>
          <p><a href="http://www.wnmu.edu">WNMU Website</a><br />
            <a href="http://wnmu.edu/quickfacts/wnmu_map.pdf">Map</a></p>

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
