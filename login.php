<?php
	if (isset($_POST['txtUser']) && isset($_POST['txtPass'])) {
		$user = $_POST['txtUser'];
		$hash = md5($_POST['txtPass']);
		$connect = new mysqli('us-cdbr-east-02.cleardb.com', 'b3f45e08fe46ae', '55c9f49d', 'heroku_6485ee814dc37c2');
    	if ($connect->connect_error)
       		echo '<script>alert(\'Không kết nối đến cơ sở dữ liệu\');window.location.href = \'http://localhost:81/24h/edit.php\'</script>';
       	else {
       		$sql = 'select * from admin where adname = \'' .$user . '\' and adpass = \'' . $hash .'\'';
       		$result = $connect->query($sql);
       		if ($result->num_rows === 1) {
       			session_start();
       			$jsonStr = json_encode($result->fetch_assoc());
       			$jsonObj = json_decode($jsonStr);
       			$key = 'adname';
       			$_SESSION['admin'] = $jsonObj->$key;
       			echo '<script>alert(\'đăng nhập thành công\');window.location.href = \'http://localhost:81/24h/home.php\'</script>';
       		} else {
       			echo '<script>alert(\'đăng nhập không thành công\');window.location.href = \'http://localhost:81/24h/loginadmin.html\'</script>';
       		}
       	}
	}
?>