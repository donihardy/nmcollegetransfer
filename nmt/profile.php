<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap-submenu.min.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/school.css">
  <link rel='shortcut icon' type='image/x-icon' href="../images/favicon.ico" />
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-78535673-1', 'auto');
    ga('send', 'pageview');

  </script>

  <title>NM COLLEGE & TRANSFER 
    - NMT</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmtbgimage">
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
        <div class="textbody"><table class="profile"><th colspan="2"><h3>New Mexico Tech</h3>
          <h6>801 Leroy Pl | Socorro, New Mexico 87801 | <a href="tel:1-575-835-5434">575.835.5434</a></h6></th>
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
            </table></div>
          </div>

          <?php //Begin Side menu ?>
         <?php require '../includes/sidemenu.php'; ?>


          <!--End Side Menu-->

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
