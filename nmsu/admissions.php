<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - NEW MEXICO STATE UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmsubgimage">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO<br />STATE UNIVERSITY</a>
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
              <a href="index.php">NMSU</a>
            </li>
            <li>
              ADMISSIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Admissions <a href="../questions.php#admissions"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="requirements">Admission Requirements</h4>
            <p>You are eligible for regular admission to NMSU if you are a graduate of an accredited high school, have met the minimum high school course requirements listed below and meet one of the following GPA (grade point average)/test score requirements.</p>
            <p><a href="http://nmsu.edu/admissions.html">NMSU Transfer Admissions Requirements</a><br />
              <a href="http://admissions.nmsu.edu/apply/first-time-freshmen/">Freshman Admissions</a></p>
              <h4 id="eligibility">Eligibility</h4>
              <p>A 2.0 or above cumulative GPA in your college courses and 30 completed credit hours. Must be eligible to return to your last college or university. Application for admission and official college transcripts or e-transcripts mailed directly from each college or university attended. If you have fewer than 30 complete college credit hours, you must fulfill the First Time Freshmen admission.</p>
              <a href="http://admissions.nmsu.edu/apply/transfer-students/">NMSU Admissions Eligibility</a>
              <h4 id="deadlines">Deadlines</h4>
              <p>University Admissions encourages the applicant to apply by March 15th for fall enrollment and by October 15th for spring enrollment to be considered for financial support. </p>
              <a href="http://nmsu.smartcatalogiq.com/2014-2015/Graduate-Catalog/General-Information/Admission/Application-Dates-and-Deadlines">NMSU Admissions Deadlines</a>
              <h4 id="fees">Fees</h4>
              <p>The application fee is $20 and nonrefundable.</p>
              <a href="http://admissions.nmsu.edu/apply/">NMSU Admissions Fees</a>
              <h4 id="visits">Campus Visits</h4>
              <p>Campus visit info:
                <ul><li>Admissions and Financial Aid presentations prior to each tour</li>
                  <li>Student led campus tour</li>
                  <li>Opportunities to meet faculty</li>
                  <li>Tours of residence halls</li></ul>
                </p>
                <a href="http://admissions.nmsu.edu/visit/">Schedule a Visit</a><br />
                <a href="https://nmsu.askadmissions.net/Portal/EI/Search">Orientation request</a>
              </div>
            </div>

            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side menu ?>
            
             <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
