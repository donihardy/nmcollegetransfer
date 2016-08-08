<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage enmuroswellbgimage">
         
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY-ROSWELL</a>
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
              <a href="index.php">ENMU-ROSWELL</a>
            </li>
            <li>
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            <p>Students enrolling for first-year study who have not yet selected either an academic focus or the
              institution where they wish to graduate are advised to take courses during their freshman year outlined
              in the Lower Division General Education Common Core. </p>
              <p>Visit: <a href="http://www.roswell.enmu.edu/student-affairs/advising-and-retention/advising-and-retention-transfer-information">ENMU Roswell Advising and Retention</a><br />
                Visit: <a href="http://hed.state.nm.us/Transfer.aspx">NM General Education Common Core</a>.</p>
                <h4 id="cert">Certificates</h4>
                <ul style="list-style-type:none">
                <li>Computer Applications &#38; Support</li>
                  <li>Engineering and Design Technology</li>
                  <li>Industrial Engineering Technology</li>
                  <li>Media Arts</li>
                  <li>Occupational Safety and Environmental Management Techologies</li></ul>
                  <p>Visit: <a href="http://www.roswell.enmu.edu/degrees-and-programs?limit=20&limitstart=0">ENMU Roswell Degrees and Programs</a></p>
                  <h4 id="as">Associates Degrees</h4>
                  <p>List of Associates Degrees at ENMU:</p>
                    <ul style="list-style-type:none">
                    <li>Biology AS</li>
                      <li>Engineering and Design Technology AAS</li>
                       <li>Mathematics AAS</li>
                         <li>Renewable Energy Technology AAS</li>
                          <li>Industrial Engineering Technology AAS</li>
                            <li>Media Arts AAS</li>
                              <li>Occupational Safety and Environmental Management Techologies AAS</li>
                              </ul>
                              <p>Visit: <a href="http://www.roswell.enmu.edu/degrees-and-programs?limit=20&limitstart=0">ENMU Roswell Degrees and Programs</a></p>
                            </div>
                          </div>

                          <?php //Begin Side Menu ?>
                          <?php require '../includes/sidemenu.php'; ?>
                          <?php //End Side Menu ?>

                           <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>