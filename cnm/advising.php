<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - CENTRAL NEW MEXICO COMMUNITY COLLEGE</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage cnmbgimage">
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
          <a class="navbar-brand cnm" href="index.php">CENTRAL NEW MEXICO COMMUNITY COLLEGE</a>
        </div>

        <?php //Begin top Nav Bar ?>

        
        <?php require '../includes/schooltopnav.php'; ?>

        <!--End top nav-->

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">CNM</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>CNM Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p><strong>Services</strong></p>
            <ul><li>Career exploration and help with choosing a major</li>
              <li>Creating a realistic educational plan</li>
              <li>Reviewing program and graduation requirements</li>
              <li>Transfer information</li>
              <li>Removal of advisement holds</li>
              <li>Course planning</li>
              <li>Degree evaluations or audits</li>
            </ul>
            <h4 id="website">CNM Advising Website</h4>
            <p>CNM Advising is available in person, chat, email and phone calls. Limited information can be provided by phone, email or online chat in compliance with <a href="http://www2.ed.gov/policy/gen/guid/fpco/ferpa/index.html">Federal Education Rights and Privacy Ace (FERPA)</a>.</p>
            <p><a href="https://www.cnm.edu/depts/advisement">CNM Advising Website</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p>Main or South Valley: Schedule an in person appointment by calling <a href="tel:1-505-224-4355">(505) 224-4355.</a></p>
            <p>Montoya, Westside, or Rio Rancho: Schedule your own appointment online <a href="https://advisor.cnm.edu/TracWeb40/Default.html">Online Appointments</a>
             or call:<br />
             <a href="tel:1-505-224-4000">(505) 224-4000</a> ext. 25040 for Montoya Campus<br />
             <a href="tel:1-505-224-4000">(505) 224-4000</a> ext. 27006 for Westside Campus<br />
             <a href="tel:1-505-224-4000">(505) 224-4000</a> ext. 29033 for Rio Rancho Campus</p>
             <p><a href="https://www.cnm.edu/depts/advisement">CNM Advising Appointment</a></p>
           </div>
         </div>
         <!-- Side menu -->
         <?php require '../includes/sidemenu.php'; ?>
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
