<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - NEW MEXICO STATE UNIVERSITY DO&#209;A ANA</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage donaanabgimage img-responsive">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY DO&#209;A ANA</a>

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
              NMSU DO&#209;A ANA
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/donaana.jpg"  alt="Responsive Image">
            <p>DACC is a responsive and accessible learning-centered community college that provides educational opportunities to a diverse community of learners in support of workforce and economic development.</p>
            <p></p>
            <p><a href="http://dacc.nmsu.edu/">NMSU Do&#241;a Ana Website</a><br />
              <a href="https://www.google.com/maps/place/Do%C3%B1a+Ana+Branch+C.C.Main+Bldg,+Las+Cruces,+NM+88003/@32.275804,-106.7572643,17z/data=!3m1!4b1!4m2!3m1!1s0x86de17bbbad20305:0xf55579abc57f02dd?hl=en">NMSU Do&#241;a Ana Central Map</a></p>

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
