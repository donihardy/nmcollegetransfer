<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage gallupbgimage">
         
        <a href="../index.php"><img id="LogoImg" src="../images/NMCollegeTransfer2.png" class="img-responsive" alt="NM College Transfer 101 Logo"></a>
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
          <a class="navbar-brand gallup" href="index.php">UNIVERSITY OF NEW MEXICO<br />GALLUP</a>
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
              <a href="index.php">UNM GALLUP</a>
            </li>
            <li>
             PROFILE
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><h3>University of New Mexico - Gallup</h3>
          <h6>705 Gurley Ave | Gallup, New Mexico 87301 | <a href="tel:1-505-863-7500">(505) 863-7500</a></h6><table class="profile">
          <tr><td><h4>Website:</h4></td><td><a href="http://www.gallup.unm.edu/">www.gallup.unm.edu</a></td></tr>
          <tr><td><h4>Type:</h4></td><td>2-year, Public</td></tr>
          <tr><td ><h4>Awards offered:</h4></td>
            <td>Certificates<br />
              Associate's degree
            </td></tr>
            <tr><td><h4>Campus setting:</h4></td><td>Rural: Fringe</td></tr>
            <tr><td><h4>Campus housing:</h4></td><td>No</td></tr>
            <tr><td><h4>Student population:</h4></td><td>2,384</td></tr>
            <tr><td><h4>Student-to-faculty ratio:</h4></td><td>18 to 1</td></tr>
          </table>
          Visit: <a href="http://nces.ed.gov/collegenavigator/?q=new+mexico&s=NM&l=91+92+93+94&ic=1+2&id=187958">College Navigator</a></div>
        </div>

        <?php //Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

          <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
