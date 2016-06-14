<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE TRANSFER-IAIA</title>
</head>
<body>
  <div class="container-fluid">
    <header class="bgimage iaiabgimage">
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
        <a class="navbar-brand iaia" href="index.php">INSTITUTE OF<br />AMERICAN INDIAN ARTS</a>
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
            <a href="index.php">IAIA</a>
          </li>
          <li>
           VETERANS &#38; ACTIVE DUTY
         </li>
       </ol>
     </div>
     <div class="container-fluid">
       <div class="textbody"><h3>Veterans &#38; Active Duty</h3>
        <h4 id="veterans">Veterans &#38; Active Duty</h4>
        <p>The Student Success Center offers Veteran Educational Benefit Services.</p>
        <a href="https://iaia.edu/student-success-center/">Student Success Center</a>
              <!--<h4 id="veterans">Active Duty</h4>
              <p>Info to come</p>-->
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
