<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - CLOVIS COMMUNITY COLLEGE</title>
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
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>The Pell Grant Program is funded by the Federal government. It is the largest federal grant program that provides money to help undergraduates pay for college education. Grants are gift aid and do not have to be repaid.</p>

            <p><a href="http://www.clovis.edu/financialaid/pell.aspx">CCC Financial Aid Pell Grants</a></p>
            <h4 id="pellgrant">CCC Loan Website</h4>
            <p>Federal student loans available at CCC offer low-interest educational loans to assist college students with their college expenses.</p>
            <p><a href="http://www.clovis.edu/financialaid/studentloans.aspx">Loans</a></p>
            <h4 id="scholarship">Scholarships</h4>
            <p>These scholarships are available through a separate application process from a variety of sources. This list is updated a few times each year, so be sure to check back each semester.</p>
            <p><a href="http://www.clovis.edu/financialaid/scholarships.aspx">CCC Financial Aid Scholarships</a></p>
            <h4 id="deadline">Deadline</h4>
            <p>Priority is given to students with the highest unmet need who have completed their Pell Grant file by May 1.</p>
            <h4 id="schoolcode">CCC School Code</h4>
            <p><strong>004743</strong></p>
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
