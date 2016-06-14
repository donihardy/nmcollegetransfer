<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - UNM VALENCIA</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage valenciabgimage">
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
          <a class="navbar-brand valencia" href="index.php">UNIVERSITY OF NEW MEXICO<br />VALENCIA</a>
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
              <a href="index.php">UNM VALENCIA</a>
            </li>
            <li>
             VETERANS &#38; ACTIVE DUTY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><h3>Veterans &#38; Active Duty</h3>

          <p>Educational programs at the Valencia Campus have been approved for persons eligible for VA benefits.</p>
          <p>Further information concerning the GI Bill Educational Training and Veterans Affairs may be obtained from the veteran's certifying official in the Registrar's Office.</p>
          <p>Applications for the various VA programs can be obtained from the VA certifying official. If a veteran has any doubt of his/her eligibility for any of the programs, additional information can be obtained by calling the VA Regional Office at 1-888-442-4551.<br />
            <a href="https://vc.unm.edu/Regist/veterans.htm">Veterans Info</a>
            <p/>
            <p>Active Duty Military (ADM) personnel work with his/her duty station's Education Officer regarding access to Military Tuition Assistance. Then a UNM Online Advisor can assist you in meeting your academic goals, including information about admission, registration, and degree plans. The UNM Online Advisor serves as the Military Liaison for the Air Force and assists with all branches of the U.S. Military.<br />
              <a href="http://online.unm.edu/student/vet.html">UNM Veterans and Military Student Resources</a></p>
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
