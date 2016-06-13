<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="NM College Transfer 101 statewide website assists students, parents, faculty, staff, advisors to find transfer information and links to all the public New Mexico higher education schools.">
  <meta name="keywords" content="New Mexico, NM, College, University, Transfer, Higher Ed, UNM, ENMU, NMSU, NM Tech, WNMU, NMHU, CNM">
  <meta name="author" content="Doni Hardy">
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
    - ENMU-RUIDOSO</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage enmuruidosobgimage img-responsive">
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
          <a class="navbar-brand enmu" href="index.php">EASTERN NEW MEXICO UNIVERSITY-RUIDOSO</a>
        </div>
        
        <?php //Begin top Nav Bar ?>
        <?php require '../includes/schooltopnav.php'; ?>
        <?php //End top nav ?>
        
        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              ENMU-RUIDOSO
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><img class="schoolimg img-responsive pull-right" src="../images/enmuruidoso.jpg"  alt="Responsive Image" ><p>The overarching mission of ENMU-Ruidoso is to enhance the lives of our students and the communities we serve, now and into the future.
            <p>Eastern New Mexico University-Ruidoso Branch Community College combines a traditional learning environment with twenty-first century instructional technology to provide an enhanced educational experience. ENMU-Ruidoso emphasizes liberal learning, freedom of inquiry, cultural diversity and whole student life. Scholarships, cultural enrichment, excellent teaching and enriched learning define the college community's relationship and contributions.</p>
            <p>The mission of ENMU-Ruidoso Branch Community College includes seven purposes: </p>
            <p><ul><li>To offer general academic studies for students wishing to transfer to a University</li>
             <li>To offer career and technical education programs leading to gainful employment for students in their chosen field</li>
             <li>To offer a dual credit enrollment Early College Program for qualified high school students</li>
             <li>To offer workforce education and training services and provide institutional leadership in the economic development of the region</li>
             <li>To offer programs of instruction leading to Associate degrees and Certificates of Completion</li>
             <li>To offer lifelong learning opportunities for all citizens through continuing education and community service programs</li>
             <li>To offer adult basic education for those wishing to achieve literacy skills, completion of a high school equivalency diploma and English proficiency</li></ul></p>                 
             <p>ENMU-Ruidoso Focus</p>
             <p><ul><li>Prepare students for meaningful careers and advanced study</li>
              <li>Impart citizenship and leadership for the betterment of the community</li>
              <li>Support and expand the role of higher education and excellent teaching</li>
              <li>Empower citizens to respond to a rapidly changing world</li>
              <li>Contribute to the economic viability and well-being of our community</li></ul>
            </p>
            <p><a href="http://ruidoso.enmu.edu/index.php/about-us/mission">ENMU-Ruidoso Website</a><br />
              <a href="http://ruidoso.enmu.edu/index.php/facility-and-book-store/campus-map">Map</a></p>
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
