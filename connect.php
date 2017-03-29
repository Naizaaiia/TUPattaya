<?php
$con = mysqli_connect("localhost","root","12345"); //ประกาศตัวแปรชื่อ con เก็บค่าการเชื่อมต่อฐานข้อมูล ผ่านทาง localhost ชื่อผู้ใช้ root รหัสผ่าน root
mysqli_select_db($con, "cn342"); // เลือกฐานข้อมูลในระบบ DB เป็น user แล้วสั่งเชื่อมต่อฐานข้อมูล
mysqli_query($con, "SET NAMES utf8"); // สั่งการเชื่อมต่อฐานข้อมูลเป็นภาษา UTF8
?>