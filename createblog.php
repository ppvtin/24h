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
                            <span>Welcome, <h2 style="display: inline-block;">Amin</h2></span>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section active">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li class="active-on-hover"><a href="createblog.php"><i class="fa fa-edit"></i>
                                        Bài Viết </a></li>
                                <li class="active-on-hover"><a href="#"><i class="fa fa-edit"></i>
                                        Products Category </a>
                                </li>
                                <li class="active-on-hover"><a href="#"><i
                                            class="fa fa-edit"></i>
                                        Products Manufacturer
                                    </a></li>
                                <li class="active-on-hover"><a href="#"><i class="fa fa-edit"></i>
                                        Orders
                                    </a></li>
                                <li class="active-on-hover"><a href="#"><i class="fa fa-edit"></i>
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
            <div class="right_col" role="main" style="min-height: 3940px;">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Admin form</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add new category form</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <form class="form-horizontal form-label-left" action="save.php" method="POST" enctype="multipart/form-data">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tiêu đề bài viết
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" required="required" name="title"
                                                    class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Hình ảnh
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" required="required" name="pic"
                                                    class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Nội dung bài viết
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="content"
                                                    class="form-control ">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <input type="submit" class="btn btn-primary pull-right" style="cursor: pointer;" value="Save">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
    <script>
        $(document).ready(function () {
            $('.active-on-hover').hover(function () {
                $(this).addClass('current-page');
            }, function () {
                $(this).removeClass('current-page');
            });
        });
    </script>
    <script src="https://cdn.tiny.cloud/1/91a6qha6z3mbo2mwp0627d82tozx1s5qvy4qi9fm5z4fpvtc/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'input[name="content"]'
        });
    </script>
</body>

</html>