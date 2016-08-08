<?php include 'includes/mainheader.php'; ?>

<body>
  <header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner img-responsive" role="listbox">
        <div class="item active"><img src="images/mesalandsbanner.png" alt="Mesalands Banner"></div>
      </div>
    </div>
    <div class="container-fluid">
      <a href="index.php"><img id="LogoImg" src="images/NMCollegeTransfer2.png" class="img-responsive" alt="Responsive Image"></a></div>
    </header>

    <!--Begin top nav-->
    <?php require 'includes/topnav.php'; ?>
    <!--End top nav-->

    <ol class="breadcrumb">
      <li>
        <a href="index.php">HOME</a>
      </li>
      <li>
        COLLEGE VISITS
      </li>
    </ol>

    
    <div class="textbody">
     <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"> <h3>College Visits</h3></div>
        <div class="panel-body">
          <h3>Setting up a Visit</h3>
          <ul>
            <li>Visit a recruiter at your high school.</li>
            <li>Visit a recruiter at your 2 year school.</li>
            <li>Contact Admissions at the higher education school you are interested in attending.</li>
            <li>Contact the department of the degree you are wanting to pursure.</li>
          </ul>
          <div class="financialaid" id="questions"><h3>Questions to Ask</h3></div>
            <table class="table table-condensed" style="border-collapse:collapse;">

              <tbody>
                <tr data-toggle="collapse" data-target="#admissions" class="accordion-toggle">
                  <td class="schoolname" colspan="12"><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"> </span></button>&nbsp;&nbsp;These are questions to ask Admissions:</td></tr>
                <tr>
                  <td colspan="12" class="hiddenRow">
                    <div class="accordian-body collapse" id="admissions"> 
                      <ol><li>How do I get admitted?</li>
                        <li>Do I have to submit my ACT/SAT scores?</li>
                        <li>Are there any fees to apply?</li>
                        <li>How do I submit my High School or college transcripts?</li>
                        <li>What if I don't have ACT/SAT scores?</li>
                        <li>When will I know if I was accepted?</li>
                        <li>When is the best time to send my application?</li>
                      </ol>

                    </div> </td>
                  </tr>

                  <tr data-toggle="collapse" data-target="#financialaid" class="accordion-toggle">
                    <td class="schoolname" colspan="12"><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"> </span></button>&nbsp;&nbsp;These are questions to ask Financial Aid:</td>            

                  </tr>
                  <tr>
                    <td colspan="12" class="hiddenRow">
                      <div class="accordian-body collapse" id="financialaid"> 
                        <ol><li>How do I apply for Financial Aid?</li>
                          <li>Why do you need my parents tax return?</li>
                          <li>How do I know if I qualify for financial aid?</li>
                          <li>Can I apply for any scholarships?</li>
                          <li>Do you accept VA Benefits</li>
                        </ol>
                        <p><a href="http://fafsa.com">Free Application for Student Aid (FAFSA)</a></p>   
                      </div> </td>
                    </tr>

                    <tr data-toggle="collapse" data-target="#advising" class="accordion-toggle">
                      <td class="schoolname" colspan="12"><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"> </span></button>&nbsp;&nbsp;These are questions to ask Advising:</td>            

                    </tr>
                    <tr >
                      <td colspan="12" class="hiddenRow">
                        <div class="accordian-body collapse" id="advising"> 
                          <ol><li>What are the requirements for completing my degree?</li>
                            <li>How do I make sure I am taking the correct classes for my degree?</li>
                            <li>Will my credit hours transfer to another school?</li>
                            <li>How do I make an appointment with an academic advior?</li>
                            <li>What can I do if I am struggling with a class?</li>
                            <li>When should I contact an academic advisor?</li>
                            <li>How often should I check in with an academic advisor?</li>
                            <li>Are there different types of advisor?</li>
                          </ol>

                        </div> </td>
                      </tr>

                      <tr data-toggle="collapse" data-target="#military" class="accordion-toggle">
                        <td class="schoolname" colspan="12"><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"> </span></button>&nbsp;&nbsp;These are questions Veterans and Military Members should ask:</td>            

                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div class="accordian-body collapse" id="military"> 
                           <ol><li>Do you accept VA and/or military benefits?</li>
                            <li>How do I find out if I can use VA benefits?</li>
                            <li>Where do I apply for VA benefits for school?</li>
                          </ol>

                        </div> </td>
                      </tr>

                      <tr data-toggle="collapse" data-target="#campuslife" class="accordion-toggle">
                        <td class="schoolname" colspan="12"><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"> </span></button>&nbsp;&nbsp;These are questions to ask about Life on Campus:</td>            

                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div class="accordian-body collapse" id="campuslife"> 
                           <ol><li>Do you have housing on campus?</li>
                            <li>Do you have a health center?</li>
                            <li>Can student's children visit the health center?</li>
                            <li>Do you have housing for families?</li>
                            <li>Do you have childcare on campus?</li>
                            <li>Can my kids come to class with me?</li>
                            <li>Can you use Financial Aid for child care?</li>
                            <li>What other resources are available for students and their families?</li>
                          </ol>

                        </div> </td>
                      </tr>
                      </tbody>
                    </table>
                    </div>
                    </div>
                  </div>
                  </div>
                  <div class="clear"></div>
                   <?php include 'includes/footer.php'; ?>