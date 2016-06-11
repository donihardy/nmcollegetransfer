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

        <?php //Begin top Nav Bar ?>
        <?php require '../includes/schooltopnav.php'; ?>
        <?php //End Top Nav Bar ?>

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">UNM TAOS</a>
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
            <p>UNM-Taos has an open admissions policy, so if you intend to work towards a degree or certificate, all you need is a high school diploma or GED to qualify for admission.</p>
            <ul><li>UNM-Taos admissions application</li>
              <li>$10.00 non-refundable one time only, application fee</li>
              <li>High school / GED official transcript</li>
              <li>Official college transcript (if applicable)</li></ul>
              <p><a href="http://taos.unm.edu/catalog/admissions.html">General Admissions</a>
                <h4 id="eligibility">Eligibility</h4>
                <p>The University of New Mexico-Taos Campus admits all qualified New Mexico applicants. Within the limits of its resources, it also accepts qualified students from other states and foreign countries. Because of the great diversity of UNM-Taos's students, special applications and admissions procedures have been created to meet the needs of the different students served, including entering freshmen, transfer students, non-degree students, certificate students, associate degree students and unclassified students.</p>
                <a href="http:www.unm.edu">SCHOOL Admissions Eligibility</a>
                <h4 id="deadlines">Deadlines</h4>
                <p>Recommended application deadlines for degree status are: <br />
                  1st week of June for fall semester, 1st week of November for spring semester, and mid-April for summer session.
                </p>
                <a href="http://taos.unm.edu/catalog/admissions.html">UNM Taos Admissions Deadlines</a>
                <h4 id="fees">Fees</h4>
                <p>One-time admissions fee of $10.00</p>
                <a href="http://taos.unm.edu/home/admissions/">UNM Taos Admissions Fees</a>
                <h4 id="visits">Campus Visits</h4>
                <p>New Student Orientation is a chance for first-time and transfer students to learn about the UNM-Taos Campus.</p>
                <a href="http://taos.unm.edu/student-success/nso.html">New Student Orientation</a>

              </div>
            </div>

             <?php //Begin Side menu ?>
             <?php require '../includes/sidemenu.php'; ?>
             <?php //End Side menu ?>
             

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
