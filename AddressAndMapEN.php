<?php

$db_name = "cn342";
$connection = mysqli_connect("localhost", "root", "12345");
$db = mysqli_select_db($connection, $db_name);

$sql = "SELECT * FROM addressandmapeng";

$result = mysqli_query($connection, $sql);
mysqli_query($connection, "Set Names UTF8");



if ( $result == null ){
	echo "Something went wrong";
}
else {
	while( $row = mysqli_fetch_array($result) ){
		$detail = $row["detail"];

	}
}
?>
<html>

	<head>
		<title>address and map</title>
			
		<link rel="stylesheet" href="nav.css">
		
			
	</head>
	<body>
	<div class="container">
	
	<img src ="image/newheader-en.jpg" width="945px" >
	<a href ="HomePageTH.php"><img src="image/thai.jpg" width="55px">
	<a href ="HomePageEN.php"><img src="image/england.jpg" width="55px">
	

	
	
	
	
	<ul>
		<li><a href="HomePageEN.php">HOME</a></li>
		
		<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">ABOUT</a>
		<div class="dropdown-content" >
		<a href="HistoryEN.php">HISTORY</a>
		<a href="AdminstrativeBoardEN.php">ADMINSTRATIVE BOARD</a>
		<a href="AddressAndMapEN.php">ADDRESS AND MAP</a>
		
		
		<li><a href="StudentLifeEN.php">STUDENT'S LIFE</a></li>
		
		<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">PROGRAMS</a>
		<div class="dropdown-content">
		<a href="ProgramAutoEN.php">AUTOMOTIVE ENGINEER</a>
		<a href="ProgramSoftEN.php">SOFTWARE ENGINEER</a>

		<li><a href="DepartmentEN.php">DEPARTMENT</a></li>
		<li><a href="NewsAndEveteEN.php">NEWS & EVENTS</a></li>
		
		

		
		
		
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
<div id ="one">
	<div class="mapeng">
	<form action="AddressAndMapEN.php" method="GET">
	 <textarea name="comment1" rows="1" cols="40"><?php echo $detail;?></textarea>
		<h2><?php echo $detail ?></h2>
		
	
		 
		<?php
		 
			if (isset($_GET['submit'])) {
				$db_name = "cn342";
				$connection = mysqli_connect("localhost", "root", "12345");
				$db = mysqli_select_db($connection, $db_name);
				$comment1 = $_GET['comment1'];
				

				$sql = "UPDATE addressandmapeng SET detail = '$comment1' WHERE id = 2";

				if (mysqli_query($connection, $sql)){
					//echo "Record updated successfully";
				} else {
					printf("Error updating record: %s", mysqli_error($connection));
				}
				
				mysqli_query($connection, "Set Names UTF8");
			}
		
		?>
	<div style ="text-align:center;">
	<input style ="width:200px"type="submit" name="submit" value="เเก้ไข" onclick="insert()" >  
	</div>
	<br>
	<center>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1944.4265108765605!2d100.99503310642108!3d12.917166607029154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14042f784f63e495!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LiY4Lij4Lij4Lih4Lio4Liy4Liq4LiV4Lij4LmMIOC4qOC4ueC4meC4ouC5jOC4nuC4seC4l-C4ouC4sg!5e0!3m2!1sth!2sth!4v1488110507784" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</center>

	</div>

	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<hr>
	<br>
	








	
		</li>
		
		
		
		
		
		
		

	<footer>
	
	
<div id ="footer">

	<div class="footerleft">
		
		
		<h3>RELATED LINKS</h3>
		<ul style="list-style: decimal">
			<li><a href="https://www.engr.tu.ac.th/"target="_blank">FACULTY OF ENGINEERING</a></li>
			<li><a href="https://pattayacenter.tu.ac.th/"target="_blank">THAMMASAT UNIVERSITY PATTAYA</a></li>
			<li><a href="http://www2.citu.tu.ac.th/citu/www/content/%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A-learning-resort/"target="_blank">LEARNING RESORT&nbsp;&nbsp;&nbsp</a></li>
			<li><a href="http://main.library.tu.ac.th/tulib2013/"target="_blank">TU LIBRARY&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp</a></li>
		</ul>
		
		
	</div>
	
	<div class="footerright">
		<h3>ONLINE</h3>
		<a href ="https://www.facebook.com/pg/%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B8%A8%E0%B8%B9%E0%B8%99%E0%B8%A2%E0%B9%8C%E0%B8%9E%E0%B8%B1%E0%B8%97%E0%B8%A2%E0%B8%B2-763195940468903/events/?ref=page_internal"target="_blank"><img src="image/facebookk.jpg" width ="28%"></a>
		<a href ="https://www.twitter.com"target="_blank"><img src ="image/twitterr.jpg" width="28%"></a>
	</div>
	</footer>
		
	</ul>
	
	
	
	
		
		
	
	</body>
	
</html>