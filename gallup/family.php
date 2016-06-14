<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - UNIVERSITY OF NEW MEXICO GALLUP</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage gallupbgimage">
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
          <a class="navbar-brand gallup" href="index.php">UNIVERSITY OF NEW MEXICO<br />GALLUP</a>
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
              <a href="index.php">UNM GALLUP</a>
            </li>
            <li>
             FAMILY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Family Life</h3>
          <h4 id="housing">Housing</h4>
          <p>No housing available.</p>
          <!--<p><a href="#">Housing</a></p>-->
          <h4 id="childcare">Child Care</h4>
          <p>UNM-Gallup Early Childhood and Family Center (ECFC) serves young children of students, faculty, staff and community with care and learning using best practices and a Reggio Emilia inspired approach. It trains student and early childhood professionals in knowledge and research of early childhood development and education and raises community awareness of young children's needs.</p>
          <p><a href="http://www.gallup.unm.edu/ecfc">Child Care</a></p>
          <h4 id="parent">Parent Info</h4>
          <p>No information found.</p>
          <!--<p><a href="#">SCHOOL Parents &#38; Families</a>-->
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
