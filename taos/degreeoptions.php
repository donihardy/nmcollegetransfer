<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - UNIVERSITY OF NEW MEXICO TAOS</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage taosbgimage">
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
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            The basic Core Curriculum requires approximately 37 credit hours of courses in seven areas of study.
            <div class="subtitle"><h5>Writing and Speaking (9 credit hours):</h5> English 101 and 102 plus an additional course chosen from English 219, 220; Communication and Journalism 130; Philosophy 156. Students with ACT English scores of 29 and higher or SAT Critical Reading scores of 650 or higher have satisfied the University Writing Requirement and should enroll for courses of their choice in the Writing and Speaking Core. Students with ACT English scores of 26, 27, 28 or SAT Critical Reading scores of 610 or higher may enroll directly in English 102 and, upon passing, meet the University Writing Requirement. Students with ACT English scores of 25 or lower or SAT Critical Reading scores below 610 should enroll in English 101. Students who have taken an Advanced Placement examination in English Language or Literature should refer to “Advanced Placement” for placement and credit information.<br />
              <h5>Mathematics:</h5> One course chosen from Mathematics 121, 129, 150, 162, 163, 180, 181, 215, Stat 145
              <h5>Physical and Natural Sciences:</h5> Two courses, one of which must include a laboratory, chosen from Anthropology 150 and 151L, 121L (lab required), 160 and 161L; Astronomy 101 and 101L; Biology 110 and 112L, 123 and 124L; Chemistry 111 (lab required), 121 and 123L or 131L (lab required), 122L and 124L or 132L (lab required); Earth and Planetary Sciences 101 and 105L, 201L (lab required); Environmental Science 101 and 102L; Geography 101 and 105L; Natural Sciences 261L (lab required), 262L (lab required), 263L (lab required); Physics 102 and 102L, 105, 151 and 151L, 152 and 152L, 160 and 160L, 161 and 161L.
              <h5>Social and Behavioral Sciences (minimum 6 credit hours):</h5>Two courses chosen from American Studies 182, 185; Anthropology 101, 130; Community and Regional Planning 181; Economics 105, 106; Engineering-F 200; Geography 102; Linguistics 101 (AOA Anthropology 110); Political Science 110, 200, 220, 240; Psychology 105; Sociology 101. 
              <h5>Humanities (6 credit hours):</h5> American Studies 186; Classics 107, 204, 205; Comparative Literature and Cultural Studies 222, 224; English 150, 292, 293; Foreign Languages (MLNG) 101; History 101L, 102L, 161, 162, 181, 182; Honors Legacy Seminars at the 100- and 200-level; Philosophy 101, 201, 202; Religious Studies 107, 263, 264.
              <h5> Foreign Language (non-English language; minimum 3 credit hours):</h5> One course chosen from any of the lower-division non-English language offerings of the Departments of Linguistics (including Sign Language), Spanish and Portuguese, Foreign Languages and Literatures, and foreign languages in other departments and programs.
              <h5>Fine Arts (minimum of 3 credit hours):</h5> One course chosen from Architecture 121; Art History 101, 201, 202; Dance 105; Fine Arts 284; Media Arts 210; Music 139, 142; Theatre 122. Students may elect to take one 3-hour studio course offered by the Departments of Art and Art History, Music, Theatre and Dance, and Media Arts to fulfill this requirement.</div><br />   
              <a href="http://taos.unm.edu/catalog/core-curriculum.html">UNM Taos Basic Core</a>
              <h4 id="as">Certificates</h4>
              <p>Information Technology</p>
              <a href="http://taos.unm.edu/catalog/degrees-certificates.html">UNM Taos Certificates</a>

              <h4 id="as">Associates Degrees</h4>
              <p>Pre-Science AS<br />
                Digital Media Arts AAS<br />
              </p>
              <a href="http://taos.unm.edu/catalog/degrees-certificates.html">UNM Taos Associates Degrees</a>
            </div>
          </div>

          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>

          <div id="footer">
           <?php include '../includes/footer.php'; ?>
         </div>

         <script src="../js/jquery.min.js"></script>
         <script src="../js/bootstrap.min.js"></script>
         <script src="../js/bootstrap-submenu.min.js" defer></script>
         <script src="../js/navbar.js"></script>
         <script src="../js/script.js"></script>
       </body>
       </html>
