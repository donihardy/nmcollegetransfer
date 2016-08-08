 <?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmtbgimage">
         
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
          <a class="navbar-brand nmt" href="index.php">NEW MEXICO TECH</a>
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
              <a href="index.php">NMT</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>NMT Advising <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>Academic Advising is a collaboration between advisors and students; the advisor provides information and resources for the student's academic, professional, and social development.</p>

            <p>NMT's strength is that students are advised by faculty in their major. The relationship that develops between the faculty advisor and student can be academically and professionally benecifial.</p>
            <p>Visit: <a href="http://infohost.nmt.edu/~advise/">NMT Advising</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>Advising at New Mexico Tech generally begins with an email correspondence between the advisor and the advisee after the student has been accepted to New Mexico Tech.</p>
            <p>Once the advisee has been in contact with their advisor, the two of them discuss, either in person or by email, what the student hopes to achieve by the end of the upcoming semester. This gives both the student and the advisor an understanding of what classes the student needs to take. At this point, a schedule is drafted by the student and is submitted to the advisor. Once the advisor approves the schedule, the student receives the Alternate PIN (APIN) needed for registration.</p>
            <p>Visit: <a href="http://infohost.nmt.edu/~advise/">Contact NMT Advising</a></p>
          </div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

          <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
