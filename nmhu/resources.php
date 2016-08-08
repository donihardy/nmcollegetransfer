<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmhubgimage">
         
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
          <a class="navbar-brand nmhu" href="index.php">NEW MEXICO<br />HIGHLANDS UNIVERSITY</a>
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
              <a href="index.php">NMHU</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <p>To really succeed at Highlands University, students need effective study skills, good time management, and strong organizational techniques. Our program is designed to help you develop and enhance these skills through the Learning Center, which has a computer lab, printer, and a smartboard for student use. The Learning Center is staffed by Peer Mentors that are a trained to assist first year students as they begin their studies at the university. Not sure who your Peer Mentor is? Drop in and check them out in Room 140 of the Felix Martinez Building. </p>
          <p>Visit: <a href="http://www.nmhu.edu/student-support-services/">Student Support Services</a></p>
        </div>
      </div>
      
      <?php //Begin Side menu ?>
      <?php require '../includes/sidemenu.php'; ?>
      <?php //End Side menu ?>
      
       <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
