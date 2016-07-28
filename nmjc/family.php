<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER
 -NEW MEXICO JUNIOR COLLEGE</title>

<body>
  <div class="container-fluid">
    <header class="bgimage nmjcbgimage">
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
        <a class="navbar-brand cnm" href="index.php">NEW MEXICO<br />JUNIOR COLLEGE</a>
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
            <a href="index.php">NMJC</a>
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
        <p>We believe on-campus living provides both an enjoyable and rewarding experience in community living as well as the necessary support for academic success.</p>
        <p>On-campus housing for married couples or individuals with children is not provided.</p>
        <p><a href="http://www.nmjc.edu/studentservices/housing.aspx">NMJC Student Housing</a></p>
        <h4 id="childcare">Child Care</h4>
        <p>No information found.</p>
        <p><a href="http://www.nmjc.edu">Child Care</a></p>
        <h4 id="parent">Parent Info</h4>
        <p><a href="http://www.nmjc.edu/parents/">Parent Resources</a></p>
      </div>
    </div>
    
    <?php //Begin Side menu ?>
    <?php require '../includes/sidemenu.php'; ?>
    <?php //End Side menu ?>
    
     <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
