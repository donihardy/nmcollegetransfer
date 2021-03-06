<?php include '../includes/header.php'; ?>


  
  <body>
    <div class="container-fluid">
      <header class="bgimage enmubgimage">
         
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY</a>
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
              <a href="index.php">ENMU</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <h4>Student Resources</h4>
          <p>This resource site has been created with the assistance of the Tutoring/Supplemental Instruction student staff and includes PowerPoints, videos, documents, etc. The information is a sample of the knowledge they have attained while in attendance at Eastern New Mexico University.</p>
          <p>Students: you are welcome to use these resources as a supplemental resource for review, study, and as a quick resource of information. When in doubt, contact your Tutor, SI Leader, or professor.</p>
          Visit: <a href="https://www.enmu.edu/services/tsi/resources.html">Student Resources</a>
        </div>
      </div>
      
      <?php //Begin Side menu ?>
      <?php require '../includes/sidemenu.php'; ?>
      <?php //End Side menu ?>
      
      <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
