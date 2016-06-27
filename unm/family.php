<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - UNIVERSITY OF NEW MEXICO</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage unmbgimage">
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
          <a class="navbar-brand unm" href="index.php">UNIVERSITY OF NEW MEXICO</a>
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
              <a href="index.php">UNM</a>
            </li>
            <li>
             LIFE ON CAMPUS
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Life on Campus</h3>
          <h4 id="housing">Housing</h4>
          <p>Residence Life and Student Housing offers many options to meet your housing needs. Contracts are determined by the academic calendar. There is no deadline, however, it is recommended you register as early as possible to obtain your preferred hall or roommate.</p>
          <p><a href="http://housing.unm.edu/index.html">Housing</a></p>
          <h4 id="childcare">Child Care</h4>
          <p>The UNM Children’s Campus for Early Care and Education (UNMCC) is supported by student fees and is under the umbrella of Student Affairs and the College of Education. This program is also supported by various State and Federal grants.</p>
          <p>The Children’s Campus provides the children of UNM’s student, staff and faculty parents with a high quality early childhood experience. The Campus is a site for UNM student and faculty research, observation and practicum.</p>
          <p><a href="https://childcare.unm.edu/index.html">Child Care</a></p>
          <h4 id="parent">Parent Info</h4>
          <p>Staying connected gives parents the information they need to stay informed of university happenings and to aid their students to success. Come join the pack and help strengthen our Lobo Community!</p>
          <p><a href="http://parent.unm.edu/">UNM Parents &#38; Families</a>
            <br /><a href="http://parentassociation.unm.edu/index.html">UNM Parent Association</a></p>
          </div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

          <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
