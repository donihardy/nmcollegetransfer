 <?php include '../includes/header.php'; ?>

  <body>
    <div class="container-fluid">
      <header class="bgimage nmtbgimage">
         
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
          <a class="navbar-brand nmt" href="index.php">NEW MEXICO TECH</a>
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
              <a href="index.php">NMT</a>
            </li>
            <li>
              FINANCIAL AID
            </li>
          </ol>
        </div>
        <div class="container-fluid">
          <div class="textbody"><h3>Financial Aid <a href="../questions.php#questions"><img class="question" src="../images/questionmark.png" alt="question mark image"></a></h3>
            <h4 id="pellgrant">Pell Grant</h4>
            <p>Grants are funds that do not need to be repaid. Amounts based on federal guidelines and allocations. </p>
            <p>Visit: <a href="https://www.nmt.edu/grants">NMT Financial Aid Pell Grant Info</a></p>
            
            <h4 id="scholarship">Scholarships</h4>
            <p>New Mexico Tech gives academic scholarships, or merit-based aid, solely on the basis of academic achievement. Over 40 percent of New Mexico Tech undergraduates receive merit-based aid. Although family financial evaluations have no effect on academic scholarship decisions at Tech, many scholarship students also qualify for need-based financial aid.</p>
            <p>Visit: <a href="https://www.nmt.edu/scholarships-financial-aid ">NMT Scholarship Info</a></p>
            <h4 id="loan">Loans</h4>
            <p>Loans available at NM Tech:</p>
              <ul><li>Perkins Loan</li>
                <li>Federal Subsidized Stafford Loan</li>
                <li>Federal unsubsidized Stafford Loan</li>
                <li>Federal Parent Loan for Undergraduate Student (PLUS)</li></ul>
                <p>Visit: <a href="https://www.nmt.edu/loans">NMT Financial Aid Loan Info</a></p>
                <h4 id="deadlines">Deadlines</h4>
                <p>Priority Deadline every year is March 1</p>
                <p>To be considered eligible for scholarships, entering students must file the Application for Undergraduate Admission and Scholarships and be accepted before March 1. The deadline for scholarships for entering freshmen is March 1, and for incoming transfer students April 1. </p>
                <h4>NMT Federal School Code:</h4><strong> 002654 </strong>
                <p>Visit: <a href="https://www.nmt.edu/financial-aid-financial-aid">NMT Financial Aid Applying Info</a>
                  <br />Visit: <a href="https://fafsa.gov/">FAFSA (Free Application for Student Aid) on the Web</a></p>

                </div>
              </div>

              <?php //Begin Side menu ?>
              <?php require '../includes/sidemenu.php'; ?>
              <?php //End Side Menu ?>

               <div class="clear"></div>
    <div class="container">
      <?php include '../includes/schoolfooter.php'; ?>
