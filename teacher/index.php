<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Title Page-->
    <title>School</title>
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/favicon.ico">
    <!-- Fontfaces CSS-->
        <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<?php
session_start();
?>
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                  <div class="header__logo">
                      <img src="../assets/img/logo/logo.png" alt="" /><h1><font color="white"> Schools</font></h1>
                  </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                							<div class="image">
                                <?php
                                include "../assets/config/config.php";
                                $uname = $_SESSION['uname'];
                                $query = mysqli_query($conn,"SELECT * FROM p_teacher where uname='$uname'");
                                if(mysqli_num_rows($query)>0){
                                $no = 1;
                                while($data = mysqli_fetch_array($query)){
                                ?>

                                  <img src="<?php echo $data["locimg"];?>" alt="<?php echo $_SESSION['name']; ?>" />
                                <?php $no++; } ?>
                                <?php } ?>
                                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?php echo $_SESSION['name']; ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                                <div class="account-dropdown__item">
                                                    <a href="setting.php">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                    <div class="account-dropdown__footer">
                                        <a href="../function/logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span"></span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span><?php echo $_SESSION['name']; ?></span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">data table</h3>
                            <div class="table-responsive table-responsive-data2">
                              <?php
                                $name = $_SESSION['name'];
                                include "../assets/config/config.php";
                                $query = mysqli_query($conn,"SELECT student.id,
                                  student.name, student.old, student.sex,
                                  student.class, score.yuwen, score.shuxue,
                                  score.english, score.zh, score.grade
                                  FROM student INNER JOIN score
                                  ON student.id=score.id where student.name=score.name ;");
                              ?>
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                          <th>学号</th>
                                          <th>姓名</th>
                                          <th>年龄</th>
                                          <th>性别</th>
                                          <th>班级</th>
                                          <?php
                                          $class = $_SESSION['ke'];
                                          if($class == "yuwen"){
                                            ?>
                                            <th>语文</th>
                                            <?php
                                          }else if($class == "shuxue"){
                                            ?>
                                            <th>数学</th>
                                            <?php
                                          }else if($class == "english"){
                                            ?>
                                            <th>英文</th>
                                            <?php
                                          }else if($class == "zh"){
                                            ?>
                                            <th>中文</th>
                                            <?php
                                          }
                                           ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if(mysqli_num_rows($query)>0){ ?>
                    										<?php
                    											$no = 1;
                    											while($data = mysqli_fetch_array($query)){
                    										?>
                                        <tr class="tr-shadow">
                                          <td><?php echo $data["id"];?></td>
                                          <td><?php echo $data["name"];?></td>
                                          <td><?php echo $data["old"];?></td>
                                          <td><?php echo $data["sex"];?></td>
                                          <td><?php echo $data["class"];?></td>
                                          <?php
                                            if($class == "yuwen"){
                                              ?>
                                              <td><?php echo $data["yuwen"];?></td>
                                              <?php
                                            }else if($class == "shuxue"){
                                              ?>
                                              <td><?php echo $data["shuxue"];?></td>
                                              <?php
                                            }else if($class == "english"){
                                              ?>
                                              <td><?php echo $data["english"];?></td>
                                              <?php
                                            }else if($class == "zh"){
                                              ?>
                                              <td><?php echo $data["zh"];?></td>
                                              <?php
                                            }else
                                          ?>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button onclick="window.location.href='update.php?id=<?php echo $data['id']?>'" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <?php $no++; } ?>
                    					<?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Vendor JS       -->
    <script src="../assets/vendor/animsition/animsition.min.js"></script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
