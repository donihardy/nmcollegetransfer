<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER 
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
             FAMILY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Family Life</h3>
          <h4 id="housing">Housing</h4>
          <p>Residential life strives to complement the educational and service goals of New Mexico tech by promoting personal growth and social awareness while enhancing student learning. Joining with students, we strive to create safe and supportive opportunities for the development of interpersonal and leadership skills in a residential environment.</p>
          <p>We have many different Residence Hall and Apartment types, styles, cost, amenities and locations for you to choose from!</p>
          <p><a href="http://www.nmt.edu/welcome-to-res-life-residential-life">Housing</a></p>
          <h4 id="childcare">Child Care</h4>
          <p>The Children's Center offers quality and developmentally appropriate education and care for children of New Mexico Tech's students, staff, faculty and Socorro community members. Our staff has an uncompromising commitment to excellence. The Children's Center also places a high priority on responsiveness and close working relationships with each child and family.</p>

          <p>We offer a relaxed and casual setting for children ages 2 through 10. Our program offers optimum learning opportunities in a creative environment for your child/children.</p>
          <p><a href="http://www.nmt.edu/childrens-center">Child Care</a></p>
          <h4 id="parent">Parent Info</h4>
          <p></p>
          <p><a href="http://www.nmt.edu/parent-information">NMT Parents</a>
            <br /><a href="http://www.universityparent.com/nmt">NMT Parent Guide</a></p>
          </div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

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
