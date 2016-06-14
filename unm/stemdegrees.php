<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - UNIVERSITY OF NEW MEXICO</title>

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

        <?php //Begin top Nav Bar ?>
        <?php require '../includes/schooltopnav.php'; ?>
        <?php //End Top Nav Bar ?>

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">UNM</a>
            </li>
            <li>
              STEM DEGREES
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">

            <h3>STEM DEGREES</h3>
            <p><h4>Science Majors</h4></p>
            Biology<br />
            Biochemistry<br />
            Chemistry<br />
            Earth &amp; Planetary Science<br />
            Environmental Science<br />
            Physics<br />
            Nutrition &amp; Dietetics<br />
            <p><h4>Engineering Majors</h4></p>
            Chemical Engineering<br />
            Civil Engineering<br />
            Computer Engineering<br />
            Computer Science<br />
            Construction Engineering<br />
            Electrical Engineering<br />
            Mechanical Engineering<br />
            Nuclear Engineering<br />
            <p><h4>Mathematics Majors</h4></p>
            Applied Math<br />
            Pure Math<br />
            Math Education<br />
            Math Computation<br />
            Statistics<br />
            <br/>
          </div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

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
