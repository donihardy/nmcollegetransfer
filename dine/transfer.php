<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage dinebgimage">
         
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
          <a class="navbar-brand" href="index.php">DIN&#201; COLLEGE</a>

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
              <a href="index.php">DIN&#201;</a>

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
            <p>Mailing Address:</p>
            <p>Records and Admissions Office<br />
              PO Box 580<br />
              Shiprock, NM 87420<br />
              Fax: (505) 368-3531</p>

              <h4 id="tes">Transferable Courses</h4>
              <p>Transfer of credit is awarded for coursework completed at other colleges and universities. Records and Admissions is responsible for conducting official credit evaluations. Transfer students wishing to receive transfer credit must request official transcripts from colleges previously attended. AP tests and IB scores are also considered. Transfer credit evaluation can take up to two weeks.<br />
                <p><a href="http://www.dinecollege.edu/current/policies.php">Transfer to Din&#233;</a><br />
                  <h4 id="commoncore">Common Core Courses</h4>
                  <p>Designated general education core courses successfully
                    completed at any regionally accredited New Mexico
                    institution of higher education are guaranteed to transfer
                    to other New Mexico college or universities. Additional
                    information on New Mexico transfers can be found at:
                  </p>
                  <p>Visit: <a href="http://www.dinecollege.edu/current/general-education.php">General Education Program Requirements</a><br/>
                  Visit: <a href="www.hed.state.nm.us">NM HED</a></p> 
                  <h4 id="actsat">ACT/SAT</h4>
                  <p>Open Enrollment: No SAT or ACT scores required to enroll, just a high school diploma or GED. Once you get admitted, you take a test that places you in reading, writing, and math courses.</p>
                  <h4 id="2+2">2+2 and other Transfer Agreements</h4>
                  <p>No Agreements were found</p>
                  <h4 id="moreinfo">Request More Info</h4>
                  <p>For more information:</p>
                  Visit: <a href="http://www.dinecollege.edu/admissions/admissions-contacts.php">Din&#233; Request Info</a><br />
                    <a href="tel:1-505-368-3529">(505) 368-3529</a>
                    <h4 id="dual">Dual Enrollment</h4>
                    <p>Area High School junior and seniors may be admitted upon submission of a completed and signed High School Concurrent Enrollment Form, which includes parent, high school counselor and principal signatures as well as a high school transcript to enroll in approved courses. When the High School Concurrent Enrollment has been accepted and approved by the appropriate Division Academic Dean, the student is required to take the placement tests as part of the admission process. Payment of tuition, fees, and books are the students' responsibility. New Mexico and Arizona Department of Education may have other guidelines; contact the Admissions Office for further information.<br />
                      Visit: <a href="http://www.dinecollege.edu/dual-credit-program/students-and-parents.php">Dual Enrollment</a></p>
                    </div>
                  </div>

                  <?php //Begin Side menu ?>
                  <?php require '../includes/sidemenu.php'; ?>
                  <?php //End Side Menu ?>

                  <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
