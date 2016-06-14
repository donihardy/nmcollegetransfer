<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER 
  - EASTERN NEW MEXICO UNIVERSITY-ROSWELL</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage enmuroswellbgimage">
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY-ROSWELL</a>
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
              <a href="index.php">ENMU-ROSWELL</a>
            </li>
            <li>
             PROFILE
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><table class="profile"><th colspan="2"><h3>Eastern New Mexico University-Roswell</h3>
          <h6>52 University Blvd | Roswell, New Mexico 88202 | <a href="1-575-624-7000">(575) 624-7000</a></h6></th>
          <tr><td><h4>Website:</h4></td><td><a href="http://ruidoso.enmu.edu/">http://ruidoso.enmu.edu/</a></td></tr>
          <tr><td><h4>Type:</h4></td><td>2-year, Public</td></tr>
          <tr><td><h4>Awards offered:</h4></td><td>Certificate, Associate's degree</td></tr>
          <tr><td><h4>Campus setting:</h4></td><td>Town: Remote</td></tr>
          <tr><td><h4>Campus housing:</h4></td><td>No</td></tr>
          <tr><td><h4>Student population:</h4></td><td>3303</td></tr>
          <tr><td><h4>Student-to-faculty ratio:</h4></td><td>14 to 1</td></tr>
        </table>
        <p><a href="http://nces.ed.gov/collegenavigator/?s=NM&l=91+92+93+94&ic=1+2&id=187666">College Navigator</a></p>
      </div>
    </div>
    
    <?php //Begin Side menu ?>
    <?php require '../includes/sidemenu.php'; ?>
    <?php //End Side menu ?>
    
    <div id="footer">
     <?php include '../includes/footer.php'; ?>
   </div>

   <script src="../js/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/bootstrap-submenu.min.js" defer></script>
   <script src="../js/navbar.js"></script>
   <script src="../js/script.js"></script>
 </body>
 </html>
