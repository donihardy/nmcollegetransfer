<?php include 'includes/mainheader.php'; ?>

<body>
  <header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner img-responsive" role="listbox">
        <div class="item active"><img src="images/cnmbanner.png" alt="CNM Banner"></div>
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
        TRANSFER QUICK FACTS
      </li>
    </ol>

    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Transfer Quick Facts</h3></div>
        <div class="panel-body">
          <table class="table table-condensed" style="border-collapse:collapse;">

            <thead>
              <tr>
                <th class="schooltitle">4 Year Schools</th>
              </tr>
            </thead>

            <tbody>
              <tr data-toggle="collapse" data-target="#enmu" class="accordion-toggle">
                <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"> </span></button>&nbsp;&nbsp;ENMU</td>            

              </tr>
              <tr>
                <td colspan="12" class="hiddenRow">
                  <div class="accordian-body collapse" id="enmu"> 
                   <table class="table table-striped">
                    <thead>
                      <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                      <tr><td>Send official copies of transcripts from all colleges and universities you have attended previously. </td><td><a href="http://www.enmu.edu/index.php?option=com_content&view=article&id=416&Itemid=1527">Transferable Courses</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a><br /><a href="https://www.enmu.edu/academics/resources/ug-catalog/">ENMU Common Core</a></td><td>ACT Code: 2636<br />SAT Code: 4299.</td><td><a href="https://enrollmentservices.enmu.edu/ENMUAdmissionsCentral.aspx">Request Info</a></td><td><a href="http://www.enmu.edu/search-enmu?q=articulation">Agreements</a></td><td>Students from these participating New Mexico schools can earn college credit while attending high school.<br /><a href="http://www.enmu.edu/dual-enrollment/dual-enrollment">More info</a></td>
                      </tr>
                    </thead>
                  </table>
                </div> </td>
              </tr>

              <tr data-toggle="collapse" data-target="#iaia" class="accordion-toggle">
                <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;IAIA</td>            

              </tr>
              <tr>
                <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="iaia"> 
                  <table class="table table-striped">
                    <thead>
                      <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                      <tr><td>Students who have successfully completed the equivalent of 24 or more transferable semester credits at other accredited institutions may apply to be admitted as transfer students.</td><td><a href="https://iaia.edu/admissions/apply/">Transferable Courses</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a></td><td>ACT Code: 2654<br />SAT Code: 0180</td><td><a href="https://iaia.edu/admissions/">Request Info</a></td><td>No information found.</td><td>IAIA has established dual credit enrollment agreements with the Santa Fe Indian School, Walatowa Charter High School, Native American Community Academy, and Santa Fe Public Schools. High school students who are interested in enrolling in courses at IAIA for both college and high school credit must meet with their high school counselor to begin the dual-enrollment process.</td></tr>
                    </thead>
                  </table>
                </div> 
              </tr>

              <tr data-toggle="collapse" data-target="#ntu" class="accordion-toggle">
                <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NAVAJO TECH UNIVERSITY</td>            

              </tr>
              <tr>
                <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="ntu"> 
                  <table class="table table-striped">
                    <thead>
                      <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                      <tr><td>For students who are transferring or have taken prior college courses: Official college transcripts from each college attended, indicating all courses taken (The NTU Registrar may require a written description of each course taken in order to evaluate its equivalency to NTU course). </td><td>NTU does consider credits for transfer from other accredited colleges. Decisions to accept incoming credits to NTU from another school are made by the Registrar.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a></td><td>Navajo Technical University is currently an open enrollment University, so there are no cutoffs for the GPA or the SAT/ACT.</td><td><a href="http://www.navajotech.edu/contact/staff/admissions/15-jerlynn-henry">Request Info</a></td><td>No information found.</td><td><p>"Dual credit program” means a program that allows high school students to enroll in college-level courses offered by a college that may be academic or career technical but not remedial or developmental, and simultaneously to earn credit toward high school graduation and a postsecondary degree or certificate.<br /><a href="http://www.navajotech.edu/academics/dual-credit">Dual Enrollment Program</a></td></tr>
                    </thead>
                  </table>
                </div> 
              </tr>

              <tr data-toggle="collapse" data-target="#nmhu" class="accordion-toggle">
                <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NEW MEXICO HIGHLANDS UNIVERSITY</td>            

              </tr>
              <tr>
                <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="nmhu"> 
                  <table class="table table-striped">
                    <thead>
                      <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                      <tr><td>Transcripts must be sent to Admissions Office</td><td>New Mexico Highlands accepts academic credits for transfer from institutions of higher education that are regionally accredited or are candidates for regional accreditation.<br /><a href="http://www.nmhu.edu/office-of-the-registrar/information-for-transfer-students/">Transfer Information</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="http://www.nmcollegetransfer101.com/snmcommoncore.html">NM Common Core</a></td><td>Students will be placed in the math and English classes based on their placement test scores. If a student feels they have been wrongly assigned, he or she may take a free on-campus placement test prior to registering for his or her first semester. If the scores meet the competency criterion, the student will be reassigned to the appropriate class.</td>
                        <td><a href="mailto:transcripts@nmhu.edu">Request Info</td><td><a href="http://www.sfcc.edu/news_and_events/sfcc_highlands_hec_articulation">SFCC</a><br /><a href="https://www.sanjuancollege.edu/student-services/departments/transfer-center/selecting-a-major-and-college/new-mexico-highlands-university-transfer-agreement/">San Juan College</a><br />
                        <a href="https://www.cnm.edu/depts/academic-affairs/transfer-agreements">CNM<br /><a href="http://www.armasineducation.com/images/uploads/uploadsFinal_Transfer_Guide_(1).pdf">Luna CC</a> </td><td>Highlands University is a state-supported institution established in 1893 and offers bachelor’s and master’s degrees in a variety of disciplines. Highlands is known for its multiethnic student body, small classes, research activities, student and faculty achievements, affordability and opportunities for students to combine study with real-world experience.<br /><a href="http://www.nmhu.edu/current-students/nmhu-dual-credit/">NMHU Dual Enrollment</a></td></tr>
                      </thead>
                    </table>
                  </div> 
                </tr>

                <tr data-toggle="collapse" data-target="#nnmc" class="accordion-toggle">
                  <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NORTHERN NEW MEXICO COLLEGE</td>            

                </tr>
                <tr>
                  <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="nnmc"> 
                    <table class="table table-striped">
                      <thead>
                       <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                       <tr><td>Request that each college you’ve previously attended send an official transcript></td><td>Northern recognizes that there are many ways in which college credit may be amassed and, in an effort to maximize the opportunities available to its public...</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a></td><td>Our Course Placement Evaluation (CPE) process uses COMPASS as its testing instrument;
                        it also includes an appraisal of ACT and/or SAT test scores to determine the
                        proper level of English, math, or science courses in which you may enroll.</td><td><a href="http://nnmc.edu/home/student-gateway/admissions/admissions-interest-form/">Request Info</a></td><td>No information found.</td><td>Dual Credit is a statewide program allowing high school students to earn college credit tuition free.</td></tr>
                      </thead>
                    </table>
                  </div> 
                </tr>

                <tr data-toggle="collapse" data-target="#nmt" class="accordion-toggle">
                  <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NEW MEXICO TECH</td>            

                </tr>
                <tr>
                  <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="nmt"> 
                    <table class="table table-striped">
                      <thead>
                        <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                        <tr><td>You will be considered a transfer student if you have a minimum of 30 credit hours transfered from an accredited college or university (If you have fewer than 30 credit hours of transfer credit, follow the Entering Freshman section above). Students in good academic standing at other colleges and universities are eligible to apply for transfer admission to New Mexico Tech.</td><td>The Transfer Guides linked below, show how basic requirements as well as lower and upper division courses previously approved, transfer to NMT.<br /><a href="http://www.nmt.edu/transfer-credit/479-registrars-office/4678-transfer-guides">Transfer Guide Page</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a></td><td>Admission requirements:<br />
                          A 21 ACT composite score or a 970 SAT combined score (Critical Reading and Math)</td><td>Phone: <a href="tel:1-575-835-5424">(575) 835-5424</a><br /><a href="mailto:admission@admin.nmt.edu">Email</a></td><td>Articulation agreements provide a guarantee that transfer credits will be accepted within a student's major.<br /><a href="http://www.nmt.edu/images/stories/registrar/Amarillo_College_Transfer_Guide_Fall_2009.pdf">Amarillo College</a><br /><a href="http://www.nmt.edu/images/stories/registrar/San_Antonio_College_Transfer_Guide_2014.pdf">San Antonio</a><br /><a href="http://www.nmt.edu/images/stories/registrar/Central_New_Mexico_Community_College.pdf">CNM</a></td><td>The Dual Credit Program allows students to earn credit at the secondary and the postsecondary levels simultaneously and provide students an early glimpse of college life and college-level studies.</td></tr>
                        </thead>
                      </table>
                    </div> 
                  </tr>

                  <tr data-toggle="collapse" data-target="#nmsu" class="accordion-toggle">
                    <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NEW MEXICO STATE UNIVERSITY</td>            

                  </tr>
                  <tr>
                    <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="nmsu"> 
                      <table class="table table-striped">
                        <thead>
                         <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                         <tr><td>The transfer student must have official transcripts forwarded directly to the Office of University Admissions by the Registrar of each college or educational institution previously attended. The ACT or SAT may be required of students who have not earned credit for the first semester of college </td><td><a href="http://admissions.nmsu.edu/apply/transfer-students/">Transfer Equivalencies</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>ACT composite score of 21 or above (SAT of 990* or above. <br />ACT Code: 2638<br />SAT Code: 4531</td><td><a href="transfer@nmsu.edu">Request more info</a></td><td><a href="https://et.nmsu.edu/transfer-students/">Engineering Agreements</a></td><td>The Dual Credit Program at New Mexico State University allows high school juniors and seniors the unique opportunity to get a jump start on their college education. <br /><a href="http://dualcredit.nmsu.edu/">Dual Enrollment</a></td></tr>
                       </thead>
                     </table>
                   </div> 
                 </tr>


                 <tr data-toggle="collapse" data-target="#unm" class="accordion-toggle">
                  <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;UNIVERSITY OF NEW MEXICO</td>            

                </tr>
                <tr>
                  <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="unm"> 
                    <table class="table table-striped">
                      <thead>
                       <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                       <tr><td>Submit an official transcript from each college/university attended. Transcripts must be in a sealed envelope from the issuing college or school.</td><td><a href="http://admissions.unm.edu/future_students/transfer-course-equivalencies.html">Transferable Courses</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a><br /><a href="http://catalog.unm.edu/catalogs/2014-2015/undergrad-program.html">UNM Common Core</a></td><td>ACT composite score of 23 or an SAT total score of 1060.<br />ACT Code: 2650<br />SAT Code: 4845.</td><td><a href="mailto:unmlobos@unm.edu">Request more info</a></td><td>Agreements:<br /><a href="file:///F:/STEM%20UP/STEM%20UP/UNM_Doni/TransferWebsite/NM%20College%20Transfer/unm/agreements.html#CNMUNM">CNM to UNM Agreements</a></td><td><a href="http://advisement.unm.edu/dual-credit/dual-credit-admissions.html">Dual Enrollment</a></td></tr>
                     </thead>
                   </table>
                 </div> 
               </tr>



               <tr data-toggle="collapse" data-target="#wnmu" class="accordion-toggle">
                <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;WESTERN NEW MEXICO UNIVERSITY</td>            

              </tr>
              <tr>
                <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="wnmu"> 
                  <table class="table table-striped">
                    <thead>
                     <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                     <tr><td>If you are transferring from another college, please provide college transcripts. High school/GED transcripts are not required if you have more than 24 college credit hours.</td><td>It is the policy of Western New Mexico University to accept transfer credit from other New Mexico accredited or regionally accredited colleges and universities.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a></td><td>Achievement of an ACT score of 21 or better in each Math, Reading, and English or SAT equivalent of 500 or better in each Math, Writing, and Reading - waives taking COMPASS. The ACT/SAT must have been taken in the past five years.</td><td><a href="mailto:admissions@wnmu.edu">Request Info</a></td><td><a href="http://wnmu.edu/wnmu-partners-with-glendale-community-college-for-biology-program/">Glendale</a><br /><a href="http://wnmu.edu/wnmu-signs-agreement-with-mexican-university/">Mexican University</a><br /><a href="http://wnmu.edu/wnmu-partners-with-cnm-for-transfer-program/">CNM</a><br /><a href="http://wnmu.edu/univ/consumerInfo/Transfer%20of%20Credit%20Policies%20and%20Articulation%20Agreements.htm">Articulation agreements</a></td><td>High school students from NM public schools or public charter schools may enroll at WNMU while they are completing their secondary education.</td></tr>
                   </thead>
                 </table>
               </div> 

               <th>
                <tr>
                  <th class="schooltitle">2 Year Schools</th>
                </tr>
              </th>

              <tr data-toggle="collapse" data-target="#cnm" class="accordion-toggle">
                <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;CENTRAL NEW MEXICO COMMUNITY COLLEGE</td>            
              </tr>
              <tr>
                <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="cnm"> 
                  <table class="table table-striped">
                    <thead>
                     <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                     <tr><td>Send Transcripts to:<br /> <a href="https://www.cnm.edu/depts/recordsretention/documents/request-transcript-from-another-institution">CNM Form</a></td><td>Credit earned at other post-secondary institutions and / or credit for prior learning may be transferred and applied toward program requirements.<br /><a href="http://tes.collegesource.com/view/tes_view01.asp?rid={0503AFD5-0DB5-454E-A227-CC387FC5A19F}&aid={3953860A-3699-4EFE-A557-7B3E41278DD9}">Transferable Courses</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>ACT, SAT, or Accuplacer scores need to be submitted in order to take classes.</td><td><a href="https://www.cnm.edu/depts/advisement/contact-advisement">Request more info</a></td><td><a href="https://www.cnm.edu/depts/academic-affairs/transfer-agreements">List of Agreements</a></td><td>The Dual Credit Program offers free classes* for students in central New Mexico attending a public, private, charter, or home school. High school students can take college-level classes and get a jump start on a certificate or degree. Under the Dual Credit program, tuition and registration fees are waived (*students are responsible for course fees and uniforms, if required).<br /><a href="https://www.cnm.edu/depts/outreach/dual-credit/high-school-and-dual-credit-programs">Dual Enrollment</a></td></tr>
                   </thead>
                 </table>
               </div> 
             </tr>

             <tr data-toggle="collapse" data-target="#ccc" class="accordion-toggle">
              <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;CLOVIS COMMUNITY COLLEGE</td>            
            </tr>
            <tr>
              <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="ccc"> 
                <table class="table table-striped">
                  <thead>
                    <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                    <tr><td>The Admissions and Records Office maintains the official permanent academic records of all CCC students. An official transcript is the reproduction of a complete, unabridged permanent academic record validated with the college seal, signature of the registrar, and date of issue.</td><td>Clovis Community College will accept transfer credits from other institutions. Transfer credits must meet the minimum required grade for acceptance into any program. </td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>All students enrolling for the first time in courses with a math component, a writing component, or courses that require extensive reading are required to take the Accuplacer or other appropriate placement test before registering. If there are other test scores (e.g., ACT/SAT) that demonstrate college-level skill, the student may be exempt from the Accuplacer as determined by an Academic Advisor.</td><td><a href="http://www.clovis.edu/admissions/index.aspx">Request Info</a></td><td><a href="http://www.clovis.edu/advising/transfer.aspx">Transfer Agreements</a> with other schools</td><td>Clovis Community College, through dual credit enrollment agreements, provides students with an opportunity to take college courses while still in high school and earn high school credit as well as college credit.</td></tr>
                  </thead>
                </table>
              </div> 
            </tr>

            <tr data-toggle="collapse" data-target="#dine" class="accordion-toggle">
              <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;DI&#209;E COLLEGE</td>            
            </tr>
            <tr>
              <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="dine"> 
                <table class="table table-striped">
                  <thead>
                    <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                    <tr><td>Students who have attended other accredited colleges or universities prior to attending Diné College are considered transfer students, and must submit an official transcript(s) from the other colleges/universities attended. Diné College may evaluate and accept a maximum of forty (40) credit hours below the 300 course level with a grade of "C" or better. </td><td>Transfer of credit is awarded for coursework completed at other colleges and universities. Records and Admissions is responsible for conducting official credit evaluations. Transfer students wishing to receive transfer credit must request official transcripts from colleges previously attended.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>Open Enrollment: No SAT or ACT scores required to enroll, just a high school diploma or GED.</td><td><a href="http://www.dinecollege.edu/admissions/admissions-contacts.php">Request Info</a></td><td>No agreements found.</td><td>Area High School junior and seniors may be admitted upon submission of a completed and signed High School Concurrent Enrollment Form, which includes parent, high school counselor and principal signatures as well as a high school transcript to enroll in approved courses. When the High School Concurrent Enrollment has been accepted and approved by the appropriate Division Academic Dean, the student is required to take the placement tests as part of the admission process.</td></tr>
                  </thead>
                </table>
              </div> 
            </tr>

            <tr data-toggle="collapse" data-target="#enmuros" class="accordion-toggle">
              <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;EASTERN NEW MEXICO UNIVERSITY-ROSWELL</td>            
            </tr>
            <tr>
              <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="enmuros"> 
                <table class="table table-striped">
                  <thead>
                    <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                    <tr><td>Official transcripts are those sent directly by an official of the high school and or college(s)/technical school(s) to the ENMU-Roswell Office of Admissions and Records.</td><td>Credit is accepted for college‑level work from institutions accredited by an accrediting body recognized by the Commission on Recognition of Postsecondary Accreditation (CORPA).</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td> Students may be exempt from portions or all of the University Skills Placement Test if they have equivalent transfer credit and/or ACT scores of 19 or higher in each of the tested areas.<br />ACT Code: 4662</td><td>Request for information:<br /><a href="tel:1-575-624-7000">575-624-7000</a></td><td>Representatives from both two year and four year colleges, universities, technical institutes and the state formed the New Mexico Business Administration Articulation Committee.</td><td>ENMU-Roswell’s dual credit and concurrent enrollment programs provide an opportunity for high school students to take college level courses taught by ENMU-Roswell faculty at various sites or through distance education.</td></tr>
                  </thead>
                </table>
              </div> 
            </tr>

            <tr data-toggle="collapse" data-target="#enmurui" class="accordion-toggle">
              <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;EASTERN NEW MEXICO UNIVERSITY-RUIDOSO</td>            
            </tr>
            <tr>
              <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="enmurui"> 
                <table class="table table-striped">
                  <thead>
                    <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                    <tr><td>Official Transcripts are those sent directly by an official from previously attended schools to ENMU-Ruidoso Student Services.</td><td>New Mexico’s colleges and universities have collaborated to produce guides to assist students who plan to transfer before completing a program of study. Course modules are designed to help students select courses carefully so that they may transfer with little or no loss of credit.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td><p>Students can use their ACT score for placement when enrolling into classes. Students will need to bring in a copy of their ACT scores to Student Services.</p>
                      <p>Student has appropriate ACT (Eng 18, Read 17, Math 23) / SAT (Verb 440, Math 460) scores.</p></td><td>Request info via email:<br />
                      <a href="mailto:ruidosoadvising@enmu.edu">Email</td><td>No agreements found.</td><td>The Dual Credit is a program in which qualified highschool students can take college level courses and earn high school and college credit while tuition cost is waived by ENMU-Ruidoso.</td></tr>
                      </thead>
                    </table>
                  </div> 
                </tr>

                <tr data-toggle="collapse" data-target="#luna" class="accordion-toggle">
                  <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;LUNA COMMUNITY COLLEGE</td>            
                </tr>
                <tr>
                  <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="luna"> 
                    <table class="table table-striped">
                      <thead>
                        <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                        <tr><td>Official Transcripts must be sent to the Office of the Registrar.</td><td>Students will receive full credit for course work completed with a grade of "C" or better, provided that the courses are appropriate toward a certificate or degree.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td><p>A minimum English ACT score of 19, minimum Writing placement score of 70 or ENG098: Essentials of College Writing</p>
                          <p>A minimum Math ACT score of 18, LCC Placement score within the Algebra Domain or MATH075: General Mathematics</p>
                          <p>A minimum Reading ACT score of 18+, minimum Reading placement score of 81 or ENG098: Essentials of College Writing</p>
                          SAT school code: 2591<br />
                          ACT school code: 2628</td><td><a href="https://pathways.luna.edu/ICS/ClientConfig/HtmlContent/ContactUs.html">Contact Luna CC</a></td><td>No information found.</td><td>The Concurrent Enrollment/Dual-Credit program provides an extraordinary opportunity for students to take academic or vocational college courses while in high school. </td></tr>
                        </thead>
                      </table>
                    </div> 
                  </tr>

                  <tr data-toggle="collapse" data-target="#mesa" class="accordion-toggle">
                    <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;MESALANDS COMMUNITY COLLEGE</td>            
                  </tr>
                  <tr>
                    <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="mesa"> 
                      <table class="table table-striped">
                        <thead>
                          <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                          <tr><td>All transcripts must be sent directly from the high school (or college) to Mesalands Community College.</td><td>Only credit which is applicable toward a student’s signed Educational Plan of Study shall be considered for transfer credit. Students desiring credit for past college work must have an official transcript from each previous college mailed directly to Mesalands Community College and must complete a Request for Transcript Evaluation form. </td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>ACT scores are accepted in lieu of the College’s placement exam.<br />
                            ACT Code: 2641<br />
                            SAT Code: 3618</td><td><a href="http://www.mesalands.edu/findyourway/">Request Info</a></td><td><a href="http://www.mesalands.edu/about/university-alliances/">Agreements</a> with other schools</td><td>Mesalands Community College works with a number of area schools to provide high school students with Dual Enrollment options to begin earning college credit while still in high school. The majority of courses offered at Mesalands Community College are eligible for Dual Credit, including applied science courses.</td></tr>
                          </thead>
                        </table>
                      </div> 
                    </tr>

                    <tr data-toggle="collapse" data-target="#nmjc" class="accordion-toggle">
                      <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NEW MEXICO JUNIOR COLLEGE</td>            
                    </tr>
                    <tr>
                      <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="nmjc"> 
                        <table class="table table-striped">
                          <thead>
                            <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                            <tr><td>Transfer students must submit official transcripts from all colleges / universities attended for possible transfer credit. Transcripts should be sent immediately following the close of the last semester of attendance at other colleges.</td><td><a href="http://www.nmjc.edu/assets/documents/Transfer%20Equivalency%20Table.pdf">Transfer Equivalency Table</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td> If you have taken the ACT or SAT, you can use those scores as placement data.<br />
                              ACT Code: 2643<br />
                              SAT Code: 4553</td><td>Request Info<br /><a href="tel:1-575-492-2547">575-492-2547</a></td><td>Articulation agreements:<br />
                              <ul><li>Grantham University</li>
                                <li>Grantham University (second agreement)</li>
                                <li>New Mexico Highlands University</li>
                                <li>Thomas Edison State College</li>
                                <li>University of New Mexico</li>
                                <li>University of Texas Permian Basin</li>
                                <li>University of the Southwest</li></ul></td><td>Dual Credit provides high school juniors and seniors who attend a public high school (with whom NMJC has a Dual Credit agreement) the opportunity to take college courses for which they will simultaneously earn both college credit and high school credit. Students should see their high school counselor for Dual Credit information.</td></tr>
                              </thead>
                            </table>
                          </div> 
                        </tr>

                        <tr data-toggle="collapse" data-target="#nmmi" class="accordion-toggle">
                          <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NEW MEXICO MILITARY INSTITUTE</td>            
                        </tr>
                        <tr>
                          <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="nmmi"> 
                            <table class="table table-striped">
                              <thead>
                                <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                                <tr><td>All applicants may send partial/unofficial transcripts or report cards to expedite the admissions process and then have official transcripts sent at the completion of the current semester.</td><td>Transfer credits are applicable if the student is able to pass a validation test for the class at the academy.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>No information found.</td><td>Phone:<br /> <a href="tel:1-575-622-6250">(575) 622-6250</a><br />
                                  Email:<br /><a href="mailto:admissions@nmmi.edu"> admissions@nmmi.edu</a></td><td>Carson Newman College will accept transfer students from NMMI without loss of credit toward any degree offered.
                                </td><td>A high school cadet may be permitted to take college courses concurrently with high school courses with permission of the appropriate Associate Dean and the Vice Dean/High School Principal.
                              </td></tr>
                            </thead>
                          </table>
                        </div> 
                      </tr>

                      <tr data-toggle="collapse" data-target="#nmsua" class="accordion-toggle">
                        <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NEW MEXICO STATE UNIVERSITY-ALAMOGORDO</td>            
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="nmsua"> 
                          <table class="table table-striped">
                            <thead>
                              <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                              <tr><td>All transcripts must be sent directly to the NMSU-A Admissions & Records Office by the Registrar of each institution attended. A student who conceals the fact that he/she has attended another college or university and who does not have the Registrar submit a transcript for each institution, whether or not credit was earned, will be subject to immediate suspension.</td><td>To facilitate the transfer of courses within certain degree programs, New Mexico colleges and universities have collaborated to develop transferable discipline modules.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>No information found.</td><td>Contact the NMSU Registrar’s Office at:<br /> <a href="tel:1-575-646-3411">(575) 646-3411</a><br /> or <a href="mailto:registra@nmsu.edu">registra@nmsu.edu.</a></td><td>No agreements found.</td><td>Dual Credit is a statewide sponsored program for eligible High School Students in which they can receive high school credit for taking approved college courses.
                              </td></tr>
                            </thead>
                          </table>
                        </div> 
                      </tr>

                      <tr data-toggle="collapse" data-target="#nmsuc" class="accordion-toggle">
                        <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NEW MEXICO STATE UNIVERSITY-CARLSBAD</td>            
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="nmsuc"> 
                          <table class="table table-striped">
                            <thead>
                              <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                              <tr><td>Request official transcripts of high school or GED and all previous college course work. All official transcripts should be mailed directly by the school or college registrar.</td><td>On the basis of transcript evaluation, credit may be granted for courses taken at other colleges or universities in which a grade of D or higher is earned. Semester and cumulative grade-point averages are computed solely on courses taken at New Mexico State University; however, transfer credits that are accepted will apply toward the degree.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td><p>Students may satisfy basic skills requirements in English by scoring 30 or higher on ACT English exams.</p><p>Students may satisfy basic skills requirements in mathematics by scoring 23 or higher on ACT mathematics exams.</p></td><td><a href="https://carlsbad.nmsu.edu/contact-us/">Request Info</a></td><td>If you are a current student enrolled at one of NMSU’s community college campuses and would like to transition to the NMSU-Las Cruces campus, you must complete a Change of Campus Form.</td><td>By enrolling in NMSU Carlsbad’s Dual Credit Program, high school students can get a jump start and earn elective credits that contribute to both their high school graduation requirements and their college credit hours.</td></tr>
                            </thead>
                          </table>
                        </div> 
                      </tr>

                      <tr data-toggle="collapse" data-target="#nmsud" class="accordion-toggle">
                        <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NEW MEXICO STATE UNIVERSITY-DO&#209;A ANA</td>            
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="nmsud"> 
                          <table class="table table-striped">
                            <thead>
                              <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                              <tr><td>Request official High School transcripts or GED test scores and college transcripts (if applicable) from each educational institution attended. All official transcripts must be mailed directly to DACC Office of Admissions by the records/registrar's office of the issuing institution(s).</td><td>Credits from accredited postsecondary institutions are automatically evaluated after official transcripts are received by the DACC Admissions Office. A transfer student may, on the basis of an evaluation of her/his transcripts, receive credit for courses taken at other postsecondary institutions in which a grade of D or higher was received.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td><p>ACT/SAT scores that are less than 2 years old may be accepted in lieu of the COMPASS assessment and it is not required for you to take the assessment.</p>
                                ACT school code: 2651<br />
                                SAT school code: 6296
                              </td><td><a href="http://dacc.nmsu.edu/admissions/contact-us/">Request Info</a></td><td>Articulation plans have been developed for the following DACC programs:<br /><a href="https://dacc.nmsu.edu/catalogs/wp-content/uploads/sites/69/2015/07/2015-2016-Catalog.pdf">Catalog</a> - page 32</td><td>The DACC Dual Credit Program allows high school students to explore college opportunities as well as get a head start on their college education. Through this program students have the opportunity to receive college and high school credits at the same time. Let DACC be part of your college transition!</td></tr>
                            </thead>
                          </table>
                        </div> 
                      </tr>

                      <tr data-toggle="collapse" data-target="#nmsug" class="accordion-toggle">
                        <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;NEW MEXICO STATE UNIVERSITY-GRANTS</td>            
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="nmsug"> 
                          <table class="table table-striped">
                            <thead>
                              <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                              <tr><td>After submitting your admissions application, you need to contact your high school and all previously-attended colleges and order official transcripts.</td><td>A transferable degree program is designed specifically for two-year degrees to transfer directly to the related four-year Bachelors degree.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>If you took the ACT Test in High School, provide your scores and an advisor will determine if you may benefit from re-testing in Math and English.</td><td><a href="https://grants.nmsu.edu/students/transfers/">Transfer Advisor</a></td><td><p>Transferring the following two-year degrees to four-year degrees at NMSU or UNM should be relatively easy:</p>
                                <ul><li>Associate of Arts</li>
                                  <li>Criminal Justice</li>
                                  <li>Science</li>
                                  <li>Education</li>
                                  <li>General Engineering</li>
                                  <li>Early Childhood Education</li>
                                  <li>Pre-Business</li>
                                  <li>Social Services</li></ul></td><td>The Dual Credit Program allows eligible high school students to enroll in college-level courses and earn credits at both the high school and college levels at the same time.
                                </td></tr>
                              </thead>
                            </table>
                          </div> 
                        </tr>

                        <tr data-toggle="collapse" data-target="#sjc" class="accordion-toggle">
                          <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;SAN JUAN COLLEGE</td>            
                        </tr>
                        <tr>
                          <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="sjc"> 
                            <table class="table table-striped">
                              <thead>
                                <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                                <tr><td>Send transcripts to San Juan College Enrollment Services</td><td>Transferable Courses:<br /><a href="http://tes.collegesource.com/view/tes_view01.asp?rid=%7B1C20A4B3-72E7-47B0-97A0-224DFCF9DD11%7D&aid=%7B387937DE-91E0-477D-AED7-01A9F1263B21%7D">San Juan College Transfer Equivalency Systems</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>San Juan College has an open admission policy; meaning we do NOT require a minimum SAT or ACT score. We do require new students to take the Accuplacer test to help determine what courses they need to start in.</td><td>Request more info:<br />Phone: <a href="tel:1-505-326-3311">(505) 326-3311</a><br />Email: <a href="mailto:admissions@sanjuancollege.edu">admissions@sanjuancollege.edu</a></td><td><a href="http://www.sanjuancollege.edu/student-services/departments/transfer-center/selecting-a-major-and-college/#transferagree">Agreements</a></td><td>Dual credit allows a high school student from a public high school, private high school, home school, or public charter or Bureau of Indian Education (BIE) school to enroll in a SJC course(s).</td></tr>
                              </thead>
                            </table>
                          </div> 
                        </tr>

                        <tr data-toggle="collapse" data-target="#sfcc" class="accordion-toggle">
                          <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;SANTA FE COMMUNITY COLLEGE</td>            
                        </tr>
                        <tr>
                          <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="sfcc"> 
                            <table class="table table-striped">
                              <thead>
                                <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                                <tr><td>Submit official transcripts from all schools attended to the SFCC Registrar’s office.
                                </td><td>SFCC offers many of these courses; however, planning for effective transfer with maximum efficiency is ultimately your responsibility. You are highly encouraged to consult with advisers at the institution you plan to transfer, in order to clearly determine how the courses will be applied toward graduation.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td><p>Recent ACT or SAT scores may be used to determine placement. If you score a 19 or higher on the ACT English and Reading sections or a 450 or higher on the SAT Critical Reading section, you may enroll in English 111 or any course for which English 109 is a prerequisite. </p><p>If you score from 16-23 on the ACT Math section or from 400-590 on the SAT Mathematics section you may enroll in MATH 109 (Intermediate Algebra). If you score 24 or higher on the ACT Math section or 600 or higher on the SAT Mathematics section, you may enroll in MATH 121 (College Algebra), MATH 135 (Probability and Statistics) or MATH 150 (Pre-Calculus).</p>ACT Code: 2660<br />
                                SAT Code: 4816</td><td>Please contact the Testing Center:<br />
                                <a href="tel:1-505-428-1625">505-428-1625</a><br />
                                <a href="mailto:testing@sfcc.edu">Email</a></td><td>The Santa Fe Higher Education Center (SFHEC) is a partnership among four universities and Santa Fe Community College. The partner universities are Institute of American Indian Arts (IAIA), New Mexico Highlands University (NMHU), New Mexico State University (NMSU) and University of New Mexico (UNM).</td><td>Dual Credit allows high school students currently attending eligible area high schools to enroll in SFCC for fall or spring courses. The student receives both college and high school credit allowing them to apply the credits to their high school graduation requirements.</td></tr>
                              </thead>
                            </table>
                          </div> 
                        </tr>

                        <tr data-toggle="collapse" data-target="#sipi" class="accordion-toggle">
                          <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;SOUTHWESTERN INDIAN POLYTECHNIC INSTITUTE</td>            
                        </tr>
                        <tr>
                          <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="sipi"> 
                            <table class="table table-striped">
                              <thead>
                                <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                                <tr><td>Send transcripts to SIPI Admissions and Records</td><td>If a credit from another college is to be accepted toward a SIPI certificate or degree then the following must apply: An official transcript is required for evaluation. Admissions will evaluate the transfer credits and the academic department will determine which transfer credits are acceptable toward the student’s program of studies.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>All accepted new and transfer students are required to take the ACT Compass Test for placement.</td><td>Request Info:<br /><a href="tel:1-800-586-7474">800-586-SIPI</a></td><td>Business Administration<br />
                                Natural Resources Management<br />
                                <a href="http://www.sipi.edu/acadprog/catalog/SIPI%202014-2016%20Catalog.pdf">Catalog</a></td><td>No information found.</td></tr>
                              </thead>
                            </table>
                          </div> 
                        </tr>

                        <tr data-toggle="collapse" data-target="#unmg" class="accordion-toggle">
                          <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;UNIVERSITY OF NEW MEXICO-GALLUP</td>            
                        </tr>
                        <tr>
                          <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="unmg"> 
                            <table class="table table-striped">
                              <thead>
                               <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                               <tr><td>To receive transfer credit from previous institutions, official transcripts from those institutions must be mailed directly to UNM Gallup Office of Admissions. A transfer evaluation, reflecting those transfer credits acceptable at UNM, will be generated only after the student is officially admitted to a degree program at UNM Gallup or UNM Albuquerque.</td><td>Students intending to go to the Albuquerque campus to pursue a four-year degree should be aware that many of the necessary prerequisites for Albuquerque campus degree programs are offered at UNM Gallup. Students are cautioned that courses listed with an * (e.g., BSTC 232*) are considered to be technical/vocational courses and are not acceptable for transfer to baccalaureate programs except by petition to, and acceptance from, a UNM degree-granting program.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>ACT or SAT scores for Math & English Placement</td><td>Phone:<br /> <a href="tel:1-505-863-7524">(505) 863-7524</a></td><td><a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transitions</a></td><td>Dual credit is a program which provides public high school students the opportunity to receive credit for both high school and
                                  college by taking a single qualifying course.</td></tr>
                             </thead>
                           </table>
                         </div> 
                       </tr>

                       <tr data-toggle="collapse" data-target="#unmla" class="accordion-toggle">
                        <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;UNIVERSITY OF NEW MEXICO-LOS ALAMOS</td>            
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="unmla"> 
                          <table class="table table-striped">
                            <thead>
                              <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                              <tr><td>To have transcripts from other colleges evaluated, apply for degree status in a UNM-offered program, submit a $10.00 application fee and request that official copies of his/her transcript be sent from all previously attended colleges.</td><td>UNM–Los Alamos evaluates without prejudice courses from postsecondary institutions that are regionally accredited or are candidates for regional accreditation.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>A student planning to enroll in English or Math must meet the minimum placement scores determined by UNM–Los Alamos in either the ACT, SAT or Compass tests.
                                  </td><td>Phone: <a href="tel:1-505-662-5919">(505) 662-5919</a></td><td><a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transitions</a></td><td>The Dual Credit Program allows qualified public, charter and tribal school students to enroll in collegelevel courses offered by a public postsecondary educational institution that may be academic or career technical but not remedial or developmental, and simultaneously earn credit toward high school graduation and a postsecondary degree or certificate. </td></tr>
                            </thead>
                          </table>
                        </div> 
                      </tr>

                      <tr data-toggle="collapse" data-target="#unmt" class="accordion-toggle">
                        <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;UNIVERSITY OF NEW MEXICO-TAOS</td>            
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="unmt"> 
                          <table class="table table-striped">
                            <thead>
                              <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                              <tr><td>To submit academic transcripts, contact your prior school’s registrar’s office and ask them to send your transcript.</td><td>Academic credits for courses completed at other post-secondary institutions can be transferred to UNM-Taos.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>Entering freshmen whose ACT scores or UNM-Taos placement exam scores indicate a need for college preparatory course work, or entering freshmen with deficiencies in admission requirements, may be required to take Introductory Studies courses before entering their individual programs.</td><td>Request Info:<br />Phone:<a href="tel:1-575-737-6202">(575) 737-6202</a><br />Email: <a href="mailto:askalobo@unm.edu">askalobo@unm.edu</a></td><td><a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transitions</a></td><td>The High School Dual Enrollment Program includes academic and vocational programs. Its purpose is to award a select number of high school students the opportunity to take University courses (above the Basic Skills level) and to earn college credit while they are still enrolled in high school.</td></tr>
                            </thead>
                          </table>
                        </div> 
                      </tr>

                      <tr data-toggle="collapse" data-target="#unmv" class="accordion-toggle">
                        <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-menu-down"></span></button>&nbsp;&nbsp;UNIVERSITY OF NEW MEXICO-VALENCIA</td>            
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="unmv"> 
                          <table class="table table-striped">
                            <thead>
                              <tr><td class="schoolname" width="20%">Transcripts:</td><td class="schoolname" width="20%"">Transferable Courses:</td><td class="schoolname" width="20%">Common Core:</td> <td class="schoolname" width="20%">ACT/SAT:</td><td class="schoolname" width="20%">Rquest for Info:</td><td class="schoolname" width="20%">Agreements:</td><td class="schoolname" width="20%">Dual Enrollment:</td></tr>
                              <tr><td>To receive transfer credit from previous institutions, official transcripts from those institutions must be mailed directly to UNM-Valencia, Admission/Registration Office.</td><td>A transfer evaluation, reflecting those transfer credits acceptable at UNM, will be generated only after the student is officially admitted to a degree program at UNM-Valencia or UNM-Main.<br /><a href="http://admissions.unm.edu/future_students/transfer-course-equivalencies.html">Transfer Equivalency System (TES)</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>Order / Submit Official ACT or SAT scores. If you have not taken either, or if you will need to begin your Math or English progression again, you will need to take the COMPASS placement tests.</td><td>Request info:<br /><a href="1-505-925-8580">505-925-8580</a></td><td><a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transitions</a></td><td>Dual Credit courses provide qualified public and charter school students the opportunity to enroll in college-level courses through UNM Valencia and earn both high school and college credit.</td></tr>
                            </thead>
                          </table>
                        </div> 
                      </tr>


                    </tbody>
                  </table>
                </div>
              </div> 
            </div> 



            <!--<div class="textbody"><h3>Course Transfer Quick Facts</h3>
              <p>Explanation</p>
              <table class="table table-bordered" style="overflow-x:auto">
                <th class="col-md-1">4 YEAR SCHOOLS</th><th class="col-md-1">Transcripts</th><th class="col-md-1">Transferable Courses (TES)</th><th class="col-md-1">Common Core</th><th class="col-md-1">ACT/SAT</th><th class="col-md-1">Request for Info</th><th class="col-md-1">Agreements</th><th class="col-md-1">Dual Enrollment</th>
                <tr><td class="schoolname">ENMU</td><td>Send official copies of transcripts from all colleges and universities you have attended previously. </td><td><a href="http://www.enmu.edu/index.php?option=com_content&view=article&id=416&Itemid=1527">Transferable Courses</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a><br /><a href="https://www.enmu.edu/academics/resources/ug-catalog/">ENMU Common Core</a></td><td>ACT Code: 2636<br />SAT Code: 4299.</td><td><a href="https://enrollmentservices.enmu.edu/ENMUAdmissionsCentral.aspx">Request Info</a></td><td><a href="http://www.enmu.edu/search-enmu?q=articulation">Agreements</a></td><td>Students from these participating New Mexico schools can earn college credit while attending high school.<br /><a href="http://www.enmu.edu/dual-enrollment/dual-enrollment">More info</a></td></tr>
                <tr><td class="schoolname">IAIA</td><td>Students who have successfully completed the equivalent of 24 or more transferable semester credits at other accredited institutions may apply to be admitted as transfer students.</td><td><a href="https://iaia.edu/admissions/apply/">Transferable Courses</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a></td><td>ACT Code: 2654<br />SAT Code: 0180</td><td><a href="https://iaia.edu/admissions/">Request Info</a></td><td>No information found.</td><td>IAIA has established dual credit enrollment agreements with the Santa Fe Indian School, Walatowa Charter High School, Native American Community Academy, and Santa Fe Public Schools. High school students who are interested in enrolling in courses at IAIA for both college and high school credit must meet with their high school counselor to begin the dual-enrollment process.</td></tr>
                <tr><td class="schoolname">NAVAJO TECHNICAL<br />UNIVERSITY</td><td>For students who are transferring or have taken prior college courses: Official college transcripts from each college attended, indicating all courses taken (The NTU Registrar may require a written description of each course taken in order to evaluate its equivalency to NTU course). </td><td>NTU does consider credits for transfer from other accredited colleges. Decisions to accept incoming credits to NTU from another school are made by the Registrar.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a></td><td>Navajo Technical University is currently an open enrollment University, so there are no cutoffs for the GPA or the SAT/ACT.</td><td><a href="http://www.navajotech.edu/contact/staff/admissions/15-jerlynn-henry">Request Info</a></td><td>No information found.</td><td><p>"Dual credit program” means a program that allows high school students to enroll in college-level courses offered by a college that may be academic or career technical but not remedial or developmental, and simultaneously to earn credit toward high school graduation and a postsecondary degree or certificate.<br /><a href="http://www.navajotech.edu/academics/dual-credit">Dual Enrollment Program</a></td></tr>
                <tr><td class="schoolname">NMHU</td><td>Transcripts must be sent to Admissions Office</td><td>New Mexico Highlands accepts academic credits for transfer from institutions of higher education that are regionally accredited or are candidates for regional accreditation.<br /><a href="http://www.nmhu.edu/office-of-the-registrar/information-for-transfer-students/">Transfer Information</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="http://www.nmcollegetransfer101.com/snmcommoncore.html">NM Common Core</a></td><td>Students will be placed in the math and English classes based on their placement test scores. If a student feels they have been wrongly assigned, he or she may take a free on-campus placement test prior to registering for his or her first semester. If the scores meet the competency criterion, the student will be reassigned to the appropriate class.</td>
                  <td><a href="mailto:transcripts@nmhu.edu">Request Info</td><td><a href="http://www.sfcc.edu/news_and_events/sfcc_highlands_hec_articulation">SFCC</a><br /><a href="https://www.sanjuancollege.edu/student-services/departments/transfer-center/selecting-a-major-and-college/new-mexico-highlands-university-transfer-agreement/">San Juan College</a><br />
                  <a href="https://www.cnm.edu/depts/academic-affairs/transfer-agreements">CNM<br /><a href="http://www.armasineducation.com/images/uploads/uploadsFinal_Transfer_Guide_(1).pdf">Luna CC</a> </td><td>Highlands University is a state-supported institution established in 1893 and offers bachelor’s and master’s degrees in a variety of disciplines. Highlands is known for its multiethnic student body, small classes, research activities, student and faculty achievements, affordability and opportunities for students to combine study with real-world experience.<br /><a href="http://www.nmhu.edu/current-students/nmhu-dual-credit/">NMHU Dual Enrollment</a></td></tr>
                  <tr><td class="schoolname">NMSU</td><td>The transfer student must have official transcripts forwarded directly to the Office of University Admissions by the Registrar of each college or educational institution previously attended. The ACT or SAT may be required of students who have not earned credit for the first semester of college </td><td><a href="http://admissions.nmsu.edu/apply/transfer-students/">Transfer Equivalencies</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>ACT composite score of 21 or above (SAT of 990* or above. <br />ACT Code: 2638<br />SAT Code: 4531</td><td><a href="transfer@nmsu.edu">Request more info</a></td><td><a href="https://et.nmsu.edu/transfer-students/">Engineering Agreements</a></td><td>The Dual Credit Program at New Mexico State University allows high school juniors and seniors the unique opportunity to get a jump start on their college education. <br /><a href="http://dualcredit.nmsu.edu/">Dual Enrollment</a></td></tr>
                  <tr><td class="schoolname">NMT</td><td>You will be considered a transfer student if you have a minimum of 30 credit hours transfered from an accredited college or university (If you have fewer than 30 credit hours of transfer credit, follow the Entering Freshman section above). Students in good academic standing at other colleges and universities are eligible to apply for transfer admission to New Mexico Tech.</td><td>The Transfer Guides linked below, show how basic requirements as well as lower and upper division courses previously approved, transfer to NMT.<br /><a href="http://www.nmt.edu/transfer-credit/479-registrars-office/4678-transfer-guides">Transfer Guide Page</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a></td><td>Admission requirements:<br />
                    A 21 ACT composite score or a 970 SAT combined score (Critical Reading and Math)</td><td>Phone: <a href="tel:1-575-835-5424">(575) 835-5424</a><br /><a href="mailto:admission@admin.nmt.edu">Email</a></td><td>Articulation agreements provide a guarantee that transfer credits will be accepted within a student's major.<br /><a href="http://www.nmt.edu/images/stories/registrar/Amarillo_College_Transfer_Guide_Fall_2009.pdf">Amarillo College</a><br /><a href="http://www.nmt.edu/images/stories/registrar/San_Antonio_College_Transfer_Guide_2014.pdf">San Antonio</a><br /><a href="http://www.nmt.edu/images/stories/registrar/Central_New_Mexico_Community_College.pdf">CNM</a></td><td>The Dual Credit Program allows students to earn credit at the secondary and the postsecondary levels simultaneously and provide students an early glimpse of college life and college-level studies.</td></tr>
                    <tr><td class="schoolname">NNMC</td><td>Request that each college you’ve previously attended send an official transcript></td><td>Northern recognizes that there are many ways in which college credit may be amassed and, in an effort to maximize the opportunities available to its public...</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a></td><td>Our Course Placement Evaluation (CPE) process uses COMPASS as its testing instrument;
                      it also includes an appraisal of ACT and/or SAT test scores to determine the
                      proper level of English, math, or science courses in which you may enroll.</td><td><a href="http://nnmc.edu/home/student-gateway/admissions/admissions-interest-form/">Request Info</a></td><td>No information found.</td><td>Dual Credit is a statewide program allowing high school students to earn college credit tuition free.</td></tr>
                      <tr><td class="schoolname">UNM</td><td>Submit an official transcript from each college/university attended. Transcripts must be in a sealed envelope from the issuing college or school.</td><td><a href="http://admissions.unm.edu/future_students/transfer-course-equivalencies.html">Transferable Courses</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a><br /><a href="http://catalog.unm.edu/catalogs/2014-2015/undergrad-program.html">UNM Common Core</a></td><td>ACT composite score of 23 or an SAT total score of 1060.<br />ACT Code: 2650<br />SAT Code: 4845.</td><td><a href="mailto:unmlobos@unm.edu">Request more info</a></td><td>Agreements:<br /><a href="file:///F:/STEM%20UP/STEM%20UP/UNM_Doni/TransferWebsite/NM%20College%20Transfer/unm/agreements.html#CNMUNM">CNM to UNM Agreements</a></td><td><a href="http://advisement.unm.edu/dual-credit/dual-credit-admissions.html">Dual Enrollment</a></td></tr>
                      <tr><td class="schoolname">WNMU</td><td>If you are transferring from another college, please provide college transcripts. High school/GED transcripts are not required if you have more than 24 college credit hours.</td><td>It is the policy of Western New Mexico University to accept transfer credit from other New Mexico accredited or regionally accredited colleges and universities.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</a></td><td>Achievement of an ACT score of 21 or better in each Math, Reading, and English or SAT equivalent of 500 or better in each Math, Writing, and Reading - waives taking COMPASS. The ACT/SAT must have been taken in the past five years.</td><td><a href="mailto:admissions@wnmu.edu">Request Info</a></td><td><a href="http://wnmu.edu/wnmu-partners-with-glendale-community-college-for-biology-program/">Glendale</a><br /><a href="http://wnmu.edu/wnmu-signs-agreement-with-mexican-university/">Mexican University</a><br /><a href="http://wnmu.edu/wnmu-partners-with-cnm-for-transfer-program/">CNM</a><br /><a href="http://wnmu.edu/univ/consumerInfo/Transfer%20of%20Credit%20Policies%20and%20Articulation%20Agreements.htm">Articulation agreements</a></td><td>High school students from NM public schools or public charter schools may enroll at WNMU while they are completing their secondary education.</td></tr>
                      <th>2 YEAR SCHOOLS</th><th>Transcripts</th><th>Transferable Courses (TES)</th><th>Common Core</th><th>ACT/SAT</th><th>Request for Info</th><th>Agreements</th><th>Dual Enrollment</th>
                      <tr><td class="schoolname">CNM</td><td>Send Transcripts to:<br /> <a href="https://www.cnm.edu/depts/recordsretention/documents/request-transcript-from-another-institution">CNM Form</a></td><td>Credit earned at other post-secondary institutions and / or credit for prior learning may be transferred and applied toward program requirements.<br /><a href="http://tes.collegesource.com/view/tes_view01.asp?rid={0503AFD5-0DB5-454E-A227-CC387FC5A19F}&aid={3953860A-3699-4EFE-A557-7B3E41278DD9}">Transferable Courses</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>ACT, SAT, or Accuplacer scores need to be submitted in order to take classes.</td><td><a href="https://www.cnm.edu/depts/advisement/contact-advisement">Request more info</a></td><td><a href="https://www.cnm.edu/depts/academic-affairs/transfer-agreements">List of Agreements</a></td><td>The Dual Credit Program offers free classes* for students in central New Mexico attending a public, private, charter, or home school. High school students can take college-level classes and get a jump start on a certificate or degree. Under the Dual Credit program, tuition and registration fees are waived (*students are responsible for course fees and uniforms, if required).<br /><a href="https://www.cnm.edu/depts/outreach/dual-credit/high-school-and-dual-credit-programs">Dual Enrollment</a></td></tr>
                      <tr><td class="schoolname">CCC</td><td>The Admissions and Records Office maintains the official permanent academic records of all CCC students. An official transcript is the reproduction of a complete, unabridged permanent academic record validated with the college seal, signature of the registrar, and date of issue.</td><td>Clovis Community College will accept transfer credits from other institutions. Transfer credits must meet the minimum required grade for acceptance into any program. </td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>All students enrolling for the first time in courses with a math component, a writing component, or courses that require extensive reading are required to take the Accuplacer or other appropriate placement test before registering. If there are other test scores (e.g., ACT/SAT) that demonstrate college-level skill, the student may be exempt from the Accuplacer as determined by an Academic Advisor.</td><td><a href="http://www.clovis.edu/admissions/index.aspx">Request Info</a></td><td><a href="http://www.clovis.edu/advising/transfer.aspx">Transfer Agreements</a> with other schools</td><td>Clovis Community College, through dual credit enrollment agreements, provides students with an opportunity to take college courses while still in high school and earn high school credit as well as college credit.</td></tr>
                      <tr><td class="schoolname">DIN&#201;</td><td>Students who have attended other accredited colleges or universities prior to attending Diné College are considered transfer students, and must submit an official transcript(s) from the other colleges/universities attended. Diné College may evaluate and accept a maximum of forty (40) credit hours below the 300 course level with a grade of "C" or better. </td><td>Transfer of credit is awarded for coursework completed at other colleges and universities. Records and Admissions is responsible for conducting official credit evaluations. Transfer students wishing to receive transfer credit must request official transcripts from colleges previously attended.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>Open Enrollment: No SAT or ACT scores required to enroll, just a high school diploma or GED.</td><td><a href="http://www.dinecollege.edu/admissions/admissions-contacts.php">Request Info</a></td><td>No agreements found.</td><td>Area High School junior and seniors may be admitted upon submission of a completed and signed High School Concurrent Enrollment Form, which includes parent, high school counselor and principal signatures as well as a high school transcript to enroll in approved courses. When the High School Concurrent Enrollment has been accepted and approved by the appropriate Division Academic Dean, the student is required to take the placement tests as part of the admission process.</td></tr>
                      <tr><td class="schoolname">ENMU-ROSWELL</td><td>Official transcripts are those sent directly by an official of the high school and or college(s)/technical school(s) to the ENMU-Roswell Office of Admissions and Records.</td><td>Credit is accepted for college‑level work from institutions accredited by an accrediting body recognized by the Commission on Recognition of Postsecondary Accreditation (CORPA).</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td> Students may be exempt from portions or all of the University Skills Placement Test if they have equivalent transfer credit and/or ACT scores of 19 or higher in each of the tested areas.<br />ACT Code: 4662</td><td>Request for information:<br /><a href="tel:1-575-624-7000">575-624-7000</a></td><td>Representatives from both two year and four year colleges, universities, technical institutes and the state formed the New Mexico Business Administration Articulation Committee.</td><td>ENMU-Roswell’s dual credit and concurrent enrollment programs provide an opportunity for high school students to take college level courses taught by ENMU-Roswell faculty at various sites or through distance education.</td></tr>
                      <tr><td class="schoolname">ENMU-RUIDOSO</td><td>Official Transcripts are those sent directly by an official from previously attended schools to ENMU-Ruidoso Student Services.</td><td>New Mexico’s colleges and universities have collaborated to produce guides to assist students who plan to transfer before completing a program of study. Course modules are designed to help students select courses carefully so that they may transfer with little or no loss of credit.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td><p>Students can use their ACT score for placement when enrolling into classes. Students will need to bring in a copy of their ACT scores to Student Services.</p>
                        <p>Student has appropriate ACT (Eng 18, Read 17, Math 23) / SAT (Verb 440, Math 460) scores.</p></td><td>Request info via email:<br />
                        <a href="mailto:ruidosoadvising@enmu.edu">Email</td><td>No agreements found.</td><td>The Dual Credit is a program in which qualified highschool students can take college level courses and earn high school and college credit while tuition cost is waived by ENMU-Ruidoso.</td></tr>
                          <tr><td class="schoolname">LUNA CC</td><td>Official Transcripts must be sent to the Office of the Registrar.</td><td>Students will receive full credit for course work completed with a grade of "C" or better, provided that the courses are appropriate toward a certificate or degree.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td><p>A minimum English ACT score of 19, minimum Writing placement score of 70 or ENG098: Essentials of College Writing</p>
                            <p>A minimum Math ACT score of 18, LCC Placement score within the Algebra Domain or MATH075: General Mathematics</p>
                            <p>A minimum Reading ACT score of 18+, minimum Reading placement score of 81 or ENG098: Essentials of College Writing</p>
                            SAT school code: 2591<br />
                            ACT school code: 2628</td><td><a href="https://pathways.luna.edu/ICS/ClientConfig/HtmlContent/ContactUs.html">Contact Luna CC</a></td><td>No information found.</td><td>The Concurrent Enrollment/Dual-Credit program provides an extraordinary opportunity for students to take academic or vocational college courses while in high school. </td></tr>
                            <tr><td class="schoolname">MESALANDS CC</td><td>All transcripts must be sent directly from the high school (or college) to Mesalands Community College.</td><td>Only credit which is applicable toward a student’s signed Educational Plan of Study shall be considered for transfer credit. Students desiring credit for past college work must have an official transcript from each previous college mailed directly to Mesalands Community College and must complete a Request for Transcript Evaluation form. </td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>ACT scores are accepted in lieu of the College’s placement exam.<br />
                              ACT Code: 2641<br />
                              SAT Code: 3618</td><td><a href="http://www.mesalands.edu/findyourway/">Request Info</a></td><td><a href="http://www.mesalands.edu/about/university-alliances/">Agreements</a> with other schools</td><td>Mesalands Community College works with a number of area schools to provide high school students with Dual Enrollment options to begin earning college credit while still in high school. The majority of courses offered at Mesalands Community College are eligible for Dual Credit, including applied science courses.</td><tr>
                              <tr><td class="schoolname">NMJC</td><td>Transfer students must submit official transcripts from all colleges / universities attended for possible transfer credit. Transcripts should be sent immediately following the close of the last semester of attendance at other colleges.</td><td><a href="http://www.nmjc.edu/assets/documents/Transfer%20Equivalency%20Table.pdf">Transfer Equivalency Table</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td> If you have taken the ACT or SAT, you can use those scores as placement data.<br />
                                ACT Code: 2643<br />
                                SAT Code: 4553</td><td>Request Info<br /><a href="tel:1-575-492-2547">575-492-2547</a></td><td>Articulation agreements:<br />
                                Grantham University<br />
                                Grantham University (second agreement)<br />
                                New Mexico Highlands University<br />
                                Thomas Edison State College<br />
                                University of New Mexico<br />
                                University of Texas Permian Basin<br />
                                University of the Southwest</td><td>Dual Credit provides high school juniors and seniors who attend a public high school (with whom NMJC has a Dual Credit agreement) the opportunity to take college courses for which they will simultaneously earn both college credit and high school credit. Students should see their high school counselor for Dual Credit information.</td></tr>
                                <tr><td class="schoolname">NMMI</td><td>All applicants may send partial/unofficial transcripts or report cards to expedite the admissions process and then have official transcripts sent at the completion of the current semester.</td><td>Transfer credits are applicable if the student is able to pass a validation test for the class at the academy.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>No information found.</td><td>Phone:<br /> <a href="tel:1-575-622-6250">(575) 622-6250</a><br />
                                  Email:<br /><a href="mailto:admissions@nmmi.edu"> admissions@nmmi.edu</a></td><td>Carson Newman College will accept transfer students from NMMI without loss of credit toward any degree offered.
                                </td><td>A high school cadet may be permitted to take college courses concurrently with high school courses with permission of the appropriate Associate Dean and the Vice Dean/High School Principal.
                              </td></tr>
                              <tr><td class="schoolname">NMSU-ALAMOGORDO</td><td>All transcripts must be sent directly to the NMSU-A Admissions & Records Office by the Registrar of each institution attended. A student who conceals the fact that he/she has attended another college or university and who does not have the Registrar submit a transcript for each institution, whether or not credit was earned, will be subject to immediate suspension.</td><td>To facilitate the transfer of courses within certain degree programs, New Mexico colleges and universities have collaborated to develop transferable discipline modules.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>No information found.</td><td>Contact the NMSU Registrar’s Office at:<br /> <a href="tel:1-575-646-3411">(575) 646-3411</a><br /> or <a href="mailto:registra@nmsu.edu">registra@nmsu.edu.</a></td><td>No agreements found.</td><td>Dual Credit is a statewide sponsored program for eligible High School Students in which they can receive high school credit for taking approved college courses.
                              </td></tr>
                              <tr><td class="schoolname">NMSU-CARLSBAD</td><td>Request official transcripts of high school or GED and all previous college course work. All official transcripts should be mailed directly by the school or college registrar.</td><td>On the basis of transcript evaluation, credit may be granted for courses taken at other colleges or universities in which a grade of D or higher is earned. Semester and cumulative grade-point averages are computed solely on courses taken at New Mexico State University; however, transfer credits that are accepted will apply toward the degree.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td><p>Students may satisfy basic skills requirements in English by scoring 30 or higher on ACT English exams.</p><p>Students may satisfy basic skills requirements in mathematics by scoring 23 or higher on ACT mathematics exams.</p></td><td><a href="https://carlsbad.nmsu.edu/contact-us/">Request Info</a></td><td>If you are a current student enrolled at one of NMSU’s community college campuses and would like to transition to the NMSU-Las Cruces campus, you must complete a Change of Campus Form.</td><td>By enrolling in NMSU Carlsbad’s Dual Credit Program, high school students can get a jump start and earn elective credits that contribute to both their high school graduation requirements and their college credit hours.</td></tr>
                              <tr><td class="schoolname">NMSU-DONA ANA</td><td>Request official High School transcripts or GED test scores and college transcripts (if applicable) from each educational institution attended. All official transcripts must be mailed directly to DACC Office of Admissions by the records/registrar's office of the issuing institution(s).</td><td>Credits from accredited postsecondary institutions are automatically evaluated after official transcripts are received by the DACC Admissions Office. A transfer student may, on the basis of an evaluation of her/his transcripts, receive credit for courses taken at other postsecondary institutions in which a grade of D or higher was received.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td><p>ACT/SAT scores that are less than 2 years old may be accepted in lieu of the COMPASS assessment and it is not required for you to take the assessment.</p>
                                ACT school code: 2651<br />
                                SAT school code: 6296
                              </td><td><a href="http://dacc.nmsu.edu/admissions/contact-us/">Request Info</a></td><td>Articulation plans have been developed for the following DACC programs:<br /><a href="https://dacc.nmsu.edu/catalogs/wp-content/uploads/sites/69/2015/07/2015-2016-Catalog.pdf">Catalog</a> - page 32</td><td>The DACC Dual Credit Program allows high school students to explore college opportunities as well as get a head start on their college education. Through this program students have the opportunity to receive college and high school credits at the same time. Let DACC be part of your college transition!</td></tr>
                              <tr><td class="schoolname">NMSU-GRANTS</td><td>After submitting your admissions application, you need to contact your high school and all previously-attended colleges and order official transcripts.</td><td>A transferable degree program is designed specifically for two-year degrees to transfer directly to the related four-year Bachelors degree.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>If you took the ACT Test in High School, provide your scores and an advisor will determine if you may benefit from re-testing in Math and English.</td><td><a href="https://grants.nmsu.edu/students/transfers/">Transfer Advisor</a></td><td><p>Transferring the following two-year degrees to four-year degrees at NMSU or UNM should be relatively easy:</p>
                                Associate of Arts<br />
                                Criminal Justice<br />
                                Science<br />
                                Education<br />
                                General Engineering<br />
                                Early Childhood Education<br />
                                Pre-Business<br />
                                Social Services</td><td>The Dual Credit Program allows eligible high school students to enroll in college-level courses and earn credits at both the high school and college levels at the same time.
                              </td></tr>
                              <tr><td class="schoolname">SAN JUAN COLLEGE</td><td>Send transcripts to San Juan College Enrollment Services</td><td>Transferable Courses:<br /><a href="http://tes.collegesource.com/view/tes_view01.asp?rid=%7B1C20A4B3-72E7-47B0-97A0-224DFCF9DD11%7D&aid=%7B387937DE-91E0-477D-AED7-01A9F1263B21%7D">San Juan College Transfer Equivalency Systems</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>San Juan College has an open admission policy; meaning we do NOT require a minimum SAT or ACT score. We do require new students to take the Accuplacer test to help determine what courses they need to start in.</td><td>Request more info:<br />Phone: <a href="tel:1-505-326-3311">(505) 326-3311</a><br />Email: <a href="mailto:admissions@sanjuancollege.edu">admissions@sanjuancollege.edu</a></td><td><a href="http://www.sanjuancollege.edu/student-services/departments/transfer-center/selecting-a-major-and-college/#transferagree">Agreements</a></td><td>Dual credit allows a high school student from a public high school, private high school, home school, or public charter or Bureau of Indian Education (BIE) school to enroll in a SJC course(s).</td></tr>
                              <tr><td class="schoolname">SANTA FE CC</td><td>Submit official transcripts from all schools attended to the SFCC Registrar’s office.
                              </td><td>SFCC offers many of these courses; however, planning for effective transfer with maximum efficiency is ultimately your responsibility. You are highly encouraged to consult with advisers at the institution you plan to transfer, in order to clearly determine how the courses will be applied toward graduation.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td><p>Recent ACT or SAT scores may be used to determine placement. If you score a 19 or higher on the ACT English and Reading sections or a 450 or higher on the SAT Critical Reading section, you may enroll in English 111 or any course for which English 109 is a prerequisite. </p><p>If you score from 16-23 on the ACT Math section or from 400-590 on the SAT Mathematics section you may enroll in MATH 109 (Intermediate Algebra). If you score 24 or higher on the ACT Math section or 600 or higher on the SAT Mathematics section, you may enroll in MATH 121 (College Algebra), MATH 135 (Probability and Statistics) or MATH 150 (Pre-Calculus).</p>ACT Code: 2660<br />
                              SAT Code: 4816</td><td>Please contact the Testing Center:<br />
                              <a href="tel:1-505-428-1625">505-428-1625</a><br />
                              <a href="mailto:testing@sfcc.edu">Email</a></td><td>The Santa Fe Higher Education Center (SFHEC) is a partnership among four universities and Santa Fe Community College. The partner universities are Institute of American Indian Arts (IAIA), New Mexico Highlands University (NMHU), New Mexico State University (NMSU) and University of New Mexico (UNM).</td><td>Dual Credit allows high school students currently attending eligible area high schools to enroll in SFCC for fall or spring courses. The student receives both college and high school credit allowing them to apply the credits to their high school graduation requirements.</td></tr>
                              <tr><td class="schoolname">SIPI</td><td>Send transcripts to SIPI Admissions and Records</td><td>If a credit from another college is to be accepted toward a SIPI certificate or degree then the following must apply: An official transcript is required for evaluation. Admissions will evaluate the transfer credits and the academic department will determine which transfer credits are acceptable toward the student’s program of studies.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>All accepted new and transfer students are required to take the ACT Compass Test for placement.</td><td>Request Info:<br /><a href="tel:1-800-586-7474">800-586-SIPI</a></td><td>Business Administration<br />
                                Natural Resources Management<br />
                                <a href="http://www.sipi.edu/acadprog/catalog/SIPI%202014-2016%20Catalog.pdf">Catalog</a></td><td>No information found.</td></tr>
                                <tr><td class="schoolname">UNM-GALLUP</td><td>To receive transfer credit from previous institutions, official transcripts from those institutions must be mailed directly to UNM Gallup Office of Admissions. A transfer evaluation, reflecting those transfer credits acceptable at UNM, will be generated only after the student is officially admitted to a degree program at UNM Gallup or UNM Albuquerque.</td><td>Students intending to go to the Albuquerque campus to pursue a four-year degree should be aware that many of the necessary prerequisites for Albuquerque campus degree programs are offered at UNM Gallup. Students are cautioned that courses listed with an * (e.g., BSTC 232*) are considered to be technical/vocational courses and are not acceptable for transfer to baccalaureate programs except by petition to, and acceptance from, a UNM degree-granting program.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>ACT or SAT scores for Math & English Placement</td><td>Phone: <a href="tel:1-505-863-7524">(505) 863-7524</a></td><td><a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transitions</a></td><td>Dual credit is a program which provides public high school students the opportunity to receive credit for both high school and
                                  college by taking a single qualifying course.</td></tr>
                                  <tr><td class="schoolname">UNM-LOS ALAMOS</td><td>To have transcripts from other colleges evaluated, apply for degree status in a UNM-offered program, submit a $10.00 application fee and request that official copies of his/her transcript be sent from all previously attended colleges.</td><td>UNM–Los Alamos evaluates without prejudice courses from postsecondary institutions that are regionally accredited or are candidates for regional accreditation.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>A student planning to enroll in English or Math must meet the minimum placement scores determined by UNM–Los Alamos in either the ACT, SAT or Compass tests.
                                  </td><td>Phone: <a href="tel:1-505-662-5919">(505) 662-5919</a></td><td><a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transitions</a></td><td>The Dual Credit Program allows qualified public, charter and tribal school students to enroll in collegelevel courses offered by a public postsecondary educational institution that may be academic or career technical but not remedial or developmental, and simultaneously earn credit toward high school graduation and a postsecondary degree or certificate. </td></tr>
                                  <tr><td class="schoolname">UNM-TAOS</td><td>To submit academic transcripts, contact your prior school’s registrar’s office and ask them to send your transcript.</td><td>Academic credits for courses completed at other post-secondary institutions can be transferred to UNM-Taos.</td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>Entering freshmen whose ACT scores or UNM-Taos placement exam scores indicate a need for college preparatory course work, or entering freshmen with deficiencies in admission requirements, may be required to take Introductory Studies courses before entering their individual programs.</td><td>Request Info:<br />Phone:<a href="tel:1-575-737-6202">(575) 737-6202</a><br />Email: <a href="mailto:askalobo@unm.edu">askalobo@unm.edu</a></td><td><a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transitions</a></td><td>The High School Dual Enrollment Program includes academic and vocational programs. Its purpose is to award a select number of high school students the opportunity to take University courses (above the Basic Skills level) and to earn college credit while they are still enrolled in high school.</td></tr>
                                  <tr><td class="schoolname">UNM-VALENCIA</td><td>To receive transfer credit from previous institutions, official transcripts from those institutions must be mailed directly to UNM-Valencia, Admission/Registration Office.</td><td>A transfer evaluation, reflecting those transfer credits acceptable at UNM, will be generated only after the student is officially admitted to a degree program at UNM-Valencia or UNM-Main.<br /><a href="http://admissions.unm.edu/future_students/transfer-course-equivalencies.html">Transfer Equivalency System (TES)</a></td><td>NM Common core is transferable to all NM Schools.<br /><a href="nmcommoncore.php">NM Common Core</td><td>Order / Submit Official ACT or SAT scores. If you have not taken either, or if you will need to begin your Math or English progression again, you will need to take the COMPASS placement tests.</td><td>Request info:<br /><a href="1-505-925-8580">505-925-8580</a></td><td><a href="http://admissions.unm.edu/future_students/branch-transition.html">Branch Transitions</a></td><td>Dual Credit courses provide qualified public and charter school students the opportunity to enroll in college-level courses through UNM Valencia and earn both high school and college credit.</td></tr>
                                </table>
                              </div></div>-->
                              <div class="clear"></div>
                              <div class="container">
                                <?php include 'includes/footer.php'; ?>