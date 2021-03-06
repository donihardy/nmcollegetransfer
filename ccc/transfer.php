<?php include '../includes/header.php'; ?>

<body>
  <div class="container-fluid">
    <header class="bgimage clovisccbgimage">

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
        <a class="navbar-brand ccc" href="index.php">CLOVIS COMMUNITY<br />COLLEGE</a>
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
            <a href="index.php">CCC</a>
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
          <p>The Admissions and Records Office maintains the official permanent academic records of all CCC students. An official transcript is the reproduction of a complete, unabridged permanent academic record validated with the college seal, signature of the registrar, and date of issue. Any release of this information is done in accordance with the guidelines set forth in the Family Educational Rights and Privacy Act (FERPA).</p>
          <p>Visit: <a href="http://www.clovis.edu/admissions/transcripts.aspx">Transcripts</a></p>
          <h4 id="tes">Transferable Courses</h4>
          <p>Clovis Community College will
            accept transfer credits from other institutions. Transfer credits
            must meet the minimum required grade for acceptance into any
            program. Transfer grades of “D” are accepted in the General Education
            requirement for Associate Degrees and Certificates; however,
            grades of “D” are not accepted in the following categories:<br />
            <ul><li>Related Requirements</li>
              <li>Program Requirements</li>
              <li>Areas of Concentration</li></ul>
              <p>Visit: <a href="http://www.clovis.edu/publications/docs/Catalog_2015-2017.pdf">Catalog to CCC</a><br />
                <h4 id="commoncore">Common Core Courses</h4>
                <p>Each degree program at CCC contains an integrated core of general
                  education requirements. These include but are not limited to
                  courses in concentration areas of communication, English, mathematics,
                  lab science, social and behavioral science, humanities, fine
                  arts, and computer literacy. 
                </p>
                <p>Visit: <a href="http://www.clovis.edu/publications/docs/Catalog_2015-2017.pdf">CCC Catalog</a><br />
                  Visit: <a href="../nmcommoncore.html">Common Core Courses</a></p>
                  <h4 id="actsat">ACT/SAT</h4>
                  <p>All students enrolling for the first time in courses with a math
                    component, a writing component, or courses that require extensive
                    reading are required to take the Accuplacer or other appropriate
                    placement test before registering.
                    If there are other test scores (e.g., ACT/SAT) that demonstrate college-level skill, the student
                    may be exempt from the Accuplacer as determined by an Academic Advisor.</p>

                    <h4 id="2+2">2+2 and other Transfer Agreements</h4>
                    <p>Clovis Community College particpates in the state of New Mexico's statewide articulation agreement. This agreement as defined under state law (Chapter 21, Article 1B NMSA 1978) has established policies to guarantee successful transfer of completed core courses between New Mexico postsecondary public institutions. Information regarding how CCC's classes transfer to another instituion can be found by visiting the applicable institution from the school list below, contacting the appropriate institution, or visiting the New Mexico Higher Education Department.</p>

                    <p>In addition, Clovis Community College has entered into several articulation agreements with other institutions throughout the country. Information regarding credit transfer can be viewed by following the appropriate college link below. It is always recommended to speak with an advisor at the school you are planning to attend to verify credit transfers.</p>
                    <p>Top Transfer Schools for CCC Students</p>

                    <ol type="1"><li>Eastern New Mexico University</li>
                      <li>Wayland Baptist University-Clovis</li>
                      <li>Wayland Baptist University-Clovis</li>
                      <li>West Texas A&M University</li>
                      <li>Texas Tech University</li>
                      <li>University of New Mexico</li></ol>
                      Visit: <a href="http://www.clovis.edu/advising/transfer.aspx">Transfer agreements with other schools</a><br />
                      Visit: <a href="http://www.clovis.edu/advising/transfer.aspx">CCC Request Info</a>
                      <h4 id="dual">High School Dual Enrollment</h4>
                      <p>The Career Technical Institute at Clovis Community College gives area high school students an opportunity to take advantage of dual credit enrollment opportunities to earn high school and college credit while attending a career-focused program that can lead to both jobs immediately after graduating high school or faster completion of their college degree.</p>
                      <p>Clovis Community College, through
                        dual credit enrollment agreements, provides students with
                        an opportunity to take college courses while still in high
                        school and earn high school credit as well as college credit.</p>
                        <p>Visit: <a href="http://www.clovis.edu/cti/">Dual Enrollment Information</a></p>
                        <h4 id="moreinfo">Request More Info</h4>
                        Visit: <p><a href="http://www.clovis.edu/admissions/index.aspx">Request more info</a></p>
                      </div>
                    </div>

                    <?php //Begin Side menu ?>
                    <?php require '../includes/sidemenu.php'; ?>
                    <?php //End Side Menu ?>

                    <div class="clear"></div>
                    <div class="container">
                      <?php include '../includes/schoolfooter.php'; ?>
