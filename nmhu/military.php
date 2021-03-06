<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmhubgimage">
         
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
          <a class="navbar-brand nmhu" href="index.php">NEW MEXICO<br />HIGHLANDS UNIVERSITY</a>
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
              <a href="index.php">NMHU</a>
            </li>
            <li>
             VETERANS &#38; ACTIVE DUTY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
         <div class="textbody"><h3>Veterans &#38; Active Duty <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
          <h4 id="veterans">Veterans</h4>
          <p>Services and Programs for Service members and Veterans</p>
          <ul><li>Credit for military training</li>
            <li>Dedicated point of contact for support services for veterans, military service members, and their families</li>
            <li>Recognized student veteran organization</li>
            <li>Member of Service members Opportunity Colleges</li></ul>
            <p>Several programs are available for veterans pursuing a postsecondary education. Academic programs are approved by the State Approving Agency and are approved for educational benefits by the Department of Veteran Affairs.<br />
              Contact the Office of the Registrar for details, <a href="tel:1-505-454-3424">(505) 454-3424</a></p>
              <p>The university grants credit for military education or service schools on the recommendation of the American Council on Education’s Publication Guide to Evaluation of Educational Experience in the Armed Services. A DD214, DD295, or official military transcript form is required to consider credit for military service. Air Force veterans are required to provide an academic transcript from the Community College of the Air Force.</p>
              
            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          
            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
