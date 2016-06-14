<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER
 -LUNA COMMUNITY COLLEGE</title>
<body>
  <div class="container-fluid">
    <header class="bgimage lunabgimage">
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
        <a class="navbar-brand" href="index.php">LUNA COMMUNITY COLLEGE</a>
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
            <a href="index.php">LCC</a>
          </li>
          <li>
            ADVISING
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody"><h3>LCC Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
          <h4 id="geninfo">Advising General Info</h4>
          <p>Advisement at LCC is a collaborative venture between the student, the ACCESS Center and the academic disciplines. Since the college admits students with varying degrees of education preparation, accurate and coordinated academic advisement is crucial to student progress and institutional planning.</p>
          <p>Accordingly, new students (first-time enrollees) transfer students, and students who have not declared a program of study are advised through the ACCESS Center. Returning students who have declared a program of study or who intend on pursuing a particular certificate or degree program are advised through the appropriate academic discipline.</p>
          <h4 id="website">CNM Advising Website</h4>
          <p>ACCESS: Advisement, Counseling, Career Placement and Educational Support Services</p>
          <p><a href="https://www.luna.edu/access/">LCC Advising Website</a><br />
            <a href="https://www.luna.edu/career-placement/">Career Advisement</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>LCC Phone Number: <a href="tel:1-505-454-2500">(505) 454-2500.</a></p>
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
