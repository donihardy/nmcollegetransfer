<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage dinebgimage">
         
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
             PROFILE
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><h3>Din&#233; College</h3>
          <h6>Crownpoint Campus-Hwy. 371-Route 9 | Crownpoint, New Mexico 87313 | <a href="tel:1-877-988-3463">(877) 988-3463</a><br />
          Shiprock Campus-1228 Yucca St. | Shiprock, New Mexico 87420 | <a href="tel:1-877-988-3463">(877) 988-3463</a></h6>
          <table class="profile">
          <tr><td><h4>Website:</h4></td><td><a href="http://www.dinecollege.edu">www.dine.edu</a></td></tr>
          <tr><td><h4>Type:</h4></td><td>4-year, primarily associates's, Public</td></tr>
          <tr><td><h4>Awards offered:</h4></td>
            <td>Associate's degree<br />
              Bachelor's degree
            </td></tr>
            <tr><td><h4>Campus setting:</h4></td><td>Rural: Remote</td></tr>
            <tr><td><h4>Campus housing:</h4></td><td>Yes</td></tr>
            <tr><td><h4>Student population:</h4></td><td>1,488 (all undergraduate)</td></tr>
            <tr><td><h4>Student-to-faculty ratio:</h4></td><td>15 to 1</td></tr>
          </table><!--<p><a href="#">College Navigator</a></p></div>-->
        </div>
        </div>
        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side menu ?> 
        
        <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
