<?php include '../includes/header.php'; ?>

  <title>NM COLLEGE &#38; TRANSFER 
    - SANTA FE COMMUNITY COLLEGE</title>
  
  <body>
    <div class="container-fluid">
      <header class="bgimage sfccbgimage img-responsive">
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
          <a class="navbar-brand sfcc" href="index.php">SANTA FE<br />COMMUNITY COLLEGE</a>
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
              SFCC
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/sfcc.jpg"  alt="Responsive Image">
            <p>Since 1983, Santa Fe Community College has served as the gateway to success for individuals and the community. The College provides affordable, high-quality educational programs that serve the social, cultural, technological and economic needs of Santa Fe’s diverse community.</p>
            <p>More than 15,000 students are served each year in its credit, noncredit andadult basic education programs. Offering more than 100 degree and certificate programs, SFCC caters to the academic, career and personal-enrichment needs of local residents, businesses, government and public service organizations. More than 274 full-time and 587 part-time workers are employed by the college.</p>
            <p><a href="http://www.sfcc.edu/">Santa Fe Community College Website</a><br />
              <a href="http://www.sfcc.edu/maps">Maps</a></p>

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
