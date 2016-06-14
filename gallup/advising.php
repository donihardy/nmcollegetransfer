<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - UNM GALLUP</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage gallupbgimage">
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
          <a class="navbar-brand gallup" href="index.php">UNIVERSITY OF NEW MEXICO<br />GALLUP</a>
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
              <a href="index.php">UNM GALLUP</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>UNM Gallup Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>Visit us for your academic planning needs and career interest. Our offices are located in the Student Services Technology Center (SSTC). Department telephone is: (505) 863-7706</p>
            <p><a href="http://www.gallup.unm.edu/vert/new-students/advising.php">UNM Gallup Advising</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p> Phone: <a href="tel:1-505-863-7706">(505) 863-7706</a></p>
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
