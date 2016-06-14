<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - UNIVERSITY OF NEW MEXICO TAOS</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage taosbgimage">
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
          <a class="navbar-brand taos" href="index.php">UNIVERSITY OF NEW MEXICO<br />TAOS</a>
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
              <a href="index.php">UNM TAOS</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>UNM-Taos Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>Academic advising is a key component to a successful student experience.</p>
            <p>The University of New Mexico-Taos offers a wealth of intellectual opportunities, both in and outside the classroom. The central role of advisors is to help you take full advantage of all that’s available as you create your unique path through your undergraduate career.</p>
            <p><a href="http://taos.unm.edu/student-success/advising/">UNM Taos Advising</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>Advising:</p>
            <p>1157 County Road 110<br />
              Ranchos de Taos, NM 87557<br />
              Phone: <a href="tel:1-575-737-6202">(575) 737-6202</a><br />
              <a href="mailto:askalobo@unm.edu">askalobo@unm.edu</a><br />
              <a href="http://taos.unm.edu/student-success/advising/">UNM Taos Advising</a>
            </p>
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
