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
    - UNM</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage unmbgimage">
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
          <a class="navbar-brand unm" href="index.php">UNIVERSITY OF NEW MEXICO</a>
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
              <a href="index.php">UNM</a>
            </li>
            <li>
              ADMISSIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Admissions <a href="../questions.php#admissions"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="requirements">Admission Requirements</h4>
            <p>Transfer Admissions:</p>
            <p>Students applying for admission to UNM with at least 24 transferrable credits must have at least a “C” average (2.0 on a 4.0 scale) in all transferrable college work attempted. Individual colleges or programs may have additional requirements. Please refer to the UNM Catalog for specific program requirements. Students applying for admission to UNM with fewer than 24 transferrable credit hours must meet both transfer and freshmen admission requirements.</p>
            <p><a href="http:www.unm.edu/admissions.unm.edu/future_students/transfer.html">UNM Transfer Admissions Requirements</a><br />
              <a href="http://admissions.unm.edu/future_students/admission-requirements.html">General Admissions</a></p>
              <h4 id="eligibility">Eligibility</h4>
              <p>Students applying for admission to UNM with at least 24 transferrable credits must have at least a “C” average (2.0 on a 4.0 scale) in all transferrable college work attempted. Individual colleges or programs may have additional requirements. Please refer to the UNM Catalog for specific program requirements.</p>
              <a href="http:www.unm.edu">UNM Admissions Eligibility</a>
              <h4 id="deadlines">Deadlines</h4>
              <p>For priority consideration, apply by the following dates: Fall - June 15; Spring - November 15; Summer - May 1.</p>
              <a href="http://admissions.unm.edu/future_students/transfer.html">UNM Admissions Deadlines</a>
              <h4 id="fees">Fees</h4>
              <p>Pay the $20 non-refundable application fee</p>
              <a href="http://admissions.unm.edu/future_students/transfer.html">UNM Admissions Fees</a>
              <h4 id="visits">Campus Visits</h4>
              <p>Whether you live across town or across the country, participating in a campus tour is one of the best ways to experience UNM. They offer a variety of campus events for prospective students.
               If your schedule doesn’t allow for a scheduled tour or you would simply like to explore on your own, try a self-guided tour.</p>
               <a href="http://admissions.unm.edu/common/Pages/visit-us.html">Schedule a Visit</a>

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