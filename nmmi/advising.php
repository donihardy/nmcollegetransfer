<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - NMMI</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmmibgimage">
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
              <a href="index.php">NMMI</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>NMMI Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>The Franklin Student Assistance Center (SAC) provides professional advisors who offer academic, career and personal counseling. ACT/SAT preparatory courses are offered each semester for students interested in increasing their scores. Transfer guidance on colleges and service academy admission is also available. More specifically, SAC works closely with teaching faculty guiding their students through the academic program supporting and encouraging good study habits, proper behavior and overall academic achievement and growth.</p>
            <p>Parents or Guardians should always feel comfortable contacting the Franklin Student Assistance Center for any issue dealing with academics at NMMI.</p>
            <p><a href="http://www.nmmi.edu/sac/">NMMI Advising</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>Franklin Student Assistance Center (SAC)<br /><a href="tel:1-575-624-8360">575-624-8360</a></p>
            <p><a href="http://www.nmmi.edu/sac/">NMMI Advising Appointment</a></p>
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
