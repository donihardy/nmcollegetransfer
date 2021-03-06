<?php include '../includes/header.php'; ?>


  
  <body>
    <div class="container-fluid">
      <header class="bgimage enmubgimage">
         
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
        <?php //End Top Nav Bar ?>

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">ENMU</a>
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
          <p>As a student, you need a safe environment that gives you privacy, quiet time and a place to keep your stuff. You also need a place where you can feel comfortable hanging out with your friends, listen to music, or do whatever it is that you do to relax. You will find just the environment you need in our three residence halls and 300 apartments.</p>

          <p>We want you to get a good start on your college career. If you have fewer than 30 hours of college credit after high school graduation and are under 21 years old, you are required to live on campus and purchase a meal plan. This is actually a pretty big help. You live on campus, so if you oversleep, you can still make it to that 9 a.m. class. All of your meals are provided, so you never have to cook. And your best friend from grade school lives right down the hall.</p>
          <p>Of course, we make exceptions if living on campus is not a good option for you. If you are in one of the following situations, fill out the Residential Living Waiver Form and take it to the Office of Housing and Residence Life in Campus Union, Room 108:</p>
          <p>Visit: <a href="http://www.enmu.edu/services/housing/index.shtml">Housing</a></p>
          <h4 id="childcare">Child Care</h4>
          <p>The Child Development Center-Welcome to the Child Development Center (CDC) Laboratory School! ENMU's Child Development Center has a proud history of serving as a laboratory school since 1949. The original program enrolled 16 children ages 2-6 and was open from 9 a.m.-3 p.m. Monday through Friday. In 1972, the current CDC facility was constructed with the open classrooms and curriculum modeled after the Infants Schools in England. Today, the CDC enrolls 36 children, 3-5 years old within two classrooms. The facility is located on the ENMU Portales Campus at the corner of U.S. Highway 70 and South Avenue N. The program operates in the fall, spring and summer terms, Monday through Friday from 7:45 a.m. until 5 p.m. The center observes the holidays and semester breaks observed by ENMU students.</p>
          <p>Visit: <a href="http://education.enmu.edu/projects/cdc.shtml">Child Care</a></p>
          <h4 id="parent">Parent Info</h4>
          Resource and information for current and future ENMU parents: <br/>
          <p>Visit: <a href="http://www.enmu.edu/future-students/parents/ ">Parent Info</a></p>
        </div>
      </div>
      
      <?php //Begin Side menu ?>
      <?php require '../includes/sidemenu.php'; ?>
      <?php //End Side menu ?>
      
       <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
