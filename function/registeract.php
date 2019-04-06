<?php
include '../assets/config/config.php';
if(isset($_POST['finish'])){
 if(isset($_FILES['avatar']['name']) && ($_FILES['avatar']['name']!="")){
   $size=$_FILES['avatar']['size'];
   $temp=$_FILES['avatar']['tmp_name'];
   $type=$_FILES['avatar']['type'];
   $avatar_name=$_FILES['avatar']['name'];
   $imgExt = strtolower(pathinfo($avatar_name,PATHINFO_EXTENSION));
   $id = $_POST['id'];
   $name = $_POST['name'];
   $uname = $_POST['uname'];
   $pass = $_POST['pass'];
   $job = $_POST['jobb'];
   $ke = $_POST['ke'];


   if($job == "admin"){
     $regadmin = mysqli_query($conn, "INSERT INTO p_admin(id,name,uname,pass,level) VALUES ('$id', '$name', '$uname', '$pass', '$job')");
     $avatar = "avatar"."$id".".".$imgExt;
     move_uploaded_file($temp,"../assets/img/admin/$avatar");
     $update=mysqli_query($conn,"UPDATE p_admin SET img='$avatar', locimg='../assets/img/admin/$avatar' where name='$name'");
     header("location: ../login.html");
   }else if($job == "teacher"){
     $regteacher = mysqli_query($conn, "INSERT INTO p_teacher(id,name,uname,pass,level,ke) VALUES ('$id', '$name', '$uname', '$pass', '$job', '$ke')");
     $avatar = "avatar"."$id".".".$imgExt;
     move_uploaded_file($temp,"../assets/img/teacher/$avatar");
     $update=mysqli_query($conn,"UPDATE p_teacher SET img='$avatar', locimg='../assets/img/admin/$avatar' where name='$name'");
     header("location: ../login.html");
   }

   //rename upload file
   //$avatar = "avatar"."$id".".".$imgExt;
   //unlink("../assets/img/admin/".$avatar);
   //up img to folder
   //move_uploaded_file($temp,"../assets/img/admin/$avatar");
  // $update=mysqli_query($conn,"UPDATE p_admin SET img='$avatar', locimg='../assets/img/admin/$avatar' where name='$name'");
  // mysqli_close();

 }
}
?>
