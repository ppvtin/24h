<?php
	function saveImage($pic, $id) {
		$errors=array();
	    $allowed_ext= array('jpg','jpeg','png','gif');
	    $file_name =$pic['name'];
	    $file_ext = strtolower( end(explode('.',$file_name)));


	    $file_size=$pic['size'];
	    $file_tmp= $pic['tmp_name'];

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';
	    }
	    if(empty($errors))
	    {
	       if( move_uploaded_file($file_tmp, 'images/'. $id))
	       {
	       		return TRUE;
	       }
	    }
	    return FALSE;
	}
    if (isset($_POST['title']) && isset($_FILES['pic']) && isset($_POST['content'])) {
        $title = $_POST['title'];
        $pic = $_FILES['pic'];
        $content = $_POST['content'];
        $connect = new mysqli('us-cdbr-east-02.cleardb.com', 'b3f45e08fe46ae', '55c9f49d', 'heroku_6485ee814dc37c2');
        if ($connect->connect_error)
        	echo '<script>alert(\'Không kết nối đến cơ sở dữ liệu\');window.location.href = \'http://localhost:81/24h/createblog.php\'</script>';
        else {
        	$sql = 'insert into blog(title, content) values(\''.$title.'\', \''.$content.'\')';
        	if ($connect->query($sql) === TRUE) {
        		$id = $connect->insert_id;
        		if (saveImage($pic, $id) === TRUE) {
        			echo '<script>alert(\'Lưu thành công\');window.location.href = \'http://localhost:81/24h/home.php\'</script>';
        		}
        	}
        	echo '<script>alert(\'Lưu không thành công\');window.location.href = \'http://localhost:81/24h/createblog.php\'</script>';
        }
    } else {
    	echo "test";
    }
?>
