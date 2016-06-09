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
    - CNM</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="bgimage cnmbgimage">
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
          <a class="navbar-brand cnm" href="index.php">CENTRAL NEW MEXICO COMMUNITY COLLEGE</a>
        </div>

        <!--Begin top nav-->

        
        <?php require '../includes/schooltopnav.php'; ?>

        <!--End top nav-->

        <div id="breadcrumb">
          <ol class="breadcrumb">
            <li>
              <a href="../index.php">HOME</a>
            </li>
            <li>
              <a href="index.php">CNM</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            Pell Grants are the foundation of federal student financial aid, to which aid from other federal and nonfederal sources might be added. Grant amounts can change yearly. If you're eligible for a Pell Grant, you will receive the full amount you qualify for. The amount of other student aid you might qualify for does not affect the amount of your Pell Grant. <br/>
            <p><a href="https://www.cnm.edu/depts/financial-aid/grants/pell-grant">CNM Financial Aid Pell Grants</a></p>
            <h4 id="pellgrant">Loans</h4>
            <ul><li>Complete your FAFSA</li>
              <li>To receive a student loan, you must be enrolled in 6 credit hours. Congress also establishes loan limits that may be prorated depending on your student classification.</li>
              <li>If you are a first time borrower, you will need to complete the Entrance Counseling and sign a Master Promissory Note.</li>
              <li>If you qualify for a Subsidized Stafford Loan, you may borrow up to $3,500 per year as first-year student and $4,500 per year as second-year student.</li></ul>
              <p><a href="https://www.cnm.edu/depts/financial-aid/loans">CNM Financial Aid Loans</a></p>
              <h4 id="scholarship">Scholarships</h4>
              <p>CNM offers a variety of scholarship opportunities for both new and continuing students. We encourage you to review these opportunities for additional educational funds.</p>
              <p><a href="https://www.cnm.edu/depts/financial-aid/scholarships">CNM Financial Aid Scholarships</a></p>
              <h4 id="deadlines">Deadlines</h4>
              <p><b>Priority Date: May 1</b> - Receive the most financial aid funding based on eligibility. Apply Early!!</p>
              <p><a href="https://www.cnm.edu/depts/financial-aid/resources/apply-for-financial-aid">CNM Financial Aid Deadlines</a></p>
              <h4 id="schoolcode">CNM School Code</h4>
              <p><strong>004742</strong></p>
            </div>
          </div>

          <!-- Side menu -->
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
