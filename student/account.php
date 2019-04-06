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
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                        <img src="../assets/img/logo/logo.png" alt="" /><h1><font color="white">Schools</font></h1>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                								<div class="image">
                                  <?php
                                  include "../assets/config/config.php";
                                  $uname = $_SESSION['uname'];
                                  $query = mysqli_query($conn,"SELECT * FROM p_student where uname='$uname'");
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
                                                    <a href="account.php">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
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
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Account</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
			<!-- CONTENT ACCOUNT -->
			<div class="text-center">
            <div class="profile-img">
              <?php
              include "../assets/config/config.php";
              $uname = $_SESSION['uname'];
              $query = mysqli_query($conn,"SELECT * FROM p_student where uname='$uname'");
	            if(mysqli_num_rows($query)>0){
              $no = 1;
              while($data = mysqli_fetch_array($query)){
              ?>
                <img src="<?php echo $data["locimg"];?>" width="250px" style="border-radius:50px" />
                <?php $no++; } ?>
                  			<?php } ?>

                            </div>
                            <div class="container1">
                              <?php
                              $name = $_SESSION['name'];
                              $acc = mysqli_query($conn,"SELECT * FROM student where name='$name'");
                	            if(mysqli_num_rows($acc)>0){
                              $noo = 1;
                              while($dataacc = mysqli_fetch_array($acc)){
                              ?>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="id-hr">
                                            <p><font size="5px" color="red"><b>学号</b></font><br /><?php echo $dataacc["id"];?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="name-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><font size="5px" color="red"><b>姓名</b></font><br /><?php echo $dataacc["name"];?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="old-hr">
                                            <p><font size="5px" color="red"><b>年龄</b></font><br /><?php echo $dataacc["old"];?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="sex-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><font size="5px" color="red"><b>性别</b></font><br /><?php echo $dataacc["sex"];?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="class-hr">
                                            <p><font size="5px" color="red"><b>班级</b></font><br /><?php echo $dataacc["class"];?></p>
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-lg-12">
                                        <button onclick="window.location.href = 'setting.php';" style="font-size:24px">Setting<i class="material-icons">settings</i></button>
                                    </div>
                                </div>
                            </div>
                            <?php $noo++; } ?>
                                    <?php } ?>
					</div>
			</div>
			<!--END CONTENT ACCOUNT -->


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
