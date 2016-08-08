<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage enmuruidosobgimage">
         
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY-RUIDOSO</a>
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
              <a href="index.php">ENMU-RUIDOSO</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <h4>Student Resources</h4>
          <p>The Student Success Center of ENMU- Ruidoso provides services and resources dedicated to the personal development and academic achievement of all students. The Student Success Center collaborates with constituents in the greater Ruidoso learning community to support student success. The purpose of the Student Success Center is to guide students in the development and practice of academic skills to empower their independent learning.</p>
            <p>Visit: <a href="http://ruidoso.enmu.edu/index.php/students/the-student-success-center-of-enmu-ruidoso">Student Success Center</a><br />
            Visit: <a href="http://ruidoso.enmu.edu/index.php/students/computing-services">Computing Services</a></p>
            
          </div>
        </div>
        
        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side menu ?> 
        
         <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
