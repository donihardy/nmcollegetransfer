<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - ENMU</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage enmubgimage">
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY</a>
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
              <a href="index.php">ENMU</a>
            </li>
            <li>
             PROFILE
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><table class="profile"><th colspan="2"><h3>Eastern New Mexico University</h3>
          <h6>1500 S Ave K | Portales, New Mexico 88130 | <a href="1-575-562-1011">(575) 562-1011</a></h6></th>
          <tr><td><h4>Website:</h4></td><td><a href="http://www.enmu.edu">www.enmu.edu</a></td></tr>
          <tr><td><h4>Type:</h4></td><td>4-year, Public</td></tr>
          <tr><td><h4>Awards offered:</h4></td>
            <td>Associate's degree, Bachelor's, Post-baccalaureate certificate, Master's
            </td></tr>
            <tr><td><h4>Campus setting:</h4></td><td>City: Remote</td></tr>
            <tr><td><h4>Campus housing:</h4></td><td>Yes</td></tr>
            <tr><td><h4>Student population:</h4></td><td>  	5,879</td></tr>
            <tr><td><h4>Student-to-faculty ratio:</h4></td><td>19 to 1</td></tr>
          </table>
          <a href="http://nces.ed.gov/collegenavigator/?q=eastern+new+mexico&s=all&id=187648">College Navigator</a></div>
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
