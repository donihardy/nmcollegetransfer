<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmmibgimage">
         
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
          <a class="navbar-brand nmmi" href="index.php">NEW MEXICO<br />MILITARY INSTITUTE</a>
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
              <a href="index.php">NMMI</a>
            </li>
            <li>
              TRANSFER INFO
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody">
            <h3>Course Transfer Info</h3>
            
            <h4 id="transcripts">Transcripts</h4>

            <p>All applicants may send partial/unofficial transcripts or report cards to expedite the admissions process and then have official transcripts sent at the completion of the current semester. Junior college applicants must have a final high school transcript showing graduation date and GPA or GED results and transcripts for any college work. Please have transcripts sent directly to our office by the school:</p>
            <p>New Mexico Military Institute-Admissions<br />
              101 W. College Blvd.<br />
              Roswell, NM 88201</p>
              <p>Visit: <a href="http://www.nmmi.edu/admissions/Admissions_Process.htm">Admissions Process</a>
              </p>
              <div><h4 id="tes">Transferable Courses</h4>
                <p>Transfer credits are applicable if the student is able to pass a validation test for the class at the academy. Regardless of how much time you spend at another college, you will still have to complete four years at the academy independent of what you did before or where you went. A 4.0 third-year student at Harvard will still start at the same place as a freshly-graduated high-school student. Even the service academies own prep school students (USAFA, USNA, USMA) do not get time credit.</p>
                <p>Visit: <a href="https://www.nmmi.edu/prep/faq.htm">Transfer Courses</a></p>
                <h4 id="commoncore">Common Core Courses</h4>                  
                <p>Visit: <a href="http://academic.nmmi.edu/preview_program.php?catoid=10&poid=94&hl=general+core&returnto=search">General Common Core Associates of Arts</a><br />
                Visit: <a href="http://academic.nmmi.edu/preview_program.php?catoid=10&poid=95&hl=general+core&returnto=search"> General Education Module-Associates in Science</a>
                <h4 id="actsat">ACT/SAT</h4>
                <p>No information found.</p>
                <h4 id="moreinfo">Request More Info</h4>
                <p>Phone: <a href="1-575-622-6250">(575) 622-6250</a><br />
                  Email: <a href="mailto:admissions@nmmi.edu">admissions@nmmi.edu</a></p>

                  <h4 id="2+2">Transfer Agreements</h4>
                  <p>Carson Newman College will accept transfer students from NMMI without loss of credit toward any degree offered.<br />
                    Visit: <a href="http://www.nmmi.edu/rotc/Pre-NursingProgram.htm">Nursing Program</a></p>
                    <h4 id="dual">High School Dual Enrollment</h4>
                    <p>A high school cadet may be permitted to take college courses concurrently with high school courses with permission of the appropriate Associate Dean and the Vice Dean/High School Principal<br />
                      Visit: <a href="http://academic.nmmi.edu/preview_program.php?catoid=10&poid=96&returnto=865#dual">NMMI Dual Enrollment Page</a></p>
                      
                    </div>
                  </div>
                </div>

                <?php //Begin Side menu ?>
                <?php require '../includes/sidemenu.php'; ?>
                <?php //End Side Menu ?>

                 <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
