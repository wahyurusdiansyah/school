<?php
include "../assets/config/config.php";

$id = $_POST['id'];
$name = $_POST['name'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$level = "teacher";
$ke = $_POST['ke'];

$add = mysqli_query($conn, "INSERT INTO
  p_teacher(id,name,uname,pass,level,ke)
  VALUES ('$id', '$name', '$uname', '$pass', '$level', '$ke');");
mysqli_close($conn);
header("location:../admin/index.php");
?>
