<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmsubgimage">
         
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO<br />STATE UNIVERSITY</a>
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
              <a href="index.php">NMSU</a>
            </li>
            <li>
             LIFE ON CAMPUS
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Life on Campus <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
          <h4 id="housing">Housing</h4>
          <p>One of the most beneficial things you can do for yourself while in college is to live on campus. Studies show time-and-time again that students who live on campus are making a choice that positively impacts their lives, enriches their day-to-day interactions, and makes their educational experience more fulfilling. Whether you are an undergraduate or a graduate student, single or married, with or without children, you are sure to find a place to call home at New Mexico State University.</p>
          <p>Visit: <a href="http://housing.nmsu.edu/">Housing</a></p>
          <h4 id="childcare">Child Care</h4>
          <p>Myrna’s Children’s Village offers early care and education programs for NMSU students, faculty, staff, and community families and children, six weeks to five years of age. Through a variety of program options for infants, toddlers, and preschool children, families have choices to meet the childcare and educational needs of their young children.</p>
          <p>Visit: <a href="https://ci.nmsu.edu/programs/concentrations/eced/mcvi/">Child Care</a></p>
          <h4 id="parent">Parent Info</h4>
          <p>We are thrilled to have you as part of our Aggie Family at New Mexico State University.</p>
          <p>Family involvement plays an important role in the success of our students. NMSU’s caring community is committed to helping you to provide support and guidance for your student.</p>

          <p>Take advantage of the services and resources we provide. It is our mission to be a one-stop resource for our Aggie Families.</p>
          <p>Visit: <a href="http://families.nmsu.edu/">NMSU Parents &#38; Families</a>
          </div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

          <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
