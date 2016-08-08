<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage valenciabgimage">
         
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
          <a class="navbar-brand valencia" href="index.php">UNIVERSITY OF NEW MEXICO<br />VALENCIA</a>
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
              <a href="index.php">UNM VALENCIA</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <p>Visit: <a href="http://valencia.unm.edu/campus-resources/index.html">Campus Resources</a><br />
           Visit: <a href="http://valencia.unm.edu/campus-resources/the-learning-center/index.html">Learning Center</a><br />
           Visit: <a href="http://valencia.unm.edu/campus-resources/student-organizations/index.html">Student Organizations</a><br />
           Visit: <a href="http://valencia.unm.edu/campus-resources/student-organizations/student-government/index.html">Student Government</a></p>
           <p>Upward Bound 
            Upward Bound is a free, year-round college prep program for high school students. The goal of the program is to prepare low income, first generation college bound students for success in post-secondary education.
            Students attending Los Lunas High School, Valencia High School, and Belen High School must qualify for selection to the program (see link to the left). Once selected, students remain in the program until their graduation from high school and the completion of their first summer of college.</p>
            <p>Visit: <a href="http://valencia.unm.edu/community/upward-bound/index.html">Upward Bound</a></p>


          </div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

          <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
