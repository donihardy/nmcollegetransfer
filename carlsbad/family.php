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
               FAMILY
             </li>
           </ol>
         </div>
         <div class="container-fluid">
          <div class="textbody">
            <h3>Family Life</h3>
            <h4 id="housing">Housing</h4>
            <p>Although NMSU Carlsbad does not provide dormitory housing, the Student Services department is happy to help you find an affordable apartment.</p>
            <p><a href="https://carlsbad.nmsu.edu/students/all-students/student-life/">Housing</a></p>
            <h4 id="childcare">Child Care</h4>
            <p>No information found.</p>
            <!--<p><a href="#">Child Care</a></p>-->
            <h4 id="parent">Parent Info</h4>
            <p>New Mexico State University maintains academic, disciplinary, and other records pertaining to students in accordance with the specifications of the Family Educational Rights and Privacy Act of 1974 (FERPA) and amendments. Students who are interested in acquiring access to their records should make their requests to the Vice President for Student Services.</p>
            <p><a href="https://carlsbad.nmsu.edu/students/all-students/student-handbook/family-education-rights-privacy-act-of-1974-ferpa/">NMSU Carlsbad Parents &#38; Families</a>
            </div>
          </div>

         <?php //Begin Side Menu ?>
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
