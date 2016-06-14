<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER 
  - INSTITUTE OF AMERICAN INDIAN ARTS</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage iaiabgimage">
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
          <a class="navbar-brand iaia" href="index.php">INSTITUTE OF<br />AMERICAN INDIAN ARTS</a>
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
              <a href="index.php">IAIA</a>
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
          <p>There are two options for housing at IAIA—Center for Lifelong Education (CLE) Residence Center and our family housing apartments. Each area provides safe and secure housing in a healthy, positive, and inclusive environment.<br />
            <a href="https://iaia.edu/student-life/housing/">Housing Website</a></p>
            <h4 id="childcare">Child Care</h4>
            <p>Child care is not available on campus.</p>
            <!--<p><a href="#">Child Care</a></p>-->
            <h4 id="parent">Parent Info</h4>
            <p> The student life staff is ready to welcome your child to their new temporary home. We know you have questions, so we hope we can answer some of them on this page.<br />
              <a href="https://iaia.edu/student-life/for-parents/">Parent Info</a></p>
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
