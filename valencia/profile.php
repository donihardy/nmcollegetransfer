<?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage valenciabgimage">
         
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
          <a class="navbar-brand valencia" href="index.php">UNIVERSITY OF NEW MEXICO<br />VALENCIA</a>
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
              <a href="index.php">UNM VALENCIA</a>
            </li>
            <li>
             PROFILE
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><h3>UNM Valencia</h3>
          <h6>280 La Entrada | Los Lunas, New Mexico 87031 | <a href="tel:1-505-925-8500">(505) 925-8500</a></h6><table class="profile">
          <tr><td><h4>Website:</h4></td><td><a href="http://vc.unm.edu/">vc.unm.edu/</a></td></tr>
          <tr><td><h4>Type:</h4></td><td>2-year, Public</td></tr>
          <tr><td ><h4>Awards offered:</h4></td>
            <td>Certificate
              <br />Associate's degree
            </td></tr>
            <tr><td><h4>Campus setting:</h4></td><td>Rural: Fringe</td></tr>
            <tr><td><h4>Campus housing:</h4></td><td>No</td></tr>
            <tr><td><h4>Student population:</h4></td><td>2,321</td></tr>
            <tr><td><h4>Student-to-faculty ratio:</h4></td><td>22 to 1</td></tr>
          </table>
          <p>Visit: <a href="http://nces.ed.gov/collegenavigator/?q=valencia&s=NM&l=91+92+93+94&ic=1+2&id=188049">College Navigator</a></p></div>
        </div>

        <?php //Begin Side menu ?>
        <?php require '../includes/sidemenu.php'; ?>
        <?php //End Side Menu ?>

          <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
