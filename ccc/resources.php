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
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <p>Visit: <a href="http://www.clovis.edu/css/esl.aspx">ESL program</a> <br />
            Visit: <a href="http://www.clovis.edu/trio/index.aspx">TRIO Student Support Services</a><br />
            Visit: <a href="http://www.clovis.edu/css/index.aspx">Mabel Lee Hawkins Center for Student Success (CSS)</a><br />
            Visit: <a href="http://www.clovis.edu/css/index.aspx">Student Clubs and Organizations</a><br />
            Visit: <a href="http://www.clovis.edu/extendedlearning/index.aspx">Distance Education</a><br />
          </p>
        </div>
      </div>
      
      <?php //Begin Side menu ?>
      <?php require '../includes/sidemenu.php'; ?>
      <?php //End Side menu ?>

       <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
