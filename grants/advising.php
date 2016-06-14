<?php include '../includes/header.php'; ?>

  <title>NM COLLEGE & TRANSFER 
    - NEW MEXICO STATE UNIVERSITY GRANTS</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage grantsbgimage">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY GRANTS</a>
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
              <a href="index.php">NMSU GRANTS</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>NMSU Grants Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>The Student Services Office
              offers centralized academic advising throughout the
              academic year to meet the needs of its student
              population. Academic advising is an ongoing, shared
              partnership between a student and an adviser that
              focuses on helping the student identify, plan and
              achieve academic, career and life goals.</p>
              <p>Advisers provide academic advising services to all
                students and prospective students for programs
                offered at NMSU Grants, as well as advising
                information for students transferring to NMSU Las
                Cruces or any other college or university in the state
                of New Mexico.</p>
                <p><a href="https://grants.nmsu.edu/student-services/">NMSU Grants Advising</a></p>
                <h4 id="appt">Schedule an Appointment</h4>
                <p>New Students will meet with an adviser and register for courses prior to their first semester. Students with a “hold” will also need to meet with an adviser. Transfer and readmitted students should meet with an adviser their first semester. Upon transfer evaluation of prior credit, students will also meet with an adviser. Continuing students should plan ahead and meet with their adviser every semester well in advance of continuing student registration. Students nearing the completion of their certificate or degree should meet with an adviser at least one semester prior to graduation.</p>
                <p>The Student Services Office is located in Martinez Hall, Room 5. Make an appointment or walk-in during office hours, to see an adviser prior to registration to review your degree plan.</p>
                <p>Call <a href="1-505-287-6678">(505) 287-6678</a> and request to speak with an available advisor.</p>
                <p><a href="https://grants.nmsu.edu/students/admissions/">NMSU Grants Advisor Info</a></p>
              </div>
            </div>

            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side Menu ?>

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
