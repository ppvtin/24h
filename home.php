<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="/24h/assets-admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/24h/assets-admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/24h/assets-admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/24h/assets-admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/24h/assets-admin/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/admin/home" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella
                                Alela!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Welcome, <h2 style="display: inline-block;">admin</h2></span>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section active">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li class="active-on-hover"><a
                                        href="createblog.php"><i class="fa fa-edit"></i>
                                        Bài Viết </a></li>
                                <li class="active-on-hover"><a
                                        href="#"><i class="fa fa-edit"></i>
                                        Products Category </a>
                                </li>
                                <li class="active-on-hover"><a
                                        href="#"><i class="fa fa-edit"></i>
                                        Products Manufacturer
                                    </a></li>
                                <li class="active-on-hover"><a
                                        href="#"><i class="fa fa-edit"></i>
                                        Orders
                                    </a></li>
                                <li class="active-on-hover"><a
                                        href="#"><i class="fa fa-edit"></i>
                                        Customers </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    abc
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="clearfix"></div>

                    <div class="row" style="display: block;">
                        <h1 style="text-align: center;">ADMIN HOMEPAGE</h1>
                        <div class="lottie-container" style="height: 500px; margin-top: 20px;"></div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="/24h/assets-admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/24h/assets-admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/24h/assets-admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/24h/assets-admin/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="/24h/assets-admin/vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/24h/assets-admin/build/js/custom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.10/lottie.min.js"></script>
    <script>
        $(document).ready(function () {
            lottie.loadAnimation({
                container: document.querySelector('div.lottie-container'),
                path: '/24h/assets-admin/vendors/data.json',
                renderer: 'svg',
                loop: true,
                autoplay: true,
            });
            $('.active-on-hover').hover(function () {
                $(this).addClass('current-page');
            }, function () {
                $(this).removeClass('current-page');
            });
        });
    </script>
</body>

</html>