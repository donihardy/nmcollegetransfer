<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage sipibgimage">
         
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
          <a class="navbar-brand sipi" href="index.php">SOUTHWESTERN INDIAN<br />POLYTECHNIC INSTITUTE</a>
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
            <a href="index.php">SIPI</a>
          </li>
          <li>
           VETERANS &#38; ACTIVE DUTY
         </li>
       </ol>
     </div>
     <div class="container-fluid">
      <div class="textbody"><h3>Veterans &#38; Active Duty <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>

        <p>SIPI complies with the principal of excellence for educational institutions serving service members, veterans, spouses, and other family members. Students are encouraged to complete their veterans application on line at: http://vabenefits.vba.va.gov. Eligible students will then need to contact the SIPI certifying official, submit current class schedule, DD-214, certificate of eligibility, and transcripts from previous colleges.</p>

        <p>Written records of previous education and training are maintained to show that appropriate credit has been given for the previous education. The training program at SIPI is then shortened proportionately. Information about eligibility for VA education and training benefits is available at any Veterans Administration Office. The Albuquerque Veterans Administration is located at 500 Gold Avenue SW 87102, Call toll free 1-800-827-1000 (NM Residents) or visit: http://www.va.gov.</p>
          Visit: <a href="http://www.sipi.edu/students/studsvcs/finaid/">SIPI Veterans Adminstration</a>
        </div>
      </div>

      <?php //Begin Side menu ?>
      <?php require '../includes/sidemenu.php'; ?>
      <?php //End Side menu ?>

       <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
