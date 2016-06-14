<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE TRANSFER-CLOVIS COMMUNITY COLLEGE</title>
</head>
<body>
  <div class="container-fluid">
    <header class="bgimage clovisccbgimage">
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
           VETERANS &#38; ACTIVE DUTY
         </li>
       </ol>
     </div>
     <div class="container-fluid">
       <div class="textbody"><h3>Veterans &#38; Active Duty</h3>
        <h4 id="veterans">Veterans</h4>
        <p>Clovis Community College, located in Clovis, New Mexico, is approved to train veterans and other eligible persons under the provisions of Title 38, U.S. Code for courses required to complete the programs found in the Course Catalog. Clovis Community College is also an approved work site for Veterans Work Study Program</p>
        <p>Clovis Community College participates in the acceptance of military
          credit as recommended by the American Council on Education
          Guide to the Evaluation of Educational Experiences in the Armed
          Services.</p>
          <p><a href="http://www.clovis.edu/publications/docs/Catalog_2015-2017.pdf">CCC Catalog</a><br />
            <a href="http://www.clovis.edu/financialaid/veteransbenefits.aspx">CCC Veterans Office</a></p>
            <h4 id="veterans">Active Duty</h4>
            <p>To qualify for Chapter 30 benefits, you must have entered active duty for the first time after June 30, 1985, and paid $1,200 into the program, or have entitlements remaining under the Vietnam Era Veterans' Educational Assistance program (Chapter 34 of title 38, U. S. Code.) You are eligible if, as of December 31, 1989, you had served on active duty for any number of days during the period October 19, 1984 to June 30, 1985, and you continued on active duty without a break from July 1, 1985 through June 30, 1988, or if you were eligible for the Post Vietnam Era Veterans' Educational Assistance Program (VEAP, or Chapter 32 of title 38, U. S. Code) and were allowed to contribute the required $1,200 to the Chapter 30 program.</p>
            <p><a href="http://www.clovis.edu/financialaid/veteransbenefits.aspx">CCC Veterans Office</a></p>
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
