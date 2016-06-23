<?php include '../includes/header.php'; ?>


<title>NM COLLEGE &#38; TRANSFER 
  - NEW MEXICO HIGHLANDS UNIVERSITY</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmhubgimage">
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
          <a class="navbar-brand nmhu" href="index.php">NEW MEXICO<br />HIGHLANDS UNIVERSITY</a>
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
              <a href="index.php">NMHU</a>
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
          <p>Life in the residence halls is often an important part of the total college
            experience. Students interested in making new friends, being
            close to classes, the library and on-campus activities, should consider
            living on campus in the residence halls. Students have a variety of
            choices when considering an on-campus residence. There are suitestyle
            residences and more traditional halls with both private and
            shared rooms; something for everyone</p>
            <p><a href="http://www.nmhu.edu/highlands-university-housing/">Website</a></p>
            <h4 id="childcare">Child Care</h4>
            <p><a href="tel:1-505-454-3250">(505) 454-3250<br />
              <a href="http://www.nmhu.edu/wp-content/uploads/2014/08/002420-catalog_unde-713201142520.pdf">Child Care</a></p>
              <h4 id="parent">Parent Info</h4>
              <p><a href="http://www.nmhu.edu/alumnifoundation/nmhu-parents-club/">NMHU Parents Club</a></p>
              <p><a href="http://its.nmhu.edu/IntranetUploads/003477-15-17_catalo-925201511905.pdf">Catalog</a></p>
            </div>
          </div>
          
          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
          
          <div class="clear"></div>
          <div class="container">
     <?php include '../includes/schoolfooter.php'; ?>
