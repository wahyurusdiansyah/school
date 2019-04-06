<?php
session_start();
include '../assets/config/config.php';

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$login_student = mysqli_query($conn, "select * from p_student where uname='$uname' and pass='$pass'");
$login_teacher = mysqli_query($conn, "select * from p_teacher where uname='$uname' and pass='$pass'");
$login_admin = mysqli_query($conn, "select * from p_admin where uname='$uname' and pass='$pass'");

if(mysqli_num_rows($login_student)>0){
	$no = 1;
	while($data = mysqli_fetch_array($login_student)){
		if($data['level']=="student"){
			$_SESSION['id'] = $data['id'];
			$_SESSION['name'] = $data['name'];
			$_SESSION['uname'] = $uname;
			header("location:../student/index.php");
		}
		$no++;
	}
}else if(mysqli_num_rows($login_teacher)>0){
	$no = 1;
	while($data1 = mysqli_fetch_array($login_teacher)){
		if($data1['level']=="teacher"){
			$_SESSION['id'] = $data1['id'];
			$_SESSION['name'] = $data1['name'];
			$_SESSION['uname'] = $uname;
			$_SESSION['ke'] = $data1['ke'];
			header("location:../teacher/index.php");
		}
		$no++;
	}
}else if(mysqli_num_rows($login_admin)>0){
	$no = 1;
	while($data2 = mysqli_fetch_array($login_admin)){
		if($data2['level']=="admin"){
			$_SESSION['id'] = $data2['id'];
			$_SESSION['name'] = $data2['name'];
			$_SESSION['uname'] = $uname;
			header("location:../admin/index.php");
		}
		$no++;
	}
}

?>
