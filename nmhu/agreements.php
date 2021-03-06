 <?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmhubgimage">
         
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
              <a href="index.php">NMHU</a>
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
            <p>Visit: <a href="https://www.cnm.edu/depts/academic-affairs/transfer-agreements">Agreements CNM to NMHU</a><br />
              Visit: <a href="http://www.sfcc.edu/news_and_events/sfcc_highlands_hec_articulation">Agreements SFCC to NMHU</a><br />
              Visit: <a href="https://luna.edu/media/page_files/STEM_Memorandum_of_Understanding_August_2014.pdf">Agreements LCC to NMHU</a><br />
              Visit: <a href="http://www.nmhu.edu/wp-content/uploads/2014/08/001434-SanJuanCol-324200935145.pdf">Agreement SJCC to NMHU</a><br />
              Visit: <a href="http://www.nmhu.edu/wp-content/uploads/2014/08/001435-DineCollege-324200935429.pdf">Agreement Din&#233; to NMHU</a><br />
            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          
          <div class="clear"></div>
          <div class="container">
     <?php include '../includes/schoolfooter.php'; ?>
