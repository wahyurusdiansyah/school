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
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Setting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
			<!-- CONTENT ACCOUNT -->
			<div class="main-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Change Password</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="../function/change_pass.php" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="oldpass" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="oldpass" name="oldpass" placeholder="Enter Password..." class="form-control">
                                                    <span class="help-block">Please enter your Password</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="newpass" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="newpass" name="newpass" placeholder="Enter New Password..." class="form-control">
                                                    <span class="help-block">Please enter your new password</span>
                                                </div>
                                            </div>
											<button type="submit" name="passteach" id="passteach" class="btn btn-primary btn-sm">
												<i class="fa fa-dot-circle-o"></i> Submit
											</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update Avatar</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="update_img.php" method="post" class="form-horizontal" enctype="multipart/form-data">
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="newpass" class=" form-control-label">Select Avatar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="avatar" name="avatar" class="form-control">
                                                </div>
                                            </div>
											<button type="submit" name="update" id="update" class="btn btn-primary btn-sm">
												<i class="fa fa-dot-circle-o"></i> Submit
											</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
