<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nnmcbgimage">
         
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
          <a class="navbar-brand nnmc" href="index.php">NORTHERN NEW MEXICO <br />COLLEGE</a>
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
              <a href="index.php">NNMC</a>
            </li>
            <li>
             VETERANS &#38; ACTIVE DUTY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
         <div class="textbody"><h3>Veterans &#38; Active Duty <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
          <h4 id="veterans">Veterans &#38; Active Duty</h4>
          <p>At Northern's Veterans Resource Center you can register for classes and get certified to use your GI Bill, including the Post 9/11 GI Bill. You can also find out about all the services offered at Northern for veterans.</p>
          <p>Veterans Center Contact: <a href="tel:1-505-747-5499">(505) 747-5499</a><br />
            Visit: <a href="http://nnmc.edu/home/student-gateway/student-veterans-office/">NNMC Veterans Resource Center</a></p>
              
            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          
            <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
