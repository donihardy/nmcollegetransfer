<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - EASTERN NEW MEXICO UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage enmubgimage">
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY</a>
        </div>

        <?php //Begin top Nav Bar ?>
        <?php require '../includes/schooltopnav.php'; ?>
        <?php //End top nav ?>

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">ENMU</a>
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
            <p>Send official copies of transcripts from all colleges and universities you have attended previously. Please note, if you have completed less than 30 college credits, you will also need to submit an official copy of your high school transcript or GED certificate and ACT or SAT scores.<br />
             Send your materials to:<br />
             <div class="subtitle">Office of Enrollment Services<br />
              ENMU Station 7<br />
              1500 S Ave K<br />
              Portales, NM 88130</div></p>
              <p><a href="https://www.enmu.edu/future-students/transfer/">Transcripts</a></p>
              <h4 id="tes">Transferable Courses</h4>
              Eastern New Mexico University’s transfer equivalency site is intended as a guide for our prospective transfer students and is still a work in progress. </br>
              <a href="http://www.enmu.edu/future-students/transfer/TES.shtml">Transfer Eqivalency System (TES)</a>
              <h4 id="commoncore">Common Core Courses</h4>
              NM Common core is transferable to all NM Schools. See the catalogs for more information:<br/>
              <a href="https://www.enmu.edu/academics/resources/ug-catalog/">ENMU Catalogs</a>
              <h4 id="actsat">ACT/SAT</h4>
              You need an ACT score of at least 17 or an SAT score of at least 810 to be admitted to ENMU if transferring with less than 30 college credit hours.</br>
              <div class="subtitle">ENMU's ACT Code is 2636<br /> ENMU's SAT Code is 4299.</p></div>
              <a href="http://www.enmu.edu/future-students/freshmen/">ENMU ACT/SAT</a>
              <h4 id="moreinfo">Request More Info</h4>
              Request more information via email or website:</br>
              <a href:"mailto:Enrollment.Services@enmu.edu">Email for Undergraduate Info</a><br />
              <a href:"Graduate.School@enmu.edu">Email for Graduate Info</a><br />
              <a href="https://enrollmentservices.enmu.edu/ENMUAdmissionsCentral.aspx">ENMU Request Info</a>
              <h4 id="2+2">2+2 Agreements</h4>
              Roswell and Ruidoso Intra-Campus:<br />
              <a href="http://www.enmu.edu/admission/roswell-and-ruidoso-intra-campus">Conact Form</a><br />
              <a href="https://enrollmentservices.enmu.edu/InformationRequestTransfer.aspx">ENMU Request Info</a><br />
              <a href="http://www.enmu.edu/search-enmu?q=articulation">Articulation agreements</a>
              <h4 id="dual">High School Dual Enrollment</h4>
              <p>Students from these participating New Mexico schools can earn college credit while attending high school.<br />
                For more information visit the Dual Enrollment Courses page:<br />
                <a href:"https://www.enmu.edu/future-students/counselors/dual-enrollment.shtml">ENMU Dual Enrollment</a></p>
              </div>
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
