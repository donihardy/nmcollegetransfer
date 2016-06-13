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
    - SAN JUAN COLLEGE</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage sjcbgimage">

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
          <a class="navbar-brand" href="index.php">SAN JUAN COLLEGE</a>
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
              <a href="index.php">SJC</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>The Pell grant is the foundation of federal student aid. Pell Grants are awarded to undergraduate students- those who have not yet earned a Bachelor’s Degree. Eligibility is determined through the FAFSA application which is submitted annually. If eligible, awards range from $300 to $5,775. The award amount is calculated on the student’s Expected Family Contribution (EFC), the cost of attendance at the institution, semesters enrolled, and the number of hours enrolled. Students must also be meeting Satisfactory Academic Progress (SAP) standards.</p>
            <p><a href="http://www.sanjuancollege.edu/student-services/departments/financial-aid/types-of-funding/pell-grant/">San Juan College Financial Aid Pell Grant Info</a></p>
            
            <h4 id="scholarship">Scholarships</h4>
            <p>San Juan College Foundation provides scholarships to deserving students each semester. Complete the <a href="http://www.sanjuancollege.edu/documents/student-services/financial-aid1/16-17_foundation_scholarship_application.pdf">application</a> to be considered for one of the 700 scholarships awarded each semester.</p>
            <p>General Scholarships are awarded through a variety of sources to students.  San Juan College encourages all students to seek scholarships.</p>
            <p>Numerous scholarships are available and are waiting for Native American students to apply. The eligibility requirements vary from scholarship to scholarship as well as the deadlines for filing.</p>
            <p><a href="https://www.sanjuancollege.edu/student-services/departments/financial-aid/types-of-funding/">San Juan College Scholarship Info</a></p>
            <h4 id="loan">Loans</h4>
            <p>Student Loans are a form of financial aid that can help you pay for tuition, books, and living expenses while you’re in school.  San Juan College offers four different types of loans: Federal Direct Subsidized Loans, Unsubsidized Direct Loans, Federal PLUS Loans, and Private Education Loans.</p>
            <p><a href="http://www.sanjuancollege.edu/student-services/departments/financial-aid/types-of-funding/student-loans/">San Juan College Financial Aid Loan Info</a></p>
            <h4 id="deadlines">Deadlines</h4>
            <p>Federal Aid/Pell Grant - April 1<br />
              Foundation Scholarships - March 1</p>
              <p><h4>SCHOOL Federal School Code:</h4><strong> 002660 </strong></p>
              <p><a href="http://www.sanjuancollege.edu/student-services/departments/financial-aid/steps-to-apply/">SCHOOL Financial Aid Applying Info</a>
                <br /><a href="https://fafsa.gov/">FAFSA (Free Application for Student Aid) on the Web</a></p>

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
