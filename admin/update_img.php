<?php
session_start();
include "../assets/config/config.php";
if(isset($_POST['update'])){
 if(isset($_FILES['avatar']['name']) && ($_FILES['avatar']['name']!="")){
   $size=$_FILES['avatar']['size'];
   $temp=$_FILES['avatar']['tmp_name'];
   $type=$_FILES['avatar']['type'];
   $avatar_name=$_FILES['avatar']['name'];
   $imgExt = strtolower(pathinfo($avatar_name,PATHINFO_EXTENSION));
   $name = $_SESSION['name'];
   $id = $_SESSION['id'];
   // rename uploading image

   //rename upload file
   $avatar = "avatar"."$id".".".$imgExt;
   unlink("../assets/img/admin/".$avatar);
   //up img to folder
   move_uploaded_file($temp,"../assets/img/admin/$avatar");
   $update=mysqli_query($conn,"UPDATE p_admin SET img='$avatar', locimg='../assets/img/admin/$avatar' where name='$name'");
   mysqli_close();
   header("Location: setting.php");
 }
}
?>
