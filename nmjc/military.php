<?php include '../includes/header.php'; ?>


  <title>NM COLLEGE & TRANSFER 
    - NEW MEXICO JUNIOR COLLEGE</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmjcbgimage">
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
          <a class="navbar-brand cnm" href="index.php">NEW MEXICO<br />JUNIOR COLLEGE</a>
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
              <a href="index.php">NMJC</a>
            </li>
            <li>
             VETERANS &#38; ACTIVE DUTYs
           </li>
         </ol>
       </div>
       <div class="container-fluid">
         <div class="textbody"><h3>Veterans &#38; Active Duty</h3>
          <p>NMJC is fully certified by the state of New Mexico for VA Education Benefits (G.I. Bill). Most NMJC course offerings are approved and meet veteran’s
            educational assistance criteria under federal and state laws.</p>
            <P>Eligible students may apply for VA benefits through the Enrollment Management Office by submitting the proper form. The following forms are
              available:</P>
              <ul><li>Veteran’s Application for Program of Education or Training;</li>
               <li>Entrance or Re-entrance into Training;</li>
               <li>Disabled Veteran’s Application for Vocational Rehabilitation;</li>
               <li>Requests for Approval of School Attendance;</li>
               <li>Requests for Change of Program or School;</li>
               <li>Statement of Dependence;</li>
               <li>Application for Education Assistance; and</li>
               <li>Spouse or Children of Disabled or Deceased Veteran.</li></ul></p>
               <p><a href="http://www.nmjc.edu/aboutnmjc/15-16Catalog.pdf">NMJC Catalog</a>-page 32<br />
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
