<?php
$conn = mysqli_connect("localhost","root","root","school");
	if(mysqli_connect_errno()){
		echo "can't connect to database : ".mysqli_connect_error();
	}
	mysqli_set_charset($conn,"utf8");
?>
