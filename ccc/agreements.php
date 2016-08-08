<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage clovisccbgimage">
         
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
          <a class="navbar-brand ccc" href="index.php">CLOVIS COMMUNITY<br />COLLEGE</a>
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
              <a href="index.php">CCC</a>
            </li>
            <li>
              AGREEMENTS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Agreements with Other Schools</h3>
            <P>Clovis Community College participates in the state of New Mexico's statewide articulation agreement. This agreement as defined under state law (Chapter 21, Article 1B NMSA 1978) has established policies to guarantee successful transfer of completed core courses between New Mexico postsecondary public institutions.</p>
              <p><strong>Top Transfer Schools for CCC Students:</strong></p>
              <ul><li>Eastern New Mexico University</li>
                <li>Wayland Baptist University-Clovis</li>
                <li>West Texas A&M University</li>
                <li>Texas Tech University</li>
                <li>University of New Mexico</li></ul>
                <p>Visit: <a href="http://www.clovis.edu/advising/transfer.aspx">Transferring Schools</a></p>
              </div></div>
              
              <?php //Begin Side menu ?>
              <?php require '../includes/sidemenu.php'; ?>
              <?php //End Side menu ?> 
              

               <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
