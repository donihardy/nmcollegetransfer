<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage losalamosbgimage">
         
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
          <a class="navbar-brand losalamos" href="index.php">UNIVERSITY OF NEW MEXICO<br />LOS ALAMOS</a>
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
              <a href="index.php">UNM LOS ALAMOS</a>
            </li>
            <li>
              TRANSFER INFO
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Course Transfer Info</h3>
            <p></p>
            <h4 id="transcripts">Transcripts</h4>

            <p>To have transcripts from other colleges evaluated, apply for degree status in a UNM-offered program, submit a $10.00 application fee and request that official copies of his/her transcript be sent from all previously attended colleges to:</p>

            <p>Registrar
              UNM Los Alamos<br />
              4000 University Drive<br />
              Los Alamos, New Mexico 87544</p>
              <div><h4 id="tes">Transferable Courses</h4>
                <p>UNM–Los Alamos evaluates without prejudice courses
                  from postsecondary institutions that are regionally
                  accredited or are candidates for regional accreditation.
                  Transfer students will receive full credit for course work
                  completed with a minimum grade of “C,” provided the
                  classes are similar or equivalent to courses offered at the
                  University. Transferable courses with grades of “D”
                  from New Mexico state institutions are accepted. </p>
                  Visit: <a href="http://admissions.unm.edu/future_students/transfer-course-equivalencies.html">Transfer Equivalency System (TES) Page</a>
                  <h4 id="commoncore">Common Core Courses</h4>
                  The University of New Mexico has adopted a revised Core Curriculum, which all undergraduate students must complete as part of their baccalaureate program. Additionally, all UNM Los Alamos degrees and certificates build upon the foundations of the Core Curriculum.<br />
                  <p>Visit: <a href="http://losalamos.unm.edu/students/forms/core-curriculum-2011.6.9.pdf">UNM Core Curriculum Worksheet</a></p>
                  <h4 id="actsat">ACT/SAT</h4>
                  <p>Order / Submit Official ACT or SAT scores. If you have not taken either, or if you will need to begin your Math or English progression again, you will need to take the COMPASS placement tests. These tests are un-timed and free for your first attempt. They are administered on a walk-in basis at Student Services front desk. You may take the test Monday through Friday between 8:00 a.m. and 3:00 p.m.</p>
                  <p>A student planning to enroll in English or Math
                    must meet the minimum placement scores
                    determined by UNM–Los Alamos in either the
                    ACT, SAT or Compass tests.</p>

                    <h4 id="moreinfo">Request More Info</h4>
                    <p>Phone: <a href="1-505-662-5919">(505) 662-5919</a></p>

                    <h4 id="transfer">Transfer Agreements</h4>
                    Visit: <a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transition</a>
                    <h4 id="dual">High School Dual Enrollment</h4>
                    <p>The Dual Credit Program allows qualified public,
                      charter and tribal school students to enroll in collegelevel
                      courses offered by a public postsecondary
                      educational institution that may be academic or career
                      technical but not remedial or developmental, and
                      simultaneously earn credit toward high school
                      graduation and a postsecondary degree or certificate.
                      The program is designed to increase education
                      opportunities, provide a college-level experience and
                      encourage more high school students to pursue higher
                      education. </p>
                      Visit: <a href="http://losalamos.unm.edu/admissions/dual-concurrent/dual-credit.html">UNM Los Alamos Dual Enrollment Page</a>

                    </div>
                  </div>
                </div>
                
                <?php //Begin Side menu ?>
                <?php require '../includes/sidemenu.php'; ?>
                <?php //End Side Menu ?>

                <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
