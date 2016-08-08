<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage sfccbgimage">
         
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
          <a class="navbar-brand sfcc" href="index.php">SANTA FE<br />COMMUNITY COLLEGE</a>
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
            <a href="index.php">SFCC</a>
          </li>
          <li>
           VETERANS &#38; ACTIVE DUTY
         </li>
       </ol>
     </div>
     <div class="container-fluid">
      <div class="textbody"><h3>Veterans &#38; Active Duty <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>

        <p>In addition to the services offered by SFCC, there are many other services and resources available to veterans and military personnel in New Mexico.</p>
          <p>Visit: <a href="http://www.sfcc.edu/veterans/resources_and_links">Veterans Resource Center</a></p>
          <p>Veterans Upward Bound (VUB) at the SFCC Veterans Resource Center and The University of New Mexico—Taos is designed to assist veterans in the development of academic and other requisite skills necessary for acceptance and success in a program of post-secondary education. The project provides assessment and enrichment of basic skills through instruction, advising, and tutoring. The primary goal of the program is to increase the rate at which participants enroll in and complete post-secondary education programs. All VUB services, including instruction, textbooks, advising, and supplies, are provided FREE of charge.</p>
            <p>Visit: <a href="http://www.sfcc.edu/veterans/veterans_upward_bound">Veterans Upward Bound</a><br />
            Visit: <a href="http://www.sfcc.edu/veterans/benefits">Veterans Resource Center - Benefits</a>
          </div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

        <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
