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

        <!--Begin top Nav Bar-->

        <?php require '../includes/schooltopnav.php'; ?>

        <!--End Top Nav Bar-->

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">SJC</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <p><a href="http://www.sanjuancollege.edu/student-services/departments/transfer-center/">Transfer Center</a><br />
           <a href="http://www.sanjuancollege.edu/student-success-center/programs/student-achievement-center/">Student Achievement Center</a><br />
           <a href="http://www.sanjuancollege.edu/student-services/departments/veterans-center/">Veteran's Center</a><br />
           <a href="http://www.sanjuancollege.edu/student-services/departments/career-services/">Career Center</a><br />
           <a href="http://www.sanjuancollege.edu/administrative-services/departments/ots/">Office of Technology Services</a><br />
           <a href="http://www.sanjuancollege.edu/student-success-center/programs/tutoring-center/">Tutoring Center</a><br />
           <a href="http://www.sanjuancollege.edu/student-services/departments/advising-and-counseling-center/disability-services/">Disability Services</a><br />
           <a href="http://www.sanjuancollege.edu/student-services/departments/student-activities/clubs/edge-club/">TRiO</a></p>
           <a href="http://www.sanjuancollege.edu/student-support/">San Juan College Student Support</a>

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
