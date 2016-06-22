<?php include '../includes/header.php'; ?>


 <title>NM COLLEGE &#38; TRANSFER 
  - SANTA FE COMMUNITY COLLEGE</title>

  <body>
    <div class="container-fluid">
      <header class="bgimage sfccbgimage">
        <img class="container-fluid">
        <!--<div class="title">NM COLLEGE TRANSFER</div> -->
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
          <a class="navbar-brand sfcc" href="index.php">SANTA FE<br />COMMUNITY COLLEGE</a>
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
            <a href="index.php">SFCC</a>
          </li>
          <li>
           PROFILE
         </li>
       </ol>
     </div>
     <div class="container-fluid">
      <div class="textbody"><table class="profile"><th colspan="2"><h3>Santa Fe Community College</h3>
        <h6>6401 Richards Ave | Santa Fe, New Mexico 87508 | <a href="tel:1-505-428-1000">(505) 428-1000</a></h6></th>
        <tr><td><h4>Website:</h4></td><td><a href="http://www.sfcc.edu/">www.sfcc.edu/</a></td></tr>
        <tr><td><h4>Type:</h4></td><td>2-year, Public</td></tr>
        <tr><td ><h4>Awards offered:</h4></td>
          <td>Certificates<br />
            Associate's degree
          </td></tr>
          <tr><td><h4>Campus setting:</h4></td><td>Rural: Fringe</td></tr>
          <tr><td><h4>Campus housing:</h4></td><td>No</td></tr>
          <tr><td><h4>Student population:</h4></td><td>5,475</td></tr>
          <tr><td><h4>Student-to-faculty ratio:</h4></td><td>15 to 1</td></tr>
        </table>
        <a href="http://nces.ed.gov/collegenavigator/?q=santa+fe&s=NM&l=91+92+93+94&ic=1+2&id=188137">College Navigator</a></div>
      </div>

      <?php //Begin Side menu ?>
      <?php require '../includes/sidemenu.php'; ?>
      <?php //End Side menu ?>

       <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
