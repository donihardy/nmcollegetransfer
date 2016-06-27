<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - DIN&#201;</title>


  <body>
    <div class="container-fluid">
      <header class="bgimage dinebgimage">
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
          <a class="navbar-brand" href="index.php">DIN&#201; COLLEGE</a>

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
              <a href="index.php">DIN&#201;</a>

            </li>
            <li>
             LIFE ON CAMPUS
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Life on Campus</h3>
          <h4 id="housing">Housing</h4>
          <p>Diné College provides eight residential halls for students at the main campus in Tsaile and three residential halls for DC student athletes in Shiprock.<br /><a href="http://www.dinecollege.edu/residence/residencelife.php">Residence Life</a></p>
          <h4 id="childcare">Child Care</h4>
          <p>The Tsaile Campus has two day-care facilities on campus that are run by the Navajo Nation’s Division of Social Services. Special agreements are in place to facilitate services to children of Diné College students, faculty and staff.</p>
          <p><a href="http://www.dinecollege.edu/services/student-services.php">Child Care</a></p>
          <h4 id="parent">Parent Info</h4>
          <p>Dual Enrollment Parent Info:<br />
            <a href="http://www.dinecollege.edu/dual-credit-program/students-and-parents.php">Parent Info</a></p>
          </div>
        </div>
        
        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side menu ?> 
        
        <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
