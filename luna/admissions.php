<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="NM College Transfer 101 statewide website assists students, parents, faculty, staff, advisors to find transfer information and links to all the public New Mexico higher education schools.">
  <meta name="keywords" content="New Mexico, NM, College, University, Transfer, Higher Ed, UNM, ENMU, NMSU, NM Tech, WNMU, NMHU, CNM">
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

  <title>NM COLLEGE TRANSFE 101-LCC</title>
</head>
<body>
  <div class="container-fluid">
    <header class="bgimage lunabgimage">
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
        <a class="navbar-brand" href="index.php">LUNA COMMUNITY COLLEGE</a>
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
            <a href="index.php">LCC</a>
          </li>
          <li>
            ADMISSIONS
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody">
          <h3>Admissions <a href="../questions.php#admissions"><img class="question" src="../images/questionmark.png"></a></h3>
          <h4 id="requirements">Requirements</h4>
          <p>Any student wishing to obtain a certificate or an associate degree must first apply for regular admission, and submit an official high school transcript indicating a graduation date from an accredited secondary school; OR submit an official transcript of General Education Development (GED) test results.</p>
          <p>Luna Community College is an open-admission, certificate and associate degree granting institution which provides access to higher education.</p>
          <ul><li>Apply for Admission</li>
            <li>Advisement</li>
            <li>ACT/Compass</li></ul>
            
            <p><a href="https://pathways.luna.edu/ICS/Admissions/">Apply Online</a><br />
              <a href="http://luna.edu/admissions/">LCC Admission Requirements</a><br />
              <h4 id="eligibility">Eligibility</h4>
              <p>LCC accepts transfer of academic credits earned from regionally accredited institutions of higher learning. Both general education core and program/major specific courses are eligible for transfer. However, the Office of the Registrar evaluates courses and determines transfer eligibility of general education core courses only. The student's academic advisor, in conjunction with the respective academic director, evaluate and determine transfer eligibility of all program/major specific courses and must formally file a Transfer of Credit Evaluation form with the Office of the Registrar.</p>
              <a href="http://luna.edu/admissions/#transfers">LCC Transfer Admissions Eligibility</a></p>
              <h4 id="deadlines">Deadlines</h4>
              <p>Can be admitted at any time.</p>
              <a href="https://luna.edu/media/page_files/CATALOG2015-2018.pdf">LCC Admissions Deadlines</a>
              <h4 id="fees">Fees</h4>
              <p>No admissions fees.</p>
              <a href="http://luna.edu/admissions/">LCC Admissions Fees</a>
              <h4 id="visits">Campus Visits</h4>
              <p><a href="http://www.luna.edu/tour/">Campus Map & Directions to Campus</a></p>
              <a href="http://www.luna.edu/orientation/">Online Orientation</a>

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
