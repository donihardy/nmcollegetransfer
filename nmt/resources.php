 <?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmtbgimage">
         
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
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <h4 id="housing">Academic</h4>
          <p>The OSL is the Office for Student Learning. We’ve been working since 2013 to provide non-departmental tutoring for a wide range of classes. Tutors are undergraduate students and tutoring is open to everyone. We offer tutoring for math, chemistry, and physics daily, and you can request a time to be scheduled with a tutor or request a tutor for a specific class if we do not already have one available.<br />
            Visit: <a href="http://www.nmt.edu/office-for-student-learning ">Office for Student Learning</a></p>
            <p>The New Mexico Tech Information Technology and Communications Department is here to serve the academic computing needs of the campus community.<br />
              Visit: <a href="http://infohost.nmt.edu/tcc/">NM Tech Computer Center</a></p>

            </div>
          </div>

          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
 <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
