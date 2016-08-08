<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage taosbgimage">
         
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
          <a class="navbar-brand taos" href="index.php">UNIVERSITY OF NEW MEXICO<br />TAOS</a>
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
              <a href="index.php">UNM TAOS</a>
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

            <p><ul><li>If your intention is to enroll in a degree program, and you have earned fewer than 26 college credit hours, you must submit high school transcripts or GED records, in addition to your official college transcripts.</li>
              <li>If your intention is to enroll in a Certificate program and you are applying for financial aid, and you have earned fewer than 26 college credit hours, you must submit high school transcripts or GED records, in Addition to your official college transcripts.</li>
              <li>If you do not intend to seek a degree or certificate, you do not need to submit academic transcripts.</li></ul>
              <p>To submit academic transcripts, contact your prior school’s registrar’s office and ask them to send your transcript to:</p>
              <p>Admissions<br />
                UNM-Taos<br />
                1157 County Road 110<br /> 
                Ranchos de Taos,
                NM 87557
              </p>
              <div><h4 id="tes">Transferable Courses</h4>
                <p>Academic credits for courses completed at other post-secondary institutions can be transferred to UNM-Taos if:</p>
                <ol type="1"><li>a grade of C or better was earned in the course,</li>
                  <li>the post-secondary institution is appropriately accredited, and</li>
                  <li>UNM or UNM-Taos offers a course deemed equivalent by the appropriate department chair.</li></ol>
                  <p>Visit: <a href="http://taos.unm.edu/catalog/admissions.html">Admissions</a><br />
                  Visit: <a href="http://admissions.unm.edu/future_students/transfer-course-equivalencies.html">UNM Transfer Equivalency System (TES) Page</a></p>
                  <h4 id="commoncore">Common Core Courses</h4>
                  <p>The University of New Mexico has adopted a revised Core Curriculum, which all undergraduate students must complete as part of their baccalaureate program. Additionally, all UNM Los Alamos degrees and certificates build upon the foundations of the Core Curriculum.</p>
                  <p>Visit: <a href="http://taos.unm.edu/catalog/core-curriculum.html">UNM Core Curriculum Worksheet</a></p>
                  <h4 id="actsat">ACT/SAT</h4>
                  <p>Entering freshmen whose ACT scores or UNM-Taos placement exam scores indicate a need for college preparatory course work, or entering freshmen with deficiencies in admission requirements, may be required to take Introductory Studies courses before entering their individual programs. These courses include ISE 098, ISE 099, ISE 100 and ISR 100, Math 099, Math 100. General University credit will be granted for these skills courses, but they are not accepted toward UNM-Taos associate degree programs or toward UNM degree programs. Students who are enrolled in degree or certificate programs may receive financial aid for remedial coursework, with a limit of no more than 30 hours.</p>
                  <p>Visit: <a href="http://taos.unm.edu/catalog/admissions.html">Catalog-Admissions</a></p>
                  <h4 id="moreinfo">Request More Info</h4>
                  <p>Advising:<br />
                    1157 County Road 110<br />
                    Ranchos de Taos, NM 87557<br />
                    Phone: <a href="1-575-737-6202">(575) 737-6202</a><br />
                    Email: <a href="mailto:askalobo@unm.edu">askalobo@unm.edu</a></p>

                    <h4 id="transfer">Transfer Agreements</h4>
                    <p>Visit: <a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transition</a></p>
                    <h4 id="dual">High School Dual Enrollment</h4>
                    <p>The High School Dual Enrollment Program includes academic and vocational programs. Its purpose is to award a select number of high school students the opportunity to take University courses (above the Basic Skills level) and to earn college credit while they are still enrolled in high school. It is up to the college or University that the student plans to attend to determine if credit is given for both high school and college for courses taken as a dual-credit student. UNM-Taos allows the credit to be used toward high school graduation as well as earned college credit. Students should work with their high school counselor to determine an individual high school's acceptance policy of courses toward graduation. Students are free to choose any course as long as prerequisites have been met.</p>
                    <p>Visit: <a href="http://taos.unm.edu/dual-credit/">UNM Taos Dual Enrollment Page</a></p>

                  </div>
                </div>
              </div>
              
              <?php //Begin Side menu ?>
              <?php require '../includes/sidemenu.php'; ?>
              <?php //End Side Menu ?>

              <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
