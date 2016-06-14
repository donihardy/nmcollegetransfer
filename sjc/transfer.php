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
              TRANSFER INFO
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Course Transfer Info</h3>

            <h4 id="transcripts">Transcripts</h4>

            <p>Send transcripts to:<p>
              <p>San Juan College<br />Enrollment Services<br />4601 College Blvd<br />Farmington, NM 87402</p>
              <div><h4 id="tes">Transferable Courses</h4>
                <p>In accordance with policies established by the New Mexico Higher Education Department, your general education core courses taken at SJC are guaranteed to transfer to any New Mexico public institution. If you have decided on a major and/or an institution at which to complete your studies, be proactive by: checking the transfer agreements on the SJC Transfer Center website; Meeting with the SJC Transfer Specialist or your advisor; And consulting with an academic advisor at the particular institution you have chosen. Plan ahead to determine the most appropriate course selections.</p>
                <a href="http://tes.collegesource.com/view/tes_view01.asp?rid=%7B1C20A4B3-72E7-47B0-97A0-224DFCF9DD11%7D&aid=%7B387937DE-91E0-477D-AED7-01A9F1263B21%7D">San Juan College Transfer Equivalency System (TES) Page</a>
                <h4 id="commoncore">Common Core Courses</h4>
                <a href="http://catalog.sanjuancollege.edu/content.php?catoid=6&navoid=283&hl=nm+core&returnto=search#San_Juan_College_Common_Core_Course_Listing">San Juan College Common Core Listing</a>
                <h4 id="actsat">ACT/SAT</h4>
                <p>San Juan College has an open admission policy; meaning we do NOT require a minimum SAT or ACT score. We do require new students to take the Accuplacer test to help determine what courses they need to start in.</p>
                <a href="http://www.sanjuancollege.edu/student-services/departments/enrollment-services/explore-sjc/#faq-313">ACT/SAT info</a>
                <h4 id="moreinfo">Request More Info</h4>
                <p>Phone: <a href="tel:1-505-326-3311">(505) 326-3311</a><br />
                  Email: <a href="admissions@sanjuancollege.edu">admissions@sanjuancollege.edu</a></p>

                  <h4 id="2+2">Transfer Agreements</h4>
                  <a href="http://www.sanjuancollege.edu/student-services/departments/transfer-center/selecting-a-major-and-college/#transferagree">San Juan Transfer Agreements</a>
                  <h4 id="dual">High School Dual Enrollment</h4>
                  <p>Dual credit allows a high school student from a public high school, private high school, home school, or public charter or Bureau of Indian Education (BIE) school to enroll in a SJC course(s). Students receive high school core and academic credit as well as college credit for the course(s) taken. These schools must have agreements with San Juan College in order to participate.</p>
                  <a href="https://www.sanjuancollege.edu/student-services/departments/enrollment-services/dual-credit/">San Juan College Dual Enrollment Page</a>

                </div>
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
