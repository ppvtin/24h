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
                                    <form class="form-horizontal form-label-left" action="saveedit.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php 
                                            $queries = array();
                                            parse_str($_SERVER['QUERY_STRING'], $queries);
                                            echo $queries['id'];
                                        ?>">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tiêu đề bài viết
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" required="required" name="title"
                                                    class="form-control" value="<?php 
                                                        $queries = array();
                                                        parse_str($_SERVER['QUERY_STRING'], $queries);
                                                        $connect = new mysqli('us-cdbr-east-02.cleardb.com', 'b3f45e08fe46ae', '55c9f49d', 'heroku_6485ee814dc37c2');
                                                        if (!$connect->connect_error) {
                                                            $sql = "select title from blog where id = " .$queries['id'];
                                                        
                                                            $result = $connect->query($sql);
                                                            if ($result->num_rows === 1) {
                                                                $jsonStr = json_encode($result->fetch_assoc());
                                                                $jsonObj = json_decode($jsonStr);
                                                                $key = 'title';
                                                                echo $jsonObj->$key;
                                                            }
                                                        }
                                                    ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Hình ảnh
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" required="required" name="pic"
                                                    class="form-control">
                                                <img src="<?php 
                                                    $queries = array();
                                                    parse_str($_SERVER['QUERY_STRING'], $queries);
                                                    $id = $queries['id'];
                                                    echo '/24h/images/' .$id;
                                                    ?>" width="200px" height="128px" alt="error!">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Nội dung bài viết
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="content"
                                                    class="form-control "value="<?php 
                                                        $queries = array();
                                                        parse_str($_SERVER['QUERY_STRING'], $queries);
                                                        $connect = new mysqli('us-cdbr-east-02.cleardb.com', 'b3f45e08fe46ae', '55c9f49d', 'heroku_6485ee814dc37c2');
                                                        if (!$connect->connect_error) {
                                                            $sql = "select content from blog where id = " .$queries['id'];
                                                        
                                                            $result = $connect->query($sql);
                                                            if ($result->num_rows === 1) {
                                                                $jsonStr = json_encode($result->fetch_assoc());
                                                                $jsonObj = json_decode($jsonStr);
                                                                $key = 'content';
                                                                echo $jsonObj->$key;
                                                            }
                                                        }
                                                    ?>">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <input type="submit" class="btn btn-primary pull-right" style="cursor: pointer;" value="Update">
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