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
		<li><a href="NewsAndEveteTH.php">ข่าวสารเเละกิจกรรม</a></li>
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
          <center>สาขาวิชาวิศวกรรมยานยนต์ </center>
          <center>♢ (หลักสูตรใหม่ พ.ศ. 2556) ♢</center>
          <br><br><br>
        </h3>
    </p>
    <p>
      <b>☀︎ ชื่อหลักสูตร ☀︎</b>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมยานยนต์  
      <br><br>
      <b>☀︎ จำนวนหน่วยกิตที่เรียนตลอดหลักสูตร 146 หน่วยกิต ☀︎</b>
      <br><br>
      <b>☀︎ รูปแบบของหลักสูตร ☀︎</b>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;เป็นหลักสูตรระดับปริญญาตรีหลักสูตร 4 ปี
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      หลักสูตรจัดการศึกษาเป็นภาษาอังกฤษ
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      รับทั้งนักศึกษาไทยและนักศึกษาต่างชาติที่สามารถใช้ภาษาไทยได้เป็นอย่างดี
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      ให้ปริญญาเพียงสาขาวิชาเดียว
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      เป็นหลักสูตรของสถาบันโดยเฉพาะ
      <br><br>
      <b>☀︎ อาชีพที่สามารถประกอบได้หลังสำเร็จการศึกษา ☀︎</b>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      1)&nbsp;วิศวกรรมยานยนต์ โดยสามารถทำงานในอุตสาหกรรมยานยนต์ เช่น การออกแบบชิ้นส่วนยานยนต์ การออกแบบระบบในยานยนต์ และการควบคุมกระบวนการผลิตยานยนต์ เป็นต้น
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      2)&nbsp;วิศวกรเครื่องกล โดยสามารถออกแบบ ควบคุม และซ่อมบำรุงเครื่องจักรกล ควบคุมการผลิตและกระบวนการต่างๆในโรงงานอุตสาหกรรม ออกแบบและควบคุมงานระบบต่างๆ เช่น ระบบปรับอากาศ ระบบ การลำเลียงน้ำในอาคาร รวมทั้งการวิเคราะห์และปรับปรุงการใช้พลังงานในโรงงาน อาคาร และหน่วยงานต่างๆ ได้
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      3)&nbsp;นักวิจัยในสาขาวิศวกรรมยานยนต์ หรือ วิศวกรรมเครื่องกล 
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      4)&nbsp;ครูอาจารย์ในสถาบันการศึกษาทางด้านวิทยาศาสตร์และเทคโนโลยี
      <br>      <br><br>
      <b>☀︎ สถานที่จัดการเรียนการสอน คณะวิศวกรรมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ☀︎</b>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
      เรียนที่คณะวิศวกรรมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต สำหรับชั้นปีที่ 1-2 และเรียนที่ศูนย์พัทยาตั้งแต่ชั้นปีที่ 3 จนจบหลักสูตร

      
      
    </p>
  </section>
    
  <section id="content2">
    <p>
      <br><br>
      <b>⚙ โครงสร้างหลักสูตร วิศวกรรมยานยนต์ พ.ศ.2556 ⚙</b>
      <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      นักศึกษาจะต้องจดทะเบียนศึกษารายวิชา รวมไม่น้อยกว่า 146  หน่วยกิต โดยศึกษารายวิชาต่างๆ ครบตามโครงสร้างองค์ประกอบ และข้อกำหนดของหลักสูตรดังนี้
      <br><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       วิชาศึกษาทั่วไป    43    หน่วยกิต
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
       รวมทั้งหมด    146    หน่วยกิต
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
      s
  </section>
    
  <section id="content4">
    <p >
      <h2><center>☁︎ ปีการศึกษา 2559 ☁︎</center></h2>
      <center>
      <br><a href="Files/PDF schedule 2-2559 - software - update 13-1-2560.pdf" style="text-decoration:none" >➤ ตารางสอน ภาคการศึกษาที่ 2/2559</a>
      <br>
      </center>
      <h2><center>☁︎ ปีการศึกษา 2558 ☁︎</center></h2>
      <center>
      <br><a href="Files/schedule 3-2558 - Soft-en update 13-6-2559.pdf" style="text-decoration:none" >➤ ตารางสอน ภาคการศึกษาที่ 3/2558</a>
      <br>
      </center>
    </p>
  </section>
    
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="JS.js"></script>

</body>
</html>