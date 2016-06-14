<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE &#38; TRANSFER 
    - NEW MEXICO STATE UNIVERSITY CARLSBAD</title>
    

  <body>
    <div class="container-fluid">
      <header class="bgimage carlsbadbgimage img-responsive">      <img class="container-fluid">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY CARLSBAD</a>      </div>

          <?php //Begin top Nav Bar ?>
          <?php require '../includes/schooltopnav.php'; ?>
          <?php //End Top Nav Bar ?>

          <div id="breadcrumb">
            <ol class="breadcrumb">
              <li>
                <a href="../index.php">HOME</a>
              </li>
              <li>
                <a href="index.php">NMSU CARLSBAD</a>
              </li>
              <li>
               RESOURCES
             </li>
           </ol>
         </div>
         <div class="container-fluid">
          <div class="textbody">
            <h3>Resources</h3>
            <p>Thank you for accessing the information and resources from Student Services that we have developed on our web page. Student Services include: Admissions, Registration, Financial Aid, Advising, Counseling, Student Development, Special Needs Services, Career Placement and Graduation. Student Services is comprised of 13 dedicated individuals who primary concern is to assist you in being successful at NMSU Carlsbad. Please feel free to contact any of us and thank you for picking NMSU Carlsbad as your community college!</p>
            <p><a href="https://carlsbad.nmsu.edu/students/all-students/student-services/">Student Services</a></p>

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
