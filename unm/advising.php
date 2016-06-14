<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - UNM</title>
  </head>
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
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>UNM Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>The University of New Mexico is a unique campus for advising. We currently have twelve Colleges and five Student Affairs advising centers each with their own unique approach to advising students. The various advising center utilizes a different advising approach from prescription to developmental advising, holistic to appreciative advising, or intrusive to advising as teaching.</p>
            <p>The mission of this office is to work collaboratively with each academic advising unit to enhance the quality of academic advising for students at the University of New Mexico.</p>
            <p><a href="http://advisement.unm.edu/index.html">UNM Advising</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>Students in University College can schedule an appointment to see their advisor through Lobo Achieve: </p>
            <p><a href="http://ucollege.unm.edu/advisement/make-an-appointment.html">UNM Advising Appointment</a></p>
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
