<?php
include "../assets/config/config.php";

$id = $_POST['id'];
$name = $_POST['name'];
$old = $_POST['old'];
$sex = $_POST['sex'];
$class = $_POST['class'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$level = "student";

$addp_student = mysqli_query($conn, "INSERT INTO
  p_student(id,name,uname,pass,level)
  VALUES ('$id', '$name', '$uname', '$pass', '$level');");

$addstudent = mysqli_query($conn, "INSERT INTO
  student(id,name,old,sex,class)
  VALUES ('$id', '$name', '$old', '$sex', '$class');");

$addscore = mysqli_query($conn, "INSERT INTO
  score(id,name)
  VALUES ('$id', '$name');");
mysqli_close($conn);
header("location:../admin/index.php");
?>
