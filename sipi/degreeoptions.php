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
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            <p>GENERAL EDUCATION COURSE TRANSFER CURRICULUM
              <table class="basiccore" style="width:90%">
                <tr class="title"><th colspan="2">Area I: Communication 9 hours</th></tr>
                <tr><td>(a) Freshman Composition (ENGL101)</td><td>3-4 hours</td></tr>
                <tr><td>(b) Advanced Composition (ENGL102, ENGL219) </td><td>3 credits</td></tr>
                <tr><td>(c) Oral Communications (SPCH130)</td><td> 3 credits</td></tr>
                <tr class="title"><th colspan="2">Area II: Mathematics (appropriate to transfer major) (Students may choose 1 course from list) 3 credits</th>
                  <tr><td>(a) College Algebra (MATH121) </td><td>3 credits</td></tr>
                  <tr><td>(b) Calculus I (MATH162)</td><td> 3 credits</td></tr>
                  <tr><td>(c) Other college level mathematics (MATH120, 123, 145, 150, 180)</td><td> 3 credits</td></tr>
                  <tr class="title"><th colspan="2">Area III: Laboratory Science<br /> (Students may choose courses from one or more disciplines) 8 credits</th>
                    <tr><td>(a) General Biology with Laboratory (BIOL 111, 121 or 123) </td><td>4 credits</td></tr>
                    <tr><td>(b) General Chemistry with Laboratory (CHEM 111, 121, or 122)</td><td> 4 credits</td></tr>
                    <tr><td>(c) General Physics with Laboratory (PHYS151)</td><td> 4 credits</td></tr>
                    <tr><td>(d) Geology/Earth Science with Laboratory (GEOL101)</td><td> 4 credits</td></tr>
                    <tr><td>(e) Astronomy with Laboratory (ASTR101) </td><td>4 credits</td></tr>
                    <tr><td colspan="2">(f) Environmental Science (N/A)</td></tr>
                    <tr><td>(g) Other Sciences (NATR200/L)</td><td> 4 credits</td></tr>
                    <tr><td>(h) Introduction to Plant Science (AGTC104/L) </td><td>4 credits</td></tr>
                    <tr class="title"><th colspan="2">Area IV: Social/Behavioral Select Science 6-9 credits<br />
                      Minimum of 6 credits; must have 15 credits total between this area and Humanities and Fine Arts</th>
                      <tr><td>(a) Economics (Macro or Micro) ) (ECON 200 or 201)</td><td> 3 credits</td></tr>
                      <tr><td>(b) Introductory Political Science (POLS 110 or 200)</td><td> 3 credits</td></tr>
                      <tr><td>(c) Introductory Psychology (PSYC105)</td><td> 3 credits</td></tr>
                      <tr><td>(d) Introductory Sociology (SOCI 101 or SOCI 210)</td><td> 3 credits</td></tr>
                      <tr><td>(e) Introductory Anthropology (ANTH 101 or 130)</td><td> 3 credits</td></tr>
                      <tr class="title"><th colspan="2">Area V: Humanities and Select Fine Arts 6-9 credits<br />
                        Minimum of 6 credits; must have 15 credits total between this area and Social/Behavioral Sciences</th>
                        <tr><td>(a) History Survey Western Civilization (HIST101)
                          <ul><li>History of Pre-Columbian America (HIST218)</li>
                            <li>History of Indian Education (HIST260)</li></ul></td><td> 3 credits
                          </td></tr>
                          <tr><td>(b) Introduction Course in History, Theory or Aesthetics of the Arts or Literature
                            <ul><li>Introduction to Art (ARTH101), Art foundations (ARTH102)</li>
                              <li>Literature: Topics in Literature (Native American, LITR 211)</li>
                              <li>American Literature (LITR 296)</li></ul></td><td> 3 credits</td></tr>
                            </table>
                            <p>COMMON CORE REQUIRED TOTAL
                            35 credits</p>
                            Visit: <a href="http://www.sipi.edu/acadprog/catalog/SIPI%202014-2016%20Catalog.pdf">SIPI Basic Core</a>
                            <h4 id="cert">Certificates</h4>
                            <p>Geospatial Information Technology<br />
                              Computer-Aided Drafting and Design</p>
                              Visit: <a href="http://www.sipi.edu/acadprog/">SIPI Academic Programs</a>
                              <h4 id="as">Associates Degrees</h4>
                              <p>Instrumentation and Control Technology AAS<br />
                                Geospatial Information Technology AAS<br />
                                Network Management AAS<br />
                                Pre-Engineering AS<br />
                                Natural Resources Management AAS
                              </p>
                              Visit: <a href="http://www.sipi.edu/acadprog/">SIPI Academic Programs</a>
                            </div>
                          </div>

                          <?php //Begin Side menu ?>
                          <?php require '../includes/sidemenu.php'; ?>
                          <?php //End Side Menu ?>
 <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
