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
    - NEW MEXICO STATE UNIVERSITY DO&#209;A ANA</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage donaanabgimage">
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
          <a class="navbar-brand nmsu" href="index.php">NEW MEXICO STATE<br />UNIVERSITY DO&#209;A ANA</a>

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
              <a href="index.php">NMSU DO&#209;A ANA</a>
            </li>
            <li>
             VETERANS &#38; ACTIVE DUTY
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody"><h3>Veterans &#38; Active Duty</h3>

          <p>The Veterans Services Office at the Do&#241;a Ana Community College works in partnership with the Veterans Administration to assist veterans and dependents eligible to participate in the Montgomery GI Bill Education Benefits Program.<p/>
            <p>To apply for the first time or if you have not used your VA educational benefits within a year, complete a VA application form and submit all completed applications to the DACC Veterans Programs Office.  All applications are sent the VA Regional Office for processing.  All incomplete applications will not be processed and you will not be eligible for benefits.</p>

            <p>Use the following application forms:<br />

             <ul><li>22-1990 for veterans</li>
               <li>27-5490 for dependents</li></ul>
               <p>The VA application and other forms are available at the DACC Veterans Programs Office or you may apply online at www.gibill.va.gov. It may take 8 to 10 weeks to process at the VA Regional Office, so apply early.</p>

               <p>The amount of benefits you receive is determined by the Department of Veteran Affairs and is based upon on the number of credit hours for which  you are enrolled.</p>
               <a href="http://dacc.nmsu.edu/admissions/veterans-programs/">NMSU Do&#241;a Ana Veteran Programs</a>

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
