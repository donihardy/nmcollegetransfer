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
             FAMILY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Family Life</h3>
          <h4 id="housing">Housing</h4>
          <p>No housing available.</p>
          <!--<p><a href="#">Housing</a></p>-->
          <h4 id="childcare">Child Care</h4>
          <p>The Kid's Campus serves children 6 weeks to 5 years of age. We are licensed by the New Mexico Children Youth and Families Department and participate in the Aim‐High quality rating system. We are pleased to be able to serve you and your child. UNM‐Taos Kid’s Campus opened in spring of 2008 through a grant funded by Daniel’s Foundation.</p>
          <a href="http://taos.unm.edu/kids-campus/index.html">Kid's Campus</a>
        </p>
        <h4 id="parent">Parent Info</h4>
        <p><a href="http://taos.unm.edu/triomathsci/parents.html">Upward Bound Math & Science - Parents Resources</a></p>
      </div>
    </div>

    <!-- Side menu -->

    <?php require '../includes/sidemenu.php'; ?>

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