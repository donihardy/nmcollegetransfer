<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - NAVAJO TECHNICAL UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage ntubgimage">
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
          <a class="navbar-brand ntu" href="index.php">NAVAJO<br />TECHNICAL UNIVERSITY</a>
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
              <a href="index.php">NAVAJO TECH</a>
            </li>
            <li>
              TRANSFER INFO
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Course Transfer Info</h3>
            <h4 id="transcripts">Transcripts</h4>
            <p>For students who are transferring or have taken prior college courses: Official college transcripts from each college attended, indicating all courses taken (The NTU Registrar may require a written description of each course taken in order to evaluate its equivalency to NTU course). Photocopies of course description from college catalogs are acceptable.</p>
            
            <h4 id="tes">Transferable Courses</h4>
            <p>NTU does consider credits for transfer from other accredited colleges. Decisions to accept incoming credits to NTU from another school are made by the Registrar. <br />
              <p><a href="http://www.navajotech.edu/admissions/registration-records">Transfer to Navajo Tech</a>
                <h4 id="commoncore">Common Core Courses</h4>
                <a href="../nmcommoncore.html">Common Core Courses</a><br/>
                <h4 id="actsat">ACT/SAT</h4>
                <p>Navajo Technical University is currently an open enrollment University, so there are no cutoffs for the GPA or the SAT/ACT.</p>
                <h4 id="2+2">2+2 and other Transfer Agreements</h4>
                <p>No agreements found.</p>
                <h4 id="dual">High School Dual Enrollment</h4>
                <p>"Dual credit program” means a program that allows high school students to enroll in college-level courses offered by a college that may be academic or career technical but not remedial or developmental, and simultaneously to earn credit toward high school graduation and a postsecondary degree or certificate.<br />
                  Dual Credit is supported and sanctioned by New Mexico Legislation 6.30.7 NMAC (PED).</p>
                  <a href="http://www.navajotech.edu/academics/dual-credit">Dual Credit Program</a>
                  <h4 id="moreinfo">Request More Info</h4>
                  <a href="http://www.navajotech.edu/contact/staff/admissions/15-jerlynn-henry">Navajo Tech Registrar</a>
                </div>
              </div>
              
              <?php //Begin Side menu ?>
              <?php require '../includes/sidemenu.php'; ?>
              <?php //End Side menu ?> 

               <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
    </div>
