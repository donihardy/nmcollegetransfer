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
    - ENMU</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage enmubgimage">
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY</a>
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
              <a href="index.php">ENMU</a>
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
          <p>As a student, you need a safe environment that gives you privacy, quiet time and a place to keep your stuff. You also need a place where you can feel comfortable hanging out with your friends, listen to music, or do whatever it is that you do to relax. You will find just the environment you need in our three residence halls and 300 apartments.</p>

          <p>We want you to get a good start on your college career. If you have fewer than 30 hours of college credit after high school graduation and are under 21 years old, you are required to live on campus and purchase a meal plan. This is actually a pretty big help. You live on campus, so if you oversleep, you can still make it to that 9 a.m. class. All of your meals are provided, so you never have to cook. And your best friend from grade school lives right down the hall.</p>
          <p>Of course, we make exceptions if living on campus is not a good option for you. If you are in one of the following situations, fill out the Residential Living Waiver Form and take it to the Office of Housing and Residence Life in Campus Union, Room 108:</p>
          <p><a href="http://www.enmu.edu/services/housing/index.shtml">Housing</a></p>
          <h4 id="childcare">Child Care</h4>
          <p>The Child Development Center-Welcome to the Child Development Center (CDC) Laboratory School! ENMU's Child Development Center has a proud history of serving as a laboratory school since 1949. The original program enrolled 16 children ages 2-6 and was open from 9 a.m.-3 p.m. Monday through Friday. In 1972, the current CDC facility was constructed with the open classrooms and curriculum modeled after the Infants Schools in England. Today, the CDC enrolls 36 children, 3-5 years old within two classrooms. The facility is located on the ENMU Portales Campus at the corner of U.S. Highway 70 and South Avenue N. The program operates in the fall, spring and summer terms, Monday through Friday from 7:45 a.m. until 5 p.m. The center observes the holidays and semester breaks observed by ENMU students.</p>
          <p><a href="http://education.enmu.edu/projects/cdc.shtml">Child Care</a></p>
          <h4 id="parent">Parent Info</h4>
          Resource and information for current and future ENMU parents: <br/>
          <p><a href="http://www.enmu.edu/future-students/parents/ ">Parent Info</a></p>
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
