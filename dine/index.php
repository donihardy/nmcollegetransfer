<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - DIN&#201;</title>


  <body>
    <div class="container-fluid">
      <header class="bgimage dinebgimage img-responsive">
        <img class="container-fluid">
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
              DIN&#201;
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <img class="schoolimg img-responsive pull-right " src="../images/dine.jpg"  alt="Responsive Image">
            <p >Din&#233; College was established in 1968 as the first tribally-controlled community college in the United States. In creating an institution of higher education, the Navajo Nation sought to encourage Navajo youth to become contributing members of the Navajo Nation and the world society. Under the direction of an eight-member Board of Regents confirmed by the Government Services Committee of the Navajo Nation Council, the College serves residents of the 26,000 square mile Navajo Nation, which spans the states of Arizona, New Mexico, and Utah. As a postsecondary educational institution, Diné College awards associate degrees and certificates in areas important to the economic and social development of the Navajo Nation. <br /><br /></p>
            <p><a href="http://www.dinecollege.edu">Din&#233; Website</a><br />
              <a href="http://www.dinecollege.edu/about/campus.php">Map</a></p>
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
