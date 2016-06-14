<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - CENTRAL NEW MEXICO COMMUNITY COLLEGE</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage cnmbgimage">
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
          <a class="navbar-brand cnm" href="index.php">CENTRAL NEW MEXICO COMMUNITY COLLEGE</a>
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
              <a href="index.php">CNM</a>
            </li>
            <li>
             VETERANS &#38; ACTIVE DUTY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
         <div class="textbody"><h3>Veterans &#38; Active Duty</h3>
          <h4 id="veterans">Veterans</h4>
          <p>The Veterans Affairs office is here to assist our students with their VA Educational Benefits, both federal and state. We are here to ensure that all necessary documents are submitted to the Department of Veterans Affairs and to certify Veteran students and their dependents enrollment.</p>
          <p><a href="https://www.cnm.edu/depts/financial-aid/veterans">Veterans</a><br />
            <a href="https://www.cnm.edu/depts/financial-aid/veterans/contact-cnm-veterans-office">Contact CNM Veterans Affairs Office</a></p>
            <h4 id="veterans">Active Duty</h4>
            <p>Military Duty Information</p>
            <p><a href="https://www.cnm.edu/student-resources/catalog/military-duty-policy">Active Duty</a></p>
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
