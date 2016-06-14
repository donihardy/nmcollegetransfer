<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - NEW MEXICO TECH</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmtbgimage">
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
              <a href="index.php">NMT</a>
            </li>
            <li>
             VETERANS &#38; ACTIVE DUTY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><h3>Veterans &#38; Active Duty</h3>

          <p>Tech offers many student services to ensure your success here.  Because you are required to have a major advisor assigned to help you determine your curriculum requirements, we offer an on-line catalog for you as a ‘suggested roadmap.’  We work together with the Advising, Counseling, Registrar, and Business Office to get you the help you may need while navigating your way to your degree.<p/>
            <p>The Department of Veterans Affairs administers a variety of education benefit programs. Many Veterans and active duty personnel can qualify for more than one education benefits program, including:</p>
            <ul><li>The Post-9/11 GI Bill</li>
              <li>Montgomery GI Bill - Active Duty (MGIB-AD)</li>
              <li>Montgomery GI Bill - Selected Reserve (MGIB-SR)</li>
              <li>Reserve Educational Assistance Program (REAP)</li>
              <li>Veterans Educational Assistance Program (VEAP)</li>
              <li>Educational Assistance Test Program (Section 901)</li>
              <li>Survivors’ and Dependents' Educational Assistance Program (DEA)</li>
              <li>National Call to Service Program</li>
              <li>Free education and vocational counseling services are available to service members and veterans</li></ul>
              <p><a href="http://www.nmt.edu/veterans-affairs">NMT Veterans Affairs</a><br />

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
