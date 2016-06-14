<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - UNM TAOS</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage taosbgimage">
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
          <a class="navbar-brand taos" href="index.php">UNIVERSITY OF NEW MEXICO<br />TAOS</a>
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
              <a href="index.php">UNM TAOS</a>
            </li>
            <li>
             PROFILE
           </li>
         </ol>
       </div>

       <div class="container-fluid">
        <div class="textbody"><table class="profile"><th colspan="2"><h3>UNM Taos</h3>
          <h6>1157 County Road 110 | Ranchos de Taos, New Mexico 87557 | <a href="tel:1-575-737-6200">(575) 737-7200</a></h6></th>
          <tr><td><h4>Website:</h4></td><td><a href="http://taos.unm.edu/home/">taos.unm.edu/home/</a></td></tr>
          <tr><td><h4>Type:</h4></td><td>2-year, Public</td></tr>
          <tr><td ><h4>Awards offered:</h4></td>
            <td>Certificates<br />
              Associate's degree
            </td></tr>
            <tr><td><h4>Campus setting:</h4></td><td>Rural: Fringe</td></tr>
            <tr><td><h4>Campus housing:</h4></td><td>No</td></tr>
            <tr><td><h4>Student population:</h4></td><td>1,769</td></tr>
            <tr><td><h4>Student-to-faculty ratio:</h4></td><td>18 to 1</td></tr>
          </table>
          <a href="http://nces.ed.gov/collegenavigator/?q=taos&s=NM&l=91+92+93+94&ic=1+2&id=188225">College Navigator</a></div>
        </div>
        
        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

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
