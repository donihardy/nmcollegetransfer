<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER 
  - CENTRAL NEW MEXICO COMMUNITY COLLEGE</title>

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

        <?php //Begin top Nav Bar ?>
        <?php require '../includes/schooltopnav.php'; ?>
        <?php //End Top Nav Bar ?>

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
