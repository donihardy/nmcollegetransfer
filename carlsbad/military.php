<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage carlsbadbgimage img-responsive">       
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY CARLSBAD</a>      </div>

          <?php //Begin top Nav Bar ?>
          <?php require '../includes/schooltopnav.php'; ?>
          <?php //End Top Nav Bar ?>

          <div id="breadcrumb">
            <ol class="breadcrumb">
              <li>
                <a href="../index.php">HOME</a>
              </li>
              <li>
                <a href="index.php">NMSU CARLSBAD</a>
              </li>
              <li>
               VETERANS &#38; ACTIVE DUTY
             </li>
           </ol>
         </div>
         <div class="container-fluid">
          <div class="textbody"><h3>Veterans &#38; Active Duty <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>

            <p>NMSU Carlsbad courses have been approved for study by veterans and others who qualify for veterans’ educational assistance. Processing applications and certifications takes four to five weeks and should be initiated well in advance of course registration. For continued certification, veterans must verify their courses with the Student Services Office each semester for continued certification.</p>
            <p>Veterans must maintain satisfactory attendance, conduct and progress. If the veteran does not meet the standards set by NMSU Carlsbad, the certifying officials must notify the Veterans Administration Office, and the VA will stop benefits.</p>
              <p>Visit: <a href="https://carlsbad.nmsu.edu/students/all-students/student-services/veterans-affairs-benefits-information/">Veterans Affairs Benefits</a><br />
                Visit: <a href="https://carlsbad.nmsu.edu/students/all-students/student-services/faqs-for-veterans/">FAQs</a></p>
              </div>
            </div>

             <?php //Begin Side menu ?>
             <?php require '../includes/sidemenu.php'; ?>
             <?php //End Side menu ?>
                               
           <div class="clear"></div>
                        <div class="container">
                          <?php include '../includes/schoolfooter.php'; ?>
