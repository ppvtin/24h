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
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Products list</h2>
                                    <a class="btn btn-primary pull-right" style="color: #E7E7E7;"
                                        href="/24h/createblog.php">Bài viết mới</a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="table-responsive">
                                        <table class="table table-striped jambo_table bulk_action">
                                            <thead>
                                                <tr class="headings">
                                                    <th>
                                                        <input type="checkbox" id="check-all" class="flat">
                                                    </th>
                                                    <th class="column-title">STT </th>
                                                    <th class="column-title">Tiêu đề </th>
                                                    <th class="column-title">Hình ảnh </th>
                                                    <th class="column-title">Nội dung </th>
                                                    <th class="column-title no-link last"><span
                                                            class="nobr">Action</span>
                                                    </th>
                                                    <th class="bulk-actions" colspan="7">
                                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk
                                                            Actions ( <span class="action-cnt"> </span> ) <i
                                                                class="fa fa-chevron-down"></i></a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $connect = new mysqli('us-cdbr-east-02.cleardb.com', 'b3f45e08fe46ae', '55c9f49d', 'heroku_6485ee814dc37c2');
                                                if ($connect->connect_error) {
                                                    echo "404";
                                                } else {
                                                    $sql = "select * from blog";
                                                    $result = $connect->query($sql);
                                                    $i = 1;
                                                    if ($result->num_rows > 0) {
                                                    // output data of each row
                                                        while($row = $result->fetch_assoc()) {
                                                            echo '<tr class="even pointer">';
                                                                echo '<td class="a-center "><input type="checkbox" class="flat" name="table_records"></td>';
                                                                echo '<td>' . $i++ . '</td>';
                                                                echo '<td>' . $row['title'] . '</td>';
                                                                echo '<td>' . '<img src="/24h/images/' . $row['id'] .'" width="50px" height="32px" alt="error"></td>';
                                                                echo '<td>' . substr($row['content'], 0, 50) . '</td>';
                                                                echo '<td><a href="' . '/24h/edit.php?id=' . $row['id'] . '">Edit</a> | <a href="' . '/24h/delete.php?id=' . $row['id'] . '"class="btnDelete">Delete</a></td>';
                                                            echo '</tr>';
                                                        }
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                    $connect->close();
                                                }
                                            ?>

                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
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
        $('.active-on-hover').hover(function () {
            if (!$(this).hasClass('actual'))
                $(this).addClass('current-page');
        }, function () {
            if (!$(this).hasClass('actual'))
                $(this).removeClass('current-page');
        });

        $(document).ready(function() {
            $('.btnDelete').click(function(e) {
                if (!confirm('Chắn chắn muốn xóa bài viết này ?')) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>

</html>