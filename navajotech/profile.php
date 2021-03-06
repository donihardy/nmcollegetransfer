<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage ntubgimage">
         
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
          <a class="navbar-brand ntu" href="index.php">NAVAJO<br />TECHNICAL UNIVERSITY</a>
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
              <a href="index.php">NAVAJO TECH</a>
            </li>
            <li>
             PROFILE
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><h3>Navajo Technical University</h3>
          <h6>Lowerpoint Rd State Hwy 371 | Crownpoint, NM 87313 | <a href="tel:1-505-786-4100">(505) 786-4100</a></h6><br />
          <table class="profile">
          <tr><td><h4>Website:</h4></td><td><a href="http://www.navajotech.edu">www.navajotech.edu</a></td></tr>
          <tr><td><h4>Type:</h4></td><td>4-year, primarily associates, Public</td></tr>
          <tr><td><h4>Awards offered:</h4></td>
            <td>Associate's degree, Bachelor's degree, Master's degree
            </td></tr>
            <tr><td><h4>Campus setting:</h4></td><td>Rural: Remote</td></tr>
            <tr><td><h4>Campus housing:</h4></td><td>Yes</td></tr>
            <tr><td><h4>Student population:</h4></td><td>  	2075 (2070 undergraduate)</td></tr>
            <tr><td><h4>Student-to-faculty ratio:</h4></td><td>14 to 1</td></tr>
          </table><p><a href="http://nces.ed.gov/collegenavigator/?q=navajo+technical+university&s=all&id=187596">College Navigator</a></p></div>
        </div>
        
        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side menu ?> 
        
        <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
