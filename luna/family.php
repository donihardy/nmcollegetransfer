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
             LIFE ON CAMPUS
           </li>
       </ol>
     </div>
     <div class="container-fluid">
      <div class="textbody">
        <h3>Life on Campus <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
        <h4 id="housing">Housing</h4>
        <p>It is the responsibility of students to obtain their own housing while attending the college. LCC does not have dormitories. However, the ACCESS Center will assist students by providing contacts to obtain housing.</p>
        <p>Visit: <a href="https://www.luna.edu/student_support/">Student Support</a></p>
        <h4 id="childcare">Child Care</h4>
        <p>The college offers its students the opportunity to enroll their children in the preschool while they attend school. The preschool is located on the west end of the campus in the Nick Salazar Early Childhood Education Center. The preschool is also open to the community. Additional information about the preschool is available at the site. A parent handbook detailing the preschool is available upon request.</p>
        <p>Visit: <a href="http://www.luna.edu/orientation/step5.html">Child Care</a></p>
        <h4 id="parent">Parent Info</h4>
        <p>No information available.</p>
      </div>
    </div>
    
    <?php //Begin Side menu ?>
    <?php require '../includes/sidemenu.php'; ?>
    <?php //End Side menu ?>
    
     <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
