 <?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmtbgimage img-responsive">
         
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
          <a class="navbar-brand nmt" href="index.php">NEW MEXICO TECH</a>
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
              NMT
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">  <img class="schoolimg img-responsive pull-right" src="../images/nmt.jpg"  alt="Responsive Image">
            <p>New Mexico Tech students have high expectations and big dreams. 
              We are looking for students who are intrigued by math, science and engineering and will thrive in a small school that provides an intense, focused education. Tech students have been challenged in high school and look forward to continued challenges and opportunities alongside our brilliant faculty and fellow students who share their passion for knowledge. Hands-on learners do especially well at Tech due to the abundance of research opportunities that take theoretical classroom learning and apply it to research, lab work and field experience. 
            </p>
            <p>Visit: <a href="http://www.nmt.edu">NMT Website</a><br />
              Visit: <A href="http://www.nmt.edu/images/stories/maps/NMT-AREA.pdf">NMT Map</a></p>

              </div>
            </div>

            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side menu ?>
            
             <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
