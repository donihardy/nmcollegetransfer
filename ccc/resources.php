<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - CLOVIS COMMUNITY COLLEGE</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage clovisccbgimage">
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
          <a class="navbar-brand ccc" href="index.php">CLOVIS COMMUNITY<br />COLLEGE</a>
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
              <a href="index.php">CCC</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <p><a href="http://www.clovis.edu/css/esl.aspx">ESL program</a> <br />
            <a href="http://www.clovis.edu/trio/index.aspx">TRIO Student Support Services</a><br />
            <a href="http://www.clovis.edu/css/index.aspx">Mabel Lee Hawkins Center for Student Success (CSS)</a><br />
            <a href="http://www.clovis.edu/css/index.aspx">Student Clubs and Organizations</a><br />
            <a href="http://www.clovis.edu/extendedlearning/index.aspx">Distance Education</a><br />
          </p>
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
