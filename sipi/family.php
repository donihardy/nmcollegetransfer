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
    - SOUTHWESTERN INDIAN POLYTECHNIC INSTITUTE</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage sipibgimage">
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
          <a class="navbar-brand sipi" href="index.php">SOUTHWESTERN INDIAN<br />POLYTECHNIC INSTITUTE</a>
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
            <a href="index.php">SIPI</a>
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
        <p>The Housing & Recreation Department features two (2) traditional style residential facilities, which provides accommodations for approximately 288 students. In addition, the Housing & Recreation Department supervises, organizes and facilitates recreational activities, intramurals and the SIPI Wellness Center. A large component of the educational experience is learning to live and to interact with other people from different tribal, racial and economic backgrounds. To this end, students are helped to develop a growing sense of maturity and responsibility by participating in student activities within the residential facilities and throughout the college campus.</p>
        <p><a href="http://www.sipi.edu/students/studsvcs/rec/">Housing</a></p>
        <h4 id="childcare">Child Care</h4>
        <p>YDI/SIPI Early Childhood Learning Center is always accepting applications for children ages 6 weeks - 5 years old.</p>
        <p>Program offers full day option: Monday - Friday (7:30am - 4:30pm)
        </p>
        <p><a href="http://www.sipi.edu/childcare/">Child Care</a></p>
        <h4 id="parent">Parent Info</h4>
        <p>No information found.</p>
        <!--<p><a href="#">SCHOOL Parents &#38; Families</a>-->
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
