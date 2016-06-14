<?php include '../includes/header.php'; ?>


<title>NM COLLEGE & TRANSFER-NEW MEXICO JUNIOR COLLEGE</title>

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
            FINANCIAL AID
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="textbody"><h3>Financial Aid <a href="../questions.php#financialaid"><img class="question" src="../images/questionmark.png"></a></h3>
          <h4 id="pellgrant">Pell Grant</h4>
          <P>The three types of grants available at NMJC are Pell Grants, SEOG and NMSIG.</p>
            <p><a href="http://www.nmjc.edu/studentservices/financialaid/scholarshipsandgrants.aspx">NMJC Financial Aid Pell Grants</a></p>
            <h4 id="pellgrant">Loans</h4>
            <p>The New Mexico Junior College participates in the Direct Lending Program, offering subsidized and unsubsidized loans to eligible students.</p>

            <p>The Direct Loan Program at New Mexico Junior College is a three step process. Feel free to contact us at <a href="1-575-392-5172">(575) 392-5172</a> for additional information or assistance.</p>
            <p><a href="http://www.nmjc.edu/studentservices/financialaid/loans.aspx">NMJC Financial Aid Loans</a></p>
            <h4 id="scholarship">Scholarships</h4>
            <p>Scholarships are offered by Enrollment Services, the NMJC Foundation, and various academic/athletic departments. The Office of Financial Aid administers these funds after they have been awarded. You may also receive scholarships from outside sources. You can also check the scholarship bulletin boards located throughout campus buildings for postings of available scholarships.</p>
            <p><a href="http://www.nmjc.edu/studentservices/financialaid/scholarshipsandgrants.aspx">NMJC Financial Aid Scholarships</a></p>
            <h4 id="deadlines">Deadlines</h4>
            <p>Preferably by <b>Feb. 14 </b>for the FAFSA Application.<br />
              Scholarships have different due dates.</p>
              <p><a href="http://www.nmjc.edu/studentservices/financialaid/faqs.aspx">NMJC Financial Aid Deadlines</a></p>
              <p><strong>School code: 002655</strong></p>
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
