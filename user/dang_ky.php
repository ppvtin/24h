<?php
    if (isset($_POST['txtUser']) && isset($_POST['txtPass'])) {
        if ($_POST['txtUser'] == '' || $_POST['txtPass'] == '') {
            header('Location: http://localhost:81/24h/login_24h.php');
            die();
             echo '<script>alert(\'Không bỏ trống Mật khẩu và Tên Đăng Kí !\');window.location.href = \'http://localhost:81/24h/user/blog_24h.php\'</script>';
        } else {
            $user = $_POST['txtUser'];
            $hash = md5($_POST['txtPass']);
            $conn = new mysqli('localhost', 'root', '', '24h');
            if ($conn->connect_error) {
                echo "something went wrong!";
            } else {
                $sql = 'insert into user values(\'' . $user .'\', \'' . $hash . '\')';
                if ($conn->query($sql) == TRUE) {
                    echo '<script>alert(\'Đăng kí thành công !\');window.location.href = \'http://localhost:81/24h/user/blog_24h.php\'</script>';
                } else {
                   echo '<script>alert(\'Đăng kí không thành công !\');window.location.href = \'http://localhost:81/24h/user/blog_24h.php\'</script>';
                }
            }    
        }
    }
?>