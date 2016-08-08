<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage grantsbgimage">
         
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY GRANTS</a>
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
              <a href="index.php">NMSU GRANTS</a>
            </li>
            <li>
              TRANSFER INFO
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Course Transfer Info</h3>
            <p></p>
            <h4 id="transcripts">Transcripts</h4>
            <p>After submitting your admissions application, you need to contact your high school and all previously-attended colleges and order official transcripts. They must be mailed directly to<br />
              NMSU Grants<br />
              1500 N. Third Street<br />
              Grants, NM 87020.</p>
              <p>If you have a GED, all transcripts must be ordered through Diploma Sender at <a href="http://www.diplomasender.com">www.diplomasender.com.</a></p>
              <p>All requests for transcripts or questions about transcripts (official and unofficial) must be handled through the NMSU Las Cruces campus.<br />
                Visit: <a href="http://registrar.nmsu.edu/transcripts/">NMSU Registrar</a></p>
                <div><h4 id="tes">Transferable Courses</h4>
                  <p>A transferable degree program is designed specifically for two-year degrees to transfer directly to the related four-year Bachelors degree. Transferring the following two-year degrees to four-year degrees at NMSU or UNM should be relatively easy:</p>

                  <ul><li>Associate of Arts</li>
                    <li>Criminal Justice</li>
                    <li>Science</li>
                    <li>Education</li>
                    <li>General Engineering</li>
                    <li>Early Childhood Education</li>
                    <li>Pre-Business</li>
                    <li>Social Services</li></ul>
                    Visit: <a href="https://grants.nmsu.edu/students/transfers/">NMSU Grants Transfers</a>
                    <h4 id="commoncore">Common Core Courses</h4>
                    Visit: <a href="http://www.hed.state.nm.us/institutions/general-ed-core-course-transfer-curriculum.aspx">General Ed Core Course Transfer Curriculum</a>
                    <h4 id="actsat">ACT/SAT</h4>
                    <p>All first-time students are required to take the ACT Compass Placement test and provide a short writing sample. The results of this test will indicate your proficiency in Math and English and determine which classes will be best for you. If you took the ACT Test in High School, provide your scores and an advisor will determine if you may benefit from re-testing in Math and English. See an Advisor in Student Services to pick up your “Test Ticket”. If you want to participate in a completely online degree program, contact Student Services for placement alternatives.</p>
                    <h4 id="moreinfo">Request More Info</h4>
                    <p>Transfer Advisor:<br />
                      Visit: <a href="https://grants.nmsu.edu/students/transfers/">Transfers</a>

                      <h4 id="2+2">Transfer Agreements</h4>
                      <p>Transferring the following two-year degrees to four-year degrees at NMSU or UNM should be relatively easy:</p>

                      <ul><li>Associate of Arts</li>
                        <li>Criminal Justice</li>
                        <li>Science</li>
                        <li>Education</li>
                        <li>General Engineering</li>
                        <li>Early Childhood Education</li>
                        <li>Pre-Business</li>
                        <li>Social Services</li></ul>
                        <h4 id="dual">High School Dual Enrollment</h4>
                        The Dual Credit Program allows eligible high school students to enroll in college-level courses and earn credits at both the high school and college levels at the same time.<br />
                        Visit: <a href="https://grants.nmsu.edu/students/dual-credit/">NMSU Grants Dual Enrollment Page</a>
                        
                      </div>
                    </div>
                  </div>
                  
                  <?php //Begin Side menu ?>
                  <?php require '../includes/sidemenu.php'; ?>
                  <?php //End Side Menu ?>
 <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>