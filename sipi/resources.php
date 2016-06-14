<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - SOUTHWESTERN INDIAN POLYTECHNIC INSTITUTE</title>

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
           RESOURCES
         </li>
       </ol>
     </div>
     <div class="container-fluid">
      <div class="textbody">
        <h3>Resources</h3>
        <p><a href="http://www.sipi.edu/students/studsvcs/sss/">Academic Support Center</a><br />
          <a href="http://www.sipi.edu/students/studsvcs/sss/tutoring/">Tutoring</a></p>

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
