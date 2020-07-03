<?php 
	$queries = array();
	parse_str($_SERVER['QUERY_STRING'], $queries);
    $connect = new mysqli('us-cdbr-east-02.cleardb.com', 'b3f45e08fe46ae', '55c9f49d', 'heroku_6485ee814dc37c2');
    if ($connect->connect_error)
        echo '<script>alert(\'Không kết nối đến cơ sở dữ liệu\');window.location.href = \'http://localhost:81/24h/allblog.php\'</script>';
    else {
    	$sql = "delete from blog where id = " .$queries['id'];
    	if ($connect->query($sql) === TRUE)
        	echo '<script>alert(\'Đã xóa thành công!\');window.location.href = \'http://localhost:81/24h/allblog.php\'</script>';
        else
        	echo '<script>alert(\'Xóa bài viết không thành công!\');window.location.href = \'http://localhost:81/24h/allblog.php\'</script>';
    }
?>