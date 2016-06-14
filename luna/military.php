<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - LCC</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage lunabgimage">
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
          <a class="navbar-brand" href="index.php">LUNA COMMUNITY COLLEGE</a>
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
              <a href="index.php">LCC</a>
            </li>
            <li>
             VETERANS &#38; ACTIVE DUTY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
         <div class="textbody"><h3>Veterans &#38; Active Duty</h3>
          <h4 id="veterans">Veterans &#38; Military</h4>
          <p>The Veterans Resource Center at Luna Community College is an area where veterans and their dependents may seek information regarding their educational opportunities.</p>

          <p>SOME SERVICES PROVIDED ARE:<br />
            <ul><li>Academic and career advisement</li>
              <li>Peer to peer mentoring</li>
              <li>Counseling</li>
              <li>Surrounding area and community resources</li>
              <li>Information regarding upcoming workshops</li></ul></p>
              <p>Location:<br />
                Student Services Building, ACCESS Center room 114, Phone: <a href="tel:1-505-454-5317">505-454-5317</a></p>
                <p><a href="https://luna.edu/media/page_files/VA_Request_for_Certification.pdf">Request for Certification Form</a></p>
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
