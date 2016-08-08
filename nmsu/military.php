<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmsubgimage">
         
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO<br />STATE UNIVERSITY</a>
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
              <a href="index.php">NMSU</a>
            </li>
            <li>
             VETERANS &#38; ACTIVE DUTY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><h3>Veterans &#38; Active Duty <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
          <h4>Veterans</h4>
          <p>NMSU is a military and veteran friendly university which strives to provide the best possible service to our current and former service members as they pursue their educational goals. NMSU Military and Veterans Programs promotes lifelong learning and professional development for veterans, active-duty military and their families, assisting them in their higher education goals by offering:</p>
            <ul><li>Affordable, in-state tuition rates for active-duty military and dependents using federal education benefits or living at regional military installations</li>
              <li>Affordable, in-state tuition rates for veterans and dependents receiving U.S. Department of Veterans Affairs education benefits</li>
              <li>Easily transferable credits that count toward degrees at NMSU</li>
              <li>Facilitation of all U.S. Department of Defense Tuition Assistance (TA) Benefits</li>
              <li>Courses taught online and at locations on and near regional military installations</li>
              <li>Innovative technology and course delivery methods</li>
              <li>Internships for veterans</li>
              <li>Student advocacy at every level, from admissions to graduation</li>
              <li>Resource materials from a variety of veteran and military service organizations</li>
              <li>Priority registration for all military and veteran students</li>
              <li>Veterans on Campus Training by Kognito, training faculty and staff on our student veterans and the unique value they bring to campus</li>
              <li>Salute Honor Society for student veterans</li>
              <li>Connection with student organizations</li>
              <li>A tradition of quality education</li></ul>
              <p>New Mexico State University is one of the first in the nation to offer on-campus housing specifically designated for student veterans and their families transitioning out of the military and into student life. The Department of Housing &#38; Residential Life has worked in conjunction with the Student Veterans Organization of NMSU to offer affordable housing on campus to student veterans attending the university.</p>
              <h4>Military</h4>
              <p>The MVP lab serves as a one stop shop for military and veteran students with numerous resources on and off campus. Military and Veterans Programs can assist you with all matters at NMSU from admissions to graduation. </p>
              <p>Visit: <a href="http://mvp.nmsu.edu/">Military and Veterans Programs (MVP)</a><br />

              </div>
            </div>

            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side menu ?>
            
             <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
