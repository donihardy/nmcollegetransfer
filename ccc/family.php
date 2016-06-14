<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - CLOVIS COMMUNITY COLLEGE</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage clovisccbgimage">
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
          <a class="navbar-brand ccc" href="index.php">CLOVIS COMMUNITY<br />COLLEGE</a>
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
              <a href="index.php">CCC</a>
            </li>
            <li>
             FAMILY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Family Life</h3>
          <h4 id="housing">Housing</h4>
          <p>CCC does not have on campus housing.<br />
            <a href="http://nnmc.edu/home/student-gateway/student-housing/">Housing Options</a></p>
            <h4 id="childcare">Child Care</h4>
            <p><strong>Clovis Community College Child Development Lab School</strong></p>
            <p>The Child Development Center opened in fall of 2007. It includes 2 lecture rooms, 2 observation rooms and the 3 classroom lab school. The six million dollar facility was funded through a collaboration with the State Department of Education, Clovis Unified School District, State Center Community College District, and First Five of Fresno and serves a dual role; providing high quality child development and child-care services for children and as a model demonstration site for students studying child development. The lab school is accredited by the National Association for the Education of Young Children.</p>
            <p><a href="http://www.cloviscenter.com/index.aspx?page=76">Clovis Community College Child Development Lab School</a></p>
            <p><strong>Kids College</strong></p>
            <p>CCC's Kids College for the Summer of 2015 has something for every kid, ranging from health and fitness classes to hands-on science and art. Classes fill up quickly and space is limited in each session.</p>
            <p><a href="http://www.clovis.edu/kidscollege/index.aspx">Kids College</a></p>
            <h4 id="parent">Parent Info</h4>
            <p> No information found.<br />
            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          
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
