<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - NORTHERN NEW MEXICO COLLEGE</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage nnmcbgimage">
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
          <a class="navbar-brand nnmc" href="index.php">NORTHERN NEW MEXICO<br />COLLEGE</a>
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
              <a href="index.php">NNMC</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>NNMC Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p><strong>Services</strong></p>
            <p>Make an appointment for Academic Advisement. Learn how Northern's Academic Advisors can help you get started and stay on track for a successful college experience.</p>
            <ul><li>Set up a meeting with an Academic Advisor</li>
              <li>To schedule a meeting, contact the Advisement Center.</li>
              <li>Your Advisor will sign you up for New Student Orientation</li></ul>
              <h4 id="website">NNMC Advising Website</h4>
              <p><a href="http://nnmc.edu/home/student-gateway/student-advisement/">NNMC Advising Website</a></p>
              <h4 id="appt">Schedule an Appointment</h4>
              <p>To schedule an appointment:</p>
              <p><a href="tel:1-505-747-2150">(505) 747-2150</a></p>

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
