<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - NMSU ALAMOGORDO</title>

    
  <body>
    <div class="container-fluid">
      <header class="bgimage alamogordobgimage">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY ALAMOGORDO</a>
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
              <a href="index.php">NMSU ALAMOGORDO</a>
            </li>
            <li>
              ADVISING
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>NMSU Alamogordo Advising <a href="../questions.php#advising"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="geninfo">Advising General Info</h4>
            <p>The Advising Office is in the Student Services building. The Advising Staff is available to help you understand your degree plans and ensure you are registering for the courses you need to graduate. Advisors are available Monday through Friday.</p>
            <p>The beginning of the semester is the busiest time for the Advisors; therefore, mid-semester is a great time to talk to our advisors!
            </p>
            <p><a href="http://nmsua.edu/files/uploads/sites/4/2015/04/advising.pdf">NMSU Alamogordo Advising Checklist</a></p>
            <h4 id="appt">Schedule an Appointment</h4>
            <p><a href="tel:1-575-439-3855">(575) 439-3855</a><br />
              <a href="mailto:advisingNMSUA@nmsu.edu">advisingNMSUA@nmsu.edu</a><br />
              Location: Student Services Building</p>
              <p><a href="http://nmsua.edu/student-services/advising/">NMSU Alamogordo Advising Info</a><br />
                <a href="http://nmsua.edu/student-services/advising/contact-advising/">Contact the Advising Office</a></p>
              </div>
            </div>

             <?php //Begin Side menu ?>
             <?php require '../includes/sidemenu.php'; ?>
             <?php //End Side menu ?>
                               
            <div id="footer">
             <?php require '../includes/footer.php'; ?>
           </div>

           <script src="../js/jquery.min.js"></script>
           <script src="../js/bootstrap.min.js"></script>
           <script src="../js/bootstrap-submenu.min.js" defer></script>
           <script src="../js/navbar.js"></script>
           <script src="../js/script.js"></script>
         </body>
         </html>
