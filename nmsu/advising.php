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
                  ADVISING
                </li>
              </ol>
            </div>
            <div class="container-fluid">
              <div class="textbody"><h3>NMSU Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
                <h4 id="geninfo">Advising General Info</h4>
                <p>Academic advisors assist students as they become self-directed learners by teaching them to develop educational plans directed toward their academic, career, and personal aspirations.</p>
                <p>While the ultimate responsibility for planning and completing an academic program in compliance with university, college, and departmental requirements rests with the student, advisors are here to help you.
                </p>
                <p>NMSU has six colleges and offers over 80 undergraduate degree programs. Each college and department handles advising students a little differently. Undeclared and Undecided students are advised through the College of Arts and Sciences.</p>
                <p><a href="http://advising.nmsu.edu/advising-in-your-college/">NMSU Advising</a></p>
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