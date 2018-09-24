<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="template/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="template/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="template/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="template/admin/css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="template/admin/images/icon/logo.png" alt="Cool Admin" />                </a>            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="admin.php">Dashboard 1</a>
                                </li>
                               
                            </ul>
                        </li>

                        <li>
                            <a href="university.php">
                                <i class="fas fa-table"></i>University</a>
                        </li>
                        <li>
                            <a href="company.php">
                                <i class="far fa-check-square"></i>Company</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">

                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
		
		 <!-- PAGE CONTAINER-->
        <div class="page-container">
		<!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>                                </button>
                            </form>
                            <div class="header-button">
                              <div class="noti-wrap"></div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="template/admin/images/icon/avatar-01.jpg" alt="John Doe" />                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="template/admin/images/icon/avatar-01.jpg" alt="John Doe" />                                                    </a>                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>                                                </div>
                                          </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
			
	<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">recent reports</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">products</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">char by %</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>products</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>services</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">University</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
										  <tr> 
										  		<th >STT</th>
                                                <th>University Name</th>
												<th class="text-right">City</th>
                                                <th >Academy</th>
                                                <th class="text-right">Socre</th>
                                                
                                            </tr>
										
                                        </thead>
                                        <tbody>
                                         <?php
										
										$ketnoi=mysqli_connect("localhost","root","123456","test") or die ("Not connect");
		   						        mysqli_set_charset($ketnoi,'utf8');
										$num=0;
										$select1="select * from truong_khoa ";
										$chay1=mysqli_query($ketnoi,$select1);
										while($row1=mysqli_fetch_array($chay1))
										{
										$a=$row1['id_truong'];
										$b=$row1['id_khoa'];
										$num++;
										?>
											<tr>
											<?php
										$select2="select * from university where id=$a";
										$chay2=mysqli_query($ketnoi,$select2);
										while($row2=mysqli_fetch_array($chay2))
										{
										$c=$row2['codecity'] 
										?> <td ><?php echo $num ?></td>
											<td><?php echo $row2['nameUnversity'] ?></td>
											<td width="50px"><?php 
										$select4="select * from city where id=$c";
										$chay4=mysqli_query($ketnoi,$select4);
										while($row4=mysqli_fetch_array($chay4))
										{
											echo $row4['namecity']; }?></td>
										<?php } ?>
										<?php
										$select3="select * from academy where id=$b";
										$chay3=mysqli_query($ketnoi,$select3);
										while($row3=mysqli_fetch_array($chay3))
										{
										?>
											 <td ><?php echo $row3['nameAcademy'] ?></td>
										<?php }?>
											 <td align="left"><?php echo $row1['diem'] ?></td>
											 
											</tr>
											<?php  }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      </div>
					  <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Company</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
										  <tr> 
										  		<th >STT</th>
                                                <th>Company Name</th>
												<th class="text-right">City</th>
                                                <th >Job</th>
                                                <th class="text-right">Salary</th>
                                                
                                            </tr>
										
                                        </thead>
                                        <tbody>
                                         <?php
										
										$ketnoi=mysqli_connect("localhost","root","123456","test") or die ("Not connect");
		   						        mysqli_set_charset($ketnoi,'utf8');
										$select1="select * from congviec ";
										$chay1=mysqli_query($ketnoi,$select1);
										while($row1=mysqli_fetch_array($chay1))
										{
										$a=$row1['id_company'];
										$num++;
										?>
											<tr>
											<?php
										$select2="select * from company where id=$a";
										$chay2=mysqli_query($ketnoi,$select2);
										while($row2=mysqli_fetch_array($chay2))
										{
										$c=$row2['codecity'] 
										?> <td ><?php echo $num ?></td>
											<td><?php echo $row2['companyname'] ?></td>
											<td width="50px"><?php 
										$select4="select * from city where id=$c";
										$chay4=mysqli_query($ketnoi,$select4);
										while($row4=mysqli_fetch_array($chay4))
										{
											echo $row4['namecity']; }?></td>
										<?php } ?>
				
											 <td align="left"><?php echo $row1['name'] ?></td>
											  <td align="left"><?php echo $row1['salary'] ?></td>
											 
											</tr>
											<?php  }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      </div>
                        <div class="row"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © Admin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->	
    </div>
</div>
    <!-- Jquery JS-->
    <script src="template/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="template/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="template/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="template/admin/vendor/slick/slick.min.js">
    </script>
    <script src="template/admin/vendor/wow/wow.min.js"></script>
    <script src="template/admin/vendor/animsition/animsition.min.js"></script>
    <script src="template/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="template/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="template/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="template/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="template/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="template/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="template/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="template/admin/js/main.js"></script>

</body>
</html>