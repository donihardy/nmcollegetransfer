<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - NEW MEXICO STATE UNIVERSITY GRANTS</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage grantsbgimage">
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
             VETERANS &#38; ACTIVE DUTY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><h3>Veterans</h3>

          <p>Students with veterans’ benefits may be eligible to receive veteran’s assistance (VA) educational benefits by registering electronically at www.gibill.va.gov. Meet with a Certifying VA Official in Student Services to complete paperwork and register for approved courses every semester.<p/>
            <p>A student receiving VA benefits who is pursuing an associate degree or a certificate offered by NMSU Grants must adhere to the curriculum of that program. Failure to do so will result in the student’s being certified for less than full-time status or becoming liable for an overpayment.</p>
            <h3>Active Duty</h3>
            <p>Active-duty military personnel (Armed Forces), stationed in New Mexico or at Fort Bliss, Texas may complete an “Active Duty Military Waiver” to qualify for in-state tuition. Spouses and minor children of active-duty personnel who are stationed in New Mexico and Fort Bliss, Texas who are not otherwise entitled to claim in-state residency, may apply for in-state tuition by submitting a “Resident Tuition Application for Active-Duty Military” to the NMSU Registrar’s Office.</p>
            <p>Applications are available at the NMSU Registrar’s Office or by contacting the Military Coordinator for Student Success at MSC 3CEL, NMSU, P. O. Box 30001, Las Cruces, NM 88003-8001, or call (575) 646-6216.</p>
            <a href="https://grants.nmsu.edu/students/specific-information/#vets">NMSU Grants Veterans</a><br />
            <a href="https://grants.nmsu.edu/docs/14-16Catalog.pdf">NMSU Grants Catalog</a> - page 22</p>
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
