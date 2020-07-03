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
    <?php
        session_start();
        if (!isset($_SESSION['admin']))
            echo '<script>location.href = \'/24h/loginadmin.html\'</script>';
        else
            echo '<form action="logout.php" style="display: none" method="post" id="frmLogout"></form>';
        include("banner.html");
    ?>
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