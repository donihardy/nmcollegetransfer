<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - SOUTHWESTERN INDIAN POLYTECHNIC INSTITUTE</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage sipibgimage">
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
          <a class="navbar-brand sipi" href="index.php">SOUTHWESTERN INDIAN<br />POLYTECHNIC INSTITUTE</a>
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
              <a href="index.php">SIPI</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>SIPI Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>Our objectives are to provide Academic Support Services by increasing coaching services through tutoring, increasing academic and personal counseling services through career guidance to include the promotion of healthy lifestyles for our students. Our focus for student success is to further increase educational awareness through transitioning, First Year experiences, career and testing services, disability awareness, employment/placement, and our aim is to increase retention and graduation.</p>
            <p><a href="http://www.sipi.edu/students/studsvcs/sss/">SIPI Advising</a></p>
            <h4 id="website">CNM Advising Website</h4>
            <p>SIPI Academic Counselor’s provide academic counseling for First Year and continuing students, advises on matters of curriculum, course and degree requirements, transfer credit evaluation, and graduation counseling and clearance. The Academic Counseling center provides the following:</p>
            <ul><li>Career Advisement</li>
              <li>Career Interest Inventories</li>
              <li>Transitioning</li></ul>
            </p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>Contact Information:<br />
              SIPI Academic Support Center<br />
              Cecelia Cometsevah, PhD, LMHC<br />
              9169 Coors NW / P.O. Box 10146<br />
              Albuquerque, NM 87114<br />
              <a href="1-505-922-4093">(505) 922-4093</a></p>
              <p><a href="http://www.sipi.edu/students/studsvcs/sss/">SIPI Advising Appointment</a></p>
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
