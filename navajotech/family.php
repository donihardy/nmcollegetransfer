<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER 
  - NAVAJO TECHNICAL UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage ntubgimage">
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
          <a class="navbar-brand ntu" href="index.php">NAVAJO<br />TECHNICAL UNIVERSITY</a>
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
              <a href="index.php">NAVAJO TECH</a>
            </li>
            <li>
             FAMILY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Family Life</h3>
          <h4 id="housing">Housing</h4>
          <p>NTU provides residential housing for both single students and students with families at the main campus. Rooms and apartments subject to the following eligibility requirements: Students who live beyond a 55-mile radius from NTU, who are enrolled full time at NTU, and have submitted all required documents are eligible to apply. Security deposits are required prior to occupancy of any NTU housing facility.<br />
            <a href="http://www.navajotech.edu/campus-life/housing">Student Housing</a></p>
            <h4 id="childcare">Child Care</h4>
            <p>The NTU Child Care Services Program operates within the Instructional Services Department.</p>
            <p><a href="http://www.navajotech.edu/campus-life/child-care">Child Care</a></p>
            <!--<h4 id="parent">Parent Info</h4>
            <p>Info to come</p>
            <p><a href="#">Parent Info</a></p>-->
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
