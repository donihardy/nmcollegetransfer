 <?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmtbgimage">
         
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
             PROFILE
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>New Mexico Tech</h3>
          <h6>801 Leroy Pl | Socorro, New Mexico 87801 | <a href="tel:1-575-835-5434">575.835.5434</a></h6><br />
        <table class="profile">
          <tr><td><h4>Website:</h4></td><td><a href="http://www.nmt.edu">www.nmt.edu</a></td></tr>
          <tr><td><h4>Type:</h4></td><td>4-year, Public</td></tr>
          <tr><td ><h4>Awards offered:</h4></td>
            <td>Associate's degree
              <br />Bachelor's degree
              <br />Master's degree
              <br />Post-master's certificate
              <br />Doctor's degree - research/scholarship
              <br />Doctor's degree - professional practice</td></tr>
              <tr><td><h4>Campus setting:</h4></td><td>Town: Remote</td></tr>
              <tr><td><h4>Campus housing:</h4></td><td>Yes</td></tr>
              <tr><td><h4>Student population:</h4></td><td>2,127 (1,633 undergraduate)</td></tr>
              <tr><td><h4>Student-to-faculty ratio:</h4></td><td>14 to 1</td></tr>
            </table>
          <p><a href="http://nces.ed.gov/collegenavigator/?q=new+mexico+tech&s=all&id=187967">College Navigator</a></p>
            </div>
          </div>

          <?php //Begin Side menu ?>
          <?php require '../includes/sidemenu.php'; ?>
          <?php //End Side menu ?>
          
 <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
