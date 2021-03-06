<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nnmcbgimage">
         
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
          <a class="navbar-brand wnmu" href="index.php">WESTERN NEW MEXICO<br />UNIVERSITY</a>
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
              <a href="index.php">WNMU</a>
            </li>
            <li>
             VETERANS &#38; ACTIVE DUTY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
         <div class="textbody"><h3>Veterans &#38; Active Duty <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
          <h4 id="veterans">Veterans &#38; Active Duty</h4>
          <p>The Veteran Services office is located within the Registrar’s Office. The Veteran Services office assists veterans, their eligible spouses and children to process their Veterans Affairs (VA) educational benefits.  The office is staffed by veterans who are currently enrolled as students and the Registrar’s serves as the Certifying Official at Western New Mexico University.</p>
          <p>Here you can get help with:</p>
          <p><strong>Eligibility</strong></p>
          <ul><li>Forms necessary to claim benefits.</li>

            <li>VA rules and regulations regarding educational benefits</li>
            <li>In-State Tuition waivers for those eligible veterans</li></ul>
            <p>For more information: <a href="1-575-538-6116">575-538-6116</a></p>
            <p>Visit: <a href="http://registrar.wnmu.edu/veterans/">WNMU Veterans Services Office</a></p>

            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
