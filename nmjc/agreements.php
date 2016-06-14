<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER-NEW MEXICO JUNIOR COLLEGE</title>

<body>
  <div class="container-fluid">
    <header class="bgimage nmjcbgimage">
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
            AGREEMENTS
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody">
          <h3>Agreements with Other Schools</h3>
          <h4>STEM Degree Agreements</h4>
          <p><a href="http://www.nmjc.edu/assets/documents/Thomas%20Edison%20State%20College.pdf">Applied Science and Technology</a> - Thomas Edison College<br />
            <a href="http://www.nmjc.edu/assets/documents/Grantham%20University%20%282%29.pdf">Chemistry</a> - Gantham University<br />
            <a href="http://www.nmjc.edu/assets/documents/Grantham%20University%20%282%29.pdf">Computer Science</a> - Gantham University<br />
            <a href="http://www.nmjc.edu/assets/documents/Grantham%20University%20%282%29.pdf">Natural Sciences</a> - Gantham University<br />
            <a href="http://www.nmjc.edu/assets/documents/Grantham%20University%20%282%29.pdf">Information Systems</a>  - Gantham University<br />
            <a href="http://www.nmjc.edu/assets/documents/Grantham%20University%20%282%29.pdf">Mathematics</a> - Gantham University<br />
            <a href="http://www.nmjc.edu/assets/documents/Grantham%20University%20%282%29.pdf">Physics</a> - Gantham University</p>

            <p><a href="http://www.nmjc.edu/studentservices/counseling/academicplanning.aspx">NMJC Transfer Agreements</a></p>
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
