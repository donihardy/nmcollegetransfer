<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - SANTA FE COMMUNITY COLLEGE</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage sfccbgimage">
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
             LIFE ON CAMPUS
           </li>
       </ol>
     </div>
     <div class="container-fluid">
      <div class="textbody">
        <h3>Life on Campus <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png"></a></h3>
        <h4 id="housing">Housing</h4>
        <p>No information found.</p>
        <!--<p><a href="#">Housing</a></p>-->
        <h4 id="childcare">Child Care</h4>
        <p>We offer year round care/education to children to age 5. Located on the campus of the Santa Fe Community College, Kids Campus Child Care Center works year-round to support early childhood development in a positive and nurturing learning environment.</p>
        <p><a href="http://kidscampus.sfcc.edu/">Kids Campus Child Care</a></p>
        <h4 id="parent">Parent Info</h4>
        <p>No information found.</p>
        <!--<p><a href="#">SCHOOL Parents &#38; Families</a>-->
      </div>
    </div>

    <?php //Begin Side menu ?>
    <?php require '../includes/sidemenu.php'; ?>
    <?php //End Side Menu ?>

     <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
