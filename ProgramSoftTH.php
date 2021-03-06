﻿
<!DOCTYPE html>
<html>
<head>
  <title>วิศวกรรมซอฟต์แวร์</title>
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" type="text/css" href="Program.css">
</head>
<body>
<div class="container">
	
	<img src ="image/newsheader.jpg" width="945px" >
	<a href ="HomePageTH.php"><img src="image/thai.jpg" width="55px">
	<a href ="HomePageEN.php"><img src="image/england.jpg" width="55px">
	
	<ul>
		<li><a href="HomePageTH.php">หน้าหลัก</a></li>
		
		<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">เกี่ยวกับคณะ</a>
		<div class="dropdown-content" >
		<a href="HistoryTH.php">ประวัติ</a>
		<a href="AdminstrativeBoardTH.php">ผู้บริหารคณะ</a>
		<a href="AddressAndMapTH.php">ที่อยู่เเละแผนที่</a>

		<li><a href="StudentLifeTH.php">ชีวิตนักศึกษา</a></li>
		<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">หลักสูตร</a>
		<div class="dropdown-content">
		<a href="ProgramAutoTH.html" >วิศวกรรมยานยนต์</a>
		<a href="ProgramSoftTH.html">วิศวกรรมซอฟต์แวร์</a>

		<li><a href="DepartmentTH.php">หน่วยงาน</a></li>
		<li><a href="NewsAndEventTH.php">ข่าวสารเเละกิจกรรม</a></li>
</div>

<h1>วิศวกรรมซอฟต์แวร์</h1>

<div class="slider">
  <div class="slide_viewer">
    <div class="slide_group">
      <div class="slide"><img src="image/Soft1.png" alt="Error" style="width:100%;height:100%;">
      </div>
      <div class="slide"><img src="image/Soft2.png" alt="Error" style="width:100%;height:100%;">
      </div>
      <div class="slide"><img src="image/Soft3.png" alt="Error" style="width:100%;height:100%;">
      </div>
      <div class="slide"><img src="image/Soft4.png" alt="Error" style="width:100%;height:100%;">
      </div>
    </div>
  </div>
</div><!-- End // .slider -->

<div class="slide_buttons">
</div>

<div class="directional_nav">
  <div class="previous_btn" title="Previous">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
      <g>
        <g>
          <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
      c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>
          <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0 c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564  c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
        </g>
      </g>
    </svg>
  </div>

  <div class="next_btn" title="Next">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
      <g>
        <g>
          <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5  c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288  c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>
          <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035      L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
        </g>
      </g>
    </svg>
  </div>
</div><!-- End // .directional_nav -->


<!-- Box Content -->


<main>
  
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">ข้อมูลทั่วไป</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">หลักสูตร</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">แผนการเรียน</label>
    
  <input id="tab4" type="radio" name="tabs">
  <label for="tab4">ตารางสอน/ตารางสอบ</label>
    
  <section id="content1">
    <p>
        <h3>
          <center>รายละเอียดของหลักสูตร</center>
          <center>หลักสูตรวิศวกรรมศาสตรบัณฑิต</center>
          <center>สาขาวิชาวิศวกรรมซอฟต์แวร์</center>
          <center>♢ (หลักสูตรใหม่ พ.ศ. 2557) ♢</center>
          <br><br><br>
        </h3>
    </p>
    <p>
      <b>☀︎ ชื่อหลักสูตร ☀︎</b>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์
      <br><br>
      <b>☀︎ จำนวนหน่วยกิตที่เรียนตลอดหลักสูตร 133 หน่วยกิต ☀︎</b>
      <br><br>
      <b>☀︎ รูปแบบของหลักสูตร ☀︎</b>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;เป็นหลักสูตรระดับปริญญาตรีหลักสูตร 4 ปี
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      หลักสูตรจัดการศึกษาเป็นภาษาไทย
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      รับทั้งนักศึกษาไทยและนักศึกษาต่างชาติที่สามารถใช้ภาษาไทยได้เป็นอย่างดี
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      ให้ปริญญาเพียงสาขาวิชาเดียว
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      เป็นหลักสูตรของสถาบันโดยเฉพาะ
      <br><br>
      <b>☀︎ อาชีพที่สามารถประกอบได้หลังสำเร็จการศึกษา ☀︎</b>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วิศวกรซอฟต์แวร์ (Software Engineer) หรือนักเขียนโปรแกรม (Programmer/Developer)
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      นักวิเคราะห์ระบบหรือนักออกแบบระบบ (System Analyst / Designer)
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วิศวกรความต้องการ (Requirement Engineer)
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      นักประกันคุณภาพซอฟต์แวร์ (Software Quality Assurance)
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วิศวกรปรับปรุงกระบวนการซอฟต์แวร์ (Software Process Improvement Engineer)
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      นักทดสอบระบบ (Software Tester)
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      สถาปนิกซอฟต์แวร์ (Software Architect)
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      นักบูรณาการระบบ (System Integrator)
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      ผู้จัดการโครงการซอฟต์แวร์ (Software Project Manager)
      <br><br>
      <b>☀︎ สถานที่จัดการเรียนการสอน คณะวิศวกรรมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ☀︎</b>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      เรียนที่คณะวิศวกรรมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต สำหรับชั้นปีที่ 1 และเรียนที่ศูนย์พัทยาตั้งแต่ชั้นปีที่ 2 จนจบหลักสูตร

      
      
    </p>
  </section>
    
  <section id="content2">
    <p>
      <br><br>
      <b>⚙ โครงสร้างหลักสูตร วิศวกรรมซอฟต์แวร์ พ.ศ.2557 ⚙</b>
      <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      นักศึกษาจะต้องจดทะเบียนศึกษารายวิชา รวมไม่น้อยกว่า 133 หน่วยกิต โดยศึกษารายวิชาต่างๆ ครบตามโครงสร้างองค์ประกอบ และข้อกำหนดของหลักสูตรดังนี้
      <br><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       วิชาศึกษาทั่วไป    30    หน่วยกิต
      </b>
      <br><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       วิชาเฉพาะ    97    หน่วยกิต
      </b>
      <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      ➤ วิชาแกน    15    หน่วยกิต
      <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      ➤ วิชาเฉพาะ    82    หน่วยกิต
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;
       วิชาบังคับ    61    หน่วยกิต
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;
       วิชาบังคับ    21    หน่วยกิต
      <br><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       วิชาเลือกเสรี    6    หน่วยกิต
      </b>
      <br><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       รวมทั้งหมด    133    หน่วยกิต
      </b>
    </p>
    
  </section>
    
  <section id="content3">
    <p>
      <br><br>
      <center><b>✎ แผนการศึกษา ✎</b></center>
      <br><br>
    </p>
    <img src="image/EducationProgram1.png" alt="Error" style="width:100%;height:100%;">
    <img src="image/EducationProgram2.png" alt="Error" style="width:100%;height:100%;">
    <img src="image/EducationProgram3.png" alt="Error" style="width:100%;height:100%;">
    <p>
      <br><br>
      <center><b>✎ วิชาเลือก  21  หน่วยกิต ✎</b></center>
      <br><br>
      เลือกอย่างน้อย 12 หน่วยกิตจากรายวิชาต่อไปนี้
      <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.323&nbsp;&nbsp;&nbsp;หัวข้อพิเศษทางวิศวกรรมซอฟต์แวร์ 1 
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.324&nbsp;&nbsp;&nbsp;หัวข้อพิเศษทางวิศวกรรมซอฟต์แวร์ 2
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.326&nbsp;&nbsp;&nbsp;มโนทัศน์ภาษาโปรแกรม  
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.327&nbsp;&nbsp;&nbsp;ปฏิสัมพันธ์ระหว่างมนุษย์และคอมพิวเตอร์ด้วยวิธีการทางวิศวกรรมซอฟต์แวร์ 
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.332&nbsp;&nbsp;&nbsp;การปรับแต่งคอมพิวเตอร์แม่ข่าย 
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.333&nbsp;&nbsp;&nbsp;การพัฒนาโปรแกรมประยุกต์สำหรับอุปกรณ์เคลื่อนที่
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.334&nbsp;&nbsp;&nbsp;การจัดการความรู้
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.335&nbsp;&nbsp;&nbsp;การนำเสนอแบบสื่อหลายมิติ 
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.336&nbsp;&nbsp;&nbsp;คอมพิวเตอร์กราฟฟิค 
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.337&nbsp;&nbsp;&nbsp;วิศวกรรมพาณิชย์อิเล็กทรอนิกส์ 
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.338&nbsp;&nbsp;&nbsp;การออกแบบและพัฒนาระบบสารสนเทศ 
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.339&nbsp;&nbsp;&nbsp;เทคโนโลยีชีวสารสนเทศ 
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.350&nbsp;&nbsp;&nbsp;ปัญญาประดิษฐ์
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.353&nbsp;&nbsp;&nbsp;การรู้จำรูปแบบ
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.353&nbsp;&nbsp;&nbsp;การประมวลผลภาษาธรรมชาติเชิงสถิติ 
      <br><br>
      เลือกศึกษารูปแบบใดรูปแบบหนึ่ง 9 หน่วยกิต ดังต่อไปนี้
      <br><br>
      วิชาโครงงานทางวิศวกรรมซอฟต์แวร์ 9 หน่วยกิต
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.403&nbsp;&nbsp;&nbsp;การฝึกงานทางวิศวกรรมซอฟต์แวร์
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.404&nbsp;&nbsp;&nbsp;โครงงานทางวิศวกรรมซอฟต์แวร์ 1
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.405&nbsp;&nbsp;&nbsp;โครงงานทางวิศวกรรมซอฟต์แวร์ 2
      <br><br>
      วิชาสหกิจศึกษาวิศวกรรมซอฟต์แวร์ 9 หน่วยกิต
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.406&nbsp;&nbsp;&nbsp;การเตรียมสหกิจศึกษาวิศวกรรมซอฟต์แวร์ 
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      วช.407&nbsp;&nbsp;&nbsp;สหกิจศึกษาวิศวกรรมซอฟต์แวร์ 
      <br><br>
      วิชาเลือกเสรี 6 หน่วยกิต
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      นักศึกษาอาจเลือกศึกษาวิชาใดก็ได้ที่เปิดสอนในมหาวิทยาลัยธรรมศาสตร์ เป็นวิชาเลือกเสรี 6 หน่วยกิต 
      <br>“ยกเว้นวิชาพื้นฐานวิทยาศาสตร์และคณิตศาสตร์ทุกวิชา วิชาในหลักสูตรวิชาศึกษาทั่วไป ส่วนที่ 1 และส่วนที่ 2 ที่ใช้รหัสย่อ มธ. ทุกวิชา และวิชา ท.162 และ ท.163”
      
    </p>
  </section>
    
  <section id="content4">
    <p >
      <h2><center>☁︎ ปีการศึกษา 2559 ☁︎</center></h2>
      <center>
      <br><a href="Files/PDF schedule 2-2559 - software - update 13-1-2560.pdf" style="text-decoration:none" >➤ ตารางสอน ภาคการศึกษาที่ 2/2559</a>
      <br><a href="Files/PDF schedule 2-2559 - pattaya - update 9-1-2560.pdf" style="text-decoration:none" >➤ ตารางสอน ภาคการศึกษาที่ 2/2559 (ศุนย์พัทยา)</a>
      <br><a href="Files/schedule 1-2559 - software - update 15-8-2559.pdf" style="text-decoration:none" >➤ ตารางสอน ภาคการศึกษาที่ 1/2559</a>
      <br><a href="Files/sectionEL-59.pdf" style="text-decoration:none" >➤ แบ่ง Section วิชาภาษาอังกฤษ 2559</a>
      </center>
      <h2><center>☁︎ ปีการศึกษา 2558 ☁︎</center></h2>
      <center>
      <br><a href="Files/schedule 3-2558 - Soft-en update 13-6-2559.pdf" style="text-decoration:none" >➤ ตารางสอน ภาคการศึกษาที่ 3/2558</a>
      <br><a href="Files/schedule 2-2558 - software - update 13-1-2559.pdf" style="text-decoration:none" >➤ ตารางสอน ภาคการศึกษา 2/2558</a>
      <br><a href="Files/section EL171 2-2558.pdf" style="text-decoration:none" >➤ แบ่ง Section วิชา EL171</a>
      <br><a href="Files/section EL172 2-2558.pdf" style="text-decoration:none" >➤ แบ่ง Section วิชา EL172</a>
      <br><a href="Files/schedule 1-2558 - software - update 31-8-2558.pdf" style="text-decoration:none" >➤ ตารางสอน ภาคการศึกษา 1/2558</a>
      <br><a href="Files/schedule 2-2557 - software - update 8-1-2558.pdf" style="text-decoration:none" >➤ ตารางสอน ภาคการศึกษา 2/2557</a>
      <br><a href="Files/schedule 3-2557 - soft en.pdf" style="text-decoration:none" >➤ ตารางสอน ภาคการศึกษา ฤดูร้อน/2557</a>
      </center>
    </p>
  </section>
    
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="JS.js"></script>

</body>
</html>