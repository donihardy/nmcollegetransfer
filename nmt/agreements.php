<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - NMT</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmtbgimage">
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
          <a class="navbar-brand nmt" href="index.php">NEW MEXICO TECH</a>
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
              <a href="index.php">NMT</a>
            </li>
            <li>
              AGREEMENTS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Agreements with Other Schools</h3>
            <div class="transfer">
             <ul><li><a href="http://www.nmt.edu/images/stories/registrar/Amarillo_College_Transfer_Guide_Fall_2009.pdf">Amarillo College</a></li>
               <li><a href="http://www.nmt.edu/images/stories/registrar/San_Antonio_College_Transfer_Guide_2014.pdf">San_Antonio_College</a></li>
               <li><a href="http://www.nmt.edu/images/stories/registrar/Central_New_Mexico_Community_College.pdf">Central New Mexico Community College</a></li></ul>
               <a href="http://www.nmt.edu/transfer-credit/479-registrars-office/4676-articulation-agreements">Articulation Agreements Page</a></div>
             </div></div>
             

             <!-- Side menu -->
             
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
