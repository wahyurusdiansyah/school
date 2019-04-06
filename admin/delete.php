<?php
include "../assets/config/config.php";
$id = $_GET['id'];
$delp_stu = mysqli_query($conn, "DELETE FROM p_student WHERE id='$id'");
$delstu = mysqli_query($conn, "DELETE FROM student WHERE id='$id'");
$delscore = mysqli_query($conn, "DELETE FROM score WHERE id='$id'");
mysqli_close($conn);
header("Location:../admin/index.php");
?>
