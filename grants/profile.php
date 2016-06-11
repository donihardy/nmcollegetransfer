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
    - NEW MEXICO STATE UNIVERSITY GRANTS</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage grantsbgimage">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY GRANTS</a>
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
              <a href="index.php">NMSU GRANTS</a>
            </li>
            <li>
             PROFILE
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><table class="profile"><th colspan="2"><h3>NMSU Grants</h3>
          <h6>1500 N. Third Street | Grants, New Mexico 87020 | <a href="tel:1-505-287-6678">(505) 287-6678</a></h6></th>
          <tr><td><h4>Website:</h4></td><td><a href="http://grants.nmsu.edu/">grants.nmsu.edu/</a></td></tr>
          <tr><td><h4>Type:</h4></td><td>2-year, Public</td></tr>
          <tr><td ><h4>Awards offered:</h4></td>
            <td>Certificate<br />
              Associate's degree
            </td></tr>
            <tr><td><h4>Campus setting:</h4></td><td>Town: Remote</td></tr>
            <tr><td><h4>Campus housing:</h4></td><td>No</td></tr>
            <tr><td><h4>Student population:</h4></td><td>942</td></tr>
            <tr><td><h4>Student-to-faculty ratio:</h4></td><td>16 to 1</td></tr>
          </table>
          <a href="http://nces.ed.gov/collegenavigator/?q=grants&s=NM&l=91+92+93+94&ic=1+2&id=188021">College Navigator</a></div>
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
