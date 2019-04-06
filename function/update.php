<?php

include "../assets/config/config.php";
$xuehao = $_POST['xuehao'];
$class = $_POST['class'];
$yuwen = $_POST['yuwen'];
$shuxue = $_POST['shuxue'];
$english = $_POST['english'];
$zh = $_POST['zh'];

if($class == "yuwen"){
  $update = mysqli_query($conn, "UPDATE score SET yuwen='$yuwen' where id = '$xuehao'");
}else if($class == "shuxue"){
  $update = mysqli_query($conn, "UPDATE score SET shuxue='$shuxue' where id = '$xuehao'");
}else if($class == "english"){
  $update = mysqli_query($conn, "UPDATE score SET english='$english' where id = '$xuehao'");
}else if($class == "zh"){
  $update = mysqli_query($conn, "UPDATE score SET zh='$zh' where id = '$xuehao'");
}

    // $update = mysqli_query($conn, "UPDATE
    //   score
    //   INNER JOIN
    //   student
    //   ON
    //   score.id = student.id
    //   INNER JOIN
    //   p_student
    //   ON
    //   score.id = p_student.id
    //   SET
    //   score.yuwen = '$yuwen', score.shuxue = '$shuxue', score.english='$english',
    //   score.zh = '$zh' where score.id = '$xuehao';");

mysqli_close($conn);
header("location:../teacher/index.php");

?>
