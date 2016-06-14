<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - SANTA FE COMMUNITY COLLEGE</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage sfccbgimage">
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
            <a href="index.php">SFCC</a>
          </li>
          <li>
            ADVISING
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody"><h3>SFCC Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
          <h4 id="geninfo">Advising General Info</h4>
          <p>At SFCC there are three groups of professionals who regularly provide academic advising: the Welcome and Advising Center advisers, counselors and faculty members. In general, individuals in any of these groups can help you but each may also provide specialized assistance.</p>
          <p><a href="http://www.sfcc.edu/academic_advising">SFCC Advising</a></p>
          <h4 id="appt">Schedule an Appointment</h4>
          <p>We are located in main building between the Cashier's Office and the Campus Center.</p>
          <p>Visit us during the Welcome and Advising Center open hours:<br />
            MONDAYS, WEDNESDAYS AND THURSDAYS: 8 a.m. to 5:30 p.m.<br />
            TUESDAYS: 9 a.m. to 5:30 p.m.<br />
            FRIDAYS: 8 a.m. to 5 p.m.</p>
            <p>For more information, please contact the Welcome and Advising Center, <a href="tel:1-505-428-1270">505-428-1270</a>, <a href="mailto:wac@sfcc.edu">wac@sfcc.edu.</a></p>
            <p><a href="http://www.sfcc.edu/registration/welcome_and_advising_center">SFCC Advising Appointment</a></p>
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
