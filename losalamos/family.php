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
    - UNM LOS ALAMOS</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage losalamosbgimage">
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
          <a class="navbar-brand losalamos" href="index.php">UNIVERSITY OF NEW MEXICO<br />LOS ALAMOS</a>
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
              <a href="index.php">UNM LOS ALAMOS</a>
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
          <p>It is the goal of UNM-LA to provide the safest, most affordable housing options possible for our students. In our ongoing effort to accommodate the housing needs of our students, we have partnered with the Los Alamos Chamber of Commerce to provide an up-to-date listing of off-campus housing resources.</p>

          <p>A list of available housing options submitted by rental property owners is available <a href="http://losalamos.unm.edu/students/housing/listings/index.html">here</a>.</p>

          <p>The Los Alamos Chamber of Commerce can also provide direct resources and information at their location:<br /> 109 Central Park Square<br />Los Alamos, New Mexico 87544</p>
          <p><a href="http://losalamos.unm.edu/students/housing/">Housing</a></p>
          <h4 id="childcare">Child Care</h4>
          <p>Enrichment activities will be provided on site for children in grades K-6. Snacks will be provided. Please call Community Education at 662-0346 to sign up.</p>
          <p>Childcare for children who are preschool age or younger will be provided at the Ark Child Development Center. Please call the Ark at 662-4822 to sign up.</p>
          <p><a href="http://losalamos.unm.edu/community-education/kids-are-worth-it.html">Child Care</a></p>
          <h4 id="parent">Parent Info</h4>
          <p>At UNM Los Alamos, we understand that parents and families play an integral part of the college experience.</p>
          <p><a href="http://losalamos.unm.edu/community/parents-families/index.html">UNM Los Alamos Parents &#38; Families</a>
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
