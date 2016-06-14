<?php include '../includes/header.php'; ?>

  <title>NM COLLEGE & TRANSFER 
    - NMMI</title>
  
  <body>
    <div class="container-fluid">
      <header class="bgimage nmmibgimage img-responsive">
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
          <a class="navbar-brand nmmi" href="index.php">NEW MEXICO<br />MILITARY INSTITUTE</a>
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
              NMMI
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/nmmi.jpg"  alt="Responsive Image">
            <p>Located in Roswell, New Mexico, the New Mexico Military Institute offers a rich history and tradition of educating tomorrow’s leaders through a program of strong, challenging academics, leadership preparation, and character development. Known as “The West Point of the West,” NMMI remains the only state-supported co-educational college preparatory high school and junior college in the United States. Serving the educational needs of an international student population, the Institute has strict admissions standards that yearly result in an enrollment of approximately 1,000 students who come from 43 states, the District of Columbia, and 13 foreign nations.</p>
            <p>"ACHIEVEMENT BEGINS WITH THE DESIRE TO BE GREATER THAN YOU ARE TODAY"</p>
            <p><a href="http://www.nmmi.edu">NMMI Website</a><br />
              <a href="https://www.nmmi.edu/map/campus_map.pdf">Map</a></p>

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
