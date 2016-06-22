<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - SAN JUAN COLLEGE</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage sjcbgimage">

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
          <a class="navbar-brand" href="index.php">SAN JUAN COLLEGE</a>
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
              <a href="index.php">SJC</a>
            </li>
            <li>
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            <p>The core matrix of approved courses guaranteed to transfer and meet general education requirements of any New Mexico college or university can be found on the New Mexico Higher Education Department website at <a href="http://www.hed.state.nm.us/institutions/general-ed-core-course-transfer-curriculum.aspx">NM Higher Education Department</a></p>
            <a href="http://catalog.sanjuancollege.edu/content.php?catoid=6&navoid=283&hl=nm+core&returnto=search#San_Juan_College_Common_Core_Course_Listing">San Juan College Common Core Listing</a>
            <h4 id="as">Certificate Degrees</h4>
            <p>Computer Science<br />
              Drafting<br />
              Geographic Information System<br />
              Instumentation and Controls Technology<br />
              Occupational Safety<br />
              Petroleum Production Operations        
            </p>
            <a href="https://www.sanjuancollege.edu/academics/">Certificates</a>
            <h4 id="as">Associates Degrees</h4>
            <p>Biology AS<br />
              Chemistry AS<br />
              Computer Science AS<br />
              Digital Media Arts and Design AAS<br />
              Drafting AAS<br />
              Engineering AS<br />
              General Science AS<br />
              Geographic Information Systems AAS<br />
              Geology AS<br />
              Horiculture AAS<br />
              Instrumentation and Controls Technology AAS<br />
              Mathematics AS<br />
              Occupational Safety AAS<br />
              Petroleum Production Operations AAS<br />        
              Physics AS
            </p>
            <a href="https://www.sanjuancollege.edu/academics/">San Juan College Associates Degrees</a>
          </div>
        </div>

        <?php //Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

        <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
