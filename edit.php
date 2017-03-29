<?php

	$text1 = $_POST['comment1'];
	$text2 = $_POST['comment2'];
	$text3 = $_POST['comment3'];
	$text4 = $_POST['comment4'];
	$text5 = $_POST['comment5'];
	
	$db = mysqli_connect("localhost","root","12345","cn342");
	$sql = "Select from adminstrativeboardth";
	$result = mysqli_query("$db","$sql");
	
	
?>