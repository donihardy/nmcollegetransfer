 <?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmhubgimage img-responsive">
         
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
          <a class="navbar-brand nmhu" href="index.php">NEW MEXICO<br />HIGHLANDS UNIVERSITY</a>
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
              NMHU
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <img class="schoolimg img-responsive pull-right col-lg-6" src="../images/nmhu.jpg"  alt="Responsive Image">
            <p>Highlands University is a state-supported institution established in 1893 and offers bachelor’s and master’s degrees in a variety of disciplines. Highlands is known for its multiethnic student body, small classes, research activities, student and faculty achievements, affordability and opportunities for students to combine study with real-world experience.</p>
            <p><a href="http://www.nmhu.edu">NMHU Website</a><br />
              <a href="http://www.nmhu.edu/campus-tour/visit-nmhu/">NMHU Map</a></p>

            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          
          <div class="clear"></div>
          <div class="container">
     <?php include '../includes/schoolfooter.php'; ?>
