<?php
/**
 * Created by PhpStorm.
 * User: phamphuong
 * Date: 10/09/2018
 * Time: 21:40
 */
define('app_path','/cv/hechuyengia/frontend');
define('app_default',__DIR__);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hệ chuyên gia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?= app_path ?>/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?= app_path ?>/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?= app_path ?>/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= app_path ?>/css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?= app_path ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= app_path ?>/css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?= app_path ?>/css/style.css">

    <!-- Modernizr JS -->
    <script src="<?= app_path ?>/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="<?= app_path ?>/js/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="<?= app_path ?>/js/jquery.min.js"></script>

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <p class="num">Call: +84 0981914596</p>
                        <ul class="fh5co-social">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-1">
                        <div id="fh5co-logo"><a href="#">Test<span>.</span></a></div>
                    </div>
                    <div class="col-xs-11 text-right menu-1">
                        <ul>
                            <li class="active"><a href="#">Trang chủ</a></li>
                            <li class="has-dropdown">
                                <a href="#">Tin tức</a>
                                <ul class="dropdown">
                                    <li><a href="#">Tuyển dụng</a></li>
                                    <li><a href="#">Tuyển sinh</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Liên hệ</a></li>
                            <li class="btn-cta"><a href="#"><span>Đăng nhập</span></a></li>
                            <li class="btn-cta"><a href="#"><span>Đăng ký</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<?= app_path ?>/images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Tìm kiếm trường đại học, việc làm nhanh chóng</h1>
                            <p>
                                <a class="btn btn-primary btn-lg btn-learn" href="index.php?action=search-university">
                                    <i class="icon-search"></i>Tìm trường đại học
                                </a>
                                <a class="btn btn-primary btn-lg btn-video" href="index.php?action=search-job">
                                    <i class="icon-search"></i> Tìm kiếm việc làm
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="content">
        <?php
            $action = isset($_GET['action'])?$_GET['action']:'';
            switch ($action){
                case 'home':
                    include_once __DIR__.'/frontend/home.php';
                    break;
                case 'search-university':
                    include_once __DIR__.'/frontend/search-university.php';
                    break;
                case 'search-job':
                    include_once __DIR__.'/frontend/search-job.php';
                    break;
                default:
                    include_once __DIR__.'/frontend/home.php';
                    break;

            }

        ?>
    </section>


    <div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Tin tức</h2>
                    <p>Tin tức tuyển sinh từ các trường đại học.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="<?= app_path ?>/images/project-4.jpg" alt=""></a>
                        <div class="blog-text">
                            <h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                            <span class="posted_on">Nov. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="<?= app_path ?>/images/project-2.jpg" alt=""></a>
                        <div class="blog-text">
                            <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                            <span class="posted_on">Nov. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="<?= app_path ?>/images/project-3.jpg" alt=""></a>
                        <div class="blog-text">
                            <h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                            <span class="posted_on">Nov. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="fh5co-started" style="background-image:url(<?= app_path ?>/images/img_bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Đăng ký</h2>
                    <p>Đăng ký để nhận thông tin tuyển sinh từ các trường đại học nhanh nhất.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <p><a href="#" class="btn btn-default btn-lg">Create A Free Course</a></p>
                </div>
            </div>
        </div>
    </div>

    <footer id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 fh5co-widget">
                    <h4>About Learning</h4>
                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <h4>Learning</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Course</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Meetups</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <h4>Learn &amp; Grow</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Handbook</a></li>
                        <li><a href="#">Held Desk</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <h4>Engage us</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Visual Assistant</a></li>
                        <li><a href="#">System Analysis</a></li>
                        <li><a href="#">Advertise</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <h4>Legal</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Find Designers</a></li>
                        <li><a href="#">Find Developers</a></li>
                        <li><a href="#">Teams</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">API</a></li>
                    </ul>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                        <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                    </p>
                    <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>


<!-- jQuery Easing -->
<script src="<?= app_path ?>/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?= app_path ?>/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?= app_path ?>/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="<?= app_path ?>/js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="<?= app_path ?>/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="<?= app_path ?>/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="<?= app_path ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= app_path ?>/js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="<?= app_path ?>/js/main.js"></script>

</body>
</html>


