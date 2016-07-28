<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - SAN JUAN COLLEGE</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage sjcbgimage">

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
          <a class="navbar-brand" href="index.php">SAN JUAN COLLEGE</a>
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
              <a href="index.php">SJC</a>
            </li>
            <li>
             LIFE ON CAMPUS
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Life on Campus <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png"></a></h3>
          <h4 id="housing">Housing</h4>
          <p>No on campus housing.</p>
          <h4 id="childcare">Child Care</h4>
          <p>The primary purpose of the Child & Family Development Center (CFDC) on the campus of San Juan College (SJC) is to serve as a laboratory school for early childhood, nursing, psychology, dental and sociology students at the College. Practicum students in early childhood education courses are part of the Center staff each semester. They are supervised by qualified teachers to plan, implement and evaluate developmentally appropriate activities for young children.</p>
          <p><a href="https://www.sanjuancollege.edu/community/departments/child-and-family-development-center/">Child & Family Development Center</a></p>
          <h4 id="parent">Parent Info</h4>
          <p>No parent info found.</p>
        </div>
      </div>

      <?php //Begin Side menu ?>
      <?php require '../includes/sidemenu.php'; ?>
      <?php //End Side menu ?>

       <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
