<?php
	//if upload button is pressed
	if(isset($_POST['edit'])){
		
		//connect to the database
		$db = mysqli_connect("localhost","root","12345","cn342");
		
		$story = $_POST['comment1'];
		
		$sql = "INSERT INTO adminstrativeboardth (Story) VALUES ('$story')";
		mysqli_query($db, $sql); //stores the submit data into the database table: images
		
		//Now let's move the upload image into the folder: images

	}
?>
<!DOCTYPE html>
<html>

	<head>
		<title>หน้าผู้บริหารคณะ</title>
			
		<link rel="stylesheet" href="nav.css">
		
			
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
				<a href="ProgramAutoTH.php" >วิศวกรรมยานยนต์</a>
				<a href="ProgramSoftTH.php">วิศวกรรมซอฟต์แวร์</a>

				<li><a href="DepartmentTH.php">หน่วยงาน</a></li>
				<li><a href="NewsAndEveteTH.php">ข่าวสารเเละกิจกรรม</a></li>
		
		<img class="mySlides" src="image/pageonesix.jpg" width="100%" height="50%">
		<img class="mySlides" src="image/pageonenine.jpg"width="100%" height="50%">
		<img class="mySlides" src="image/pageoneeight.jpg"width="100%" height="50%">
			<script>
			var slideIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
				  x[i].style.display = "none"; 
				}
				slideIndex++;
				if (slideIndex > x.length) {slideIndex = 1} 
				x[slideIndex-1].style.display = "block"; 
				setTimeout(carousel, 2000); 
			}
			</script>


			<br>


	<div id ="adminstrative board">
		<div class="adminstrativethai1">
		<h1>คณะผู้บริหาร</h1>
	</div>
	
	<!-- Start -->
	<form method="post" action="AdminstrativeBoardTH.php" enctype="multipart/form-data">
		<div class="adminstrativethai2">
			<img src="img/a1.jpg" width="13%" align="left" >
			<FONT>
				<textarea name="comment1" rows="5" cols="40"></textarea>
				<?php
					$db = mysqli_connect("localhost","root","12345","cn342");
					$sql = "select * from adminstrativeboardth";
					$result = mysqli_query($db,$sql);
					$row = mysqli_fetch_assoc($result);
	
					echo "<h2>".$row['Story']."</h2>";
				?>
			</FONT>

		</div>
	
	
		<br><br><br><br><br><br><br><br>
		<a href="http://127.0.0.1/tai/TU-Pattaya-admin/AdminstrativeBoardTH/AddNews.php">
			<button type="button" >เเก้ไขรูปภาพ</button>
		</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<input type="submit" name="edit" value="เเก้ไข" onclick="insert()" > 
	</form>
	</div>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>
	<hr>
	<br>
	








	
		</li>
		
		
		
		
		
		
		

	<footer>
	
	
<div id ="footer">

	<div class="footerleft">
		
		
		<h3>ลิ้งที่เกี่ยวข้อง</h3>
		<ul style="list-style: decimal">
			<li><a href="https://www.engr.tu.ac.th/"target="_blank">คณะวิศวกรรศาสตร์ มหาลัยธรรมศาสตร์</a></li>
			<li><a href="https://pattayacenter.tu.ac.th/"target="_blank">ธรรมศาสตร์ศูนย์พัทยา</a></li>
			<li><a href="http://www2.citu.tu.ac.th/citu/www/content/%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A-learning-resort/"target="_blank">อุทยานการเรียนรู้&nbsp;&nbsp;&nbsp</a></li>
			<li><a href="http://main.library.tu.ac.th/tulib2013/"target="_blank">สำนักหอสมุด&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp</a></li>
		</ul>
		
		
	</div>
	
	<div class="footerright">
		<h3>online</h3>
		<a href ="https://www.facebook.com/pg/%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B8%A8%E0%B8%B9%E0%B8%99%E0%B8%A2%E0%B9%8C%E0%B8%9E%E0%B8%B1%E0%B8%97%E0%B8%A2%E0%B8%B2-763195940468903/events/?ref=page_internal"target="_blank"><img src="image/facebookk.jpg" width ="28%"></a>
		<a href ="https://www.twitter.com"target="_blank"><img src ="image/twitterr.jpg" width="28%"></a>
	</div>
	</footer>
		
	</ul>
	
	
	
	
		
		
	
	</body>
	
</html>