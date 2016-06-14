<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - NEW MEXICO JUNIOR COLLEGE</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmjcbgimage">
        <img class="container-fluid">
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
          <a class="navbar-brand cnm" href="index.php">NEW MEXICO<br />JUNIOR COLLEGE</a>
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
              <a href="index.php">NMJC</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <a href="http://www.nmjc.edu/studentservices/academicsuccess.aspx">Tutoring</a><br />
          <a href="http://www.nmjc.edu/distancelearning/currentstudents/onlinetutoringbrainfuse.aspx">Online Tutoring</a><br />
          <a href="http://www.nmjc.edu/studentservices/trioprograms/studentsupportservices.aspx">Student Support Services</a>
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
