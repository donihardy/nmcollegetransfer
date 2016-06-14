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
        <?php //End Top Nav Bar ?>

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">CNM</a>
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
            <p>Request transcripts to be sent to CNM from other institutions.</p>
            <p>Credit for general education courses earned at regionally accredited post secondary institutions will be evaluated automatically upon receipt of the official transcript (for admitted and currently enrolled students only). Courses with D or better grades earned at public New Mexico institutions will be considered for transfer credit; courses from institutions outside New Mexico and private institutions in New Mexico must have a grade of C or better to be considered for transfer credit.</p>
            <p>Below is the link for the request form:</p>
            <p><a href="https://www.cnm.edu/depts/recordsretention/documents/request-transcript-from-another-institution">Request transcripts from another institution.</a></p>
            <p>Request transcipts to be sent to another institution from CNM:<br/>
              Transcripts requests are processed within two business days in receipt of request and payment.  Unofficial transcripts can be printed from my CNM by current students and former students can submit a Transcript Request Form.
              <br /><a href="https://www.cnm.edu/student-resources/academic-records/academic-records-list/transcript-request">Transcript Request</a></p>
              <h4 id="tes">Transferable Courses</h4>
              <p>Credit earned at other post-secondary institutions and / or credit for prior learning may be transferred and applied toward program requirements.<br />
                <p><a href="https://www.cnm.edu/student-resources/transfer/transfer-to-cnm">Transfer to CNM<br />
                  <a href="http://tes.collegesource.com/view/tes_view01.asp?rid={0503AFD5-0DB5-454E-A227-CC387FC5A19F}&aid={3953860A-3699-4EFE-A557-7B3E41278DD9}">TES (Transfer Evaluation System)</p></a>
                  <h4 id="commoncore">Common Core Courses</h4>
                  <a href="../nmcommoncore.html">Common Core Course</a><br/>
                  <h4 id="actsat">ACT/SAT</h4>
                  <p>Once you fill out an online application, you'll need to submit your ACT, SAT, or Accuplacer scores to Admissions.</p>
                  <a href="https://www.cnm.edu/registration">CNM ACT/SAT</a><br />
                  <h4 id="2+2">2+2 and other Transfer Agreements</h4>
                  <a href="https://www.cnm.edu/depts/academic-affairs/transfer-agreements">Transfer agreements with other schools</a></br>
                  <h4 id="dual">High School Dual Enrollment</h4>
                  <p>The Dual Credit Program offers free classes* for students in central New Mexico attending a public, private, charter, or home school.
                    High school students can take college-level classes and get a jump start on a certificate or degree. Under the Dual Credit program, tuition and registration fees are waived (*students are responsible for course fees and uniforms, if required).</p>
                    <a href="https://www.cnm.edu/depts/outreach/dual-credit/high-school-and-dual-credit-programs">Dual Enrollment</a></br>
                    <h4 id="moreinfo">Request More Info</h4>
                    <p>For more transfer help, meet with an academic advisor to plan your coursework and explore your transfer options</p>
                    <a href="https://www.cnm.edu/depts/advisement/contact-advisement">CNM Request Info</a>
                  </div>
                </div>
                
                <?php //Begin Side menu ?>
                <?php require '../includes/sidemenu.php'; ?>
                <!-- End Side Menu -->


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
