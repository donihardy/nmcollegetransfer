<?php include '../includes/header.php'; ?>

  <body>
  <div class="container-fluid">
    <header class="bgimage nmjcbgimage">
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
           PROFILE
         </li>
       </ol>
     </div>
     <div class="container-fluid">
      <div class="textbody"><h3>New Mexico Junior College</h3>
        <h6>5317 Lovington Hwy | Hobbs, NM 88240 | <a href="tel:1-575-392-4510">(575) 392-4510</a></h6>
        <table class="profile">
        <tr><td><h4>Website:</h4></td><td><a href="http://www.nmjc.edu">www.nmjc.edu</a></td></tr>
        <tr><td><h4>Type:</h4></td><td>2-year, Public</td></tr>
        <tr><td><h4>Awards offered:</h4></td>
          <td>Certificates, Associate's degree
          </td></tr>
          <tr><td><h4>Campus setting:</h4></td><td>Town: Remote</td></tr>
          <tr><td><h4>Campus housing:</h4></td><td>Yes</td></tr>
          <tr><td><h4>Student population:</h4></td><td>3332</td></tr>
          <tr><td><h4>Student-to-faculty ratio:</h4></td><td>18 to 1</td></tr>
        </table>
        <p>Visit: <a href="http://nces.ed.gov/collegenavigator/?s=NM&l=91+92+93+94&ic=1+2&pg=2&id=187903">College Navigator</a></p></div>
      </div>
      
      <?php //Begin Side menu ?>
      <?php require '../includes/sidemenu.php'; ?>
      <?php //End Side menu ?> 
      
       <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
