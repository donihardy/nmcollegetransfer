<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE &#38; TRANSFER 
    - NEW MEXICO STATE UNIVERSITY CARLSBAD</title>
    

  <body>
    <div class="container-fluid">
      <header class="bgimage carlsbadbgimage img-responsive">      <img class="container-fluid">
        <!--<div class="title">NM COLLEGE TRANSFER</div> -->
        <a href="../index.php"><img id="LogoImg" src="../images/NMCollegeTransfer2.png" class="img-responsive" alt="NM College Transfer 101 Logo"></a>
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY CARLSBAD</a>      </div>

          <?php //Begin top Nav Bar ?>
          <?php require '../includes/schooltopnav.php'; ?>
          <?php //End Top Nav Bar ?>

          <div id="breadcrumb">
            <ol class="breadcrumb">
              <li>
                <a href="../index.php">HOME</a>
              </li>
              <li>
                <a href="index.php">NMSU CARLSBAD</a>
              </li>
              <li>
               PROFILE
             </li>
           </ol>
         </div>
         <div class="container-fluid">
          <div class="textbody"><table class="profile"><th colspan="2"><h3>NMSU Carlsbad</h3>
            <h6>1500 University Drive | Carlsbad, New Mexico 88220 | <a href="tel:1-575-234-9200">(575) 234-9200</a></h6></th>
            <tr><td><h4>Website:</h4></td><td><a href="http://carlsbad.nmsu.edu">carlsbad.nmsu.edu</a></td></tr>
            <tr><td><h4>Type:</h4></td><td>2-year, Public</td></tr>
            <tr><td ><h4>Awards offered:</h4></td>
              <td>Certificate<br />
                Associate's degree
              </td></tr>
              <tr><td><h4>Campus setting:</h4></td><td>Rural: Fringe</td></tr>
              <tr><td><h4>Campus housing:</h4></td><td>No</td></tr>
              <tr><td><h4>Student population:</h4></td><td>1852<td></tr>
              <tr><td><h4>Student-to-faculty ratio:</h4></td><td>19 to 1</td></tr>
            </table>
            <a href="http://nces.ed.gov/collegenavigator/?s=NM&l=91+92+93+94&ic=1+2&pg=2&id=188003">College Navigator</a></div>
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
