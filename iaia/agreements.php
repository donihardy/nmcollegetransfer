<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage iaiabgimage">
         
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
          <a class="navbar-brand iaia" href="index.php">INSTITUTE OF<br />AMERICAN INDIAN ARTS</a>
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
              <a href="index.php">IAIA</a>
            </li>
            <li>
              AGREEMENTS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Agreements with Other Schools</h3>
            <p>Visit: <a href="https://iaia.edu/download/11855/">Haskell Articulation</a><br />
             Visit: <a href="https://iaia.edu/download/11858/">Tohono Articulation</a><br />
             Visit: <a href="https://iaia.edu/download/11861/"> Navajo Tech Articulation</a><br />
             Visit: <a href="https://iaia.edu/download/11864/">SFCC Articluation</a><br />
             Visit: <a href="https://iaia.edu/download/11867/"> Dine Articulation</a><br />
             Visit: <a href="https://iaia.edu/download/11870/">Northern New Mexico Articulation</a><br />
             Visit: <a href="https://iaia.edu/download/11873/">Ilisagvik Articulation</a></p>
             
             <p>Visit: <a href="https://iaia.edu/about/admission-faqs/">IAIA Transfer Agreements</a></p>
           </div>
         </div>

         <?php //Begin Side menu ?>
         <?php require '../includes/sidemenu.php'; ?>
         <?php //End Side Menu ?>
         
         <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
