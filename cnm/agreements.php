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
              AGREEMENTS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Agreements with Other Schools</h3>
            <h4>STEM Degree Agreements</h4>
            <ul><li><a href="https://www.cnm.edu/depts/academic-affairs/documents/WebVersionCNMtoNMHUBiologyTransferAgreement.pdf">Biology (NMHU)</a></li>
              <li><a href="https://www.cnm.edu/depts/academic-affairs/documents/cnm-to-unm-biology-transfer-agreement.pdf">Biology (UNM)</a></li>
              <li><a href="https://www.cnm.edu/depts/academic-affairs/documents/WebVersionCNMtoNMHUChemistryTransferAgreement.pdf">Chemistry (NMHU)</a></li>
              <li><a href="https://www.cnm.edu/depts/academic-affairs/documents/cnm-to-unm-chemistry-transfer-agreement.pdf">Chemistry (UNM)</a></li>
              <li><a href="https://www.cnm.edu/depts/academic-affairs/documents/transfer-agreements/CNM_UNM_ENGRTransferAgreement.pdf">Engineering (UNM)</a></li>
              <li><a href="https://www.cnm.edu/depts/academic-affairs/documents/transfer-agreements/PhysicsTransferAgreement.pdf">Physics (UNM)</a></li>
              <li><a href="https://www.cnm.edu/depts/academic-affairs/documents/cnm-to-unm-nutrition-transfer-agreement.pdf">Nutrition (UNM)</a></li>
            </ul>
            <a href="https://www.cnm.edu/depts/academic-affairs/transfer-agreements">CNM Transfer Agreements</a>
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
