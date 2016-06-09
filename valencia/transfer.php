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
              TRANSFER INFO
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Course Transfer Info</h3>
            <h4 id="transcripts">Transcripts</h4>

            <p>To receive transfer credit from previous institutions, official transcripts from those institutions must be mailed directly to UNM-Valencia, Admission/Registration Office.</p>
            <div><h4 id="tes">Transferable Courses</h4>
              <p> A transfer evaluation, reflecting those transfer credits acceptable at UNM, will be generated only after the student is officially admitted to a degree program at UNM-Valencia or UNM-Main.</p>
              <p>UNM Valencia<br />
                Office of Admissions<br />
                280 La Entrada Rd.<br />
                Los Lunas, NM 87031</p>
                <p>Transfer students will be awarded full credit for coursework completed with grades of C or higher at fully accredited institutions if the courses are the same or equivalent to UNM courses. Neither UNM nor UNM-Valencia, however, accepts remedial coursework for transfer.</p>
                <a href="http://valencia.unm.edu/academics/Catalog/admission--registration.html">Transfer Info</a><br />
                <a href="http://admissions.unm.edu/future_students/transfer-course-equivalencies.html">UNM Transfer Equivalency System (TES) Page</a>
                <h4 id="commoncore">Common Core Courses</h4>
                <a href="http://valencia.unm.edu/academics/Catalog/degrees-and-courses.html">Core Curriculum</a>
                <h4 id="actsat">ACT/SAT</h4>
                <p>Order / Submit Official ACT or SAT scores. If you have not taken either, or if you will need to begin your Math or English progression again, you will need to take the COMPASS placement tests. These tests are un-timed and free for your first attempt. They are administered on a walk-in basis at Student Services front desk. You may take the test Monday through Friday between 8:00 a.m. and 3:00 p.m.</p>
                <a href="http://valencia.unm.edu/students/admissions-and-registration/application-checklist.html">ACT/SAT info</a>
                <h4 id="moreinfo">Request More Info</h4>
                <p>Admission/Registration Office or by calling <a href="1-505-925-8580">925.8580</a></p>

                <h4 id="transfer">Transfer Agreements</h4>
                <a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transition</a>
                <h4 id="dual">High School Dual Enrollment</h4>
                <p>Dual Credit courses provide qualified public and charter school students the opportunity to enroll in college-level courses through UNM Valencia and earn both high school and college credit. Dual Credit students are not required to pay tuition, but they will be responsible for any course fees.</p>
                <a href="http://valencia.unm.edu/students/admissions-and-registration/dualconcurrent-enrollment/index.html">UNM Valencia Dual Enrollment Page</a>

              </div>
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