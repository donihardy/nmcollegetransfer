<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage taosbgimage">
         
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
          <a class="navbar-brand taos" href="index.php">UNIVERSITY OF NEW MEXICO<br />TAOS</a>
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
              <a href="index.php">UNM TAOS</a>
            </li>
            <li>
              ADMISSIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Admissions <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
            <h4 id="requirements">Admission Requirements</h4>
            <p>UNM-Taos has an open admissions policy, so if you intend to work towards a degree or certificate, all you need is a high school diploma or GED to qualify for admission.</p>
            <ul><li>UNM-Taos admissions application</li>
              <li>$10.00 non-refundable one time only, application fee</li>
              <li>High school / GED official transcript</li>
              <li>Official college transcript (if applicable)</li></ul>
              <p>Visit: <a href="http://taos.unm.edu/catalog/admissions.html">UNM Taos General Admissions</a>
                <h4 id="eligibility">Eligibility</h4>
                <p>The University of New Mexico-Taos Campus admits all qualified New Mexico applicants. Within the limits of its resources, it also accepts qualified students from other states and foreign countries. Because of the great diversity of UNM-Taos's students, special applications and admissions procedures have been created to meet the needs of the different students served, including entering freshmen, transfer students, non-degree students, certificate students, associate degree students and unclassified students.</p>
                <p>Visit: <a href="http://www.unm.edu">UNM Taos Admissions Eligibility</a></p>
                <h4 id="deadlines">Deadlines</h4>
                <p>Recommended application deadlines for degree status are: <br />
                  1st week of June for fall semester, 1st week of November for spring semester, and mid-April for summer session.
                </p>
                <p>Visit: <a href="http://taos.unm.edu/catalog/admissions.html">UNM Taos Admissions Deadlines</a></p>
                <h4 id="fees">Fees</h4>
                <p>One-time admissions fee of $10.00</p>
                <p>Visit: <a href="http://taos.unm.edu/home/admissions/">UNM Taos Admissions Fees</a></p>
                <h4 id="visits">Campus Visits</h4>
                <p>New Student Orientation is a chance for first-time and transfer students to learn about the UNM-Taos Campus.</p>
                <p>Visit: <a href="http://taos.unm.edu/student-success/nso.html">UNM Taos New Student Orientation</a></p>

              </div>
            </div>

            <?php //Begin Side menu ?>
            <?php require '../includes/sidemenu.php'; ?>
            <?php //End Side menu ?>
            

             <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
