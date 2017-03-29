<?php

$db_name = "cn342";
$connection = mysqli_connect("localhost", "root", "12345");
$db = mysqli_select_db($connection, $db_name);

$sql = "SELECT * FROM adminstrativeboardengcomment";

$result = mysqli_query($connection, $sql);
mysqli_query($connection, "Set Names UTF8");



if ( $result == null ){
	echo "Something went wrong";
}
else {
	while( $row = mysqli_fetch_array($result) ){
		
		$detail1 = $row["detail1"];
		$detail2 = $row["detail2"];
		$detail3 = $row["detail3"];
		$detail4 = $row["detail4"];
		$detail5 = $row["detail5"];
	}
}
?>
<html>

	<head>
		<title>adminstrative board</title>
			
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
	
	<div class="adminstrativeeng1">
	<h1>Administrators</h1>
	</div>
	
	<div class="adminstrativeeng2">
	
	
	
	
	
	<img src="img/1.jpg" width="13%" align="left" >
	
	<FONT>
<form action="AdminstrativeBoardEN.php" method="GET">
	 <textarea name="comment1" rows="5" cols="40"><?php echo $detail1;?></textarea>
		<h2><?php echo $detail1 ?></h2>
		
		
		<?php
		 
			if (isset($_GET['submit'])) {
				$db_name = "cn342";
				$connection = mysqli_connect("localhost", "root", "12345");
				$db = mysqli_select_db($connection, $db_name);
				$comment1 = $_GET['comment1'];
			

				$sql = "UPDATE adminstrativeboardengcomment SET detail1= '$comment1' WHERE id = 1";

				if (mysqli_query($connection, $sql)){
					//echo "Record updated successfully";
				} else {
					printf("Error updating record: %s", mysqli_error($connection));
				}
				
				mysqli_query($connection, "Set Names UTF8");
			}
		
		?>






</FONT>


		</div>
		
		<div id ="one">
	
	<div class="adminstrativeeng2">
	
	
	
	
	<img src="img/2.jpg" width="13%" align="left" >
	
	<FONT>

 
<form action="AdminstrativeBoardEN.php" method="GET">
	 <textarea name="comment2" rows="5" cols="40"><?php echo $detail2;?></textarea>
		<h2><?php echo $detail2 ?></h2>
		
		
		<?php
		 
			if (isset($_GET['submit'])) {
				$db_name = "cn342";
				$connection = mysqli_connect("localhost", "root", "12345");
				$db = mysqli_select_db($connection, $db_name);
				$comment2 = $_GET['comment2'];
			

				$sql = "UPDATE adminstrativeboardengcomment SET detail2= '$comment2' WHERE id = 1";

				if (mysqli_query($connection, $sql)){
					//echo "Record updated successfully";
				} else {
					printf("Error updating record: %s", mysqli_error($connection));
				}
				
				mysqli_query($connection, "Set Names UTF8");
			}
		
		?>





</FONT>

		</div>
		
		<div id ="one">
	
	<div class="adminstrativeeng2">
	
	
	
	
	<img src="img/3.jpg" width="13%" align="left" >
	
	<FONT>

 
<form action="AdminstrativeBoardEN.php" method="GET">
	 <textarea name="comment3" rows="5" cols="40"><?php echo $detail3;?></textarea>
		<h2><?php echo $detail3 ?></h2>
		
		
		<?php
		 
			if (isset($_GET['submit'])) {
				$db_name = "cn342";
				$connection = mysqli_connect("localhost", "root", "12345");
				$db = mysqli_select_db($connection, $db_name);
				$comment3 = $_GET['comment3'];
			

				$sql = "UPDATE adminstrativeboardengcomment SET detail3= '$comment3' WHERE id = 1";

				if (mysqli_query($connection, $sql)){
					//echo "Record updated successfully";
				} else {
					printf("Error updating record: %s", mysqli_error($connection));
				}
				
				mysqli_query($connection, "Set Names UTF8");
			}
		
		?>



</FONT>

		</div>
		
		<div id ="one">
	
	<div class="adminstrativeeng2">
	
	
	
	
	<img src="img/4.jpg" width="13%" align="left" >
	
	<FONT>

 
<form action="AdminstrativeBoardEN.php" method="GET">
	 <textarea name="comment4" rows="5" cols="40"><?php echo $detail4;?></textarea>
		<h2><?php echo $detail4 ?></h2>
		
		
		<?php
		 
			if (isset($_GET['submit'])) {
				$db_name = "cn342";
				$connection = mysqli_connect("localhost", "root", "12345");
				$db = mysqli_select_db($connection, $db_name);
				$comment4 = $_GET['comment4'];
			

				$sql = "UPDATE adminstrativeboardengcomment SET detail4= '$comment4' WHERE id = 1";

				if (mysqli_query($connection, $sql)){
					//echo "Record updated successfully";
				} else {
					printf("Error updating record: %s", mysqli_error($connection));
				}
				
				mysqli_query($connection, "Set Names UTF8");
			}
		
		?>

</FONT>

		</div>
		
		<div id ="one">
	
	<div class="adminstrativeeng2">
	
	
	
	
	<img src="img/5.jpg" width="13%" align="left" >
	
	<FONT>

 
<form action="AdminstrativeBoardEN.php" method="GET">
	 <textarea name="comment5" rows="5" cols="40"><?php echo $detail5;?></textarea>
		<h2><?php echo $detail5 ?></h2>
		
		
		<?php
		 
			if (isset($_GET['submit'])) {
				$db_name = "cn342";
				$connection = mysqli_connect("localhost", "root", "12345");
				$db = mysqli_select_db($connection, $db_name);
				$comment5 = $_GET['comment5'];
			

				$sql = "UPDATE adminstrativeboardengcomment SET detail5= '$comment5' WHERE id = 1";

				if (mysqli_query($connection, $sql)){
					//echo "Record updated successfully";
				} else {
					printf("Error updating record: %s", mysqli_error($connection));
				}
				
				mysqli_query($connection, "Set Names UTF8");
			}
		
		?>



</FONT>
<br><br><br><br><br><br><br><br>
<a href="http://127.0.0.1/tai/TU-Pattaya-admin/AdminstrativeBoardEN/AddNews.php">
	<button type="button" >เเก้ไขรูปภาพ</button>
</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<input type="submit" name="submit" value="เเก้ไข" onclick="insert()" >  

		</div>


	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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