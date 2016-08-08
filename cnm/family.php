<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage cnmbgimage">
         
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
          <a class="navbar-brand cnm" href="index.php">CENTRAL NEW MEXICO COMMUNITY COLLEGE</a>
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
              <a href="index.php">CNM</a>
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
          <p>CNM doesn't provide housing but they do have a list of resources: </p>
          <p>Visit: <a href="https://www.cnm.edu/cnm-community/community-resources/housing">Housing</a></p>
          <h4 id="childcare">Child Care</h4>
          <p>Tres Manos Child Development Center provides low cost, high quality child care to a limited number of CNM students. The center is conveniently located at 832 Buena Vista SE, north of the Heights Community Center and is available Monday through Friday, from 7:00 am to 5:30 pm.</p>
          <p>Visit: <a href="https://www.cnm.edu/depts/financial-aid/resources/childcare.html">Child Care</a></p>
          <h4 id="parent">Parent Info</h4>
          <p>As a parent of a current or incoming CNM student, you may have some questions about the college. Here is some information to help you out.</p>
          <p>Visit: <a href="https://www.cnm.edu/cnm-community/parent-guide">Parent Info</a></p>
        </div>
      </div>
      
      <?php //Begin Side menu ?>
      <?php require '../includes/sidemenu.php'; ?>
      <?php //End Side menu ?>
      
       <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
