<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER-NEW MEXICO JUNIOR COLLEGE</title>

<body>
  <div class="container-fluid">
    <header class="bgimage nmjcbgimage">
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
        <a class="navbar-brand cnm" href="index.php">NEW MEXICO<br />JUNIOR COLLEGE</a>
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
            <a href="index.php">NMJC</a>
          </li>
          <li>
            ADVISING
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody"><h3>NMJC Academic Counseling <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
          <h4 id="geninfo">Advising General Info</h4>
          <P>The NMJC counselors can assist students in selecting courses needed for their particular degree plan. The Counseling Office houses college catalogues, admission applications and transfer guides for many regional 4-year institutions. Counselors are on hand to ensure all students are taking courses with transferability potential.</P>
          <h4 id="website">NMJC Advising Website</h4>
          <p><a href="http://www.nmjc.edu/studentservices/counseling/academicplanning.aspx">NMJC Academic Planning Website</a></p>
          <h4 id="appt">Schedule an Appointment</h4>
          <p>Visit with a counselor or faculty advisor to discuss your academic plan. A counseling appointment is not required; however, we encourage all students to see a counselor at least once a semester. Students are seen on a “first-come, first-served” basis in the Ben Alexander Student Learning Center. You can also contact counselors by phone or email: <a href="1-575-492-2577">575.492.2577</a>, <a href="mailto:kshort@nmjc.edu">kshort@nmjc.edu</a>.</p>
          <p><a href="http://www.nmjc.edu/contacts/staffdirectoryaction.asp?Last=&First=&title=&Department=Counseling&Search=Search">Counseling Staff</a></p>
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
