<?php include '../includes/header.php'; ?>

<body>
  <div class="container-fluid">
    <header class="bgimage lunabgimage">
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
        <a class="navbar-brand" href="index.php">LUNA COMMUNITY COLLEGE</a>
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
            <a href="index.php">LCC</a>
          </li>
          <li>
           RESOURCES
         </li>
       </ol>
     </div>
     <div class="container-fluid">
      <div class="textbody">
        <h3>Resources</h3>
        <p>Visit: <a href="https://www.luna.edu/disability-support-services/">Luna Community College Disability Support</a></p>
        <p>Academic Center for Excellence (ACE)
          ACE provides integrated student support services to students in science, technology, engineering and math, collectively referred to as STEM. Students do NOT have to be STEM majors to access the ACE lab services.</p>
          <p>Visit: <a href="https://www.luna.edu/acelab/">ACE Lab</a><br />
          Visit: <a href="https://www.luna.edu/lrc/">LCC Learning Resource Center</a><br />
          Visit: <a href="https://www.luna.edu/esl/">English as a Second Language</a><br />
          Visit: <a href="https://www.luna.edu/Culinary-Arts-Club/">Activities and Clubs: Culinary Arts Club</a><br />
          Visit: <a href="https://www.luna.edu/LCC-Car-Club/">LCC Car Club</a><br />
          Visit: <a href="https://www.luna.edu/luna_fabricators/">Luna Fabricators</a><br />
          Visit: <a href="https://www.luna.edu/phi_theta_kappa/">Phi Theta Kappa</a><br />
          Visit: <a href="https://www.luna.edu/Skills-USA-Automotive-Technologies/">SkillsUSA Automotive Technologies</a><br />
          Visit: <a href="https://www.luna.edu/Skills-USA-Building-Technologies/">SkillUSA Building Technologies</a><br />
          Visit: <a href="https://www.luna.edu/Student-Dental-Association/ ">Student Dental Association</a><br />
          Visit: <a href="https://www.luna.edu/student_nursing/">Student Nursing Association (SNA)</a><br />
          Visit: <a href="https://www.luna.edu/student_government/">Student Government</a>
        </p>
      </div>
    </div>
    
    <?php //Begin Side menu ?>
    <?php require '../includes/sidemenu.php'; ?>
    <?php //End Side menu ?>
    
     <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
