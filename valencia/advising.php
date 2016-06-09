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
    - UNM VALENCIA</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage valenciabgimage">
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
          <a class="navbar-brand valencia" href="index.php">UNIVERSITY OF NEW MEXICO<br />VALENCIA</a>
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
              <a href="index.php">UNM VALENCIA</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>UNM Valencia Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>Students who have decided upon a UNM-Valencia Campus or UNM degree major are encouraged to meet with UNM–Valencia Campus advisors (faculty or student services staff) to develop a program of study plan and to make sure that steady progress is being made towards completion of the degree.</p>
            <p><a href="http://valencia.unm.edu/students/advisement-and-counseling/services.html">UNM Advising</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>Please drop by to make an appointment or walk-in basis from 8:30 a.m. to 4:30 p.m. Monday through Friday, or call 925-8560 or email <a href="mailto:vcadvise@unm.edu">vcadvise@unm.edu</a>.</p>
            <p><a href="http://valencia.unm.edu/students/advisement-and-counseling/services.html">UNM Valencia Advising Appointment</a></p>
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
