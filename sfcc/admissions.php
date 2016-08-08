<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage sfccbgimage">
         
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
          <a class="navbar-brand sfcc" href="index.php">SANTA FE<br />COMMUNITY COLLEGE</a>
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
              <a href="index.php">SFCC</a>
            </li>
            <li>
              ADMISSIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Admissions <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
            <h4 id="requirements">Admission Requirements</h4>
            <p>You must apply to SFCC and complete an ADMISSION FORM before you register for classes.</p>
            <ul><li>Click here to apply to <a href="https://sfccssb.sfcc.edu/PROD/bwskalog.P_DispLoginNew">SFCC ONLINE</a></li>
              <li>OR <a href="http://www.sfcc.edu/files/ess/ApplicationForm2015.pdf">download the printable SFCC Admission Form</a> (Adobe PDF document) and apply by mail.<br />
                <i>Mail the form to:</i><br />
                The Welcome and Advising Center<br />
                Santa Fe Community College<br />
                6401 Richards Ave.<br />
                Santa Fe, NM 87508</li></ul>
                Visit: <a href="http://www.sfcc.edu/registration/first_time_students">General Admissions</a>
                <h4 id="eligibility">Eligibility</h4>
                <p>Santa Fe Community College maintains an open admission
                  policy to maximize community members’
                  opportunities to participate in the college’s programs,
                  services and activities. Anyone may be enrolled in the
                  college’s credit programs, though some restrictions based
                  on age may apply to specific courses or certain facilities
                  that require designated levels of physical maturity. </p>
                  Visit: <a href="http://www.sfcc.edu/files/catalog/2015CatalogJulyPt1.pdf">Santa Fe Community College Catalog</a> - page 9
                  <h4 id="deadlines">Deadlines</h4>
                  <p>No information found.</p>
                  <!--<a href="#">Santa Fe Community College Admissions Deadlines</a>-->
                  <h4 id="fees">Fees</h4>
                  <p>No information found.</p>
                  <!--<a href="#">Santa Fe Community College Admissions Fees</a>-->
                  <h4 id="visits">Campus Visits</h4>
                  Visit: <a href="https://www.sfcc.edu/forms/iform?f=tourrequest">Request a Tour</a><br />
                  Visit: <a href="http://www.sfcc.edu/registration/first_year_experience/1_new_student_orientation">New Student Orientation</a>

                </div>
              </div>
              
              <?php //Begin Side menu ?>
              <?php require '../includes/sidemenu.php'; ?>
              <?php //End Side menu ?>

              <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
