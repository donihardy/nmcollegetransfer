<?php include '../includes/header.php'; ?>


<title>NM COLLEGE TRANSFER-MESALANDS</title>

<body>
  <div class="container-fluid">
    <header class="bgimage mesalandsbgimage">
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
        <a class="navbar-brand cnm" href="index.php">MESALANDS<br />COMMUNITY COLLEGE</a>
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
            <a href="index.php">MESALANDS</a>
          </li>
          <li>
            AGREEMENTS
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody">
          <h3>Agreements with Other Schools</h3>
          <h4>STEM Degree Agreements</h4>
          <p>Mesalands Community College has formal articulation agreements with the following institutions:</p>
          <p>Amarillo College<br />
            Clovis Community College<br />
            Eastern New Mexico University<br />
            Franklin University<br />
            Luna Community College<br />
            New Mexico Highlands University<br />
            New Mexico State University<br />
            <a href="http://www.snhu.edu/tr/14560.asp?utm_source=MesalandsCC&utm_medium=WebForm&utm_content=A01519&utm_campaign=COH-CommunityCollegePartnerships&snhu_segment=OL">Southern New Hampshire University</a><br />
            <a href="http://online.unm.edu/?utm_source=url&utm_medium=redirect&utm_campaign=statewide">University of New Mexico</a><br />
            University of Phoenix<br />
            West Texas A&M University</p>
            <p>Formal published transfer guides between Mesalands Community College and Eastern New Mexico University, New Mexico Highlands University, and the University of New Mexico are available in the Student Services Office.</p>
            <a href="http://www.mesalands.edu/about/university-alliances/">Mesalands Transfer Agreements</a>
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
