<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nnmcbgimage">
         
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
          <a class="navbar-brand cnm" href="index.php">NORTHERN NEW MEXICO <br />COLLEGE</a>
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
              <a href="index.php">NNMC</a>
            </li>
            <li>
             PROFILE
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><h3>Northern New Mexico College</h3>
          <h6>921 N Paseo De Onate | Espanola, NM | <a href="tel:1-505-747-2100">(505) 747-2100</a></h6>
          <table class="profile">
        <tr><td><h4>Website:</h4></td><td><a href="http://www.nnmc.edu/">www.nnmc.edu/</a></td></tr>
        <tr><td><h4>Type:</h4></td><td>4-year, Public</td></tr>
        <tr><td><h4>Awards offered:</h4></td><td>Associates's, Bachelor's, Post-Baccalaureate Certificate</td></tr>
        <tr><td><h4>Campus setting:</h4></td><td>Town: Distant</td></tr>
        <tr><td><h4>Campus housing:</h4></td><td>Yes</td></tr>
        <tr><td><h4>Student population:</h4></td><td>1371 (1349 undergraduate)</td></tr>
        <tr><td><h4>Student-to-faculty ratio:</h4></td><td>10 to 1</td></tr>
      </table><p>Visit: <a href="http://nces.ed.gov/collegenavigator/?s=NM&l=91+92+93+94&ic=1+2&pg=2&id=188058">College Navigator</a></p></div>
    </div>
    
    <?php //Begin Side menu ?>
    <?php require '../includes/sidemenu.php'; ?>
    <?php //End Side menu ?>
    
    
     <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
