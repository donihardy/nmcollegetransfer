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
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h3 id="basiccore">Basic Core</h3>
            <p>Basic Core classes are the classes that are required for all students pursuing a bachelors degree.</p>
            <a href="http://catalog.unm.edu/catalogs/2012-2013/undergrad-program.html">UNM Basic Core</a>
            <h4 id="as">Associates Degrees</h4>
            <p>No STEM degrees at UNM Main Campus</p>
            <a href="http://degrees.unm.edu/associate_programs">UNM Associates Degrees</a>
            <h4 id="ba">Bachelor's Degrees</h4>
            <p><strong>School of Engineering</strong><br />
              Chemical Engineering  (BS) <br />
              Civil Engineering (BS)<br />
              Computer Engineering (BS)<br />
              Computer Science (BS)<br />  
              Construction Engineering (BS)<br />    
              Construction Management (BS)<br />  
              Electrical Engineering (BS)<br />   
              Mechanical Engineering (BS)<br />  
              Nuclear Engineering (BS)</p>
              <p><strong>College of Arts & Sciences</strong><br />
                Astrophysics (BS)<br /> 
                Biochemistry (BA)<br /> 
                Biochemistry (BS)<br /> 
                Biology (BS)<br /> 
                Chemistry (BS)<br /> 
                Chemistry (BA)<br /> 
                Earth and Planetary Sciences (BA)<br /> 
                Earth and Planetary Sciences (BS)<br /> 
                Environmental Science (BS)<br /> 
                Geography (BS)<br /> 
                Geography (BA)<br /> 
                Mathematics (Applied Concentration) (BS)<br /> 
                Mathematics (Computational Concentration) (BS)<br /> 
                Mathematics (Pure Concentration) (BS)<br /> 
                Physics (BS)<br /> 
                Physics and Astrophysics (BA)<br /> 
                Statistics (BS)</p>
                <p><strong>College of Education</strong><br />
                  Nutrition and Dietetics (BS)<br /> 
                </p>
                <a href="http://degrees.unm.edu/undergrad_programs/explore">UNM Bachelor's Degrees</a>
                <h4 id="ma">Masters Degrees</h4>
                <p><strong>School of Engineering</strong><br />
                  Biomedical Engineering (MS)<br />
                  Chemical Engineering  (MS) <br />
                  Civil Engineering (MS)<br />
                  Computer Engineering (MS)<br />
                  Computer Science (MS)<br />  
                  Construction Management (M.C.M.)<br />  
                  Electrical Engineering (MS)<br />   
                  Mechanical Engineering (MS)<br />
                  Nanoscience and Microsystems (MS)<br /> 
                  Nuclear Engineering (MS)<br />
                  Optical Science and Engineering (MS)</p>
                  <p><strong>College of Arts & Sciences</strong><br />
                    Biology (MS)<br />
                    Chemistry (MS)<br />
                    Earth and Planetary Sciences (MS)<br />
                    Geography (MS)<br />
                    Mathematics (MS)<br />
                    Nanoscience and Microsystems (MS)<br />
                    Physics (MS)<br />
                    Statistics (MS)
                  </p>
                  <p><strong>College of Education</strong><br />
                    Nutrition (MS)<br /></p>
                    <p><a href="http://degrees.unm.edu/grad_programs/explore">UNM Masters Degrees</a></p>
                    <h4 id="phd">PhD Degrees</h4>
                    <p><strong>School of Engineering</strong><br />
                      Computer Science (PhD)<br />
                      Biomedical Engineering (PhD)<br />
                      Chemical Engineering (PhD)<br />
                      Civil Engineering (PhD)<br />
                      Computer Engineering (PhD)<br />
                      Electrial Engineering (PhD)<br />
                      Mechanical Engineering (PhD)<br />
                      Nanoscience and Microsystems (PhD)<br />
                      Optical Science and Engineering (PhD)</p>
                      <p><strong>College of Arts & Sciences</strong><br />
                        Biology (PhD)<br />
                        Chemistry (PhD)<br />
                        Earth and Planetary Sciences (PhD)<br />
                        Mathematics (PhD)<br />
                        Nanoscience and Microsystems (PhD)<br />
                        Physics (PhD)<br />
                        Statistics (PhD)
                      </p>

                      <a href="http://degrees.unm.edu/grad_programs/explore">UNM PhD. Degrees</a>
                    </div>
                  </div>

                  <?php //Begin Side Menu ?>
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
