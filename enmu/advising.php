<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - ENMU</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage enmubgimage">
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY</a>
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
              <a href="index.php">ENMU</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>ENMU Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>At the Advising Center, students will: be assisted with clarifying their educational goals; learn educational options available at ENMU. Academic advising is an important part of your success at Eastern New Mexico University.</p>
            <p><a href="https://www.enmu.edu/services/advising/">ENMU Advising General Info</a></p>
            <h4 id="website">ENMU Advising Website</h4>
            <p><a href="https://www.enmu.edu/services/advising/">ENMU Advising Website</a></p>
            <a href="https://www.enmu.edu/services/advising/faq.shtml">FAQs</a>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>To schedule an appointment you can call <a href="tel:1-575-562-2338">575-562-2338 </a>to make an appointment:</p>
            <p><a href="http://www.enmu.edu/academics/advising-center">ENMU Advising Appointment</a></p>
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
