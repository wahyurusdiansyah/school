<?php
session_start();
include '../assets/config/config.php';
if(isset($_POST['passstu'])){
		$password_lama			= $_POST['oldpass'];
		$password_baru			= $_POST['newpass'];

		$cek 			= mysqli_query($conn, "SELECT pass FROM p_student WHERE pass='$password_lama'");

		if($cek->num_rows){
					$uname = $_SESSION['uname'];
					$update 		= mysqli_query($conn, "UPDATE p_student SET pass='$password_baru' WHERE uname='$uname'");
					mysqli_close($conn);
					header("Location:../student/setting.php");
		}
	}else if(isset($_POST['passteach'])){
			$password_lama			= $_POST['oldpass'];
			$password_baru			= $_POST['newpass'];

			$cek 			= mysqli_query($conn, "SELECT pass FROM p_teacher WHERE pass='$password_lama'");

			if($cek->num_rows){
						$uname = $_SESSION['uname'];
						$update 		= mysqli_query($conn, "UPDATE p_teacher SET pass='$password_baru' WHERE uname='$uname'");
						mysqli_close($conn);
						header("Location:../teacher/setting.php");
			}
		}else if(isset($_POST['passadm'])){
				$password_lama			= $_POST['oldpass'];
				$password_baru			= $_POST['newpass'];

				$cek 			= mysqli_query($conn, "SELECT pass FROM p_admin WHERE pass='$password_lama'");

				if($cek->num_rows){
							$uname = $_SESSION['uname'];
							$update 		= mysqli_query($conn, "UPDATE p_admin SET pass='$password_baru' WHERE uname='$uname'");
							mysqli_close($conn);
							header("Location:../teacher/setting.php");
				}
			}
?>
