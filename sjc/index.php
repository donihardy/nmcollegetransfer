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
      <header class="bgimage sjcbgimage img-responsive">
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
          <a class="navbar-brand" href="index.php">SAN JUAN COLLEGE</a>
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
              SJC
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/sjc.jpg"  alt="Responsive Image">
            <p>From its modest start as a small branch of New Mexico State University serving just 25 students, San Juan College has grown to be one of the largest two-year comprehensive community colleges. Ranking fifth in enrollment among all two- and four-year colleges in the state, the college provides quality education to more than 15,000 students annually.</p>

            <p>Located in Farmington New Mexico, San Juan College serves as a regional leader in education. The college has four campuses throughout the area, which include the main Farmington Campus; San Juan College 30th Street Campus, also located in Farmington; San Juan College East in Aztec, New Mexico; and San Juan College West, in Kirtland, New Mexico.  Dedicated to student success and completion, San Juan College offers innovative, challenging and affordable academic programs that equip students with the knowledge, skills and confidence to succeed in meeting educational and career goals. Through online and face-to-face classes, students can choose from hundreds of two-year degree and certificate programs, non-credit community learning classes, and workforce training. In addition, the college partners with state universities to offer both bachelor’s and master’s degrees on campus.</p>
            <p><a href="http://www.sanjuancollege.edu/">San Juan College Website</a><br />
              <a href="https://www.sanjuancollege.edu/campus-maps/">Maps</a></p>

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
