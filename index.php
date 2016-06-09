<?php
/* $siteroot points to the development folder.
   Reset it to an empty string when deploying the live site. */
$siteroot = '';
// date_default_timezone_set('America/Los_Angeles');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="NM College Transfer 101 statewide website assists students, parents, faculty, staff, advisors to find transfer information and links to all the public New Mexico higher education schools.">
  <meta name="keywords" content="New Mexico, NM, College, University, Transfer, Higher Ed, UNM, ENMU, NMSU, NM Tech, WNMU, NMHU">
  <meta name="author" content="Doni Hardy">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-submenu.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/styles1.css">
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78535673-1', 'auto');
  ga('send', 'pageview');

</script>
</style>
<link rel='shortcut icon' type='image/x-icon' href="images/favicon.ico" />
<title>NM COLLEGE & TRANSFER 
</title>
</head>
<body >
  <?php include 'includes/slider.php'; ?>
  <?php require 'includes/topnav.php'; ?>


  <ol class="breadcrumb">
    <li>
      <!--<a href="#">Home</a>-->
    </li>

  </ol>

  <div class="textbody container-fluid">
    <p>Welcome to NM College & Transfer. This website is designed for New Mexico students and families looking for information about New Mexico schools.</p>
    <p>Students and families can learn more about the four year and two year schools in New Mexico.  Learn about the degrees offered and the services provided at each school.  Scroll through the lists of schools and visit the map to find the campus close to you.</p>
    <p>This site is designed as a collection of information and links that are helpful for any student exploring attending college for the first time, students interested in transferring from community college to a four year college; students taking classes while still in High school or curious about options after leaving High School.</p>
    <p>We hope you find the perfect school and degree program.  Please provide feedback for improvements or questions that we did not think about for college going students.</p>
    <br /><p><i>Bienvenidos al sitio de transferencia a universidades en Nuevo México. Este sitio es diseñado para estudiantes, papás, facultad, y otras personas para encontrar información sobre transferencia a todas las universidades de Nuevo México. El sitio será actualizado periódicamente.</i></p>
    <p><a href="images/nm_map_schools.jpg">NM Map</a></p>
  </div>
  <div class="flowchart">
   <img class="schoolimg img-responsive" src="images/flowchart.jpg" alt="Flowchart">
 </div>


 <div class="clear"></div>
 <div class="container">
  <?php include 'includes/footer.php'; ?>

</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-submenu.min.js" defer></script>
<script src="js/navbar.js"></script>
<script src="js/script.js"></script>
</body>
</html>
