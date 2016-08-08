<?php include '../includes/header.php'; ?>

<body>
  <div class="container-fluid">
    <header class="bgimage clovisccbgimage">

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
        <a class="navbar-brand ccc" href="index.php">CLOVIS COMMUNITY<br />COLLEGE</a>
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
            <a href="index.php">CCC</a>
          </li>
          <li>
            ADMISSIONS
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody">
          <h3>Admissions <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
          <h4 id="requirements">Requirements</h4>
          <p>The Admissions and Records department at CCC is a student's first stop in applying to attend classes at the college. CCC is an open admission institution.</p>
          <ol type="1"><li>Apply</li>
            <li>Assess</li>
            <li>Advise</li>
            <li>Register</li></ol>
            <p>Clovis Community College<br />
              Attention: Admissions & Records<br />
              417 Schepps Boulevard<br />
              Clovis, NM 88101<br />
              <a href="mailto:admissions@clovis.edu">Email</a><br />
                <a href="tel:1-575-769-4025">(575) 769-4025</a></p>

                <p>Visit: <a href="http://www.clovis.edu/admissions/index.aspx">Admissions Website</a></p> 
                <h4 id="eligibility">Eligibility</h4>
                <p>CCC is an open admission institution. Once students complete the application process they are admitted to CCC, assigned a student ID number ("C-Number"), and they are eligible to register for classes immediately.</p>
                Visit: <a href="http://www.clovis.edu/admissions/index.aspx">CCC Admissions Eligibility</a>
                <h4 id="deadlines">Deadlines</h4>
                <p>Deadlines vary. Please see academic calendar.
                </p>
                Visit: <a href="http://www.clovis.edu/academic/index.aspx">CCC Admissions Deadlines</a>
                <h4 id="fees">Fees</h4>
                <p> No fees found.</p>
                <h4 id="visits">Campus Visits</h4>
                <p>Students interested in attending Clovis Community College are encouraged to schedule a campus tour. Our new student recruiter or a student ambassador will be more than happy to show you all that our campus has to offer. We also encourage all students to attend the Orientation Kickoff, an event held at the beginning of each semester. Orientation Kickoff connects you to campus resources and people. You will learn about institutional expectations and values and learn how to make the most of your educational experience.</p>
                <p>Visit: <a href="http://www.clovis.edu/advising/tours.aspx">Schedule a Visit</a></p>
                <p>Our orientation for new students will tell you all about our campus, departments and services you can take advantage of, and more. Orientation includes a campus tour so you will feel right at home on your first day of class.</p>
                <p>Visit: <a href="http://www.clovis.edu/advising/tours.aspx">Orientation Info</a></p>


              </div>
            </div>


            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side Menu ?>

            <div class="clear"></div>
            <div class="container">
              <?php include '../includes/schoolfooter.php'; ?>
