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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

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
			
 <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
								 <div class="card">
                                    <div class="card-header">
                                        <strong>University</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">University</label>
                                            <input type="text" id="university" placeholder="Enter your company name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Code University</label>
                                            <input type="text" id="codeuniversity" placeholder="DE1234567890" class="form-control">
                                        </div>
                                      <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">City</label>
                                                   
                                                    <select name="city" id="city" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                
                                                </div>
                                            </div>
                                      </div>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                                              <div class="card">
                                    <div class="card-header">Khoa Viện</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Information</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
										<div class="form-group">
                                            <label for="vat" class=" form-control-label">Code University</label>
                                            <input type="text" id="codeuniversity" placeholder="DE1234567890" class="form-control">
                                        </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Mã Khoa</label>
                                                <input id="academyid" name="academyid" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the academy id" data-val-cc-number="Please enter a academy id"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
										        <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Tên Khoa</label>
                                                <input id="academyname" name="academyname" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="academyname" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true">
												</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="salary" class="control-label mb-1">Cocre</label>
                                                <input id="socre" name="socre" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                                            </div>
											 
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Submit</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending�</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
						
                            </div>
                     
                       
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright � Admin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
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