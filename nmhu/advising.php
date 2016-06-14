<?php include '../includes/header.php'; ?>

  <title>NM COLLEGE & TRANSFER 
    - NMHU</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmhubgimage">
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
          <a class="navbar-brand nmhu" href="index.php">NEW MEXICO<br />HIGHLANDS UNIVERSITY</a>
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
              <a href="index.php">NMHU</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>NMHU Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>The Office of Academic Support offers a variety of services to help students excel in their studies, including Academic Advisement, Peer Mentoring, Workshops, New Student Orientation and the coordination of Peer Study Groups. Our department collaborates with the Freshman Experience Program, the Learning Communities, and Freshman Forum classes to create a seamless transition from high school to college. An academic adviser will be assigned to you based on the Learning Community you select.</p>
            <h4 id="website">NMHU Advising Website</h4>
            <p>Advisers are committed to providing dynamic partnerships that
              enable trust and mutual respect while supporting a transition to
              self-directed learning, decision making and student independence.
              Adviser and student interactions promote teaching and learning to
              enhance student success including educational, social and personal
              development. </p>
              <p><a href="http://www.nmhu.edu/office-of-academic-support/ ">NMHU Advising Website</a></p>
              <h4 id="appt">Schedule an Appointment</h4>
              <p>To meet your adviser, visit the Felix Martinez Building, Suite 110.</p>
              <p><a href="mailto:academicsupport@nmhu.edu">Email</a><br />
                <a href="tel:1-505-454-3188">(505) 454-3188</a></p>
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
