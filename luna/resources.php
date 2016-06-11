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
    - LCC</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage lunabgimage">
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
          <a class="navbar-brand" href="index.php">LUNA COMMUNITY COLLEGE</a>
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
              <a href="index.php">LCC</a>
            </li>
            <li>
             RESOURCES
           </li>
         </ol>
       </div>
       <div class="container-fluid">
        <div class="textbody">
          <h3>Resources</h3>
          <p><a href="https://www.luna.edu/disability-support-services/">Luna Community College Disability Support</a></p>
          <p>Academic Center for Excellence (ACE)
            ACE provides integrated student support services to students in science, technology, engineering and math, collectively referred to as STEM. Students do NOT have to be STEM majors to access the ACE lab services.<br />
            <a href="https://www.luna.edu/acelab/">ACE Lab</a></p>
            <a href="https://www.luna.edu/lrc/">LCC Learning Resource Center</a><br />
            <a href="https://www.luna.edu/esl/">English as a Second Language</a><br />
            <a href="https://www.luna.edu/Culinary-Arts-Club/">Activities and Clubs: Culinary Arts Club</a><br />
            <a href="https://www.luna.edu/LCC-Car-Club/">LCC Car Club</a><br />
            <a href="https://www.luna.edu/luna_fabricators/">Luna Fabricators</a><br />
            <a href="https://www.luna.edu/phi_theta_kappa/">Phi Theta Kappa</a><br />
            <a href="https://www.luna.edu/Skills-USA-Automotive-Technologies/">SkillsUSA Automotive Technologies</a><br />
            <a href="https://www.luna.edu/Skills-USA-Building-Technologies/">SkillUSA Building Technologies</a><br />
            <a href="https://www.luna.edu/Student-Dental-Association/ ">Student Dental Association</a><br />
            <a href="https://www.luna.edu/student_nursing/">Student Nursing Association (SNA)</a><br />
            <a href="https://www.luna.edu/student_government/">Student Government</a>
          </p>
        </div>
      </div>
     
    <?php //Begin Side menu ?>
    <?php require '../includes/sidemenu.php'; ?>
    <?php //End Side menu ?>
    
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
