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
    - NEW MEXICO JUNIOR COLLEGE</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage nmjcbgimage">
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
          <a class="navbar-brand cnm" href="index.php">NEW MEXICO<br />JUNIOR COLLEGE</a>
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
              <a href="index.php">NMJC</a>
            </li>
            <li>
              DEGREE OPTIONS
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h2>Degree Options</h2>
            <h4 id="basiccore">Basic Core</h4>
            <p>The Lower Division General Education Common Core (NMGECC)</p>
            <p><strong>Area I: Communications (Select 9 semester hours; 3 hours must be selected from each category)</strong>
             <ol type="a"><li>College-Level English Composition</li>
               <li>College-Level Writing (a second course building on the above Comp course)</li>
               <li>Oral Communication</li></ol></p>
               <p><strong>Area II: Mathematics (Select 3 semester hours)</strong>
                 <ol type="a"><li>College Algebra</li>
                   <li>Calculus</li>
                   <li>Other College-Level Mathematics</li></ol></p>
                   <p><strong>Area III: Laboratory Science (Select 8 credit hours)</strong>
                     <ol type="a"><li>General Biology, with laboratory</li>
                       <li>General Chemistry, with laboratory</li>
                       <li>General Physics, with laboratory</li>
                       <li>Geology/Earth Science, with laboratory</li>
                       <li>Astronomy, with laboratory)</li></ol></p>
                       <p><strong>Area IV: Social and Behavioral Sciences (Select 6-9 credit hours)</strong>
                         <ol type="a"><li>Economics (macro- or micro-)</li>
                           <li>Introductory Political Science</li>
                           <li>Introductory Psychology</li>
                           <li>Introductory Sociology</li>
                           <li>Introductory Anthropology</li></ol></p>
                           <p><strong>Area V: Humanities and Fine Arts (Select 6-9 credit hours)</strong><br />
                             <ol type="a"><li>Introductory History Survey</li>
                               <li>Introductory Philosophy</li>
                               <li>Introductory Course in History, Theory, or Aesthetics of the Arts or Literature</li></ol></p>
                               <p><strong>Total to be selected: 35 credit hours</strong><br />
                                <a href="http://www.nmjc.edu/academics/collegecatalog.aspx">NMJC Catalog</a></p>
                                <h4 id="as">Certificates</h4>
                                <p>Alternative Energy Technician<br />
                                  Energy Technician<br />
                                  Nuclear Technician<br />
                                  Radiological Control Technician</p>
                                  <p><a href="http://www.nmjc.edu/academics/programs/academicdegrees.aspx">NMJC Certificates</a></p>
                                  <h4 id="as">Associates Degrees</h4>
                                  <p>Science AS<br />
                                    Computer Information Systems AS<br />
                                    Energy Technology AS<br />
                                  </p>
                                  <a href="http://www.nmjc.edu/academics/programs/academicdegrees.aspx">NMJC Associate's degrees</a>

                                </div>
                              </div>
                          <?php //Begin Side Menu ?>
                              <?php require '../includes/sidemenu.php'; ?>
                              <!-- End Side Menu -->
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
