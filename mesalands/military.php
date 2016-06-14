<?php include '../includes/header.php'; ?>


<title>NM COLLEGE TRANSFER-MESALANDS</title>

<body>
  <div class="container-fluid">
    <header class="bgimage mesalandsbgimage">
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
        <a class="navbar-brand cnm" href="index.php">MESALANDS<br />COMMUNITY COLLEGE</a>
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
            <a href="index.php">MESALANDS</a>
          </li>
          <li>
           VETERANS &#38; ACTIVE DUTYs
         </li>
       </ol>
     </div>
     <div class="container-fluid">
       <div class="textbody"><h3>Veterans &#38; Active Duty</h3>
        <p>All programs at Mesalands are approved by the Department of Veterans Affairs. For information on how to apply for VA benefits, please contact the Student Services Office at <a href="tel:1-575-461-4413">(575) 461-4413, ext. 153.</p>
        <p><a href="http://www.mesalands.edu/military-and-veteran-students/">Military and Veteran Students</a><br />
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
