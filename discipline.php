<?php include "includes/header.php";
?>
<?php 
if($_SESSION['role'] !== 'student') {
    header("Location: Admin/index.php");
}
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-copy"></i> <span>Exams</span></a>
      <ul>
          <li><a href="internal.php"><i class="icon icon-file"></i> <span>Internal Exam</span></a></li>
          <li><a href="semester.php"><i class="icon icon-file"></i> <span>Semester Exam</span></a></li>
      </ul>
    </li>
    <li><a href="library.php"><i class="icon icon-book"></i> <span>Library</span></a> </li>
    <li><a href="attendance.php"><i class="icon icon-signal"></i> <span>Attendance</span></a> </li>
    <li><a href="timetable.php"><i class="icon icon-table"></i> <span>Timetable</span></a></li>
    <li><a href="calender.php"><i class="icon icon-calendar"></i> <span>Calender</span></a></li>
    <li><a href="Elearning/pages/site/index.html" target="_blank"><i class="icon icon-copy"></i> <span>Lectures Note</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-picture"></i> <span>Gallery</span></a>
      <ul>
          <li><a href="cultural.php"><i class="icon icon-camera-retro"></i> <span>Culture Event</span></a></li>
          <li><a href="techfest.php"><i class="icon icon-film"></i> <span>Techfest</span></a></li>
      </ul>
    </li>
    <li><a href="transport.php"><i class="icon icon-truck"></i> <span>Transport</span></a></li>
    <li class="active"><a href="discipline.php"><i class="icon icon-bullhorn"></i> <span>Discipline</span></a></li>
    <li><a href="feedback.php"><i class="icon icon-comments"></i> <span>Feedback</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="#" title="Discipline" class="current tip-bottom">Discipline</a></div>
  </div>
<!--End-breadcrumbs-->

<!--All The content Goes Here-->
<div class="container-fluid">
	<div class="container-fluid" style="font-size: 15px;">
    <p style="font-family: serif;font-size: 20px;margin-top: 20px;">Rules &amp; Regulations &rarr;</p>
    <br>
    
    
        <p>&rsaquo; Students are subject to rules of conduct and behaviour framed by the authorities of the College.</p>
    
        <p>&rsaquo; College working hours are: 9.00 am to 1.00 pm, 2.00 pm to 5 pm.</p>
        <p>&rsaquo; The College discourages use of soft drinks. Wholesome food and drinks are available in the College Canteen, Cafeteria and the Hostel.
</p>
        <p>&rsaquo; Internal assessment is part of the evaluation. Please check the marks displayed on the notice board and bring any discrepancy to the notice of the Dean or HOD immediately. Change is not possible later.
</p>
        <p>&rsaquo; articipation in co-curricular or extra-curricular activities inside or outside the campus is not counted as absence from class. Attendance will be counted only when a copy of the participation certificate or a note from the concerned teacher is produced immediately before the Dean (Academics) or an Officer authorised by him.</p>
        <p>&rsaquo; The college takes note of serious misbehaviour, insubordination, habitual tardiness, irregular work habits or obscenity which are punishable by fine, suspension or dismissal. The College is declared an alcohol-smoke-drug-free area and offenders face dismissal.
</p>
        <p>&rsaquo; It is necessary to score a minimum of 70% to pass in any subject in the semester examination.
</p>
        <p>&rsaquo; Two internal examinations are conducted for B.Tech, MBA and marks of the best two are considered for internal assessment. Two internal examinations are conducted for MCA. Absence in two such tests, even with medical certificate, cannot entitle a student to double marks in the one test answered by them.</p>
        <p>&rsaquo; The management is not responsible for the safety of valuables of students.
</p>
        <p>&rsaquo; The students are warned they must follow all the safety regulations while conducting practicals in the laboratories and the management is not responsible for any physical damage or mishap that might occur out of students negligence.
</p>
        <p>&rsaquo; First and Second Year BE students are required to dress in the uniform stipulated by the College. MBA and MCA students are required to wear uniform on designated days. All students' are expected to be dressed neatly and decently. They are not expected to wear T-shirts and jeans in the campus.
</p>
        <p> &rsaquo; Students vehicles may be parked and locked in the allotted place only. However, the College is not responsible for their safety.
</p>
        <p>&rsaquo; Every student is expected to display the identity card on his person for easy identification.
</p>
        <p>&rsaquo; No student is permitted to take part in agitations directed against the lawful authority of the Government. Membership of clubs or associations outside the campus and participation in public movements is undesirable. Students are not allowed to collect donation from the public for any purpose.
</p>
        <p>&rsaquo; College fees are to be paid within two weeks of the reopening of semester classes. A late fee of Rs.500 is payable after that. If fees are not paid within four weeks after reopening, the name of the student will be struck from the rolls. Tuition and other fees once paid cannot be refunded. However, refund of deposit may be claimed.
</p>
        <p>&rsaquo; Those who wish to leave College for any reason will be given a TC only on payment of all fees payable for the remaining semesters and clearing any other dues. Such students have to return any scholarship, stipend or financial assistance given.
</p>
        <br>
        
        <p style="font-family: serif;font-size: 20px;margin-top: 20px;">REGULATIONS GOVERNING THE MALPRACTICES BY THE STUDENTS DURING INTERNAL/UNIVERSITY EXAMINATIONS &rarr;</p>
        <br>
        <p><b>Every student appearing for the Internal External/University Examination is liable to be charged with committing malpractice(s), if he/she is observed as committing any one or more of the following acts:</b></p>
        <br>
        <p>&rsaquo; Misbehavior with officials or any other kind of rude behavior in or near the Examination Hall and using obscene or abusing language.
</p>
        <p>&rsaquo; Writing on the Question Paper and/or passing on the same to other student(s) in the Examination Hall.
</p>
        <p>&rsaquo; Possession of electronic gadgets like mobile phones, programmable calculator, pen-drive or such other /storage devices in the Examination Hall.
</p>
        <p>&rsaquo; Communicating with any other student(s) or any other person(s) inside or outside the Examination Hall with a view to take assistance or aid to write answers in the examination.
</p>
        <p>&rsaquo; Copying from the material or matter or answer(s) of another student or from similar aid or assistance rendered by another student within the Examination Hall.
</p>
        <p>&rsaquo; Making any request of representation or offer of any threat for inducement or bribery to Room Superintendent and/or any other official for favours in the Examination Hall or in the answer script.
</p>
        <p>&rsaquo; Approaching directly or indirectly the teaching staff to bring about undue pressure or influence upon them for favour in the examination.
</p>
        <p>&rsaquo; Taking away or Taking in the answer script pages or supplementary sheets or tearing them off and/or inserting pages written outside the examination hall into the answer scripts.
</p>
        <p>&rsaquo; Receiving material from outside or inside the Examination Hall, for the purpose of copying (inclusive of electronic communication).
</p>
        <p>&rsaquo; Bringing into the Examination Hall or being found in possession of portions of an unauthorized book, manuscript, or such other material or matter in the Examination Hall.
</p>
        <p>&rsaquo; Copying or taking aid from any material or matter referred to in sub-clauses (h & i) above to answer in the examinations.
</p>
        <p>&rsaquo; Impersonating or allowing any other person to impersonate to answer in his/her place in the Examination Hall.
</p>
        <p>&rsaquo; Committing any other act or commission or omission intending to gain an advantage or favour in the examination by misleading, deceiving or inducing the examiner or official.
</p>
        <p>&rsaquo; Having in one’s possession any written matter on scribbling pad, calculator, plam, hand, leg or any other part of the body, hand kerchiefs, clothing, socks, instrument box, identity card, scales electronic gadgets etc.,
</p>
        <p>&rsaquo; Destroying any evidence of malpractice, like tearing or militating the answer script(s) from the Examination Hall.
</p>
        
    </div>
</div>
<!--End Of Container Fluid-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include "includes/footer.php";?>

<!--end-Footer-part-->
